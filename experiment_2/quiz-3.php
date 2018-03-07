<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice quiz quiz-question" data-quiz-question="2">
		<?php include '_quiz_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  <h2 class="title medium-12">How are the underlined words used by the writer to show the order or importance of the reasons?</h2>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="40%"></th>
		      <th width="30%" class="text-center"><span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="true" tabindex="1" title="Organizing by order lists the sequence or amount of information.">Order</span></th>
		      <th width="30%" class="text-center"><span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="true" tabindex="1" title="Organizing by importance shows that special or major attention should be given to the information.">Importance</span></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td><span style="text-decoration: underline">One reason</span> it is faster under water is that a swimmer’s strokes can 
		      spread across longer distances in less time.</td>
		      <td class="text-center"><input type="radio" name="quiz_3_1" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_3_1" value="2"/></td>
		    </tr>
		    <tr>
		      <td><span style="text-decoration: underline">Another reason</span> underwater swimming is faster is that the splashing on 
		      the surface slows the swimmer down.</td>
		      <td class="text-center"><input type="radio" name="quiz_3_2" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_3_2" value="2"/></td>
		    </tr>
		    <tr>
		      <td><span style="text-decoration: underline">Above all</span>, underwater swimming is faster than surface swimming and does not 
		      cause swimmers to get as tired from the splashing and repeated movements used in surface swimming.</td>
		      <td class="text-center"><input type="radio" name="quiz_3_3" value="1"/></td>
		      <td class="text-center"><input type="radio" name="quiz_3_3" value="2"/></td>
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
			<a class="button back button-left-side" href="learn-page-2.php"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
	
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["quiz_3_1","quiz_3_2","quiz_3_3"];
	      	var answerKey = {quiz_3_1:"1", quiz_3_2:"1",quiz_3_3:"2"};
	      	var response_key = {};
	      	var nextPage = "quiz-4.php";
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
				ChoiceMatrix.initialize('quiz_3',3,3);
      			ChoiceMatrix.isQuiz=true; 
      			getScore();

      		});

			$(window).bind("unload", function() {
				alert("unload");
			});
      		
			window.onload = function() {
				var isLocked = lockTest();
				if(isLocked) {
					ChoiceMatrix.getResponses();
				}
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>