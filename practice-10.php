<!DOCTYPE html>
<html>
<head>
  <title>Which choices create suspense?</title>
  	  <?php include '_stylesheet.html'; ?>
	  <?php include '_js.html'; ?>
	  <style>
	  	.content-borderless {border-color:#43B02A}
	  	.content-borderless .content {border-width:0}
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
	text-align: center;
}
.white-border {border-color:#FFF}
	  </style>
</head>
<body class="practice fixed-body">
<div class="content-borderless">
		<div class="content-borderless-window">
<div class="content" style="padding: 73px 276px 0 114px;"> 
	<div class="content-header content-header-practice">Learn & Practice</div>
	
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which choices create suspense?</h2>
	 
	  <div class="medium-12 grid-x lesson-copy">
	    
	    <p>With a mile left to go in a big race, the front runner 
	    	“<a class="button dropdown-question" data-question="q10_1" data-drawer-id="drawer-one" onclick="showDrawer(this);">Select an option</a>"  
	    	She <a class="button dropdown-question" data-question="q10_2" data-drawer-id="drawer-two" onclick="showDrawer(this);">Select an option</a>
	    	 She asks herself, <a class="button dropdown-question" data-question="q10_3" data-drawer-id="drawer-three" onclick="showDrawer(this);">Select an option</a>
	    </p>
	  </div>
	  <input type="hidden" class="q10_1 dd-response" name="q10_1"></input>
	  <input type="hidden" class="q10_2 dd-response" name="q10_2"></input>
	  <input type="hidden" class="q10_3 dd-response" name="q10_3"></input>
	</div>
	<div class="rationale-sidebar"></div>
</div>


<div id="drawer-one" class="drop-down-drawer q10_1 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">twists her ankle and falls.</a>
	<a class="button secondary answer-option q10_2" data-value="2">feels great.</a>
	<a class="button secondary answer-option q10_3" data-value="3">makes a friend.</a>	
</div>
<div id="drawer-two" class="drop-down-drawer q10_2 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">watches other runners catching up.</a>
	<a class="button secondary answer-option q10_2" data-value="2">quits immediately.</a>
	<a class="button secondary answer-option q10_3" data-value="3">isn’t really hurt.</a>	
</div>
<div id="drawer-three" class="drop-down-drawer q10_3 text-center" style="height: 128px;">
	<a class="button secondary answer-option q10_1" data-value="1">Will I be able to finish the race?</a>
	<a class="button secondary answer-option q10_2" data-value="2">What made that hole?</a>
	<a class="button secondary answer-option q10_3" data-value="3">What’s for dinner tonight?</a>	
</div>
<div class="slide-8" style="width:100%;background-color:#307FE2;position:relative;height: 538px;z-index: 10;">
				<img src="images/quiz-icon-v2.jpg" style="height:100px; top:96px; left: 355px; position:absolute;"/>
		<h2 class="practice-section">Quiz Section</h2>
		<p class="lorem-ipsum-dolor-si">Now you can earn points</p>
		<a href="quiz-1.php" class="practice-button">Click to Begin</a>
			</div>
</div>

<?php $width = "98.0"; ?>
<?php $back = "practice-9.php"; ?>
<?php include '_footer_progress.php'?>
</div>
</div>
 <script>
      	$(document).foundation();
      	var answerKey = {q10_1:"1", q10_2:"1",q10_3:"1"};
      	var hintArray = {
      	      	"hint_q10_1":{
          	      	2:"This does not create excitement or fear.",
          	      	3:"This is a nice event, not something suspenseful."
              	 },
              	"hint_q10_2":{
          	      	2:"If the race is over, there is no suspense.",
          	      	3:"This is a nice event, not something suspenseful."
              	 },
              	"hint_q10_3":{
          	      	2:"Who made the hole will not affect the outcome of the race, so this does not build suspense.",
          	      	3:"This question doesn’t contribute to the suspense in the story."
              	 }
      	}
      	var rationaleArray = {
      	      	"rationale_q10_1":"When the runner twists her ankle, readers worry about what will happen, creating suspense.",
      	      	"rationale_q10_2":"Readers become more worried that the runner will not win the race.",
      	      	"rationale_q10_3":"The question that worries readers is the same that worries the runner."
      	}
		var nextPage = "quiz-transition.php";
    
        $(document).on("click",".check", function() {
        	ClozeDropdown.assess();
        });
      
      	$(document).on("click",".check-verified", function() {
		  // window.location.href=nextPage;
		  $(".footer").hide();
      		$(".content-borderless-window").animate({top:-554, borderWidth:0}, 500, 'swing', function() {
      			$(".content-borderless").addClass("white-border").animate({borderWidth:8}, 500, 'swing');
      		});
      	});
      
      	var storage = window.sessionStorage;
    	storage["quiz_total"]=0;
      	$(document).ready(function() {
			ClozeDropdown.initialize("practice_10",3,3);
			if(hasAlreadyAnswered("practice_10")) {
				ClozeDropdown.setPreviousResponse();
			}
			$(".num-questions-remaining").text("last question");
	  	});
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