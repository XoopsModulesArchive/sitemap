<?php

$modversion['name'] = _MI_SITEMAP_NAME;
$modversion['version'] = '1.30';
$modversion['author'] = 'chanoir';
$modversion['image'] = 'images/sitemap_slogo.png';
$modversion['dirname'] = 'sitemap';

$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

$modversion['hasMain'] = 1;

$modversion['templates'][1]['file'] = 'sitemap_inc_eachmodule.html';
$modversion['templates'][1]['description'] = '';

$modversion['templates'][2]['file'] = 'sitemap_index.html';
$modversion['templates'][2]['description'] = '';

$modversion['templates'][3]['file'] = 'sitemap_xml_google.html';
$modversion['templates'][3]['description'] = '';

$modversion['blocks'][1]['file'] = 'sitemap_blocks.php';
$modversion['blocks'][1]['name'] = _MI_SITEMAP_BLOCKNAME ;
$modversion['blocks'][1]['description'] = _MI_SITEMAP_BLOCKDESC ;
$modversion['blocks'][1]['show_func'] = 'b_sitemap_show';
$modversion['blocks'][1]['edit_func'] = 'b_sitemap_edit';
$modversion['blocks'][1]['template'] = 'sitemap_block_show.html';
$modversion['blocks'][1]['options'] = '1';

$modversion['config'][1]['name'] = 'msgs';
$modversion['config'][1]['title'] = '_MI_MESSAGE';
$modversion['config'][1]['description'] = '_MI_MESSAGEEDSC';
$modversion['config'][1]['formtype'] = 'textarea';
$modversion['config'][1]['valuetype'] = 'text';
$modversion['config'][1]['default'] = _MI_SITEMAP_MESSAGE;

$modversion['config'][2]['name'] = 'show_subcategoris';
$modversion['config'][2]['title'] = '_MI_SHOW_SUBCATEGORIES';
$modversion['config'][2]['description'] = '_MI_SHOW_SUBCATEGORIESDSC';
$modversion['config'][2]['formtype'] = 'yesno';
$modversion['config'][2]['valuetype'] = 'int';
$modversion['config'][2]['default'] = 1;

$modversion['config'][3]['name'] = 'alltime_guest';
$modversion['config'][3]['title'] = '_MI_ALLTIME_GUEST';
$modversion['config'][3]['description'] = '_MI_ALLTIME_GUESTDSC';
$modversion['config'][3]['formtype'] = 'yesno';
$modversion['config'][3]['valuetype'] = 'int';
$modversion['config'][3]['default'] = 0;

$modversion['config'][4]['name'] = 'invisible_weights';
$modversion['config'][4]['title'] = '_MI_INVISIBLE_WEIGHTS';
$modversion['config'][4]['description'] = '_MI_INVISIBLE_WEIGHTSDSC';
$modversion['config'][4]['formtype'] = 'text';
$modversion['config'][4]['valuetype'] = 'text';
$modversion['config'][4]['default'] = '0';

$modversion['config'][5]['name'] = 'invisible_dirnames';
$modversion['config'][5]['title'] = '_MI_INVISIBLE_DIRNAMES';
$modversion['config'][5]['description'] = '_MI_INVISIBLE_DIRNAMESDSC';
$modversion['config'][5]['formtype'] = 'text';
$modversion['config'][5]['valuetype'] = 'text';
$modversion['config'][5]['default'] = '';

?>
