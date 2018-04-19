<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="practice learn learn-page-3">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item">What is dramatic irony?</h2>
				<p class="irony-description item">Dramatic irony occurs when the reader knows information that a<br/>
				 character does not. It can be used to build suspense or add interest.<br/>
				 Dramatic irony encourages readers to continue reading to learn what the<br/>
				  characters will do and whether they will ever learn the truth. 
				 </p>
				 <img src="images/DownArrow.png" class="slide-btn slide-1-btn item" />
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<div class="image-holder">
					<img src="images/CSK-L7-situational-irony.gif" class="item item-one"/>
				</div>
				<div class="content-example-holder">
					<p class="what-is-example first-item item item-two">Marco slept peacefully in his bed, unaware of the guests who gathered 
					downstairs for his surprise birthday party. </p>
				</div>
				<div class="reason-for-example item item-four">Because the readers know about the birthday party 
				and Marco does not, dramatic irony is created. The irony adds excitement and tension to the scene.</div>
				
				<div class="slide-btn-box item item-three"><img src="images/DownArrow.png" class="slide-btn slide-2-btn"/></div>
				<div class="slide-btn-box item item-five"><img src="images/DownArrow.png" class="slide-btn slide-3-btn"/></div>
			</div>
		</div>

		<?php $width = "18.75"; ?>
		<?php $back = "practice-2.php"; ?>
		<?php $next = "practice-3.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".slide-1 .item").each(function() {
						console.log("inside item each");
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".footer").hide();
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