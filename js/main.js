"use strict";

document.addEventListener('DOMContentLoaded', function () {
    cargarComentarios();
    agregaListenerFormComentarios();
});

const API_URL = "http://localhost/proyectos/WEB%202/tpeParte1/TPE-Web2/api/comentarios/";

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

function agregaListenerFormComentarios(){
    let form = document.querySelector(".form-comentarios");
    if (form){
        form.addEventListener("submit", function (e){
            e.preventDefault();
            actionFormComentarios();
        })
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
    let comentarios = await getComentariosApiPorJuego(link.dataset.idJuego);

    if (comentarios.length){
        imprimeComentarios(comentarios);
    }

    // Agrego los listeners para los botones borrar
    let botonesBorrar = document.querySelectorAll(".btn-borrar-comentario");
    agregaListenersBorrar(botonesBorrar);
}

function agregaListenersBorrar(botones){
    for (const boton of botones) {
        //boton.addEventListener("click", deleteComentarioApi);
        boton.addEventListener("click", borrarComentario);
        //boton.addEventListener("click", recargarComentarios);
    }
}

async function borrarComentario(){
    let idComentario = this.dataset.idComentario;
    await deleteComentarioApi(idComentario);
    recargarComentarios();
}

function recargarComentarios(){
    //deleteComentarioApi();
    let containerMensajes = document.querySelector(".comment-widgets");
    containerMensajes.innerHTML = "";
    cargarComentarios();
}

function imprimeComentarios(comentarios){
    let containerMensajes = document.querySelector(".comment-widgets");
    //containerMensajes.innerHTML = "";
    
    for (const comentario of comentarios) {
        let mensaje = creaComentario(comentario);
        containerMensajes.appendChild(mensaje);
    }

}

function calculaStringPuntaje(puntaje){
    let stringPuntaje = "";
    for (let i = 0; i < puntaje; i++) {
        stringPuntaje += `<div class="star">★</div>`;
    }

    return stringPuntaje;
}

function creaComentario(comentario){
    let link = document.querySelector("#link-juego");
    let estaLogeado = link.dataset.estaLogeado;
    let esAdmin = link.dataset.esAdmin;

    let mensaje = document.createElement('div');
    let puntajeHtml = calculaStringPuntaje(comentario.puntaje);
    console.log(puntajeHtml);

    if (estaLogeado === "true" && esAdmin === "true"){
        mensaje.innerHTML = `<div class="d-flex flex-row comment-row m-t-0">

                            <div class="comment-text w-100">
                                <h6 class="font-medium nombre-usuario">${comentario.email_usuario} dice:</h6>
                                <div class="rating-mensaje">
                                    <div class="rating-box">
                                        ${puntajeHtml}
                                    </div>
                                    <div class="mensaje-box">
                                        <p class="m-b-15 d-block">${comentario.mensaje}</p>
                                    </div>
                                </div>
                                <div class="comment-footer">
                                    <button type="button" class="btn btn-danger btn-sm btn-borrar-comentario" data-id-comentario="${comentario.id_comentario}">Delete</button>
                                </div>
                            </div>
    
                        </div>`;
    }else {
        mensaje.innerHTML = `<div class="d-flex flex-row comment-row m-t-0">

                            <div class="comment-text w-100">
                                <h6 class="font-medium nombre-usuario">${comentario.email_usuario} dice:</h6>
                                <div class="rating-mensaje">
                                    <div class="rating-box">
                                        ${puntajeHtml}
                                    </div>
                                    <div class="mensaje-box">
                                        <p class="m-b-15 d-block">${comentario.mensaje}</p>
                                    </div>
                                </div>
                                
                            </div>

                        </div>`;
    }

    return mensaje;
}

async function deleteComentarioApi(idComentario) {
    try {
        let respuesta = await fetch(API_URL + idComentario, {
            "method": "DELETE"
        })
        if (respuesta.ok){
            console.log("Borrado exitoso con 200");
        }else if (respuesta.status == 201){
            console.log("Borrado exitoso con 201");
        }else{
            console.log("Hubo un error: " + respuesta.status);
        }
    } catch (error) {
        console.log(error);
    }
}

async function agregarComentarioApi(objeto) {
    try {
        let respuesta = await fetch(API_URL, {
            "method": "POST",
            "headers": {"Content-Type": "application/json"},
            "body": JSON.stringify(objeto)
        })
        if (respuesta.ok){
            console.log("Se agrego exitosamente con 200");

        }else if (respuesta.status == 201){
            console.log("Se agrego exitosamente con 201");
        }else{
            console.log("Hubo un error: " + respuesta.status);
        }
    } catch (error) {
        console.log(error);
    }
}

async function actionFormComentarios(){
    let form = document.querySelector(".form-comentarios");
    if (form){
        let elementosForm = form.elements;
        let puntaje = 1;
        for (const estrella of elementosForm["rating"]) {
            if (estrella.checked){
                puntaje = estrella.value;
            }
        }
        let mensaje = elementosForm["mensaje-comentario"].value;
        let idUsuario = form.dataset.idUsuario;
        let idJuego = form.dataset.idJuego;

        // Creo un objeto con los datos del comentario
        let comentario = crearObjetoComentario(mensaje, puntaje, idJuego, idUsuario);

        // Mando ese comentario a la API con POST
        await agregarComentarioApi(comentario);

        // Limpio la lista de comentarios y los recargo con GET
        recargarComentarios();

        // Limpio los inputs
        form.reset();
    }
}

function crearObjetoComentario(mensaje, puntaje, idJuego, idUsuario){
    let comentario = {
        "mensaje": mensaje,
        "puntaje": puntaje,
        "fk_id_juego": idJuego,
        "fk_id_usuario": idUsuario
    }

    return comentario;
}