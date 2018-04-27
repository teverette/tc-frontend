<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="practice learn learn-page-4">
		<div class="content first-content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item">What is situational irony?</h2>
				<p class="irony-description item">Situational irony occurs when the actual outcome of a situation is different from the expected outcome. It can be used to add humor and interest or to build suspense.
				 </p>
				 <img src="images/DownArrow.png" class="slide-btn slide-1-btn item"/>
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<div class="image-holder">
					<img src="images/CSK-L7-twist.gif" class="first-item item item-one"/>
				</div>
				<div class="content-example-holder">
					<p class="what-is-example first-item item item-two">Situational irony is often described as “a twist” in the story. </p>
				</div>				
				<div class="slide-btn-box item item-three"><img src="images/DownArrow.png" class="slide-btn slide-2-btn"/></div>
			</div>
			<div class="grid-x grid-padding-x slide-3 text-center">
				<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:125px"><span class="">For example, if an Olympic runner loses a race to a middle school student, 
				situational irony is created; readers expect the Olympic runner to win, but instead, the opposite occurs.</span>
				</div>
				<img src="images/DownArrow.png" class="slide-btn slide-7-btn item" />
			</div>
		</div>
		<div class="content-2 item">
			<img src="images/speaker.jpg" class="speaker"/>
			<div class="content"> 
			<div class="content-header content-header-practice">Practice</div>
			<div class="grid-x grid-padding-x">
			  <p class="lesson-desc medium-12">Which of these uses situational irony?</p>
			   
			  <table class="medium-12 unstriped grid-matrix">
			  <thead>
			    <tr>
			      <th width="60%"></th>
			      <th width="20%" class="text-center">Situational Irony</th>
			      <th width="20%" class="text-center">NOT Situational Irony</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Ms. Jones inspects buildings to be sure they are safe. She is very strict and feels responsible for the safety of others. 
			      She hires a company to build a porch on the front of her home. The porch falls off.</td>
			      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="irony"/></td>
			      <td class="text-center"><input type="radio" class="q5_1" name="q5_1" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>The mother of a toddler buys a gate to block the stairs. While she is distracted the child wanders to the stairs.
			       He rattles the gate and cries because he can’t climb up. </td>
			      <td class="text-center"><input type="radio" name="q5_2" value="irony"/></td>
			      <td class="text-center"><input type="radio" name="q5_2" value="not-irony"/></td>
			    </tr>
			    <tr>
			      <td>Mr. Brown exercises every morning and eats small meals for weeks in order to lose weight. 
			      One Saturday morning, he weighs himself. He has gained two pounds.</td>
			      <td class="text-center"><input type="radio" name="q5_3" value="irony"/></td>
			      <td class="text-center"><input type="radio" name="q5_3" value="not-irony"/></td>
			    </tr>
			  </tbody>
			  
			</table>
			
			</div>
			<div class="rationale-sidebar"></div>
			</div>
		</div>
		<?php $back = "practice-4.php"; ?>
		<?php $width = "43.75"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
		    	  $(".forward-button").html('Check <i class="fas fa-lg fa-caret-right" ></i>');
		    	  $(".footer").hide();
		    	  $(".slide-1 .item").each(function() {
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".slide-1").addClass("accessed");
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
					$(".slide-3").show("slide", { direction: "down" }, animationDuration*2);
					$(".slide-2").hide("slide", { direction: "up" }, animationDuration);
					
					$(".slide-3").addClass("accessed");
					$(".slide-7-btn").show();
					/*
					showElement($(".footer"));
					$(".footer").addClass("accessed");
					$(".content").animate({
					    height: "474"
					  }, 900, function() {
					    // Animation complete.
					});*/
					$(".slide-btn").removeClass("active-btn");
					$(".slide-3-btn").addClass("active-btn");
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
							    height: "574"
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

		      var questions = ["q5_1","q5_2","q5_3"];
		      	var answerKey = {q5_1:"irony", q5_2:"not-irony",q5_3:"irony"};
		      	var hintArray = {
		      	      	"hint_q5_1":{
		          	      	"not-irony":"Situational irony is when the outcome of a situation is different than expected. <br/><br/>Is it unexpected when the porch falls off?",
		          	      	},
		      	      	"hint_q5_2":{
		          	      	"irony":"For situational irony, the outcome needs to be different from what is expected. <br/><br/>Is it unexpected when the child cries?",
							},
		      	      	"hint_q5_3":{
		          	      	"not-irony":"In situational irony, something unexpected happens. <br/><br/>Is it unexpected when Mr. Brown gains weight?",
		              	}
		      	}
		      	var rationaleArray = {
		      	      	"rationale_q5_1":"The reader expects a building inspector’s porch to be safe, so it is ironic when the opposite happens.",
		      	      	"rationale_q5_2":"This is not situational irony, because the child’s reaction is what the reader expects.",
		      	      	"rationale_q5_3":"The reader expects Mr. Brown to lose weight, so when the opposite happens, it is situational irony."
		      	}
		      	var response_key = {};
		      	var nextPage = "practice-6.php";
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
	      			ChoiceMatrix.initialize("practice_5",3,3);
	      			if(hasAlreadyAnswered("practice_5")) {
						ChoiceMatrix.setPreviousResponse();
					}
	      		});
	    </script>
	</body>
</html>
