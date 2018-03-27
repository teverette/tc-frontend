<!DOCTYPE html>
<html>
<head>
  <title>Which choice creates the most suspense?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">

<div class="content"> 
	<div class="content-header content-header-practice">Practice</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which choice creates the most<span data-tooltip aria-haspopup="true" style="color:#4A90E2;" data-disable-hover="false" tabindex="1" 
			      	title="To arrange information and ideas in to a pattern.">suspense</span>?</h2>
	 
	  <div class="medium-12 grid-x lesson-copy">
	    <p>Joan had been studying for the spelling bee all year. Her parents had quizzed her at dinner every night. Her teachers had given her extra homework to
	     help her prepare. By the time the real competition started, she thought she was ready.  After eight rounds, only she and one boy remained. Joan listened
	      as his word was read—and as he misspelled his word! Although Joan had listened carefully to the mistake her final competitor made, she was still not sure 
	      how to spell the word. Joan asked the announcer to use the word in a sentence.  She was less concerned about what the word meant, she needed more time to 
	      think about how the word was spelled. If Joan spelled her word correctly, she would win. Joan could sense that the audience knew she was stalling. She 
	      looked back at her competitor only to find a smirk on his face. If she did not spell the word correctly, her competitor would have a chance to win the 
	      spelling bee. Joan became nervous and could feel the worry as sensations throughout her body. Her hands were sweaty, heart was fluttering, and her mouth 
	      was very dry. Joan could hear the announcer finishing the sentence she had requested. Joan paused for a moment. The room was completely silent. Joan 
	      closed her eyes and began to spell. After Joan completed spelling the word, she opened her eyes only to see the emotionless faces of the spelling bee judges.
	    </p>
	    <p>“That is incorrect,” the announcer said. Joan took a step back and hung her head as her final competitor approached the microphone. Joan couldn’t believe 
	    it. Was she going to lose the spelling bee?  Had all of her hard work not been enough to win first place? Thoughts of late-night studying and missing out on 
	    time with friends clouded her mind. Joan fought back her tears and refocused her attention. If her competitor spelled the word correctly then the rounds would 
	    continue until one of them could spell a word that the other could not. Joan listened carefully as the announcer called the next word to be spelled. Joan lifted 
	    her head with excitement as she was certain how to spell the word if given the opportunity. She watched as  
	    “<a class="button dropdown-question" data-question="q2_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a>"  
	    </p>
	  </div>
	  <input type="hidden" class="q2_1 dd-response" name="q2_1"></input>
	  <input type="hidden" class="q2_2 dd-response" name="q2_2"></input>
	</div>
	<div class="rationale-sidebar"></div>
</div>
<?php $width = "11.1"; ?>
<?php $back = "practice-2.php"; ?>
<?php include '_footer_progress.php'?>

<div id="drawer-one" class="drop-down-drawer q1_1 text-center">
	<a class="button secondary answer-option q1_1" data-value="1">Your dog is terrible!</a>
	<a class="button secondary answer-option q1_2" data-value="2">Thank you for bringing your dog over.</a>
	<a class="button secondary answer-option q1_3" data-value="3">Get this dog out of here!</a>	
</div>
<div id="drawer-two" class="drop-down-drawer q1_2 text-center">
	<a class="button secondary answer-option q1_1" data-value="1">I bet none of you can do that trick!</a>
	<a class="button secondary answer-option q1_2" data-value="2">I am such a loser.</a>
	<a class="button secondary answer-option q1_3" data-value="3">Maybe I shouldn’t have been bragging.</a>	
</div>

</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q2_1:"2", q2_2:"1"};
      	var hintArray = {
      	      	"hint_q2_1":{
          	      	2:"John may think the dog is terrible for chewing his shoes, so this is not ironic.",
          	      	3:"John may want the dog to leave because he is unhappy about his shoes, so this is not ironic. Try again!"},
      	      	"hint_q2_2":{
          	      	1:"Maria may feel like a loser after falling, so this is not irony.",
          	      	3:"Maria might think that someone who falls shouldn’t brag, so this is not irony."
              	}
      	}
      	var rationaleArray = {
      	      	"rationale_q2_1":"Correct! John’s words are different from how he really feels, so this is ironic.",
      	      	"rationale_q2_2":"Correct. Maria is saying she did “a trick” when actually she fell down."
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