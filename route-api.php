<?php

require_once 'libs/Router.php';
require_once 'Controller/ApiComentariosController.php';


// crea el router
$router = new Router();

/* 
Mostrar Vuelos (recurso vuelo)
(GET) /api/vuelos

Mostrar Vuelo (recurso vuelo)
(GET) /api/vuelos/:ID

Mostrar Ciudades (recurso ciudad)
(GET) /api/ciudades

Mostrar Ciudad (recurso ciudad)
(GET) /api/ciudades/:ID

Agregar Vuelo (recurso vuelo)
(POST) /api/vuelos

Borrar vuelo (recurso vuelo)
(DELETE) /api/vuelos/:ID

Actualizar Vuelo (recurso vuelo)
(UPDATE) /api/vuelos/:ID 
*/


// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiComentariosController', 'getComentarios');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentariosController', 'getComentario');
$router->addRoute('comentarios/juegos/:ID', 'GET', 'ApiComentariosController', 'getComentariosPorJuego');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'deleteComentario');
$router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'postComentario');
$router->addRoute('comentarios/juegos/:ID/fecha/:ORDEN', 'GET', 'ApiComentariosController', 'getComentariosAntiguedad');
$router->addRoute('comentarios/juegos/:ID/puntaje/:ORDEN', 'GET', 'ApiComentariosController', 'getComentariosPuntaje');
$router->addRoute('comentarios/juegos/:ID/filtroPuntaje/:RATING', 'GET', 'ApiComentariosController', 'getComentariosPorRating');

//$router->addRoute('vuelos/:ID', 'DELETE', 'ApiTaskController', 'eliminarTarea');
//$router->addRoute('vuelos', 'POST', 'ApiTaskController', 'insertarTarea');
//$router->addRoute('vuelos/:ID', 'PUT', 'ApiTaskController', 'actualizarTarea');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
