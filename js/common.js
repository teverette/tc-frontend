function showRationale() {
	$(".rationale").removeClass("hide");
	$(".rationale").animate({
	    opacity: "1"
	  }, 500, function() {
	    // Animation complete.
	  });
}

function updateNextStepBtn(o) {
	$(o).addClass("check-verified").removeClass("check-disabled").removeClass("again");
	$(o).html('Next <i class="fas fa-lg fa-caret-right" ></i>');
}

function updateCheckAgainBtn(o) {
	$(o).html('Check again <i class="fas fa-lg fa-caret-right" ></i>').addClass('again');
}

function lockTest() {
	var lochash = location.hash.substr(1);
    if(lochash.indexOf('checked')==0) {
    	if(ChoiceMatrix)
    		ChoiceMatrix.enableButton();
    	if(ClozeDropdown)
    		ClozeDropdown.enableButton();
    	updateNextStepBtn($(".check"));
    	$("input").attr('disabled','disabled');
    	showRationale();
    	return true;
    }
    return false;
}

function hasAlreadyAnswered(q) {
	if(storage[q]!=null) {
		// var questionResponses = storage[q];
		return true;
	} else{
		return false;
	}
}

function highlightCurrentQuiz() {
	if($("body").hasClass("quiz")) {
		var quizQuestion = $("body").data("quiz-question");
		for(i=0;i<quizQuestion; i++) {
			$(".question-bubble").eq(i).addClass("answered");
		}
		$(".question-bubble").eq(quizQuestion).addClass("current");
	}
}

function highlightCorrectQuiz() {
	if($("body").hasClass("quiz")) {
		var quizQuestion = $("body").data("quiz-question");
		$(".question-bubble").eq(quizQuestion).addClass("correct");
		storage["quiz-question-" + quizQuestion]=true;
	}
}

function highlightAllCorrectQuiz() {
	for(i=0; i<5; i++) {
		var isQuestionCorrect = storage.getItem("quiz-question-" + i);
		if(isQuestionCorrect=="true") {
			$(".question-bubble").eq(i).addClass("correct");
		}
	}
}

function getScore() {
	var storage = window.sessionStorage;
	var points = storage["quiz_total"];
	$(".point-value").text(points);
	if(points==1) {
		$(".point-label").text("point");
	} else {
		$(".point-label").text("points");
	}
	
	//return points;
}

function incrementScore() {
	storage["quiz_total"] = 1 + parseInt(storage["quiz_total"]);
	console.log("quiz total: " + storage["quiz_total"]);
	 
}

function increaseScoreBy(points) {
	storage["quiz_total"] = points + parseInt(storage["quiz_total"]);
	console.log("quiz total: " + storage["quiz_total"]);
	
	var p = $(".point-value");
	var position = p.position();

    var points_inc = "+ " + points;
	$("body").append("<span class='points-earned' style='left: 910px;position:absolute; z-index:10000; color:#7D7D7D; top:600px'>"+points_inc+"</span>");
	$(".points-earned").addClass('animate').animate({
	    left: "857px",
	    top: "12px"
	  }, 2000, function() {
	    	$(".points-earned").hide();
	    	$(".point-value").text(storage["quiz_total"]);
	    });
	
}
var storage = window.sessionStorage;

var ChoiceMatrix = {
		name: null,
		numberCorrect: null,
		minReq:null,
		points:0,
		answered:0,
		responseKey: {},
		type:0,
		isQuiz:false,
		retryTotal:0,
		curQuestionIndex:0,
		hintCount:0,
		hintShownTracker: new Map(),
		isMinimumAnswersMet: function() {
			this.answered = $( "input:checked" ).length;
			console.log("answered: " + this.answered);
			return this.answered==this.minReq
		},
		enableButton: function() {
			console.log("minimum check");
			if(this.isMinimumAnswersMet()) {
				console.log("met minimum");
				$(".check-disabled").addClass("check").removeClass("check-disabled");
			}
		},
		
		getResponses: function() {
			this.points=0;
      		var questionLength = questions.length;
			for(i=0; i<questionLength; i++) {
				var name = questions[i];
				var val = $('input[name='+name+']:checked').val();
				// this.curQuestionIndex++;
				ChoiceMatrix.checkResponse(name, val);
    	  	}
      	},
    	isReadyNextStep: function() {
    		// points
    		console.log("How many hints are shown? " + ChoiceMatrix.hintCount);
    		if(this.isQuiz && this.points>0) {
    			increaseScoreBy(this.points);
    		}
    		
    		if(this.isQuiz || this.points==this.numberCorrect) {
    			$("input").attr('disabled','disabled');
    			// save all response to storage
    			var string = JSON.stringify(this.responseKey)
    			storage[this.name] = string;
    			return true;
    	    } else {
    	    	return false;
    	    }
    	}, 
		checkResponse: function(name, selectedAnswer) {
	      	var correctAnswer = answerKey[name];
      		if(correctAnswer==selectedAnswer) {
      			ChoiceMatrix.updateQuestionStateCorrect(name);
				this.points++;
			} else {
				ChoiceMatrix.hintCount++;
				ChoiceMatrix.updateQuestionStateIncorrectHint(name,selectedAnswer);
			}
      		this.responseKey[name] = selectedAnswer;
      	},

		updateQuestionStateCorrect: function(name) {
			if(this.type=="mc") {
				if($('input[name='+name+']:checked').parent().parent().hasClass("correct")) {return}
				$('input[name='+name+']:checked').parent().parent().addClass("correct");
				$('input[name='+name+']:checked').parent()
				.addClass('correct')
				.addClass("fade50")
				.prepend('<span data-question="' + name + '" class="rationale-icon" style="color: #00AA00;position:absolute; right: -630px; top: 7px;" aria-hidden="true"><img src="images/Correct-Flat.png" style="width:30px"/></span>');
			} else {
				if($('input[name='+name+']:checked').parent().hasClass("correct")) {return}
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.addClass("fade50")
					.append('<span data-question="' + name + '" class="rationale-icon" style=" right: -15px; top: 3px;" aria-hidden="true"><img src="images/Correct-Flat.png" style="width:30px"/></span>');
			}
      	},

      	updateQuestionStateIncorrectHint: function(name, selectedAnswer) {
      		
      		var curIndex = ChoiceMatrix.hintCount;
      		console.log("curIndex:" + curIndex);

      		var hintButton = "HintBtn" + curIndex + ".png";
      		if(this.type=="mc") {
      			$('input[name='+name+']:checked').parent().parent().addClass("incorrect").addClass("fade50");
      			$('input[name='+name+']:checked').parent()
				.prepend('<span data-index="' + curIndex + '" data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style="color: #F8E71C;position:absolute; right: -630px; top: 7px; border-radius:100%" aria-hidden="true"><img src="images/'+hintButton+'" style="width:30px"/></span>');
			} else {
				$('input[name='+name+']:checked').parent()
				.addClass('incorrect')
				.addClass("fade50")
				.append('<span data-index="' + curIndex + '" data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style=" color: #F8E71C;position:relative; right: -15px; top: 3px; border-radius:100%" aria-hidden="true"><img src="images/'+hintButton+'" style="width:30px"/></span>');
			}
      	},
      	
      	setToReady: function() {
      		$(".hint-icon").parent().addClass("fade50");
      		updateNextStepBtn($(".check-disabled"));
      	},
      	
      	clearAllHints: function(index) {   
      		if(ChoiceMatrix.isQuiz==true) {return}
      		if(ChoiceMatrix.hintShownTracker.size>=Number.parseInt(ChoiceMatrix.hintCount)) {
      			$(".rationale-sidebar").append("<br/><a onclick='ChoiceMatrix.resetForm();' class='answer-hint-btn'>Ready: Try Again</a>");
    		} else {
    			// find next hint icon
          		for(i=index+1; i<=this.minReq; i++) {
          			if($('*[data-index="'+i+'"]').hasClass('hint-icon')) {
          				$('*[data-index="'+i+'"]').addClass("next-help-icon");
          				$(".rationale-sidebar").append("<br/><a onclick='ChoiceMatrix.showNextHint($(\".next-help-icon\").last());' class='answer-hint-btn'><strong>Answer " + (index+1) + "</strong> Hint</a>");
          				break;
          			}
          		}
    		}
      	},
      	
      	resetForm: function() {
      		$("input").prop('disabled',false);
      		$(".rationale-sidebar").removeClass("correct-status").removeClass("hint-status").empty().hide();
      		$(".fa-times").remove();
      		$(".hint-icon").remove();
      		$(".hint-callout").hide();
      		$("td.incorrect").find("input").prop('checked', false);
      		$("td").removeClass("incorrect").removeClass("fade50");
      		$("label").removeClass("incorrect").removeClass("fade50");
      		$(".check").addClass("check-disabled").removeClass("check");
      		$('.hint').hide();
      		ChoiceMatrix.hintCount=0; 
      		ChoiceMatrix.hintShownTracker=new Map();
      		$(".correct").addClass("fade50");
      		$(".correct input").prop("disabled",true);
      		$(".correct").parent().find("td input").prop("disabled",true);
  
      	},
      	showFirstHint: function() {
    		if($(".hint-icon").length>0) {
    			// $(".hint-icon").first().trigger("click");
    			ChoiceMatrix.showNextHint($(".hint-icon").first());
    			$("input").prop('disabled',true);
    		} 
    	},
    	showHint: function() {
      		$(".hint-icon").fadeIn("600");
      		$(".rationale-icon").fadeIn("600");
    	},
    	
    	showNextHint: function(obj) {
				// $(".rationale-sidebar").removeClass("correct-status").empty().hide();
				var hint_id = $(obj).data("question");
				var index = $(obj).data("index");
				var img = "images/" + "Hint" + index + ".png"; 
				var selected_answer = $(obj).data("selected");
				$(".hint-icon").parent().addClass("fade50");
				// get hint string && add to tip
				var rat_hdr = ChoiceMatrix.isQuiz ? "<h4 class='nearly-there'>Nearly there!</h4>" : "<h4 class='nearly-there'>Not Quite!</h4>";
				var hint_index = "hint_" + hint_id;
				$(".rationale-sidebar").fadeOut(700, function() {
				$(".rationale-sidebar")
					.html("<img src='" + img + "' class='status'/><h4 class='nearly-there'>Not Quite!</h4>" +hintArray[hint_index][selected_answer])
					.addClass("hint-status")
					.fadeIn(600);
					console.log($(obj).data("question"));
					ChoiceMatrix.hintShownTracker.set($(obj).data("question"),"true");
					console.log("size of tracker: " + ChoiceMatrix.hintShownTracker.size);
					ChoiceMatrix.clearAllHints(index);
				});
				$(".split-pane .rationale-sidebar").append('<i class="fas fa-angle-down upper-right-close"></i>').removeClass("minimize-sidebar");
				$(obj).parent().removeClass("fade50");
				
    	},
    	showHintStatus: function(hint_index, selected_answer, img, index) {
    		$(".rationale-sidebar")
			.html("<img src='" + img + "' class='status'/><h4 class='nearly-there'>Not Quite!</h4>" +hintArray[hint_index][selected_answer])
			.addClass("hint-status")
			.fadeIn(600);
    		ChoiceMatrix.clearAllHints(index);
    	},
      	assess: function(includeScore) {
      		// todo add question/answer verification logic
      		ChoiceMatrix.resetForm();
	    	ChoiceMatrix.getResponses();
	    	this.showHint();
	    	this.showFirstHint();
	    	if(this.isReadyNextStep()) {
	    		updateNextStepBtn($(".check-disabled"));
	    	} else {
	    		updateCheckAgainBtn($(".check-disabled"));
    		}
      	},
    	setPreviousResponse: function() {
    		var responseKeyString = storage[this.name];
    		
    		console.log(responseKeyString);
    		this.responseKey = JSON.parse(responseKeyString);
    		
    		for (x in this.responseKey) {
    			console.log(this.responseKey[x]);
    			var $currentSelect = $('input[name='+x+'][value='+this.responseKey[x]+']');
    			$currentSelect.val(this.responseKey[x]);
    			$currentSelect.attr("checked","checked");
    			this.checkResponse(x, this.responseKey[x]);
    		}
    		$("input").attr('disabled','disabled');
    		this.showHint();
	    	this.showFirstHint();
    		updateNextStepBtn($(".check-disabled"));
    	},
		initialize: function(name, minToScore, minToCheck, type) {
			this.name = name;
			this.numberCorrect = minToScore;
			this.minReq = minToCheck;
			this.type = type!=null ? type : "matrix";
		}
  }

var ClozeDropdown = {
	name: null,
	numberCorrect: null,
	minReq:null,
	answered:0,
	points:0,
	responseKey: {},
	isQuiz: false,
	retryTotal:0,
	curQuestionIndex:0,
	hintCount:0,
	hintShownTracker: new Map(),
	isMinimumAnswersMet: function() {
		this.answered=0;
		$(".dd-response").each(function() {
    		  var name = $(this).attr("name");
			  var val = $(this).val();
			  if(val!=null && val!="") {ClozeDropdown.answered++;}
		});
		return this.answered==this.minReq
	},
	enableButton: function() {
		if(this.isMinimumAnswersMet()) {
			$(".check-disabled").addClass("check").removeClass("check-disabled");
		}
	},
	getResponses: function() {
		this.points=0;
		this.curQuestionIndex=0;
		$(".dd-response").each(function() {
				ClozeDropdown.curQuestionIndex++;
    		  var name = $(this).attr("name");
			  var val = $(this).val();
			  ClozeDropdown.checkResponse($(this).parent(), name, val);
		});
	},
	isReadyNextStep: function() {
		// points
		if(this.isQuiz && this.points>0) {
			increaseScoreBy(this.points);
		}
		if(this.isQuiz || this.hintCount==0) {
			$("input").attr('disabled','disabled');
			// save all response to storage
			var string = JSON.stringify(this.responseKey)
			storage[this.name] = string;
			return true;
	    } else {
	    	return false;
	    }
	},
  	
  	clearAllHints: function(index) {    
  		if(ClozeDropdown.isQuiz==true) {return}
  		if(ClozeDropdown.hintShownTracker.size>=Number.parseInt(ClozeDropdown.hintCount)) {
  			$(".rationale-sidebar").append("<br/><a onclick='ClozeDropdown.resetForm();updateCheckAgainBtn($(\".check-disabled\"));' class='answer-hint-btn'>Ready: Try Again</a>");
		} else {
			// find next hint icon
      		for(i=index+1; i<=this.minReq; i++) {
      			if($('*[data-index="'+i+'"]').hasClass('hint-icon')) {
      				$('.next-help-icon').removeClass("next-help-icon");
      				$('*[data-index="'+i+'"]').addClass("next-help-icon");
      				$(".rationale-sidebar").append("<br/><a onclick='ClozeDropdown.showNextHint($(\".next-help-icon\"));' class='answer-hint-btn'><strong>Answer " + (index+1) + "</strong> Hint</a>");
      				break;
      			}
      		}
      		
		}
  	},
  	
	checkResponse: function(o, name, selectedAnswer) {
      	var correctAnswer = answerKey[name];
      	console.log("correctAnswer: " + correctAnswer);
      	console.log("this.hintCount:" + ClozeDropdown.hintCount);

  		
      	if(!correctAnswer && !selectedAnswer) {
			$(o).addClass('clear');
		} else if(correctAnswer==selectedAnswer) {
			if(this.isQuiz) {
				if($('*[data-question="'+name+'"]').hasClass("correct")) {return}
				$('*[data-question="'+name+'"]').addClass('correct').after('<span data-question="' + name + '" class="rationale-icon" style="color: #00AA00;position:relative;right: -10px;" aria-hidden="true"><img src="images/Correct-Flat.png" style="width:30px"/></span>');
				this.points++;
			} else {
				if($('*[data-question="'+name+'"]').hasClass("correct")) {return}
				$('*[data-question="'+name+'"]').addClass('correct').after('<span data-question="' + name + '" class="rationale-icon" style="right: -3px" aria-hidden="true"><img src="images/Correct-Flat.png" style="width:30px"/></span>');
				this.points++;
			}
		}  else {
			ClozeDropdown.hintCount++;
			var hintButton = "HintBtn" + ClozeDropdown.hintCount + ".png";
			if(false) {
				$('*[data-question="'+name+'"]').addClass('incorrect').after('<span data-question="' + name + '" class="hint-icon" style="color: #FED700;position:relative; right: -10px;" style="right: -3px" aria-hidden="true"><img src="images/'+hintButton+'" style="width:30px"/></span>');
			} else {
				$('*[data-question="'+name+'"]').addClass('incorrect').after('<span data-index="' +ClozeDropdown.hintCount + '" data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style="right: -3px" aria-hidden="true"><img src="images/'+hintButton+'" style="width:30px"/></span>');
			}
		}
      	
      	this.responseKey[name] = selectedAnswer;
    	
	},
	resetForm: function() {
		$(".filled").removeClass("disabled-dd");
  		$(".hint-icon").remove();
  		$(".hint-callout").hide();
  		$(".button").removeClass("incorrect");
  		$(".check").addClass("check-disabled").removeClass("check");
  		$('.hint').hide();
  		ClozeDropdown.hintCount=0; 
  		ClozeDropdown.hintShownTracker=new Map();
  		$(".correct").addClass("disabled-dd").addClass("fade50").prop("disabled",true);
  		$(".rationale-sidebar").removeClass("correct-status").removeClass("hint-status").empty().hide();
  		
  	},
  	showFirstHint: function() {
		if($(".hint-icon").length>0) {
			ClozeDropdown.showNextHint($(".hint-icon").first());
			$(".filled").addClass("disabled-dd");
		} 
	},
	showHint: function() {
  		
		$(".hint-icon").show("500");
  		$(".rationale-icon").show("500");
		// find any incorrect answers
		$(".hint-icon").each(function(){
			//$(this).click();
		});
	},
	showNextHint: function(obj) {
			;
			$(".rationale-icon").removeClass("pressed");
			$(".hint-icon").removeClass("pressed");
			var index = $(obj).data("index");
			var img = "images/" + "Hint" + index + ".png"; 
			$(obj).addClass("pressed");
			var hint_id = $(obj).data("question");
			var selected_answer = $(obj).data("selected");
			var hint_index = "hint_" + hint_id;		
			var rat_hdr = "<h4 class='nearly-there'>Not Quite!</h4>";
			$(".rationale-sidebar").fadeOut(700, function() {
				$(".rationale-sidebar")
					.html("<img src='"+img+"' class='status'/>" + rat_hdr + hintArray[hint_index][selected_answer])
					.addClass("hint-status")
					.fadeIn(600);
				ClozeDropdown.hintShownTracker.set($(obj).data("question"),"true");
				console.log("size of tracker: " + ClozeDropdown.hintShownTracker.size);
				ClozeDropdown.clearAllHints(index);
			});
			console.log($(obj).data("question"));
			
	},
	
	showHintStatus: function(hint_index, selected_answer, img, index, rat_hdr) {
		$(".rationale-sidebar")
		.html("<img src='"+img+"' class='status'/>" + rat_hdr + hintArray[hint_index][selected_answer])
		.addClass("hint-status")
		.fadeIn(600);
		ChoiceMatrix.clearAllHints(index);
	},
	
	assess: function() {
		this.resetForm();
		this.getResponses();

		this.showHint();
		this.showFirstHint();
		if(this.isReadyNextStep()) {
			updateNextStepBtn($(".check-disabled"));
		} else {
			// updateCheckAgainBtn($(".check-disabled"));
		}
		
	},
	
	setPreviousResponse: function() {
		var responseKeyString = storage[this.name];
		
		console.log(responseKeyString);
		this.responseKey = JSON.parse(responseKeyString);
		
		for (x in this.responseKey) {
			console.log(this.responseKey[x]);
			var $currentSelect = $('select[name='+x+']');
			$currentSelect.val(this.responseKey[x]);
			var curVal = this.responseKey[x];
			// set value in dropdown

			var text = $(".drop-down-drawer."+x+" .answer-option[data-value="+curVal+"]").text();
			$("a[data-question="+x+"]").text(text);
			this.checkResponse($currentSelect, x, this.responseKey[x]);
		}
		this.showHint();
		this.showFirstHint();
		$(".dropdown-question").addClass("disabled-dd").addClass("filled");
		updateNextStepBtn($(".check-disabled"));
	},
	initialize: function(name, minToScore, minToCheck) {
		this.name = name;
		this.numberCorrect = minToScore;
		this.minReq = minToCheck;
	}
}

function scoreStuff() {
	highlightCorrectQuiz();
	if(points==numberCorrect) {
	  incrementScore();
	}
}

	function showDrawer(o) {
		if($(o).hasClass("disabled-dd")) {
			return;
		}
		$('.hint').hide();
    	ClozeDropdown.resetForm();
    	var curDrawer = $(o).data('drawer-id');
    	var visDrawer = $(".drop-down-drawer:visible").length == 1 ? $(".drop-down-drawer:visible").first().attr('id') : 0;

    	if(curDrawer==visDrawer){
    		$('#'+curDrawer).toggle("slide", { direction: "down" }, 400);
    		$('.dropdown-question').removeClass('selected-dd');
    		contractContent();
    	} else {
    		$(".footer").hide();
    		$(".content").animate({
    		    height: "574"
    		  }, 900, function() {
    		    // Animation complete.
    			  $(".drop-down-drawer:visible").hide("slide", { direction: "down" }, 400);
    	    		$('#'+curDrawer).toggle("slide", { direction: "down" }, 400);
    	    		$('.dropdown-question').removeClass('selected-dd');
    	    		$(o).addClass('selected-dd');
    		});
    		
    		
    	}
 	}

	$(document).on("click",".answer-option", function() {
 	 	var drawerId = $(".selected-dd").data('question');
 	 	var curDrawer = $(".selected-dd").data('drawer-id');
 	 	$('#'+curDrawer+ ' .answer-option').removeClass('selected-dd-response');
		$(".selected-dd").text($(this).text()).addClass('filled');
		$("."+drawerId).val($(this).data("value"));
		
		$(this).addClass('selected-dd-response');
		$('.dropdown-question').removeClass('selected-dd');
		$('#'+curDrawer).hide("slide", { direction: "down" }, 400);
		contractContent();
		ClozeDropdown.enableButton();
	});
	
	$(document).on("click",".upper-right-close", function() {
		$(".split-pane .rationale-sidebar").toggleClass("minimize-sidebar");
	});
	
	function extendContent() {
		$(".footer").hide();
		$(".content").animate({
		    height: "574"
		  }, 900, function() {
		    // Animation complete.
		});
	}
	
	function contractContent() {
		$(".content").animate({
		    height: "474"
		  }, 900, function() {
		    // Animation complete.
		});
		$(".footer").show();
	}
	
	function setCookie(cname, cvalue, exdays) {
	    var d = new Date();
	    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	    var expires = "expires="+d.toUTCString();
	    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
	
	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i = 0; i < ca.length; i++) {
	        var c = ca[i];
	        while (c.charAt(0) == ' ') {
	            c = c.substring(1);
	        }
	        if (c.indexOf(name) == 0) {
	            return c.substring(name.length, c.length);
	        }
	    }
	    return "";
	}
	$(document).on("hover",".rationale-icon", 
		function() {
			$(this).attr("src","images/Rationale-Button Hover.png");
		}
	);
$(document).ready(function() {
	$(".learn .forward-button").html('Next <i class="fas fa-lg fa-caret-right" ></i>');
});
	
var animationDuration=500;
var timeDelay = 0; 	

function showElement(o) {
    console.log("inside hideElement");
	  $(o).fadeIn(animationDuration);
}

function slideUpElement(o) {
	  $(o).effect('slide', { direction: 'up', mode: 'show' }, 500);
}

function showElementsOnSlide2() {
	  timeDelay=animationDuration+50;
	  showElement($(".slide-2 .item-one"));
	  setTimeout(showElement.bind(null,$(".slide-2 .item-two")), timeDelay);
	  timeDelay+=animationDuration+50;
	  setTimeout(showElement.bind(null,$(".slide-2 .item-three")), timeDelay);
}

function hideFooter() {
	$(".footer").hide("slide", { direction: "down" }, 900);
	$(".content").animate({
	    height: "553"
	  }, 900, function() {
	    // Animation complete.
	});
	$(".footer").addClass("active-btn");
}

function showFooter() {
	showElement($(".footer"));
	$(".content").animate({
	    height: "474"
	  }, 900, function() {
	    // Animation complete.
	});
	
}