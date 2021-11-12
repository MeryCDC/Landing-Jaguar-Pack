<?php
require_once("conexion.php");

if(isset($_FILES["exampleFormControlFile1"]))
{
    $id = $_POST["prealertaId"];
    $file = $_FILES["exampleFormControlFile1"];
    $file_name = $file["name"]; 

    $find = '.';

    $posicion = strpos($file_name, $find);
    $extension_archivo = substr($file_name,$posicion, strlen($file_name));
    $DateAndTime = date('m-d-Y h-i-s');  
    //echo "The current date and time are $DateAndTime.";
    $file["name"] = "prealerta_". $DateAndTime . "_" . $id . $extension_archivo;
    $file_name  = $file["name"]; 
    $ruta_tmp = "uploads/". $file_name;
    //echo $ruta_tmp  . "<br>";
    $res = $conexion->query("select * from comprobantes where idPrealerta='$id'");
    $obj = $res->fetch_object();
    //echo $res->num_rows;
    $size = $_FILES["exampleFormControlFile1"]["size"];
    if( mysqli_num_rows($res) > 0 ){
        if($size <= 0 )
        {           
           header("location:javascript://history.go(-1)");
        }
        else
        {
            $imagen_eliminar = $obj->ruta;
            unlink($imagen_eliminar);
            $conexion->query("UPDATE comprobantes SET ruta='$ruta_tmp' WHERE idPrealerta='$id' ");
            session_start();
            $_SESSION['comprobante']="¡Comprobante cambiado correctamente!";
            header("Location: ../prealerta_detalle.php?id=".$id);
        }
    }
    else
    {
        if($size <= 0 )
        {
           header("location:javascript://history.go(-1)");
        }   
        else
        {
            $conexion->query("insert into comprobantes(ruta, idPrealerta) values ('$ruta_tmp','$id') ");
            $conexion->query("update prealertas SET status=5 WHERE id='$id' ");
            session_start();
            $_SESSION['comprobante']="¡Comprobante agregado correctamente!";
            header("Location: ../prealerta_detalle.php?id=".$id);            
        }
    }
    $file_type = $file["type"];
    $allowed_type = array("image/jpg", "image/jpeg", "image/png");
    if(in_array($file_type, $allowed_type))
    {
        //header("Location: ../home.php");
    }
    //Crear directorio
    if(!is_dir("uploads"))
    {
        mkdir("uploads", 0777);
    }
    move_uploaded_file($file["tmp_name"], "uploads/". $file_name);
}
else
{
    //header("Location: ../prealerta_detalle.php");
}

?>

