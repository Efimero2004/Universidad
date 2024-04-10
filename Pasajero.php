<?php
class Pasajero {
    private $nombre;
    private $apellido;
    private $numeroDocumento;
    private $telefono;

    public function __construct($nombre, $apellido, $numeroDocumento, $telefono) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroDocumento = $numeroDocumento;
        $this->telefono = $telefono;
    }

    // Getters y setters para nombre, apellido y teléfono
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento($dni){
        $this->numeroDocumento = $dni;
    }

    public function __toString() {
        return "pasajero:" . $this->getNombre() . " " . $this->getApellido() . " (DNI: " . $this->getNumeroDocumento() . ")";
    }
    public function __destruct(){}
}