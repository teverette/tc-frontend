<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice quiz">
		
		<div class="content"> 
		<div class="content-header content-header-quiz">Quiz</div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Which of these shows <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="When words express something different than normal meaning">verbal irony?</span></p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="30%"></th>
		      <th width="15%" class="text-center">Verbal Irony</th>
		      <th width="15%" class="text-center">Situational Irony</th>
		      <th width="15%" class="text-center">Dramatic Irony</th>
		      <th width="15%" class="text-center">Suspense</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A driver gets stuck in traffic and says, “Wonderful.” </td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="verbal"/></td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="situational"/></td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="suspense"/></td>
		    </tr>
		    <tr>
		      <td>Maria starts a dog walking business. She discovers she’s allergic to dogs.</td>
		       <td class="text-center"><input type="radio" class="q5_2" name="q5_2" value="verbal"/></td>
		      <td class="text-center"><input type="radio" class="q5_2" name="q5_2" value="situational"/></td>
		      <td class="text-center"><input type="radio" class="q5_2" name="q5_2" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" class="q5_2" name="q5_2" value="suspense"/></td>
		    </tr>
		    <tr>
		      <td>James sneaks out of the house. His parents wake up and walk by his bedroom but do not go inside</td>
		       <td class="text-center"><input type="radio" class="q5_3" name="q5_3" value="verbal"/></td>
		      <td class="text-center"><input type="radio" class="q5_3" name="q5_3" value="situational"/></td>
		      <td class="text-center"><input type="radio" class="q5_3" name="q5_3" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" class="q5_3" name="q5_3" value="suspense"/></td>
		    </tr>
		  </tbody>
		  
		</table>
		
		</div>
		<div class="rationale-sidebar"></div>
		</div>
		<?php $width = "100"; ?>
		<?php $back = "quiz-4.php"; ?>
		<?php $next = ""; ?>
		<?php include '_footer_progress.php'?>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		
		<script>
			$(document).foundation();
			
			var questions = ["q5_1","q5_2","q5_3"];
	      	var answerKey = {q5_1:"verbal", q5_2:"situational",q5_3:"suspense"};
	      	var hintArray = {
	      	      	"hint_q5_1":{
	          	      	"irony":"This sentence states the opinion statement. Try again."
		          	},
	      	      	"hint_q5_2":{
	          	      	"not-irony":"This section includes reasons that support the opinion statement. Try again."
		          	},
	      	      	"hint_q5_3":{
	          	      	"irony":"This sentence repeats the opinion statement and makes a suggestion. Try again."
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q5_1":"Correct! This sentence introduces the opinion statement and helps the reader understand the topic.",
	      	      	"rationale_q5_2":"Correct! The body gives reasons that support the writer’s opinion statement.",
	      	      	"rationale_q5_3":"Correct! This sentence provides a strong finish by repeating the opinion statement and providing a call to action.",
	      	}
	      	var response_key = {};
	      	var nextPage = "lp-end.php";
	      	var storage = window.sessionStorage;

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

			$(window).bind("unload", function() {
				alert("unload");
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize("quiz_5",3,3);
      			if(hasAlreadyAnswered("quiz_5")) {
					ChoiceMatrix.setPreviousResponse();
				}
      		});
      		
			window.onload = function() {
				
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>