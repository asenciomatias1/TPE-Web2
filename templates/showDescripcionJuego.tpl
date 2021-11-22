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
                    <td><a href="juegos/{$juego->id_juego}" id="link-juego" data-id="{$juego->id_juego}">{$juego->nombre}</a></td>
                    <td>{$juego->descripcion}</td>
                </tr>
            </tbody>
        </table>

        <div class="card comentarios-card">
        <div class="card-body text-center">
            <h4 class="card-title">Comentarios</h4>
        </div>
        <div class="comment-widgets">

            <div class="d-flex flex-row comment-row m-t-0">

                <div class="comment-text w-100">
                    <h6 class="font-medium nombre-usuario">matias@gmail.com dice:</h6>
                    <span class="m-b-15 d-block">Comentario de prueba renderizado desde el servidor</span>
                    <div class="comment-footer">
                        <button type="button" class="btn btn-danger btn-sm" disabled>Delete</button>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

        <form class="form-comentarios">
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
                                <input type="radio" name="rating" value="1" id="1"><label for="1" required="required">☆</label>
                            </div>
                            <div class="comment-area">
                                <textarea class="form-control" placeholder="¿Que pensas del juego?" rows="4" required="required"></textarea>
                            </div>
                            <div class="comment-btns mt-2">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="pull-left">
                                            <button class="btn btn-success cancel btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pull-right">
                                            <button class="btn btn-success send btn-sm">Send <i class="fa fa-long-arrow-right ml-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="js/main.js"></script>
{include file="footer.tpl"}