<!DOCTYPE html>
<html>
	<head>
	  <title>Lesson Overview</title>
	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
.what-is-example {color: #4A4A4A;	font-family: Roboto;	font-size: 16px;	font-style: italic;	line-height: 20px;}
.reason-for-example {color: #4A4A4A; font-family: Roboto; font-size: 14px; font-weight: 300; line-height: 20px; text-align: center;}
	  	</style>
	</head>
	<body class="practice learn">
		<div class="content">
			<div class="content-header content-header-learn">Learn</div>
			<div class="grid-x grid-padding-x slide-1">
				<h2 class="title-learn ">What is verbal irony?</h2>
				<p class="irony-description">Verbal irony occurs when words express something different from<br/>
				 their normal meanings. Verbal irony can be used to add humor or<br/> interest.
				 </p>
				 <img src="images/scroll-down.jpg" class="slide-1-btn" style="text-align:center; height: 64px; margin:0 auto;" />
			</div>
			
			
			<div class="grid-x grid-padding-x slide-2 display-none">
				<h2 class="title-learn" style="margin:24px auto 0px">What is verbal irony?</h2>
				<div style="width:300px;display:inline-block; top: -50px; position: relative;">
					<img src="images/CSK-L7-verbal-irony.gif" style="width:300px" class="first-item"/>
				</div>
				<div style="width:320px;display:inline-block;margin-left:25px; padding-top:30px">
					<p class="what-is-example first-item" >Scott arrived downtown for his job interview almost 15 minutes late because his bus never arrived.
					 While running from his apartment to the office, he dropped the folder that contained his application 
					 into a deep puddle. “Well, this is going well,” he muttered.</p>
				</div>
				<div class="reason-for-example" style="padding-left:75px;margin-top:10px;">Scott’s comment, “Well, this is going well,” shows verbal irony because Scott<br/> says things are going well, but he means that things are not going well at all.</div>
			</div>
		</div>

		<?php $back = "why-lesson.php"; ?>
		<?php $next = "practice-transition.php"; ?>
		<?php $btnClass = "check"; ?>
		<?php include '_footer_non_progress.php'?>
		
		 <script>
		      $(document).foundation();
		      $(document).ready(function() {
					$(".lesson-desc").fadeIn(500);
					$(".footer").hide();
					$(".slide-1-btn").click(function () {
						$(".slide-1").hide("slide", { direction: "up" }, 900, function(){
							$(".slide-2").fadeIn(300);
							$(".footer").fadeIn(300);
						});
						// 
						// $(".slide-2").toggle("slide", { direction: "up" }, 920);
					})
					// $(".slide-2").show("slide", { direction: "up" }, 400);
		      });
		      
	    </script>
	</body>
</html>
