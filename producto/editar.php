<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM producto WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $código = $row['código'];
        $descripción = $row['descripción'];
        $foto = $row['foto'];
    }
}
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $código = $_POST['código'];
    $descripción = $_POST['descripción'];
    $foto = $_POST['foto'];

    $query = "UPDATE producto SET nombre = '$nombre', código = '$códico', descripción = '$descripción',
     foto = '$foto' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = 'Actualizado correctamente';
    $_SESSION['tipo_de_mensage'] = 'warning';
    header("Location: ../producto.php");
}
if (isset($_POST['Cancelar'])) {
    $_SESSION['mensaje'] = 'Cancelado';
    $_SESSION['tipo_de_mensage'] = 'danger';
    header("Location: ../producto.php");
}

?>


<?php include("../includes/encabesado.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card.bady">
                <form action="../producto/editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="nombre" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="código" value="<?php echo $código ?>" class="form-control" placeholder="código" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="descripción" rows="2" class="form-control" placeholder="descripción"><?php echo $descripción ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="foto" value="<?php echo $foto ?>" class="form-control" placeholder="foto" autofocus>
                    </div>
                    <button class="btn btn-success" name="Actualizar">
                        Actualizar
                    </button>
                    <button class="btn btn-danger" name="Cancelar">
                        Cancelar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../includes/pie.php") ?>