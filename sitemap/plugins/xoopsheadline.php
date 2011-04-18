<?php

function b_sitemap_xoopsheadline(){

	$db =& Database::getInstance();
	$myts =& MyTextSanitizer::getInstance();

	$result = $db->query( "SELECT headline_id,headline_name FROM ".$db->prefix("xoopsheadline")." WHERE headline_display=1 ORDER BY headline_weight" ) ;

	$ret = array() ;
	while( list( $id , $name ) = $db->fetchRow( $result ) ) {

		$ret["parent"][] = array(
			"id" => $id ,
			"title" => $myts->makeTboxData4Show( $name ) ,
			"url" => "index.php?id=$id"
		) ;

	}

	return $ret ;
}
?>