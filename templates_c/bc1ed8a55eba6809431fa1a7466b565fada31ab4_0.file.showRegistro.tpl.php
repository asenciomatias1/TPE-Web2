<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:13:22
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\showRegistro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672fd27d65d3_98408754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc1ed8a55eba6809431fa1a7466b565fada31ab4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\showRegistro.tpl',
      1 => 1634152401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61672fd27d65d3_98408754 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="content">
        <div class="login-form">
            <form action="registro/nuevo" method="post">
                <h2 class="text-center">Registro de Usuario</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" required="required" name="emailUsuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="passUsuario">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Registrar</button>
                </div>
            </form>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
