<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "37.5"; ?>
		<?php include '_progress.php'; ?>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Choose which section of an opinion piece is shown in each sentence.</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="14%" class="text-center">Introduction</th>
		      <th width="13%" class="text-center">Body</th>
		      <th width="13%" class="text-center">Conclusion</th>
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
		
		<div class="grid-x grid-padding-x footer" style="position:absolute; z-index:22; bottom:0; margin-bottom: 7px;">
			<a class="button back large" href="practice-transition.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		<div class="hint">
			<p class="hint-label">Not quite!</p>
			<p class="hint-text primary">Specific examples about how trains are better than buses offers support for the opinion. Try again!</p>
			<p class="hint-text secondary">The writer reviews their main points and tells how people should behave in the conclusion. Try again!</p>
		</div>
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal style="background-color: #94D150; color: #FFF"></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q2_1","q2_2","q2_3"];
	      	var answerKey = {q2_1:"introduction", q2_2:"body",q2_3:"conclusion"};
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
      		});
      		
			window.onload = function() {
				var isLocked = lockTest();
				if(isLocked) {
					ChoiceMatrix.setPreviousResponse();
//					ChoiceMatrix.getResponses();
				}
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>