<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:28:55
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\formAddCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616741878b6199_88704782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53253c6248ce72c2724f19f1059f509e74a353ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\formAddCategorias.tpl',
      1 => 1634156931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616741878b6199_88704782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="content-admin">
        <div class="login-form">
            <form action="admin/categorias/agregar" method="post">
                <h2 class="text-center">Administrar categorias</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre de categoria" 
                    required="required" name="nombreCategoria">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Agregar</button>
                </div>
                <p class="alert-danger error-login"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
            </form>
        </div>

        <div class="table-box">
            <table class="content-table">
            <thead>
                <tr>
                    <th>CATEGORIAS</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <tr>
                        <td><a href="categorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</a></td>
                        <td><a href="admin/categorias/borrar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
" class="btn btn-black">Borrar</a></td>
                        <td><a href="admin/categorias/editar/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
" class="btn btn-black">Editar</a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
