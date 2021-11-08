<?php
define('DB_HOST_JP','localhost'); 
define('DB_USER_JP','root');
define('DB_PASS_JP','');
define('DB_NAME_JP','control_jaguar');
 
try
{
    $connect_jp = new PDO("mysql:host=".DB_HOST_JP.";dbname=".DB_NAME_JP ,DB_USER_JP , DB_PASS_JP, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}

$track = $_POST['txtTrack']; //Se recibe de la propiedad "data" de JQuery

if(!empty($track))
{
    $sql = "call Rastreo(:casillero);";
    $query1 = $connect_jp -> prepare($sql); 
    $query1 -> bindParam(':casillero', $track);
    $query1 -> execute(); 
    $resultadoSP = $query1 -> fetchAll(PDO::FETCH_OBJ); 

    echo json_encode($resultadoSP);
}else{
    echo json_encode(array('success' => 0));
}

?>