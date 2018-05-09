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
					    console.log("current top: " + getWindowTopPosition());
				    	var newTopPosition = windowPos+scrollDistance;
				    	
				    	console.log("new top: " + newTopPosition);
				    	if(newTopPosition>=400) {
							// hide/disable button
							console.log("at top of content");
							return;
				    	}

				    	$(".content-window").animate({top:newTopPosition}, animationDuration, 'swing', function() {
				    		windowPos = newTopPosition;
					    });
				    }

				    function showPracticeSlide() {
				    	showElement($(".content-2"));
						// $(".content").hide("slide", { direction: "up" }, 900);
						$(".first-content .content-header").hide();
						$(".first-content").animate({
						    height: "0", padding:"0", borderWidth:"0"
						  }, 900, function() {
							  $(".speaker").show();
							  $("body").removeClass("learn");
						      showElement($(".footer"));
						});
				    }
				    /* end window scroller logic */
