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
	  
	  <h2 class="title medium-12">What is dramatic irony?</h2>
	  <p class="lesson-desc medium-12">Dramatic irony occurs when the reader knows information that a character does not. Which example uses dramatic irony?</p>
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; left:0; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q3_1 question" name="q3_1" value="1"/>
	  </label>
	  	<p class="lesson-copy mc-text">Joan is lost in the woods. She is scared and it is getting dark. The reader knows that her house is over the next hill, but Joan goes in the wrong direction.</p>
		<label class="radio" style="position:absolute; left:0; top:104px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q3_1 question" name="q3_1" value="2"/>
		</label>
	  <p class="lesson-copy mc-text">Laura is looking for her mobile phone that she has left in her coat pocket. She eventually remembers where it is, and finds it before leaving her house.</p>
	  <label class="radio" style="position:absolute; left:0; top: 213px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q3_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">Lucas finishes his homework and leaves it on his desk. When he wakes up in the morning, it is gone. No one knows what has happened to it.</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Dramatic irony is when the readers know information that the characters do not. It can be funny or tragic. </p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
				<hr/>
	<div class="medium-12">
	<a class="button back large" href="q2-cloze-dropdown.php#checked"><i class="fas fa-angle-left"></i> Back</a>
	<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
	</div>
	</div>
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q3_1"];
		var answerKey = {q3_1:"1"};
  		var nextPage = "q4-choice-matrix.php";


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