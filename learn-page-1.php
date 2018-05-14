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
	  	.title-learn {font-family:'Roboto Slab',sans-serif; font-weight:light; font-size: 24px}
	  		  	.practice-section {
	height: 63px;
	color: #FFFFFF;
	font-family: "Roboto Slab";
	font-size: 48px;
	font-weight: 300;
	line-height: 63px;
	text-align: center; position:absolute; left:329px; top:200px; margin-bottom:37px;
}
.lorem-ipsum-dolor-si {
	height: 56px;
	width: 469px;
	color: #FFFFFF;
	font-family: Roboto;
	font-size: 18px;
	font-weight: 300;
	line-height: 28px;
	text-align: center;
	position:absolute; top:290px; left:278px;
}
.practice-button {
	height: 40px;
	width: 134px;
	border: 1px solid #307FE2;
	border-radius: 4px;
	background-color: #FFFFFF;position:absolute; left:445px; top:390px; padding-top:7px; text-align: center;
}
.slide-1, .slide-2, .slide-3 {height:400px}
.learn .slide-2 .item {display:block}

.slide-8 {display:none}
	  </style>
	</head>
	<body class="practice learn why-lesson">
		<div class="content" style="padding-bottom:125px; overflow:hidden">
			<div class="content-header content-header-learn">Learn</div>
			<div style="width:700px; margin:0 auto; text-align:center; position: absolute; bottom: 30px;  height: 64px;">
				<a class="slide-btn-back" onclick="moveWindowReverse();"><i class="fas fa-arrow-up"></i>&nbsp;Back</a>
				<a class="slide-btn-main" data-active-slide="slide-1" data-next-slide="slide-2" ><i class="fas fa-arrow-down"></i></a>
			</div>
			<div class="content-wrapper" style="width:700px; height:400px;overflow:hidden">
			<div class="content-window" style="position:relative">
			<div class="grid-x grid-padding-x slide-1" >
				<h2 class="title-learn medium-12">This lesson helps learners answer<br/> the following questions: </h2>
				<div class="lesson-point-item first-item item">
					 
					<img src="images/irony.jpg" class="lesson-point" style="height:95px"/>
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
			</div>
			<div class="grid-x grid-padding-x slide-2" style="display:flex">
				<h2 class="title-learn" style="margin:24px auto 24px;">Why this lesson is important</h2>
				<div class="medium-12 lesson-desc text-center" >
					<img src="images/why-lesson.jpg" style="width:333px" class=""></span>
				</div>
				<div class="medium-12" style="font-family:roboto; font-size:14px;line-height: 20px;">
					A narrative is a story: it contains characters, story events, and settings. Writers use techniques like irony and suspense 
					to make their narratives more interesting and pleasurable for readers.
				</div>
			</div>
			
			</div>
			</div>
		</div>
		<div class="slide-8" style="width:100%;background-color:#43B02A;position:relative;height: 653px;s">
				<img src="images/practice-icon-v2.jpg" style="height:100px; top:96px; left: 378px; position:absolute;"/>
				<h2 class="practice-section">Practice Section</h2>
				<p class="lorem-ipsum-dolor-si">Go ahead and make mistakes!</p>
				<a href="learn-page-2.php" class="practice-button">Practice</a>
			</div>
		<?php $width = "11.1"; ?>
		<?php $back = "index.php"; ?>
		<?php $next = "practice-transition.php"; ?>
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

		    /* window scroller variables and functions */
			var windowPos = 0;
			var maxWindowPos = -800;
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
		    
		    $(".slide-2-btn").click(function () {
				$(".slide-2-btn").fadeOut(100);
				$(".slide-2").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-3").show().addClass("accessed");
					  timeDelay=animationDuration+50;
					  showElement($(".slide-3 .item-one"));
					  setTimeout(showElement.bind(null,$(".slide-3 .item-two")), timeDelay);
					  timeDelay+=animationDuration+50;
					  setTimeout(showElement.bind(null,$(".slide-3 .item-three")), timeDelay);
					  timeDelay+=animationDuration+50;
					  setTimeout(showElement.bind(null,$(".slide-3 .slide-3-btn ")), timeDelay);
					timeDelay=0;
				});
				$(".slide-btn").removeClass("active-btn");
				$(".slide-3-btn").addClass("active-btn");

			});

		    $(".slide-3-btn").click(function () {
				$(".slide-3-btn").fadeOut(100);
				$(".slide-3").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-4").show().addClass("accessed");
					
					timeDelay=animationDuration+50;
					showElement($(".slide-4 .item-one"));
					showElement($(".slide-4 .item-two"));
					setTimeout(showElement.bind(null,$(".slide-4 .slide-4-btn")), timeDelay);
					timeDelay=0;
				});
				$(".slide-btn").removeClass("active-btn");
				$(".slide-4-btn").addClass("active-btn");
			});

			function showElementsOnSlide3() {
				$(".slide-3 .item").each(function() {
					console.log("inside item each");
					setTimeout(showElement.bind(null,this), timeDelay);
					timeDelay+=animationDuration+50;
				});
			}

			$(".slide-4-btn").click(function () {
				timeDelay=animationDuration+50;
				$(".slide-4-btn").hide(0);
				$(".slide-4").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-5").show().addClass("accessed");
					
					timeDelay=animationDuration+50;
					showElement($(".slide-5 .item-one"));
					showElement($(".slide-5 .item-four"));
					setTimeout(showElement.bind(null,$(".slide-5 .slide-5-btn")), timeDelay);
					timeDelay=0;
				});

			});

			$(".slide-5-btn").click(function () {
				timeDelay=animationDuration+50;
				$(".slide-5-btn").hide(0);
				$(".slide-5").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-6").show().addClass("accessed");
					
					timeDelay=animationDuration+50;
					showElement($(".slide-6 .item-one"));
					showElement($(".slide-6 .item-four"));
					setTimeout(showElement.bind(null,$(".slide-6 .slide-6-btn")), timeDelay);
					timeDelay=0;
				});
			});

			$(".slide-6-btn").click(function () {
				timeDelay=animationDuration+50;
				$(".slide-6-btn").hide(0);
				$(".slide-6").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-7").show().addClass("accessed");
					
					timeDelay=animationDuration+50;
					showElement($(".slide-7 .item-six"));
					setTimeout(showElement.bind(null,$(".slide-7 .slide-7-btn")), timeDelay);
					timeDelay=0;
				});
			});

			$(".slide-7-btn").click(function () {
				$(".slide-btn").removeClass("active-btn");
				timeDelay=animationDuration+50;
				$(".slide-7-btn").hide(0);

				showElement($(".slide-8"));
				// $(".content").hide("slide", { direction: "up" }, 900);
				$(".content-header").hide();
				$(".content").animate({
				    height: "0", padding:"0", borderWidth:"0"
				  }, 900, function() {
					  // $(".content").hide("slide", { direction: "up" }, 150);
				});
			});

			var lastScrollStamp = new Date().getTime();
		    $('html').on ('mousewheel', function (e) {
			    var delta = e.originalEvent.wheelDelta;
			    var nowScrollStamp = new Date().getTime();
			    var scrollDiff = nowScrollStamp - lastScrollStamp;
			    if (delta > 3 && scrollDiff>=1000) {
			    	isScrolling = true;
			    	lastScrollStamp = nowScrollStamp;
			    	if ($(".slide-1").is(":visible")) {
						return;
					} else if ($(".slide-2").is(":visible")) {
			    		$(".slide-2").hide("slide", { direction: "down" }, 900);
				    	$(".slide-1").show("slide", { direction: "up" }, 900);
						//$(".slide-2-btn").hide();
					} else if ($(".slide-3").is(":visible")) {
			    		$(".slide-3").hide("slide", { direction: "down" }, 900);
				    	$(".slide-2").show("slide", { direction: "up" }, 900);
						//$(".slide-3-btn").hide();
					} else if ($(".slide-4").is(":visible")) {
			    		$(".slide-4").hide("slide", { direction: "down" }, 900);
				    	$(".slide-3").show("slide", { direction: "up" }, 900);
					} else if ($(".slide-5").is(":visible")) {
			    		$(".slide-5").hide("slide", { direction: "down" }, 900);
				    	$(".slide-4").show("slide", { direction: "up" }, 900);
					} else if ($(".slide-6").is(":visible")) {
			    		$(".slide-6").hide("slide", { direction: "down" }, 900);
				    	$(".slide-5").show("slide", { direction: "up" }, 900);
					} else if ($(".slide-7").is(":visible")) {
			    		$(".slide-7").hide("slide", { direction: "down" }, 900);
				    	$(".slide-6").show("slide", { direction: "up" }, 900);
					}
				} else if (delta < 3 && scrollDiff>=1000) {
			    	isScrolling = true;
			    	lastScrollStamp = nowScrollStamp;
					if($(".slide-1").is(":visible") && $(".slide-2").hasClass("accessed")) {
						$(".slide-2").show("slide", { direction: "down" }, 900);
						$(".slide-1").hide("slide", { direction: "up" }, 900);
						/* if($(".footer.active-btn").length==0) { 
								$(".active-btn").show();
						} else {
							showFooter();
						} */
					} else if($(".slide-2").is(":visible") && $(".slide-3").hasClass("accessed")) {
						$(".slide-3").show("slide", { direction: "down" }, 900);
						$(".slide-2").hide("slide", { direction: "up" }, 900);
					} else if($(".slide-3").is(":visible") && $(".slide-4").hasClass("accessed")) {
						$(".slide-4").show("slide", { direction: "down" }, 900);
						$(".slide-3").hide("slide", { direction: "up" }, 900);
					} else if($(".slide-4").is(":visible") && $(".slide-5").hasClass("accessed")) {
						$(".slide-5").show("slide", { direction: "down" }, 900);
						$(".slide-4").hide("slide", { direction: "up" }, 900);
					} else if($(".slide-5").is(":visible") && $(".slide-6").hasClass("accessed")) {
						$(".slide-6").show("slide", { direction: "down" }, 900);
						$(".slide-5").hide("slide", { direction: "up" }, 900);
					} else if($(".slide-6").is(":visible") && $(".slide-7").hasClass("accessed")) {
						$(".slide-7").show("slide", { direction: "down" }, 900);
						$(".slide-6").hide("slide", { direction: "up" }, 900);
					}
			    }
			    isScrolling = false;
			});


	    </script>
	</body>
</html>