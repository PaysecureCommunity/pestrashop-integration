<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:10
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\customer\order-follow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c27d5373_21333636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23275e7f24c892b640efe53b0b5cce63e571c3ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\customer\\order-follow.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c27d5373_21333636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6072722166828e3c27baee0_88349275', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13629382216828e3c27bccf3_42466080', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6072722166828e3c27baee0_88349275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6072722166828e3c27baee0_88349275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_13629382216828e3c27bccf3_42466080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_13629382216828e3c27bccf3_42466080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php if ($_smarty_tpl->tpl_vars['ordersReturn']->value && count($_smarty_tpl->tpl_vars['ordersReturn']->value)) {?>

    <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is a list of pending merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h6>

    <table class="table table-striped table-bordered hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
          <tr>
            <td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-sm-center">
              <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div class="order-returns hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
        <div class="order-return">
          <ul>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
              <li>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              </li>
            <?php }?>
          </ul>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

  <?php }?>

<?php
}
}
/* {/block 'page_content'} */
}
