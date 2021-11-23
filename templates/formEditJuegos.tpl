{include file="templates/header.tpl"}

    {* <form action="admin/juegos/editar" method="post">
        <p>Juego a editar: {$nombreJuego}</p>
        <p>Precio: <input type="text" name="precioJuego"></p>
        <p>Descripcion: <input type="text" name="descJuego"></p>
        <p>Categoria: <input type="text" name="categoriaJuego"></p>
        <input type='hidden' name='nombreJuego' value='{$nombreJuego}'/>
        <button type="submit">Editar</button>
    </form>

    <ul>
    {foreach from=$juegos item=$juego}
        <li>
            <a href="juegos/{$juego->nombre}">{$juego->nombre}</a>
            <a href="admin/juegos/borrar/{$juego->nombre}" class="btn btn-danger">Borrar</a>
            <a href="admin/juegos/editar/{$juego->nombre}" class="btn btn-success">Editar</a>
        </li>
    {/foreach}
    </ul> *}

    <div class="content-admin">
        <div class="login-form">
            <form action="admin/juegos/editar" method="post">
                <h2 class="text-center">Editar: {$nombreJuego}</h2>       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Precio" 
                    required="required" name="precioJuego">

                    <input type="text" class="form-control" placeholder="Descripcion" 
                    required="required" name="descJuego">

                    <input type='hidden' name='nombreJuego' value='{$nombreJuego}'/>

                    <p>
                        <select class="form-select form-select-sm" name="categoriaJuego">
                            {foreach from=$categorias item=$categoria}
                                <option value="{$categoria->nombre}">{$categoria->nombre}</option>
                            {/foreach}
                        </select>
                    </p>
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
                    <th>JUEGO</th>
                    <th>CATEGORIA</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$juegos item=$juego}
                    <tr>
                        <td><a href="juegos/{$juego->id_juego}">{$juego->nombre}</a></td>
                        <td><a href="categorias/{$juego->categoria}">{$juego->categoria}</a></td>
                        <td><a href="admin/juegos/borrar/{$juego->nombre}" class="btn btn-black">Borrar</a></td>
                        <td><a href="admin/juegos/editar/{$juego->nombre}" class="btn btn-black">Editar</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        </div>
    </div>
    
{include file="templates/footer.tpl"}