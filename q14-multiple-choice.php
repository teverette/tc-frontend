<!DOCTYPE html>
<html>
	<head>
	  <title>What type of irony is used in the example?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="progress quiz quiz-question" data-quiz-question="3">
	<?php $width = "100"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-10 quiz"><img src="images/QuizIcon_Spec.png" class="label-type-icon"/>Quiz Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">What type of irony is used in the example?</h2>
	  <p class="lesson-desc">Choose the answer that corresponds to the correct type of irony in the example.</p>
	  <p class="lesson-copy">Marcus paid for a taxi ride home from the poetry reading. A minute after he got home, 
	  his brother drove up. When they talked about their night, Marcus found out that his brother had been at the 
	  same event and could have driven him home.</p>
	  	  
	  <div class="grid-x medium-12" style="position:relative">
		  <label class="radio" style="position:absolute; left:-30px; padding-left: 10px; top:-5px;padding-right: 0px;">
		  	<input type="radio" class="q14_1 question" name="q14_1" value="1"/>
		  </label>
		  <p class="lesson-copy mc-text">Dramatic</p>
		  <label class="radio" style="position:absolute; left:-30px;padding-left: 10px; top:42px;padding-right: 0px;">
		  	<input type="radio" class="q14_1 question" name="q14_1" value="2"/>
		  </label>
		  <p class="lesson-copy mc-text" style="width:100%">Situational</p>
		  <label class="radio" style="position:absolute; left:-30px;padding-left: 10px; top:89px;padding-left: 10px;padding-right: 5px;">
		  	<input type="radio" class="q14_1 question" name="q14_1" value="3"/>
		  </label>
		  <p class="lesson-copy  mc-text" style="width:100%">Verbal</p>
		  <label class="radio" style="position:absolute; left:-30px;padding-left: 10px; top:136px; padding-right: 5px;">
		  	<input type="radio" class="q14_1 question" name="q14_1" value="4"/>
		  </label>
		  <p class="lesson-copy mc-text" style="width:100%">Irony is not being used</p>
	 </div>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>This is a coincidence but not an example of irony. Dramatic irony is not used because the reader does not know 
	  	anything that the characters do not. Situational irony is not used because the outcome is not particularly unexpected. 
	  	Verbal irony is not used because the words in the story are literal and do not have other meanings.</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
				<hr/>
	<div class="medium-12">
	<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
	<a id="choice-matrix-2" class="check-disabled button success large float-right">Submit</a>
	</div>
	</div>
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q14_1"];
		var questionSet = {q14_1:"4"};
  		var nextPage = "q15-choice-matrix.php";
  		var numberCorrect = 1;
	    var points = 0;
	    
	    function loopThruQuestions() {
  			var questionLength = questions.length;
			for(i=0; i<questionLength; i++){
				console.log("question: " + questions[i]);
				var name = questions[i];
				var val = $('input[name='+name+']:checked').val();
				console.log(val);
				updateQuestionStatus(this, name, val);
			}
	  	}

	
	  	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = questionSet[name];
  			if(correctAnswer==selectedAnswer) {
  				points++;
				$(o).parent().addClass('correct');
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.prepend('<i class="fas fa-lg fa-check" style="color: #00AA00;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			} else {
				$(o).parent().addClass('incorrect');
				$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.prepend('<i class="fas fa-lg fa-times" style="color: #FED700;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			}
  	}
    
    $(document).on("click",".check", function() {
  	  loopThruQuestions();
  	  scoreStuff();
  	  showRationale();
  	  updateNextStepBtn(this);
  	$("input").attr('disabled','disabled');
    });
    
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });

	$("input:radio").click(function() {
  		ChoiceMatrix.enableButton();
  	});

    $(document).ready(function() {
		highlightCurrentQuiz();
		highlightAllCorrectQuiz();
		ChoiceMatrix.initialize(1,1);
	});

    window.onload = function() {
    	lockTest();
    }
  </script>
</body>
</html>