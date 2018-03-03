<!DOCTYPE html>
<html>
	<head>
	  <title>Summary</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.overview .button {width:151px; height:69px}
	  	.neutral {padding-left:.2rem; padding-right:.2rem;font-family: 'Roboto', san-serif; font-size:18px; line-height:24px;}
	  </style>
	</head>
	<body class="overview" style="background-color:#4A90E2">
	<div class="align-center">
		<img src="images/cat_img.png" style="width: 456px; margin-top: 50px; height: 304px;"/>
		<h3 style="font-family:'Roboto', sans-serif; font-size: 18px; line-height:21px; margin-top:45px">You earned <span class="points">&nbsp;</span> out of <span>5</span> possible points.</h3>
		
		<div class="score-image-box" style="height:136px;width:232px;margin:10px auto">
			
		</div>
		
		<!--
		<h1 class="title" style="color:#FFF; margin-top:36px">You completed your first skill lesson</h1>
		<div class="medium-9 grid-x grid-margin-x align-center">
			<a href="index.php" class="button large secondary neutral medium-3 cell" style="padding-top:13px;position:relative;"><i class="fas fa-lg fa-check-circle" style="position:absolute; left:65px; top:-5px;color:#00C216"></i>Organization in Opinion Pieces</a>
			<a class="button large secondary neutral medium-3 cell" style="padding-top:22px">Audience</a>
			<a class="button large secondary neutral medium-3 cell" style="padding-top:22px">Claims</a>
			<a class="button large secondary neutral medium-3 cell" style="padding-top:22px">Summary</a>
		</div>
		 -->
	<script>
	$(document).ready(function() {
		var storage = window.sessionStorage;
		var points = storage["quiz_total"];
		for(z=0; z<=points; z++) {
			console.log("point counter: " + z);
			var t = z * 1000;
			// setTimeout(function(){ $("span.points").html(z); }, );
			
		}
		setTimeout(function(){$("span.points").text(points);}, 750);

		$(".score-image-box").html("<img src='images/quiz-earned-point-" + points + ".gif'/>");
	});
	</script>
	</body>
</html>