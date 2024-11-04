<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2. Tarea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
         include './header.php';
      ?>
    <div class="container-fluid">
        <div class="row">
        <?php
         include './menu.php';
      ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h2>Formulario</h2>
                </div>
                <div class="container">
                    <form class="mb-5" action="./nueva.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" name="nombre">Nombre:</label>
                            <input class="form-control" type="text" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" name="edad">Edad:</label>
                            <input class="form-control" type="number" name="edad">
                        </div>
                        <label for="provincia">Selecciona tu provincia:</label>
                        <select class="form-select" name="provincia">
                        <option>A Coruña</option>
                        <option>Lugo</option>
                        <option>Ourense</option>
                        <option>Pontevedra</option>
                        </select>
                        <label for="oficio">¿A qué te dedicas?:</label>
                        <select class="form-select" name="oficio">
                        <option>Profesor/a</option>
                        <option>Arquitecto/a</option>
                        <option>Abogado/a</option>
                        <option>Diseñador/a</option>
                        <option>Deportista</option>
                        <option>Otro</option>
                        </select>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <?php
         include './footer.php';
      ?>
</body>
</html>