<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}?>
<div class="grid-x grid-padding-x footer">
	<a class="button back button-left-side" href="<?php echo $back;?>"><i class="fas fa-lg fa-caret-left" ></i> Back</a>
	<a class=" button learn-page-forward-button button-right-side" <?php echo $nextHref; ?>">Next <i class="fas fa-lg fa-caret-right"></i></a>
</div>