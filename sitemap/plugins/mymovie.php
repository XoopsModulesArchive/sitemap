<?php
function b_sitemap_mymovie(){
	$xoopsDB =& Database::getInstance();

    $block = sitemap_get_categoires_map($xoopsDB->prefix("mymovie_cat"), "cid", "pid", "title", "viewcat.php?cid=", "title");

	return $block;
}
?>