<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
.what-is-example {color: #4A4A4A; font-family: Roboto; font-size: 16px;	font-style: italic;	line-height: 20px;}
.reason-for-example {color: #4A4A4A; font-family: Roboto; font-size: 14px; font-weight: 300; line-height: 20px;	text-align: center;}
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content" style="padding-bottom:125px; overflow:hidden;	border: 8px solid #ECECEC;">
			<div class="grid-x grid-padding-x">
				<h2 class="title-learn">This lesson taught learners:</h2>
				<div style="width:300px;display:inline-block">
					<img src="images/lesson-taught.jpg" style="width:230px;margin-left:60px"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:0px; padding-top:80px">
					<p class="what-is-example">the meaning of verbal, dramatic and situational irony and suspense.</p>
					<p class="what-is-example">how suspense and different types of irony are used in a narrative</p>
				</div>
			</div>
			<?php $back = "quiz-5.php"; ?>
		<?php $next = "summary.php"; ?>
		<?php $btnClass = "check next"; ?>
		<?php $width = "100"; ?>
		<?php include '_footer_learn_progress.php'?>
		</div>

		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
		      });
		      $(".slide-btn-main").click(function () {
			    	window.location='summary.php';
			    });
	    </script>
	</body>
</html>