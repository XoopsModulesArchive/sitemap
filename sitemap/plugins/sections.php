<?php
function b_sitemap_sections(){
	
	$db =& Database::getInstance();
	$myts =& MyTextSanitizer::getInstance();
	
	$result = $db->query("SELECT secid, secname FROM ".$db->prefix("sections")."");
	
	$ret = array() ;
	while(list($id, $name) = $db->fetchRow($result)){
		$ret["parent"][] = array(
			"id" => $id,
			"title" => $myts->makeTboxData4Show($name),
			"url" => "index.php?op=listarticles&amp;secid=$id"
		);
	}
	
	return $ret;
}
?>