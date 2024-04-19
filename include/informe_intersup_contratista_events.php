<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_informe_intersup_contratista  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeProcessList"]=true;


		$this->events["BeforeEdit"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		DB::Exec("CALL ContracProcess");

// ACTUALIZA CORREO DEL SUPERVISOR

$sql = DB::prepareSQL("UPDATE
	dbct.informe_intersup
	INNER JOIN
	dbct.interventor_interno
	ON 
		dbct.informe_intersup.id_cont_fk = dbct.interventor_interno.id_cont_fk AND
		dbct.informe_intersup.inf_intersup = dbct.interventor_interno.documento_id
		SET
	dbct.informe_intersup.inf_supervisoremail = dbct.interventor_interno.sup_mailnot
WHERE
	dbct.interventor_interno.sup_status = 1;");
DB::Exec( $sql );


$pageObject->hideItem("grid_edit", $recordId); 
$pageObject->hideItem("GenInfCont", $recordId); 
// estado de la solicitud
if ($data['qty_inf'] == $data['qty_inf_compare']){
        $pageObject->showItem("grid_edit", $recordId);
        $pageObject->showItem("GenInfCont", $recordId);  
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		//**********  Send email with new data  ************
$mailtobcc = $_SESSION['EmailBCC'];

$email=$values['inf_supervisoremail'];
$from=$_SESSION['correosmtp'];
$fromName="Informe generado por el contratista";
$msg="<p>Hola, <strong>".$values['inf_nombre'].",".$values['inf_nombrecontratista']."</strong> ha finalizado la etapa de  dilegenciamiento de informe de supervisión con radicado <strong>".$values['inf_hash']."</strong>,es el momento de revisar las obligaciones específicas, elaborar y firmar el informe de supervisión.<br />
  <p><a href='".$_SESSION['GURLHOME']."' target='_blank'>Ingresar al  sitio Web</a><br />
  Cordialmente,<br />
  <strong>".$_SESSION['GModulo']."</strong><br />
  ".$_SESSION['GEntidad']."</p>";
$subject=".:: Informe de contratista | radicado:".$values['inf_hash'];

$ret=runner_mail(array('to' => $email, 'bcc' => $mailtobcc, 'subject' => $subject, 'htmlbody' => $msg, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList($pageObject)
{

		IF($_SESSION["updated"] == true){
	$pageObject->setProxyValue("updated",true);
	unset($_SESSION["updated"]);
	$pageObject->stopPRG = true;
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		if ($_SESSION["updated"] == true) {
    $pageObject->setProxyValue("updated", true);
    unset($_SESSION["updated"]);
    $pageObject->stopPRG = true;
    $return = false;
} else {
    $_SESSION["updated"] = true;
    //$_SESSION["addede"] = true;
    return true;
}

;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
