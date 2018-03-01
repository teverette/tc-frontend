<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="progress">
	<?php $width = "75"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/msg-bubbles.jpg" class="question-type-icon"/>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  <h2 class="lesson-label label medium-10 quiz">Pratice Question:</h2>
	  <h2 class="title medium-12">Which statement is not true about using reasons and evidence to organize a body paragraph of an opinion piece?</h2>
	  <p class="lesson-desc medium-12">Select the correct option next to each sentence.</p>
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; left:0; top:0px;padding-left: 0px;padding-right: 5px;"><input type="radio" class="q7_1 question" name="q7_1" value="1"/></label><p class="lesson-copy cell" style="margin-left: 63px">Reasons and evidence are often explained in a body paragraph of an opinion piece.</p>
	  <label class="radio" style="position:absolute; left:0; top:93px;padding-left: 0px;padding-right: 5px;"><input type="radio" class="q7_1 question" name="q7_1" value="2"/></label><p class="lesson-copy cell" style="margin-left: 63px">Reasons and evidence should not be connected by a similar idea.</p>
	  <label class="radio" style="position:absolute; left:0; top: 149px;padding-left: 0px;padding-right: 5px;"><input  type="radio" class="q7_1 question" name="q7_1" value="3"/></label><p class="lesson-copy cell" style="margin-left: 63px">Evidence provides specific examples or pieces of information that explain a reason.</p>
	  <label class="radio" style="position:absolute; left:0; top: 243px;padding-left: 0px;padding-right: 5px;"><input type="radio" class="q7_1 question" name="q7_1" value="4"/></label><p class="lesson-copy cell" style="margin-left: 63px">Reasons and evidence in a body paragraph support the opinion that is stated throughout an entire written piece.</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Reasons and evidence are usually explained in the body section of an opinion piece. Reasons and evidence should be related to the idea or topic
	  	of an opinion. Evidence gives specific examples or pieces of information that explain a reason.</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
				<hr/>
	<div class="medium-12">
	<a class="button back large" href="choice-matrix-3.php"><i class="fas fa-angle-left"></i> Back</a>
	<a id="choice-matrix-2" class="check button success large float-right">Check</a>
	</div>
	</div>
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q7_1"];
		var questionSet = {q7_1:"1"};
  		var nextPage = "mc-3.php";
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

      $(document).ready(function() {
			highlightCurrentQuiz();
		highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>