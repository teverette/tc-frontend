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
	<body class="overview" style="background-color:transparent">

		<a href="quiz-1.php"><img src="images/Quiz3.gif" style="width:1024px"/></a>
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