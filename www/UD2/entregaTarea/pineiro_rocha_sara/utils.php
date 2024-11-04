<?php
session_start();
global $tareas;

$tareas = &$_SESSION['tareas'];
// Array global para almacenar las tareas.
global $tareas;

/**
 * Filtra una cadena eliminando caracteres especiales para evitar anomalías.
 *
 * @param string //$campo Cadena a filtrar
 * @return string //Cadena filtrada.
 */
function filtrarCampo($nombre) {
    // Elimina etiquetas HTML y caracteres especiales.
    return filter_var(trim($nombre), FILTER_SANITIZE_STRING);
}

function filtrarCampoEdad($edad) {
    // Elimina etiquetas HTML y caracteres especiales.
    return filter_var(trim($edad), FILTER_SANITIZE_STRING);
}

/**
 * Verifica que un campo contenga texto válido.
 *
 * @param string $campo Cadena a validar.
 * @return bool True si es válido, false si no.
 */
function esTextoValido($nombre) {
    // Comprueba que no esté vacío y que solo contenga letras y espacios.
    return !empty($nombre) && preg_match('/^[a-zA-Z\s]+$/', $nombre);
}

/**
 * Verifica que un campo contenga una edad válida.
 *
 * @param string $edad Edad a validar.
 * @return bool True si es válida, false si no.
 */
function esEdadValida($edad) {
    // La edad debe ser un número entero entre 1 y 120.
    return filter_var($edad, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 120]]);
}

/**
 * Guarda una nueva tarea en el array global $tareas si los datos son válidos.
 *
 * @param string $nombre Nombre de la persona.
 * @param string $edad Edad de la persona.
 * @return bool True si la tarea se guardó correctamente, false si hubo un error de validación.
 */

function guardarTarea($nombre, $edad) {
    global $tareas;

    // Filtra los campos
    $nombre = filtrarCampo($nombre);
    $edad = filtrarCampoEdad($edad);

    // Verifica la validez de los campos
    if (esTextoValido($nombre) && esEdadValida($edad)) {
        // Genera un ID único para la tarea
        $id = uniqid();

        // Crea el array de la nueva tarea
        $tarea = [
            'id' => $id,
            'nombre' => $nombre,
            'edad' => (int)$edad,
            'estado' => 'pendiente'
        ];

        // Añade la tarea al array global de tareas
        $tareas[] = $tarea;
        return true;
    }

    // Retorna false si la tarea no se pudo guardar
    return false;
}

/**
 * Devuelve el listado de tareas almacenadas.
 *
 * @return array Listado de tareas.
 */
function obtenerTareas() {
    global $tareas;
    return $tareas;
}
