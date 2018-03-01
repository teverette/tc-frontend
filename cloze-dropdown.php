<!DOCTYPE html>
<html>
<head>
  <title>testing</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress">
	<?php $width = "61.5"; ?>
	<?php include '_progress.php'; ?>
	<img src="images/msg-bubbles.jpg" class="question-type-icon"/>
<div class="content"> 
<div class="grid-x grid-padding-x">
  <h2 class="lesson-label label medium-12 practice">Practice Question:</h2>
  <h2 class="title medium-12">Which words and phrases should be included to organize the following passage?</h2>
  <div class="medium-12 grid-x lesson-copy">
    <p>Sometimes swimmers need to swim faster for a race, for more exercise, or just for more fun. Underwater swimming is faster than simming on the surface of the water. 
    <label class="select"><select class="inline-select question" name="q5_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="One reason">&nbsp; One reason</option>
    <option value="Above all">&nbsp; Above all</option>
    <option value="Another reason">&nbsp; Another reason</option>
    </select></label>&nbsp; it is faster under water is that a swimmer's strokes can spread across longer distances in less
    time. 
    <label class="select"><select class="inline-select question" name="q5_2">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="One reason">&nbsp; One reason</option>
    <option value="Above all">&nbsp; Above all</option>
    <option value="Another reason">&nbsp; Another reason</option></select></label>
    &nbsp; underwater swimming is faster is that the splashing on the surface slows the swimmer down.
    <label class="select"><select class="inline-select question" name="q5_3">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="One reason">&nbsp; One reason</option>
    <option value="Above all">&nbsp; Above all</option>
    <option value="Another reason">&nbsp; Another reason</option>
    </select></label>&nbsp; underwater swimming is faster because swimmers do not get as tired from the splashing and repeated movements
    used in surface swimming.
    </p>
  </div>
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
<a class="button back large" href="highlight-s3.php"><i class="fas fa-angle-left"></i> Back</a>
<a class="check button success large float-right">Check</a>
</div>
</div>
 <script>
      $(document).foundation();
    	var question5 = {q5_1:"One reason", q5_2:"Another reason",q5_3:"Above all"};
    	var nextPage = "choice-matrix-3.php";
    
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
      });
      
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href="choice-matrix-3.php";
      });
      
      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
		highlightAllCorrectQuiz();
		});
  </script>
</body>
</html>