<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	
	  </style>
	</head>
<body class="practice">
	<?php $width = "89.9"; ?>
	<?php include '_progress.php'; ?>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which statement is not true about using <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="The ideas that explain why an opinion is true.">reasons</span>
	   and <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="Specific information that gives examples of a reason">evidence</span> 
	   to organize a <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The body follows the introduction. It explains how the opinion statement is supported with reasons or evidence.">body</span> paragraph of an opinion piece?</h2>
	  <div class="grid-x medium-12" style="position:relative">
	  	<label class="radio">
			<div class="mc-input-box" style="top: 2px">
		  		<input type="radio" class="q5_1 question" name="q5_1" value="1"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Reasons and evidence are often explained in a body paragraph of an opinion piece.</p>
		</label>
		<label class="radio">
			<div class="mc-input-box" style="top: 82px">
		  		<input type="radio" class="q5_1 question" name="q5_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Reasons and evidence should not be connected by a similar idea.</p>
		</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 157px">
	  			<input  type="radio" class="q5_1 question" name="q5_1" value="3"/>
	  		</div>
	  		<p class="lesson-copy mc-text">Evidence provides specific examples or pieces of information that explain a reason.</p>
	  	</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 237px">
	  			<input  type="radio" class="q5_1 question" name="q5_1" value="4"/>
	  		</div>
	  		<p class="lesson-copy mc-text">Reasons and evidence in a body paragraph support the opinion that is stated throughout an entire written piece.</p>	
	 	</label>
	  
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Reasons and evidence are usually explained in the body section of an opinion piece. Reasons and evidence should be related to the idea or 
	  	topic of an opinion. Evidence gives specific examples or pieces of information that explain a reason.</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
		<a class="button back button-left-side" href="learn-page-3.php"><i class="fas fa-lg fa-angle-left" ></i></a>
		<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
	</div>
	<div class="hint-callout callout"></div>
	<div class="rationale-callout callout"></div>
	<div class="hint">
		<p class="hint-label">Not quite!</p>
		<p class="hint-text primary">A writer can organize their ideas in the body section by using reasons and evidence. Try again!</p>
		<p class="hint-text secondary">The reasons and evidence a writer uses should have similar information that help prove a writer’s opinion statement. Try again!</p>
	</div>
	<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF"></div>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q5_1"];
      	var hintArray = {
      	      	"hint_q5_1":{
          	      	1:"Not quite. This is a true statement.",
          	      	3:"Not quite. This is a true statement.",
          	        4:"Not quite. This is a true statement."}
      	}
      	var rationaleArray = {
      	      	"rationale_q5_1":"Correct! Reasons and evidence should be connected by a similar idea, so this is not a true statement."
      	}
		var answerKey = {q5_1:"2"};
  		var nextPage = "quiz-transition.php";

	    $(document).on("click",".check", function() {
	    	ChoiceMatrix.assess(false);
	    });
    
		$(document).on("click",".check-verified", function() {
			window.location.href=nextPage;
		});

     	$("input:radio").click(function() {
     		if($('.hint').is(':visible')) {
				ChoiceMatrix.resetForm();
			}
  			ChoiceMatrix.enableButton();
 		});

      	$(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
			ChoiceMatrix.initialize("question_5",1,1,"mc");
			if(hasAlreadyAnswered("question_5")) {
				ChoiceMatrix.setPreviousResponse();
			}
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>