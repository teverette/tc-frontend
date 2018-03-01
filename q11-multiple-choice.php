<!DOCTYPE html>
<html>
	<head>
	  <title>What type of irony is used in the passage below?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.mc-correct {color:#43B02A; font-weight:bold}
	  	.mc-incorrect {color: #FED700; font-weight:bold}
	  </style>
	</head>
<body class="progress quiz quiz-question" data-quiz-question="0">
	<?php $width = "100"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-10 quiz"><img src="images/QuizIcon_Spec.png" class="label-type-icon"/>Quiz Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">What type of irony is used in the passage below?</h2>
	  
	  <p class="lesson-copy">Lin stood outside his home, waiting impatiently for his brother Tom’s return. 
	  The sun sank slowly through the branches of the trees, and Lin paced up and down the drive, fearing Tom would not 
	  arrive before dark. Just as Lin turned to enter the house, Tom strolled up the road, laughing with a person 
	  Lin did not recognize. “I’m glad to see you’re enjoying your walk,” Lin said.</p>
	  
	  <p class="lesson-desc">Click on the button next to the type of irony used in the passage</p>
	  
	  <div class="grid-x medium-12" style="position:relative">
		  <label class="radio" style="position:absolute; left:0; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q11_1 question" name="q11_1" value="1"/>
		  </label>
		  <p class="lesson-copy mc-text">Dramatic</p>
		  <label class="radio" style="position:absolute; left:0; top:42px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q11_1 question" name="q11_1" value="2"/>
		  </label>
		  <p class="lesson-copy mc-text" style="width:100%">Verbal</p>
	 </div>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>In this passage, Lin is frustrated at his brother for taking too long to return home. 
	  	When he says, “I’m glad to see you’re enjoying your walk”, he says something different than what he means.</p>
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
      	var questions = ["q11_1"];
		var questionSet = {q11_1:"2"};
  		var nextPage = "q12-highlight.php";
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

	  	function scoreStuff() {
	  		highlightCorrectQuiz();
	  		if(points==numberCorrect) {
		    	  incrementScore();
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