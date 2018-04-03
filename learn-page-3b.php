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
				<h2 class="title-learn display-none">What is dramatic irony?</h2>
				<div style="width:300px;display:inline-block">
					<img src="images/CSK-L7-situational-irony.gif" style="width:300px" class="first-item display-none"/>
				</div>
				<div style="width:300px;display:inline-block;margin-left:25px; padding-top:50px">
					<p class="what-is-example first-item" style="display:none">Marco slept peacefully in his bed, unaware of the guests who gathered 
					downstairs for his surprise birthday party. </p>
				</div>
				<div class="reason-for-example" style="padding-left:75px;margin-top:60px; display:none;">Because the readers know about the birthday party 
				and Marco does not, dramatic irony is created. The irony adds excitement and tension to the scene.</div>
			</div>
		</div>

		<?php $width = "25.0"; ?>
		<?php $back = "learn-page-3.php"; ?>
		<?php $next = "practice-3.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
		    	  $(".title-learn").toggle('fade',500);
		    	  setTimeout(function(){$(".first-item").toggle(500)},650);
				  setTimeout(function(){$(".reason-for-example").toggle('fade',500)},1300);

				  
			      	
		      });
	    </script>
	</body>
</html>