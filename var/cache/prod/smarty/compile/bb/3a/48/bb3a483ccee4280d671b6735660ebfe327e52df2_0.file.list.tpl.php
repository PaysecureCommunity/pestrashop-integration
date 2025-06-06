<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:08
  from 'C:\xampp\htdocs\prestashop-integration\admin\themes\default\template\helpers\modules_list\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c0caa519_46531048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb3a483ccee4280d671b6735660ebfe327e52df2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\admin\\themes\\default\\template\\helpers\\modules_list\\list.tpl',
      1 => 1747431220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/modules/tab_module_line.tpl' => 1,
  ),
),false)) {
function content_6828e3c0caa519_46531048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop-integration\\vendor\\smarty\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\prestashop-integration\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<div class="panel" <?php if ((isset($_smarty_tpl->tpl_vars['panel_id']->value))) {?>id="<?php echo $_smarty_tpl->tpl_vars['panel_id']->value;?>
"<?php }?>>
	<h3>
		<i class="icon-list-ul"></i>
		<?php if ((isset($_smarty_tpl->tpl_vars['panel_title']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['panel_title']->value,'html','UTF-8' ));
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules list'),$_smarty_tpl ) );
}?>
	</h3>
	<div class="modules_list_container_tab row">
		<div class="col-lg-12">
			<?php if (count($_smarty_tpl->tpl_vars['modules_list']->value)) {?>
				<table class="table">
					<?php echo smarty_function_counter(array('start'=>1,'assign'=>"count"),$_smarty_tpl);?>

						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_list']->value, 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
							<?php ob_start();
echo smarty_function_cycle(array('values'=>",row alt"),$_smarty_tpl);
$_prefixVariable22 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class_row'=>$_prefixVariable22), 0, true);
?>
						<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</table>
				<?php if ($_smarty_tpl->tpl_vars['controller_name']->value == 'AdminPayment' && (isset($_smarty_tpl->tpl_vars['view_all']->value))) {?>
					<div class="panel-footer">
						<div class="col-lg-4 col-lg-offset-4">
							<a class="btn btn-default btn-block" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModulesSf',true,array('filterCategoryTab'=>'payments_gateways')),'html','UTF-8' ));?>
">
								<i class="process-icon-payment"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all available payments solutions'),$_smarty_tpl ) );?>

							</a>
						</div>
					</div>
				<?php }?>
			<?php } else { ?>
				<table class="table">
					<tr>
						<td>
							<div class="alert alert-warning">
							<?php if ($_smarty_tpl->tpl_vars['controller_name']->value == 'AdminPayment') {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It seems there are no recommended payment solutions for your country.'),$_smarty_tpl ) );?>
<br />
							<a target="_blank" rel="noopener noreferrer nofollow" href="https://www.prestashop.com/en/contact-us"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you think there should be one? Let us know!'),$_smarty_tpl ) );?>
</a>
							<?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules available in this section.'),$_smarty_tpl ) );
}?></div>
						</td>
					</tr>
				</table>
			<?php }?>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').each(function() {
            $(this).fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                },
                href: $(this).attr('href')+'&admin_list_from_source='+getControllerActionMap('read-more')
            });
        });
	});
<?php echo '</script'; ?>
>
<?php }
}
