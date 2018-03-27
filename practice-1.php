<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice">
		
		<div class="content"> 
		<div class="global-tip" style="position:fixed; left:156px; top:10px; height: 82px; width: 200px; border-radius: 4px; color:#FFF; font-size:16px; line-height:19px; font-family:'Roboto'; font-weight:300; padding:10px;
	background-color: #4A90E2; box-shadow: 0 2px 8px 0 rgba(96,96,96,0.5);};">Hover on the blue words to get a definition.
	<span style="display:inline-block; float:right; margin-top: 20px; text-align: center; cursor:pointer; height: 24px; width: 34px; border: 2px solid #FFFFFF; border-radius: 2px;" onclick="$('.global-tip').hide()">OK</span></div>
		<div class="content-header content-header-practice">Practice</div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Which of these shows <span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="false" tabindex="1" 
		      	title="When words express something different than normal meaning">verbal irony?</span></p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="20%" class="text-center">Verbal Irony</th>
		      <th width="20%" class="text-center">Not Verbal Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A cat drinking a bowl of milk smiles and says, &ldquo;I love milk!&rdquo;</td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A teacher assigns a lot of homework and a student says, &ldquo;I can&rsquo;t imagine a better way to spend my weekend.&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A soccer player makes a goal and the coach says, &ldquo;Well done!&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_3" value="not-irony"/></td>
		    </tr>
		  </tbody>
		  
		</table>
		
		</div>
		<div class="rationale-sidebar"></div>
		</div>
		<?php $width = "22.2"; ?>
		<?php $back = "lp.php"; ?>
		<?php $next = ""; ?>
		<?php include '_footer_progress.php'?>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		
		<script>
			$(document).foundation();
			
			var questions = ["q1_1","q1_2","q1_3"];
	      	var answerKey = {q1_1:"not-irony", q1_2:"irony",q1_3:"not-irony"};
	      	var hintArray = {
	      	      	"hint_q1_1":{
	          	      	"irony":"This sentence states the opinion statement. Try again."
		          	},
	      	      	"hint_q1_2":{
	          	      	"not-irony":"This section includes reasons that support the opinion statement. Try again."
		          	},
	      	      	"hint_q1_3":{
	          	      	"irony":"This sentence repeats the opinion statement and makes a suggestion. Try again."
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q1_1":"Correct! This sentence introduces the opinion statement and helps the reader understand the topic.",
	      	      	"rationale_q1_2":"Correct! The body gives reasons that support the writer’s opinion statement.",
	      	      	"rationale_q1_3":"Correct! This sentence provides a strong finish by repeating the opinion statement and providing a call to action.",
	      	}
	      	var response_key = {};
	      	var nextPage = "practice-2.php";
	      	var storage = window.sessionStorage;

			$(document).on("click",".check", function() {
				ChoiceMatrix.assess(false);
			});
	      
	      	$(document).on("click",".check-verified", function() {
			  window.location.href=nextPage;
	     	});

			$("input:radio").click(function() {
				if($('.hint').is(':visible')) {
					ChoiceMatrix.resetForm();
				}
				ChoiceMatrix.enableButton();
			});

			$(window).bind("unload", function() {
				alert("unload");
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize("practice_1",3,3);
      			if(hasAlreadyAnswered("practice_1")) {
					ChoiceMatrix.setPreviousResponse();
				}
      		});
      		
			window.onload = function() {
				
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>