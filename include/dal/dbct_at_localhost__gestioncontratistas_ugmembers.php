<?php
$dalTablegestioncontratistas_ugmembers = array();
$dalTablegestioncontratistas_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablegestioncontratistas_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestioncontratistas_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablegestioncontratistas_ugmembers["UserName"]["key"]=true;
$dalTablegestioncontratistas_ugmembers["GroupID"]["key"]=true;
$dalTablegestioncontratistas_ugmembers["Provider"]["key"]=true;

$dal_info["dbct_at_localhost__gestioncontratistas_ugmembers"] = &$dalTablegestioncontratistas_ugmembers;
?>