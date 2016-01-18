<?php
// $Id$
// FILE		::	wordpress.php
// AUTHOR	::	Ryuji AMANO <info@ryus.biz>
// WEB		::	Ryu's Planning <http://ryus.biz/>
//

function b_sitemap_wordpress(){
	$xoopsDB =& Database::getInstance();

    $block = sitemap_get_categoires_map($xoopsDB->prefix("wp_categories"), "cat_ID", "category_parent", "cat_name", "index.php?cat=", "cat_name");

	return $block;
}


?>