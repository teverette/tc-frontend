<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
	<?php $width = "25.0"; ?>
	<?php include '_progress.php'; ?>
<div class="content"> 

<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">How is an opinion piece organized into sections?</h2>
  <p>
The <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Fancy word for a beetle.">scarabaeus</span> hung quite clear of any branches, and, if allowed to fall, would have fallen at our feet. Legrand immediately took the scythe, and cleared with it a circular space, three or four yards in diameter, just beneath the insect, and, having accomplished this, ordered Jupiter to let go the string and come down from the tree.
</p>
  <div class="medium-12 grid-x lesson-copy">
    <p>
    <a class="button dropdown-question" data-question="q1_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a> begins the opinion piece. 
    It includes the opinion statement and helps readers understand the topic.
    </p>
    <p>The <a class="button dropdown-question" data-question="q1_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a> follows the introduction. It explains how the opinion statement is supported with reasons or evidence.  
    </p>
    <p>The <a class="button dropdown-question" data-question="q1_3" data-drawer-id="drawer-three" onclick="showDrawer(this);">Select an option</a> is at the end. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.
    </p>
  </div>
  <input type="hidden" class="q1_1 dd-response" name="q1_1"></input>
  <input type="hidden" class="q1_2 dd-response" name="q1_2"></input>
  <input type="hidden" class="q1_3 dd-response" name="q1_3"></input>
</div>
</div>
<div class="grid-x grid-padding-x footer">
	<a class="button back large" href="practice-transition.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div id="drawer-one" class="drop-down-drawer text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>
<div id="drawer-two" class="drop-down-drawer text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>
<div id="drawer-three" class="drop-down-drawer  text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>
<div class="hint">
	<p class="hint-label">Not quite!</p>
	<p class="hint-text primary">Introductions start an opinion piece. The body section explains proof for an opinion statement. Try again!</p>
	<p class="hint-text secondary">Conclusions summarize the opinion piece and suggests how the reader should think about a topic. Try again!</p>
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF">
		
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
			ClozeDropdown.initialize("question_1",3,3);
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