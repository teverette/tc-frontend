<!DOCTYPE html>
<html>
<head>
  <title>testing</title>
  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress quiz quiz-question" data-quiz-question="3">
	<?php $width = "76.9"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/quiz-board.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="lesson-label label medium-12 quiz">Quiz Question:</h2>
  <h2 class="title medium-12">Which evidence supports the reason, "Cats are better pets than dogs because cats usually make less noise?"</h2>
  <p class="lesson-desc medium-12">Select the correct answer..</p>
  <div class="grid-x medium-12 cell" style="position:relative">
  <label class="radio" style="position:absolute; left:0; top:0px; padding-left: 0px;padding-right: 5px;"><input type="radio"  class="q8_1 question" name="q8_1" value="1"/></label><p class="lesson-copy cell" style="margin-left: 63px">A cat might meow, but it's usually not as loud as a barking dog.</p>
  <label class="radio" style="position:absolute; left:0; top:55px; padding-left: 0px;padding-right: 5px;"><input type="radio"  class="q8_1 question" name="q8_1" value="2" /></label><p class="lesson-copy cell" style="margin-left: 63px">Cats can keep themselves busy and don't expect humans to play with them or take them outside.</p>
  <label class="radio" style="position:absolute; left:0; top:145px; padding-left: 0px;padding-right: 5px;"><input type="radio"  class="q8_1 question" name="q8_1" value="3" /></label><p class="lesson-copy cell" style="margin-left: 63px">Cats give themselves baths with their own tongues.</p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Reasons and evidence should be paired in the body section of an opinion piece. Together they work to support a writer's opinion. "A cat might meow, but it's usually
  	not as loud as a barking dog" is correct because it is specific evidence that proves and supports a writer's reason, "Cats are better pets than dogs
  	because cats usually make less noise."</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="mc-2.php"><i class="fas fa-angle-left"></i> Back</a>
<a id="choice-matrix-2" class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();
      var questions = ["q8_1"];
		var questionSet = {q8_1:"1"};
		var nextPage = "choice-matrix-4.php";
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
	  		if(points==numberCorrect) {
		    	  incrementScore();
		    	  highlightCorrectQuiz();
			}
	  	}
	
	  	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = questionSet[name];
			if(correctAnswer==selectedAnswer) {
				$(o).parent().addClass('correct');
				$('input[name='+name+']:checked').parent()
				.addClass('correct')
				.append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: 0px; top: 1px;" aria-hidden="true"></i>');
				points++;
			} else {
				$(o).parent().addClass('incorrect');
				$('input[name='+name+']:checked').parent()
				.addClass('incorrect')
				.append('<i class="fas fa-times" style="color: #FED700;position:relative; right: 0px; top: 1px;" aria-hidden="true"></i>');
			}
	}
  
  $(document).on("click",".check", function() {
	  loopThruQuestions();
	  scoreStuff();
	  showRationale();
	  updateNextStepBtn(this);
  });

  $(document).on("click",".check-verified", function() {
	  console.log("is verified");
	  window.location.href=nextPage;
  });

      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>