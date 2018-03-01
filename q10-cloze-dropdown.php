<!DOCTYPE html>
<html>
<head>
  <title>What creates suspense?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress">
	<?php $width = "92.9"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="title medium-12">What creates suspense?</h2>
  <p class="lesson-desc">Complete the paragraph with words from the drop down menus that create suspense.</p>
  <div class="medium-12 grid-x lesson-copy">
    With a mile left to go in a big race, the front runner 
    <label class="select" style="padding-bottom: 10px; padding-left: 5px;"><select class="inline-select question" style="width: 275px;" name="q10_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; twists her ankle and falls.</option>
    <option value="2">&nbsp; feels great.</option>
    <option value="3">&nbsp; makes a friend.</option>
    </select></label>
    She
	<label class="select" style="padding-bottom: 10px; padding-left: 5px;""><select class="inline-select question" style="width: 305px;" name="q10_2">
	    <option selected disabled value="-">&nbsp; Select an option</option>
	    <option value="1">&nbsp; watches other runners catching up.</option>
	    <option value="2">&nbsp; quits immediately.</option>
	    <option value="3">&nbsp; isn’t really hurt.</option>
    </select></label> 
    She asks herself,
    <label class="select" style="padding-bottom: 10px; padding-left: 5px;"><select class="inline-select question" style="width: 285px;" name="q10_3">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; “Will I be able to finish the race?”</option>
    <option value="2">&nbsp; “What made that hole?”</option>
    <option value="3">&nbsp; “What’s for dinner tonight?”</option>
    </select></label>
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Suspense is created when a writer makes choices to cause the reader to worry or feel apprehensive about 
  	what will happen to a character.  In this case, the runner who is winning the race is hurt close to the finish.  
  	Suspense builds as the other runners are catching up. The question that worries readers is the same question that 
  	worries the runner: will she still be able to win the race?</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
<a class="check-disabled button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();
    	var question5 = {q10_1:"1",q10_2:"1",q10_3:"1"};
    	var nextPage = "quiz-transition.php";
    
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
			}  else {
				$(o).addClass('incorrect').append('<i class="fas fa-times " style="color: #FED700;position:relative; right: 51px;" aria-hidden="true"></i>');
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
      
      	var storage = window.sessionStorage;
      	$(document).ready(function() {
			highlightCurrentQuiz();
			highlightAllCorrectQuiz();
			ClozeDropdown.initialize(3,3);
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