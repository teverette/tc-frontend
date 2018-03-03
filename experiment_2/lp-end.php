<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson End</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "100"; ?>
		<?php include '_progress.php'; ?>
		<div class="content">
			<div class="grid-x grid-padding-x">
				<h2 class="title medium-12">This lesson taught learners</h2>
				<ul class="medium-12 lesson-items">
				  <li>the meaning of verbal, dramatic and situational irony and suspense.</li>
				  <li>how suspense and different types of irony are used in a narrative</li>
				</ul>
			</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
				<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
				<a class="button success large float-right" href="summary.php">Done</a>
			</div>
		</div>
		<script>
		      $(document).foundation();
		      $(document).ready(function() {
				highlightCurrentQuiz();
		  		highlightAllCorrectQuiz();
			  });
		</script>
	</body>
</html>
