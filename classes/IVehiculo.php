<?php

interface IVehiculo{
   
    public function setRuta(Ruta $ruta);
    public function setViajero(IUsuario $usuario);

}