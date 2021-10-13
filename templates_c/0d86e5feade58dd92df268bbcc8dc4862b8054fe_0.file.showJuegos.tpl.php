<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:05:46
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\showJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672e0a9e9539_93564496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d86e5feade58dd92df268bbcc8dc4862b8054fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\showJuegos.tpl',
      1 => 1634151923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61672e0a9e9539_93564496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>JUEGO</th>
                    <th>CATEGORIA</th>
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
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
