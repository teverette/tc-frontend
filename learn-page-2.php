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
				<h2 class="title-learn ">What is verbal irony?</h2>
				<p class="irony-description">Verbal irony occurs when words express something different from<br/>
				 their normal meanings. Verbal irony can be used to add humor or<br/> interest.
				 </p>
			</div>
		</div>

		<?php $back = "why-lesson.php"; ?>
		<?php $next = "learn-page-2b.php"; ?>
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
