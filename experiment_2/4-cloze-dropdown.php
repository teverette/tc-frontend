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
  
  <h2 class="title medium-12">Which words and phrases should be included to organize the following passage?</h2>
  <p class="lesson-desc">Select the best word from each drop-down menu.</p>
  <div class="medium-12 grid-x lesson-copy">
  <p>Sometimes swimmers need to swim faster for a race, for more exercise, or just for more fun. Underwater swimming is faster than 
  swimming on the surface of the water. <label class="select"><select class="inline-select question" style="width: 325px;" name="q4_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">One reason</option>
    <option value="2">Above all</option>
    <option value="3">Another reason</option>
    </select></label> it is faster under water is that a swimmer&rsquo;s strokes can spread 
  across longer distances in less time. <label class="select"><select class="inline-select question" style="width: 325px;" name="q4_2">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">One reason</option>
    <option value="2">Above all</option>
    <option value="3">Another reason</option>
    </select></label> underwater swimming is faster is that the splashing on the 
  surface slows the swimmer down. <label class="select"><select class="inline-select question" style="width: 325px;" name="q4_3">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">One reason</option>
    <option value="2">Above all,</option>
    <option value="3">Another reason</option>
    </select></label> underwater swimming is faster because swimmers do not get as 
  tired from the splashing and repeated movements used in surface swimming.</p>

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
<a class="button back large" href="3-choice-matrix.php#checked"><i class="fas fa-angle-left"></i> Back</a>
<a class="check-disabled button success large float-right">Check</a>
</div>
</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q4_1:"1", q4_2:"3", q4_3:"2"};
		var nextPage = "learn-page-3.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
      	$(document).ready(function() {
			ClozeDropdown.initialize(2,2);
	  	});

      	$(".question").change(function() {
    		ClozeDropdown.enableButton();
		});

      	window.onload = function() {
    	  	var isLocked = lockTest();
			if(isLocked) {
				ClozeDropdown.getResponses();
			}
    	}
  </script>
</body>
</html>