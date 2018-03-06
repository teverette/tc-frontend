<!DOCTYPE html>
<html>
<head>
  <title>How is verbal irony used in narratives?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body class="practice">
	<?php $width = "35.7"; ?>
	<?php include '_progress.php'; ?>
<div class="content"> 
<div class="grid-x grid-padding-x">
  
  <h2 class="title medium-12">How is an opinion piece organized into sections?</h2>
  <div class="medium-12 grid-x lesson-copy">
    <p>
    <a class="button dropdown-question" data-question="q1_1" onclick="showDrawer(this);">Select an option</a> begins the opinion piece. 
    It includes the opinion statement and helps readers understand the topic.
    </p>
    <p>The <a class="button dropdown-question" data-question="q1_2" onclick="showDrawer(this);">Select an option</a> follows the introduction. It explains how the opinion statement is supported with reasons or evidence.  
    </p>
    <p>The <a class="button dropdown-question" data-question="q1_3" onclick="showDrawer(this);">Select an option</a> is at the end. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.
    </p>
  </div>
  <input type="hidden" class="q1_1 dd-response"></input>
  <input type="hidden" class="q1_2 dd-response"></input>
  <input type="hidden" class="q1_3 dd-response"></input>
</div>
</div>
<div class="grid-x grid-padding-x footer">
	<a class="button back large" href="practice-transition.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
	<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
</div>
<div class="drop-down-drawer text-center">
	<a class="button secondary answer-option" data-value="1">Intro</a>
	<a class="button secondary answer-option" data-value="2">Body</a>
	<a class="button secondary answer-option" data-value="3">Conclusion</a>	
</div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal style="background-color: #94D150; color: #FFF">
		
</div>
 <script>
 	function showDrawer(o) {
 		$('.drop-down-drawer').toggle("slide", { direction: "down" }, 1000);
 		$('.dropdown-question').removeClass('selected-dd');
 		$(o).addClass('selected-dd');
 	}

 	$('.answer-option').click(function() {
 	 	var drawerId = $(".selected-dd").data('question');
		$(".selected-dd").text($(this).text()).addClass('filled');
		$("."+drawerId).val($(this).data("value"));
		$(this).addClass('selected-dd-response').delay(500, function() {
			$('.drop-down-drawer').hide("slide", { direction: "down" }, 1000);
			$('.dropdown-question').removeClass('selected-dd');
			$('.answer-option').removeClass('selected-dd-response');
		});

		ClozeDropdown.enableButton();
	});
	
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