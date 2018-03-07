<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice quiz quiz-question" data-quiz-question="4">
	<?php include '_quiz_progress.php'; ?>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">Which part of an opinion piece is shown in each section?</h2>
  <div class="medium-12 grid-x lesson-copy">
    <p>Most teachers  agree students should learn to express themselves in writing. Some teachers still 
    think students should learn cursive writing, but there are many reasons it should not be taught in schools.
    	<a class="button dropdown-question" data-question="quiz_5_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>
    </p>
    <p>One reason cursive writing should no longer be taught is that it is not needed in many jobs. Most jobs 
    require that their employees know how to type on a computer instead. 
    	<a class="button dropdown-question" data-question="quiz_5_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a>  
    </p>
    <p>Additionally, cursive writing takes a long time to teach.
    	<a class="button dropdown-question" data-question="quiz_5_3" data-drawer-id="drawer-three" onclick="showDrawer(this);">Select an option</a>
    </p>
    <p>Since cursive writing has very little use for jobs and takes a long time to teach, schools should not expect 
    students to learn it.
    	<a class="button dropdown-question" data-question="quiz_5_4" data-drawer-id="drawer-four"  onclick="showDrawer(this);">Select an option</a>
    </p>
  </div>
  <input type="hidden" class="quiz_5_1 dd-response" name="quiz_5_1"></input>
  <input type="hidden" class="quiz_5_2 dd-response" name="quiz_5_2"></input>
  <input type="hidden" class="quiz_5_3 dd-response" name="quiz_5_3"></input>
  <input type="hidden" class="quiz_5_4 dd-response" name="quiz_5_4"></input>
</div>
</div>
<div class="grid-x grid-padding-x footer" style="z-index:0">
	<a class="button back button-left-side" href="practice-transition.php"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success button-right-side forward-button">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div id="drawer-one" class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Introduction</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div id="drawer-two" class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Introduction</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div id="drawer-three" class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Introduction</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div id="drawer-four" class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Introduction</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal></div>
 <script>
	
      	$(document).foundation();
      	var answerKey = {quiz_5_1:"1", quiz_5_2:"2", quiz_5_3:"2",quiz_5_4:"3"};
		var nextPage = "summary.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      	});
      
      	var storage = window.sessionStorage;
      	$(document).ready(function() {
			ClozeDropdown.initialize("quiz_5",4,4);
			ClozeDropdown.isQuiz=true;
	  	});

      	$(".question").change(function() {
    		ClozeDropdown.enableButton();
		});

      	window.onload = function() {
    	  	var isLocked = lockTest();
			if(isLocked) {
				ClozeDropdown.setPreviousResponse();
				// ClozeDropdown.getResponses();
			}
    	}
    	$(document).ready(function() {
    		highlightCurrentQuiz();
    		
    		if($(".content").prop('scrollHeight') > ($(".content").height() - 100)) {
    			$(".content").attr("style","padding-bottom:100px");
    		}
        });
  </script>
</body>
</html>