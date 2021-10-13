<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:09:20
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\showDescripcionJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672ee068aee5_50168689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9ecf1b9fbdc9b75aa88d1eef473cac9abb195b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\showDescripcionJuego.tpl',
      1 => 1634152156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61672ee068aee5_50168689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <div class="content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>JUEGO</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="juegos/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->descripcion;?>
</td>
                </tr>
            </tbody>
        </table>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
