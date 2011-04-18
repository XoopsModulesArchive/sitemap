<?php

include_once('./../../../include/cp_header.php');
define( '_MYMENU_CONSTANT_IN_MODINFO' , '_MI_SITEMAP_NAME' ) ;

// branch for altsys
if( defined( 'XOOPS_TRUST_PATH' ) && ! empty( $_GET['lib'] ) ) {
	$mydirname = basename( dirname( dirname( __FILE__ ) ) ) ;
	$mydirpath = dirname( dirname( __FILE__ ) ) ;

	// common libs (eg. altsys)
	$lib = preg_replace( '/[^a-zA-Z0-9_-]/' , '' , $_GET['lib'] ) ;
	$page = preg_replace( '/[^a-zA-Z0-9_-]/' , '' , @$_GET['page'] ) ;
	
	if( file_exists( XOOPS_TRUST_PATH.'/libs/'.$lib.'/'.$page.'.php' ) ) {
		include XOOPS_TRUST_PATH.'/libs/'.$lib.'/'.$page.'.php' ;
	} else if( file_exists( XOOPS_TRUST_PATH.'/libs/'.$lib.'/index.php' ) ) {
		include XOOPS_TRUST_PATH.'/libs/'.$lib.'/index.php' ;
	} else {
		die( 'wrong request' ) ;
	}
	exit ;
}

xoops_cp_header();
include( './mymenu.php' ) ;


//echo "[ <a href='".XOOPS_URL."/modules/system/admin.php?fct=preferences&amp;op=showmod&amp;mod=".$xoopsModule->getvar('mid')."'>"._PREFERENCES."</a> ]"; // thx osewa ni natteru hito

if(file_exists(XOOPS_ROOT_PATH."/modules/sitemap/language/".$xoopsConfig["language"]."/readme.html")){
    include XOOPS_ROOT_PATH."/modules/sitemap/language/".$xoopsConfig["language"]."/readme.html";
}else{
    include XOOPS_ROOT_PATH."/modules/sitemap/language/english/readme.html";
}

xoops_cp_footer();

?>