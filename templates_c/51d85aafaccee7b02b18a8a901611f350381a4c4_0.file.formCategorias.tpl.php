<?php
/* Smarty version 3.1.39, created on 2021-09-30 01:12:53
  from 'C:\xampp\htdocs\web2\TPE Parte 1\templates\formCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6154f2f53160d8_91853159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d85aafaccee7b02b18a8a901611f350381a4c4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE Parte 1\\templates\\formCategorias.tpl',
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
function content_6154f2f53160d8_91853159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="prueba" method="post">
        <p>Ingrese un nombre de categoria: <input type="text" name="nombreCategoria"></p>
        <button type="submit">Enviar</button>
    </form>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
