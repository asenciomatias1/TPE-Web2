<?php
/* Smarty version 3.1.39, created on 2021-09-27 21:47:12
  from 'C:\xampp\htdocs\web2\TPE Parte 1\templates\showJuegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61521fc01f1b71_20191806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c637499d0aa1c72d243d6c620cddf06b4a8f9c48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPE Parte 1\\templates\\showJuegos.tpl',
      1 => 1632770658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61521fc01f1b71_20191806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
        <li>
            <a href="juego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id_juego;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
