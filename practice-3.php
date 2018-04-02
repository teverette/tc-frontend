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
	<img src="images/speaker.jpg" class="speaker"/>
	<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which example uses 
	  	<span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="When a reader knows information that a character in a story does not.">dramatic irony?</span></h2>
	  <div class="grid-x medium-12" style="position:relative">
	  	<label class="radio">
			<div class="mc-input-box" style="top: 2px">
		  		<input type="radio" class="q3_1 question" name="q3_1" value="1"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Joan is lost in the woods. She is scared and it is getting dark. 
		  	The reader knows that her house is over the next hill, but Joan goes in the wrong direction.</p>
		</label>
		<label class="radio">
			<div class="mc-input-box" style="top: 111px">
		  		<input type="radio" class="q3_1 question" name="q3_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Laura is looking for her mobile phone that she has 
		  	left in her coat pocket. She eventually remembers where it is, and finds it before leaving her house.</p>
		</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 221px">
	  			<input  type="radio" class="q3_1 question" name="q3_1" value="3"/>
	  		</div>
	  		<p class="lesson-copy mc-text">Lucas finishes his homework and leaves it on his desk. 
	  		When he wakes up in the morning, it is gone. No one knows what has happened to it.</p>
	  	</label>
	  </div>
	  
	</div>
	<div class="rationale-sidebar"></div>
	</div>
		<?php $width = "31.25"; ?>
		<?php $back = "learn-page-3b.php"; ?>
		<?php include '_footer_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q3_1"];
      	var hintArray = {
      	      	"hint_q3_1":{
          	      	2:"Dramatic irony is when the readers know something the characters do not. <br/>Do you know more than this character?",
          	      	3:"Dramatic irony is when the readers know something the characters do not. <br/>Do you know more than this character?"
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q3_1":"Correct! Joan’s choice seems tragic from the reader’s point of view, because we know something she does not."
      	}
		var answerKey = {q3_1:"1"};
  		var nextPage = "practice-4.php";

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
			ChoiceMatrix.initialize("practice_3",1,1,"mc");
			if(hasAlreadyAnswered("practice_3")) {
				ChoiceMatrix.setPreviousResponse();
			}
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>