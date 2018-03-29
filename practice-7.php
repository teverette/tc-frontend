<!DOCTYPE html>
<html>
	<head>
	  <title>Which story uses situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.radio p.lesson-copy {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-weight: 300;	line-height: 20px; margin-bottom:0;line-height: 20px;}
	  	.title {margin-bottom: 12px;}
	  	.p-label{background-color: gray; border-radius:3px; width:22px;height:22px;display:inline-block;text-align:center;color:#FFF;margin-right:2px;}
	  	.split-pane .rationale-sidebar {left:527px; top:307px; width: 477px; height:147px;padding-top:5px; display: none;}
	  	
	  	.split-pane .rationale-sidebar h4 {display:inline-block; margin-left:21px; width:80% }
	  	.split-pane .rationale-sidebar:after {content:"<i class="fas fa-angle-down"></i>"}
	  	.split-pane .hint-status:after,.split-pane .correct-status:after {margin-top: 0;border-width: 0;}
	  	.split-pane .rationale-sidebar.minimize-sidebar{height:60px;top:397px;overflow:hidden}
	  </style>
	</head>
<body class="practice">
	<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	<div class="grid-x grid-padding-x split-pane">
	  <div class="split-pane-left" style="position:absolute; left:48px;">
	  <h2 class="title">Story</h2>
	  	<p><span class="p-label">1</span>Ronald was very excited to start his first day working as a junior chef at an award-winning restaurant. The restaurant had 
	  	received an enormous amount of positive reviews for its menu, wonderful food presentation, and beautiful ambience. Ronald was also 
	  	looking forward to working with Chef Andre Vu. Chef Andre Vu was the lead chef and had created many of the menu’s delicious and 
	  	unique entrees. Ronald had followed Chef Andre Vu’s career and was hoping to learn new techniques from the expert chef.</p>
	  	<p><span class="p-label">2</span>Ronald kept busy during his first day on the job with very specific instructions. Fish must be grilled to the perfect color, texture and temperature as outlined in the recipe guidelines. If any fish was cooked incorrectly, the entire cost of that meal was taken out of the chef’s paycheck. Vegetables had to be roasted with an exact amount of blended spices. If a chef did not receive at least two compliments on vegetables they prepared, then they would have to pay a small fee to a “chef compliments jar.” Chefs that received the most compliments in a day would receive the money that had been collected in the jar. At first Ronald was a bit worried about the restaurant’s rules for chefs, but he figured  part of the restaurant’s success was influenced by high expectations for chefs. </p>
	 	<p>Ronald was thrilled when he received several compliments on the vegetables he prepared.  All of the fish meals Ronald prepared met the recipe requirements and were approved by Chef Andre Vu. At the end of his first day Chef Andre Vu asked Ronald to talk after the restaurant had closed. Though he was tired, Ronald was excited to meet with Chef Andre Vu. Ronald had not gotten a chance to interact with Chef Andre Vu very much because both of them had been so busy preparing meals for the customers. 
<p><span class="p-label">3</span>Chef Andre Vu brought out a meal for both he and Ronald as they sat down to talk. They talked about Chef Andre Vu’s inspiration for recipes, his techniques, and rules for chefs in the restaurant. Ronald noticed that neither one of them had eaten their food because their conversation had been so engaging. 
 <p><span class="p-label">4</span>“We should eat our food. Hopefully it hasn’t gotten too cold or lost some of its flavor,” Ronald said as he began placing food on his fork.
<p><span class="p-label">5</span>“I hope you enjoy it Ronald. I cooked it myself. I put the most money in the daily chef compliments jar and my paycheck usually has the costs of ten fish meals taken out of it.”
	 	
	  </div>
	  <div class="grid-x " style="position:fixed;display:inline-block;left:534px;top:60px; width: 450px">
	  	<h2 class="title medium-12">Which story uses 
	  	<span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="When the outcome of a situation is different than expected.">situational irony</span>?</h2>
	  	<label class="radio">
			<div class="mc-input-box" style="top: 27px;position:relative">
		  		<input type="radio" class="q7_1 question" name="q7_1" value="1"/>
		  	</div>
		  	<p class="lesson-copy mc-text">The reader would not expect that Chef Andre Vu thinks Ronald is a better chef than him.</p>
		</label>
		<label class="radio">
			<div class="mc-input-box" style="top: 27px;position:relative">
		  		<input type="radio" class="q7_1 question" name="q7_1" value="2"/>
		  	</div>
		  	<p class="lesson-copy mc-text">The reader would not expect that Chef Andre Vu does not meet the expectations he sets for the other chefs.</p>
		</label>
	  
	  	<label class="radio">
	  		<div class="mc-input-box" style="top: 27px;position:relative">
	  			<input  type="radio" class="q7_1 question" name="q7_1" value="3"/>
	  		</div>
	  		<p class="lesson-copy mc-text">The reader would not expect that Ronald accepts and understands the expectations for chefs working at the restaurant.</p>
	  	</label>
	  </div>
	  <div class="rationale-sidebar"></div>
	  
	</div>

	</div>
		<?php $width = "58"; ?>
		<?php $back = "practice-6.php"; ?>
		<?php include '_footer_progress.php'?>
	
 <script>
      $(document).foundation();
      /* setup question and answer for quiz question */
      	var questions = ["q7_1"];
      	var hintArray = {
      	      	"hint_q7_1":{
          	      	1:"The text does not state that Chef Andre Vu is a better chef than Ronald.",
          	      	3:"The text states that Ronald was worried about the rules, not that he would refuse them. "
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q7_1":"Correct! An unexpected outcome is what creates situational irony."
      	}
		var answerKey = {q7_1:"2"};
  		var nextPage = "learn-page-5.php";

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
			ChoiceMatrix.initialize("practice_7",1,1,"mc");
			if(hasAlreadyAnswered("practice_7")) {
				ChoiceMatrix.setPreviousResponse();
			}
		});

      	window.onload = function() {
    		
		}
  </script>
</body>
</html>