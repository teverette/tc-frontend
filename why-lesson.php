<!DOCTYPE html>
<html>
	<head>
	  <title>Why Lesson?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title {background-color:#FBFBFB; color:#4A90E2; height:58px;padding-top: 8px;padding-left:114px;margin-bottom:10px}
	  	.overview-content {min-height: 369px; height: inherit;}
p{
	color: #4A4A4A;
	font-family: Roboto;
	font-size: 14px;
	font-weight: 300;
	line-height: 20px;
	text-align: center;
	width:469px;
	margin:0 auto;
}

	  </style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
				<div class="grid-x grid-padding-x">
					<h2 class="title-learn ">Why this lesson is important</h2>
					<div class="medium-12 lesson-desc text-center" >
						<img src="images/why-lesson.jpg" style="width:333px"></span>
					</div>
					<div class="medium-12">
						<p>
						A narrative is a story: it contains characters, story events, and settings. Writers use techniques like irony and suspense 
						to make their narratives more interesting and pleasurable for readers.</p>
		
					</div>
				</div>
			</div>
		</div>
		<?php $back = "lesson-helps-learners.php"; ?>
		<?php $next = "learn-page-2.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		<script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
					$(".lesson-copy").fadeIn(500);
		      });
	    </script>
	</body>
</html>
