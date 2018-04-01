<!DOCTYPE html>
<html>
	<head>
	  <title>Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>.overview-button {font-family:'Roboto', sans-serif;
	  font-size:20px;color:#4A4A4A;background-color:#FFF;width:166px;height:49px; padding-top: 13px; line-height:24px; font-weight:500}
	  .organizing-ideas-wit {
	color: #FFFFFF;
	font-family: "Roboto Slab";
	font-size: 48px;
	font-weight: 300;
	line-height: 63px;
	height:189px;
	text-align: center;
	margin: 201px auto 22px;
}
	  </style>
	  
	</head>
	<body class="overview ">
		<h1 class="title-only organizing-ideas-wit">Organizing Ideas with <br/>Authors' Crafts</h1>
		<p><a class="button secondary neutral overview-button" href="lesson-helps-learners.php">Click to Begin</a></p>
		<script>
			// reset scoring situation
			var storage = window.sessionStorage;
			storage.clear();
	    	storage["quiz_total"]=0;
		</script>
	</body>
</html>