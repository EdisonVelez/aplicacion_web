<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM personal WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombres = $row['nombres'];
        $apellidos = $row['apellidos'];
        $cedula = $row['cedula'];
        $telefono = $row['telefono'];
        $dirección = $row['dirección'];
    }
}
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $dirección = $_POST['dirección'];

    $query = "UPDATE personal SET nombres = '$nombres', apellidos = '$apellidos', cedula = '$cedula', telefono = '$telefono',
     dirección = '$dirección' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = 'Actualizado correctamente';
    $_SESSION['tipo_de_mensage'] = 'warning';
    header("Location: ../personal.php");
}
if (isset($_POST['Cancelar'])) {
    $_SESSION['mensaje'] = 'Cancelado';
    $_SESSION['tipo_de_mensage'] = 'danger';
    header("Location: ../personal.php");
}

?>


<?php include("../includes/encabesado.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card.bady">
                <form action="../personal/editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombres" value="<?php echo $nombres ?>" class="form-control" placeholder="nombres" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" value="<?php echo $apellidos ?>" class="form-control" placeholder="apellidos" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cedula" value="<?php echo $cedula ?>" class="form-control" placeholder="cedula" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" value="<?php echo $telefono ?>" class="form-control" placeholder="telefono" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="dirección" rows="2" class="form-control" placeholder="dirección"><?php echo $dirección ?></textarea>
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