<!DOCTYPE html>
<html>
<head>
  <title>Complete the paragraph by selecting the statement that makes the story most suspenseful.</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress">
	<?php $width = "85.7"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="title medium-12">Complete the paragraph by selecting the statement that makes the story most suspenseful.</h2>
  <div class="medium-12 grid-x lesson-copy">
    <p>Joan had been studying for the spelling bee all year. Her parents had quizzed her at dinner every night. Her teachers had given 
    her extra homework to help her prepare. By the time the real competition started, she thought she was ready.  
    After eight rounds, only she and one boy remained. Joan listened as his word was read—and as he misspelled his word! 
    If Joan spelled her word correctly, she would win. The announcer read her word and 
    <label class="select"><select class="inline-select question" style="width: 375px;" name="q9_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; she asked him to repeat it.</option>
    <option value="2">&nbsp; she had no idea how to spell it.</option>
    <option value="3">&nbsp; she took a deep breath and began to spell.</option>
    <option value="4">&nbsp; she spelled it correctly.</option>
    </select></label>
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Suspense is excitement or fear about the unknown. If the paragraph ends with Joan spelling the word (correctly or not), 
  	there is no suspense. Asking for the word to be repeated does not build suspense. As Joan starts to spell the word, the 
  	reader gets excited to know if she spells it correctly. </p>
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
    	var question5 = {q9_1:"3"};
    	var nextPage = "q10-cloze-dropdown.php";
    
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