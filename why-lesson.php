<!DOCTYPE html>
<html>
	<head>
	  <title>Why Lesson?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title {background-color:#FBFBFB; color:#4A90E2; height:58px;padding-top: 8px;padding-left:114px;margin-bottom:10px}
	  	.overview-content {min-height: 369px; height: inherit;}
	  	.part-1{	
	color: #43B02A;
	font-family: "Roboto Slab";
	font-size: 42px;
	font-weight: 300;
	line-height: 55px;
}
	.part-2 {
	color: #5AB943;
	font-family: Roboto;
	font-size: 18px;
	line-height: 21px;
}
.part-3{
	color: #3E3D3E;
	font-family: Roboto;
	font-size: 16px;
	line-height: 24px;
}

	  </style>
	</head>
	<body class="progress">
		
		<div class="content">
		<h2 class="title medium-11">Why this lesson is important</h2>
			<div class="grid-x grid-padding-x" style="margin-top:0px;margin-left:115px">
				
				<div class="medium-5 lesson-desc" >
					<img src="images/important-illox.png" style="width:244px"></span>
				</div>
				<div class="medium-6 lesson-desc" style="font-family:'Roboto', serif;font-size:20px; font-color#4a4a4a;margin-left:20px">
				<span style="display:inline-block; width:349px">
				A narrative is a story: it contains characters, story events, and settings. Writers use techniques like irony and suspense 
				to make their narratives more interesting and pleasurable for readers.</span>
				<hr style="width:183px; border:1px solid #4A90E2; margin: 31px 0;"/></div>
			</div>
		</div>
		<?php $width = "11.1"; ?>
		<?php $back = "lesson-helps-learners.php"; ?>
		<?php $next = "learn-page-2.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		<script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
					$(".lesson-copy").fadeIn(500);
		      });
	    </script>
	</body>
</html>
