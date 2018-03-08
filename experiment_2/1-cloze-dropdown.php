<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
	<?php $width = "11.1"; ?>
	<?php include '_progress.php'; ?>
<div class="content"> 
<div class="global-tip" style="position:fixed; left:470px; top:20px; height: 102px; width: 171px; border-radius: 4px; color:#FFF; font-size:16px; line-height:19px; font-family:'Roboto'; font-weight:300; padding:10px;
background-color: #4A90E2; box-shadow: 0 2px 8px 0 rgba(96,96,96,0.5);};">Hover on the blue words to get a definition.
<span style="display:inline-block; float:right; margin-top: 20px; text-align: center; cursor:pointer; height: 24px; width: 34px; border: 2px solid #FFFFFF; border-radius: 2px;" onclick="$('.global-tip').hide()">OK</span></div>
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">How is an <span data-tooltip aria-haspopup="true" style="color:#4A90E2;" data-disable-hover="false" tabindex="1" 
		      	title="To arrange information and ideas in to a pattern.">opinion</span> piece organized into sections?</h2>
 
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
	<a class="button back button-left-side" href="practice-transition.php"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
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