<!DOCTYPE html>
<html>
	<head>
	  <title>Why Lesson?</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title {background-color:#FBFBFB; color:#4A90E2; height:58px;padding-top: 8px;padding-left:114px;}
	  	.overview-content {min-height: 369px; height: inherit;}
	  </style>
	</head>
	<body class="progress">
		<?php $width = "21"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="title medium-11">Why this lesson is important</h2>
		<div class="overview-content">
			<div class="grid-x grid-padding-x" style="margin-top:111px;margin-left:215px">
				
				<div class="medium-5 lesson-desc" >
					<img src="images/important-illox.png" style="width:244px"></span>
				</div>
				<div class="medium-6 lesson-desc" style="font-family:'Roboto', serif;font-size:20px; font-color#4a4a4a;margin-left:-40px">
				<span style="display:inline-block; width:349px">
				Opinion pieces are written to share a point of view. When an opinion piece is well organized, 
				it is more effective in helping others understand and perhaps even agree with the opinion.</span>
				<hr style="width:183px; border:1px solid #4A90E2; margin: 31px 0;"/></div>
			</div>
		</div>
		<div class="grid-x footer">
			<hr/>
			<div class="medium-12" style="margin-top:9px;">
				<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
				<a class="check-verified button success large float-right" href="lp.php">Got it</a>
			</div>
		</div>
		<script>
		      $(document).foundation();
	    </script>
	</body>
</html>
