<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 07:26:03
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop_group\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd5b3fbb7abe9_79207254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aadd0417c2bf6a11ed2faf312f1664b36340ff2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop_group\\helpers\\form\\form.tpl',
      1 => 1607840522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd5b3fbb7abe9_79207254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12133911125fd5b3fbb797a9_18875215', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_12133911125fd5b3fbb797a9_18875215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12133911125fd5b3fbb797a9_18875215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	function toggleShareOrders() {

		var disabled_customer = ($('#share_customer_on').prop('checked')) ? false : true;
		var disabled_stock = ($('#share_stock_on').prop('checked')) ? false : true;

		if (disabled_customer || disabled_stock)
		{
			$("input[name=share_order]").each(function(i) {
	            $(this).attr('disabled', true);
	        });

			$('#share_order_off').attr('checked', true);
		}
		else
		{
			$('input[name=share_order]').attr('disabled', false);
		}
	}

	$(document).ready(function() {
		if (!$("input[name=share_order]").prop('disabled'))
		{
			toggleShareOrders();
			$('input[name=share_customer]').click(function()
			{
				toggleShareOrders();
			});
			$('input[name=share_stock]').click(function()
			{
				toggleShareOrders();
			});
		}

		$('#useImportData').click(function() {
			$('#importList').slideToggle('slow');
		});
	});

<?php
}
}
/* {/block 'script'} */
}
