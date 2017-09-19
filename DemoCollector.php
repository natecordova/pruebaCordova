<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("select * from museo"); 




       
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id'},$c{'nombre'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }
function showDemo($id) {
    $rows = self::$db->getRows("SELECT * FROM museo where id= ? ", array ("{$id}"));        
$ObjDemo= new Demo($rows[0]{'id'},$rows[0]{'nombre'});  
    
    return $ObjDemo;        
  }
function UpdateDemo($id,$nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.museo SET nombre = ? where id= ? ", array ("{$nombre}","{$tipo}","{$fechaNacimiento}",$id));

}
function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.museo where id= ? ", array ("{$id}"));

}

function createDemo($nombre){
	$insertrow =self::$db->insertRow("INSERT INTO public.museo(nombre) VALUES (?) ", array("{$nombre}"));



	





}




}
?>

