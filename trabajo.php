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

    function setApellidos($apellidos)
    {
        $arrayApellidos = explode(" ",$apellidos);
        foreach ($arrayApellidos as $apellido) {
            $letras = str_split($apellido);
            if(ctype_upper($letras [0])){
            for ($i=1; $i < sizeOf($letras); $i++) {    
                if(is_numeric($letras[$i]))
                return false;    
                }
            }else{
            return false;
            }
        }
        $this->apellido = $apellidos;
        return true;

    }
    function setdni($dni){
        $letter = substr($dni, -1);
        $numbers = substr($dni, 0, -1);
      
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numbers%23, 1) == $letter && strlen($letter) == 1 && strlen ($numbers) == 8 ){
         $this->dni = $dni;
            return true;
        }
        return false;
      
    }
    function setCorreo($correo , $confiCorreo){
        if($correo == $confiCorreo){
            $this -> correo = $correo;
            $this -> confiCorreo = $confiCorreo;
            return true;
        }
        return false;
    }

    function setDireccion($direccion)
    {
        $arrayDirecciones = explode(",",trim($direccion));
        if (sizeof($arrayDirecciones) != 6) return false;
        if (!is_numeric($arrayDirecciones[1])) return false;
        if (!is_numeric($arrayDirecciones[3]) || strlen ($arrayDirecciones[3])!= 5) return false;

        $this -> direccion = $direccion;
        return true;
    }
    //limite maximo y minimo de la contraseña
   function setContrasena($contrasena){
    if (strlen($contrasena) >=8 && strlen($contrasena) <= 20 ) {
        $nMayus = 0;$nMinus = 0; $nNumeros = 0; $nEspeciales = 0;
            $letras = str_split($contrasena);
            foreach ($letras as $letra) {
                if (is_numeric($letra))
                {
                    $nNumeros ++;
                } elseif (ctype_upper($letra))
                {
                    $nMayus ++;
                } else if (ctype_lower($letra))
                {
                    $nMinus ++;
                }else
                {
                    $nEspeciales ++;
                }
            }

            if ($nMayus >= 1 && $nMinus >= 1 && $nNumeros >= 2 && $nEspeciales >= 1) 
            {
                
                $this -> contrasena = $contrasena;
                return true;
            }
    }
    return false;
   }
   
}
  $personaRandom = new Persona();
  $personaRandom -> setNombre("Paolo");
  $personaRandom -> setApellidos("Heredia Montoya");
  $personaRandom -> setCorreo("Hola","Hola");
  $personaRandom -> setdni ("65004204V");
  $personaRandom -> setContrasena("12aA/asd");
  $personaRandom -> setDireccion("vía/nombre vía, 654,resto de datos,45632,población,pais");
  var_dump($personaRandom);


?>