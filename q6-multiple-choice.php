<!DOCTYPE html>
<html>
	<head>
	  <title>Which story uses situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
<body class="progress">
	<?php $width = "64.3"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
	<div class="content"> 
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which story uses situational irony?</h2>
	  
	  <div class="grid-x medium-12" style="position:relative">
	  <label class="radio" style="position:absolute; top:-5px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input type="radio" class="q3_1 question" name="q6_1" value="1"/>
	  </label>
	  	<p class="lesson-copy mc-text">A boy leaves the theater after watching a boring movie.
	  	 He decides that he is hungry, so he stops for food on his way home. </p>
		<label class="radio" style="position:absolute; top:73px;left:-30px;padding-left: 10px; padding-right: 0;">
		  	<input type="radio" class="q3_1 question" name="q6_1" value="2"/>
		</label>
	  <p class="lesson-copy mc-text">Ronald sees a lot of limes on the tree at the park. 
	  He gathers ingredients to make limeade for the children playing there. He gets in trouble for picking fruit off of a tree at the park. </p>
	  <label class="radio" style="position:absolute; top: 182px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q6_1" value="3"/>
	  </label>
	  <p class="lesson-copy mc-text">When Marcia gets home from school, 
	  she puts her phone in her pocket so she can open the door. She unpacks her bag and then cannot find her phone.</p>
	  <label class="radio" style="position:absolute; top: 291px;left:-30px;padding-left: 10px; padding-right: 0;">
	  	<input  type="radio" class="q3_1 question" name="q6_1" value="4"/>
	  </label>
	  <p class="lesson-copy mc-text">An old lady yells at Larry for walking on her grass. Larry says, &ldquo;Aren&rsquo;t 
	  you nice?&rdquo;</p>
	  </div>
	  <div class="medium-12 lesson-desc grid-x hide rationale">
	  	<h3>Why are these the answers?</h3>
	  	<p>Situational irony occurs when the reader expects one thing to happen, but something different happens instead. The reader expects 
	  	Laurance to be praised for making the limeade for the children. It is not expected that he will get in trouble for trying to do something nice.</p>
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
      /* setup question and answer for quiz question */
      	var questions = ["q6_1"];
		var questionSet = {q6_1:"2"};
  		var nextPage = "q7-multiple-choice.php";
  		var numberCorrect = 1;
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
  				points++;
  				$(o).parent().addClass('correct');
				$('input[name='+name+']:checked').parent()
					.addClass('correct')
					.prepend('<i class="fas fa-lg fa-check" style="color: #00AA00;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			} else {
				$(o).parent().addClass('incorrect');
				$('input[name='+name+']:checked').parent()
					.addClass('incorrect')
					.prepend('<i class="fas fa-lg fa-times" style="color: #FED700;position:absolute; left: 9px; top: 15px;" aria-hidden="true"></i>');
			}
  	}
    
    $(document).on("click",".check", function() {
  	  loopThruQuestions();
  	  scoreStuff();
  	  showRationale();
  	  updateNextStepBtn(this);
  	$("input").attr('disabled','disabled');
    });
    
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
   		$("input:radio").click(function() {
			ChoiceMatrix.enableButton();
		});      

      $(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
			ChoiceMatrix.initialize(1,1);
		});

      window.onload = function() {
    		lockTest();
    	}
  </script>
</body>
</html>