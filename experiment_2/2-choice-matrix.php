<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
		<style>
		.tooltip {border-radius: 4px; background-color: #4A90E2; box-shadow: 0 2px 8px 0 rgba(96,96,96,0.5); max-height:130px; max-width: 15rem;}
		.tooltip.top::before {border:none}
		.has-tip {border:none}
		</style>
	</head>
	<body class="practice">
		<?php $width = "37.5"; ?>
		<?php include '_progress.php'; ?>
		<div class="content"> 
		<div class="global-tip" style="position:fixed; left:470px; top:20px; height: 102px; width: 171px; border-radius: 4px; color:#FFF; font-size:16px; line-height:19px; font-family:'Roboto'; font-weight:300; padding:10px;
background-color: #4A90E2; box-shadow: 0 2px 8px 0 rgba(96,96,96,0.5);};">Click on the blue words to get a definition.
<span style="display:inline-block; float:right; margin-top: 20px; text-align: center; cursor:pointer; height: 24px; width: 34px; border: 2px solid #FFFFFF; border-radius: 2px;" onclick="$('.global-tip').hide()">OK</span></div>
		<div class="grid-x grid-padding-x">
		  <p class="lesson-desc medium-12">Choose which section of an opinion piece is shown in each sentence.</p>
		   
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="14%" class="text-center"><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="true" tabindex="1" 
		      	title="The introduction starts the opinion piece. It includes the opinion statement and helps readers understand the topic.">Introduction</span></th>
		      <th width="13%" class="text-center"><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="true" tabindex="1" 
		      	title="The body follows the introduction. It explains how the opinion statement is supported with reasons or evidence.">Body</span></th>
		      <th width="13%" class="text-center"><span data-tooltip aria-haspopup="true" style="color:#4A90E2" data-disable-hover="true" tabindex="1" 
		      	title="The conclusion is the ending section. It reviews the opinion statement and support. It also includes a call to action--what the writer wants the reader to do or believe.">Conclusion</span></th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>All forms of public transportation can make traveling easier, but trains are a better form of transportation than buses.</td>
		      <td class="text-center"><input type="radio" name="q2_1" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_1" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_1" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Trains are a better form of public transportation because they can travel at higher speeds than buses. Trains do not travel on roads  and avoid traffic jams.</td>
		      <td class="text-center"><input type="radio" name="q2_2" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_2" value="conclusion"/></td>
		    </tr>
		    <tr>
		      <td>Since trains are often faster and travel through less traffic, people should choose to ride a train over a bus if they have that option.</td>
		      <td class="text-center"><input type="radio" name="q2_3" value="introduction"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="body"/></td>
		      <td class="text-center"><input type="radio" name="q2_3" value="conclusion"/></td>
		    </tr>
		  </tbody>
		</table>
		
		</div>
		</div>
		
		<div class="grid-x grid-padding-x footer">
			<a class="button back large" href="1-cloze-dropdown.php" style="position:relative; left:33px;width:40px; height:40px;border-radius:100%;"><i class="fas fa-lg fa-angle-left" ></i></a>
			<a class="check-disabled button success large" style="position:relative; left:864px; width:85px; padding:7px 0;">Check <i class="fas fa-lg fa-angle-right" ></i></a>
		</div>
		<div class="hint">
			<p class="hint-label">Not quite!</p>
			<p class="hint-text primary">Specific examples about how trains are better than buses offers support for the opinion. Try again!</p>
			<p class="hint-text secondary">The writer reviews their main points and tells how people should behave in the conclusion. Try again!</p>
		</div>
		<div class="full reveal answer-rationale-reveal" id="answer-rationale-reveal" data-reveal style="background-color: #94D150; color: #FFF"></div>
		<script>
			$(document).foundation();
			
	    	var questions = ["q2_1","q2_2","q2_3"];
	      	var answerKey = {q2_1:"introduction", q2_2:"body",q2_3:"conclusion"};
	      	var response_key = {};
	      	var nextPage = "learn-page-2.php";
	      	var storage = window.sessionStorage;

			$(document).on("click",".check", function() {
				ChoiceMatrix.assess(false);
			});
	      
	      	$(document).on("click",".check-verified", function() {
			  window.location.href=nextPage;
	     	});

			$("input:radio").click(function() {
				if($('.hint').is(':visible')) {
					ChoiceMatrix.resetForm();
				}
				ChoiceMatrix.enableButton();
			});

			$(window).bind("unload", function() {
				alert("unload");
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize("question_2",3,3);
      		});
      		
			window.onload = function() {
				var isLocked = lockTest();
				if(isLocked) {
					ChoiceMatrix.setPreviousResponse();
//					ChoiceMatrix.getResponses();
				}
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>