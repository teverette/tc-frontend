<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="practice learn learn-page-2">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-3">
				<h2 class="title-learn item one">What is verbal irony?</h2>
				<p class="irony-description item two">Verbal irony occurs when words express something different from<br/>
				 their normal meanings. Verbal irony can be used to add humor or<br/> interest.
				 </p>
				 <img src="images/DownArrow.png" class="slide-btn slide-1-btn item item-six" />
			</div>
			
			<div class="grid-x grid-padding-x slide-4 text-center">
				<div class="image-holder">
					<img src="images/CSK-L7-verbal-irony.gif" class="item item-one"/>
				</div>
				<div class="content-example-holder">
					<p class="what-is-example first-item" ><span class="item item-two">Scott arrived downtown for his job interview almost 15 minutes late because his bus never arrived.</span>
					<span class="item item-four">While running from his apartment to the office, he dropped the folder that contained his application 
					 into a deep puddle. “Well, this is going well,” he muttered.</span></p>
				</div>
				<div class="reason-for-example slide-3"><span class="item item-six">Scott’s comment, “Well, this is going well,” 
				shows verbal irony because Scott<br/> says things are going well, but he means that things are not going well at all.</span></div>
				
				<img src="images/DownArrow.png" class="slide-btn slide-2-btn item item-three" />
				<img src="images/DownArrow.png" class="slide-btn slide-3-btn item item-five"/>
			</div>
		</div>

		<?php $back = "learn-page-1.php"; ?>
		<?php $next = "practice-transition.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".slide-1 .item").each(function() {
						console.log("inside item each");
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".footer").hide();
					$(".slide-1-btn").click(function () {
						$(".slide-btn").removeClass("active-btn");
						$(".slide-1-btn").fadeOut(10);
						$(".slide-1").hide("slide", { direction: "up" }, 900, function(){
							$(".slide-2").show();
							setTimeout(showElementsOnSlide2(), 100);
							timeDelay=0;
						});
						$(".item-three").addClass("active-btn");
					});

					$(".slide-2-btn").click(function () {
						timeDelay=animationDuration+50;
						$(".item-three").hide(0);
						showElement($(".slide-2 .item-four"));
						setTimeout(showElement.bind(null,$(".slide-2 .item-five")), timeDelay);
						$(".slide-btn").removeClass("active-btn");
						$(".item-five").addClass("active-btn");
					});

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
		      });		  
		      
	    </script>
	</body>
</html>
