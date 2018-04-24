<!DOCTYPE html>
<html>
	<head>
	  <title>This lesson helps learners answer the following questions</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.lesson-point-item {margin-top:17px;width:200px;text-align:center; display:none;}
	  	.lesson-point-item.first-item {margin-left: 0;}
	  	img.lesson-point {font-family:'Roboto Slab',sans-serif; width:100px; display:inline-block;margin-bottom:20px}
	  	
	  	.lesson-point-label {color: #307FE2; font-family: Roboto; font-size: 16px; font-weight: 500; line-height: 22px; text-align: center}
	  	.lesson-point-item p {color: #4A4A4A; font-family: Roboto; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center}
	  </style>
	</head>
	<body class="practice learn why-lesson">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1" >
				<h2 class="title-learn medium-12">This lesson helps learners answer<br/> the following questions: </h2>
				<div class="lesson-point-item first-item item">
					<div class="image-holder" style="height:95px">
						<img src="images/irony.jpg" class="lesson-point"/>
					</div>
					<h4 class="lesson-point-label">Irony</h4>
					<p style="width:188px;text-align:center">What are the different types of irony?</p>			
				</div>
				<div class="lesson-point-item second-item item" style="margin-left:45px;margin-top: 21px;">
					<img src="images/suspense.jpg" class="lesson-point"/>
					<h4 class="lesson-point-label">Suspense</h4>
					<p style="width:188px;text-align:center">What is suspense?</p>			
				</div>
				<div class="lesson-point-item third-item item" style="margin-left:25px;">
					<img src="images/narrative.jpg" class="lesson-point"/>
					<h4 class="lesson-point-label">Irony</h4>
					<p style="width:200px;text-align:center">How do writers use suspense and irony in narratives?</p>			
				</div>
				<img src="images/DownArrow.png" class="slide-btn slide-1-btn item three" />
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<h2 class="title-learn" style="margin:24px auto 24px; height:inherit">Why this lesson is important</h2>
				<div class="medium-12 lesson-desc text-center" >
					<img src="images/why-lesson.jpg" style="width:333px" class="item item-one"></span>
				</div>
				<div class="medium-12 second-item item item-two">
					<p>
					A narrative is a story: it contains characters, story events, and settings. Writers use techniques like irony and suspense 
					to make their narratives more interesting and pleasurable for readers.</p>
				</div>
			</div>
		</div>
		<?php $width = "11.1"; ?>
		<?php $back = "index.php"; ?>
		<?php $next = "learn-page-2.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		<script>
			$(".footer").hide();
		    $(document).foundation();
		    $(document).ready(function(){
		    	$(".slide-1 .item").each(function() {
					console.log("inside item each");
					setTimeout(showElement.bind(null,this), timeDelay);
					timeDelay+=animationDuration+50;
				});
		    });
		    $(".slide-1-btn").click(function () {
				$(".slide-1-btn").fadeOut(100);
				$(".slide-1").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-2").show();
					setTimeout(showElementsOnSlide2(), 100);
					timeDelay=0;
				});
				$(".slide-btn").removeClass("active-btn");
				$(".slide-2-btn").addClass("active-btn");
				showElement($(".footer"));
				$(".content").animate({
				    height: "474"
				  }, 900, function() {
				    // Animation complete.
				});
			});

		    $('html').on ('mousewheel', function (e) {
			    var delta = e.originalEvent.wheelDelta;
				if (delta > 0 && !$(".slide-1").is(":visible")) {
			    	$(".slide-1").show("slide", { direction: "up" }, 900);
					$(".slide-2").hide("slide", { direction: "down" }, 900);
					$(".slide-btn").hide();
					$(".slide-1-btn").fadeIn(animationDuration);
			    } else if (delta < 0) {
					if($(".slide-1").is(":visible") && ($(".active-btn").length>0 || $(".footer").is(":visible"))) {
						$(".slide-2").show("slide", { direction: "down" }, 450);
						$(".slide-1").hide("slide", { direction: "up" }, 900);
						$(".active-btn").show();
					}
			    }
			});
	    </script>
	</body>
</html>