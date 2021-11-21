"use strict";

const URL_API = "http://localhost/proyectos/WEB%202/tpeParte1/TPE-Web2/api/comentarios/";

console.log("esta funcionando js");

async function getComentariosApi() {
    try {
        let response = await fetch(URL_API);
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

    console.log(prueba.length);
}

imprimeArreglo();