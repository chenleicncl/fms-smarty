<?php /* Smarty version 3.1.26, created on 2015-10-26 07:51:36
         compiled from "/Users/nimojs/Documents/git/fms-smarty/view/include/header2.php" */ ?>
<?php
/*%%SmartyHeaderCode:751397642562ddb885d5aa6_42675219%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1275b092547c02c5c8f69df079665b49207db3f' => 
    array (
      0 => '/Users/nimojs/Documents/git/fms-smarty/view/include/header2.php',
      1 => 1445845122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '751397642562ddb885d5aa6_42675219',
  'variables' => 
  array (
    'PAGE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.26',
  'unifunc' => 'content_562ddb88604883_11914112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562ddb88604883_11914112')) {
function content_562ddb88604883_11914112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '751397642562ddb885d5aa6_42675219';
?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="navbar-header"><a href="/fms/" class="navbar-brand" target="_blank">/fms/</a></div>
    <ul class="nav navbar-nav">
        <li <?php if ($_smarty_tpl->tpl_vars['PAGE_PATH']->value == "/") {?>class="active"<?php }?> >
            <a href="/">Home</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['PAGE_PATH']->value == "/news/") {?>class="active"<?php }?> >
            <a href="/news/">News</a>
        </li>
        <li <?php if ($_smarty_tpl->tpl_vars['PAGE_PATH']->value == "/message/") {?>class="active"<?php }?>>
            <a href="/message/">Message</a>
        </li>
        <li>
            <a href="https://github.com/nimojs/fms-smarty"  target="_blank">Github</a>
        </li>
    </ul>
</nav><?php }
}
?>