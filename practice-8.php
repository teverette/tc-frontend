<!DOCTYPE html>
<html>
	<head>
	  <title>Which story uses situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	
	  </style>
	</head>
<body class="practice">
	<img src="images/speaker.jpg" class="speaker" />
	<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which example uses 
	  	<span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="Fear or excitement of the unknown in a narrative.">suspense</span>?</h2>
	  <div class="grid-x medium-12" style="position:relative">
	  	<label class="radio">
			<div class="mc-input-box" style="top: 2px">
		  		<input type="radio" class="q8_1 question" name="q8_1" value="1"/>
		  	</div>
		  	<p class="lesson-copy mc-text">A boy rises from his bed, stretches his arms wide, and is ready to start the day.</p>
		</label>
		<label class="radio">
			<div class="mc-input-box" style="top: 81px">
		  		<input type="radio" class="q8_1 question" name="q8_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">A woman searches everywhere for her hat, which is on her head.</p>
		</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 158px">
	  			<input  type="radio" class="q8_1 question" name="q8_1" value="3"/>
	  		</div>
	  		<p class="lesson-copy mc-text">Two runners have been racing for first place for an hour. As they round the corner to the finish line, they run into each other.</p>
	  	</label>
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 268px">
	  			<input  type="radio" class="q8_1 question" name="q8_1" value="4"/>
	  		</div>
	  		<p class="lesson-copy mc-text">A waiter drops a tray of food and a customer says, “Nice catch.”</p>
	  	</label>
	  </div>
	  
	</div>
	<div class="rationale-sidebar"></div>
	</div>
		<?php $width = "87.5"; ?>
		<?php $back = "learn-page-5b.php"; ?>
		<?php include '_footer_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q8_1"];
      	var hintArray = {
      	      	"hint_q8_1":{
          	      	1:"This situation does not involve fear or excitement.",
          	      	2:"This is an example of irony, but it is not suspenseful.",
              	    4:"This is verbal irony, but does not create a sense of anticipation."
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q8_1":"Readers want to know who will win the race, especially since the runners have collided."
      	}
		var answerKey = {q8_1:"3"};
  		var nextPage = "practice-9.php";

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
			ChoiceMatrix.initialize("practice_8",1,1,"mc");
			if(hasAlreadyAnswered("practice_8")) {
				ChoiceMatrix.setPreviousResponse();
			}
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>