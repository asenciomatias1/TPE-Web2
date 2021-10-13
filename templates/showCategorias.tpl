{include file="header.tpl"}

    {* <ul>
    {foreach from=$categorias item=$categoria}
        <li>
            <a href="categorias/{$categoria->nombre}">{$categoria->nombre}</a>
        </li>
    {/foreach}
    </ul> *}
    <div class="content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>CATEGORIAS</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$categorias item=$categoria}
                    <tr>
                        <td><a href="categorias/{$categoria->nombre}">{$categoria->nombre}</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

{include file="footer.tpl"}