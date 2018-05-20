<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>.drop-down-drawer {    height: 150px;bottom:150px}</style>
</head>
<body class="practice quiz quiz-question" data-quiz-question="3">

<div class="content"> 
	<div class="content-header content-header-quiz">Quiz</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which statement creates situational irony? </h2>
	 
	  <div class="medium-12 grid-x lesson-copy">
	  <p>A cat walks around a desk, its ears alert and its eyes bright with anticipation. It smells the air and listens intently. 
	  Then it leaps to the desktop where it <a class="button dropdown-question" data-question="q3_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>. 
	    
	  </div>
	  <input type="hidden" class="q3_1 dd-response" name="q3_1"></input>
	</div>
	<?php $width = "60"; ?>
	<?php $back = "quiz-2.php"; ?>
	<?php include '_quiz_progress.php'?>
	<div class="rationale-sidebar"></div>
</div>


<div id="drawer-one" class="drop-down-drawer q3_1 text-center">
	<a class="button secondary answer-option q3_1" data-value="1">uses a computer mouse to go online</a>
	<a class="button secondary answer-option q3_2" data-value="2">eats a piece of food left on the desk </a>
	<a class="button secondary answer-option q3_3" data-value="3">paws at its reflection in the screen</a>	
</div>

</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q3_1:"1"};
      	var hintArray = {
      	      	"hint_q3_1":{
          	      	2:"Think about what outcome is most unexpected.",
          	      	3:"Think about what outcome is most unexpected."}
      	}
      	var rationaleArray = {
      	      	"rationale_q3_1":"Situational irony occurs when the outcome of a situation is different than what is expected.<br/><br/>In this passage, the reader would expect the cat to refer to a living mouse, not a computer mouse."
      	}
		var nextPage = "quiz-4.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
      	$(document).ready(function() {
      		$(".quiz-questions-remaining").text("2 questions left");
			ClozeDropdown.initialize("quiz_3",1,1);
			ClozeDropdown.isQuiz=true; 
			if(hasAlreadyAnswered("quiz_3")) {
				ClozeDropdown.setPreviousResponse();
			}
			var storage = window.sessionStorage;
			var points = storage["quiz_total"];
			var points_label = points==1 ? "point" : "points";
			$(".point-value").html(points);
			$(".point-text").html("" + points_label);
	  	});

  </script>
</body>
</html>