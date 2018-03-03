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
		  
		  
		  <h2 class="title medium-12"></h2>
		  <p class="lesson-desc medium-12">Read each sentence. Then choose which section of an opinion piece is shown in each sentence.</p>
		  
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
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>The introduction provides information about public transportation and states the writer’s opinion that trains are a better form of 
		  	public transportation than buses. The body section of the opinion piece explains the reasons that trains are a better form of 
		  	transportation than buses. The conclusion ends the opinion piece and reviews how the opinion was stated and what the writer wants their
		  	reader or listener to do and believe. </p>
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