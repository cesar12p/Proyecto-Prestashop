<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-13 07:26:14
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\listing\supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd5b4066e0fe6_31724830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b670441763afe4280aecb249b7c1a38477c20ab1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\listing\\supplier.tpl',
      1 => 1607840538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd5b4066e0fe6_31724830 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6696070705fd5b4066de823_31555437', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_6696070705fd5b4066de823_31555437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_6696070705fd5b4066de823_31555437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by supplier %s','sprintf'=>array($_smarty_tpl->tpl_vars['supplier']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div id="supplier-description"><?php echo $_smarty_tpl->tpl_vars['supplier']->value['description'];?>
</div>
<?php
}
}
/* {/block 'product_list_header'} */
}
