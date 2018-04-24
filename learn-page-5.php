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
			<div class="grid-x grid-padding-x slide-2">
				<div class="image-holder">
					<img src="images/CSK-L7-Suspense.gif" class="item item-one"/>
				</div>
				<div class="content-example-holder">
					<p class="what-is-example item item-two">Marco heard movement downstairs. Pulling the covers over his head, he tried tried to
					 ignore the mysterious sounds, but they grew louder.</p>
				</div>
				<div class="reason-for-example item item-four">Because the source of the sounds is unknown,
				 the reader feels the fear and excitement in the suspenseful scene.</div>
				 <div class="slide-btn-box item item-three"><img src="images/DownArrow.png" class="slide-btn slide-2-btn"/></div>
				
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

		    	 $(".slide-1-btn").click(function () {
						$(".slide-1-btn").fadeOut(animationDuration);
						$(".slide-1").hide("slide", { direction: "up" }, animationDuration, function(){
							$(".slide-2").show();
							setTimeout(showElementsOnSlide2(), 100);
							timeDelay=0;
						});
						$(".slide-btn").removeClass("active-btn");
						$(".slide-2-btn").addClass("active-btn");
					});

				$(".slide-2-btn").click(function () {
					timeDelay=animationDuration+50;
					$(".item-three").hide(0);
					showElement($(".slide-2 .item-four"));
					showElement($(".footer"));
					$(".content").animate({
					    height: "474"
					  }, 900, function() {
					    // Animation complete.
					});
					$(".slide-btn").removeClass("active-btn");
					$(".slide-3-btn").addClass("active-btn");
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

