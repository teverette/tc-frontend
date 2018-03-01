<!DOCTYPE html>
<html>
	<head>
		<title>Choice Matrix 1</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress quiz quiz-question" data-quiz-question="0">
		<?php $width = "38.5"; ?>
		<?php include '_progress.php'; ?>
		<img src="images/quiz-board.jpg" class="question-type-icon" />
		<div class="content"> 
		<div class="grid-x grid-padding-x">
		  
		  <h2 class="lesson-label label medium-12">Quiz Question:</h2>
		  <h2 class="title medium-12">In what order should sections of an opinion piece be organized?</h2>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="55%">Section</th>
		      <th width="15%" class="text-center">First</th>
		      <th width="15%" class="text-center">Second</th>
		      <th width="15%" class="text-center">Third</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Body</td>
		      <td class="text-center"><input type="radio" class="q2_1" name="q2_1" value="first"/></td>
		      <td class="text-center"><input type="radio" class="q2_1" name="q2_1" value="second"/></td>
		      <td class="text-center"><input type="radio" class="q2_1" name="q2_1" value="third"/></td>
		    </tr>
		    <tr>
		      <td>Introduction</td>
		      <td class="text-center"><input type="radio" name="q2_2" value="first"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="second"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="third"/></td>
		    </tr>
		    <tr>
		      <td>Conclusion</td>
		      <td class="text-center"><input type="radio" name="q2_3" value="first"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="second"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="third"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>First, an opinion piece should begin with an introduction, second it is followed by a body section and lastly it ends with a conclusion.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
			<a class="button back large" href="mc.php"><i class="fas fa-angle-left"></i> Back</a>
			<a id="choice-matrix-2" class="check button success large float-right">Check</a>
			</div>
		</div>
		<script>
			$(document).foundation();
				
		    	var questions = ["q2_1","q2_2","q2_3"];
		      	var question2 = {q2_1:"second", q2_2:"first",q2_3:"third"};
		      	var nextPage = "choice-matrix-2.php";

		      	var numberCorrect = 3;
			    var points = 0;
				// initialization stuff
			    var storage = window.sessionStorage;
		      	
		      	$(document).ready(function() {
		      		highlightCurrentQuiz();
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
		      });
		      
		      $(document).on("click",".check-verified", function() {
				  window.location.href=nextPage;
		      });
		  </script>
	</body>
</html>