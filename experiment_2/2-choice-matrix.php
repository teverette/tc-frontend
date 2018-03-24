<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice">
		<?php $width = "22.2"; ?>
		<?php include '_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Choose which section of an opinion piece is shown in each sentence.</p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="14%" class="text-center">
		      <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The introduction starts the opinion piece. It includes the opinion statement and helps readers understand the topic.">Introduction</span>
		      	</th>
		      <th width="13%" class="text-center"><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The body follows the introduction. It explains how the opinion statement is supported with reasons or evidence.">Body</span></th>
		      <th width="13%" class="text-center"><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The conclusion is the ending section. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.">Conclusion</span></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>All forms of public transportation can make traveling easier, but trains are a better form of transportation than buses.</td>
		      <td class="text-center"><input type="radio" name="q2_1" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_1" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_1" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Trains are a better form of public transportation because they can travel at higher speeds than buses. Trains do not travel on roads  and avoid traffic jams.</td>
		      <td class="text-center"><input type="radio" name="q2_2" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Since trains are often faster and travel through less traffic, people should choose to ride a train over a bus if they have that option.</td>
		      <td class="text-center"><input type="radio" name="q2_3" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="conclusion"/></td>
		    </tr>
		  </tbody>
		</table>
		
		</div>
		</div>
		
		<div class="grid-x grid-padding-x footer">
			<a class="button back button-left-side" href="1-cloze-dropdown.php"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal style="background-color: #94D150; color: #FFF"></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q2_1","q2_2","q2_3"];
	      	var answerKey = {q2_1:"introduction", q2_2:"body",q2_3:"conclusion"};
	      	var hintArray = {
	      	      	"hint_q2_1":{
	          	      	"body":"This sentence states the opinion statement. Try again.",
	          	      	"conclusion":"This sentence states the opinion statement. Try again."},
	      	      	"hint_q2_2":{
	          	      	"introduction":"This section includes reasons that support the opinion statement. Try again.",
	          	      	"conclusion":"This section includes reasons that support the opinion statement. Try again."},
	      	      	"hint_q2_3":{
	          	      	"introduction":"This sentence repeats the opinion statement and makes a suggestion. Try again.",
	          	      	"body":"This sentence repeats the opinion statement and makes a suggestion. Try again."
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q2_1":"Correct! This sentence introduces the opinion statement and helps the reader understand the topic.",
	      	      	"rationale_q2_2":"Correct! The body gives reasons that support the writer’s opinion statement.",
	      	      	"rationale_q2_3":"Correct! This sentence provides a strong finish by repeating the opinion statement and providing a call to action.",
	      	}
	      	var response_key = {};
	      	var nextPage = "learn-page-2.php";
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
      			ChoiceMatrix.initialize("question_2",3,3);
      			if(hasAlreadyAnswered("question_2")) {
					ChoiceMatrix.setPreviousResponse();
				}
      		});
      		
			window.onload = function() {
				
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>