<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
</head>
<body class="practice">
	<?php include '_quiz_progress.php'; ?>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">Which part of an opinion piece is shown in each section?</h2>
  <div class="medium-12 grid-x lesson-copy">
    <p>Most teachers  agree students should learn to express themselves in writing. Some teachers still 
    think students should learn cursive writing, but there are many reasons it should not be taught in schools.
    	<a class="button dropdown-question" data-question="quiz_5_1" onclick="showDrawer(this);">Select an option</a>
    </p>
    <p>One reason cursive writing should no longer be taught is that it is not needed in many jobs. Most jobs 
    require that their employees know how to type on a computer instead. 
    	<a class="button dropdown-question" data-question="quiz_5_2" onclick="showDrawer(this);">Select an option</a>  
    </p>
    <p>Additionally, cursive writing takes a long time to teach.
    	<a class="button dropdown-question" data-question="quiz_5_3" onclick="showDrawer(this);">Select an option</a>
    </p>
    <p>Since cursive writing has very little use for jobs and takes a long time to teach, schools should not expect 
    students to learn it.
    	<a class="button dropdown-question" data-question="quiz_5_4" onclick="showDrawer(this);">Select an option</a>
    </p>
  </div>
  <input type="hidden" class="quiz_5_1 dd-response"></input>
  <input type="hidden" class="quiz_5_2 dd-response"></input>
  <input type="hidden" class="quiz_5_3 dd-response"></input>
  <input type="hidden" class="quiz_5_4 dd-response"></input>
</div>
</div>
<div class="grid-x grid-padding-x footer">
	<a class="button back large" href="practice-transition.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Introduction</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF">
		
</div>
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
  </script>
</body>
</html>