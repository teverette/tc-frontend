<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}?>
<style>
.point-text {color: #008D91;	font-family: "Roboto Slab";	font-size: 16px;	font-weight: bold;	line-height: 21px;}
.point-value {	color: #008D91;	font-family: "Roboto Slab";	font-size: 36px;	font-weight: bold;	line-height: 48px; top: 8px; position: relative;}
</style>
<div class="grid-x grid-padding-x footer">
	<a class="button back button-left-side" href="<?php echo $back;?>"><i class="fas fa-lg fa-caret-left" ></i>&nbsp;Back</a>
	<a class="check-disabled <?php echo $btnClass;?> button success button-right-side forward-button" <?php echo $nextHref; ?>>Check <i class="fas fa-lg fa-caret-right" ></i></a>
	<nav style="display:inline-block; margin-top: 15px; margin-left: 70px;"  >
		<div class="secondary progress" style="width: 386px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
	      <div class="progress-meter" style="width:<?php echo $width . "%"; ?>;margin: 0;"></div>
	    </div>
	</nav>
	<div style="display:inline-block; margin-left:50px;margin-top: -15px;"><img src="images/scoring-star.jpg" style="width:30px; margin-right:10px"><span class="point-value">0</span>&nbsp;<span class="point-text">points</span></div>
</div>