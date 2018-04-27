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
	<img src="images/speaker.jpg" class="speaker"/>
	<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which story uses situational irony?</h2>
	  <div class="grid-x medium-12" style="position:relative">
	  	<label class="radio">
			<div class="mc-input-box" style="top: 2px">
		  		<input type="radio" class="q6_1 question" name="q6_1" value="1"/>
		  	</div>
		  	<p class="lesson-copy mc-text">A boy leaves the theater after watching a boring movie.
		  	 He decides that he is hungry, so he stops for food on his way home. </p>
		</label>
		<label class="radio">
			<div class="mc-input-box" style="top: 111px">
		  		<input type="radio" class="q6_1 question" name="q6_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Ronald sees a lot of limes on the tree at the park. 
		  	He gather ingredients to make limeade for the children playing there. He gets in trouble for picking fruit off of a tree at the park.</p>
		</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 221px">
	  			<input  type="radio" class="q6_1 question" name="q6_1" value="3"/>
	  		</div>
	  		<p class="lesson-copy mc-text">When Marcia gets home from school, she puts her phone in her pocket so she can open the door. 
	  		She unpacks her bag and then cannot find her phone.</p>
	  	</label>
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 331px">
	  			<input  type="radio" class="q6_1 question" name="q6_1" value="4"/>
	  		</div>
	  		<p class="lesson-copy mc-text">A woman yells at Larry for walking on her grass. Larry says, “Aren’t you nice?”</p>
	  	</label>
	  </div>
	  
	</div>
	<div class="rationale-sidebar"></div>
	</div>
		<?php $width = "62.5"; ?>
		<?php $back = "learn-page-4.php"; ?>
		<?php include '_footer_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q6_1"];
      	var hintArray = {
      	      	"hint_q6_1":{
          	      	1:"Situational Irony occurs when something happens that is different from what the reader would typically expect. \
              	      	<br/><br/>In this example, did you expect something different would happen? ",
          	      	3:"Situational Irony occurs when something happens that is different from what the reader would typically expect.<br/><br/>\
              	      	 In this example, did you expect something different would happen?",
              	    4:"Situational Irony occurs when something happens that is different from what the reader would typically expect.<br/><br/>\
                 	     In this example, did you expect something different would happen?"
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q6_1":"Situational Irony occurs when something happens that is different from what the reader would typically expect.<br/><br/>\
          	      	 The reader expects Ronald to be praised for doing something nice. When he gets in trouble instead, it is situational irony."
      	}
		var answerKey = {q6_1:"2"};
  		var nextPage = "practice-7.php";

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
			ChoiceMatrix.initialize("practice_6",1,1,"mc");
			if(hasAlreadyAnswered("practice_6")) {
				ChoiceMatrix.setPreviousResponse();
			}
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>