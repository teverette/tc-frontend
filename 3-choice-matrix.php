<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice">
		<?php $width = "55.5"; ?>
		<?php include '_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		 <h2 class="title medium-12">Writers use words and phrases to help <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="To arrange information and ideas into a pattern or section.">organize</span> their ideas in an opinion piece. How would a writer use the words below?</h2>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="40%"></th>
		      <th width="30%" class="text-center">To show <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="Organizing by order lists the sequence or amount of information.">order</span></th>
		      <th width="30%" class="text-center">To show <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="Organizing by importance shows that special or major attention should be given to the information.">importance</span></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>In the end</td>
		      <td class="text-center"><input type="radio" name="q3_1" value="order"/></td>
		      <td class="text-center"><input type="radio" name="q3_1" value="importance"/></td>
		    </tr>
		    <tr>
		      <td>At first</td>
		      <td class="text-center"><input type="radio" name="q3_2" value="order"/></td>
		      <td class="text-center"><input type="radio" name="q3_2" value="importance"/></td>
		    </tr>
		    <tr>
		      <td>Most importantly</td>
		      <td class="text-center"><input type="radio" name="q3_3" value="order"/></td>
		      <td class="text-center"><input type="radio" name="q3_3" value="importance"/></td>
		    </tr>
		    <tr>
		      <td>Above all</td>
		      <td class="text-center"><input type="radio" name="q3_4" value="order"/></td>
		      <td class="text-center"><input type="radio" name="q3_4" value="importance"/></td>
		    </tr>
		  </tbody>
		</table>

		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<a class="button back button-left-side" href="learn-page-2.php"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal style="background-color: #94D150; color: #FFF"></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q3_1","q3_2","q3_3","q3_4"];
	      	var answerKey = {q3_1:"order", q3_2:"order",q3_3:"importance",q3_4:"importance"};
	      	var hintArray = {
	      	      	"hint_q3_1":{
	          	      	"importance":"&ldquo;In the end&rdquo; does not tell how important something is. Try again!",
	          	      	"importance":"&ldquo;In the end&rdquo; does not tell how important something is. Try again!"},
	      	      	"hint_q3_2":{
	          	      	"importance":"&ldquo;At first&rdquo; does not help readers find the most important information. Try again!",
	          	      	"importance":"&ldquo;At first&rdquo; does not help readers find the most important information. Try again!"},
	      	      	"hint_q3_3":{
	          	      	"order":"Organizing by order tells the sequence of events. Try again!",
	          	      	"order":"Organizing by order tells the sequence of events. Try again!"},
          	        "hint_q3_4":{
	          	      	"order":"&ldquo;Above all&rdquo; does not tell which things happened first, next, and last. Try again!",
	          	      	"order":"&ldquo;Above all&rdquo; does not tell which things happened first, next, and last. Try again!"
          	        }
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q3_1":"Correct! Writers use “in the end” to tell the order something happened in.",
	      	      	"rationale_q3_2":"Correct! “At first” is used to tell the order something happened in. ",
	      	      	"rationale_q3_3":"Correct! Writers use “Most importantly” to tell how important an idea is.",
	      	      	"rationale_q3_4":"Correct! “Above all” tells how important an idea is.",
	      	}
	      	var response_key = {};
	      	var nextPage = "4-cloze-dropdown.php";
	      	var storage = window.sessionStorage;

			$(document).on("click",".check", function() {
				ChoiceMatrix.assess(false);
			});
	      
	      	$(document).on("click",".check-verified", function() {
			  window.location.href=nextPage;
	     	});

			$("input:radio").click(function() {
				if($('.hint-icon').is(':visible')) {
					ChoiceMatrix.resetForm();
				}
				ChoiceMatrix.enableButton();
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize('question_3',4,4);
      			if(hasAlreadyAnswered("question_3")) {
					ChoiceMatrix.setPreviousResponse();
				}
      		});

			$(window).bind("unload", function() {
				alert("unload");
			});
      		
			window.onload = function() {
				
			}
		  </script>
	</body>
</html>