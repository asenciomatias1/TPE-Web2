"use strict";

document.addEventListener('DOMContentLoaded', function () {
    cargarComentarios();
    pruebaForm();
    //let form = document.querySelector(".form-comentarios");
    //form.addEventListener("submit", function (e){
    //    e.preventDefault();
    //    pruebaForm();
    //})
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
    let comentarios = await getComentariosApiPorJuego(link.dataset.idJuego);

    if (comentarios.length){
        console.log("entro al .length");
        imprimeComentarios(comentarios);
        console.log("llego hasta cargar comentarios");
    }

    // Agrego los listeners para los botones borrar
    let botonesBorrar = document.querySelectorAll(".btn-borrar-comentario");
    agregaListenersBorrar(botonesBorrar);
}

function agregaListenersBorrar(botones){
    for (const boton of botones) {
        //boton.addEventListener("click", deleteComentarioApi);
        boton.addEventListener("click", deleteComentarioApi);
        boton.addEventListener("click", recargarComentarios);
    }
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

function creaComentario(comentario){
    let link = document.querySelector("#link-juego");
    let estaLogeado = link.dataset.estaLogeado;
    let esAdmin = link.dataset.esAdmin;

    let mensaje = document.createElement('div');

    if (estaLogeado === "true" && esAdmin === "true"){
        mensaje.innerHTML = `<div class="d-flex flex-row comment-row m-t-0">

                            <div class="comment-text w-100">
                                <h6 class="font-medium nombre-usuario">${comentario.email_usuario} dice:</h6>
                                <span class="m-b-15 d-block">${comentario.mensaje}</span>
                                <div class="comment-footer">
                                    <button type="button" class="btn btn-danger btn-sm btn-borrar-comentario" data-id-comentario="${comentario.id_comentario}">Delete</button>
                                </div>
                            </div>
    
                        </div>`;
    }else {
        mensaje.innerHTML = `<div class="d-flex flex-row comment-row m-t-0">

                            <div class="comment-text w-100">
                                <h6 class="font-medium nombre-usuario">${comentario.email_usuario} dice:</h6>
                                <span class="m-b-15 d-block">${comentario.mensaje}</span>
                                
                            </div>

                        </div>`;
    }

    
    

    return mensaje;
}

async function deleteComentarioApi() {
    let idComentario = this.dataset.idComentario;
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


function pruebaForm(){
    let form = document.querySelector(".form-comentarios");
    if (form){
        let elementosForm = form.elements;
        let puntaje = 1;
        for (const estrella of elementosForm["rating"]) {
            if (estrella.checked){
                puntaje = estrella.value;
            }
        }
        console.log(puntaje);
        form.reset();
    }
    
}