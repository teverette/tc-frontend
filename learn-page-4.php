<!DOCTYPE html>
<html>
	<head>
	  <title>What is situational irony?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  .title {background-color:#FBFBFB; color:#4A90E2; height:82px;padding-top: 22px;padding-left:114px;margin-bottom:0;}
	  .overview-content {min-height: 458px; height: inherit;}
	  .part-5 {color: #58595B;	font-family: Roboto;	font-size: 16px;	line-height: 20px;}
	  .learn-page-title {font-family: 'Roboto Slab';font-size: 22px; color: #6D6E71; line-height: 29px;}
	  .random-copy {font-family: 'Roboto';font-size: 18px; color: #424142; line-height: 24px;}
	  
	  
	  	.item, .slide-2 {display:none}
		.what-is-example {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-style: italic;	line-height: 20px;}
		.reason-for-example {color: #4A4A4A;	font-family: Roboto;	font-size: 14px;	font-weight: 300;	line-height: 20px;	text-align: center;}
		.footer {display:none}
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item">What is situational irony?</h2>
				<p class="irony-description item">Situational irony occurs when the actual outcome of a situation is different from the expected outcome. It can be used to add humor and interest or to build suspense.
				 </p>
				 <img src="images/DownArrow.png" class="slide-1-btn item" style="text-align:center; height: 64px; margin:0 auto;cursor:pointer" />
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<div style="width:300px;display:inline-block;padding-left:50px">
					<img src="images/CSK-L7-twist.gif" style="width:230px" class="first-item item item-one"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:25px; padding-top:80px">
					<p class="what-is-example first-item item item-two">Situational irony is often described as “a twist” in the story. </p>
				</div>
				<div class="reason-for-example item item-four" style="padding-left:75px;margin-top:0px;">For example, if an Olympic runner loses a race to a middle school student, 
				situational irony is created; readers expect the Olympic runner to win, but instead, the opposite occurs.</div>
				
				<div class="item item-three" style="width:100%;text-align:center"><img src="images/DownArrow.png" class="slide-2-btn" style="height: 64px; margin:0 auto;cursor:pointer" /></div>
				<div class="item item-five" style="width:100%;text-align:center"><img src="images/DownArrow.png" class="slide-3-btn" style="height: 64px; margin:0 auto;cursor:pointer"/></div>
			</div>
		</div>
		<?php $width = "43.75"; ?>
		<?php $back = "practice-4.php"; ?>
		<?php $next = "practice-5.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		 	var animationDuration=500;
		 	var timeDelay = 0;
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
					$(".item-three").fadeOut(100);
					showElement($(".slide-2 .item-four"));
					setTimeout(showElement.bind(null,$(".footer")), timeDelay);
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
