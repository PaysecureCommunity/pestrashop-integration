<?php
/* Smarty version 3.1.48, created on 2025-05-17 21:30:10
  from 'C:\xampp\htdocs\prestashop-integration\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6828e3c2d5f3a6_68606917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db466dd381948c380a994ca055b07ec27918db77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop-integration\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1747431237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6828e3c2d5f3a6_68606917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop-integration\\var\\cache\\prod\\smarty\\compile\\db\\46\\6d\\db466dd381948c380a994ca055b07ec27918db77_2.file.helpers.tpl.php',
    'uid' => 'db466dd381948c380a994ca055b07ec27918db77',
    'call_name' => 'smarty_template_function_renderLogo_14756218266828e3c2d4f9f3_72781837',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_14756218266828e3c2d4f9f3_72781837 */
if (!function_exists('smarty_template_function_renderLogo_14756218266828e3c2d4f9f3_72781837')) {
function smarty_template_function_renderLogo_14756218266828e3c2d4f9f3_72781837(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_14756218266828e3c2d4f9f3_72781837 */
}
