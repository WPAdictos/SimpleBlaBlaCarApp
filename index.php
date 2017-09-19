<?php
require_once("./autoload.php");

$user= new Usuario("Pepe","2727773B",IUsuario::TIPOPASAJERO["viajero"]);
$user2= new Usuario("Pepe2","2727773B",IUsuario::TIPOPASAJERO["viajero"]);
$user3= new Usuario("Pepe3","2727773B",IUsuario::TIPOPASAJERO["viajero"]);
$user4= new Usuario("Luis","2727773B",IUsuario::TIPOPASAJERO["conductor"]);

$coche= new Vehiculo("Seat 600", "BI-345-BN", 3);

$coche->setViajero($user2);
$coche->setViajero($user3);
$coche->setViajero($user4);
$coche->setViajero($user);

//Rutas
$ruta_origen=new stdClass();
$ruta_origen->longitud="-122321443234";
$ruta_origen->latitud="0.2347832748234";
$ruta_origen->nombre="Bilbao";

$ruta_destino=new stdClass();
$ruta_destino->longitud="-1.435435";
$ruta_destino->latitud="0.98966";
$ruta_destino->nombre="Madrid";

$coche->setRuta(new Ruta($ruta_origen, $ruta_destino));

echo "<pre>";
var_dump($coche);