<?php
/* Smarty version 3.1.39, created on 2021-10-13 20:42:56
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616728b0c168b8_41633752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '117ba376236ccfdf27b9a291eec5747249376c2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\showLogin.tpl',
      1 => 1634150571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_616728b0c168b8_41633752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="content">
        <div class="login-form">
            <form action="login/enviar" method="post">
                <h2 class="text-center">Log in</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail" required="required" name="emailUsuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="passUsuario">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Iniciar Sesion</button>
                </div>
                <p class="alert-danger error-login"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            </form>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
