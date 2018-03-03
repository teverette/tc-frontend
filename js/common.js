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
	$(o).text("Next");
	location.hash = "checked";
	
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
		numberCorrect: null,
		minReq:null,
		points:0,
		answered:0,
		type:0,
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
      		$("input").attr('disabled','disabled');
      		var questionLength = questions.length;
			for(i=0; i<questionLength; i++){
				var name = questions[i];
				var val = $('input[name='+name+']:checked').val();
				ChoiceMatrix.checkResponse(name, val);
    	  	}
			highlightCorrectQuiz();
			if(points==numberCorrect) {
		    	  incrementScore();
		      }
      	}, 
		checkResponse: function(name, selectedAnswer) {
	      	var correctAnswer = answerKey[name];
	        // write to storage/console
	        // response_key[name] = selectedAnswer;
	        // var string = JSON.stringify(response_key);
	        // console.log(string);
      		if(correctAnswer==selectedAnswer) {
      			ChoiceMatrix.updateQuestionStateCorrect(name);
				this.points++;
			} else {
				ChoiceMatrix.updateQuestionStateIncorrect(name)
			}
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
      	
      	assess: function(includeScore) {
      		// todo add question/answer verification logic
	    	ChoiceMatrix.getResponses();
	    	showRationale();
	    	updateNextStepBtn($(".check"));
      	},
		initialize: function(minToScore, minToCheck, type) {
			this.numberCorrect = minToScore;
			this.minReq = minToCheck;
			this.type = type!=null ? type : "matrix";
		}
  }

var ClozeDropdown = {
	numberCorrect: null,
	minReq:null,
	answered:0,
	isMinimumAnswersMet: function() {
		this.answered=0;
		$(".question").each(function() {
    		  var name = $(this).attr("name");
			  var val = $(this).val();
			  console.log("value: " + val);
			  if(val!=null) {ClozeDropdown.answered++;}
			  console.log("answered: " + ClozeDropdown.answered);
		});
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
		$("input").attr('disabled','disabled');
		$(".question").each(function() {
    		  var name = $(this).attr("name");
			  var val = $(this).val();
			  ClozeDropdown.checkResponse($(this).parent(), name, val);
		});
	},

	checkResponse: function(o, name, selectedAnswer) {
      	var correctAnswer = answerKey[name];
      	console.log("correctAnswer: " + correctAnswer);
      	if(!correctAnswer && !selectedAnswer) {
			$(o).addClass('clear');
		} else if(correctAnswer==selectedAnswer) {
			$(o).addClass('correct').append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: 51px;" aria-hidden="true"></i>');
		}  else {
			$(o).addClass('incorrect').append('<i class="fas fa-times " style="color: #FED700;position:relative; right: 51px;" aria-hidden="true"></i>');
		}
	},
	assess: function() {
		this.getResponses();
		showRationale();
		updateNextStepBtn($(".check"));
	},
	initialize: function(minToScore, minToCheck) {
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
