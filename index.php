<!DOCTYPE html>
<html>
	<head>
	  <title>Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>.button.overview-button {color:#FFF; line-height:24px; font-weight:400;
	  font-family: "Roboto Slab";	font-size: 14px;	line-height: 21px;
	height: 40px;
	width: 134px;
	border: 1px solid #407CBE;
	border-radius: 4px;
	background-color: #307FE2;
}
.button.overview-button:hover {border: 1px solid #307FE2;	border-radius: 4px;	background-color: #FFFFFF; color:#307FE2}
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