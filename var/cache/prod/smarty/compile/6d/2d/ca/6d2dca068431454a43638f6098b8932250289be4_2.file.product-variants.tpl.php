<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:10
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\catalog\_partials\product-variants.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c2021428_51867923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2dca068431454a43638f6098b8932250289be4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\catalog\\_partials\\product-variants.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c2021428_51867923 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-variants js-product-variants">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'group', false, 'id_attribute_group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute_group']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['group']->value['attributes'])) {?>
    <div class="clearfix product-variants-item">
      <span class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>': ','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');
}?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </span>
      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'select') {?>
        <select
          class="form-control form-control-select"
          id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'color') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <li class="float-xs-left input-container">
              <label aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span
                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>
                    class="color texture" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)"
                  <?php } elseif ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>
                    class="color" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
"
                  <?php }?>
                ><span class="attribute-name sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
              </label>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type'] == 'radio') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['attributes'], 'group_attribute', false, 'id_attribute');
$_smarty_tpl->tpl_vars['group_attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_attribute']->value => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->do_else = false;
?>
            <li class="input-container float-xs-left">
              <label>
                <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span class="radio-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
              </label>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    </div>
    <?php }?>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
