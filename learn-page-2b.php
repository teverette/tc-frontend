<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
.what-is-example {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-style: italic;	line-height: 20px;}
.reason-for-example {color: #4A4A4A;	font-family: Roboto;	font-size: 14px;	font-weight: 300;	line-height: 20px;	text-align: center;}
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x">
				<h2 class="title-learn">What is verbal irony?</h2>
				<div style="width:250px;display:inline-block">
					<img src="images/CSK-L7-verbal-irony.gif" style="width:250px"/>
				</div>
				<div style="width:390px;display:inline-block;margin-left:25px; padding-top:30px">
					<p class="what-is-example">Scott arrived downtown for his job interview almost 15 minutes late because his bus never arrived.
					 While running from his apartment to the office, he dropped the folder that contained his application 
					 into a deep puddle. “Well, this is going well,” he muttered.</p>
				</div>
				<div class="reason-for-example" style="padding-left:75px;margin-top:80px">Scott’s comment, “Well, this is going well,” shows verbal irony because Scott<br/> says things are going well, but he means that things are not going well at all.</div>
			</div>
		</div>

		<?php $back = "learn-page-2.php"; ?>
		<?php $next = "practice-transition.php"; ?>
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