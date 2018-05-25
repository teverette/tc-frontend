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
.top-level {z-index:10000}

.slide-8 {display:none}
	  </style>
	</head>
	<body class="practice learn why-lesson">
		<div class="content-borderless">
		<div class="content-borderless-window">
		<div class="content" style="padding-bottom:125px; overflow:hidden">

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
			<?php $width = "0"; ?>
			<?php include '_footer_learn_progress.php'?>
			
		</div>
		<div class="content-2" style="width:100%;background-color:#43B02A;position:relative;height: 538px;z-index: 10;">
				<img src="images/practice-icon-v2.jpg" style="height:100px; top:96px; left: 378px; position:absolute;"/>
				<h2 class="practice-section">Practice Section</h2>
				<p class="lorem-ipsum-dolor-si">Go ahead and make mistakes!</p>
				<a href="learn-page-2.php" class="practice-button">Practice</a>
			</div>
			<?php $width = "7.0"; ?>
			<?php $back = "index.php"; ?>
			<?php $next = "practice-transition.php"; ?>
			<?php $btnClass = "check"; ?>
			<?php include '_footer_non_progress.php'?>
	</div>
		</div>
		<script>
			$(".footer").hide();
		    $(document).foundation();
		    $(document).ready(function(){
		    	$(".slide-1 .item").each(function() {
					setTimeout(showElement.bind(null,this), timeDelay);
					timeDelay+=animationDuration+50;
				});
		    });

		    /* window scroller & nav variables  */
			var maxWindowPos = -800;
			var question_item = 0;
			var back = "index.php";
	    </script>
	</body>
</html>