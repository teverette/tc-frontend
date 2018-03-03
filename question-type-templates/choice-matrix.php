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
		  
		  
		  <h2 class="title medium-12">What is verbal irony?</h2>
		  <p class="lesson-desc medium-12">Verbal irony is when words express something different from their normal meaning. Is verbal irony being used in the examples below?</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="20%" class="text-center">Verbal Irony</th>
		      <th width="20%" class="text-center">Not Verbal Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A cat drinking a bowl of milk smiles and says, &ldquo;I love milk!&rdquo;</td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A teacher assigns a lot of homework and a student says, &ldquo;I can&rsquo;t imagine a better way to spend my weekend.&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A soccer player makes a goal and the coach says, &ldquo;Well done!&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_3" value="not-irony"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>Verbal irony is saying one thing but meaning another. It is used to keep the reader interested in the narrative.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
			<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
			<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
			</div>
		</div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q1_1","q1_2","q1_3"];
	      	var answerKey = {q1_1:"not-irony", q1_2:"irony",q1_3:"not-irony"};
	      	var response_key = {};
	      	var nextPage = "q2-cloze-dropdown.php";
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