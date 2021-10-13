<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:10:15
  from 'C:\xampp\htdocs\proyectos\WEB 2\TPE Parte 1\templates\showCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672f17ad9204_40374942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2083704367fea54b92956fe1843791a8d82bad7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\WEB 2\\TPE Parte 1\\templates\\showCategorias.tpl',
      1 => 1634151783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61672f17ad9204_40374942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>CATEGORIAS</th>
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
