<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.rationale-sidebar .that-s-it {height: 40px;}
	  	
	  </style>
	</head>
<body class="practice quiz">
	<div class="content"> 
	<div class="content-header content-header-quiz">Quiz</div>
	
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">What type of irony is used in this example?</h2>
	  <p class="lesson-copy">Lin stood outside his home, waiting impatiently for his brother Tom’s return. The sun sank slowly through the 
	  	branches of the trees, and Lin paced up and down the drive, fearing Tom would not arrive before dark. Just as Lin 
	  	turned to enter the house, Tom strolled up the road, laughing with a person Lin did not recognize. “I’m glad to 
	  	see you’re enjoying your walk,” Lin said.</p>
	  <div class="grid-x medium-12" style="position:relative">
	  	
	  	<label class="radio" style="position:absolute; left:0;top: 0px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q1_1 question" name="q1_1" value="1"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text" style="width:100%">Dramatic</p>
		</label>
		<br/>
		<label class="radio" style="position:absolute; left:0;top: 40px">
			<div class="mc-input-box" style="">
		  		<input type="radio" class="q1_1 question" name="q1_1" value="2"/>
		  		
		  	</div>
		  	<p class="lesson-copy mc-text">Verbal</p>
		</label>
	  </div>
	  
	</div>
	<div class="rationale-sidebar"></div>
	</div>
		<?php $width = "20.0"; ?>
		<?php $back = "quiz-transition.php"; ?>
		<?php include '_quiz_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q1_1"];
      	var hintArray = {
      	      	"hint_q1_1":{
          	      	1:"Consider if Lin actually means what he says to Tom, or if readers know information that the characters do not.",
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q1_1":"Lin is frustrated at his brother for taking too long to return home. When he says, “I’m glad to see you’re enjoying your walk”, \
          	      	he says something different than what he means. <br/><br/>When a character’s words and meaning are different, it is verbal irony."
      	}
		var answerKey = {q1_1:"2"};
  		var nextPage = "quiz-2.php";

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
			ChoiceMatrix.initialize("quiz_1",1,1,"mc");
			ChoiceMatrix.isQuiz=true; 
			if(hasAlreadyAnswered("quiz_1")) {
				ChoiceMatrix.setPreviousResponse();
			}

			var storage = window.sessionStorage;
			var points = storage["quiz_total"];
			var points_label = points==1 ? "point" : "points";
			$(".point-value").html(points);
			$(".point-text").html(" " + points_label);
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>