<?php


$action = $_GET['controller'];    
$action = explode("@",$action);


$controllerName=$action[0];
$method=$action[1];

//echo $controllerName;

$fileName = __DIR__."/controller/" . $controllerName . ".php";



include $fileName;



$controller = new $controllerName();


$data=null;
if($_SERVER['REQUEST_METHOD'] == 'GET')$data=$controller->$method($_GET);
if($_SERVER['REQUEST_METHOD'] == 'POST')$data=$controller->$method($_POST);





if($data){
	header("Content-Type: application/json");
	echo $data; 
}

?>