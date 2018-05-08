<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.slide-btn-main {position:absolute; height: 64px; margin:0 auto;cursor:pointer;}
.slide-btn-main:hover {bottom:-3px}
	  </style>
	</head>
	<body class="practice learn learn-page-2">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div style="width:700px; margin:0 auto; text-align:center; position: absolute; bottom: 30px;  height: 64px;">
				<a onclick="moveWindowReverse();">Back</a>
				<img src="images/DownArrow.png" class="slide-btn-main" data-active-slide="slide-1" data-next-slide="slide-2"/>
			</div>
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
		</div>

		<?php $back = "learn-page-1.php"; ?>
		<?php $next = "practice-transition.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".footer").hide();

				    /* window scroller variables and functions */
					var windowPos = 0;
					var maxWindowPos = -2000;
					var scrollDistance = 400;
				    $(".slide-btn-main").click(function () {
				    	moveWindowForward();
				    });

				    function getWindowTopPosition() {
				    	var position = $(".content-window").position();
				    	return position.top;
				    }

				    function moveWindowForward() {
				    	var newTopPosition = windowPos-scrollDistance;
				    	if(newTopPosition > maxWindowPos) {
							$(".content-window").animate({top:newTopPosition}, animationDuration, 'swing', function() {
								windowPos = newTopPosition;
						    });
				    	} else {
				    		showElement($(".slide-8"));

							$(".content-header").hide();
							$(".content").animate({
							    height: "0", padding:"0", borderWidth:"0"
							  }, 900, function() {
								  
							});
				    	}
				    }

				    function moveWindowReverse() {
					    console.log("current top: " + getWindowTopPosition());
				    	var newTopPosition = windowPos+scrollDistance;
				    	
				    	console.log("new top: " + newTopPosition);
				    	if(newTopPosition>=400) {
							// hide/disable button
							console.log("at top of content");
							return;
				    	}

				    	$(".content-window").animate({top:newTopPosition}, animationDuration, 'swing', function() {
				    		windowPos = newTopPosition;
					    });
				    }

				    function showPracticeSlide() {
				    	showElement($(".slide-8"));
						// $(".content").hide("slide", { direction: "up" }, 900);
						$(".content-header").hide();
						$(".content").animate({
						    height: "0", padding:"0", borderWidth:"0"
						  }, 900, function() {
							  // $(".content").hide("slide", { direction: "up" }, 150);
						});
				    }
				    /* end window scroller logic */

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
