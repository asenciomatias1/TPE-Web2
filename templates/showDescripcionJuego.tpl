{include file="header.tpl"}

    {* <h2>{$juego->nombre}</h2>
    <p>{$juego->descripcion}</p> *}

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
                    <td><a href="juegos/{$juego->id_juego}">{$juego->nombre}</a></td>
                    <td>{$juego->descripcion}</td>
                </tr>
            </tbody>
        </table>
    </div>

{include file="footer.tpl"}