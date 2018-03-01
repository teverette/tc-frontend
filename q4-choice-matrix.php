<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "50"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
		<div class="content"> 
		<div class="grid-x grid-padding-x">
		  
		  <h2 class="title medium-12">What is dramatic irony?</h2>
		  <p class="lesson-desc medium-12">Dramatic irony encourages readers to continue reading to learn what the characters will 
		  	do and whether they will ever learn the truth. Is dramatic irony being used in the examples below?</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="64%"></th>
		      <th width="18%" class="text-center">Uses Dramatic Irony</th>
		      <th width="18%" class="text-center">Does Not Use Dramatic Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A man who cannot swim falls in the water and yells “Help!” The reader knows the water is shallow enough that the man can stand up.</td>
		      <td class="text-center"><input type="radio" class="q4_1" name="q4_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" class="q4_1" name="q4_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>No one knows what happened to Christopher’s bike. He locked it to the bike rack at school but it disappeared.</td>
		      <td class="text-center"><input type="radio" name="q4_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q4_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Marianna’s father is happy that she ate all of her broccoli, but the reader knows that she fed it to the dog while her father was not watching.</td>
		      <td class="text-center"><input type="radio" name="q4_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q4_3" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Sarah is usually good at soccer. On the day of the big game, though, she misses the ball every time she tries to kick it. Her friend says, &ldquo;Wow, you are having a great game.&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q4_4" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q4_4" value="not-irony"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>Dramatic irony occurs when the readers know information that one or more characters do not know. 
		  		It can lead to funny or tragic situations in the narrative.</p>
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
				
		    	var questions = ["q4_1","q4_2","q4_3","q4_4"];
		      	var question2 = {q4_1:"irony", q4_2:"not-irony",q4_3:"irony",q4_4:"not-irony"};
		      	var nextPage = "q5-choice-matrix.php";

		      	var numberCorrect = 4;
			    var points = 0;
				// initialization stuff
			    var storage = window.sessionStorage;
		      	
			    $("input:radio").click(function() {
					ChoiceMatrix.enableButton();
				});

				$(document).ready(function() {
	      			highlightCurrentQuiz();
	      			ChoiceMatrix.initialize(4,4);
	      		});
	      		
		      	function loopThruQuestions() {
		      		var questionLength = questions.length;
					for(i=0; i<questionLength; i++){
						console.log("question: " + questions[i]);
						var name = questions[i];
						var val = $('input[name='+name+']:checked').val();
						console.log(val);
						updateQuestionStatus(this, name, val);
		    	  	}
					
					if(points==numberCorrect) {
				    	  incrementScore();
				      }
		      	}

		      	function updateQuestionStatus(o, name, selectedAnswer) {
			      	var correctAnswer = question2[name];
		      		if(correctAnswer==selectedAnswer) {
						$(o).parent().addClass('correct');
						$('input[name='+name+']:checked').parent()
							.addClass('correct')
							.append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
						points++;
					} else {
						$(o).parent().addClass('incorrect');
						$('input[name='+name+']:checked').parent()
							.addClass('incorrect')
							.append('<i class="fas fa-times" style="color: #FED700;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
					}
		      	}
		      
		      $(document).on("click",".check", function() {
		    	  // todo add question/answer verification logic
		    	  loopThruQuestions();
		    	  showRationale();
		    	  updateNextStepBtn(this);
		    	  $("input").attr('disabled','disabled');
		      });
		      
		      $(document).on("click",".check-verified", function() {
				  window.location.href=nextPage;
		      });

		      window.onload = function() {
		    		lockTest();
		    	}
		  </script>
	</body>
</html>