<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Escuela de Informatica</title>
</head>
<style>
    h1{
        background-color: #2ecc71;
        text-align: center;
        font-size: x-large;
        font-family: Arial, Helvetica, sans-serif;
        padding: 5px;
        border-radius: 5px;
        }

</style>
<body>
    <h1 class="display-3">ESCUALE DE INFORMATICA Y TECNOLOGIA</h1>
    <div class="container">
        <h3 class="text-center">Formulario de registros de cursos</h3>
        <div class="row justify-content-center">
            <form action="/parcial_cornelio/controladores/datos/estado_conexion.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col-3">
                        <label for="id_curso">Codigo del curso</label>
                        <input type="number" name="id_curso" id="id_curso" class="form-control" required>
                    </div>
                    <div class="col-5">
                        <label for="fase_actual">Face actual del curso</label>
                        <input type="text" name="fase_actual" id="fase_actual" class="form-control" required>
                    </div>                    
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nome_curso">Nombre del curso</label>
                        <input type="text" name="nome_curso" id="nome_curso" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                        <label for="nombre_instrctor">Nombre del Instructor</label>
                        <input type="text" name="nombre_instrctor" id="nombre_instrctor" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="apellido_instructor">Apellido del Instructor</label>
                        <input type="text" name="apellido_instructor" id="apellido_instructor" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="creditos_curso">Creditos del curso</label>
                        <input type="number" name="creditos_curso" id="creditos_curso" class="form-control"required>
                    </div>
                    <div class="col-6">
                        <label for="cantidad_periodo">Cantidad de periodo</label>
                        <input type="number" name="cantidad_periodo" id="cantidad_periodo" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-outline-success w-100">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>