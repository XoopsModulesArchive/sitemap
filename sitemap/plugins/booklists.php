<?php
// $Id$
// FILE		::	booklists.php
// AUTHOR	::	Ryuji AMANO <info@ryus.biz>
// WEB		::	Ryu's Planning <http://ryus.biz/>
//

function b_sitemap_booklists(){
	$xoopsDB =& Database::getInstance();

    $block = sitemap_get_categoires_map($xoopsDB->prefix("mybooks_cat"), "cid", "pid", "title", "viewcat.php?cid=", "title");
    //$block["path"] = "viewcat.php?cid=";

	return $block;
}
?>
