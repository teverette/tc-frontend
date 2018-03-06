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
			<?php $width = "72.2"; ?>
		<img src="images/QuizIcon_Spec.png" style="width:75px; margin-top: 84px;"/>
		<h1 class="title" style="margin-top:10px">Up next: Quiz</h1>
		<div class="motivation">
			<h3 class="lesson-desc" style="color:#FFF">First, you practiced...</h3>
			<nav  style="margin:12px auto; width:600px" >
		    <div class="secondary progress" style="width: 632px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
		      <div class="progress-meter" style="width:0"></div>
		    </div>
		  </nav>
			
		</div>
		<div class="ready-set-go" style="display:none">
			<h3 class="lesson-desc" style="color:#FFF">Now, it's your chance to earn points</h3>
			<img class="" src="images/quiz-animation.gif" />
		</div>
		<p style="margin-top:90px"><a class="button large secondary neutral" href="q1-choice-matrix.php" 
			style="display:none; font-family:'Roboto', sans-serif;font-size:20px;color:#4A4A4A;background-color:#FFF;width:166px;height:49px; padding-top: 13px;">Start Quiz</a></p>
		<script>
			// reset scoring situation
			var storage = window.sessionStorage;
			storage.clear();
	    	storage["quiz_total"]=0;
			
	    	$(".progress-meter").delay(750).animate({
	    	    width: "100%"
		  	  }, 750, function() {
		  	    $(".motivation").hide(400);
		  	    $(".ready-set-go").delay(400).show(300, function() {
		  	    	$(".button").show("fast");
			    });
		  	    
		  	  });
		</script>
	</body>
</html>