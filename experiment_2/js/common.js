function showRationale() {
	$(".rationale").removeClass("hide");
	$(".rationale").animate({
	    opacity: "1"
	  }, 500, function() {
	    // Animation complete.
	  });
}

function updateNextStepBtn(o) {
	$(o).addClass("check-verified").removeClass("check");
	$(o).text("Continue");
	location.hash = "checked";
	$(".back").click(function(){
		onclick="history.back(-2);";
	})
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

function incrementScore() {
	storage["quiz_total"] = 1 + parseInt(storage["quiz_total"]);
	console.log("quiz total: " + storage["quiz_total"]);
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
				ChoiceMatrix.updateQuestionStateIncorrect(name)
			}
      		this.responseKey[name] = selectedAnswer;
      	},

		updateQuestionStateCorrect: function(name) {
      		// $(o).parent().addClass('correct');
			if(this.type=="mc") {
				$('input[name='+name+']:checked').parent()
				.addClass('correct')
				.prepend('<i class="fas fa-lg fa-check" style="color: #00AA00;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			} else {
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
			}
      	},

      	updateQuestionStateIncorrect: function(name) {
      		if(this.type=="mc") {
      			$('input[name='+name+']:checked').parent()
				.addClass('incorrect')
				.prepend('<i class="fas fa-lg fa-times" style="color: #FED700;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			} else {
				$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.append('<i class="fas fa-times" style="color: #FED700;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
			}
      	},
      	resetForm: function() {
      		$(".fa-check").remove();
      		$(".fa-times").remove();
      		$("td").removeClass("incorrect").removeClass("correct");
      		$("label").removeClass("incorrect").removeClass("correct");
      		$(".check").addClass("check-disabled").removeClass("check");
      		$('.hint').hide();
      	},
      	showHint: function() {
    		this.retryTotal++;
    		$('.hint-text').hide('fast');
    		if(this.retryTotal==1) { 
    			$('.hint-text.primary').show('fast');
    		} else {
    			$('.hint-text.secondary').show('fast');
    		}
    		$('.hint').show('500');
    	},
      	assess: function(includeScore) {
      		// todo add question/answer verification logic
      		ChoiceMatrix.resetForm();
	    	ChoiceMatrix.getResponses();
	    	if(this.isReadyNextStep()) {
	    		this.getRationale();
	    		updateNextStepBtn($(".check"));
	    	} else {
    			this.showHint();
    		}
      	},
      	getRationale: function() {
    		var $modal = $('.answer-rationale-reveal');

    		$.ajax('rationales/'+this.name+'.html')
    		  .done(function(resp){
    		    $modal.html(resp).foundation('open');
    		});
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
    		// showRationale();
    		updateNextStepBtn($(".check"));
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
			$('*[data-question="'+name+'"]').addClass('correct').append('<i class="fas fa-check" style="color: #00AA00;position:relative;right: -10px;" aria-hidden="true"></i>');
			this.points++;
		}  else {
			$('*[data-question="'+name+'"]').addClass('incorrect').append('<i class="fas fa-times " style="color: #FED700;position:relative; right: -10px;" aria-hidden="true"></i>');
		}
      	
      	this.responseKey[name] = selectedAnswer;
    	
	},
	resetForm: function() {
  		$(".fa-check").remove();
  		$(".fa-times").remove();
  		$(".button").removeClass("incorrect").removeClass("correct");
  		$(".check").addClass("check-disabled").removeClass("check");
  		$('.hint').hide();
  	},
	showHint: function() {
		this.retryTotal++;
		$('.hint-text').hide('fast');
		if(this.retryTotal==1) { 
			$('.hint-text.primary').show('slow');
		} else {
			$('.hint-text.secondary').show('slow');
		}
		$('.hint').show('fast');
	},
	assess: function() {
		this.resetForm();
		this.getResponses();
		if(this.isReadyNextStep()) {
			this.getRationale();
			updateNextStepBtn($(".check"));
		} else {
			this.showHint();
		}
		
	},
	getRationale: function() {
		var $modal = $('.answer-rationale-reveal');

		$.ajax('rationales/'+this.name+'.html')
		  .done(function(resp){
		    $modal.html(resp).foundation('open');
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
			this.checkResponse($currentSelect, x, this.responseKey[x]);
		}
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
 		$('#'+curDrawer).toggle("slide", { direction: "down" }, 400);
 		$('.dropdown-question').removeClass('selected-dd');
 		$(o).addClass('selected-dd');
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
