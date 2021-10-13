{include file="header.tpl"}

    {* <ul>
    {foreach from=$juegos item=$juego}
        <li>
            <a href="juegos/{$juego->id_juego}">{$juego->nombre} - {$juego->categoria}</a>
        </li>
    {/foreach}
    </ul> *}

    <div class="content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>JUEGO</th>
                    <th>CATEGORIA</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$juegos item=$juego}
                    <tr>
                        <td><a href="juegos/{$juego->id_juego}">{$juego->nombre}</a></td>
                        <td><a href="categorias/{$juego->categoria}">{$juego->categoria}</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

{include file="footer.tpl"}