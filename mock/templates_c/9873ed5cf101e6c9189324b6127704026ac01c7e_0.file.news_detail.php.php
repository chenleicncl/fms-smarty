<?php /* Smarty version 3.1.26, created on 2015-10-26 07:53:42
         compiled from "/Users/nimojs/Documents/git/fms-smarty/view/news_detail.php" */ ?>
<?php
/*%%SmartyHeaderCode:128341133562ddc063b0882_96899823%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9873ed5cf101e6c9189324b6127704026ac01c7e' => 
    array (
      0 => '/Users/nimojs/Documents/git/fms-smarty/view/news_detail.php',
      1 => 1445845938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128341133562ddc063b0882_96899823',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.26',
  'unifunc' => 'content_562ddc063d7de8_51833458',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562ddc063d7de8_51833458')) {
function content_562ddc063d7de8_51833458 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '128341133562ddc063b0882_96899823';
echo $_smarty_tpl->getSubTemplate ("include/header1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>News Detail</title>
<?php echo $_smarty_tpl->getSubTemplate ("include/header2.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row container">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>