<?php
/* Smarty version 3.1.48, created on 2025-05-16 23:34:40
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\controllers\scenes\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6827af70d19e35_64053972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60cc764d03da77720f7c682efb6f2391f848c6f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\controllers\\scenes\\helpers\\form\\form.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827af70d19e35_64053972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20636856946827af70d0fcb5_37939819', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20822972306827af70d13441_34918909', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_20636856946827af70d0fcb5_37939819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_20636856946827af70d0fcb5_37939819',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (($_smarty_tpl->tpl_vars['input']->value['type'] == "description")) {?>
		<p><?php echo $_smarty_tpl->tpl_vars['input']->value['text'];?>
</p>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "after"} */
class Block_20822972306827af70d13441_34918909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_20822972306827af70d13441_34918909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		startingData = new Array();
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'key');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
			startingData[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = new Array(
				'<?php echo addcslashes($_smarty_tpl->tpl_vars['product']->value['details']->name,'\'');?>
',
				'<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
',
				<?php echo $_smarty_tpl->tpl_vars['product']->value['x_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['y_axis'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_width'];?>
,
				<?php echo $_smarty_tpl->tpl_vars['product']->value['zone_height'];?>
);
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
