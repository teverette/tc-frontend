<!DOCTYPE html>
<html>
	<head>
	  <title>Transition</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title-only {padding-top: 10px;line-height: 50px; font-size: 44px;}
	  </style>
	</head>
	<body class="transition-page">
		<div class="overview-content">
			<h1 class="alternate-title"><span style="border-bottom:2.5px solid #4A90E2; padding-bottom:16px;display:inline-block">How this lesson works</span></h1>
			<div class="overview-content-body">
				<div class="practice-overview text-center" style="background-color:#5387CC;float:left;width:512px;height:390px">
					<h2 class="subtitle"><img src="images/BlueIcon1.png" class="overview-icon"/>Practice</h2>
					<img src="images/PracticeIcon_Spec.png" style="height:120px;"/>
					<p style="margin: 47px auto 0;width:234px;font-family: 'Roboto',serif; font-size: 18px; line-height: 24px;">Practice questions are how you learn and they don't count toward your score.</p>
				</div>
				<div class="quiz-overview" style="background-color:#4A90E2;float: right; width:512px; height:390px;">
					<h2 class="subtitle"><img src="images/BlueIcon2.png" class="overview-icon"/>Quiz</h2>
					<img src="images/QuizIcon_Spec.png" style="height:120px;"/>
					<p style="margin: 47px auto 0; width:234px; font-family: 'Roboto',serif; font-size: 18px; line-height: 24px;">Quiz questions count toward your score and are a chance to show your teacher what you learned.</p>
				</div>    
			</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<a class="button back large" onclick="history.back(-1);" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check button success large" href="lesson-helps-learners.php" style="position:relative; left:864px; width:85px; padding:7px 0;">Got it <i class="fas fa-lg fa-angle-right" ></i></a>
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