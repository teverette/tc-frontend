
<!DOCTYPE html>
<html>
	<head>
	  <title>Transition</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.title-only {padding-top: 10%;line-height: 50px; font-size: 44px;}
	  	.practice-section {
	height: 63px;
	color: #FFFFFF;
	font-family: "Roboto Slab";
	font-size: 48px;
	font-weight: 300;
	line-height: 63px;
	text-align: center; position:absolute; left:360px; top:200px; margin-bottom:37px;
}
.lorem-ipsum-dolor-si {
	height: 56px;
	width: 469px;
	color: #FFFFFF;
	font-family: Roboto;
	font-size: 18px;
	font-weight: 300;
	line-height: 28px;
	text-align: center;
	position:absolute; top:290px; left:278px;
}
.practice-button {
	height: 40px;
	width: 134px;
	border: 1px solid #307FE2;
	border-radius: 4px;
	background-color: #FFFFFF;position:absolute; left:445px; top:390px; padding-top:7px;
}
	  </style>
	</head>
	<body class="overview" style="background-color:#307FE2">
		<img src="images/quiz-icon-v2.jpg" style="height:100px; top:96px; left: 355px; position:absolute;"/>
		<h2 class="practice-section">Quiz Section</h2>
		<p class="lorem-ipsum-dolor-si">Now you can earn points</p>
		<a href="quiz-1.php" class="practice-button">Click to Begin</a>
		
		<script>
			var storage = window.sessionStorage;
	    	storage["quiz_total"]=0;
	    	storage.removeItem('quiz_1');
	    	storage.removeItem('quiz_2');
	    	storage.removeItem('quiz_3');
	    	storage.removeItem('quiz_4');
	    	storage.removeItem('quiz_5');
		</script>
	</body>
</html>