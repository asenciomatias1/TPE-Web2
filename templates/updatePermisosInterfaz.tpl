{include file="templates/header.tpl"}

<div class="content-admin">
        <div class="login-form">
            <form action="categorias/permisos" method="post">
                <h2 class="text-center">Administrar permisos</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email del usuario" 
                    required="required" name="emailUsuario">

                    <input type="text" class="form-control" placeholder="Permisos" 
                    required="required" name="permisoUsuario">

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
                    <th>USUARIO</th>
                    <th>PERMISO</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$usuarios item=$usuario}
                    <tr>
                        <td>{$usuario->email}</td>
                        <td>{$usuario->rol}</td>
                        <td><a href="admin/permisos/borrar/{$usuario->id}" class="btn btn-black">Borrar usuario</a></td>
                        <td><a href="admin/permisos/editar/{$usuario->id}" class="btn btn-black">Editar permisos</a></td>
                    </tr>
                {/foreach}
            </tbody> 
        </table>
        </div>
    </div>
{include file="templates/footer.tpl"}