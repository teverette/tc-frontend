<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}
if(!isset($btnClass)) {
	$btnClass="";
}
?>

<div class="grid-x grid-padding-x footer">
	<nav style="display:block; margin-top: 15px; margin-left: 32px;position:relative; top:-30px;">
		<div class="secondary progress" style="width: 560px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
	      <div class="progress-meter" style="width:<?php echo $width . "%"; ?>;margin: 0;"></div>
	    </div>
	</nav>
	<a class="button back button-left-side" href="<?php echo $back;?>"><i class="fas fa-arrow-up icon-on-left"></i>Back</a>
	<a class="check-disabled <?php echo $btnClass;?> button success button-right-side forward-button" <?php echo $nextHref; ?>>Check <i class="fas fa-check"></i></a>
	
</div>