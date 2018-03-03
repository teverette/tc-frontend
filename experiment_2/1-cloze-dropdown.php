<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress">
	<?php $width = "35.7"; ?>
	<?php include '_progress.php'; ?>
	<h2 class="lesson-label medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">How is an opinion piece organized into sections?</h2>
  <p class="lesson-desc">Select the best word from each drop-down menu.</p>
  <div class="medium-12 grid-x lesson-copy">
    <p>The
    <label class="select"><select class="inline-select question" style="width: 325px;" name="q1_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">introduction</option>
    <option value="2">body</option>
    <option value="3">conclusion</option>
    </select></label> begins the opinion piece. it includes the opinion statement and helps readers understand the topic.
    </p>
    <p>The <label class="select"><select class="inline-select question" style="width: 325px;" name="q1_2">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">introduction</option>
    <option value="2">body</option>
    <option value="3">conclusion</option>
    </select></label> follows the introduction. It explains how the opinion statement is supported with reasons or evidence.  
    </p>
    <p>The <label class="select"><select class="inline-select question" style="width: 325px;" name="q1_3">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">introduction</option>
    <option value="2">body</option>
    <option value="3">conclusion</option>
    </select></label> is at the end. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>An introduction begins an opinion piece and introduces the topic and opinion statement. The body section follows after the introduction 
  	and explains how an opinion statement is supported with reasons and evidence. A conclusion follows after the body section and ends the opinion 
  	piece. The conclusion summarizes how an opinion was supported and states what the writer wants their audience to do or believe.</p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="practice-transition.php"><i class="fas fa-angle-left"></i> Back</a>
<a class="check-disabled button success large float-right">Check</a>
</div>
</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q1_1:"1", q1_2:"2", q1_3:"3"};
		var nextPage = "2-choice-matrix.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
      	$(document).ready(function() {
			ClozeDropdown.initialize("question_1",2,2);
	  	});

      	$(".question").change(function() {
    		ClozeDropdown.enableButton();
		});

      	window.onload = function() {
    	  	var isLocked = lockTest();
			if(isLocked) {
				ClozeDropdown.setPreviousResponse();
				// ClozeDropdown.getResponses();
			}
    	}
  </script>
</body>
</html>