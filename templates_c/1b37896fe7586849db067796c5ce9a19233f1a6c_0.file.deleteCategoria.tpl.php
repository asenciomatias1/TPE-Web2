<?php
/* Smarty version 3.1.39, created on 2021-10-08 00:40:54
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\deleteCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f7776b8ccc7_15973608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b37896fe7586849db067796c5ce9a19233f1a6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\deleteCategoria.tpl',
      1 => 1633548514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615f7776b8ccc7_15973608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="formEliminaCategoria" method="post">
        <p>Ingrese un nombre de categoria a eliminar: <input type="text" name="nombreCategoria"></p>
        <button type="submit">Eliminar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
