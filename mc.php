<!DOCTYPE html>
<html>
	<head>
		<title>Practice Multiple Choice</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "30.8"; ?>
		<?php include '_progress.php'; ?>
		<img src="images/msg-bubbles.jpg" class="question-type-icon"/>
	  	<div class="content"> 
	  		<div class="grid-x grid-padding-x">
	  		<h2 class="lesson-label label medium-12">Practice Question:</h2>
	  		<h2 class="title medium-12">How is an opinion piece organized into sections?</h2>
		  <div class="medium-12 lesson-desc grid-x">
		    <p><label class="select"><select class="inline-select question" name="q1">
		    <option value="---" selected disabled>Select an option</option>
		    <option value="Introduction">Introduction</option>
		    <option value="Body">Body</option>
		    <option value="Conclusion">Conclusion</option>
		  </select></label>begins the opinion piece. It includes the opinion statement and helps readers understand the topic.
		  </p>
		  <p><label class="select"><select class="inline-select question" name="q2">
		    <option value="---" selected disabled>Select an option</option>
		    <option value="Introduction">Introduction</option>
		    <option value="Body">Body</option>
		    <option value="Conclusion">Conclusion</option>
		  </select></label>follows the introduction. It explains how the opinion statement is supported with reasons or evidence.</p>
		  <p><label class="select"><select class="inline-select question" name="q3">
		    <option value="---" selected disabled>Select an option</option>
		    <option value="Introduction">Introduction</option>
		    <option value="Body">Body</option>
		    <option value="Conclusion">Conclusion</option>
		  </select></label>is at the end. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.
		  </p>
		  </div>
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>An introduction begins an opinion piece and introduces the topic and opinion statement. The body section follows the introduction
		  	and explains how an opinion statement is supported with reasons and evidence. A conclusion follows after the body section and ends the opinion piece.
		  	The conclusion summarizes how an opinion was supported and states what the writer wants their audience to do or believe.</p>
		  </div>
		</div>
	</div>
	
	<div class="grid-x grid-padding-x footer">
		<hr/>
		<div class="medium-12">
			<a class="button back large" href="why-lesson.php"><i class="fas fa-angle-left"></i> Back</a>
			<a id="question-1" class="check-disabled button success large float-right">Check</a>
		</div>
	</div>
	 <script>
	      $(document).foundation();

	      var question1 = {q1:"Introduction", q2:"Body",q3:"Conclusion"};
	      var nextPage = "choice-matrix-1.php";
	      var minReq = 3;
	      var answered = 0;
		  	
	      $(document).on("click",".check", function() {
	    	  $(".question").each(function() {
	    		  var name = $(this).attr("name");
				  var val = $(this).val();
				  if(question1[name]==val) {
					$(this).parent().addClass('correct').append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: 51px;" aria-hidden="true"></i>');
				  } else {
					$(this).parent().addClass('incorrect').append('<i class="fas fa-times " style="color: #FED700;position:relative; right: 51px;" aria-hidden="true"></i>');
				  }
		      });
		      
	    	  $(".rationale").removeClass("hide");
	    	  $(this).text("Next");
	    	  $(this).addClass("check-verified").removeClass("check");
	      });

	      $(".inline-select").change(function() {
			// alert("check to see if minimum number of question have been answered");
			answered=0;
			$(".inline-select").each(function() {
				// alert($(this).val());
				if($(this).val()!=null) {
					answered++;
				}
			});
			if(answered==minReq) {
				$(".check-disabled").addClass("check").removeClass("check-disabled");
			}
	      });

	      // todo: pull into library off individual page.
	      $(document).on("click",".check-verified", function() {
			  window.location.href=nextPage;
	      });
	      var storage = window.sessionStorage;
	      $(document).ready(function() {
				highlightCurrentQuiz();
	  			highlightAllCorrectQuiz();
		  });
	  </script>
	</body>
</html>