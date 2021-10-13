{include file="templates/header.tpl"}

{*     <form action="admin/categorias/agregar" method="post">
        <p>Categoria a agregar: <input type="text" name="nombreCategoria"></p>
        <button type="submit">Enviar</button>
    </form>

    <ul>
    {foreach from=$categorias item=$categoria}
        <li>
            <a href="categorias/{$categoria->nombre}">{$categoria->nombre}</a>
            <a href="admin/categorias/borrar/{$categoria->nombre}" class="btn btn-danger">Borrar</a>
            <a href="admin/categorias/editar/{$categoria->nombre}" class="btn btn-success">Editar</a>
        </li>
    {/foreach}
    </ul> *}

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
                <p class="alert-danger error-login">{$error}</p>
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
                {foreach from=$categorias item=$categoria}
                    <tr>
                        <td><a href="categorias/{$categoria->nombre}">{$categoria->nombre}</a></td>
                        <td><a href="admin/categorias/borrar/{$categoria->nombre}" class="btn btn-black">Borrar</a></td>
                        <td><a href="admin/categorias/editar/{$categoria->nombre}" class="btn btn-black">Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        </div>
    </div>

{include file="templates/footer.tpl"}