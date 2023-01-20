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
                <form action="personal/guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombres" class="form-control" placeholder="nombres" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" class="form-control" placeholder="apellidos" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cedula" class="form-control" placeholder="cedula" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" class="form-control" placeholder="telefono" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="dirección" rows="2" class="form-control" placeholder="dirección"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Guargar Persona">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM personal";
                    $result_personal = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_personal)) { ?>
                        <tr>
                            <td><?php echo $row['nombres'] ?></td>
                            <td><?php echo $row['apellidos'] ?></td>
                            <td><?php echo $row['cedula'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td><?php echo $row['dirección'] ?></td>
                            <td>
                                <a href="personal/editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="personal/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
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