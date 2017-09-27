<?php

//Clase que representa una empresa
class Empresa implements IUsuario{

    private $nombre;
    private $cif;
    private $razonSocial;

    function __construct($nombre, $cif, $razonSocial)
    {
        $this->nombre=$nombre;
        $this->cif=$cif;
        $this->razonSocial=$razonSocial;
    }

    function __get($prop)
    {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }else return null;
    }
    
    function __set($prop,$valor){
        if (property_exists($this,$prop))
           $this->$prop=$valor;
    }

}