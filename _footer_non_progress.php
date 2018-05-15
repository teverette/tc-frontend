<?php if(!empty($next)) {
	$nextHref = "href='" . $next . "'";
} else {
	$nextHref = "";
}?>
<div class="grid-x grid-padding-x footer">
	<a class="button back button-left-side" href="<?php echo $back;?>" style="top: 485px;"><img src="images/Back - Text Link.png" /></a>
	<a class="button-right-side next" <?php echo $nextHref; ?>"><img src="images/DownArrow.png"/></a>
</div>