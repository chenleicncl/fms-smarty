<?php /* Smarty version 3.1.26, created on 2015-10-26 07:05:44
         compiled from "/Users/nimojs/Documents/git/fms-smarty/view/news.php" */ ?>
<?php
/*%%SmartyHeaderCode:1531552540562dd0c86f2196_75681179%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3856e517d9bc3d0435cf0c25b2148971ca5f6cfb' => 
    array (
      0 => '/Users/nimojs/Documents/git/fms-smarty/view/news.php',
      1 => 1445843143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1531552540562dd0c86f2196_75681179',
  'variables' => 
  array (
    'news' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.26',
  'unifunc' => 'content_562dd0c8725dd6_20892702',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562dd0c8725dd6_20892702')) {
function content_562dd0c8725dd6_20892702 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1531552540562dd0c86f2196_75681179';
echo $_smarty_tpl->getSubTemplate ("include/header1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>News</title>
<?php echo $_smarty_tpl->getSubTemplate ("include/header2.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row container">
    <h1>新闻</h1>
    <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['this'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['this']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['this']->value) {
$_smarty_tpl->tpl_vars['this']->_loop = true;
$foreach_this_Sav = $_smarty_tpl->tpl_vars['this'];
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['this']->value['title'];?>
</a>
        </li>
        <?php
$_smarty_tpl->tpl_vars['this'] = $foreach_this_Sav;
}
?>
    </ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/footer1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>