<?php
function b_sitemap_xwords(){
	
	$db =& Database::getInstance();
	$myts =& MyTextSanitizer::getInstance();
	
	$result = $db->query("SELECT categoryID, name FROM ".$db->prefix("xwords_cat")." order by weight");
	
	$ret = array() ;
	while(list($id, $name) = $db->fetchRow($result)){
		$ret["parent"][] = array(
			"id" => $id,
			"title" => $myts->makeTboxData4Show($name),
			"url" => "category.php?categoryID=$id"
		);
	}
	
	return $ret;
}
?>