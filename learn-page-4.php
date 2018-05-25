<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	</head>
	<body class="practice learn learn-page-4">
		<div class="content-header content-header-learn">Learn & Practice</div>
		<div class="content-borderless">
		<div class="content-borderless-window">
		<div class="content first-content">
			
			<div class="content-wrapper" style="width:700px; height:400px;overflow:hidden">
			<div class="content-window" style="position:relative">
					<div class="grid-x grid-padding-x slide-1">
						<h2 class="title-learn item">What is situational irony?</h2>
						<p class="irony-description item">Situational irony occurs when the actual outcome of a situation is different from the expected outcome. It can be used to add humor and interest or to build suspense.
						 </p>
					</div>
					<div class="grid-x grid-padding-x slide-2">
						<div class="image-holder">
							<img src="images/CSK-L7-twist.gif" class="first-item item item-one"/>
						</div>
						<div class="content-example-holder">
							<p class="what-is-example first-item item item-two">Situational irony is often described as “a twist” in the story. </p>
						</div>				
					</div>
					<div class="grid-x grid-padding-x slide-3 text-center">
						<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:125px"><span class="">For example, if an Olympic runner loses a race to a middle school student, 
						situational irony is created; readers expect the Olympic runner to win, but instead, the opposite occurs.</span>
						</div>
					</div>
			</div>
			</div>
			<?php $width = "49"; ?>
			<?php include '_footer_learn_progress.php'; ?>
		</div>
		<div class="content-2 item">
			<div class="content"> 
			<div class="grid-x grid-padding-x">
			  <p class="lesson-desc medium-12">Which of these uses situational irony?</p>
			   
			  <table class="medium-12 unstriped grid-matrix">
			  <thead>
			    <tr>
			      <th width="62%"></th>
			      <th width="19%" class="text-center">Situational Irony</th>
			      <th width="19%" class="text-center">NOT Situational Irony</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Ms. Jones inspects buildings to be sure they are safe. She is very strict and feels responsible for the safety of others. 
			      She hires a company to build a porch on the front of her home. The porch falls off.</td>
			      <td class="text-center cm-col"><input type="radio" class="q5_1" name="q5_1" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" class="q5_1" name="q5_1" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>The mother of a toddler buys a gate to block the stairs. While she is distracted the child wanders to the stairs.
			       He rattles the gate and cries because he can’t climb up. </td>
			      <td class="text-center cm-col"><input type="radio" name="q5_2" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" name="q5_2" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>Mr. Brown exercises every morning and eats small meals for weeks in order to lose weight. 
			      One Saturday morning, he weighs himself. He has gained two pounds.</td>
			      <td class="text-center cm-col"><input type="radio" name="q5_3" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" name="q5_3" value="not-irony"/></td>
			    </tr>
			  </tbody>
			  
			</table>
			
			</div>
			<div class="rationale-sidebar"></div>
			</div>
			<?php $back = "practice-4.php"; ?>
		<?php $width = "56.00"; ?>
		<?php include '_footer_progress.php'?>
		</div>
		</div></div>
		
		 <script>
		      $(document).foundation();
		      var maxWindowPos = -1200;
		      var question_item = 5;
		      $(document).ready(function() {
		    	  $(".num-questions-remaining").text("6 questions left");
		    	  $(".forward-button").html('Check <i class="fas fa-lg fa-check icon-on-right"></i>');
		    	  $(".slide-1 .item").each(function() {
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".slide-1").addClass("accessed");
		      });

		      var questions = ["q5_1","q5_2","q5_3"];
		      	var answerKey = {q5_1:"irony", q5_2:"not-irony",q5_3:"irony"};
		      	var hintArray = {
		      	      	"hint_q5_1":{
		          	      	"not-irony":"Situational irony is when the outcome of a situation is different than expected. <br/><br/>Is it unexpected when the porch falls off?",
		          	      	},
		      	      	"hint_q5_2":{
		          	      	"irony":"For situational irony, the outcome needs to be different from what is expected. <br/><br/>Is it unexpected when the child cries?",
							},
		      	      	"hint_q5_3":{
		          	      	"not-irony":"In situational irony, something unexpected happens. <br/><br/>Is it unexpected when Mr. Brown gains weight?",
		              	}
		      	}
		      	var rationaleArray = {
		      	      	"rationale_q5_1":"The reader expects a building inspector’s porch to be safe, so it is ironic when the opposite happens.",
		      	      	"rationale_q5_2":"This is not situational irony, because the child’s reaction is what the reader expects.",
		      	      	"rationale_q5_3":"The reader expects Mr. Brown to lose weight, so when the opposite happens, it is situational irony."
		      	}
		      	var response_key = {};
		      	var nextPage = "practice-6.php";
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
	      			$(".forward-button").html('Check <img src="images/check-icon-white.png" style="margin-left:3px"/>');
	      		});
	    </script>
	</body>
</html>
