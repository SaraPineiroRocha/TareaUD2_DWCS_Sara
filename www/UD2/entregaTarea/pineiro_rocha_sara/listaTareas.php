<?php
session_start();

// Incluye utils.php para poder usar obtenerTareas()
include 'utils.php';

// Obtiene el listado de tareas
$tareas = obtenerTareas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
//Incluye el header del inicio
         include './header.php';
      ?>
    <div class="container-fluid">
        <div class="row">
        <?php
//Incluye el menú del inicio
         include './menu.php';
      ?>
    <div class="container mt-5">
        <h1>Lista de Tareas</h1>
        
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>Identificador</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($tareas)): ?>
                        <?php for ($i = 0; $i < count($tareas); $i++): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($tareas[$i]['id']); ?></td>
                                <td><?php echo htmlspecialchars($tareas[$i]['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($tareas[$i]['estado']); ?></td>
                            </tr>
                        <?php endfor; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">No hay tareas registradas</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
