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
	$(o).html('Next <i class="fas fa-lg fa-angle-right" ></i>');
}

function updateCheckAgainBtn(o) {
	$(o).html('Check again <i class="fas fa-lg fa-angle-right" ></i>').addClass('again');
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
			for(i=0; i<questionLength; i++){
				var name = questions[i];
				var val = $('input[name='+name+']:checked').val();
				ChoiceMatrix.checkResponse(name, val);
    	  	}
      	},
    	isReadyNextStep: function() {
    		// points
    		if(this.isQuiz && this.points>0) {
    			increaseScoreBy(this.points);
    		}
    		if(this.points==this.numberCorrect || this.isQuiz) {
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
				if(false) {
					ChoiceMatrix.updateQuestionStateIncorrect(name);
				} else {
					ChoiceMatrix.updateQuestionStateIncorrectHint(name,selectedAnswer);
				}
			}
      		this.responseKey[name] = selectedAnswer;
      	},

		updateQuestionStateCorrect: function(name) {
			if(this.type=="mc") {
				$('input[name='+name+']:checked').parent().parent().addClass("correct");
				$('input[name='+name+']:checked').parent()
				.addClass('correct')
				.prepend('<span data-question="' + name + '" class="rationale-icon" style="color: #00AA00;position:absolute; right: -630px; top: 7px;" aria-hidden="true"><img src="images/Rationale-Button.png" style="width:30px"/></span>');
			} else {
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.append('<span data-question="' + name + '" class="rationale-icon" style=" right: -15px; top: 3px;" aria-hidden="true"><img src="images/Rationale-Button.png" style="width:30px"/></span>');
			}
      	},

      	updateQuestionStateIncorrect: function(name) {
      		if(this.type=="mc") {
      			$('input[name='+name+']:checked').parent().parent().addClass("incorrect");
      			$('input[name='+name+']:checked').parent()
				.addClass('incorrect')
				.prepend('<span class="hint-icon" style="color: #FED700;position:absolute; right: -630px; top: 7px;" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			} else {
				$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.append('<span class="hint-icon" style="color: #FED700;position:relative; right: -15px; top: 3px;" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			}
      	},
      	updateQuestionStateIncorrectHint: function(name, selectedAnswer) {
      		if(this.type=="mc") {
      			$('input[name='+name+']:checked').parent().parent().addClass("incorrect");
      			$('input[name='+name+']:checked').parent()
				.prepend('<span data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style="color: #F8E71C;position:absolute; right: -630px; top: 7px; border-radius:100%" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			} else {
				$('input[name='+name+']:checked').parent()
				.addClass('incorrect')
				.append('<span data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style=" color: #F8E71C;position:relative; right: -15px; top: 3px; border-radius:100%" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			}
      	},
      	resetForm: function() {
      		$(".rationale-icon").remove();
      		$(".fa-times").remove();
      		$(".hint-icon").remove();
      		$(".hint-callout").hide();
      		$("td").removeClass("incorrect").removeClass("correct");
      		$("label").removeClass("incorrect").removeClass("correct");
      		$(".check").addClass("check-disabled").removeClass("check");
      		$('.hint').hide();
      	},
      	showFirstHint: function() {
    		if($(".hint-icon").length>0) {
    			$(".hint-icon").first().trigger("click");
    		} else if($(".rationale-icon").length>0) {
    			$(".rationale-icon").first().trigger("click");
    		}
    	},
    	showHint: function() {
      		$(".hint-icon").show("500");
      		$(".rationale-icon").show("500");
    		// find any incorrect answers
      		
    		$(".hint-icon").each(function(){
    			$(this).click(function(){
    				$(".rationale-sidebar").removeClass("correct-status").empty();
    				// $(this).addClass("pressed");
    				var hint_id = $(this).data("question");
    				var selected_answer = $(this).data("selected");
    				// get hint string && add to tip
    				var rat_hdr = ChoiceMatrix.isQuiz ? "<h4 class='nearly-there'>Nearly there!</h4>" : "<h4 class='nearly-there'>Not Quite!</h4>";
    				var hint_index = "hint_" + hint_id;				
    				$(".rationale-sidebar")
    					.html("<img src='../images/NotQuite_Symbol.png' class='status'/><h4 class='nearly-there'>Not Quite!</h4>" +hintArray[hint_index][selected_answer])
    					.addClass("hint-status")
    					.show();
    				$(".split-pane .rationale-sidebar").append('<i class="fas fa-angle-down upper-right-close"></i>').removeClass("minimize-sidebar");
    			});
    			$(this).hover(function(){
    				$(this).find("img").attr("src","images/Hint-Button Hover.png");
    				// $(this).addClass("pressed");
    				var hint_id = $(this).data("question");
    				var selected_answer = $(this).data("selected");
    				// get hint string && add to tip
    				var rat_hdr = ChoiceMatrix.isQuiz ? "<h4 class='nearly-there'>Nearly there!</h4>" : "<h4 class='nearly-there'>Not Quite!</h4>";
    				var hint_index = "hint_" + hint_id;				
    				$(".rationale-sidebar")
    					.html("<img src='../images/NotQuite_Symbol.png' class='status'/><h4 class='nearly-there'>Not Quite!</h4>" +hintArray[hint_index][selected_answer])
    					.addClass("hint-status")
    					.show();
    				
    			},function(){
    				$(this).find("img").attr("src","images/Hint-Button.png");
    				$(".rationale-sidebar").removeClass("hint-status").empty();
    				// $(this).removeClass("pressed");
    			});
    		});
    		
    		$(".rationale-icon").each(
				function(){
					$(this).hover(function(){
						$(this).find("img").attr("src","images/Rationale-Button Hover.png");
						$(this).addClass("pressed");
						$(".rationale-sidebar").removeClass("hint-status").empty();
						var rationale_index = "rationale_" + $(this).data("question");			
						$(".rationale-sidebar")
							.html("<img src='../images/StarSymbol.png' class='status'/><h4 class='that-s-it'>That's it!</h4>" +rationaleArray[rationale_index])
							.addClass("correct-status")
							.show();
					},function(){
						$(this).find("img").attr("src","images/Rationale-Button.png");
	    				$(".rationale-sidebar").removeClass("correct-status").empty();
	    				$(this).removeClass("pressed");
	    			});
				$(this).click(function(){
						$(this).addClass("pressed");
						$(".rationale-sidebar").removeClass("hint-status").empty();
						var rationale_index = "rationale_" + $(this).data("question");			
						$(".rationale-sidebar")
							.html("<img src='../images/StarSymbol.png' class='status'/><h4 class='that-s-it'>That's it!</h4>" +rationaleArray[rationale_index])
							.addClass("correct-status")
							.show();
						$(".split-pane .rationale-sidebar").append('<i class="fas fa-angle-down upper-right-close"></i>').removeClass("minimize-sidebar");
				});
			});
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
		$(".dd-response").each(function() {
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
		if(this.points==this.numberCorrect || this.isQuiz) {
			$("input").attr('disabled','disabled');
			// save all response to storage
			var string = JSON.stringify(this.responseKey)
			storage[this.name] = string;
			return true;
	    } else {
	    	return false;
	    }
	},
	checkResponse: function(o, name, selectedAnswer) {
      	var correctAnswer = answerKey[name];
      	console.log("correctAnswer: " + correctAnswer);
      	if(!correctAnswer && !selectedAnswer) {
			$(o).addClass('clear');
		} else if(correctAnswer==selectedAnswer) {
			if(this.isQuiz) {
				$('*[data-question="'+name+'"]').addClass('correct').after('<span data-question="' + name + '" class="rationale-icon" style="color: #00AA00;position:relative;right: -10px;" aria-hidden="true"><img src="images/Rationale-Button.png" style="width:30px"/></span>');
				this.points++;
			} else {
				$('*[data-question="'+name+'"]').addClass('correct').after('<span data-question="' + name + '" class="rationale-icon" style="right: -3px" aria-hidden="true"><img src="images/Rationale-Button.png" style="width:30px"/></span>');
				this.points++;
			}
		}  else {
			if(false) {
				$('*[data-question="'+name+'"]').addClass('incorrect').after('<span data-question="' + name + '" class="hint-icon" style="color: #FED700;position:relative; right: -10px;" style="right: -3px" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			} else {
				$('*[data-question="'+name+'"]').addClass('incorrect').after('<span data-selected="'+selectedAnswer+'" data-question="' + name + '" class="hint-icon" style="right: -3px" aria-hidden="true"><img src="images/Hint-Button.png" style="width:30px"/></span>');
			}
		}
      	
      	this.responseKey[name] = selectedAnswer;
    	
	},
	resetForm: function() {
  		$(".fa-check").remove();
  		$(".rationale-icon").remove();
  		$(".hint-icon").remove();
  		$(".hint-callout").hide();
  		$(".button").removeClass("incorrect").removeClass("correct");
  		$(".check").addClass("check-disabled").removeClass("check");
  		$('.hint').hide();
  	},
  	showFirstHint: function() {
		if($(".hint-icon").length>0) {
			$(".hint-icon").first().trigger("click");
		} else if($(".rationale-icon").length>0) {
			$(".rationale-icon").first().trigger("click");
		}
	},
	showHint: function() {
  		
		$(".hint-icon").show("500");
  		$(".rationale-icon").show("500");
		// find any incorrect answers
		$(".hint-icon").each(function(){
			$(this).hover(
				function(){
					$(".rationale-sidebar").removeClass("correct-status");
					$(".rationale-icon").removeClass("pressed");
					$(".hint-icon").removeClass("pressed");
					$(this).find("img").attr("src","images/Hint-Button Hover.png");
					$(this).addClass("pressed");
					var hint_id = $(this).data("question");
					var selected_answer = $(this).data("selected");
					var hint_index = "hint_" + hint_id;		
					var rat_hdr = ClozeDropdown.isQuiz ? "<h4 class='nearly-there'>Not Quite!</h4>" : "<h4 class='nearly-there'>Not Quite!</h4>";
					$(".rationale-sidebar")
						.html("<img src='images/NotQuite_Symbol.png' class='status'/>" + rat_hdr + hintArray[hint_index][selected_answer])
						.addClass("hint-status")
						.show();
				},function(){
					$(this).find("img").attr("src","images/Hint-Button.png");
					$(".rationale-sidebar").removeClass("hint-status").empty();
					$(this).removeClass("pressed");
			});
			$(this).click(function(){
				$(".rationale-sidebar").removeClass("correct-status");
				$(".rationale-icon").removeClass("pressed");
				$(".hint-icon").removeClass("pressed");
				$(this).addClass("pressed");
				var hint_id = $(this).data("question");
				var selected_answer = $(this).data("selected");
				var hint_index = "hint_" + hint_id;		
				var rat_hdr = "<h4 class='nearly-there'>Not Quite!</h4>";
				$(".rationale-sidebar")
					.html("<img src='images/NotQuite_Symbol.png' class='status'/>" + rat_hdr + hintArray[hint_index][selected_answer])
					.addClass("hint-status")
					.show();
			});
		});
		
		$(".rationale-icon").each(
			function(){
				$(this).hover(function(){
					$(this).find("img").attr("src","images/Rationale-Button Hover.png");
					$(this).addClass("pressed");
					var rationale_index = "rationale_" + $(this).data("question");
					$(".rationale-sidebar")
						.html("<img src='images/StarSymbol.png' class='status'/><h4 class='that-s-it'>That's it!</h4>" + rationaleArray[rationale_index])
						.addClass("correct-status").show();
					},function(){
						$(this).find("img").attr("src","images/Rationale-Button.png");
						$(".rationale-sidebar").removeClass("correct-status").empty();
						$(this).removeClass("pressed");
			});
				$(this).click(function(){
					$(this).addClass("pressed");
					var rationale_index = "rationale_" + $(this).data("question");
					$(".rationale-sidebar")
						.html("<img src='images/StarSymbol.png' class='status'/><h4 class='that-s-it'>That's it!</h4>" + rationaleArray[rationale_index])
						.addClass("correct-status").show();
			});
		});
	},
	assess: function() {
		this.resetForm();
		this.getResponses();

		this.showHint();
		this.showFirstHint();
		if(this.isReadyNextStep()) {
			updateNextStepBtn($(".check-disabled"));
		} else {
			updateCheckAgainBtn($(".check-disabled"));
		}
		
	},

	getRationale: function(status) {
  		var status = status!==null ? status : "correct";
  		var label = status=="correct" ? '<i class="fas fa-lg fa-check-circle"></i> Correct!' : '<i class="fas fa-lg fa-times"></i> Not quite!';
  		$('.answer-rationale-reveal').addClass(status);
		var $modal = $('.answer-rationale-reveal');

		$.ajax('rationales/'+this.name+'.html')
		  .done(function(resp){
		    $modal.html(resp).foundation('open');
		    if(status=="correct") {
		    	$('.rationale-icon').attr('src','images/Confetti.png');
			  } else {
				  $('.rationale-icon').attr('src','images/TryAgain.png');
			  }
		    $('.answer-rationale-reveal .title').html(label);
		});
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
		$("input").attr('disabled','disabled');
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
		$('.hint').hide();
    	ClozeDropdown.resetForm();
    	var curDrawer = $(o).data('drawer-id');
    	var visDrawer = $(".drop-down-drawer:visible").length == 1 ? $(".drop-down-drawer:visible").first().attr('id') : 0;

    	if(curDrawer==visDrawer){
    		$('#'+curDrawer).toggle("slide", { direction: "down" }, 400);
    		$('.dropdown-question').removeClass('selected-dd');
    	} else {
    		$(".drop-down-drawer:visible").hide("slide", { direction: "down" }, 400);
    		$('#'+curDrawer).toggle("slide", { direction: "down" }, 400);
    		$('.dropdown-question').removeClass('selected-dd');
    		$(o).addClass('selected-dd');
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

		ClozeDropdown.enableButton();
	});
	
	$(document).on("click",".upper-right-close", function() {
		$(".split-pane .rationale-sidebar").toggleClass("minimize-sidebar");
	});
	
	
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
	
