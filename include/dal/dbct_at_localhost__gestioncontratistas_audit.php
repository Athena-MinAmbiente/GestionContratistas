<?php
$dalTablegestioncontratistas_audit = array();
$dalTablegestioncontratistas_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablegestioncontratistas_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime", "autoInc" => "0");
$dalTablegestioncontratistas_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablegestioncontratistas_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTablegestioncontratistas_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table", "autoInc" => "0");
$dalTablegestioncontratistas_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action", "autoInc" => "0");
$dalTablegestioncontratistas_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablegestioncontratistas_audit["id"]["key"]=true;

$dal_info["dbct_at_localhost__gestioncontratistas_audit"] = &$dalTablegestioncontratistas_audit;
?>