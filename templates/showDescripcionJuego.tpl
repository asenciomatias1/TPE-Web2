{include file="header.tpl"}

    <div class="juegos-content">
        <table class="content-table">
            <thead>
                <tr>
                    <th>JUEGO</th>
                    <th>DESCRIPCION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    {if $estaLogeado}
                        {if $esAdmin}
                            <td><a href="juegos/{$juego->id_juego}" id="link-juego" data-id-juego="{$juego->id_juego}" data-esta-logeado="true" data-es-admin="true">{$juego->nombre}</a></td>
                        {else}
                            <td><a href="juegos/{$juego->id_juego}" id="link-juego" data-id-juego="{$juego->id_juego}" data-esta-logeado="true" data-es-admin="false">{$juego->nombre}</a></td>
                        {/if}
                    {else}
                        <td><a href="juegos/{$juego->id_juego}" id="link-juego" data-id-juego="{$juego->id_juego}" data-esta-logeado="false">{$juego->nombre}</a></td>
                    {/if}
                    <td>{$juego->descripcion}</td>
                </tr>
            </tbody>
        </table>

        <div class="card comentarios-card">
        <div class="card-body text-center">
            <h4 class="card-title">Comentarios</h4>
            <h6 class="card-title">Orden Antiguedad</h6>
            <button class="btn send btn-sm active" id="btn-fecha-asc" data-id-juego="{$juego->id_juego}">Ascendente </button>
            <button class="btn send btn-sm" id="btn-fecha-desc" data-id-juego="{$juego->id_juego}">Descendente </button>
            <h6 class="card-title">Orden Puntaje</h6>
            <button class="btn send btn-sm" id="btn-puntaje-asc" data-id-juego="{$juego->id_juego}">Ascendente </button>
            <button class="btn send btn-sm" id="btn-puntaje-desc" data-id-juego="{$juego->id_juego}">Descendente </button>
            <h6 class="card-title">Filtrar comentarios</h6>
            <button class="btn send btn-sm" id="btn-rating-1" data-id-juego="{$juego->id_juego}">★ </button>
            <button class="btn send btn-sm" id="btn-rating-2" data-id-juego="{$juego->id_juego}">★★ </button>
            <button class="btn send btn-sm" id="btn-rating-3" data-id-juego="{$juego->id_juego}">★★★ </button>
            <button class="btn send btn-sm" id="btn-rating-4" data-id-juego="{$juego->id_juego}">★★★★ </button>
            <button class="btn send btn-sm" id="btn-rating-5" data-id-juego="{$juego->id_juego}">★★★★★ </button>
        </div>
        <div class="comment-widgets">

            {* <div class="d-flex flex-row comment-row m-t-0">

                <div class="comment-text w-100">
                    <h6 class="font-medium nombre-usuario">matias@gmail.com dice:</h6>
                    <div class="rating-mensaje">
                        <div class="rating-box">
                            <div class="star">★</div>
                            <div class="star">★</div>
                            <div class="star">★</div>
                            <div class="star">★</div>
                            <div class="star">★</div>
                        </div>
                        <div class="mensaje-box">
                            <p class="m-b-15 d-block">Comentario de prueba renderizado desde el servidor</p>
                        </div>
                    </div>
                    {if $estaLogeado && $esAdmin}
                    <div class="comment-footer">
                        <button type="button" class="btn btn-danger btn-sm" disabled>Delete</button>
                    </div>
                    {/if}
                </div>

            </div> *}
            
        </div>
    </div>
        {if $estaLogeado}
        <form class="form-comentarios" data-id-usuario="{$idUsuario}" data-id-juego="{$juego->id_juego}">
            <div class="card">
                <div class="row">
                    <div class="col-10">
                        <div class="comment-box ml-2">
                            <h4>Dejanos tu review</h4>
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5" required="required">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4" required="required">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3" required="required">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2" required="required">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1" required="required">★</label>
                            </div>
                            <div class="comment-area">
                                <textarea class="form-control" name="mensaje-comentario" placeholder="¿Que pensas del juego?" rows="4" required="required"></textarea>
                            </div>
                            <div class="comment-btns mt-2">
                                <div class="row">
                                    
                                    <div class="col-6">
                                        <div class="pull-right">
                                            <button class="btn send btn-sm">Send <i class="fa fa-long-arrow-right ml-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        {/if}
    </div>

    <script src="js/main.js"></script>
{include file="footer.tpl"}