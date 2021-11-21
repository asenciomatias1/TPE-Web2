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
                    <td><a href="juegos/{$juego->id_juego}">{$juego->nombre}</a></td>
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
                    <h6 class="font-medium nombre-usuario">matias@gmail.com dice:</h6> <span class="m-b-15 d-block">This is awesome website. I would love to comeback again. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium modi magni, error nam vero eos dolore iure reprehenderit fugiat. Culpa aliquam sunt asperiores eligendi neque? Cum alias distinctio mollitia numquam?</span>
                    <div class="comment-footer">
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>

            </div>
            
        </div>
    </div>

        <form action="hola.html" method="post" class="form-comentarios">
            <div class="card">
                <div class="row">
                    <div class="col-10">
                        <div class="comment-box ml-2">
                            <h4>Dejanos tu review</h4>
                            <div class="rating">
                                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                            </div>
                            <div class="comment-area">
                                <textarea class="form-control" placeholder="¿Que pensas del juego?" rows="4"></textarea>
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

{include file="footer.tpl"}