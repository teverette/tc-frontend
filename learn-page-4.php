<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="practice learn learn-page-4">
		<div class="content">
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
				<div class="reason-for-example item item-four">For example, if an Olympic runner loses a race to a middle school student, 
				situational irony is created; readers expect the Olympic runner to win, but instead, the opposite occurs.</div>
				
				<div class="slide-btn-box item item-three"><img src="images/DownArrow.png" class="slide-btn slide-2-btn"/></div>
				<div class="slide-btn-box item item-five"><img src="images/DownArrow.png" class="slide-btn slide-3-btn"/></div>
			</div>
		</div>
		<?php $width = "43.75"; ?>
		<?php $back = "practice-4.php"; ?>
		<?php $next = "practice-5.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
		    	  
		    	  $(".slide-1 .item").each(function() {
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
