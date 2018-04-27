<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="practice learn learn-page-5">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item">What is suspense?</h2>
				<p class="irony-description item">Suspense is the fear or excitement created by the unknown in a narrative. Suspense is used to make stories more interesting.</p>
				<img src="images/DownArrow.png" class="slide-btn slide-1-btn item"/>
			</div>
			<div class="grid-x grid-padding-x slide-2" style="margin-top: 50px;">
				<div class="image-holder" style="top: -45px; position: relative">
					<img src="images/Illustration5.png" class="item item-one"/>
				</div>
				<div class="content-example-holder">
					<p class="what-is-example item item-two">Marco heard movement downstairs. Pulling the covers over his head, he tried tried to
					 ignore the mysterious sounds, but they grew louder.</p>
				</div>
				<div class="reason-for-example item item-four"></div>
				 <div class="slide-btn-box item item-three"><img src="images/DownArrow.png" class="slide-btn slide-2-btn"/></div>
			</div>
			<div class="grid-x grid-padding-x slide-3 text-center">
				<div class="reason-for-example" style="font-family: Roboto;	font-size: 24px; line-height: 38px; margin-top:125px"><span>Because the source of the sounds is unknown,
				 the reader feels the fear and excitement in the suspenseful scene.</span>
				</div>
			</div>
		</div>
		<?php $width = "75.0"; ?>
		<?php $back = "practice-7.php"; ?>
		<?php $next = "practice-8.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		    $(document).foundation();
		    $(document).ready(function() {
		    	$(".footer").hide();
		    	$(".slide-1 .item").each(function() {
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
				});	
				$(".slide-1").addClass("accessed");

		    	 $(".slide-1-btn").click(function () {
						$(".slide-1-btn").fadeOut(animationDuration);
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

						$(".content").animate({
						    height: "474"
						  }, 900, function() {
							  showElement($(".footer"));
								$(".footer").addClass("accessed");
						});
						$(".slide-btn").removeClass("active-btn");
						$(".slide-3-btn").addClass("active-btn");
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
					
			    } else if (delta < -3 && scrollDiff>=1500) {
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
	</body>
</html>

