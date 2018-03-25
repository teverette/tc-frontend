<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">

<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	<div class="global-tip" style="position:fixed; left:156px; top:10px; height: 82px; width: 200px; border-radius: 4px; color:#FFF; font-size:16px; line-height:19px; font-family:'Roboto'; font-weight:300; padding:10px;
	background-color: #4A90E2; box-shadow: 0 2px 8px 0 rgba(96,96,96,0.5);};">Hover on the blue words to get a definition.
	<span style="display:inline-block; float:right; margin-top: 20px; text-align: center; cursor:pointer; height: 24px; width: 34px; border: 2px solid #FFFFFF; border-radius: 2px;" onclick="$('.global-tip').hide()">OK</span></div>
	<div class="grid-x grid-padding-x">
	  
	  <h2 class="title medium-12">How is an opinion piece <span data-tooltip aria-haspopup="true" style="color:#4A90E2;" data-disable-hover="false" tabindex="1" 
			      	title="To arrange information and ideas in to a pattern.">organized</span> into sections?</h2>
	 
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
	<div class="rationale-sidebar"></div>
</div>
<?php $width = "11.1"; ?>
<?php include '_footer_progress.php'?>

<div id="drawer-one" class="drop-down-drawer q1_1 text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>
<div id="drawer-two" class="drop-down-drawer q1_2 text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>
<div id="drawer-three" class="drop-down-drawer q1_3 text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Intro</a>
	<a class="button secondary answer-option q1_2" data-value="2">Body</a>
	<a class="button secondary answer-option q1_3" data-value="3">Conclusion</a>	
</div>

<div class="hint-callout callout"></div>
<div class="rationale-callout callout"></div>

<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF">
		
</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q1_1:"1", q1_2:"2", q1_3:"3"};
      	var hintArray = {
      	      	"hint_q1_1":{
          	      	2:"The body is not the first part of an opinion piece. Try again!",
          	      	3:"The conclusion is not the beginning. Try again!"},
      	      	"hint_q1_2":{
          	      	1:"The introduction does not follow the introduction. Try again!",
          	      	3:"The conclusion does not provide reasons and evidence for the first time. Try again!"},
      	      	"hint_q1_3":{
          	      	1:"The introduction is not the last part. Try again!",
          	      	2:"The body does not include a call to action. Try again!"
              	}
      	}
      	var rationaleArray = {
      	      	"rationale_q1_1":"At the beginning of an opinion piece, the writer introduces the topic and the opinion statement.",
      	      	"rationale_q1_2":"The body explains the opinion statement that was included in the introduction.",
      	      	"rationale_q1_3":"The conclusion is the last part of an opinion piece and provides a strong finish.",
      	}
		var nextPage = "2-choice-matrix.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
    	storage["quiz_total"]=0;
      	$(document).ready(function() {
			ClozeDropdown.initialize("question_1",3,3);
			if(hasAlreadyAnswered("question_1")) {
				ClozeDropdown.setPreviousResponse();
			}
	  	});


      	setCookie("quiz", ' {q1_1:"1", q1_2:"2", q1_3:"3"}', 2);
  </script>
</body>
</html>