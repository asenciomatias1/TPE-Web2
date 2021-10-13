<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:29:08
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\formEditCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61673384bb7078_53999697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '064bddbeadc0c40948bac840d3dc9552acb098b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\formEditCategorias.tpl',
      1 => 1634153345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61673384bb7078_53999697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="content-admin">
        <div class="login-form">
            <form action="admin/categorias/editar" method="post">
                <h2 class="text-center">Editar: <?php echo $_smarty_tpl->tpl_vars['categoriaVieja']->value;?>
</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre de categoria" 
                    required="required" name="categoriaNueva">
                    <input type='hidden' name='categoriaVieja' value='<?php echo $_smarty_tpl->tpl_vars['categoriaVieja']->value;?>
'/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Editar</button>
                </div>
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
