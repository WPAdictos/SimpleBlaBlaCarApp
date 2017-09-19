<?php

//Clase que representa una ruta
// ver coordenadas http://www.coordenadas-gps.com/
class Ruta{
   
    private $origen;  //longitud , latitud, nombre
    private $destino; //longitud , latitud, nombre

    function __construct()
    {
      $this->origen= new stdClass();
      $this->destino= new stdClass();
    }

    // Formato stdClass
    public function setRuta(stdClass $origen, stdClass $destino)
    {
        $this->origen->longitud=$origen->longitud;
        $this->origen->latitud=$origen->latitud;
        $this->origen->nombre=$origen->nombre;

        $this->destino->longitud=$destino->longitud;
        $this->destino->latitud=$destino->latitud;
        $this->destino->nombre=$destino->nombre;
    }
}