<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "84.6"; ?>
		<?php include '_progress.php'; ?>
		<img src="images/msg-bubbles.jpg" class="question-type-icon"/>
		<div class="content"> 
		<div class="grid-x grid-padding-x">
		  
		  <h2 class="lesson-label label medium-12">Practice Question:</h2>
		  <h2 class="title medium-12">Read each sentence.</h2>
		  <p class="lesson-desc medium-12">Select which section of an opinion piece is shown in each sentence.</p>
		    <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="64%">Section</th>
		      <th width="13%" class="text-center">Introduction</th>
		      <th width="10%" class="text-center">Body</th>
		      <th width="13%" class="text-center">Conclusion</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>All forms of public transportation can make traveling easier, but trains are a better form of transportation than buses.</td>
		      <td class="text-center"><input type="radio" class="q8_1 question" name="q8_1" value="introduction"/></td>
		      <td class="text-center"><input type="radio" class="q8_1 question" name="q8_1" value="body"/></td>
		      <td class="text-center"><input type="radio" class="q8_1 question" name="q8_1" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Trains are a better form of public transportation because they can travel at higher speeds than buses. Trains do not travel
		      at higher speeds than buses. Trains do not travel on roads and avoid traffic jams.</td>
		      <td class="text-center"><input type="radio" class="q8_2 question" name="q8_2" value="introduction"/></td>
		      <td class="text-center"><input type="radio" class="q8_2 question" name="q8_2" value="body"/></td>
		      <td class="text-center"><input type="radio" class="q8_2 question" name="q8_2" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Since trains are often faster and travel through less traffic, people should choose to ride a train over a bus if they have that option.</td>
		      <td class="text-center"><input type="radio" class="q8_3 question" name="q8_3" value="introduction"/></td>
		      <td class="text-center"><input type="radio" class="q8_3 question" name="q8_3" value="body"/></td>
		      <td class="text-center"><input type="radio" class="q8_3 question" name="q8_3" value="conclusion"/></td>
		    </tr>
		  </tbody>
		</table>
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>The introduction provides information about public transportation and states the writer's opinion that trains are a better form of public transportation
		  	than buses. The body section of the opinion piece explains the reasons that trains are a better form of transportation than buses. The 
		  	conclusion ends the opinion piece and reviews how the opinion was stated and what the writer wants their reader or listener to do and believe.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
				<a class="button back large" href="mc-3.php"><i class="fas fa-angle-left"></i> Back</a>
				<a id="choice-matrix-2" class="check button success large float-right">Check</a>
			</div>
		</div>
	 	<script>
			$(document).foundation();
	     	var questions = ["q8_1","q8_2","q8_3"];
			var questionSet = {q8_1:"introduction", q8_2:"body",q8_3:"conclusion"};
			var nextPage = "quiz-transition.php";
			var numberCorrect = 3;
		    var points = 0;
	
	      
	      	function loopThruQuestions() {
				var questionLength = questions.length;
				for(i=0; i<questionLength; i++){
					console.log("question: " + questions[i]);
					var name = questions[i];
					var val = $('input[name='+name+']:checked').val();
					console.log(val);
					updateQuestionStatus(this, name, val);
				}
		  	}
	
		  	function scoreStuff() {
		  		if(points==numberCorrect) {
			    	  incrementScore();
			    	  highlightCorrectQuiz();
				}
		  	}
		
		  	function updateQuestionStatus(o, name, selectedAnswer) {
		      	var correctAnswer = questionSet[name];
				if(correctAnswer==selectedAnswer) {
					$(o).parent().addClass('correct');
					$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: -10px; top: 1px;" aria-hidden="true"></i>');
					points++;
				} else {
					$(o).parent().addClass('incorrect');
					$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.append('<i class="fas fa-times" style="color: #FED700;position:relative; right: -10px; top: 1px;" aria-hidden="true"></i>');
				}
			}
	  
			  $(document).on("click",".check", function() {
				  loopThruQuestions();
				  scoreStuff()
				  showRationale();
				  updateNextStepBtn(this);
			  });
	      $(document).on("click",".check-verified", function() {
	    	  console.log("is verified");
			  window.location.href=nextPage;
	      });
	      var storage = window.sessionStorage;
	      $(document).ready(function() {
				highlightCurrentQuiz();
			highlightAllCorrectQuiz();
			});
	  </script>
</body>
</html>