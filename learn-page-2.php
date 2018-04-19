<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
.what-is-example {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-style: italic;	line-height: 20px;}
.reason-for-example {color: #4A4A4A; font-family: Roboto; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center;}
.item, item-two {display:none}
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn item one">What is verbal irony?</h2>
				<p class="irony-description item two">Verbal irony occurs when words express something different from<br/>
				 their normal meanings. Verbal irony can be used to add humor or<br/> interest.
				 </p>
				 <img src="images/DownArrow.png" class="slide-1-btn item three" style="text-align:center; height: 64px; margin:0 auto;cursor:pointer" />
			</div>
			
			
			<div class="grid-x grid-padding-x slide-2 display-none text-center" style="margin-top:60px">
				<div style="width:300px;display:inline-block; top: -50px; position: relative;">
					<img src="images/CSK-L7-verbal-irony.gif" style="width:300px" class="item item-one"/>
				</div>
				<div style="width:320px;display:inline-block;margin-left:25px; padding-top:30px; text-align:left">
					<p class="what-is-example first-item" ><span class="item item-two">Scott arrived downtown for his job interview almost 15 minutes late because his bus never arrived.</span>
					<span class="item item-four">While running from his apartment to the office, he dropped the folder that contained his application 
					 into a deep puddle. “Well, this is going well,” he muttered.</span></p>
				</div>
				<div class="reason-for-example slide-3" style="padding-left:75px;margin-top:10px;"><span class="item item-six">Scott’s comment, “Well, this is going well,” 
				shows verbal irony because Scott<br/> says things are going well, but he means that things are not going well at all.</span></div>
				
				<img src="images/DownArrow.png" class="slide-2-btn item item-three" style="text-align:center; height: 64px; margin:0 auto; cursor:pointer" />
				<img src="images/DownArrow.png" class="slide-3-btn item item-five" style="text-align:center; height: 64px; margin:0 auto; cursor:pointer" />
			</div>
		</div>

		<?php $back = "why-lesson.php"; ?>
		<?php $next = "practice-transition.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		 	var animationDuration=500;
		 	var timeDelay = 0;
		 	
		      $(document).foundation();
		      $(document).ready(function() {
					$(".slide-1 .item").each(function() {
						console.log("inside item each");
						setTimeout(showElement.bind(null,this), timeDelay);
						timeDelay+=animationDuration+50;
					});
					$(".footer").hide();
					$(".slide-1-btn").click(function () {
						$(".slide-1-btn").fadeOut(100);
						$(".slide-1").hide("slide", { direction: "up" }, 900, function(){
							$(".slide-2").show();
							setTimeout(showElementsOnSlide2(), 100);
							timeDelay=0;
						});
					});
					$(".slide-2-btn").click(function () {
						timeDelay=animationDuration+50;
						$(".slide-2-btn").fadeOut(100);
						showElement($(".slide-2 .item-four"));
						setTimeout(showElement.bind(null,$(".slide-2 .item-five")), timeDelay);
					});

					$(".slide-3-btn").click(function () {
						timeDelay=animationDuration+50;
						$(".slide-3-btn").fadeOut(100);
						showElement($(".item-six"));
						setTimeout(slideUpElement.bind(null,$(".footer")), timeDelay);
					});
		      });

		      function showElement(o) {
			      console.log("inside hideElement");
		    	  $(o).fadeIn(animationDuration);
			  }

			  function slideUpElement(o) {
				  $(o).effect('slide', { direction: 'up', mode: 'show' }, 500);
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
