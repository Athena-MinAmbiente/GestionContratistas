<?php
$dalTablenomina_periodo = array();
$dalTablenomina_periodo["nomina_id"] = array("type"=>3,"varname"=>"nomina_id", "name" => "nomina_id", "autoInc" => "1");
$dalTablenomina_periodo["nomina_periodo"] = array("type"=>200,"varname"=>"nomina_periodo", "name" => "nomina_periodo", "autoInc" => "0");
$dalTablenomina_periodo["nomina_estado"] = array("type"=>16,"varname"=>"nomina_estado", "name" => "nomina_estado", "autoInc" => "0");
$dalTablenomina_periodo["nomina_fechalimite"] = array("type"=>135,"varname"=>"nomina_fechalimite", "name" => "nomina_fechalimite", "autoInc" => "0");
$dalTablenomina_periodo["nomina_id"]["key"]=true;

$dal_info["dbct_at_localhost__nomina_periodo"] = &$dalTablenomina_periodo;
?>