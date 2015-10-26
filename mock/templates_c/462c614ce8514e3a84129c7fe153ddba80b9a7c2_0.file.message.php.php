<?php /* Smarty version 3.1.26, created on 2015-10-26 07:31:01
         compiled from "/Users/nimojs/Documents/git/fms-smarty/view/message.php" */ ?>
<?php
/*%%SmartyHeaderCode:83263201562dd6b5806cc4_79087722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '462c614ce8514e3a84129c7fe153ddba80b9a7c2' => 
    array (
      0 => '/Users/nimojs/Documents/git/fms-smarty/view/message.php',
      1 => 1445844395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83263201562dd6b5806cc4_79087722',
  'variables' => 
  array (
    'message' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.26',
  'unifunc' => 'content_562dd6b58380d9_31314026',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562dd6b58380d9_31314026')) {
function content_562dd6b58380d9_31314026 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '83263201562dd6b5806cc4_79087722';
echo $_smarty_tpl->getSubTemplate ("include/header1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<title>News</title>
<?php echo $_smarty_tpl->getSubTemplate ("include/header2.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="row container">
    <h1>留言</h1>
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
    <form class="form-inline" id="SendMessage" action="/send_message/" method="post">
      <div class="form-group">
        <label for="exampleInputName2">Nickname</label>
        <input type="text" class="form-control" name="nickname" id="exampleInputName2" placeholder="Jane Doe">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail2">Message</label>
        <textarea class="form-control" name="message" id="exampleInputEmail2" ></textarea>
      </div>
      <button type="submit" class="btn btn-default">Send Message</button>
    </form>
    <p class="alert" id="result"></p>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/static/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function () {
    $('#SendMessage').on("submit", function () {
        var $this = $(this)
        var url = $this.attr('action')
        var type = $this.attr('method')
        $.ajax({
            url: url,
            type: type,
            dataType: 'json'
        }).done(function (data) {
            if (data.status === 'success') {
                $('#result').addClass("alert-success").removeClass("alert-danger").html('ok')
            }
            else {
                $('#result').addClass("alert-danger").removeClass("alert-success").html(data.msg)
            }
        })
        return false
    })
})
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("include/footer1.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>