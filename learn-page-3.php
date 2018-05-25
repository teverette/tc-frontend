<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	</head>
	<body class="practice learn learn-page-3">
		<div class="content-header content-header-learn">Learn & Practice</div>
		<div class="content-borderless">
		<div class="content-borderless-window">
		<div class="content first-content">
			<div class="content-wrapper" style="width:700px; height:400px;overflow:hidden">
				<div class="content-window" style="position:relative">
						<div class="grid-x grid-padding-x slide-1">
							<h2 class="title-learn item">What is dramatic irony?</h2>
							<p class="irony-description item">Dramatic irony occurs when the reader knows information that a
							 character does not. It can be used to build suspense or add interest.
							 Dramatic irony encourages readers to continue reading to learn what the
							  characters will do and whether they will ever learn the truth. 
							 </p>
						</div>
						<div class="grid-x grid-padding-x slide-2">
							<div class="image-holder">
								<img src="images/Illustration4.png" class="item item-one"/>
							</div>
							<div class="content-example-holder">
								<p class="what-is-example first-item item item-two">Marco slept peacefully in his bed, unaware of the guests who gathered 
								downstairs for his surprise birthday party. </p>
							</div>
							<div class="reason-for-example item item-four"></div>
						</div>
						<div class="grid-x grid-padding-x slide-3 text-center">
							<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:150px"><span class="">Because the readers know about the birthday party 
							and Marco does not, dramatic irony is created. The irony adds excitement and tension to the scene.</span>
							</div>
						</div>
				</div>
			</div>
			<?php $width = "28"; ?>
			<?php include '_footer_learn_progress.php'; ?>
		</div>
		<div class="content-2 item">
			<div class="content"> 
			<div class="grid-x grid-padding-x">
			  
			  <h2 class="title medium-12">Which example uses dramatic irony?</h2>
			  <div class="grid-x medium-12" style="position:relative">
			  	<label class="radio">
					<div class="mc-input-box" style="top:0">
				  		<input type="radio" class="q3_1 question" name="q3_1" value="1"/>
				  	</div>
				  	<p class="lesson-copy mc-text">Joan is lost in the woods. She is scared and it is getting dark. 
				  	The reader knows that her house is over the next hill, but Joan goes in the wrong direction.</p>
				</label>
				<label class="radio">
					<div class="mc-input-box" style="top:73px">
				  		<input type="radio" class="q3_1 question" name="q3_1" value="2"/>
				  	</div>
				  	<p class="lesson-copy mc-text">Laura is looking for her mobile phone that she has 
				  	left in her coat pocket. She eventually remembers where it is, and finds it before leaving her house.</p>
				</label>
			  
			  	<label class="radio">
			  		<div class="mc-input-box" style="top:151px">
			  			<input  type="radio" class="q3_1 question" name="q3_1" value="3"/>
			  		</div>
			  		<p class="lesson-copy mc-text">Lucas finishes his homework and leaves it on his desk. 
			  		When he wakes up in the morning, it is gone. No one knows what has happened to it.</p>
			  	</label>
			  </div>
			  
			</div>
			<div class="rationale-sidebar"></div>
			</div>
		<?php $back = "practice-2.php"; ?>
		<?php $width = "35.0"; ?>
		<?php include '_footer_progress.php'?>
		</div>
		</div></div>
			
		 <script>
		      $(document).foundation();
		      var maxWindowPos = -1200;
		      var question_item = 3;
		      var back = "<?php echo $back; ?>";
		      
		      $(document).ready(function() {
		    	  $(".num-questions-remaining").text("8 questions left");
		    	    $(".forward-button").html('Check <i class="fas fa-lg fa-check icon-on-right"></i>');
					$(".slide-1 .item").each(function() {
						console.log("inside item each");
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".slide-1").addClass("accessed");					
		      });

      /* setup question and answer for quiz question */
      	var questions = ["q3_1"];
      	var hintArray = {
      	      	"hint_q3_1":{
          	      	2:"Dramatic irony is when the readers know something the characters do not.<br/><br/>Do you know more than this character?",
          	      	3:"Dramatic irony is when the readers know something the characters do not.<br/><br/>Do you know more than this character?"
				}
      	}
      	var rationaleArray = {
      	      	"rationale_q3_1":"Joan’s choice seems tragic from the reader’s point of view, because we know something she does not."
      	}
		var answerKey = {q3_1:"1"};
  		var nextPage = "practice-4.php";

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
			ChoiceMatrix.initialize("practice_3",1,1,"mc");
			if(hasAlreadyAnswered("practice_3")) {
				ChoiceMatrix.setPreviousResponse();
			}
			$(".forward-button").html('Check <img src="images/check-icon-white.png" style="margin-left:3px"/>');
		});
  </script>
	</body>
</html>
