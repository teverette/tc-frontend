<!DOCTYPE html>
<html>
	<head>
		<title>Which of these uses situational irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice">
		
		<div class="content"> 
		<div class="content-header content-header-practice">Practice</div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Which of these uses <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="When the outcome of a situation is different than expected.">situational irony</span>?</p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="20%" class="text-center">Situational Irony</th>
		      <th width="20%" class="text-center">NOT Situational Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Ms. Jones inspects buildings to be sure they are safe. She is very strict and feels responsible for the safety of others. 
		      She hires a company to build a porch on the front of her home. The porch falls off.</td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>The mother of a toddler buys a gate to block the stairs. While she is distracted the child wanders to the stairs.
		       He rattles the gate and cries because he can’t climb up. </td>
		      <td class="text-center"><input type="radio" name="q5_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q5_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Mr. Brown exercises every morning and eats small meals for weeks in order to lose weight. 
		      One Saturday morning, he weighs himself. He has gained two pounds.</td>
		      <td class="text-center"><input type="radio" name="q5_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q5_3" value="not-irony"/></td>
		    </tr>
		  </tbody>
		  
		</table>
		
		</div>
		<div class="rationale-sidebar"></div>
		</div>
		<?php $width = "22.2"; ?>
		<?php $back = "practice-3.php"; ?>
		<?php $next = ""; ?>
		<?php include '_footer_progress.php'?>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		
		<script>
			$(document).foundation();
			
			var questions = ["q5_1","q5_2","q5_3"];
	      	var answerKey = {q5_1:"irony", q5_2:"not-irony",q5_3:"irony"};
	      	var hintArray = {
	      	      	"hint_q5_1":{
	          	      	"not-irony":"Situational irony is when the outcome of a situation is different than expected. <br/>Is it unexpected when the porch falls off?",
	          	      	},
	      	      	"hint_q5_2":{
	          	      	"irony":"For situational irony, the outcome needs to be different from what is expected. <br/>Is it unexpected when the child cries?",
						},
	      	      	"hint_q5_3":{
	          	      	"introduction":"In situational irony, something unexpected happens. <br/>Is it unexpected when Mr. Brown gains weight? Try again!",
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q5_1":"Correct! The reader expects a building inspector’s porch to be safe, so it is ironic when the opposite happens.",
	      	      	"rationale_q5_2":"Correct! This is not situational irony, because the child’s reaction is what the reader expects.",
	      	      	"rationale_q5_3":"Correct! The reader expects Mr. Brown to lose weight, so when the opposite happens, it is situational irony."
	      	}
	      	var response_key = {};
	      	var nextPage = "learn-page-4.php";
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
      			ChoiceMatrix.initialize("practice_5",3,3);
      			if(hasAlreadyAnswered("practice_5")) {
					ChoiceMatrix.setPreviousResponse();
				}
      		});
      		
			window.onload = function() {
				
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>