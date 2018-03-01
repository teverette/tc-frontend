<!DOCTYPE html>
<html>
	<head>
		<title>What is situational irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "57"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
		<div class="content"> 
		<div class="grid-x grid-padding-x">
		  
		  
		  <h2 class="title medium-12">What is situational irony?</h2>
		  <p class="lesson-desc medium-12">Situational irony is when the outcome of a situation is different than expected. 
		  Is situational irony being used in the examples below?</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="72%"></th>
		      <th width="14%" class="text-center">Situational Irony</th>
		      <th width="14%" class="text-center">NOT Situational Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Ms. Jones inspects buildings to be sure they are safe. She is very strict and feels responsible for the safety of others. 
		      She hires a company to build a porch on the front of her home. The porch falls off. </td>
		      <td class="text-center"><input type="radio" name="q5_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q5_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>The mother of a toddler buys a gate to block the stairs. While she is distracted the child wanders to the stairs. He 
		      rattles the gate and cries because he can&lsquo;t climb up. </td>
		      <td class="text-center"><input type="radio" name="q5_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q5_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>Mr. Brown exercises every morning and eats small meals for weeks in order to lose weight. 
		      One Saturday morning, he weighs himself. He has gained two pounds. </td>
		      <td class="text-center"><input type="radio" name="q5_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q5_3" value="not-irony"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>Situational irony occurs when the reader expects something to happen and something completely different happens instead. 
		  	Readers expect Mr. Brown to lose weight, not gain it. Readers expect the building inspector’s porch to be safe, not to fall off. 
		  	However, the mother’s gate functions exactly as the reader would expect it to; the child is unable to climb the stairs.</p>
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
				
		    	var questions = ["q5_1","q5_2","q5_3"];
		      	var question2 = {q5_1:"irony", q5_2:"not-irony",q5_3:"irony"};
		      	var nextPage = "q6-multiple-choice.php";

		      	var numberCorrect = 3;
			    var points = 0;
				// initialization stuff
			    var storage = window.sessionStorage;
		      	
			    $("input:radio").click(function() {
					ChoiceMatrix.enableButton();
				});

				$(document).ready(function() {
	      			highlightCurrentQuiz();
	      			ChoiceMatrix.initialize(3,3);
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
					highlightCorrectQuiz();
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