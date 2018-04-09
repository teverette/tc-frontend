<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
<img src="images/speaker.jpg" class="speaker"/>
<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which statements create verbal irony?</h2>
	 
	  <div class="medium-12 grid-x lesson-copy">
	    <p>John’s brother brings his dog to visit. The dog chews John’s favorite shoes. John says, 
	    "<a class="button dropdown-question" data-question="q2_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>"
	    </p>
	    <p>Maria was bragging to her friends about how well she could skateboard. When she fell flat on her back, she said, 
	    “<a class="button dropdown-question" data-question="q2_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a>"  
	    </p>
	  </div>
	  <input type="hidden" class="q2_1 dd-response" name="q2_1"></input>
	  <input type="hidden" class="q2_2 dd-response" name="q2_2"></input>
	</div>
	<div class="rationale-sidebar"></div>
</div>
<?php $width = "12.5"; ?>
<?php $back = "practice-1.php"; ?>
<?php include '_footer_progress.php'?>

<div id="drawer-one" class="drop-down-drawer q2_1 text-center">
	<a class="button secondary answer-option q2_1" data-value="1">Your dog is terrible!</a>
	<a class="button secondary answer-option q2_2" data-value="2">Thank you for bringing your dog over.</a>
	<a class="button secondary answer-option q2_3" data-value="3">Get this dog out of here!</a>	
</div>
<div id="drawer-two" class="drop-down-drawer q2_2 text-center">
	<a class="button secondary answer-option q2_1" data-value="1">I bet none of you can do that trick!</a>
	<a class="button secondary answer-option q2_2" data-value="2">I am such a loser.</a>
	<a class="button secondary answer-option q2_3" data-value="3">Maybe I shouldn’t have been bragging.</a>	
</div>

</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q2_1:"2", q2_2:"1"};
      	var hintArray = {
      	      	"hint_q2_1":{
          	      	1:"John may think the dog is terrible for chewing his shoes, so this is not ironic.",
          	      	3:"John may want the dog to leave because he is unhappy about his shoes, so this is not ironic."},
      	      	"hint_q2_2":{
          	      	2:"Maria may feel like a loser after falling, so this is not irony.",
          	      	3:"Maria might think that someone who falls shouldn’t brag, so this is not irony."
              	}
      	}
      	var rationaleArray = {
      	      	"rationale_q2_1":"John’s words are different from how he really feels, so this is ironic.",
      	      	"rationale_q2_2":"Maria is saying she did “a trick” when actually she fell down."
      	}
		var nextPage = "learn-page-3.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
    	storage["quiz_total"]=0;
      	$(document).ready(function() {
			ClozeDropdown.initialize("practice_2",2,2);
			if(hasAlreadyAnswered("practice_2")) {
				ClozeDropdown.setPreviousResponse();
			}
	  	});

  </script>
</body>
</html>