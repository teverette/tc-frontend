<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
<body class="progress quiz quiz-question" data-quiz-question="1">
	<?php $width = "53.8"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/quiz-board.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="lesson-label label medium-12 quiz">Quiz Question:</h2>
  <h2 class="title medium-12">Which words are used to organize a writer's reasons in the body section of an opinion piece?</h2>
  <p class="medium-12 lesson-desc instructions">Select the correct words in the passage below.</p>
  <div class="medium-12 grid-x lesson-copy">
    <p>An audience can enjoy a story no matter&nbsp;<mark class="keyword q4_1 answer">how</mark> it's told, but books are more entertaining than movies and plays. <mark class="keyword q4_2 answer">First of all</mark>,
    books can entertain readers anywhere. <mark class="keyword q4_3 answer">Another reason</mark> books are more entertaining is that the authors can help readers focus on more interesting details. 
    <mark class="keyword q4_4 answer" style="white-space: nowrap">Most importantly</mark>, books give readers the freedom to use their imagination, <mark class="keyword q4_5 answer">instead</mark> of limiting it to a certain place.
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>The correct answers are examples of words used to organize reasons based on their order, importance or amount.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="choice-matrix-2.php"><i class="fas fa-angle-left"></i> Back</a>
<a class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();
		var questions = ["q4_1","q4_2","q4_3","q4_4","q4_5"];
    	var question2 = {q4_1:false, q4_2:true,q4_3:true,q4_4:true,q4_5:false};
    	var nextPage = "cloze-dropdown.php";
    	var points=0;
    	var numberCorrect=3;
    
    	function loopThruQuestions() {
    		var questionLength = questions.length;
			for(i=0; i<questionLength; i++){
				console.log("question: " + questions[i]);
				var name = questions[i];
				var obj = $('.'+name);
				var isSelected = $('.'+name).hasClass("selected");
				console.log("isSelected: " + isSelected);
				updateQuestionStatus(obj, name, isSelected);
			}
			highlightCorrectQuiz();
			if(points==numberCorrect) {
		   		incrementScore();
		    }
    	}

    	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = question2[name];
	      	console.log("correctAnswer: " + correctAnswer);
	      	if(!correctAnswer && !selectedAnswer) {
				$(o).addClass('clear');
			} else if(correctAnswer==selectedAnswer) {
				$(o).addClass('correct');
				$(o).append('<i class="fas fa-check" aria-hidden="true" style="position:relative;right: -6px;color: #77A977;"></i>');
			}  else {
				$(o).addClass('incorrect');
				$(o).append('<i class="fas fa-times" aria-hidden="true" style="position:relative;right: -6px;color: #FED700;"></i>');
			}
    	}
      
      $(document).on("click",".check", function() {
    	  loopThruQuestions(this);
    	  showRationale();
    	  updateNextStepBtn(this);
      });

      
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
      $(document).on("click","mark.keyword", function() {
    	 $(this).addClass("selected"); 
    	 // move this to correct vs incorrect status update
    	 // $(this).append('<i class="fas fa-check" aria-hidden="true" style="position:relative;text-align:center"></i>');   
      });
      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
  			highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>