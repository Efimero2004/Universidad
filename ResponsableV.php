<?php

class ResponsableV
{
    private $numeroEmpleado;
    private $numeroLicencia;
    private $nombre;
    private $apellido;

    public function __construct($numeroEmpleado, $numeroLicencia, $nombre, $apellido)
    {
        $this->numeroEmpleado = $numeroEmpleado;
        $this->numeroLicencia = $numeroLicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    // Setter para el número de empleado
    public function setNumeroEmpleado($numero)
    {
        $this->numeroEmpleado = $numero;
    }

    // Getter para el número de empleado
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    // Setter para el número de licencia
    public function setNumeroLicencia($licencia)
    {
        $this->numeroLicencia = $licencia;
    }

    // Getter para el número de licencia
    public function getNumeroLicencia()
    {
        return $this->numeroLicencia;
    }

    // Setter para el nombre
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Getter para el nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    // Setter para el apellido
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    // Getter para el apellido
    public function getApellido()
    {
        return $this->apellido;
    }

    public function __toString()
    {
        return "Responsable Del Viaje:" . $this->getNombre() . " " . $this->getApellido() . " (ID empleado: " . $this->getNumeroEmpleado() . " ID Licencia: " . $this->getNumeroLicencia() . ")";
    }
    public function __destruct(){}
}
