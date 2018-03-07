<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
<body class="practice quiz quiz-question" data-quiz-question="1">
	<?php $width = "100"; ?>
	<?php include '_quiz_progress.php'; ?>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="title medium-12">Which words are used to <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="true" tabindex="1" title="To arrange information and ideas into a pattern or section.">organize</span>
   a writer’s reasons in the <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="true" tabindex="1" 
	title="The body follows the introduction. It explains how the opinion statement is supported with reasons or evidence.">body</span> section of an opinion piece?</h2>
  <div class="medium-12 grid-x lesson-copy">
  <p>An audience can enjoy a story no matter <mark class="keyword quiz_2_1 answer">how</mark> it's told, but books are more 
  entertaining than movies and plays. <mark class="keyword quiz_2_2 answer">First of all</mark>, books can entertain readers anywhere. 
  <mark class="keyword quiz_2_3 answer">Another reason</mark> books are more entertaining is that the authors can 
  help readers focus on more interesting details. <mark class="keyword quiz_2_4 answer">Most importantly</mark>, books give readers the 
  freedom to use their imagination, <mark class="keyword quiz_2_5 answer">instead</mark> of limiting it to a certain place.</p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>The correct answers are examples of words used to organize reasons based on their order, importance or amount.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
	<a class="button back button-left-side" href="q1-choice-matrix.php"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal></div>
	
 <script>
      $(document).foundation();
		var questions = ["quiz_2_1","quiz_2_2","quiz_2_3","quiz_2_4","quiz_2_5"];
    	var question2 = {quiz_2_1:false, quiz_2_2:true,quiz_2_3:true,quiz_2_4:true,quiz_2_5:false};
    	var nextPage = "quiz-3.php";
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
			increaseScoreBy(points);
    	}

    	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = question2[name];
	      	console.log("correctAnswer: " + correctAnswer);
	      	if(!correctAnswer && !selectedAnswer || !selectedAnswer) {
				$(o).addClass('clear');
			} else if(correctAnswer==selectedAnswer) {
				$(o).addClass('correct');
				$(o).append('<i class="fas fa-check" aria-hidden="true" style="position:relative;right: -6px;color: #77A977;"></i>');
				points++;
			}  else {
				$(o).addClass('incorrect');
				$(o).append('<i class="fas fa-times" aria-hidden="true" style="position:relative;right: -6px;color: #FED700;"></i>');
			}
    	}
      
      $(document).on("click",".check", function() {
    	  loopThruQuestions(this);
    	  var status;
    	  if(points==numberCorrect) {
			status = "correct";
    	  } else {
			status ="incorrect";
          }

			var label = status=="correct" ? '<i class="fas fa-lg fa-check-circle"></i> Correct' : '<i class="fas fa-lg fa-times"></i> Incorrect';
    		$('.answer-rationale-reveal').addClass(status);
    	  	var $modal = $('.answer-rationale-reveal');

	  		$.ajax('rationales/quiz_2.html')
	  		  .done(function(resp){
	  		    $modal.html(resp).foundation('open');
	  		    $('.answer-rationale-reveal .title').html(label);
	  		});
    	  updateNextStepBtn(this);
    	  $("input").attr('disabled','disabled');
      });

      
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
      $(document).on("click","mark.keyword", function() {
    	 $(this).addClass("selected"); 
    	 $(".check-disabled").addClass("check").removeClass("check-disabled");  
      });
      $(document).on("click","mark.selected", function() {
     	 $(this).removeClass("selected"); 
     	 if($("mark.selected").length==0) {
     		$(".check").addClass("check-disabled").removeClass("check");  
     	 } 
       });
      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
  			getScore();
		});
      window.onload = function() {
			lockTest();
		}
  </script>
</body>
</html>