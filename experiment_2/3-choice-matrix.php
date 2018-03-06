<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "62.5"; ?>
		<?php include '_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  <h2 class="title medium-12">Writers use words and phrases to help organize their ideas in an opinion piece. How would a writer use the words below?</h2>
		  
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
		<div class="grid-x grid-padding-x footer" style="position:absolute; z-index:22; bottom:0; margin-bottom: 7px;">
			<a class="button back large" href="learn-page-2.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		<div class="hint">
			<p class="hint-label">Not quite!</p>
			<p class="hint-text primary">Phrases used to organize information by importance show a special or major idea being explained. Try again!</p>
			<p class="hint-text secondary">Words and phrases can tell a reader the sequence or number of reasons used in an opinion piece. Try again!</p>
		</div>
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal style="background-color: #94D150; color: #FFF"></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q3_1","q3_2","q3_3","q3_4"];
	      	var answerKey = {q3_1:"order", q3_2:"order",q3_3:"importance",q3_4:"importance"};
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
				if($('.hint').is(':visible')) {
					ChoiceMatrix.resetForm();
				}
				ChoiceMatrix.enableButton();
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize('question_3',4,4);
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