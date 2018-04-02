<!DOCTYPE html>
<html>
<head>
  <title>Which choice creates the most suspense?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
<img src="images/speaker.jpg" class="speaker" />
<div class="content"> 
	<div class="content-header content-header-practice" style="z-index: 1000">Practice</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12" style="position:fixed; background-color:#FFF;padding-top:40px;top:10px">Which choice creates the most <span data-tooltip aria-haspopup="true" style="color:#4A90E2;" data-disable-hover="false" tabindex="1" 
			      	title="To arrange information and ideas in to a pattern.">suspense</span>?</h2>
	 
	  <div class="medium-12 grid-x lesson-copy" style="margin-top:45px">
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
	    “<a class="button dropdown-question" data-question="q9_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>"  
	    </p>
	  </div>
	  <input type="hidden" class="q9_1 dd-response" name="q9_1"></input>
	</div>
	<div class="rationale-sidebar"></div>
</div>
<?php $width = "94.75"; ?>
<?php $back = "practice-8.php"; ?>
<?php include '_footer_progress.php'?>

<div id="drawer-one" class="drop-down-drawer q9_1 text-center" style="height: 128px;">
	<a class="button secondary answer-option q9_1" data-value="1">her competitor took a deep breath and began to spell.</a>
	<a class="button secondary answer-option q9_2" data-value="2">her competitor misspelled the word.</a>
	<a class="button secondary answer-option q9_3" data-value="3">her competitor looked around the room.</a>	
</div>

</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q9_1:"1"};
      	var hintArray = {
      	      	"hint_q9_1":{
          	      	2:"Suspense is excitement or fear about the unknown. If Joan’s competitor misspells the word, readers know what has happened and there is no suspense.",
          	      	3:"Suspense is excitement or fear about the unknown. Joan’s competitor looking around the room does not create more anticipation."
              	 }
      	}
      	var rationaleArray = {
      	      	"rationale_q9_1":"Suspense is excitement or fear about the unknown. As Joan’s competitor begins to spell the word, \
          	      	the reader gets excited to know if he spells it correctly."
      	}
		var nextPage = "practice-10.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
    	storage["quiz_total"]=0;
      	$(document).ready(function() {
			ClozeDropdown.initialize("practice_9",1,1);
			if(hasAlreadyAnswered("practice_9")) {
				ClozeDropdown.setPreviousResponse();
			}
	  	});

  </script>
</body>
</html>