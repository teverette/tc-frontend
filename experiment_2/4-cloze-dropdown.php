<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="progress">
	<?php $width = "75.0"; ?>
	<?php include '_progress.php'; ?>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">Which words and phrases should be included to organize the following passage?</h2>
  <div class="medium-12 grid-x lesson-copy">
  <p>Sometimes swimmers need to swim faster for a race, for more exercise, or just for more fun. Underwater swimming is faster than 
  swimming on the surface of the water. <a class="button dropdown-question" data-question="q4_1" onclick="showDrawer(this);">Select an option</a> it is faster under water is that a swimmer&rsquo;s strokes can spread 
  across longer distances in less time. <a class="button dropdown-question" data-question="q4_2" onclick="showDrawer(this);">Select an option</a> underwater swimming is faster is that the splashing on the 
  surface slows the swimmer down. <a class="button dropdown-question" data-question="q4_3" onclick="showDrawer(this);">Select an option</a> underwater swimming is faster because swimmers do not get as 
  tired from the splashing and repeated movements used in surface swimming.</p>

  </div>
  <input type="hidden" class="q4_1 dd-response" name="q4_1"></input>
  <input type="hidden" class="q4_2 dd-response" name="q4_2"></input>
  <input type="hidden" class="q4_3 dd-response" name="q4_3"></input>
  
</div>
</div>
<div class="grid-x grid-padding-x footer" style="position:absolute; z-index:22; bottom:0; margin-bottom: 7px;">
	<a class="button back large" href="3-choice-matrix.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">One reason</a>
	<a class="button secondary answer-option" data-value="2">Above all,</a>
	<a class="button secondary answer-option" data-value="3">Another reason</a>	
</div>
<div class="hint">
	<p class="hint-label">Not quite!</p>
	<p class="hint-text primary">Words used to show order will explain the sequence before a reason or evidence is stated. Try again! </p>
	<p class="hint-text secondary">Phrases used to show importance signal that special attention should be given before a reason is stated. Try again!</p>
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF"></div>
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
			ClozeDropdown.initialize('question_4',3,3);
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