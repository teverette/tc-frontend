<!DOCTYPE html>
<html>
	<head>
	  <title>Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>.overview-button {font-family:'Roboto', sans-serif;
	  font-size:20px;color:#4A4A4A;background-color:#FFF;width:166px;height:49px; padding-top: 13px; line-height:24px; font-weight:500}</style>
	</head>
	<body class="overview">
		<h1 class="title-only">Organization in Opinion Pieces</h1>
		<p><a class="button secondary neutral overview-button" href="overview.php">Start Lesson</a></p>
		<script>
			// reset scoring situation
			var storage = window.sessionStorage;
			storage.clear();
	    	storage["quiz_total"]=0;
		</script>
	</body>
</html>