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
                <form action="organización/guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre_organizacion" class="form-control" placeholder="nombre_organizacion" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="foto" class="form-control" placeholder="foto" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripción" rows="2" class="form-control" placeholder="descripción"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="misión" class="form-control" placeholder="misión" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="visión" class="form-control" placeholder="visión" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="valores" class="form-control" placeholder="valores" autofocus>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="Guardar" value="Guargar organizacion">
                </form>
            </div>

        </div>
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>nombre_organizacion</th>
                        <th>foto</th>
                        <th>descripción</th>
                        <th>misión</th>
                        <th>visión</th>
                        <th>valores</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM organización";
                    $result_organización = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result_organización)) { ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['foto'] ?></td>
                            <td><?php echo $row['descripción'] ?></td>
                            <td><?php echo $row['misión'] ?></td>
                            <td><?php echo $row['visión'] ?></td>
                            <td><?php echo $row['valores'] ?></td>
                            <td>
                                <a href="organización/editar.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="organización/eliminar.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
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