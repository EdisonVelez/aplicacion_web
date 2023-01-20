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
                <form action="producto/guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="código" class="form-control" placeholder="código" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripción" rows="2" class="form-control" placeholder="descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="foto" class="form-control" placeholder="foto" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Guargar Producto">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre de Producto</th>
                        <th>código</th>
                        <th>descripción de Producto</th>
                        <th>foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM producto";
                    $result_personal = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_personal)) { ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['código'] ?></td>
                            <td><?php echo $row['descripción'] ?></td>
                            <td><?php echo $row['foto'] ?></td>
                            <td>
                                <a href="producto/editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="producto/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
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