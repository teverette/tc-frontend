<!DOCTYPE html>
<html>
	<head>
		<title>What is verbal irony?</title>
		<?php include '_stylesheet.html'; ?>
		<?php include '_js.html'; ?>
	</head>
	<body class="progress">
		<?php $width = "35.7"; ?>
		<?php include '_progress.php'; ?>
		<h2 class="lesson-label text-center medium-12"><img src="images/PracticeIcon_Spec.png" class="label-type-icon"/>Practice Question</h2>
		<div class="content"> 
		
		<div class="grid-x grid-padding-x">
		  
		  
		  <h2 class="title medium-12">What is verbal irony?</h2>
		  <p class="lesson-desc medium-12">Verbal irony is when words express something different from their normal meaning. Is verbal irony being used in the examples below?</p>
		  
		  <table class="medium-12 unstriped grid-matrix">
		  <thead>
		    <tr>
		      <th width="60%"></th>
		      <th width="20%" class="text-center">Verbal Irony</th>
		      <th width="20%" class="text-center">Not Verbal Irony</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>A cat drinking a bowl of milk smiles and says, &ldquo;I love milk!&rdquo;</td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="irony"/></td>
		      <td class="text-center"><input type="radio" class="q1_1" name="q1_1" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A teacher assigns a lot of homework and a student says, &ldquo;I can&rsquo;t imagine a better way to spend my weekend.&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_2" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_2" value="not-irony"/></td>
		    </tr>
		    <tr>
		      <td>A soccer player makes a goal and the coach says, &ldquo;Well done!&rdquo;</td>
		      <td class="text-center"><input type="radio" name="q1_3" value="irony"/></td>
		      <td class="text-center"><input type="radio" name="q1_3" value="not-irony"/></td>
		    </tr>
		  </tbody>
		</table>
		
		  <div class="medium-12 lesson-desc grid-x hide rationale">
		  	<h3>Why are these the answers?</h3>
		  	<p>Verbal irony is saying one thing but meaning another. It is used to keep the reader interested in the narrative.</p>
		  </div>
		</div>
		</div>
		<div class="grid-x grid-padding-x footer">
			<hr/>
			<div class="medium-12">
			<a class="button back large" onclick="history.back(-1);"><i class="fas fa-angle-left"></i> Back</a>
			<a id="choice-matrix-2" class="check-disabled button success large float-right">Check</a>
			</div>
		</div>
		<script>
			$(document).foundation();
				
		    	var questions = ["q1_1","q1_2","q1_3"];
		      	var question2 = {q1_1:"not-irony", q1_2:"irony",q1_3:"not-irony"};
		      	var response_key = {};
		      	var nextPage = "q2-cloze-dropdown.php";

		      	var numberCorrect = 3;
			    var points = 0;
			    var minReq = 3;
			    var answered = 0;
				// initialization stuff
			    var storage = window.sessionStorage;
		      	
		      	function loopThruQuestions() {
		      		var questionLength = questions.length;
					for(i=0; i<questionLength; i++){
						console.log("question: " + questions[i]);
						var name = questions[i];
						var val = $('input[name='+name+']:checked').val();
						console.log(val);
						updateQuestionStatus(this, name, val);
		    	  	}
					highlightCorrectQuiz();
					if(points==numberCorrect) {
				    	  incrementScore();
				      }
		      	}

		      	function updateQuestionStatus(o, name, selectedAnswer) {
			      	var correctAnswer = question2[name];
			        // write to storage/console
			        response_key[name] = selectedAnswer;
			        var string = JSON.stringify(response_key);
			        console.log(string);
		      		if(correctAnswer==selectedAnswer) {
						$(o).parent().addClass('correct');
						$('input[name='+name+']:checked').parent()
							.addClass('correct')
							.append('<i class="fas fa-check" style="color: #00AA00;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
						points++;
					} else {
						$(o).parent().addClass('incorrect');
						$('input[name='+name+']:checked').parent()
							.addClass('incorrect')
							.append('<i class="fas fa-times" style="color: #FED700;position:relative; right: -15px; top: 3px;" aria-hidden="true"></i>');
					}
		      	}
		      
		      $(document).on("click",".check", function() {
		    	  // todo add question/answer verification logic
		    	  loopThruQuestions();
		    	  showRationale();
		    	  updateNextStepBtn(this);
				  $("input").attr('disabled','disabled');
		      });
		      
		      $(document).on("click",".check-verified", function() {
				  window.location.href=nextPage;
		      });

			$("input:radio").click(function() {
				ChoiceMatrix.enableButton();
			});

			$(document).ready(function() {
      			highlightCurrentQuiz();
      			ChoiceMatrix.initialize(3,3);
      		});

			// window.onunload = function(){alert("unload")};
			$(window).bind("unload", function() {
				alert("unload");
			});

			window.onload = function() {
				var isLocked = lockTest();
				if(isLocked) {
					loopThruQuestions();
				}
			}
		  </script>
		 <!-- <?php echo "page loaded";?> -->
	</body>
</html>