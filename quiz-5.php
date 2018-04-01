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
		<span class="point-quiz-board"> - points</span>
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
			var hintResponse = "Dramatic irony means having information that characters don't, situational irony is when a scene ends differently than expected, and verbal irony is when the words said are the opposite of what is meant.";
			var rationaleResponse = "The driver’s remark is verbal irony because he says “wonderful” when he is actually frustrated.<br/><br/>Maria’s situation is situational irony because the reader does not expect someone who starts a dog walking business to be allergic to dogs.<br/><br/>James’ situation creates suspense because he is almost caught by his parents. ";
			var questions = ["q5_1","q5_2","q5_3"];
	      	var answerKey = {q5_1:"verbal", q5_2:"situational",q5_3:"suspense"};
	      	var hintArray = {
	      	      	"hint_q5_1":{
	          	      	"situational":hintResponse,
	          	      	"dramatic":hintResponse,
	          	      	"suspense":hintResponse,
	          	      	"verbal":hintResponse
		          	},
	      	      	"hint_q5_2":{
		      	      	"situational":hintResponse,
	          	      	"dramatic":hintResponse,
	          	      	"suspense":hintResponse,
	          	      	"verbal":hintResponse
		          	},
	      	      	"hint_q5_3":{
		      	      	"situational":hintResponse,
	          	      	"dramatic":hintResponse,
	          	      	"suspense":hintResponse,
	          	      	"verbal":hintResponse
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q5_1":rationaleResponse,
	      	      	"rationale_q5_2":rationaleResponse,
	      	      	"rationale_q5_3":rationaleResponse,
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
      			ChoiceMatrix.isQuiz=true;
      			if(hasAlreadyAnswered("quiz_5")) {
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
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>