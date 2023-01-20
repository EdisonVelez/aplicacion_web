<?php
include("../db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM mensajes WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $correo = $row['correo'];
        $nombre_R = $row['nombre_R'];
        $teléfono = $row['teléfono'];
        $asunto = $row['asunto'];
        $cuerpo_M = $row['cuerpo_M'];
    }
}
if (isset($_POST['Actualizar'])) {
    $id = $_GET['id'];
    $correo = $_POST['correo'];
    $nombre_R = $_POST['nombre_R'];
    $teléfono = $_POST['teléfono'];
    $asunto = $_POST['asunto'];
    $cuerpo_M = $_POST['cuerpo_M'];

    $query = "UPDATE mensajes SET correo = '$correo', nombre_R = '$nombre_R, teléfono = '$teléfono', asunto = '$asunto',
     cuerpo_M = '$cuerpo_M' WHERE id = $id";
    mysqli_query($conn, $query);

    $_SESSION['mensaje'] = 'Actualizado correctamente';
    $_SESSION['tipo_de_mensage'] = 'warning';
    header("Location: ../mensaje.php");
}
if (isset($_POST['Cancelar'])) {
    $_SESSION['mensaje'] = 'Cancelado';
    $_SESSION['tipo_de_mensage'] = 'danger';
    header("Location: ../mensaje.php");
}

?>


<?php include("../includes/encabesado.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card.bady">
                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="correo" value="<?php echo $correo ?>" class="form-control" placeholder="correo" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="nombre_R" value="<?php echo $nombre_R ?>" class="form-control" placeholder="nombre_R" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="teléfono" value="<?php echo $teléfono ?>" class="form-control" placeholder="teléfono" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="asunto" value="<?php echo $asunto ?>" class="form-control" placeholder="asunto" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea name="cuerpo_M" rows="2" class="form-control" placeholder="cuerpo_M"><?php echo $cuerpo_M ?></textarea>
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