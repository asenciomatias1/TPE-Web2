{include file="templates/header.tpl"}

    {* <form action="admin/categorias/editar" method="post">
        <p>Categoria a editar: {$categoriaVieja}</p>
        <p>Nuevo nombre: <input type="text" name="categoriaNueva"></p>
        <input type='hidden' name='categoriaVieja' value='{$categoriaVieja}'/>
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
            <form action="admin/categorias/editar" method="post">
                <h2 class="text-center">Editar: {$categoriaVieja}</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre de categoria" 
                    required="required" name="categoriaNueva">
                    <input type='hidden' name='categoriaVieja' value='{$categoriaVieja}'/>
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