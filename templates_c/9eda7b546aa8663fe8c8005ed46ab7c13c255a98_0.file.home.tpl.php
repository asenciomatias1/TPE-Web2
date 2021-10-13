<?php
/* Smarty version 3.1.39, created on 2021-10-13 20:26:20
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616724cc5dcd46_73247494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eda7b546aa8663fe8c8005ed46ab7c13c255a98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\home.tpl',
      1 => 1634149565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616724cc5dcd46_73247494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  

    <div class="content">
            <div class="links">
        
                <p><a href="juegos/todos">Ver todos los juegos</a></p>
            
                <p><a href="categorias">Ver todas las categorias</a></p>
    
                <p><a href="admin">Administrar</a></p>
           
                <p><a href="registro">Registrar usuario</a></p>
    
                <p><a href="login">Login</a></p>
                
            </div>
        </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
