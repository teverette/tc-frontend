<!DOCTYPE html>
<html>
	<head>
	  <title>Summary</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.overview .button {width:151px; height:69px}
	  	.neutral {padding-left:.2rem; padding-right:.2rem;font-family: 'Roboto', san-serif; font-size:18px; line-height:24px;}
	  	.title-summary {color: #FFFFFF;	font-family: "Roboto Slab";	font-size: 46px; margin-top:50px;font-weight: 300;	line-height: 36px;	text-align: center;}
	  </style>
	</head>
	<body class="overview" style="background-color:#4A90E2">
	<div class="align-center">
		<h1 class="title-summary">You earned the opinion dog!</h1>
		<img src="images/Summary.jpg" style="margin-top: 50px; height: 194px;"/>
		<h3 style="font-family:'Roboto', sans-serif; color: #FCFCFC;	font-family: "Roboto Slab";	font-size: 30px;	font-weight: 300;	line-height: 30px;	text-align: center;">That's <span class="points">&nbsp;</span> points out of <span>14</span>.</h3>
		
		<div class="score-image-box" style="height:136px;width:232px;margin:10px auto">
			
		</div>
		
	<script>
	$(document).ready(function() {
		var storage = window.sessionStorage;
		var points = storage["quiz_total"];
		for(z=0; z<=points; z++) {
			console.log("point counter: " + z);
			var t = z * 1000;
			// setTimeout(function(){ $("span.points").html(z); }, );
			
		}
		setTimeout(function(){$("span.points").text(points);}, 350);

		// $(".score-image-box").html("<img src='images/quiz-earned-point-" + points + ".gif'/>");
	});
	</script>
	</body>
</html>