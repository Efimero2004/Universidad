<?php
// Script testViaje.php
include "Viaje.php";

echo "Bienvenido a Viaje Feliz\n";
$destino = readline("escribe el DESTINO de tu viaje:");
$cantPasajeros = (int)readline("Escriba la CANTIDAD en numero de pasajeros:");
$viajeFeliz = new Viaje('V001', $destino, $cantPasajeros);
while (true) {
    echo "\nMenú:\n";
    echo "1. Agregar pasajero\n";
    echo "2. Agregar Responsable del Viaje\n";
    echo "3. Mostrar pasajeros\n";
    echo "4. Modificar un pasajero\n";
    echo "5. Salir\n";
    $opcion = readline("Ingrese una opción: ");

    switch ($opcion) {
        case '1':
            $nombre = readline("Nombre del pasajero: ");
            $apellido = readline("Apellido del pasajero: ");
            $dni = readline("Número de documento del pasajero: ");
            $telefono = readline("numero de telefono:");
            $pasajero = new Pasajero($nombre, $apellido, $dni, $telefono);
            $viajeFeliz->agregarPasajero($pasajero);
            break;
        case '2':
            echo "escribe los datos del Responsable del viaje:\n";
            $nombre = readline("Nombre: ");
            $apellido = readline("Apellido: ");
            $nroLicencia = readline("Número de Licencia: ");
            $nroEmpleado = readline("numero de Empleado:");
            $ResponsableViaje = new ResponsableV($nroEmpleado, $nroLicencia, $nombre, $apellido);
            $viajeFeliz->setResponsableV($ResponsableViaje);
        case '3':
            $viajeFeliz->mostrarPasajeros();
            break;
        case "4":
            $dni = readline("Número de documento del pasajero a modificar: ");
            $viajeFeliz->modificarPasajero($dni);
            break;
        case "5":
            echo "¡Hasta luego!\n";
            exit;
        default:
            echo "Opción inválida. Intente nuevamente.\n";
    }
}
