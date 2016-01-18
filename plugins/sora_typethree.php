<?php

function b_sitemap_sora_typethree(){
	global $xoopsConfig;
	include_once(XOOPS_ROOT_PATH.'/modules/sora_typethree/language/'.$xoopsConfig['language'].'/main.php');
	$ret = array();
	$ret['parent'] =
		array(
			0 => array(
				'id' => '',
				'title' => _U_SORA3_GO,
				'url' => 'index.php'
				),
			1 => array(
				'id' => '',
				'title' => _U_SORA3_USERLIST,
				'url' => 'index.php?mode=ulist'
				),
			2 => array(
				'id' => '',
				'title' => _U_SORA3_SORALIST,
				'url' => 'index.php?mode=slist'
				),
			3 => array(
				'id' => '',
				'title' => '&nbsp;&raquo;&raquo;'._U_SORA3_VOTEDN,
				'url' => 'ndex.php?mode=slist&amp;qsort=vote&amp;order=desc&amp;page=1'
				),
			);
	return $ret;
}
?>