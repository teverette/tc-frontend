<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	</head>
	<body class="practice learn learn-page-3">
		<div class="content first-content">
			<div class="content-header content-header-learn">Learn & Practice</div>
			<div style="width:700px; margin:0 auto; text-align:center; position: absolute; bottom: 30px;  height: 64px;">
				<a class="slide-btn-back" onclick="moveWindowReverse();"><i class="fas fa-arrow-up"></i>&nbsp;Back</a>
				<a class="slide-btn-main" data-active-slide="slide-1" data-next-slide="slide-2" ><img src="images/DownArrow.png"/></a>
			</div>
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
		</div>
		<div class="content-2 item">
			<div class="content"> 
			<div class="content-header content-header-practice">Practice</div>
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
			  		<div class="mc-input-box" style="top:130px">
			  			<input  type="radio" class="q3_1 question" name="q3_1" value="3"/>
			  		</div>
			  		<p class="lesson-copy mc-text">Lucas finishes his homework and leaves it on his desk. 
			  		When he wakes up in the morning, it is gone. No one knows what has happened to it.</p>
			  	</label>
			  </div>
			  
			</div>
			<div class="rationale-sidebar"></div>
			</div>
		</div>
		<?php $back = "practice-2.php"; ?>
		<?php $width = "31.25"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      var maxWindowPos = -1200;
		      
		      
		      $(document).ready(function() {
		    	    $(".forward-button").html('Check <i class="fas fa-lg fa-check icon-on-right"></i>');
					$(".slide-1 .item").each(function() {
						console.log("inside item each");
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".slide-1").addClass("accessed");
					$(".footer").hide();
					
		      });

		      $(".slide-1-btn").click(function () {
					$(".slide-1-btn").fadeOut(100);
					$(".slide-1").hide("slide", { direction: "up" }, animationDuration, function(){
						$(".slide-2").show().addClass("accessed");
						setTimeout(showElementsOnSlide2(), 100);
						timeDelay=0;
					});
					$(".slide-btn").removeClass("active-btn");
					$(".slide-2-btn").addClass("active-btn");
					$(".slide-2").addClass("accessed");
				});

		      $(".slide-2-btn").click(function () {
					timeDelay=animationDuration+50;
					$(".item-three").hide(0);
					$(".slide-3").show("slide", { direction: "up" }, animationDuration*2);
					$(".slide-2").hide("slide", { direction: "up" }, animationDuration);
					
					$(".slide-3").addClass("accessed");
					$(".slide-btn").removeClass("active-btn");
					$(".slide-7-btn").show();
				});

		      $(".slide-7-btn").click(function () {
					$(".slide-btn").removeClass("active-btn");
					timeDelay=animationDuration+50;
					$(".slide-7-btn").hide(0);

					showElement($(".content-2"));
					// $(".content").hide("slide", { direction: "up" }, 900);
					$(".first-content .content-header").hide();
					
					$(".first-content").animate({
					    height: "0", padding:"0", borderWidth:"0"
					  }, 900, function() {
						$(".speaker").show();
						$("body").removeClass("learn");
						showElement($(".footer"));
						
					});
				});
		      
		      $('html').on ('mousewheel', function (e) {
			      console.log("mousewheel detected");
				    var delta = e.originalEvent.wheelDelta;
				    var nowScrollStamp = new Date().getTime();
				    var scrollDiff = nowScrollStamp - lastScrollStamp;
				    if (delta > 3 && scrollDiff>=1500) {
				    	lastScrollStamp = nowScrollStamp;
				    	if($(".content-2").is(":visible")) {return}
						if($(".slide-2").is(":visible")) {
					    	$(".slide-1").show("slide", { direction: "up" }, 900);
							$(".slide-2").hide("slide", { direction: "down" }, 900);
							
						} else if($(".slide-3").is(":visible")) {
					    	$(".slide-2").show("slide", { direction: "up" }, 900);
							$(".slide-3").hide("slide", { direction: "down" }, 900);
							$(".footer").hide();
							$(".content").animate({
							    height: "554"
							  }, 900, function() {
								  
							});
						}
						
				    } else if (delta < -3 && scrollDiff>=1500) {
				    	lastScrollStamp = nowScrollStamp;
				    	if($(".content-2").is(":visible")) {return}
						if($(".slide-1").is(":visible") && $(".slide-2").hasClass("accessed")) {
							$(".slide-2").show("slide", { direction: "down" }, 450);
							$(".slide-1").hide("slide", { direction: "up" }, 900);
							
						} else if($(".slide-2").is(":visible") && $(".slide-3").hasClass("accessed")) {
							$(".slide-3").show("slide", { direction: "down" }, 450);
							$(".slide-2").hide("slide", { direction: "up" }, 900);
							showElement($(".footer"));
							$(".content").animate({
							    height: "474"
							  }, 900, function() {
							    // Animation complete.
							});
						}
				    }
				});
		      var lastScrollStamp = new Date().getTime();
		      
		      function showElement(o) {
			      console.log("inside hideElement");
		    	  $(o).fadeIn(animationDuration);
			  }

		      function showElementsOnSlide2() {
				  timeDelay=animationDuration+50;
				  showElement($(".slide-2 .item-one"));
				  setTimeout(showElement.bind(null,$(".slide-2 .item-two")), timeDelay);
				  timeDelay+=animationDuration+50;
				  setTimeout(showElement.bind(null,$(".slide-2 .item-three")), timeDelay);
			  }
	    </script>
	     <script>
      $(document).foundation();
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
		});


  </script>
	</body>
</html>
