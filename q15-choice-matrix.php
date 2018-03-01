<!DOCTYPE html>
<html>
	<head>
		<title>What technique is being used in each example?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress quiz quiz-question" data-quiz-question="4">
		<?php $width = "100"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="lesson-label medium-10 quiz"><img src="images/QuizIcon_Spec.png" class="label-type-icon"/>Quiz Question</h2>
		<div class="content"> 
		<div class="grid-x grid-padding-x">
		  <h2 class="title medium-12">What technique is being used in each example?</h2>
		  <p class="lesson-desc medium-12">Click the buttons to indicate which author’s craft is being used.</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="44%"></th>
		      <th width="15%" class="text-center">Verbal Irony</th>
		      <th width="15%" class="text-center">Situational Irony</th>
		      <th width="15%" class="text-center">Dramatic Irony</th>
		      <th width="15%" class="text-center">Suspense</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A driver gets stuck in traffic and says, “Wonderful.”</td>
		      <td class="text-center"><input type="radio" name="q15_1" value="verbal"/></td>
		      <td class="text-center"><input type="radio" name="q15_1" value="situational"/></td>
		      <td class="text-center"><input type="radio" name="q15_1" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" name="q15_1" value="suspense"/></td>
		    </tr>
		    <tr>
		      <td>Maria starts a dog walking business. She discovers she’s allergic to dogs.</td>
		      <td class="text-center"><input type="radio" name="q15_2" value="verbal"/></td>
		      <td class="text-center"><input type="radio" name="q15_2" value="situational"/></td>
		      <td class="text-center"><input type="radio" name="q15_2" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" name="q15_2" value="suspense"/></td>
		    </tr>
		    <tr>
		      <td>James sneaks out of the house. His parents wake up and walk by his bedroom but do not go inside </td>
		      <td class="text-center"><input type="radio" name="q15_3" value="verbal"/></td>
		      <td class="text-center"><input type="radio" name="q15_3" value="situational"/></td>
		      <td class="text-center"><input type="radio" name="q15_3" value="dramatic"/></td>
		      <td class="text-center"><input type="radio" name="q15_3" value="suspense"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p> The outcome of Maria’s dog walking business is situational irony because the reader does not expect someone who starts a
		  	 dog walking business to be allergic to dogs. The driver’s remark is verbal irony because he says “wonderful” 
		  	 but is actually frustrated by being stuck in traffic. James’ situation creates suspense because he is almost caught 
		  	 by his parents.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
			<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
			<a id="choice-matrix-2" class="check-disabled button success large float-right">Submit</a>
			</div>
		</div>
		<script>
			$(document).foundation();
				
		    	var questions = ["q15_1","q15_2","q15_3"];
		      	var question2 = {q15_1:"verbal", q15_2:"situational",q15_3:"suspense"};
		      	var nextPage = "lp-end.php";

		      	var numberCorrect = 3;
			    var points = 0;
				// initialization stuff
			    var storage = window.sessionStorage;

		      	$("input:radio").click(function() {
					ChoiceMatrix.enableButton();
				});

				$(document).ready(function() {
	      			highlightCurrentQuiz();
	      			highlightAllCorrectQuiz();
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