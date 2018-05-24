<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}?>
<style>
.point-text {color: #008D91;	font-family: "Roboto Slab";	font-size: 16px; font-weight: bold;	line-height: 19px;}
.point-value {	color: #008D91;	font-family: "Roboto Slab";	font-size: 19px; font-weight: bold;	line-height: 24px; top: 2px; position: relative;}
</style>
<div class="grid-x grid-padding-x footer" style="width: 1008px; margin: 0 auto; text-align: center; position: absolute; bottom: 0;height: 70px; left: 0; border-top: 1px solid #D3D3D3; padding-top:13px">
	<nav style="display:block; margin-top: 15px; margin-left: 32px;position:relative; top:-30px;">
		<div class="secondary progress" style="width: 944px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
	      <div class="progress-meter" style="width:<?php echo $width . "%"; ?>;margin: 0;"></div>
	    </div>
	</nav>
	<a class="button back button-left-side" href="<?php echo $back;?>"><img src="images/Back - Text Link.png" style="width: 55px; "/></a>
	<a class="check-disabled <?php echo $btnClass;?> button success button-right-side forward-button" <?php echo $nextHref; ?>>Check <i class="fas fa-check"></i></a>
	<div class="quiz-status" style="display:inline-block; "><span class="quiz-questions-remaining">4 questions left</span>&nbsp;<img src="images/scoring-star.png" style="margin-right:10px"><span class="point-value">0</span>&nbsp;<span class="point-text">points</span></div>
</div>