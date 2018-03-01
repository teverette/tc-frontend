<!DOCTYPE html>
<html>
	<head>
  		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
<body class="progress">
		<?php $width = "46.2"; ?>
		<?php include '_progress.php'; ?>
		<img src="images/msg-bubbles.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="lesson-label label medium-10 practice">Practice Question:</h2>
  <h2 class="title medium-12 ">Writers use words and phrases to help organize their ideas in an
  opinion piece. How would a writer use the words below?</h2>
  <p class="lesson-desc medium-12">Select the correct option next to each word.</p>
    <table class="medium-12 unstriped grid-matrix">
  <thead>
    <tr>
      <th width="55%">Section</th>
      <th width="20%" class="text-center">To Show Order</th>
      <th width="25%" class="text-center">To Show Importance</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Next</td>
      <td class="text-center"><input type="radio" class="q3_1" name="q3_1" value="order"/></td>
      <td class="text-center"><input type="radio" class="q3_1" name="q3_1" value="importance"/></td>
    </tr>
    <tr>
      <td>One reason</td>
      <td class="text-center"><input type="radio" class="q3_2" name="q3_2" value="order"/></td>
      <td class="text-center"><input type="radio" class="q3_2" name="q3_2" value="importance"/></td>
    </tr>
    <tr>
      <td>Most important</td>
      <td class="text-center"><input type="radio" class="q3_3" name="q3_3" value="order"/></td>
      <td class="text-center"><input type="radio" class="q3_3" name="q3_3" value="importance"/></td>
    </tr>
    <tr>
      <td>Above all</td>
      <td class="text-center"><input type="radio" class="q3_4" name="q3_4" value="order"/></td>
      <td class="text-center"><input type="radio" class="q3_4" name="q3_4" value="importance"/></td>
    </tr>
  </tbody>
</table>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>The words "one reason" and "next" organize an idea based on its order. The phrases "most important" and 
  	"above all" organize the ideas in the opinion piece based on their importance.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="choice-matrix-1.php"><i class="fas fa-angle-left"></i> Back</a>
<a id="choice-matrix-2" class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();

		var questions = ["q3_1","q3_2","q3_3","q3_4"];
    	var question2 = {q3_1:"order", q3_2:"order",q3_3:"importance",q3_4:"importance"};
    	var nextPage = "highlight-s3.php";
    	var storage = window.sessionStorage;
    
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

    	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = question2[name];
    		if(correctAnswer==selectedAnswer) {
				$(o).parent().addClass('correct');
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.append('<i class="fas fa-times correct-icon-element" aria-hidden="true"></i>');
				
			} else {
				$(o).parent().addClass('incorrect');
				$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.append('<i class="fas fa-check incorrect-icon-element" aria-hidden="true"></i>');
			}
    	}
      
      $(document).on("click",".check", function() {
    	  loopThruQuestions();
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