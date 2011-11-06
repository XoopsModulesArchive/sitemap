<?php
// $Id$
// FILE		::	myAds.php
// AUTHOR	::	Tom_G3X
// WEB		::http://malaika.s31.xrea.com/

function b_sitemap_myAds(){
	$xoopsDB =& Database::getInstance();
	$block = sitemap_get_categoires_map($xoopsDB->prefix("ann_categories"), "cid", "pid", "title", "index.php?pa=view&amp;cid=", "title");
	return $block;
}


?>