<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM organización WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $foto = $row['foto'];
        $descripción = $row['descripción'];
        $misión = $row['misión'];
        $visión = $row['visión'];
        $valores = $row['valores'];
    }
}
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $foto = $_POST['foto'];
    $descripción = $_POST['descripción'];
    $misión = $_POST['misión'];
    $visión = $_POST['visión'];
    $valores = $_POST['valores'];

    $query = "UPDATE organización SET nombre = '$nombre', foto = '$foto', descripción = '$descripción', misión = '$misión',
     visión = '$visión', valores = '$valores' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = 'Actualizado correctamente';
    $_SESSION['tipo_de_mensage'] = 'warning';
    header("Location: ../index.php");
}

if (isset($_POST['Cancelar'])) {
    $_SESSION['mensaje'] = 'Cancelado';
    $_SESSION['tipo_de_mensage'] = 'danger';
    header("Location: ../index.php");
}

?>


<?php include("../includes/encabesado.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card.bady">
                <form action="../organización/editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Actualize El Nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="foto" value="<?php echo $foto ?>" class="form-control" placeholder="Actualize La Foto">
                    </div>
                    <div class="form-group">
                        <textarea name="descripción" rows="2" class="form-control" placeholder="Actualize El Descripción"><?php echo $descripción ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="misión" value="<?php echo $misión ?>" class="form-control" placeholder="Actualize la misión">
                    </div>
                    <div class="form-group">
                        <input type="text" name="visión" value="<?php echo $visión ?>" class="form-control" placeholder="Actualize la visión">
                    </div>
                    <div class="form-group">
                        <input type="text" name="valores" value="<?php echo $valores ?>" class="form-control" placeholder="Actualize la valores">
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