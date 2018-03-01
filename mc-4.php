<!DOCTYPE html>
<html>
<head>
  <title>Question 5</title>
  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress quiz quiz-question" data-quiz-question="4">
	<?php $width = "92.3"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/quiz-board.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="lesson-label label medium-12">Quiz Question:</h2>
  <h2 class="title medium-12">Which part of an opinion piece is shown in each section?</h2>
  <div class="medium-12 lesson-desc grid-x">
    <p><label class="select"><select class="inline-select question" name="q9_1">
    <option value="---" selected disabled>Select an option</option>
    <option value="Introduction">Introduction</option>
    <option value="Body">Body</option>
    <option value="Conclusion">Conclusion</option>
  </select></label>Most teachers agree students should learn to express themselves in writing. Some teachers still think students should learn cursive
  writing, but there are many reasons it should not be taught in schools.
  </p>
  <p><label class="select"><select class="inline-select question" name="q9_2">
    <option value="---" selected disabled>Select an option</option>
    <option value="Introduction">Introduction</option>
    <option value="Body">Body</option>
    <option value="Conclusion">Conclusion</option>
  </select></label>One reason cursive writing should no longer be taught is that it is not needed in many jobs. Most jobs require that their employees 
  know how to type on a computer instead.</p>
  <p><label class="select"><select class="inline-select question" name="q9_3">
    <option value="---" selected disabled>Select an option</option>
    <option value="Introduction">Introduction</option>
    <option value="Body">Body</option>
    <option value="Conclusion">Conclusion</option>
  </select></label>Additionally, cursive writing takes a long time to teach.
  </p>
  <p><label class="select"><select class="inline-select question" name="q9_4">
    <option value="---" selected disabled>Select an option</option>
    <option value="Introduction">Introduction</option>
    <option value="Body">Body</option>
    <option value="Conclusion">Conclusion</option>
  </select></label>Since cursive writing has very little use for jobs and takes a long time to teach, schools should not expect students to learn
  cursive handwriting.
  </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>An introduction begins an opinion piece and introduces the topic and opinion statement. The body section follows the introduction
  	and explains how an opinion statement is supported with reasons and evidence. A conclusion follows after the body section and ends the opinion piece.
  	The conclusion summarizes how an opinion was supported and states what the writer wants their audience to do or believe.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="choice-matrix-4.php"><i class="fas fa-angle-left"></i> Back</a>
<a class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();	      
      var question9 = {q9_1:"Introduction", q9_2:"Body",q9_3:"Body", q9_4:"Conclusion"};
      var nextPage = "lp-end.php";
      var numberCorrect = 4;
	  var points = 0;

  	function loopThruQuestions() {
		$(".question").each(function() {
    		  var name = $(this).attr("name");
			  var val = $(this).val();
			  updateQuestionStatus($(this).parent(), name, val);
		});
	}

  	function scoreStuff() {
  		highlightCorrectQuiz();
  		if(points==numberCorrect) {
	    	  incrementScore();
		}
  	}
  	
	function updateQuestionStatus(o, name, selectedAnswer) {
      	var correctAnswer = question9[name];
      	console.log("correctAnswer: " + correctAnswer);
      	if(!correctAnswer && !selectedAnswer) {
			$(o).addClass('clear');
		} else if(correctAnswer==selectedAnswer) {
			$(o).addClass('correct').append('<i class="fas fa-lg fa-check" style="color: #00AA00;position:relative; right: 45px; top: 1px;" aria-hidden="true"></i>');
			points++;
		}  else {
			$(o).addClass('incorrect').append('<i class="fas fa-lg fa-times" style="color: #FED700;position:relative; right: 45px; top: 1px;" aria-hidden="true"></i>');;
		}
	}
  
  $(document).on("click",".check", function() {
	  loopThruQuestions(this);
  	  scoreStuff();
	  showRationale();
	  updateNextStepBtn(this);
  });

  $(document).on("click",".check-verified", function() {
	  console.log("is verified");
	  window.location.href=nextPage;;
  });

      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>