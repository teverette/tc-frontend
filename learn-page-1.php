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
				<img src="images/DownArrow.png" class="slide-btn slide-1-btn item one" />
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<h2 class="title-learn" style="margin:24px auto 24px; height:inherit">Why this lesson is important</h2>
				<div class="medium-12 lesson-desc text-center" >
					<img src="images/why-lesson.jpg" style="width:333px" class="item item-one"></span>
				</div>
				<div class="medium-12 second-item item item-two" style="font-family:roboto; font-size:14px;line-height: 20px;">
					A narrative is a story: it contains characters, story events, and settings. Writers use techniques like irony and suspense 
					to make their narratives more interesting and pleasurable for readers.
				</div>
				<img src="images/DownArrow.png" class="slide-btn slide-2-btn item item-three" />
			</div>
			<div class="grid-x grid-padding-x slide-3">
				<h2 class="title-learn item item-one">What is verbal irony?</h2>
				<p class="irony-description item item-two">Verbal irony occurs when words express something different from<br/>
				 their normal meanings. Verbal irony can be used to add humor or<br/> interest.
				 </p>
				 <img src="images/DownArrow.png" class="slide-btn slide-3-btn item" />
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
				<div class="reason-for-example"><span class="item item-six">Scott’s comment, “Well, this is going well,” 
				shows verbal irony because Scott<br/> says things are going well, but he means that things are not going well at all.</span></div>
				
				<img src="images/DownArrow.png" class="slide-btn slide-4-btn item" />
				<img src="images/DownArrow.png" class="slide-btn slide-5-btn item" />
			</div>
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
		    $(".slide-1-btn").click(function () {
				$(".slide-1-btn").fadeOut(100);
				$(".slide-1").hide("slide", { direction: "up" }, animationDuration, function(){
					$(".slide-2").show().addClass("accessed");
					setTimeout(showElementsOnSlide2(), 100);
					timeDelay=0;
				});
				$(".slide-btn").removeClass("active-btn");
				$(".slide-2-btn").addClass("active-btn");
			});
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
				showElement($(".slide-4 .item-four"));
				setTimeout(showElement.bind(null,$(".slide-4 .slide-5-btn")), timeDelay);
				$(".slide-btn").removeClass("active-btn");
				$(".slide-5-btn").addClass("active-btn");
			});

			$(".slide-5-btn").click(function () {
				$(".slide-btn").removeClass("active-btn");
				timeDelay=animationDuration+50;
				$(".slide-5-btn").hide(0);
				showElement($(".item-six"));
				showElement($(".footer"));
				$(".content").animate({
				    height: "474"
				  }, 900, function() {
				    // Animation complete.
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
						$(".footer").hide();
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
						showElement($(".footer"));
					}
			    }
			    isScrolling = false;
			});


	    </script>
	</body>
</html>