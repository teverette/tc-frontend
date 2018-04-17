<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
		.item, .slide-2 {display:none}
		.what-is-example {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-style: italic;	line-height: 20px;}
		.reason-for-example {color: #4A4A4A;	font-family: Roboto;	font-size: 14px;	font-weight: 300;	line-height: 20px;	text-align: center;}
		
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item">What is dramatic irony?</h2>
				<p class="irony-description item">Dramatic irony occurs when the reader knows information that a<br/>
				 character does not. It can be used to build suspense or add interest.<br/>
				 Dramatic irony encourages readers to continue reading to learn what the<br/>
				  characters will do and whether they will ever learn the truth. 
				 </p>
				 <img src="images/DownArrow.png" class="slide-1-btn item" style="text-align:center; height: 64px; margin:0 auto;cursor:pointer" />
			</div>
			<div class="grid-x grid-padding-x slide-2">
				<div style="width:300px;display:inline-block">
					<img src="images/CSK-L7-situational-irony.gif" style="width:300px" class="first-item item item-one"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:25px; padding-top:50px">
					<p class="what-is-example first-item item item-two">Marco slept peacefully in his bed, unaware of the guests who gathered 
					downstairs for his surprise birthday party. </p>
				</div>
				<div class="reason-for-example item item-four" style="padding-left:75px;margin-top:60px;">Because the readers know about the birthday party 
				and Marco does not, dramatic irony is created. The irony adds excitement and tension to the scene.</div>
				
				<div class="item item-three" style="width:100%;text-align:center"><img src="images/DownArrow.png" class="slide-2-btn" style="height: 64px; margin:0 auto;cursor:pointer" /></div>
				<div class="item item-five" style="width:100%;text-align:center"><img src="images/DownArrow.png" class="slide-3-btn" style="height: 64px; margin:0 auto;cursor:pointer"/></div>
			</div>
			
		</div>

		<?php $width = "18.75"; ?>
		<?php $back = "practice-2.php"; ?>
		<?php $next = "learn-page-3b.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		 var animationDuration=300;
		 	var timeDelay = 0;
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