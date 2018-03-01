<!DOCTYPE html>
<html>
<head>
  <title>testing</title>
  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress quiz quiz-question" data-quiz-question="2">
	<?php $width = "69.2"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/quiz-board.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="lesson-label label medium-10 quiz">Quiz Question:</h2>
  <h2 class="title medium-10">How are the underlined words used by the writer to show the order or importance
  of the reasons?</h2>
  <p class="lesson-desc medium-12">Select the correct option next to each sentence.</p>
    <table class="medium-12 unstriped grid-matrix">
  <thead>
    <tr>
      <th width="72%">Example</th>
      <th width="10%" class="text-center">Order</th>
      <th width="18%" class="text-center">Importance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>One reason it is faster under water is that a swimmer's strokes can spread across longer distances in less time.</td>
      <td class="text-center"><input type="radio" class="q6_1 question" name="q6_1" value="order"/></td>
      <td class="text-center"><input type="radio" class="q6_1 question" name="q6_1" value="importance"/></td>
    </tr>
    <tr>
      <td>Another reason underwater swimming is faster is that the splashing on the surface slows the swimmer down.</td>
      <td class="text-center"><input type="radio" class="q6_2 question" name="q6_2" value="order"/></td>
      <td class="text-center"><input type="radio" class="q6_2 question" name="q6_2" value="importance"/></td>
    </tr>
    <tr>
      <td>Above all, underwater swimming is faster because swimmers do not get as tired from the splashing and repeated movements
    used in surface swimming.</td>
      <td class="text-center"><input type="radio" class="q6_3 question" name="q6_3" value="order"/></td>
      <td class="text-center"><input type="radio" class="q6_3 question" name="q6_3" value="importance"/></td>
    </tr>
  </tbody>
</table>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Opinion pieces can use words or phrases that organize the ideas in the piece based on their order or importance. "One reason" and "another reason"
  	were used to show the order of reasons in the body section of an opinion piece. "Above all" was used to show the importance of a reason in
  	the body section of an opinion piece.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="cloze-dropdown.php"><i class="fas fa-angle-left"></i> Back</a>
<a id="choice-matrix-2" class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();
      	var questions = ["q6_1","q6_2","q6_3"];
  		var questionSet = {q6_1:"order", q6_2:"order",q6_3:"importance"};
  		var nextPage = "mc-2.php";
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
	  		highlightCorrectQuiz();
			if(points==numberCorrect) {
		   		incrementScore();
		    }
	  	}
	
	  	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = questionSet[name];
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
  	  loopThruQuestions();
  	  scoreStuff();
  	  showRationale();
  	  updateNextStepBtn(this);
    });
    
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
     
		$(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>
<!-- 


 -->