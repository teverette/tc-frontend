<!DOCTYPE html>
<html>
	<head>
		<title>Which statements create verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="practice">
		<img src="images/speaker.jpg" class="speaker"/>
		<div class="content"> 
		<div class="content-header content-header-practice">Practice</div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Which of these shows verbal irony?</p>
		   
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
		<?php $width = "6.25"; ?>
		<?php $back = "learn-page-2b.php"; ?>
		<?php $next = ""; ?>
		<?php $btnClass =""; ?>
		<?php include '_footer_progress.php'?>
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
		
		<script>
			$(document).foundation();
			
			var questions = ["q1_1","q1_2","q1_3"];
	      	var answerKey = {q1_1:"not-irony", q1_2:"irony",q1_3:"not-irony"};
	      	var hintArray = {
	      	      	"hint_q1_1":{
	          	      	"irony":"Verbal irony is saying one thing but meaning another. <br/><br/>Did the cat say one thing but mean another? "
		          	},
	      	      	"hint_q1_2":{
	          	      	"not-irony":"Verbal irony is saying one thing but meaning another. <br/><br/>Are the student’s words the same as what he means?"
		          	},
	      	      	"hint_q1_3":{
	          	      	"irony":"Verbal irony is saying one thing but meaning another.<br/><br/>Is there a difference between what the coach says and what he means?"
	              	}
	      	}
	      	var rationaleArray = {
	      	      	"rationale_q1_1":"You got it! Verbal irony is saying one thing but meaning another. <br/><br/> The cat’s words and meaning are the same, so this is not irony",
	      	      	"rationale_q1_2":"Correct! Verbal irony is saying one thing but meaning another. <br/><br/> The student is saying the opposite of what he means, so this is verbal irony. ",
	      	      	"rationale_q1_3":"Correct! Verbal irony is saying one thing but meaning another. <br/><br/> The coach is saying exactly what he means, so this is not ironic.",
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
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>