<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="progress">
	<?php $width = "42.9"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-10"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which statement is not true about using reasons and evidence to organize a body paragraph of an opinion piece?</h2>
	  <p class="lesson-desc medium-12">Select the correct answer.</p>
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; left:0; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q5_1 question" name="q5_1" value="1"/>
	  </label>
	  	<p class="lesson-copy mc-text">Reasons and evidence are often explained in a body paragraph of an opinion piece.</p>
		<label class="radio" style="position:absolute; left:0; top:75px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q5_1 question" name="q5_1" value="2"/>
		</label>
	  <p class="lesson-copy mc-text">Reasons and evidence should not be connected by a similar idea.</p>
	  <label class="radio" style="position:absolute; left:0; top: 120px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q5_1 question" name="q5_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">Evidence provides specific examples or pieces of information that explain a reason.</p>
	  <label class="radio" style="position:absolute; left:0; top: 200px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q5_1 question" name="q5_1" value="4"/>
	  </label>
	  <p class="lesson-copy mc-text">Reasons and evidence in a body paragraph support the opinion that is stated throughout an entire written piece.</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Reasons and evidence are usually explained in the body section of an opinion piece. Reasons and evidence should be related to the idea or 
	  	topic of an opinion. Evidence gives specific examples or pieces of information that explain a reason.</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
				<hr/>
	<div class="medium-12">
	<a class="button back large" href="learn-page-3.php"><i class="fas fa-angle-left"></i> Back</a>
	<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
	</div>
	</div>
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q5_1"];
		var answerKey = {q5_1:"2"};
  		var nextPage = "quiz-transition.php";


	    $(document).on("click",".check", function() {
	    	ChoiceMatrix.assess(false);
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
			ChoiceMatrix.initialize(1,1,"mc");
		});

      	window.onload = function() {
    		var isLocked = lockTest();
		  	if(isLocked) {
				ChoiceMatrix.getResponses();
			}
		}
  </script>
</body>
</html>