<!DOCTYPE html>
<html>
	<head>
	  <title>testing</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="practice quiz quiz-question" data-quiz-question="3">
	<?php include '_quiz_progress.php'; ?>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">Which <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="Specific information that gives examples of a reason">evidence</span> 
	  supports the <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="The ideas that explain why an opinion is true.">reason</span>, “Cats are better pets than dogs because cats usually make less noise?”</h2>
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio">
	  	<div class="mc-input-box" style="top:0">
	  	<input type="radio" class="q5_1 question" name="q5_1" value="1"/>
	  	</div>
	  	<p class="lesson-copy mc-text">A cat might meow, but it’s usually not as loud as a barking dog.</p>
	  </label>
	  	
		<label class="radio">
			<div class="mc-input-box" style="top: 50px">
		  		<input type="radio" class="q5_1 question" name="q5_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">Cats can keep themselves busy and don’t expect humans to play with them or take them outside.</p>
		</label>
	  
	  <label class="radio">
	  	<div class="mc-input-box" style="top: 127px">
	  		<input type="radio" class="q5_1 question" name="q5_1" value="3"/>
	  	</div>
	  	<p class="lesson-copy mc-text">Cats give themselves baths with their own tongues.</p>
	  </label>
	  
	  </div>
	  
	</div>
	</div>
	<div class="grid-x grid-padding-x footer">
		<a class="button back button-left-side" href="quiz-3.php#checked" ><i class="fas fa-lg fa-angle-left" ></i></a>
		<a class="check-disabled button success button-right-side forward-button submit">Submit <i class="fas fa-lg fa-angle-right" ></i></a>
	</div>
	<div class="rationale-callout callout" style="height: 300px; top: 100px;"></div>
	<div class="hint-callout callout" style="height: 300px; top: 100px;"></div>
	<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style=""></div>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q5_1"];
		var answerKey = {q5_1:"1"};
		var hintArray = {
      			"hint_q5_1":{
          	      	"2":"Reasons and evidence work together to support a writer’s opinion. \
              	      	 “A cat might meow, but it’s usually not as loud as a barking dog” is \
              	      	 correct because it is specific evidence that supports the reason.",
          	      	"3":"Reasons and evidence work together to support a writer’s opinion. \
             	      	 “A cat might meow, but it’s usually not as loud as a barking dog” is \
             	      	 correct because it is specific evidence that supports the reason."
              	}
      	}
		var rationaleArray = {
      	      	"rationale_q5_1":"Reasons and evidence work together to support a writer’s opinion. “A cat might meow, but it’s usually not as loud as a barking dog” is correct because it is specific evidence that supports the reason."
      	}
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
			ChoiceMatrix.initialize("quiz_4",1,1,"mc");
			ChoiceMatrix.isQuiz=true;
			if(hasAlreadyAnswered("quiz_4")) {
				ChoiceMatrix.setPreviousResponse();
			}
			getScore();
		});

      	window.onload = function() {
      		
		}
  </script>
</body>
</html>