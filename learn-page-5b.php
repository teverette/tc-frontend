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
				<h2 class="title-learn">What is suspense?</h2>
				<div style="width:300px;display:inline-block">
					<img src="images/CSK-L7-Suspense.gif" style="width:300px"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:25px; padding-top:40px">
					<p class="what-is-example" style="display:none">Marco heard movement downstairs. Pulling the covers over his head, he tried tried to
					 ignore the mysterious sounds, but they grew louder.</p>
				</div>
				<div class="reason-for-example" style="padding-left:75px;margin-top:30px;display:none">Because the source of the sounds is unknown,
				 the reader feels the fear and excitement in the suspenseful scene.</div>
			</div>
		</div>

		<?php $back = "learn-page-5.php"; ?>
		<?php $next = "practice-8.php"; ?>
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