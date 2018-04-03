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
		<h1 class="title-summary">You earned the drama dog!</h1>
		<img src="images/Summary.jpg" style="margin-top: 50px; height: 194px;"/>
		<h3 style="font-family:'Roboto', sans-serif; color: #FCFCFC; font-family: "Roboto Slab"; font-size: 30px; font-weight: 300;	
			line-height: 30px;	text-align: center; margin-bottom:30px;">That's <span class="points">&nbsp;</span> points out of <span>7</span>.</h3>
		
		<div style="width:600px; margin:80px auto 0;position:relative;">
			<div style="position:absolute; left:0;top:-30px">Novice</div>
			<div style="position:absolute; right:0px;top:-30px">Expert</div>
			<div class="score-label" style="position:absolute; left:0; top:10px">You</div>
			<div class="secondary progress" style="width: 600px;height: 3px;" role="progressbar" tabindex="0" aria-valuenow="89.9" aria-valuemin="0" aria-valuetext="89.9 percent" aria-valuemax="100">
		      <div class="score-hash" style="border-radius:100%; background-color:#fff; height:12px;width:12px;position:relative;top:-5px; left:0"></div>
		    </div>
	    </div>
		
	<script>
	$(document).ready(function() {
		var storage = window.sessionStorage;
		var points = storage["quiz_total"];
		if(points>11) {
			points = 11;
		}
		for(z=0; z<=points; z++) {
			console.log("point counter: " + z);
			var t = z * 1000;
			// setTimeout(function(){ $("span.points").html(z); }, );
			
		}
		setTimeout(function(){$("span.points").text(points);}, 350);
		var leftPosition = 14.285 * points;
		$(".score-hash").animate({
		    left: leftPosition + "%"
		  }, 1200, function() {
			  var p = $( ".score-hash" );
				var position = p.position();
				$(".score-label").css("left",position.left);
		  });

	});
	</script>
	</body>
</html>