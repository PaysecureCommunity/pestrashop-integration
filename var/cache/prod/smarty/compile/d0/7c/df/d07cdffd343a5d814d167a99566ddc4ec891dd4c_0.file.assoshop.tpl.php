<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:08
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\helpers\form\assoshop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c056eac6_35144796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07cdffd343a5d814d167a99566ddc4ec891dd4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\helpers\\form\\assoshop.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c056eac6_35144796 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
$().ready(function() {
	$(document).on('click', '.input_all_shop', function(e) {
		var checked = $(this).prop('checked');
		$('.input_shop_group:not(:disabled)').attr('checked', checked);
		$('.input_shop:not(:disabled)').attr('checked', checked);
	});

	// Click on a group shop
	$(document).on('click', '.input_shop_group', function(e) {
		$('.input_shop[value='+$(this).val()+']').attr('checked', $(this).prop('checked'));
		check_all_shop();
	});

	// Click on a shop
	$(document).on('click', '.input_shop', function(e) {
		check_shop_group_status($(this).val());
		check_all_shop();
	});

	// Initialize checkbox
	$('.input_shop_group').each(function(k, v) {
		check_shop_group_status($(v).val());
		check_all_shop();
	});
});

function check_shop_group_status(id_group) {
	var groupChecked = true;
	var total = 0;
	$('.input_shop[value='+id_group+']').each(function(k, v) {
		total++;
		if (!$(v).prop('checked'))
			groupChecked = false;
	});

	if (total > 0)
		$('.input_shop_group[value='+id_group+']').attr('checked', groupChecked);
}

function check_all_shop() {
	var allChecked = true;
	$('.input_shop_group:not(:disabled)').each(function(k, v) {
		if (!$(v).prop('checked'))
			allChecked = false;
		});
	$('.input_all_shop').attr('checked', allChecked);
}
<?php echo '</script'; ?>
>

<div class="assoShop">
	<table class="table">
		<tr>
			<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shop','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</th>
		</tr>
		<tr>
			<td>
				<label>
					<input class="input_all_shop" type="checkbox" /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All shops'),$_smarty_tpl ) );?>

				</label>
			</td>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'groupData', false, 'groupID');
$_smarty_tpl->tpl_vars['groupData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['groupID']->value => $_smarty_tpl->tpl_vars['groupData']->value) {
$_smarty_tpl->tpl_vars['groupData']->do_else = false;
?>
				<?php $_smarty_tpl->_assignInScope('groupChecked', false);?>
			<tr <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'shop') {?>class="alt_row"<?php }?>>
				<td>
					<img style="vertical-align:middle;" alt="" src="../img/admin/lv2_b.gif" />
					<label>
						<input class="input_shop_group"
							type="checkbox"
							name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo intval($_smarty_tpl->tpl_vars['groupID']->value);?>
]"
							value="<?php echo intval($_smarty_tpl->tpl_vars['groupID']->value);?>
"
							<?php if ($_smarty_tpl->tpl_vars['groupChecked']->value) {?> checked="checked"<?php }?> />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['groupData']->value['name'];?>

					</label>
				</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'shop') {?>
				<?php $_smarty_tpl->_assignInScope('j', 0);?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groupData']->value['shops'], 'shopData', false, 'shopID');
$_smarty_tpl->tpl_vars['shopData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shopID']->value => $_smarty_tpl->tpl_vars['shopData']->value) {
$_smarty_tpl->tpl_vars['shopData']->do_else = false;
?>
					<?php if (((isset($_smarty_tpl->tpl_vars['fields_value']->value['shop'][$_smarty_tpl->tpl_vars['shopID']->value])))) {?>
						<?php $_smarty_tpl->_assignInScope('checked', true);?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('checked', false);?>
					<?php }?>
					<tr>
						<td <?php if ($_smarty_tpl->tpl_vars['groupData']->value['disable_shops']) {?>style="font-style:italic;background-color:#CFC4FF"<?php }?>>
							<img style="vertical-align:middle;" alt="" src="../img/admin/lv3_<?php if ($_smarty_tpl->tpl_vars['j']->value < count($_smarty_tpl->tpl_vars['groupData']->value['shops'])-1) {?>b<?php } else { ?>f<?php }?>.png" />
							<label class="child">
								<input class="input_shop"
									type="checkbox"
									value="<?php echo intval($_smarty_tpl->tpl_vars['groupID']->value);?>
"
									shop_id="<?php echo intval($_smarty_tpl->tpl_vars['shopID']->value);?>
"
									name="checkBoxShopAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo intval($_smarty_tpl->tpl_vars['shopID']->value);?>
]"
									id="checkedBox_<?php echo intval($_smarty_tpl->tpl_vars['shopID']->value);?>
"
									<?php if ($_smarty_tpl->tpl_vars['checked']->value) {?> checked="checked"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['groupData']->value['disable_shops']) {?> readonly="readonly" onclick="return false"<?php }?>
									/>
								<?php echo $_smarty_tpl->tpl_vars['shopData']->value['name'];?>

							</label>
						</td>
					</tr>
					<?php $_smarty_tpl->_assignInScope('j', $_smarty_tpl->tpl_vars['j']->value+1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</table>
</div>
<?php }
}
