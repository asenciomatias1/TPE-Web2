<?php
/* Smarty version 3.1.39, created on 2021-10-13 20:48:52
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672a1457c752_83234099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbc24d390837b385ed223bba99d930ff2bfd409' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\admin.tpl',
      1 => 1634150928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61672a1457c752_83234099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

    <div class="content">
        <div class="links">
            <h2>Panel Administrativo</h2>

            <p><a href="juegos/todos">Ver todos los juegos</a></p>
            
            <p><a href="categorias">Ver todas las categorias</a></p>

            <p><a href="admin/categorias">Administrar Categorias</a></p>

            <p><a href="admin/juegos">Administrar Juegos</a></p>

            <p><a href="home">Volver al Home</a></p>

            <p><a href="logout">Logout</a></p>   
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
