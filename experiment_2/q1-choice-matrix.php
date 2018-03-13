<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice quiz" data-quiz-question="0">
		<?php $width = "35.7"; ?>
		<?php include '_quiz_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  <h2 class="title medium-12">In what order should sections of opinion piece be organized?</h2>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="40%"></th>
		      <th width="20%" class="text-center">First</th>
		      <th width="20%" class="text-center">Second</th>
		      <th width="20%" class="text-center">Last</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The body follows the introduction. It explains how the opinion statement is supported with reasons or evidence.">Body</span></td>
		      <td class="text-center"><input type="radio" name="quiz_1_1" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_1" value="2"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_1" value="3"/></td>
		    </tr>
		    <tr>
		      <td> <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The introduction starts the opinion piece. It includes the opinion statement and helps readers understand the topic.">Introduction</span></td>
		      <td class="text-center"><input type="radio" name="quiz_1_2" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_2" value="2"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_2" value="3"/></td>
		    </tr>
		    <tr>
		      <td><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="The conclusion is the ending section. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.">Conclusion</span></td>
		      <td class="text-center"><input type="radio" name="quiz_1_3" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_3" value="2"/></td>
		      <td class="text-center"><input type="radio" name="quiz_1_3" value="3"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>First, an opinion piece should begin with an introduction, second it is followed a 
		  	body section and lastly it ends with a conclusion.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<a class="button back button-left-side" href="quiz-transition.php"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
	
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["quiz_1_1","quiz_1_2","quiz_1_3"];
	      	var answerKey = {quiz_1_1:"2", quiz_1_2:"1",quiz_1_3:"3"};
	      	var response_key = {};
	      	var nextPage = "quiz-2.php";
	      	var storage = window.sessionStorage;

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
      			ChoiceMatrix.initialize('quiz_1',3,3);
      			ChoiceMatrix.isQuiz=true;
      			getScore();
      		});

			$(window).bind("unload", function() {
				alert("unload");
			});
      		
			window.onload = function() {
				var isLocked = lockTest();
				if(isLocked) {
					ChoiceMatrix.setPreviousResponse();
				}
			}
			var storage = window.sessionStorage;
	    	storage["quiz_total"]=0;
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>