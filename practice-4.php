<!DOCTYPE html>
<html>
	<head>
		<title>Which examples use dramatic irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
		<style>
		::-webkit-scrollbar {
		    width: 0px;  /* remove scrollbar space */
		    background: transparent;  /* optional: just make scrollbar invisible */
		}
		</style>
	</head>
	<body class="practice fixed-body">
		<div class="content"> 

		<div class="content-header content-header-practice">Learn & Practice</div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Which of these shows dramatic irony?</p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="62%"></th>
		      <th width="19%" class="text-center">Uses Dramatic Irony</th>
		      <th width="19%" class="text-center">Does Not Use Dramatic Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A man who cannot swim falls in the water and yells “Help!” The reader knows the water is shallow enough that the man can stand up.</td>
		      <td class="text-center cm-col"><input type="radio" class="q4_1" name="q4_1" value="irony"/></td>
		      <td class="text-center cm-col"><input type="radio" class="q4_1" name="q4_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>No one knows what happened to Christopher’s bike. He locked it to the bike rack at school but it disappeared.</td>
		      <td class="text-center cm-col"><input type="radio" name="q4_2" value="irony"/></td>
		      <td class="text-center cm-col"><input type="radio" name="q4_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Marianna’s father is happy that she ate all of her broccoli, but the reader knows that she fed it to the dog while her father was not watching.</td>
		      <td class="text-center cm-col"><input type="radio" name="q4_3" value="irony"/></td>
		      <td class="text-center cm-col"><input type="radio" name="q4_3" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Sarah is usually good at soccer. On the day of the big game, though, she misses the ball every time she tries to kick it. Her friend says, “Wow, you are having a great game.”</td>
		      <td class="text-center cm-col"><input type="radio" name="q4_4" value="irony"/></td>
		      <td class="text-center cm-col"><input type="radio" name="q4_4" value="not-irony"/></td>
		    </tr>
		  </tbody>
		  
		</table>
		
		</div>
		<div class="rationale-sidebar"></div>

		</div>
				<?php $width = "42"; ?>
		<?php $back = "practice-3.php"; ?>
		<?php $next = ""; ?>
		<?php include '_footer_progress.php'?>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		
		<script>
			$(document).foundation();
			
			var questions = ["q4_1","q4_2","q4_3","q4_4"];
	      	var answerKey = {q4_1:"irony", q4_2:"not-irony",q4_3:"irony", q4_4:"not-irony"};
	      	var hintArray = {
	      	      	"hint_q4_1":{
	          	      	"not-irony":"In dramatic irony, the reader knows more than the character. <br/><br/>Do you know more than the character in this example?",
	          	      	},
	      	      	"hint_q4_2":{
	          	      	"irony":"In dramatic irony, the reader knows more than the character. <br/><br/>Do you know more than the character in this example?",
						},
	      	      	"hint_q4_3":{
	          	      	"not-irony":"In dramatic irony, the reader knows more than the character. <br/><br/>Do you know more than the character in this example?",
	              	},
	              	"hint_q4_4":{
	          	      	"irony":"In dramatic irony, a funny or tragic situation is created when the reader knows more than a character. Try again!",
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q4_1":"Correct! In dramatic irony, the reader knows more than the character.<br/><br/>Readers know that the water is shallow, but the man does not.",
	      	      	"rationale_q4_2":"Correct! In dramatic irony, the reader knows more than the character. <br/><br/>Readers don’t know more than Christopher, so this is not ironic.",
	      	      	"rationale_q4_3":"Correct! In dramatic irony, the reader knows more than the character. <br/><br/>Readers know more than Marianna’s father about what happened to her broccoli.",
	      	      	"rationale_q4_4":"Correct! Readers don’t know more than Sarah or her friend, so this is not ironic."
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
      			ChoiceMatrix.initialize("practice_4",4,4);
      			if(hasAlreadyAnswered("practice_4")) {
					ChoiceMatrix.setPreviousResponse();
				}
      			$(".num-questions-remaining").text("6 questions left");
      		});
      		
			window.onload = function() {
				
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>