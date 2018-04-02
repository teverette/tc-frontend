<!DOCTYPE html>
<html>
<head>
  <title>Which choices create suspense?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
<img src="images/speaker.jpg" class="speaker" />
<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which choices create <span data-tooltip aria-haspopup="true" style="color:#4A90E2;" data-disable-hover="false" tabindex="1" 
			      	title="Fear or excitement of the unknown in a narrative.">suspense</span>?</h2>
	 
	  <div class="medium-12 grid-x lesson-copy">
	    
	    <p>With a mile left to go in a big race, the front runner 
	    	“<a class="button dropdown-question" data-question="q10_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>"  
	    	She <a class="button dropdown-question" data-question="q10_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a>
	    	 She asks herself, <a class="button dropdown-question" data-question="q10_3" data-drawer-id="drawer-three" onclick="showDrawer(this);">Select an option</a>
	    </p>
	  </div>
	  <input type="hidden" class="q10_1 dd-response" name="q10_1"></input>
	  <input type="hidden" class="q10_2 dd-response" name="q10_2"></input>
	  <input type="hidden" class="q10_3 dd-response" name="q10_3"></input>
	</div>
	<div class="rationale-sidebar"></div>
</div>
<?php $width = "100"; ?>
<?php $back = "practice-9.php"; ?>
<?php include '_footer_progress.php'?>

<div id="drawer-one" class="drop-down-drawer q10_1 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">twists her ankle and falls.</a>
	<a class="button secondary answer-option q10_2" data-value="2">feels great.</a>
	<a class="button secondary answer-option q10_3" data-value="3">makes a friend.</a>	
</div>
<div id="drawer-two" class="drop-down-drawer q10_2 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">watches other runners catching up.</a>
	<a class="button secondary answer-option q10_2" data-value="2">quits immediately.</a>
	<a class="button secondary answer-option q10_3" data-value="3">isn’t really hurt.</a>	
</div>
<div id="drawer-three" class="drop-down-drawer q10_3 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">Will I be able to finish the race?</a>
	<a class="button secondary answer-option q10_2" data-value="2">What made that hole?</a>
	<a class="button secondary answer-option q10_3" data-value="3">What’s for dinner tonight?</a>	
</div>

</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q10_1:"1", q10_2:"1",q10_3:"1"};
      	var hintArray = {
      	      	"hint_q10_1":{
          	      	2:"This does not create excitement or fear.",
          	      	3:"This is a nice event, not something suspenseful."
              	 },
              	"hint_q10_2":{
          	      	2:"If the race is over, there is no suspense.",
          	      	3:"This is a nice event, not something suspenseful."
              	 },
              	"hint_q10_3":{
          	      	2:"Who made the hole will not affect the outcome of the race, so this does not build suspense.",
          	      	3:"This question doesn’t contribute to the suspense in the story."
              	 }
      	}
      	var rationaleArray = {
      	      	"rationale_q10_1":"Correct! When the runner twists her ankle, readers worry about what will happen, creating suspense.",
      	      	"rationale_q10_2":"Correct! Readers become more worried that the runner will not win the race.",
      	      	"rationale_q10_3":"Correct! The question that worries readers is the same that worries the runner."
      	}
		var nextPage = "quiz-transition.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
    	storage["quiz_total"]=0;
      	$(document).ready(function() {
			ClozeDropdown.initialize("practice_10",3,3);
			if(hasAlreadyAnswered("practice_10")) {
				ClozeDropdown.setPreviousResponse();
			}
	  	});

  </script>
</body>
</html>