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
  
  <h2 class="title medium-12">How is verbal irony used in narratives?</h2>
  <p class="lesson-desc">Complete the paragraphs by selecting statements that introduce verbal irony into the story. </p>
  <div class="medium-12 grid-x lesson-copy">
    <p>John’s brother brings his dog to visit. The dog chews John&rsquo;s favorite shoes. John says, &ldquo;
    <label class="select"><select class="inline-select question" style="width: 325px;" name="q2_1">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; Your dog is terrible!</option>
    <option value="2">&nbsp; Thank you for bringing your dog over.</option>
    <option value="3">&nbsp; Get this dog out of here!</option>
    </select></label>&rdquo; 
    </p>
    <p>Maria was bragging to her friends about how well she could skateboard. When she fell flat on her back, she said, 
     &ldquo;
    <label class="select"><select class="inline-select question" style="width: 330px;" name="q2_2">
    <option selected disabled value="-">&nbsp; Select an option</option>
    <option value="1">&nbsp; I bet none of you can do that trick!</option>
    <option value="2">&nbsp; I am such a loser.</option>
    <option value="3">&nbsp; Maybe I shouldn&rsquo;t have been bragging.</option></select></label>
    &rdquo; 
        
    </p>
  </div>
  <div class="medium-12 lesson-desc grid-x hide rationale">
  	<h3>Why are these the answers?</h3>
  	<p>Verbal irony is saying one thing but meaning another. For example, 
  	John may thank his brother for bringing over his dog when he is very angry 
  	at his brother’s dog for chewing his favorite shoes. </p>
  </div>
</div>
</div>
<div class="grid-x grid-padding-x footer">
			<hr/>
<div class="medium-12">
<a class="button back large" href="q1-choice-matrix.php"><i class="fas fa-angle-left"></i> Back</a>
<a class="check-disabled button success large float-right">Check</a>
</div>
</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q2_1:"2", q2_2:"1"};
		var nextPage = "q3-multiple-choice.php";
    
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