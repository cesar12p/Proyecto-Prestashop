<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-22 07:41:16
  from 'C:\xampp\htdocs\prestashop\admin234gupekt\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe1f77c9b8406_12057581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352823faf887ba4f630fde6b72611b5232d37f51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin234gupekt\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1607840517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe1f77c9b8406_12057581 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
