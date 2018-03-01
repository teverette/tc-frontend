<!DOCTYPE html>
<html>
<head>
  <title>What is situational irony?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress quiz quiz-question" data-quiz-question="2">
	<?php $width = "100"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-10 quiz"><img src="images/QuizIcon_Spec.png" class="label-type-icon"/>Quiz Question</h2>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="title medium-12">What is situational irony?</h2>
  <p class="lesson-desc">Complete the paragraph by selecting the statement that introduces situational irony into the story.</p>
  <div class="medium-12 grid-x lesson-copy">
  <p>
    A cat walks around a desk, its ears alert and its eyes bright with anticipation. It smells the air and listens intently. 
    Then it leaps to the desktop where it 
    <label class="select"><select class="inline-select question" style="width: 325px;" name="q13_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; uses a computer mouse to go online.</option>
    <option value="2">&nbsp; eats a piece of food left on the desk.</option>
    <option value="3">&nbsp; paws at its reflection in the screen.</option>
    </select></label>
</p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p> Situational irony occurs when the outcome of a situation is different 
  	than what would usually be expected. In this passage, the reader would expect the cat to refer to a living mouse, not a computer mouse.</p>
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
    	var question5 = {q13_1:"1"};
    	var nextPage = "q14-multiple-choice.php";
    	var points=0;
    	var numberCorrect=1;
    
    	function loopThruQuestions() {
    		$(".question").each(function() {
	    		  var name = $(this).attr("name");
				  var val = $(this).val();
				  updateQuestionStatus($(this).parent(), name, val);
			});
    	}

    	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = question5[name];
	      	console.log("correctAnswer: " + correctAnswer);
	      	if(!correctAnswer && !selectedAnswer) {
				$(o).addClass('clear');
			} else if(correctAnswer==selectedAnswer) {
				$(o).addClass('correct').append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: 51px;" aria-hidden="true"></i>');
				points++;
			}  else {
				$(o).addClass('incorrect').append('<i class="fas fa-times " style="color: #FED700;position:relative; right: 51px;" aria-hidden="true"></i>');
			}
    	}
      
      $(document).on("click",".check", function() {
    	  loopThruQuestions(this);
    	  scoreStuff();
    	  showRationale();
    	  updateNextStepBtn(this);
    	  $("input").attr('disabled','disabled');
      });
      
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
      
      var storage = window.sessionStorage;
      	$(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
			ClozeDropdown.initialize(1,1);
		});

		$(".question").change(function() {
    	  ClozeDropdown.enableButton();
		});

		window.onload = function() {
			lockTest();
		}
  </script>
</body>
</html>