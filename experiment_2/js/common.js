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
      		// $("input").attr('disabled','disabled');
      		var questionLength = questions.length;
			for(i=0; i<questionLength; i++){
				var name = questions[i];
				var val = $('input[name='+name+']:checked').val();
				ChoiceMatrix.checkResponse(name, val);
    	  	}
			
			// save all response to storage
			var string = JSON.stringify(this.responseKey)
			storage[this.name] = string;
			
			highlightCorrectQuiz();
			if(this.points==this.numberCorrect) {
				incrementScore();
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
      	
      	assess: function(includeScore) {
      		// todo add question/answer verification logic
	    	ChoiceMatrix.getResponses();
	    	showRationale();
	    	updateNextStepBtn($(".check"));
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
    		showRationale();
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
	responseKey: {},
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
		// save all response to storage
		var string = JSON.stringify(this.responseKey)
		storage[this.name] = string;
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
      	
      	this.responseKey[name] = selectedAnswer;
    	
	},
	assess: function() {
		this.getResponses();
		showRationale();
		updateNextStepBtn($(".check"));
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
