<!DOCTYPE html>
<html>
	<head>
		<title>testing</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
<body class="practice quiz quiz-question" data-quiz-question="1">
<div class="content"> 
<div class="content-header content-header-quiz">Quiz</div>
<span class="point-quiz-board"> - points</span>
	<div class="grid-x grid-padding-x">
	  <h2 class="title medium-12">Which sentence reveals the use of <span data-tooltip has-tip aria-haspopup="true" class="has-tip" style="color:#4A90E2" data-disable-hover="false" tabindex="1" title="When a reader knows information that a character in a story does not.">dramatic irony?</span></h2>
	  <div class="medium-12 grid-x lesson-copy">
	  <p><mark class="keyword quiz_2_1 answer">Teresa hid her best jewelry in a brown bag in the kitchen drawer before she went on vacation.</mark> <mark class="keyword quiz_2_2 answer">Her friend came to her house every day to walk the dog.</mark>
	  <mark class="keyword quiz_2_3 answer">One day, her friend decided to clean out Teresa’s kitchen.</mark> <mark class="keyword quiz_2_4 answer">She got all the garbage, empty packaging, and unwanted mail and threw it away.</mark>
	  <mark class="keyword quiz_2_5 answer">Without looking inside, she threw away the plain brown bag she found at the back of the drawer.</mark>
	  </p>
	 <div class="rationale-sidebar"></div> 
	</div>


</div>

		</div>
		<?php $width = "40"; ?>
		<?php $back = "quiz-1.php"; ?>
		<?php include '_footer_progress.php'?>
		
		<div class="hint-callout callout"></div>
		<div class="rationale-callout callout"></div>
<div class="full reveal answer-rationale-reveal" id="exampleModal8" data-reveal></div>
	
 <script>
      $(document).foundation();
		var questions = ["quiz_2_1","quiz_2_2","quiz_2_3","quiz_2_4","quiz_2_5"];
    	var question2 = {quiz_2_1:false, quiz_2_2:false,quiz_2_3:false,quiz_2_4:false,quiz_2_5:true};
    	var rationalText = "Dramatic irony happens when the reader knows information that a character does not know.<br/><br/>Teresa’s friend does not know what is in the bag, but the reader does.";
    	var rationaleArray = {
      	      	"rationale_quiz_2_1": rationalText,
      	      	"rationale_quiz_2_2": rationalText,
      	      	"rationale_quiz_2_3": rationalText,
      	      	"rationale_quiz_2_4": rationalText,
      	    	"rationale_quiz_2_5": rationalText
      	}
    	var nextPage = "quiz-3.php";
    	var points=0;
    	var numberCorrect=5;
    	var responseKey = {};
    
    	function loopThruQuestions() {
    		var questionLength = questions.length;
			for(i=0; i<questionLength; i++){
				var name = questions[i];
				var obj = $('.'+name);
				var isSelected = $('.'+name).hasClass("selected");
				updateQuestionStatus(obj, name, isSelected);
			}
			highlightCorrectQuiz();
			increaseScoreBy(points);
			var string = JSON.stringify(responseKey)
			storage["quiz_2"] = string;
    	}

    	function updateQuestionStatus(o, name, selectedAnswer) {
	      	var correctAnswer = question2[name];
	      	console.log("correctAnswer: " + correctAnswer);
	      	responseKey[name] = selectedAnswer;
	      	if(!correctAnswer && !selectedAnswer) {
				$(o).addClass('clear');
				points++;
			} else if(correctAnswer==selectedAnswer) {
				$(o).addClass('correct');
				$(o).append('<i class="fas fa-check-circle rationale-icon" aria-hidden="true" style="position:relative;right: -6px;color: #77A977;"></i>');
				points++;
			}  else if(!correctAnswer && selectedAnswer) {
				$(o).addClass('incorrect');
				$(o).append('<i class="fas fa-times" aria-hidden="true" style="position:relative;right: -6px;color: #FED700;"></i>');
			} 
    	}
      
      $(document).on("click",".check", function() {
    	  $(".forward-button").addClass("check-disabled").removeClass("check");
    	  loopThruQuestions(this);
    	  var status;
    	  if(points==numberCorrect) {
			status = "correct";
    	  } else {
			status ="incorrect";
          }
    	  
    	  showRationale(status=="correct");
      });
	  function showRationale(status) {
		  var obj;
		  if(status) {
		  	var title = "<h4 class='that-s-it'>That's it!</h4>";
		  	obj=$(".rationale-sidebar");
		  	obj.addClass("correct-status");
		  } else {
			  var title = "<h4 class='nearly-there'>Not Quite!</h4>";
			  obj = $(".rationale-sidebar");
			  obj.addClass("hint-status");
		  }
		  obj.html(title + rationaleArray["rationale_quiz_2_1"]).show();
		  updateNextStepBtn($(".check-disabled"));
      	  $("input").attr('disabled','disabled');
	  }

      
      $(document).on("click",".check-verified", function() {
    	  console.log("is verified");
		  window.location.href=nextPage;
      });
      $(document).on("click","mark.keyword", function() {
    	 $(this).addClass("selected"); 
    	 $(".check-disabled").addClass("check").removeClass("check-disabled");  
      });
      $(document).on("click","mark.selected", function() {
     	 $(this).removeClass("selected"); 
     	 if($("mark.selected").length==0) {
     		$(".check").addClass("check-disabled").removeClass("check");  
     	 } 
       });
      var storage = window.sessionStorage;
      $(document).ready(function() {
			highlightCurrentQuiz();
			if(hasAlreadyAnswered("quiz_2")) {
				$("mark").removeClass("answer");
				$(".check-disabled").addClass("check-verified").text("Next");
	    		  updateNextStepBtn($(".check-disabled"));
	    		  $("input").attr('disabled','disabled');
				var responseKeyString = storage["quiz_2"];
	    		console.log(responseKeyString);
	    			this.responseKey = JSON.parse(responseKeyString);
	    			
	    			for (x in this.responseKey) {
	    				console.log(this.responseKey[x]);
	    				var $currentSelect = $('select[name='+x+']');
	    				$currentSelect.val(this.responseKey[x]);
	    				var curVal = this.responseKey[x];
	    				if(curVal==true){
							$("."+x).addClass("selected");
							updateQuestionStatus($("."+x), x, curVal);
	    				}

	    			}
	    		
	    		  
	    	  }
  			getScore();
			
			var points = storage["quiz_total"];
			var points_label = points==1 ? "point" : "points";
			$(".point-quiz-board").html(points + " " + points_label);
		});
      window.onload = function() {
    	  
		}
  </script>
</body>
</html>