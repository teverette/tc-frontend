<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}
if(!isset($btnClass)) {
	$btnClass="";
}
?>

<div class="grid-x grid-padding-x footer" style=" position: absolute; bottom: 8px; height: 70px; left: 8px; border-top: 1px solid #D3D3D3; padding-top:13px; background-color: #FFF;">
	<nav style="display:block; margin-top: 15px; margin-left: 32px;position:relative; top:-28px;">
		<div class="secondary progress" style="width: 944px" role="progressbar" tabindex="0" aria-valuenow="<?php echo $width; ?>" aria-valuemin="0" aria-valuetext="<?php echo $width; ?> percent" aria-valuemax="100">
	      <div class="progress-meter" style="width:<?php echo $width . "%"; ?>;margin: 0;"></div>
	    </div>
	</nav>
	<a class="button back button-left-side" href="<?php echo $back;?>"><img src="images/Back - Text Link.png" style="width: 55px;"/></a>
	<a class="check-disabled <?php echo $btnClass;?> button success button-right-side forward-button" <?php echo $nextHref; ?>>Check <i class="fas fa-check"></i></a>
</div>