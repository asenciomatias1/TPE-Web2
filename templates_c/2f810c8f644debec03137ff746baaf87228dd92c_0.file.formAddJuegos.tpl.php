<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:39:31
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\formAddJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616735f37c1d28_48295634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f810c8f644debec03137ff746baaf87228dd92c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\formAddJuegos.tpl',
      1 => 1634153962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616735f37c1d28_48295634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="content-admin">
        <div class="login-form">
            <form action="admin/juegos/agregar" method="post">
                <h2 class="text-center">Administrar juegos</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre del juego" 
                    required="required" name="nombreJuego">

                    <input type="text" class="form-control" placeholder="Precio" 
                    required="required" name="precioJuego">

                    <input type="text" class="form-control" placeholder="Descripcion" 
                    required="required" name="descripcionJuego">

                    <p>
                        <select name="categoriaJuego">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-block">Agregar</button>
                </div>
            </form>
        </div>

        <div class="table-box">
            <table class="content-table">
            <thead>
                <tr>
                    <th>JUEGO</th>
                    <th>CATEGORIA</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                    <tr>
                        <td><a href="juegos/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</a></td>
                        <td><a href="categorias/<?php echo $_smarty_tpl->tpl_vars['juego']->value->categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->categoria;?>
</a></td>
                        <td><a href="admin/juegos/borrar/<?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
" class="btn btn-black">Borrar</a></td>
                        <td><a href="admin/juegos/editar/<?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
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
