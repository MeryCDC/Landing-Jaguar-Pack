<?php
    include "php/conexion.php";
    session_start();
    if (!isset($_SESSION['email'])) {
      header("Location: login.php");
    } else{
        $id_usuario = $_SESSION['id_usuario'] ;
    }

    $result_cliente = $conexion->query("select * from clientes where id_usuario='$id_usuario'");
    $obj_cliente = $result_cliente->fetch_object();
    $id_cliente = $obj_cliente->id;
    $nombre_cliente = $obj_cliente->nombres;
    $apellido_cliente = $obj_cliente->apellidos;
    $nombre_completo = $nombre_cliente . " " . $apellido_cliente;
    $result_prealertas_cliente = $conexion->query("select * from prealertas where id_cliente ='$id_cliente'");  
?>

<?php $Usuario = $_SESSION['email']?> 
<?php $title = "Historial Prealertas - JaguarPack"; ?>
<?php require_once "layout/header.php" ?>

<section class="about-section spansistema">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-dark bg-light mb-3">
                    <div class="card-header text-center">
                        <b><i>Prealerta(s) de: </i></b> <?php echo $nombre_completo ?> <br>
                        <a href="#" class="fa fa-question-circle"
                                    data-original-title="Este es el número de identificación de tu casillero virtual." 
                                    data-placement="left" data-toggle="tooltip"></a>
                        <b><i>Núm. Casillero:</i></b> JP<?php echo $id_usuario ?>
                    </div>
                    <div class="card-body text-justify">
                        <table class="table table-responsive-sm align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Tracking</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">Cobro </th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($obj_prealerta = $result_prealertas_cliente->fetch_object()) {?>
                                <th scope="row"> <?php echo $obj_prealerta->id ?> </th>
                                <td> <?php echo date( "d-m-Y", strtotime($obj_prealerta->fecha_hora))?> </td>
                                <td> <?php echo $obj_prealerta->contenido ?> </td>
                                <td> <?php echo $obj_prealerta->tracking ?> </td>
                                <?php if($obj_prealerta->status == 0) {?>
                                    <td class="status"><span class="danger">Pendiente</span></td>
                                <?php } ?>
                                <?php if($obj_prealerta->status == 1) {?>
                                    <td class="status"><span class="active">Entregado</span></td>
                                <?php } ?>
                                <?php if($obj_prealerta->status == 2) {?>
                                    <td class="status"><span class="waiting">Retenido</span></td>
                                <?php } ?>
                                <?php if($obj_prealerta->status == 5) {?>
                                    <td class="status"><span class="info">Comprobante Adjuntado</span></td>
                                <?php } ?>
                                <td> $ </td>
                                <td> <a href="prealerta_detalle.php?id=<?php echo $obj_prealerta->id ?>" class="btn btn-dark">Ver detalles</a> </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" id="txtIdUsuarioPrealerta" name="txtIdUsuarioPrealerta"
                            value="<?php echo $id_usuario_prealerta ?>">
                        <a href="home.php">
                            <button type="button" class="btn btn-outline-dark">Volver</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "layout/footer.php" ?>