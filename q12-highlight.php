<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
<body class="progress quiz quiz-question" data-quiz-question="1">
	<?php $width = "100"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-10 quiz"><img src="images/QuizIcon_Spec.png" class="label-type-icon"/>Quiz Question</h2>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="title medium-12">How is dramatic irony used in narratives?</h2>
  <p class="medium-12 lesson-desc instructions">Click to highlight the sentence that reveals the use of dramatic irony. </p>
  <div class="medium-12 grid-x lesson-copy">
  	<p><mark class="keyword q12_1 answer">Teresa hid her best jewelry in a brown bag in the kitchen drawer before she went on vacation.</mark> 
  	<mark class="keyword q12_2 answer">Her friend came to her house every day to walk the dog.</mark> <mark class="keyword q12_3 answer">One day, her friend decided to clean out Teresa’s kitchen.</mark> 
  	<mark class="keyword q12_4 answer">She got all the garbage, empty packaging, and unwanted mail and threw it away.</mark> <mark class="keyword q12_5 answer">Without looking inside, she threw 
  	away the plain brown bag she found at the back of the drawer.</mark></p>
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Dramatic irony happens when the reader knows information that a character does not know. Teresa’s friend does not know what is in the bag, but the reader does. This is an instance of dramatic irony. </p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
<a class="check-disabled button success large float-right">Submit</a>
</div>
</div>
 <script>
      $(document).foundation();
		var questions = ["q12_1","q12_2","q12_3","q12_4","q12_5"];
    	var question2 = {q12_1:false, q12_2:false,q12_3:false,q12_4:false,q12_5:true};
    	var nextPage = "q13-cloze-dropdown.php";
    	var points=0;
    	var numberCorrect=5;
    
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
	      	if(!correctAnswer && !selectedAnswer || !selectedAnswer) {
				$(o).addClass('clear');
				points++;
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
    	  showRationale();
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
  			highlightAllCorrectQuiz();
		});
      window.onload = function() {
			lockTest();
		}
  </script>
</body>
</html>