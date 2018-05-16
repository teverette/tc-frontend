<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	  <style>

	  </style>
	</head>
	<body class="practice learn learn-page-2">
		<div class="content first-content">
			<div class="content-header content-header-learn">Learn & Practice</div>
			<div class="content-wrapper" style="width:700px; height:400px;overflow:hidden">
			<div class="content-window" style="position:relative">
					<div class="grid-x grid-padding-x slide-3">
						<h2 class="title-learn item item-one">What is verbal irony?</h2>
						<p class="irony-description item item-two">Verbal irony occurs when words express something different from
						 their normal meanings. Verbal irony can be used to add humor or interest.
						 </p>
					</div>
					
					<div class="grid-x grid-padding-x slide-4 text-center">
						<div class="image-holder">
							<img src="images/Illustration1.png" class="item item-one"/>
						</div>
						<div class="content-example-holder">
							<p class="what-is-example first-item" ><span class="item item-two">Scott arrived downtown for his job interview almost 15 minutes late because his bus never arrived.</span>
						</div>
					</div>
					<div class="grid-x grid-padding-x slide-5 text-center">
						<div class="image-holder">
							<img src="images/Illustration2.png" class="item item-one" style="position:relative"/>
						</div>
						<div class="content-example-holder">
							<p class="what-is-example first-item" ><span class="item item-four">While running from his apartment to the office, he dropped the folder that contained his application 
							 into a deep puddle. “Well, this is going well,” he muttered.</span></p>
						</div>
					</div>
					<div class="grid-x grid-padding-x slide-6 text-center">
						<div class="image-holder">
							<img src="images/Illustration3.png" class="item item-one"/>
						</div>
						<div class="content-example-holder">
							<p class="what-is-example first-item" ><span class="item item-four">“Well, this is going well,” he muttered.</span></p>
						</div>
					</div>
					<div class="grid-x grid-padding-x slide-7 text-center">
						<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:100px"><span class="item item-six">Scott’s comment, <strong>“Well, this is going well,”</strong> 
							shows verbal<br/> irony because Scott says things are going well, but he<br/> means that things are not going well at all.</span>
						</div>
					</div>
				</div>
			</div>
			<?php $width = "7.0"; ?>
			<?php include '_footer_learn_progress.php'; ?>
		</div>
		<div class="content-2 item">
			<div class="content"> 
			<div class="content-header content-header-practice">Practice</div>
			<div class="grid-x grid-padding-x">
			  <p class="lesson-desc medium-12">Which of these shows verbal irony?</p>
			   
			  <table class="medium-12 unstriped grid-matrix">
			  <thead>
			    <tr>
			      <th width="62%"></th>
			      <th width="19%" class="text-center">Verbal Irony</th>
			      <th width="19%" class="text-center">Not Verbal Irony</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>A cat drinking a bowl of milk smiles and says, &ldquo;I love milk!&rdquo;</td>
			      <td class="text-center cm-col"><input type="radio" class="q1_1" name="q1_1" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" class="q1_1" name="q1_1" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>A teacher assigns a lot of homework and a student says, &ldquo;I can&rsquo;t imagine a better way to spend my weekend.&rdquo;</td>
			      <td class="text-center cm-col"><input type="radio" name="q1_2" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" name="q1_2" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>A soccer player makes a goal and the coach says, &ldquo;Well done!&rdquo;</td>
			      <td class="text-center cm-col"><input type="radio" name="q1_3" value="irony"/></td>
			      <td class="text-center cm-col"><input type="radio" name="q1_3" value="not-irony"/></td>
			    </tr>
			  </tbody>
			  
			</table>
			
			</div>
			<div class="rationale-sidebar"></div>
			</div>
		</div>
<?php $width = "14.0"; ?>
		<?php $back = "learn-page-1.php"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      var maxWindowPos = -2000;
		      $(document).ready(function() {
					$(".footer").hide();

					$(".slide-3-btn").click(function () {
						$(".slide-btn").removeClass("active-btn");
						timeDelay=animationDuration+50;
						$(".slide-3-btn").hide(0);
						showElement($(".item-six"));
						showElement($(".footer"));
						$(".content").animate({
						    height: "474"
						  }, 900, function() {
						    // Animation complete.
						});
					});
		      });		  
		      
			
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


			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize("practice_1",3,3);
      			if(hasAlreadyAnswered("practice_1")) {
					ChoiceMatrix.setPreviousResponse();
				}
      			$(".forward-button").html('Check <i class="fas fa-lg fa-check icon-on-right"></i>');
      		});
		  </script>
	</body>
</html>
