<?php
//clase persona
class Persona{
    private $nombre;
    private $apellido;
    private $direccion;
    private $correo;
    private $confiCorreo;
    private $dni;
    private $contrasena;
//getters
public function getNombre(){
    return $this->nombre;
}
public function getApellido(){
    return $this->apellido;
}
public function getDireccion(){
    return $this->direccion;
}
public function getCorreo(){
    return $this->correo;
}
public function getDni(){
    return $this->dni;
}
public function getContrasena(){
    return $this->contrasena;
}
//setters
 
 function setNombre($nombre){
    $letras = str_split($nombre);
    if(ctype_upper($letras [0])){
    for ($i=1; $i < sizeOf($letras); $i++) {    
        if(is_numeric($letras[$i]))
        return false;    
        }
        $this->nombre = $nombre;
        return true;
      }
      return false;
    }
  }
  $personaRandom = new Persona();
  $personaRandom -> setNombre("Paolo");
  var_dump($personaRandom);


?>