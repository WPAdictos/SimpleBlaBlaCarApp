<?php

//Clase que representa un vehiculo
class Vehiculo implements IVehiculo{
    private $plazasMax;   //int incluido el conductor
    private $titular;     //Usuario conductor
    private $modelo;      //string
    private $matricula;   //string
    private $viajeros;    //array de usuarios viajeros (no incluido el conductor)
    private $ruta;        //Ruta

    function __construct($modelo,$matricula,$plazas)
    {
       $this->plazasMax=$plazas;
       $this->modelo=$modelo;
       $this->matricula=$matricula;
       $this->viajeros=array();
    }

    public function setRuta(Ruta $ruta){
      $this->ruta=$ruta;
    }

    public function getRuta(){
      return $this->ruta;
    }
    
    public function setViajero(IUsuario $usuario)
    {
     //Comprobamos si el usuario es conductor o viajero
     //Al conductor lo guardamos en $titular y a los viajeros
     // se les lleva al array viajeros, pero sin superar el limite MAx de plazas
     $insertado=false;
     if($usuario->getTipo() == IUsuario::TIPOPASAJERO["conductor"]){
       $this->titular=$usuario;
       $insertado=true;
     }else{
       if((count($this->viajeros)-1) < $this->plazasMax ){  //Solo metemos al usuario si hay plazas disponibles
         array_push($this->viajeros, $usuario);
         $insertado=true;
        }
     }
     return $insertado;
    }

    public function getViajeros(){
      return $this->viajeros;
    }

    public function  __toString(){
      return "Vehiculo con matricula = {$this->matricula} Modelo = {$this->modelo} su titular se llama =  {$this->titular->getNombre()} con Origen = {$this->ruta->getRuta('origen')->nombre} y con Destino = {$this->ruta->getRuta('destino')->nombre}  <br>";
    }
}