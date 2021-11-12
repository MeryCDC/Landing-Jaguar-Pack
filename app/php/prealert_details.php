<?php
require_once("conexion.php");
if(isset($id_prealerta)) {
    $id = $id_prealerta;

    $result = $conexion->query(" select * from prealertas where id='$id' ");
    $obj = $result->fetch_object();

    $idPrealerta = $obj -> id;
    $peso = $obj -> peso;
    $alto = $obj -> alto;
    $largo = $obj -> largo;
    $ancho = $obj -> ancho;

    $valor = $obj -> valor;
    $contenido = $obj -> contenido;
    $origen = $obj -> peso;
    $seguro = $obj -> alto;
    $porcentaje_seguro = $obj -> largo;
    $tracking = $obj -> tracking;
    $fechahora = $obj -> fecha_hora;
    $timeStamp = date( "d/m/Y h:i A", strtotime($fechahora));


    if($tracking == "")
    {
        $tracking = "No tiene.";
    }
    

    $status = $obj -> status;

    $result_comprobantes = $conexion->query(" select * from comprobantes where idPrealerta='$id' ");
    $comprobante = $result_comprobantes->fetch_object();

    $ruta = "php/";
    $ruta = $ruta . $comprobante -> ruta;

}

?>