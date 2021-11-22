"use strict";

document.addEventListener('DOMContentLoaded', function () {
    cargarComentarios();
});

const API_URL = "http://localhost/proyectos/WEB%202/tpeParte1/TPE-Web2/api/comentarios/";

console.log("esta funcionando js");

async function getComentariosApi() {
    try {
        let response = await fetch(API_URL);
        if (response.ok){
            return await response.json();
        }else {
            console.log(`Hubo un error con codigo ${response.status}`);
            return [];
        }
    } catch (error) {
        console.log(error);
        return [];
    }
}

async function getComentariosApiPorJuego(idJuego) {
    try {
        let response = await fetch(API_URL + `/juegos/${idJuego}`);
        if (response.ok){
            return await response.json();
        }else {
            console.log(`Hubo un error con codigo ${response.status}`);
            return [];
        }
    } catch (error) {
        console.log(error);
        return [];
    }
}

async function imprimeArreglo(){
    let prueba = await getComentariosApi();
    
    if (prueba.length){
        console.log("tiene elementos");
    }else{
        console.log("no tiene elementos");
    }

    console.log(prueba[0].email_usuario);
}

async function cargarComentarios(){
    let link = document.querySelector("#link-juego");
    //console.log(link.dataset.id);
    let comentarios = await getComentariosApiPorJuego(link.dataset.id);
    console.log(comentarios);
    console.log(comentarios.length);

    if (comentarios.length){
        console.log("entro al .length");
        imprimeComentarios(comentarios);
        console.log("llego hasta cargar comentarios");
    }

    let borrar = document.querySelectorAll(".btn-borrar-comentario");
    console.log(borrar);
}

function imprimeComentarios(comentarios){
    let containerMensajes = document.querySelector(".comment-widgets");
    
    for (const comentario of comentarios) {
        let mensaje = creaComentario(comentario);
        containerMensajes.appendChild(mensaje);
    }

}

function creaComentario(comentario){
    let mensaje = document.createElement('div');
    mensaje.innerHTML = `<div class="d-flex flex-row comment-row m-t-0">

                            <div class="comment-text w-100">
                                <h6 class="font-medium nombre-usuario">${comentario.email_usuario} dice:</h6>
                                <span class="m-b-15 d-block">${comentario.mensaje}</span>
                                <div class="comment-footer">
                                    <button type="button" class="btn btn-danger btn-sm btn-borrar-comentario" data-id-comentario="${comentario.id_comentario}">Delete</button>
                                </div>
                            </div>

                        </div>`;

    return mensaje;
}


