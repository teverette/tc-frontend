<!DOCTYPE html>
<html>
	<head>
	  <title>Transition</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title-only {padding-top: 10%;line-height: 50px; font-size: 44px;}
	  </style>
	</head>
	<body class="transition-page">
			<?php $width = "7.1"; ?>
		<?php include '_progress.php'; ?>
		<div class="overview-content">
			<h1 class="alternate-title"><span style="border-bottom:2.5px solid #4A90E2; padding-bottom:16px;display:inline-block">How this lesson works</span></h1>
			<div class="overview-content-body">
				<div class="practice-overview text-center" style="background-color:#5387CC;float:left;width:512px;height:448px">
					<h2 class="subtitle"><img src="images/BlueIcon1.png" class="overview-icon"/>Practice</h2>
					<img src="images/PracticeIcon_Spec.png" style="height:144px;"/>
					<p style="margin: 47px auto 0;width:234px;font-family: 'Roboto',serif; font-size: 18px; line-height: 24px;">Practice questions are how you learn and they don't count toward your score.</p>
				</div>
				<div class="quiz-overview" style="background-color:#4A90E2;float: right; width:512px; height:448px;">
					<h2 class="subtitle"><img src="images/BlueIcon2.png" class="overview-icon"/>Quiz</h2>
					<img src="images/QuizIcon_Spec.png" style="width:141px; height:144px;"/>
					<p style="margin: 47px auto 0; width:234px; font-family: 'Roboto',serif; font-size: 18px; line-height: 24px;">Quiz questions count toward your score and are a chance to show your teacher what you learned.</p>
				</div>    
			</div>
		</div>
		<div class="grid-x footer" >
			<hr/>
			<div class="medium-12" style="margin-top:9px;">
				<a class="button back large" onclick="history.back(-1);" style="float:left"><i class="fas fa-angle-left"></i> Back</a>
				<a href="lesson-helps-learners.php" class="check-verified button success large float-right">Got it</a>
			</div>
		</div>
		<script>
			// reset scoring situation
			var storage = window.sessionStorage;
			// storage.clear();
	    	// storage["quiz_total"]=0;
	    	var key ={q1_1:"not-irony", q1_2:"irony",q1_3:"not-irony"};
	    	var string = JSON.stringify(key)
	    	storage["question1"]=string;
	    	 
			var response_key = storage["question1"];

			console.log(response_key);
			key_json = JSON.parse(response_key);
			console.log(key_json["q1_1"]);
		</script>
	</body>
</html>