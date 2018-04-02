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
				<h2 class="title-learn">What is situational irony?</h2>
				<div style="width:300px;display:inline-block">
					<img src="images/CSK-L7-twist.gif" style="width:230px"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:25px; padding-top:80px">
					<p class="what-is-example" style="display:none">Situational irony is often described as “a twist” in the story. </p>
				</div>
				<div class="reason-for-example" style="padding-left:75px;margin-top:0px;display:none">For example, if an Olympic runner loses a race to a middle school student, 
				situational irony is created; readers expect the Olympic runner to win, but instead, the opposite occurs.</div>
			</div>
		</div>

		<?php $back = "learn-page-4.php"; ?>
		<?php $next = "practice-5.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
		    	  $(".what-is-example").toggle('fade',500);
				  setTimeout(function(){$(".reason-for-example").toggle('fade',500)},650);
		      });
	    </script>
	</body>
</html>