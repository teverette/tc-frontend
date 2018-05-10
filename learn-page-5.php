<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <script src="js/window-scroller.js"></script>
	</head>
	<body class="practice learn learn-page-5">
		<div class="content first-content">
			<div class="content-header content-header-learn">Learn</div>
			<div style="width:700px; margin:0 auto; text-align:center; position: absolute; bottom: 30px;  height: 64px;">
				<a class="slide-btn-back" onclick="moveWindowReverse();"><i class="fas fa-arrow-up"></i>&nbsp;Back</a>
				<a class="slide-btn-main" data-active-slide="slide-1" data-next-slide="slide-2" >Got It&nbsp;<i class="fas fa-arrow-down"></i></a>
			</div>
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
		</div>
		<div class="content-2 item">
			<img src="images/speaker.jpg" class="speaker item" />
			<div class="content"> 
			<div class="content-header content-header-practice">Practice</div>
			<div class="grid-x grid-padding-x">
			  
			  <h2 class="title medium-12">Which example uses suspense?</h2>
			  <div class="grid-x medium-12" style="position:relative">
			  	<label class="radio">
					<div class="mc-input-box" style="top: 2px">
				  		<input type="radio" class="q8_1 question" name="q8_1" value="1"/>
				  	</div>
				  	<p class="lesson-copy mc-text">A boy rises from his bed, stretches his arms wide, and is ready to start the day.</p>
				</label>
				<label class="radio">
					<div class="mc-input-box" style="top: 81px">
				  		<input type="radio" class="q8_1 question" name="q8_1" value="2"/>
				  	</div>
				  	<p class="lesson-copy mc-text">A woman searches everywhere for her hat, which is on her head.</p>
				</label>
			  
			  	<label class="radio">
			  		<div class="mc-input-box" style="top: 158px">
			  			<input  type="radio" class="q8_1 question" name="q8_1" value="3"/>
			  		</div>
			  		<p class="lesson-copy mc-text">Two runners have been racing for first place for an hour. As they round the corner to the finish line, they run into each other.</p>
			  	</label>
			  	<label class="radio">
			  		<div class="mc-input-box" style="top: 268px">
			  			<input  type="radio" class="q8_1 question" name="q8_1" value="4"/>
			  		</div>
			  		<p class="lesson-copy mc-text">A waiter drops a tray of food and a customer says, “Nice catch.”</p>
			  	</label>
			  </div>
			  
			</div>
			<div class="rationale-sidebar"></div>
			</div>
		
		</div>
		<?php $width = "75.0"; ?>
		<?php $back = "practice-7.php"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		    $(document).foundation();
		    var maxWindowPos = -1200;
		    $(document).ready(function() {
		    	$(".forward-button").html('Check <i class="fas fa-lg fa-caret-right" ></i>');
		    	$(".footer").hide();
		    	$(".slide-1 .item").each(function() {
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
				});	
				$(".slide-1").addClass("accessed");

		    	 $(".slide-1-btn").click(function () {
						$(".slide-1-btn").fadeOut(animationDuration);
						$(".slide-2").show().addClass("accessed");
						
						$(".slide-1").hide("slide", { direction: "up" }, animationDuration, function(){
							setTimeout(showElementsOnSlide2(), 100);
							timeDelay=0;
						});

						$(".slide-2").addClass("accessed");
					});

		    	 $(".slide-2-btn").click(function () {
						timeDelay=animationDuration+50;
						$(".item-three").hide(0);
						$(".slide-3").show("slide", { direction: "down" }, animationDuration);
						$(".slide-2").hide("slide", { direction: "up" }, animationDuration);
						$(".slide-3").addClass("accessed");
						$(".slide-7-btn").show();
					});
				
		    });
		    $(".slide-7-btn").click(function () {
				$(".slide-btn").removeClass("active-btn");
				timeDelay=animationDuration+50;
				$(".slide-7-btn").hide(0);

				showElement($(".content-2"));
				$(".first-content .content-header").hide();
				
				$(".first-content").animate({
				    height: "0", padding:"0", borderWidth:"0"
				  }, 900, function() {
					$(".speaker").show();
					$("body").removeClass("learn");
					showElement($(".footer"));
					
				});
			});
			/*
		    $('html').on ('mousewheel', function (e) {
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
						// $(".footer").hide();
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
					}
			    }
			});
	      var lastScrollStamp = new Date().getTime();
			*/
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
				});

			      $('html').on ('mousewheel', function (e) {
			    	  var delta = e.originalEvent.wheelDelta;
					    var nowScrollStamp = new Date().getTime();
					    var scrollDiff = nowScrollStamp - lastScrollStamp;
					    if (delta > 3 && scrollDiff>=1500) {
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
							
					    }else if (delta < -3 && scrollDiff>=1500) {
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
	    </script>
	</body>
</html>

