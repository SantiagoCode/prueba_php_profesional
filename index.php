<?php

require 'vendor/autoload.php';

// Aquí creamos la variable del request y lo llenamos 
// con lo que envía el usuario
$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

// Aquí extraemos del cuerpo del request 
// las variables que mandamos
$nombre = $request->get("nombre");
$apellido = $request->get("apellido");

// Aquí construimos el objeto JSON y le pasamos como 
// argumento un array php con variables y sus valores
$response = new Symfony\Component\HttpFoundation\JsonResponse([
    'nombre' => $nombre,
    'apellido' => $apellido
]);

// Aquí simplemente retornamos el RESPONSE que creamos 
// en el paso anterior
$response->send();