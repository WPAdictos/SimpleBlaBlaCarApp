<?php

//Clase que representa un Usuario
class Usuario implements IUsuario
{
    private $nombre;
    private $dni;
    private $tipo;

    function __construct($nombre, $dni, $tipo)
    {
        $this->nombre=$nombre;
        $this->dni=$dni;
        $this->tipo=$tipo;
    }

    private function verTipo(int $tipo)
    {
        switch ($tipo) {
            case IUsuario::TIPOPASAJERO["conductor"]:
                return "Conductor";
            case  IUsuario::TIPOPASAJERO["viajero"]:
                return "Viajero";
            default:
                return null;
        }
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function __toString()
    {
        return " Usuario con nombre = $this->nombre y DNI = $this->dni y de tipo = " . $this->verTipo($this->tipo) . "<br>";
    }
}
