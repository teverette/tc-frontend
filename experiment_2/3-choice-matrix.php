<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "35.7"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="lesson-label text-center medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  
		  
		  <h2 class="title medium-12">Writers use words and phrases to help organize their ideas in an opinion piece. How would a writer use the words below?</h2>
		  <p class="lesson-desc medium-12">Select the correct button next to each word.</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="40%"></th>
		      <th width="30%" class="text-center">To show order</th>
		      <th width="30%" class="text-center">To show importance</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Next</td>
		      <td class="text-center"><input type="radio" name="q3_1" value="order"/></td>
		      <td class="text-center"><input type="radio" name="q3_1" value="importance"/></td>
		    </tr>
		    <tr>
		      <td>One reason</td>
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
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>The words “one reason”  and “next” organize an idea based on its order. The phrases “most important” and “above all” organize the ideas in the opinion piece based on their  importance. </p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
			<a class="button back large" href="learn-page-2.php"><i class="fas fa-angle-left"></i> Back</a>
			<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
			</div>
		</div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q3_1","q3_2","q3_3","q3_4"];
	      	var answerKey = {q3_1:"order", q3_2:"order",q3_3:"importance",q3_4:"importance"};
	      	var response_key = {};
	      	var nextPage = "4-cloze-dropdown.php";
	      	var storage = window.sessionStorage;

	      	// part of the initialization of the object.
	      	// var numberCorrect = 3;
	      	// var minReq = 3;
	      	// should live inside the object. needs more testing.
		    // var points = 0;
		    // var answered = 0;

			$(document).on("click",".check", function() {
				ChoiceMatrix.assess(false);
			});
	      
	      	$(document).on("click",".check-verified", function() {
			  window.location.href=nextPage;
	     	});

			$("input:radio").click(function() {
				ChoiceMatrix.enableButton();
			});

			$(window).bind("unload", function() {
				alert("unload");
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize(3,3);
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