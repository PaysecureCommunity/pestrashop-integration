<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:08
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c0d74125_13463375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5002ebe1109495a2abcc75888b2cf453d3d9af86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\helpers\\options\\options.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c0d74125_13463375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5209104716828e3c0ce4829_71833307', "leadin");
?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
	id_language = Number(<?php echo $_smarty_tpl->tpl_vars['current_id_lang']->value;?>
);
	<?php if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
		var helper_tabs= <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabs']->value ));?>
;
		var unique_field_id = '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_';
	<?php }
echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20544399286828e3c0ce9108_97993951', "defaultOptions");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1619552656828e3c0d6f985_98336501', "after");
?>

<?php if ($_smarty_tpl->tpl_vars['has_color_field']->value) {
echo '<script'; ?>
 type="text/javascript">
  $.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
<?php echo '</script'; ?>
>
<?php }
}
/* {block "leadin"} */
class Block_5209104716828e3c0ce4829_71833307 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_5209104716828e3c0ce4829_71833307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
/* {block "label"} */
class Block_2384827046828e3c0d05343_13157362 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['title'])) && (isset($_smarty_tpl->tpl_vars['field']->value['hint']))) {?>
										<label class="control-label col-lg-3<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['required'])) && $_smarty_tpl->tpl_vars['field']->value['required'] && $_smarty_tpl->tpl_vars['field']->value['type'] != 'radio') {?> required<?php }?>">
											<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox'] && $_smarty_tpl->tpl_vars['field']->value['multishop_default'] && empty($_smarty_tpl->tpl_vars['field']->value['no_multishop_checkbox'])) {?>
											<input type="checkbox" name="multishopOverrideOption[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="1"<?php if (!$_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?> checked="checked"<?php }?> onclick="toggleMultishopDefaultValue(this, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')"/>
											<?php }?>
											<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="
												<?php if (is_array($_smarty_tpl->tpl_vars['field']->value['hint'])) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value['text'],'html','UTF-8' ));?>

														<?php } else { ?>
															<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hint']->value,'html','UTF-8' ));?>

														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php } else { ?>
													<?php echo $_smarty_tpl->tpl_vars['field']->value['hint'];?>

												<?php }?>
											" data-html="true">
												<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

											</span>
										</label>
									<?php } elseif ((isset($_smarty_tpl->tpl_vars['field']->value['title']))) {?>
										<label class="control-label col-lg-3">
											<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox'] && $_smarty_tpl->tpl_vars['field']->value['multishop_default'] && empty($_smarty_tpl->tpl_vars['field']->value['no_multishop_checkbox'])) {?>
											<input type="checkbox" name="multishopOverrideOption[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="1"<?php if (!$_smarty_tpl->tpl_vars['field']->value['is_disabled']) {?> checked="checked"<?php }?> onclick="checkMultishopDefaultValue(this, '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" />
											<?php }?>
											<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

										</label>
									<?php }?>
								<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_11868150586828e3c0d0f951_05547994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop-integration\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'select') {?>
										<div class="col-lg-9">
											<?php if ($_smarty_tpl->tpl_vars['field']->value['list']) {?>
												<select class="form-control fixed-width-xxl <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['js']))) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['field']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['field']->value['size'];?>
"<?php }?>>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['list'], 'option', false, 'k');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']];?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['value'] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']]) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>
											<?php } elseif ((isset($_smarty_tpl->tpl_vars['input']->value['empty_message']))) {?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

											<?php }?>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'bool') {?>
										<div class="col-lg-9">
											<span class="switch prestashop-switch fixed-width-lg">
												<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_on" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['field']->value['js']['on']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js']['on'];
}
if ((isset($_smarty_tpl->tpl_vars['field']->value['disabled'])) && (bool)$_smarty_tpl->tpl_vars['field']->value['disabled']) {?> disabled="disabled"<?php }?>/><label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['field']->value['js']['off']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js']['off'];
}
if ((isset($_smarty_tpl->tpl_vars['field']->value['disabled'])) && (bool)$_smarty_tpl->tpl_vars['field']->value['disabled']) {?> disabled="disabled"<?php }?>/><label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
												<a class="slide-button btn"></a>
											</span>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'radio') {?>
										<div class="col-lg-9">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['choices'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
												<p class="radio">
													<label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value]))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value];
}?>/><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
												</p>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkbox') {?>
										<div class="col-lg-9">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['choices'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
												<p class="checkbox">
													<label class="col-lg-3" for="<?php echo $_smarty_tpl->tpl_vars['key']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
_on"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;
echo $_smarty_tpl->tpl_vars['k']->value;?>
_on" value="<?php echo intval($_smarty_tpl->tpl_vars['k']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value]))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['js'][$_smarty_tpl->tpl_vars['k']->value];
}?>/><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
												</p>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
										<div class="col-lg-9"><?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?><div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>"><?php }?>
											<input class="form-control <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>" type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?> size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['size']);
} else { ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['no_escape'])) && $_smarty_tpl->tpl_vars['field']->value['no_escape']) {
echo $_smarty_tpl->tpl_vars['field']->value['value'];
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?>autocomplete="off"<?php }?>/>
											<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?>
											<span class="input-group-addon">
												<?php echo strval($_smarty_tpl->tpl_vars['field']->value['suffix']);?>

											</span>
											<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?></div><?php }?>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'password') {?>
										<div class="col-lg-9"><?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?><div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>"><?php }?>
											<input type="<?php echo $_smarty_tpl->tpl_vars['field']->value['type'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['field']->value['id'];?>
"<?php }?> size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['size']);
} else { ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value=""<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['field']->value['autocomplete']) {?> autocomplete="off"<?php }?> />
											<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?>
											<span class="input-group-addon">
												<?php echo strval($_smarty_tpl->tpl_vars['field']->value['suffix']);?>

											</span>
											<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['suffix']))) {?></div><?php }?>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textarea') {?>
										<div class="col-lg-9">
											<textarea class="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['field']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?>" name=<?php echo $_smarty_tpl->tpl_vars['key']->value;
ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['cols'];
$_prefixVariable25 = ob_get_clean();
if ((isset($_prefixVariable25))) {?> cols="<?php echo $_smarty_tpl->tpl_vars['field']->value['cols'];?>
"<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['field']->value['rows'];
$_prefixVariable26 = ob_get_clean();
if ((isset($_prefixVariable26))) {?> rows="<?php echo $_smarty_tpl->tpl_vars['field']->value['rows'];?>
"<?php }?>"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));?>
</textarea>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'file') {?>
										<div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['field']->value['file'];?>
</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'color') {?>
										<div class="col-lg-2">
											<div class="input-group">
												<input type="color" size="<?php echo $_smarty_tpl->tpl_vars['field']->value['size'];?>
" data-hex="true" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?>class="<?php echo $_smarty_tpl->tpl_vars['field']->value['class'];?>
" <?php } else { ?>class="color mColorPickerInput"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));?>
" />
											</div>
							            </div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'price') {?>
										<div class="col-lg-9">
											<div class="input-group fixed-width-lg">
												<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['currency_left_sign']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)'),$_smarty_tpl ) );?>
</span>
												<input type="text" size="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['size']))) {
echo intval($_smarty_tpl->tpl_vars['field']->value['size']);
} else { ?>5<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));?>
" />
											</div>
										</div>
									<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textLang' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'textareaLang' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'selectLang') {?>
										<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textLang') {?>
											<div class="col-lg-9">
												<div class="row">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['languages'], 'value', false, 'id_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
													<?php if (count($_smarty_tpl->tpl_vars['field']->value['languages']) > 1) {?>
													<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id_lang']->value != $_smarty_tpl->tpl_vars['current_id_lang']->value) {?>style="display:none;"<?php }?>>
														<div class="col-lg-9">
													<?php } else { ?>
													<div class="col-lg-12">
													<?php }?>
															<input type="text"
																name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
"
																value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
"
																<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?>
															/>
													<?php if (count($_smarty_tpl->tpl_vars['field']->value['languages']) > 1) {?>
														</div>
														<div class="col-lg-2">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																	<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['id_lang']->value) {
echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];
}?>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																<li>
																	<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
																</li>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															</ul>
														</div>
													</div>
													<?php } else { ?>
													</div>
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</div>
										<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'textareaLang') {?>
											<div class="col-lg-9">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['languages'], 'value', false, 'id_lang');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_lang']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
													<div class="row translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['id_lang']->value != $_smarty_tpl->tpl_vars['current_id_lang']->value) {?>style="display:none;"<?php }?>>
														<div id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
" class="col-lg-9" >
															<textarea class="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['field']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['value']->value,'\r\n',"\n");?>
</textarea>
														</div>
														<div class="col-lg-2">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																	<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['id_lang']->value) {
echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];
}?>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
																<li>
																	<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
																</li>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															</ul>
														</div>

													</div>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php echo '<script'; ?>
 type="text/javascript">
													$(document).ready(function() {
														$(".textarea-autosize").autosize();
													});
												<?php echo '</script'; ?>
>
											</div>
										<?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'selectLang') {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
												<div id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['current_id_lang']->value) {?>block<?php } else { ?>none<?php }?>;" class="col-lg-9">
													<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['language']->value['iso_code'], 'UTF-8');?>
">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['list'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
															<option value="<?php if ((isset($_smarty_tpl->tpl_vars['v']->value['cast']))) {
echo $_smarty_tpl->tpl_vars['v']->value['cast'][$_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']]];
} else {
echo $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value['identifier']];
}?>"
																<?php if ($_smarty_tpl->tpl_vars['field']->value['value'][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == $_smarty_tpl->tpl_vars['v']->value['name']) {?> selected="selected"<?php }?>>
																<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

															</option>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</select>
												</div>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['field']->value['desc'])) {?>
									<div class="col-lg-9 col-lg-offset-3">
										<div class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['field']->value['desc'])) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['field']->value['desc'];?>

											<?php }?>
										</div>
									</div>
									<?php }?>
								<?php
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_7952081336828e3c0d0f4d6_20116869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11868150586828e3c0d0f951_05547994', "input", $this->tplIndex);
?>
								<?php if ($_smarty_tpl->tpl_vars['field']->value['is_invisible']) {?>
								<div class="col-lg-9 col-lg-offset-3">
									<p class="alert alert-warning row-margin-top">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can\'t change the value of this configuration field in the context of this shop.'),$_smarty_tpl ) );?>

									</p>
								</div>
								<?php }?>
								<?php
}
}
/* {/block "field"} */
/* {block "footer"} */
class Block_4508660066828e3c0d57931_32945418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit'])) || (isset($_smarty_tpl->tpl_vars['categoryData']->value['buttons']))) {?>
					<div class="panel-footer">
						<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit'])) && !empty($_smarty_tpl->tpl_vars['categoryData']->value['submit'])) {?>
						<button type="<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['type']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['type'];
} else { ?>submit<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['id'];?>
"<?php }?> class="btn btn-default pull-right" name="<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['name']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"><i class="process-icon-<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['submit']['imgclass']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['imgclass'];
} else { ?>save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['categoryData']->value['submit']['title'];?>
</button>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['buttons']))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryData']->value['buttons'], 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href'])) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
							<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['btn']->value['href'],'html','UTF-8' ));?>
" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
						<?php } else { ?>
							<button type="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['type']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['type'];
} else { ?>button<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['class'];
} else { ?>btn btn-default<?php }?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['name']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
						<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				<?php }?>
			<?php
}
}
/* {/block "footer"} */
/* {block "defaultOptions"} */
class Block_20544399286828e3c0ce9108_97993951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultOptions' => 
  array (
    0 => 'Block_20544399286828e3c0ce9108_97993951',
  ),
  'label' => 
  array (
    0 => 'Block_2384827046828e3c0d05343_13157362',
  ),
  'field' => 
  array (
    0 => 'Block_7952081336828e3c0d0f4d6_20116869',
  ),
  'input' => 
  array (
    0 => 'Block_11868150586828e3c0d0f951_05547994',
  ),
  'footer' => 
  array (
    0 => 'Block_4508660066828e3c0d57931_32945418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop-integration\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['table_bk']->value)) && $_smarty_tpl->tpl_vars['table_bk']->value == $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'table_count', null, null);
echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_assignInScope('table_bk', $_smarty_tpl->tpl_vars['table']->value ,false ,8);?>
<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" id="<?php if ($_smarty_tpl->tpl_vars['table']->value == null) {?>configuration_form<?php } else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count'));
}?>" method="post" enctype="multipart/form-data" class="form-horizontal">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option_list']->value, 'categoryData', false, 'category');
$_smarty_tpl->tpl_vars['categoryData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['categoryData']->value) {
$_smarty_tpl->tpl_vars['categoryData']->do_else = false;
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['top']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['top'];
}?>
		<div class="panel <?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['class']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['class'];
}?>" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
">
						<div class="panel-heading">
				<i class="<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['icon']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['icon'];
} else { ?>icon-cogs<?php }?>"></i>
				<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['title']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['title'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Options','d'=>'Admin.Global'),$_smarty_tpl ) );
}?>
			</div>

			
			<?php if (((isset($_smarty_tpl->tpl_vars['categoryData']->value['description'])) && $_smarty_tpl->tpl_vars['categoryData']->value['description'])) {?>
				<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['description'];?>
</div>
			<?php }?>
						<?php if (((isset($_smarty_tpl->tpl_vars['categoryData']->value['info'])) && $_smarty_tpl->tpl_vars['categoryData']->value['info'])) {?>
				<div><?php echo $_smarty_tpl->tpl_vars['categoryData']->value['info'];?>
</div>
			<?php }?>

			<?php if (!$_smarty_tpl->tpl_vars['categoryData']->value['hide_multishop_checkbox'] && $_smarty_tpl->tpl_vars['use_multishop']->value) {?>
			<div class="well clearfix">
				<label class="control-label col-lg-3">
					<i class="icon-sitemap"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multistore'),$_smarty_tpl ) );?>

				</label>
				<div class="col-lg-9">
					<span class="switch prestashop-switch fixed-width-lg">
						<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_on" value="1" onclick="toggleAllMultishopDefaultValue($('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'), true)"/><label for="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_off" value="0" checked="checked" onclick="toggleAllMultishopDefaultValue($('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_fieldset_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
'), false)"/><label for="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_multishop_<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
						<a class="slide-button btn"></a>
					</span>
					<div class="row">
						<div class="col-lg-12">
							<p class="help-block">
								<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check / Uncheck all'),$_smarty_tpl ) );?>
</strong><br />
								<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );
$_prefixVariable23 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );
$_prefixVariable24 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You are editing this page for a specific shop or group. Click "%yes_label%" to check all fields, "%no_label%" to uncheck all.','d'=>'Admin.Design.Help','sprintf'=>array('%yes_label%'=>$_prefixVariable23,'%no_label%'=>$_prefixVariable24)),$_smarty_tpl ) );?>
<br />
 								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.'),$_smarty_tpl ) );?>

							</p>
						</div>
					</div>
				</div>
			</div>
			<?php }?>

			<div class="form-wrapper">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoryData']->value['fields'], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>
						<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['value'];?>
" />
					<?php } else { ?>
						<div class="form-group<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['form_group_class']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['form_group_class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && (isset($_smarty_tpl->tpl_vars['field']->value['tab']))) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['field']->value['tab'];?>
"<?php }?>>
							<div id="conf_id_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['is_invisible']) {?> class="isInvisible"<?php }?>>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2384827046828e3c0d05343_13157362', "label", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7952081336828e3c0d0f4d6_20116869', "field", $this->tplIndex);
?>
							</div>
						</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div><!-- /.form-wrapper -->

			<?php if ((isset($_smarty_tpl->tpl_vars['categoryData']->value['bottom']))) {
echo $_smarty_tpl->tpl_vars['categoryData']->value['bottom'];
}?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4508660066828e3c0d57931_32945418', "footer", $this->tplIndex);
?>

		</div>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminOptions'),$_smarty_tpl ) );?>

	<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Options<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

	<?php } elseif ((isset($_GET['controller']))) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Options<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php
}
}
/* {/block "defaultOptions"} */
/* {block "autoload_tinyMCE"} */
class Block_9081909266828e3c0d72a82_40860845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			tinySetup({
				editor_selector :"autoload_rte"
			});
		<?php
}
}
/* {/block "autoload_tinyMCE"} */
/* {block "after"} */
class Block_1619552656828e3c0d6f985_98336501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1619552656828e3c0d6f985_98336501',
  ),
  'autoload_tinyMCE' => 
  array (
    0 => 'Block_9081909266828e3c0d72a82_40860845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['tinymce']->value)) && $_smarty_tpl->tpl_vars['tinymce']->value) {
echo '<script'; ?>
 type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes((defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9081909266828e3c0d72a82_40860845', "autoload_tinyMCE", $this->tplIndex);
?>

	});
<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block "after"} */
}
