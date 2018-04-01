<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>

	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x">
				<h2 class="title-learn ">What is dramatic irony?</h2>
				<p class="irony-description">Dramatic irony occurs when the reader knows information that a<br/>
				 character does not. It can be used to build suspense or add interest.<br/>
				 Dramatic irony encourages readers to continue reading to learn what the<br/>
				  characters will do and whether they will ever learn the truth. 
				 </p>
			</div>
		</div>

		<?php $back = "practice-2.php"; ?>
		<?php $next = "learn-page-3b.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
		      });
	    </script>
	</body>
</html>