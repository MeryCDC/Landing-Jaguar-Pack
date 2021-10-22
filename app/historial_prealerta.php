<?php
    include "php/conexion.php";
    session_start();
    if (!isset($_SESSION['email'])) {
      header("Location: login.php");
    }

    $id_usuario_prealerta = $_POST['txtIdUsuarioHidden'];
    //echo $id_usuario_prealerta;

    $result_cliente = $conexion->query("select * from clientes where id_usuario='$id_usuario_prealerta'");
    $obj_cliente = $result_cliente->fetch_object();
    $id_cliente = $obj_cliente->id;
    $nombre_cliente = $obj_cliente->nombres;
    $apellido_cliente = $obj_cliente->apellidos;
    $nombre_completo = $nombre_cliente . " " . $apellido_cliente;
    //echo $id_cliente;

    $result_prealertas_cliente = $conexion->query("select * from prealertas where id_cliente ='$id_cliente'");  
?>

<?php $Usuario = $_SESSION['email']?>
<?php $title = "Historial Prealertas - JaguarPack"; ?>
<?php require_once "layout/header.php" ?>

<section class="about-section spansistema">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-success p-3 mb-5 bg-white ">
                    <h5 class="card-header"> Pre-Alerta(s) de <?php echo $nombre_completo?></h5>
                    <div class="card text-dark bg-light mb-3 ">
                        <div class="row">
                            <div class="col">
                                <div class="card-body text-justify">

                                    <table class="table table-bordered table-responsive-sm text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Fecha</th>
                                                <th scope="col">Contenido</th>
                                                <th scope="col">Tracking</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($obj_prealerta = $result_prealertas_cliente->fetch_object()) {?>
                                            <?php if($obj_prealerta->status == 0) {?>
                                            <tr class="table-danger">
                                                <?php } ?>
                                                <?php if($obj_prealerta->status == 1) {?>
                                            <tr class="table-success">
                                                <?php } ?>
                                                <?php if($obj_prealerta->status == 2) {?>
                                            <tr class="table-warning">
                                                <?php } ?>
                                                <th scope="row"> <?php echo $obj_prealerta->id ?> </th>
                                                <td> <?php echo $obj_prealerta->fecha_hora ?> </td>
                                                <td> <?php echo $obj_prealerta->contenido ?> </td>
                                                <td> <?php echo $obj_prealerta->tracking ?> </td>
                                                <?php if($obj_prealerta->status == 0) {?>
                                                <td> Pendiente </td>
                                                <?php } ?>
                                                <?php if($obj_prealerta->status == 1) {?>
                                                <td> Entregado </td>
                                                <?php } ?>
                                                <?php if($obj_prealerta->status == 2) {?>
                                                <td> Retenido </td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
                        value="<?php echo $id_usuario_prealerta ?>">
                    <a href="home.php">
                        <button type="button" class="btn btn-outline-dark">Volver</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "layout/footer.php" ?>