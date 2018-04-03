<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}?>

<div class="grid-x grid-padding-x footer">
	<a class="button back button-left-side" href="<?php echo $back;?>"><i class="fas fa-lg fa-caret-left" ></i>&nbsp;Back</a>
	<a class="check-disabled <?php echo $btnClass;?> button success button-right-side forward-button" <?php echo $nextHref; ?>>Check <i class="fas fa-lg fa-caret-right" ></i></a>
	<nav style="display:inline-block; margin-top: 15px; margin-left: 70px;"  >
		<div class="secondary progress" style="width: 538px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
	      <div class="progress-meter" style="width:<?php echo $width . "%"; ?>;margin: 0;"></div>
	    </div>
	</nav>
</div>