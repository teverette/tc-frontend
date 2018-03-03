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
	<body class="overview">
			<?php $width = "0"; ?>
		<img src="images/PracticeIcon_Spec.png" style="width:75px; margin-top: 84px;"/>
		<h1 class="title" style="margin-top:10px">Up next: Practice</h1>

		<nav  style="margin:12px auto; width:600px" >
		    <div class="secondary progress" style="width: 632px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
		      <div class="progress-meter" style="width:0"></div>
		    </div>
		  </nav>
		<p style="margin-top:120px"><a class="button large secondary neutral" href="1-cloze-dropdown.php" style=" font-family:'Roboto', sans-serif;font-size:20px;color:#4A4A4A;background-color:#FFF;width:166px;height:49px; padding-top: 13px;">Start</a></p>
		<script>
			// reset scoring situation
			var storage = window.sessionStorage;
			storage.clear();
	    	storage["quiz_total"]=0;

	    	$(".progress-meter").animate({
	    	    width: "100%"
		  	  }, 750, function() {
		  	    // Animation complete.
		  	  });
		</script>
	</body>
</html>