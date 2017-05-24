<?php
// $Id$
// FILE		::	weblinks.php
// AUTHOR	::	Ryuji AMANO <info@ryus.biz>
// WEB		::	Ryu's Planning <http://ryus.biz/>
//

function b_sitemap_mydownloads(){
	$xoopsDB = Database::getInstance();

    $block = sitemap_get_categoires_map($xoopsDB->prefix("mydownloads_cat"), "cid", "pid", "title", "viewcat.php?cid=", "title");

	return $block;
}


?>