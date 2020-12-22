<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-22 07:40:52
  from 'C:\xampp\htdocs\prestashop\admin234gupekt\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe1f7640b5c64_26625433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c07672c470eec0c618edf88159e8a65cb9531c0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin234gupekt\\themes\\default\\template\\content.tpl',
      1 => 1607840521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe1f7640b5c64_26625433 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
