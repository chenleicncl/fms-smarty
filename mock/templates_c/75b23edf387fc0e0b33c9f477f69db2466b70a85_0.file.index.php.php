<?php /* Smarty version 3.1.26, created on 2015-10-26 07:35:32
         compiled from "/Users/nimojs/Documents/git/fms-smarty/view/index.php" */ ?>
<?php
/*%%SmartyHeaderCode:1231275977562dd7c47cc8a0_22596896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b23edf387fc0e0b33c9f477f69db2466b70a85' => 
    array (
      0 => '/Users/nimojs/Documents/git/fms-smarty/view/index.php',
      1 => 1445844929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1231275977562dd7c47cc8a0_22596896',
  'variables' => 
  array (
    'news' => 0,
    'this' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.26',
  'unifunc' => 'content_562dd7c4808bf2_59058087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562dd7c4808bf2_59058087')) {
function content_562dd7c4808bf2_59058087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1231275977562dd7c47cc8a0_22596896';
echo $_smarty_tpl->getSubTemplate ("include/header1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>Index</title>
<?php echo $_smarty_tpl->getSubTemplate ("include/header2.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row container">
    <div class="col-md-6">
        <h2>新闻</h2>
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
        <a href="/news/" class="btn btn-default">查看更多</a>
    </div>
    <div class="col-md-6">
        <h2>留言</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['message']->value;
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
                <?php echo $_smarty_tpl->tpl_vars['this']->value['text'];?>
 - <strong><?php echo $_smarty_tpl->tpl_vars['this']->value['nickname'];?>
</strong>
            </li>
            <?php
$_smarty_tpl->tpl_vars['this'] = $foreach_this_Sav;
}
?>
        </ul>
        <a href="/message/" class="btn btn-default">查看更多</a>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("include/footer1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>