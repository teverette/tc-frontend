<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="progress">
	<?php include '_quiz_progress.php'; ?>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which evidence supports the reason, “Cats are better pets than dogs because cats usually make less noise?”</h2>
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; left:0; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q5_1 question" name="q5_1" value="1"/>
	  </label>
	  	<p class="lesson-copy mc-text">A cat might meow, but it’s usually not as loud as a barking dog.</p>
		<label class="radio" style="position:absolute; left:0; top:45px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q5_1 question" name="q5_1" value="2"/>
		</label>
	  <p class="lesson-copy mc-text">Cats can keep themselves busy and don’t expect humans to play with them or take them outside.</p>
	  <label class="radio" style="position:absolute; left:0; top: 120px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q5_1 question" name="q5_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">Cats give themselves baths with their own tongues.</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Reasons and evidence should be paired in the body section of an opinion piece. Together they work to support a writer’s 
	  	opinion. “A cat might meow, but it’s usually not as loud as a barking dog” is correct because it is specific evidence that 
	  	proves and supports a writer’s reason, “Cats are better pets than dogs because cats usually make less noise.”</p>
	  </div>
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
		<a class="button back large" href="learn-page-3.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
		<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
	</div>
	<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF"></div>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q5_1"];
		var answerKey = {q5_1:"1"};
  		var nextPage = "quiz-5.php";


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
			ChoiceMatrix.initialize("quiz_4",1,1,"mc");
		});

      	window.onload = function() {
    		var isLocked = lockTest();
		  	if(isLocked) {
				ChoiceMatrix.setPreviousResponse();
			}
		}
  </script>
</body>
</html>