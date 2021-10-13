<?php
/* Smarty version 3.1.39, created on 2021-10-06 21:28:52
  from 'C:\xampp\htdocs\web2\TPE Parte 1\templates\deleteCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615df8f47c4bf0_36436432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd015491e8e17589662a4fc17fee891d56bc4e84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE Parte 1\\templates\\deleteCategoria.tpl',
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
function content_615df8f47c4bf0_36436432 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="formEliminaCategoria" method="post">
        <p>Ingrese un nombre de categoria a eliminar: <input type="text" name="nombreCategoria"></p>
        <button type="submit">Eliminar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
