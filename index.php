<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto CRUD-PHP</title>
    <!-- css only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9bf893eeb9.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-3">Proyecto CRUD</h1>
    <div class="container-fluid row">
        <form class="col-4 p3">
            <h3 class="text-center secondary">Regisro Datos Personales</h3>
            <div class="mb-1">
                <label for="examplenEmail1" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label">apellido</label>
                <input type="text" name="apellido" class="form-control">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label">CURP</label>
                <input type="text" name="curp" class="form-control">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label">Fecha Nacimiento</label>
                <input type="date" name="fechaNaci" class="form-control">
            </div>
            <div class="mb-1">
                <label for="exampleInputEmail" class="form-label">Correo Electronico</label>
                <input type="email" name="correo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-registro">Registrar</button>
        </form> 
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th class="col">ID</th>
                        <th class="col">Nombre</th>
                        <th class="col">Apellido</th>
                        <th class="col">CURP</th>
                        <th class="col">fecha de Nacimiento</th>
                        <th class="col">Correo</th>
                        <th class="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "Modelo/conexion.php";
                        $sql = $conexion -> query("Select * from datos_persona");
                                
                        while($datos = $sql->fetch_object()){?>
                            <tr>
                                <td><?= $datos->id_persona ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->apellido ?></td>
                                <td><?= $datos->curp ?></td>
                                <td><?= $datos->fecha_nac ?></td>
                                <td><?= $datos->correo ?></td>

                                <td>
                                    <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--  -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>