<?php
function b_sitemap_wordbook(){
	
	$db =& Database::getInstance();
	$myts =& MyTextSanitizer::getInstance();
	
	$result = $db->query("SELECT categoryID, name FROM ".$db->prefix("wbcategories")." order by weight");
	
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