<!DOCTYPE html>
<html>
	<head>
	  <title>Why is the story below an example of situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="progress">
	<?php $width = "78.6"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Suspense is the fear or excitement created by the unknown in a narrative. What example uses suspense?</h2>
	  
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; left:0; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q3_1 question" name="q8_1" value="1"/>
	  </label>
	  <p class="lesson-copy mc-text">A boy rises from his bed, stretches his arms wide, and is ready to start the day.</p>
	  <label class="radio" style="position:absolute; left:0; top:73px;left:-30px;padding-left: 10px; padding-right: 0;">
	  <input type="radio" class="q3_1 question" name="q8_1" value="2"/>
	  </label>
	  <p class="lesson-copy mc-text">A woman searches everywhere for her hat, which is on her head.</p>
	  <label class="radio" style="position:absolute; left:0; top: 120px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q8_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">Two runners have been racing for first place for an hour. As 
	  they round the corner to the finish line, they run into each other.</p>
	  <label class="radio" style="position:absolute; left:0; top: 198px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q8_1" value="4"/>
	  </label>
	  <p class="lesson-copy mc-text">A waiter drops a tray of food and a customer says, “Nice catch.”</p>
	  
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Suspense develops when a reader is excited to learn the answer to an unknown in a narrative, such as who will win the race.</p>
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
      	var questions = ["q8_1"];
		var questionSet = {q8_1:"3"};
  		var nextPage = "q9-cloze-dropdown.php";
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