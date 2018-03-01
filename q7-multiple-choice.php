<!DOCTYPE html>
<html>
	<head>
	  <title>Why is the story below an example of situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="progress">
	<?php $width = "71.4"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Why is the story below an example of situational irony?</h2>
	  <p class="lesson-desc">Laurance sees a lot of limes on the tree at the park. He decides to 
	  buy sugar and make limeade to share with the children playing there. When he sets up his limeade stand, he gets fined for picking 
	  fruit off of a tree at the park.</p>
	  
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q3_1 question" name="q7_1" value="1"/>
	  </label>
	  	<p class="lesson-copy mc-text">The outcome is unexpected and different than the reader expects.</p>
		<label class="radio" style="position:absolute; top:42px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q3_1 question" name="q7_1" value="2"/>
		</label>
	  <p class="lesson-copy mc-text">The reader knows that Laurance will be fined, but Laurance does not know.</p>
	  <label class="radio" style="position:absolute; top: 120px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q7_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">The reader does not know what will happen to Laurance until the end of the story.</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Situational irony is when the reader expects one thing to happen, but something completely different happens instead. The reader 
	  	expects Laurence to be praised for, or at least enjoy, making the limeade for the other children. It is not expected that he will get 
	  	in trouble for trying to do something nice.</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
	<hr/>
	<div class="medium-12">
	<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
	<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
	</div>
	</div>
 	<script>
		$(document).foundation();
      	/* setup question and answer for quiz question */
      	var questions = ["q7_1"];
		var questionSet = {q7_1:"1"};
  		var nextPage = "q8-multiple-choice.php";
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
			showRationale();
			updateNextStepBtn(this);
			$("input").attr('disabled','disabled');
		});
	    
		$(document).on("click",".check-verified", function() {
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