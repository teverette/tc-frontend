<!DOCTYPE html>
<html>
	<head>
	  <title>This lesson helps learners answer the following questions</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.overview-content {min-height: 458px; height: inherit;}
	  	.lesson-point-item {margin-top:17px;width:240px;text-align:center}
	  	.lesson-point-item.first-item {margin-left: 57px;}
	  	img.lesson-point {font-family:'Roboto Slab',sans-serif; width:230px; display:inline-block}
	  	.subheader {font-family:'Roboto Slab'; font-weight:bold; font-size: 24px; color: #43B02A}
	  	.subheader-content {color:#59585A;font-size:20px; line-height:26px}
	  </style>
	</head>
	<body class="practice">
		<div class="overview-content">
			<div class="grid-x grid-padding-x" >
				<h2 class="medium-12 medium-centered learn-page-title text-center">This lesson helps learners answer<br/> the following questions: </h2>
				<div class="lesson-point-item first-item" style="margin-left:141px;margin-top:57px; padding-left: 85px;">
					<div class="text-left">
						<img src="images/One.png" style="width:28px;margin-right: 10px; padding-bottom: 5px;"/>
						<p style="display:inline; " class="subheader">Organize</p>
					</div>	
					<p style="width:218px;text-align:left; padding-left: 42px;" class="subheader-content">How is an opinion piece organized?</p>
				</div>
				<div class="lesson-point-item " style="margin-left:0px; width: 292px;">
					<img src="images/1-a.png" style="width: 250px"/>
					<div class="second-item" style="display:none">
						<img src="images/Three.png" style="width:28px;margin-right: 10px; padding-bottom: 5px;"/>
						<p style="display:inline; " class="subheader">Support</p>
					</div>
					<p style="width:321px;text-align:left;display:none" class="subheader-content second-item">How does a writer organize reasons and evidence in an opinion piece?</p>			
				</div>
				<div class="lesson-point-item third-item" style="display:none; margin-top: 124px; left: -30px; position: relative;">
					<div class="text-left">
						<img src="images/Two.png" style="width:28px;margin-right: 10px; padding-bottom: 5px;"/>
						<p style="display:inline; " class="subheader">Purpose</p>
					</div>	
					<p style="width:278px;text-align:left; padding-left: 42px;" class="subheader-content">What is the purpose of an introduction, body, and conclusion in an opinion piece?</p>		
				</div>
				
			</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<a class="button back button-left-side" onclick="history.back(-1);"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class=" button learn-page-forward-button button-right-side" href="why-lesson.php"><i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		
		<script>
		    $(document).foundation();
			$(document).ready(function() {
				$(".first-item").fadeIn(500);
				setTimeout(function() {
					$(".third-item").fadeIn(500);
				},1000);
				setTimeout(function() {
					$(".second-item").fadeIn(500);
				},2000);
				
			});
	    </script>
	</body>
</html>
