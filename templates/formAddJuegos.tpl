    {include file="templates/header.tpl"}

{*     <form action="admin/juegos/agregar" method="post">
        <p>Nombre del juego: <input type="text" name="nombreJuego"></p>
        <p>Precio: <input type="text" name="precioJuego"></p>
        <p>Descripcion: <input type="text" name="descripcionJuego"></p>
        <span>
            <select name="categoriaJuego">
                {foreach from=$categorias item=$categoria}
                    <option value="{$categoria->nombre}">{$categoria->nombre}</option>
                {/foreach}
            </select>
        </span>
        <button type="submit">Enviar</button>
    </form>

    <ul>
    {foreach from=$juegos item=$juego}
        <li>
            <a href="juegos/{$juego->id_juego}">{$juego->nombre} - {$juego->categoria}</a>
            <a href="admin/juegos/borrar/{$juego->nombre}" class="btn btn-danger">Borrar</a>
            <a href="admin/juegos/editar/{$juego->nombre}" class="btn btn-success">Editar</a>
        </li>
    {/foreach}
    </ul> *}

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
                        <select class="form-select form-select-sm" name="categoriaJuego">
                            {foreach from=$categorias item=$categoria}
                                <option value="{$categoria->nombre}">{$categoria->nombre}</option>
                            {/foreach}
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