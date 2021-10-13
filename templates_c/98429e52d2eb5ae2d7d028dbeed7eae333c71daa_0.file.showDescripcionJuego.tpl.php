<?php
/* Smarty version 3.1.39, created on 2021-09-27 21:49:36
  from 'C:\xampp\htdocs\web2\TPE Parte 1\templates\showDescripcionJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61522050779f59_68250085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98429e52d2eb5ae2d7d028dbeed7eae333c71daa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE Parte 1\\templates\\showDescripcionJuego.tpl',
      1 => 1632772084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61522050779f59_68250085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h2><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
