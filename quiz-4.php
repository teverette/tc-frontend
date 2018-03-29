<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.rationale-sidebar .that-s-it {height: 20px;}
	  </style>
	</head>
<body class="practice quiz">
	<div class="content"> 
	<div class="content-header content-header-quiz">Quiz</div>
	<span class="point-quiz-board"> - points</span>
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">What type of irony is used in this example?</h2>
	  <p class="lesson-copy">Marcus paid for a taxi ride home from the poetry reading. A minute after he got home, his brother drove up. When they talked about their night, Marcus found out that his brother had been at the same event and could have driven him home.</p>
	  <div class="grid-x medium-12" style="position:relative">
	  	
	  	<label class="radio" style="position:absolute; left:0;top: 0px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q4_1 question" name="q4_1" value="1"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text" style="width:100%">Dramatic</p>
		</label>
		<br/>
		<label class="radio" style="position:absolute; left:0;top: 40px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q4_1 question" name="q4_1" value="2"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text">Situational</p>
		</label>
		<label class="radio" style="position:absolute; left:0;top: 80px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q4_1 question" name="q4_1" value="3"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text" style="width:100%">Verbal</p>
		</label>
		<br/>
		<label class="radio" style="position:absolute; left:0;top: 120px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q4_1 question" name="q4_1" value="4"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text">Irony is not being used
</p>
		</label>
	  </div>
	  
	</div>
	<div class="rationale-sidebar"></div>
	</div>
		<?php $width = "100"; ?>
		<?php $back = "quiz-3.php"; ?>
		<?php include '_footer_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q4_1"];
      	var hintArray = {
      	      	"hint_q4_1":{
          	      	1:"Dramatic irony is when the readers know something the characters do not. <br/>Do you know more than this character?",
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q4_1":"This is a coincidence but not an example of irony. <br/> It’s not dramatic irony because the reader does not know anything \
          	      	 that the characters do not. <br/> It’s not situational irony  because the outcome is not particularly unexpected. <br/> It’s not verbal irony because the words in the story are literal and do not have other meanings."
      	}
		var answerKey = {q4_1:"4"};
  		var nextPage = "quiz-5.php";

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
			ChoiceMatrix.initialize("quiz_4",1,1,"mc");
			ChoiceMatrix.isQuiz=true; 
			if(hasAlreadyAnswered("quiz_4")) {
				ChoiceMatrix.setPreviousResponse();
			}
			var storage = window.sessionStorage;
			var points = storage["quiz_total"];
			var points_label = points==1 ? "point" : "points";
			$(".point-quiz-board").html(points + " " + points_label);
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>