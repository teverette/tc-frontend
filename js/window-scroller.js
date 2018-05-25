/* window scroller variables and functions */

var windowPos = 0;
var scrollDistance = 400;

$(document).ready(function() {					
    $(".slide-btn-main").click(function () {
    	moveWindowForward();
    });
});

function getWindowTopPosition() {
	var position = $(".content-window").position();
	return position.top;
}

function moveWindowForward() {
	var numOfSlides = -1*maxWindowPos/scrollDistance;
	
	var progressIncrement = 69.50/numOfSlides;
	console.log("jump width: " + progressIncrement);
	var currentProgressWidth = $(".progress-meter").width();
	var newProgressWidth = currentProgressWidth + progressIncrement;
	$(".progress-meter").width(newProgressWidth);
	var newTopPosition = windowPos-scrollDistance;
	if(newTopPosition > maxWindowPos) {
		$(".content-window").animate({top:newTopPosition}, animationDuration, 'swing', function() {
			windowPos = newTopPosition;
	    });
	} else {
		showPracticeSlide();
	}
}

function moveWindowReverse() {
	var newTopPosition = windowPos+scrollDistance;
	
	// go browser back, if user click back but is at the top of the page
	if(newTopPosition>=400) {
		console.log("at top of content");
		if(back!=null && back!="") {
			window.location.href=back;
		}
		return;
	}

	$(".content-window").animate({top:newTopPosition}, animationDuration, 'swing', function() {
		windowPos = newTopPosition;
    });
}

function showPracticeSlide() {
	showElement($(".content-2"));
	$(".learn-footer").hide();
	$(".content-borderless-window").animate({top:-554}, 500, 'swing');
	if(question_item != null) {
		$(".num-questions-remaining").text(10-question_item + " questions left");
	}
}
/* end window scroller logic */
