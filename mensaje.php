<?php include("db.php") ?>
<?php include("includes/encabesado.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['mensaje'])) { ?>
                <div class="alert alert-<?= $_SESSION['tipo_de_mensage'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensaje'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php session_unset();
            } ?>
            <div class="card card-bady">
                <form action="mensajes/guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="correo" class="form-control" placeholder="correo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre_R" class="form-control" placeholder="nombre_R" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="teléfono" class="form-control" placeholder="teléfono" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="asunto" class="form-control" placeholder="asunto" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="cuerpo_M" rows="2" class="form-control" placeholder="cuerpo_M"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Guargar mensaje">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Nombres del Remitente</th>
                        <th>Teléfono</th>
                        <th>Asunto</th>
                        <th>Cuerpo del Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM mensajes";
                    $result_mensajes = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_mensajes)) { ?>
                        <tr>
                            <td><?php echo $row['correo'] ?></td>
                            <td><?php echo $row['nombre_R'] ?></td>
                            <td><?php echo $row['teléfono'] ?></td>
                            <td><?php echo $row['asunto'] ?></td>
                            <td><?php echo $row['cuerpo_M'] ?></td>
                            <td>
                                <a href="mensajes/editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="mensajes/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>

                    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include("includes/pie.php"); ?>