<?php
/* Smarty version 3.1.39, created on 2021-10-09 01:00:36
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\formCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160cd942d0e14_00449061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea157a47610b366b05d6eca74405a67528b31e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\formCategorias.tpl',
      1 => 1632957160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6160cd942d0e14_00449061 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="prueba" method="post">
        <p>Ingrese un nombre de categoria: <input type="text" name="nombreCategoria"></p>
        <button type="submit">Enviar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
