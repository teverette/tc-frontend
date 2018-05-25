<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	</head>
	<body class="practice learn learn-page-5">
		<div class="content-header content-header-learn">Learn & Practice</div>
		<div class="content-borderless">
		<div class="content-borderless-window">
		<div class="content first-content">
			<div class="content-wrapper" style="width:700px; height:400px;overflow:hidden">
			<div class="content-window" style="position:relative">
				<div class="grid-x grid-padding-x slide-1">
					<h2 class="title-learn item">What is suspense?</h2>
					<p class="irony-description item">Suspense is the fear or excitement created by the unknown in a narrative. Suspense is used to make stories more interesting.</p>
				</div>
				<div class="grid-x grid-padding-x slide-2" >
					<div class="image-holder" style="">
						<img src="images/Illustration5.png" class=" item-one"/>
					</div>
					<div class="content-example-holder">
						<p class="what-is-example  item-two">Marco heard movement downstairs. Pulling the covers over his head, he tried tried to
						 ignore the mysterious sounds, but they grew louder.</p>
					</div>
					<div class="reason-for-example  item-four"></div>
				</div>
				<div class="grid-x grid-padding-x slide-3 text-center">
					<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:125px"><span>Because the source of the sounds is unknown,
					 the reader feels the fear and excitement in the suspenseful scene.</span>
					</div>
				</div>
			</div>
			</div>
			<?php $width = "70.0"; ?>
			<?php include '_footer_learn_progress.php'; ?>
		</div>
		<div class="content-2 item">
			<div class="content"> 
			<div class="grid-x grid-padding-x">
			  
			  <h2 class="title medium-12">Which example uses suspense?</h2>
			  <div class="grid-x medium-12" style="position:relative">
			  	<label class="radio">
					<div class="mc-input-box" style="top:0">
				  		<input type="radio" class="q8_1 question" name="q8_1" value="1"/>
				  	</div>
				  	<p class="lesson-copy mc-text">A boy rises from his bed, stretches his arms wide, and is ready to start the day.</p>
				</label>
				<label class="radio">
					<div class="mc-input-box" style="top:52px">
				  		<input type="radio" class="q8_1 question" name="q8_1" value="2"/>
				  	</div>
				  	<p class="lesson-copy mc-text">A woman searches everywhere for her hat, which is on her head.</p>
				</label>
			  
			  	<label class="radio">
			  		<div class="mc-input-box" style="top: 92px">
			  			<input  type="radio" class="q8_1 question" name="q8_1" value="3"/>
			  		</div>
			  		<p class="lesson-copy mc-text">Two runners have been racing for first place for an hour. As they round the corner to the finish line, they run into each other.</p>
			  	</label>
			  	<label class="radio">
			  		<div class="mc-input-box" style="top: 147px">
			  			<input  type="radio" class="q8_1 question" name="q8_1" value="4"/>
			  		</div>
			  		<p class="lesson-copy mc-text">A waiter drops a tray of food and a customer says, “Nice catch.”</p>
			  	</label>
			  </div>
			  
			</div>
			<div class="rationale-sidebar"></div>
			</div>
			<?php $width = "75.0"; ?>
		<?php $back = "practice-7.php"; ?>
		<?php include '_footer_progress.php'?>
		</div>
		</div></div>
		
		 <script>
		    $(document).foundation();
		    var maxWindowPos = -1200;
		    var question_item = 8;
		    $(document).ready(function() {
		    	$(".num-questions-remaining").text("3 questions left");
		    	$(".forward-button").html('Check <i class="fas fa-lg fa-check icon-on-right"></i>');
		    	$(".slide-1 .item").each(function() {
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
				});	
				$(".slide-1").addClass("accessed");

		    	 
				
		    });

		      var questions = ["q8_1"];
		      	var hintArray = {
		      	      	"hint_q8_1":{
		          	      	1:"This situation does not involve fear or excitement.",
		          	      	2:"This is an example of irony, but it is not suspenseful.",
		              	    4:"This is verbal irony, but does not create a sense of anticipation."
						}
		      	}
		      	var rationaleArray = {
		      	      	"rationale_q8_1":"Readers want to know who will win the race, especially since the runners have collided."
		      	}
				var answerKey = {q8_1:"3"};
		  		var nextPage = "practice-9.php";

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
					highlightAllCorrectQuiz();
					ChoiceMatrix.initialize("practice_8",1,1,"mc");
					if(hasAlreadyAnswered("practice_8")) {
						ChoiceMatrix.setPreviousResponse();
					}
					$(".forward-button").html('Check <img src="images/check-icon-white.png" style="margin-left:3px"/>');
				});
	    </script>
	</body>
</html>

