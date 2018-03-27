<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  .title {background-color:#FBFBFB; color:#4A90E2; height:82px;padding-top: 22px;padding-left:114px;margin-bottom:0;}
	  .overview-content {min-height: 458px; height: inherit;}
	  .part-5 {color: #58595B;	font-family: Roboto;	font-size: 16px;	line-height: 20px;}
	  .learn-page-title {font-family: 'Roboto Slab';font-size: 16px; color: #6D6E71; line-height: 18px;}
	  .random-copy {font-family: 'Roboto';font-size: 18px; color: #424142; line-height: 24px;}
	  	</style>
	</head>
	<body class="progress">
		<div class="content">
			<div class="grid-x grid-padding-x" >
				<h2 class="medium-4 medium-offset-4 text-center learn-page-title">What is dramatic irony?</h2>
				<p>Dramatic irony occurs when the reader knows information that a character does not. 
				It can be used to build suspense or add interest. Dramatic irony encourages readers to continue reading to learn what the characters will do and whether they will ever learn the truth. </p>
				
				<p style="padding-left:50px">Marco slept peacefully in his bed, unaware of the guests who gathered downstairs for his surprise birthday party.</p>
				
				<p>Because the readers know about the birthday party and Marco does not, dramatic irony is created. The irony adds excitement and tension to the scene.</p>
				
			</div>
			</div>
		</div>
		<?php $width = "22.2"; ?>
		<?php $back = "practice-2.php"; ?>
		<?php $next = "practice-3.php"; ?>
		<?php include '_footer_progress.php'?>
		<div class="grid-x grid-padding-x footer">
			<a class="button back button-left-side" href="2-choice-matrix.php#checked"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class=" button learn-page-forward-button button-right-side" href="learn-page-2b.php"><i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
		      });
	    </script>
	</body>
</html>
