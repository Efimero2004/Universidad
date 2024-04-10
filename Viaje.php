<?php
include "Pasajero.php";
include "ResponsableV.php";
class Viaje
{

    private $codigo;
    private $destino;
    private $maxPasajeros;
    private $pasajeros = [];
    private $responsableV;


    public function __construct($codigo, $destino, $maxPasajeros)
    {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->maxPasajeros = $maxPasajeros;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }
    public function getDestino()
    {
        return $this->destino;
    }

    public function setMaxPasajeros($maxPasajeros)
    {
        $this->maxPasajeros = $maxPasajeros;
    }
    public function getMaxPasajeros()
    {
        return $this->maxPasajeros;
    }

    public function setResponsableV(ResponsableV $responsableV)
    {
        $this->responsableV = $responsableV;
        echo "Responsable agregado correctamente.\n";
    }
    public function getResponsableV()
    {
        return $this->responsableV;
    }

    public function getPasajeros()
    {
        return $this->pasajeros;
    }

    public function modificarPasajero($dniPasajero)
    {
        $contador = 0;
        foreach ($this->getPasajeros() as $pasajeroEnObjeto) {
            $dni = $pasajeroEnObjeto->getNumeroDocumento();
            $contador++;

            if ($dni == $dniPasajero) {
                $indice = $contador;
            }
        }
        echo "Pasajero encontrado!";
        $nombre = readline("Modifica el Nombre: ");
        $apellido = readline("Modifica el Apellido: ");
        $telefono = readline("Modifica el numero de telefono:");
        $pasajero = new Pasajero($nombre, $apellido, $dni, $telefono);
        $this->pasajeros[$indice] = $pasajero;
    }


    public function agregarPasajero(Pasajero $pasajero)
    {
        if (count($this->getPasajeros()) < $this->maxPasajeros) {
            $estaRepetido = false;                                //esta variable cuando un pasajero esta repetido se setea en true
            foreach ($this->getPasajeros() as $pasajeroEnObjeto) {
                $dni = $pasajeroEnObjeto->getNumeroDocumento();


                if ($dni == $pasajero->getNumeroDocumento()) {
                    $estaRepetido = true;
                }
            }

            if (!$estaRepetido) {
                $this->pasajeros[] = $pasajero;
                echo "Pasajero agregado correctamente.\n";
            } elseif ($estaRepetido) {
                echo "¡El pasajero YA ESTA EN EL VIAJE!!!\n";
            }
        } else {
            echo "se alcanzo el MAXIMO de Pasajeros!\n";
            echo "NO se AÑADIO este ultimo Pasajero.\n";
        }
    }

    public function mostrarPasajeros()
    {
        echo "Pasajeros del viaje:\n";
        foreach ($this->pasajeros as $pasajero) {
            echo "- " . $pasajero . "\n";
        }
    }
    public function __destruct()
    {
    }
}
