<?php
$tdatacert_master_1 = array();
$tdatacert_master_1[".searchableFields"] = array();
$tdatacert_master_1[".ShortName"] = "cert_master_1";
$tdatacert_master_1[".OwnerID"] = "sol_user";
$tdatacert_master_1[".OriginalTable"] = "cert_master";


$tdatacert_master_1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacert_master_1[".originalPagesByType"] = $tdatacert_master_1[".pagesByType"];
$tdatacert_master_1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacert_master_1[".originalPages"] = $tdatacert_master_1[".pages"];
$tdatacert_master_1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacert_master_1[".originalDefaultPages"] = $tdatacert_master_1[".defaultPages"];

//	field labels
$fieldLabelscert_master_1 = array();
$fieldToolTipscert_master_1 = array();
$pageTitlescert_master_1 = array();
$placeHolderscert_master_1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscert_master_1["Spanish"] = array();
	$fieldToolTipscert_master_1["Spanish"] = array();
	$placeHolderscert_master_1["Spanish"] = array();
	$pageTitlescert_master_1["Spanish"] = array();
	$fieldLabelscert_master_1["Spanish"]["cert_califcumpli"] = "Calificar cumplimiento";
	$fieldToolTipscert_master_1["Spanish"]["cert_califcumpli"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_califcumpli"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_estado"] = "Estado";
	$fieldToolTipscert_master_1["Spanish"]["cert_estado"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_estado"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_fecha"] = "Fecha";
	$fieldToolTipscert_master_1["Spanish"]["cert_fecha"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_fecha"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_fechacarga"] = "Cert Fechacarga";
	$fieldToolTipscert_master_1["Spanish"]["cert_fechacarga"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_fechacarga"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_file"] = "Cert File";
	$fieldToolTipscert_master_1["Spanish"]["cert_file"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_file"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_hash"] = "Radicado";
	$fieldToolTipscert_master_1["Spanish"]["cert_hash"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_hash"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_id"] = "No. Interno";
	$fieldToolTipscert_master_1["Spanish"]["cert_id"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_id"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_mailnot"] = "Correo notificación";
	$fieldToolTipscert_master_1["Spanish"]["cert_mailnot"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_mailnot"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_mailsol"] = "Cert Mailsol";
	$fieldToolTipscert_master_1["Spanish"]["cert_mailsol"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_mailsol"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_obliga"] = "Cert Obliga";
	$fieldToolTipscert_master_1["Spanish"]["cert_obliga"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_obliga"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_obs"] = "Observaciones";
	$fieldToolTipscert_master_1["Spanish"]["cert_obs"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_obs"] = "";
	$fieldLabelscert_master_1["Spanish"]["id_cont_fk"] = "Contrato";
	$fieldToolTipscert_master_1["Spanish"]["id_cont_fk"] = "";
	$placeHolderscert_master_1["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscert_master_1["Spanish"]["sol_user"] = "Documento";
	$fieldToolTipscert_master_1["Spanish"]["sol_user"] = "";
	$placeHolderscert_master_1["Spanish"]["sol_user"] = "";
	$fieldLabelscert_master_1["Spanish"]["cert_status"] = "Cert Status";
	$fieldToolTipscert_master_1["Spanish"]["cert_status"] = "";
	$placeHolderscert_master_1["Spanish"]["cert_status"] = "";
	$fieldLabelscert_master_1["Spanish"]["cont_hash_fk"] = "Cont Hash Fk";
	$fieldToolTipscert_master_1["Spanish"]["cont_hash_fk"] = "";
	$placeHolderscert_master_1["Spanish"]["cont_hash_fk"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_doc_num"] = "Cer Doc Num";
	$fieldToolTipscert_master_1["Spanish"]["cer_doc_num"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_doc_num"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_doc_tipo"] = "Cer Doc Tipo";
	$fieldToolTipscert_master_1["Spanish"]["cer_doc_tipo"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_doc_tipo"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_estado_contrato"] = "Cer Estado Contrato";
	$fieldToolTipscert_master_1["Spanish"]["cer_estado_contrato"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_estado_contrato"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_fecha_fin"] = "Cer Fecha Fin";
	$fieldToolTipscert_master_1["Spanish"]["cer_fecha_fin"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_fecha_fin"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_fecha_inicio"] = "Cer Fecha Inicio";
	$fieldToolTipscert_master_1["Spanish"]["cer_fecha_inicio"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_fecha_inicio"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_fecha_suscripcion"] = "Cer Fecha Suscripcion";
	$fieldToolTipscert_master_1["Spanish"]["cer_fecha_suscripcion"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_fecha_suscripcion"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_nombres"] = "Cer Nombres";
	$fieldToolTipscert_master_1["Spanish"]["cer_nombres"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_nombres"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_numcontrato"] = "Cer Numcontrato";
	$fieldToolTipscert_master_1["Spanish"]["cer_numcontrato"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_numcontrato"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_objeto"] = "Cer Objeto";
	$fieldToolTipscert_master_1["Spanish"]["cer_objeto"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_objeto"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_plazo"] = "Cer Plazo";
	$fieldToolTipscert_master_1["Spanish"]["cer_plazo"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_plazo"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_valor_letra"] = "Cer Valor Letra";
	$fieldToolTipscert_master_1["Spanish"]["cer_valor_letra"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_valor_letra"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_valor_num"] = "Cer Valor Num";
	$fieldToolTipscert_master_1["Spanish"]["cer_valor_num"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_valor_num"] = "";
	$fieldLabelscert_master_1["Spanish"]["cer_vigencia"] = "Cer Vigencia";
	$fieldToolTipscert_master_1["Spanish"]["cer_vigencia"] = "";
	$placeHolderscert_master_1["Spanish"]["cer_vigencia"] = "";
	if (count($fieldToolTipscert_master_1["Spanish"]))
		$tdatacert_master_1[".isUseToolTips"] = true;
}


	$tdatacert_master_1[".NCSearch"] = true;



$tdatacert_master_1[".shortTableName"] = "cert_master_1";
$tdatacert_master_1[".nSecOptions"] = 1;

$tdatacert_master_1[".mainTableOwnerID"] = "sol_user";
$tdatacert_master_1[".entityType"] = 1;
$tdatacert_master_1[".connId"] = "dbct_at_localhost";


$tdatacert_master_1[".strOriginalTableName"] = "cert_master";

	



$tdatacert_master_1[".showAddInPopup"] = false;

$tdatacert_master_1[".showEditInPopup"] = false;

$tdatacert_master_1[".showViewInPopup"] = false;

$tdatacert_master_1[".listAjax"] = false;
//	temporary
//$tdatacert_master_1[".listAjax"] = false;

	$tdatacert_master_1[".audit"] = true;

	$tdatacert_master_1[".locking"] = false;


$pages = $tdatacert_master_1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacert_master_1[".edit"] = true;
	$tdatacert_master_1[".afterEditAction"] = 0;
	$tdatacert_master_1[".closePopupAfterEdit"] = 1;
	$tdatacert_master_1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatacert_master_1[".add"] = true;
$tdatacert_master_1[".afterAddAction"] = 0;
$tdatacert_master_1[".closePopupAfterAdd"] = 1;
$tdatacert_master_1[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacert_master_1[".list"] = true;
}



$tdatacert_master_1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacert_master_1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacert_master_1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacert_master_1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacert_master_1[".printFriendly"] = true;
}



$tdatacert_master_1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacert_master_1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacert_master_1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacert_master_1[".isUseAjaxSuggest"] = true;



												

$tdatacert_master_1[".ajaxCodeSnippetAdded"] = false;

$tdatacert_master_1[".buttonsAdded"] = false;

$tdatacert_master_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacert_master_1[".isUseTimeForSearch"] = false;


$tdatacert_master_1[".badgeColor"] = "CFAE83";


$tdatacert_master_1[".allSearchFields"] = array();
$tdatacert_master_1[".filterFields"] = array();
$tdatacert_master_1[".requiredSearchFields"] = array();

$tdatacert_master_1[".googleLikeFields"] = array();
$tdatacert_master_1[".googleLikeFields"][] = "cert_id";
$tdatacert_master_1[".googleLikeFields"][] = "cert_hash";
$tdatacert_master_1[".googleLikeFields"][] = "id_cont_fk";
$tdatacert_master_1[".googleLikeFields"][] = "cont_hash_fk";
$tdatacert_master_1[".googleLikeFields"][] = "cert_califcumpli";
$tdatacert_master_1[".googleLikeFields"][] = "cert_obliga";
$tdatacert_master_1[".googleLikeFields"][] = "cert_obs";
$tdatacert_master_1[".googleLikeFields"][] = "cert_fecha";
$tdatacert_master_1[".googleLikeFields"][] = "cert_status";
$tdatacert_master_1[".googleLikeFields"][] = "cert_mailsol";
$tdatacert_master_1[".googleLikeFields"][] = "cert_fechacarga";
$tdatacert_master_1[".googleLikeFields"][] = "cert_file";
$tdatacert_master_1[".googleLikeFields"][] = "cert_estado";
$tdatacert_master_1[".googleLikeFields"][] = "cert_mailnot";
$tdatacert_master_1[".googleLikeFields"][] = "sol_user";
$tdatacert_master_1[".googleLikeFields"][] = "cer_numcontrato";
$tdatacert_master_1[".googleLikeFields"][] = "cer_vigencia";
$tdatacert_master_1[".googleLikeFields"][] = "cer_nombres";
$tdatacert_master_1[".googleLikeFields"][] = "cer_doc_tipo";
$tdatacert_master_1[".googleLikeFields"][] = "cer_doc_num";
$tdatacert_master_1[".googleLikeFields"][] = "cer_objeto";
$tdatacert_master_1[".googleLikeFields"][] = "cer_valor_num";
$tdatacert_master_1[".googleLikeFields"][] = "cer_valor_letra";
$tdatacert_master_1[".googleLikeFields"][] = "cer_plazo";
$tdatacert_master_1[".googleLikeFields"][] = "cer_fecha_suscripcion";
$tdatacert_master_1[".googleLikeFields"][] = "cer_fecha_inicio";
$tdatacert_master_1[".googleLikeFields"][] = "cer_fecha_fin";
$tdatacert_master_1[".googleLikeFields"][] = "cer_estado_contrato";



$tdatacert_master_1[".tableType"] = "list";

$tdatacert_master_1[".printerPageOrientation"] = 0;
$tdatacert_master_1[".nPrinterPageScale"] = 100;

$tdatacert_master_1[".nPrinterSplitRecords"] = 40;

$tdatacert_master_1[".geocodingEnabled"] = false;










$tdatacert_master_1[".pageSize"] = 20;

$tdatacert_master_1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacert_master_1[".strOrderBy"] = $tstrOrderBy;

$tdatacert_master_1[".orderindexes"] = array();


$tdatacert_master_1[".sqlHead"] = "SELECT cert_id,  	cert_hash,  	id_cont_fk,  	cont_hash_fk,  	cert_califcumpli,  	cert_obliga,  	cert_obs,  	cert_fecha,  	cert_status,  	cert_mailsol,  	cert_fechacarga,  	cert_file,  	cert_estado,  	cert_mailnot,  	sol_user,  	cer_numcontrato,  	cer_vigencia,  	cer_nombres,  	cer_doc_tipo,  	cer_doc_num,  	cer_objeto,  	cer_valor_num,  	cer_valor_letra,  	cer_plazo,  	cer_fecha_suscripcion,  	cer_fecha_inicio,  	cer_fecha_fin,  	cer_estado_contrato";
$tdatacert_master_1[".sqlFrom"] = "FROM cert_master";
$tdatacert_master_1[".sqlWhereExpr"] = "";
$tdatacert_master_1[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacert_master_1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacert_master_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacert_master_1[".arrGroupsPerPage"] = $arrGPP;

$tdatacert_master_1[".highlightSearchResults"] = true;

$tableKeyscert_master_1 = array();
$tableKeyscert_master_1[] = "cert_id";
$tdatacert_master_1[".Keys"] = $tableKeyscert_master_1;


$tdatacert_master_1[".hideMobileList"] = array();




//	cert_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cert_id";
	$fdata["GoodName"] = "cert_id";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cert_id";

		$fdata["sourceSingle"] = "cert_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_id"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_id";
//	cert_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cert_hash";
	$fdata["GoodName"] = "cert_hash";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_hash";

		$fdata["sourceSingle"] = "cert_hash";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_hash"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_hash";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["sourceSingle"] = "id_cont_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_001_dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cer_doc_num", 'lookupF'=>"DOCID");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_doc_tipo", 'lookupF'=>"contractor_type");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_estado_contrato", 'lookupF'=>"estado_nombre");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_fecha_fin", 'lookupF'=>"FECHAF");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_fecha_inicio", 'lookupF'=>"FECHAI");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_fecha_suscripcion", 'lookupF'=>"cont_fechaapertura");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_nombres", 'lookupF'=>"contractor_nombresfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_numcontrato", 'lookupF'=>"CONTRATOID");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_objeto", 'lookupF'=>"cont_estado");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_plazo", 'lookupF'=>"QTYMESES");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_valor_num", 'lookupF'=>"VALORINICIAL");
	$edata["autoCompleteFields"][] = array('masterF'=>"cer_vigencia", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"cert_mailnot", 'lookupF'=>"contractor_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CONTVINCULADO";

				$edata["LookupWhere"] = "DOCID = ':session.DocID'";


	
	$edata["LookupOrderBy"] = "CONTVINCULADO";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["id_cont_fk"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "id_cont_fk";
//	cont_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_hash_fk";
	$fdata["GoodName"] = "cont_hash_fk";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cont_hash_fk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_hash_fk";

		$fdata["sourceSingle"] = "cont_hash_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cont_hash_fk"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cont_hash_fk";
//	cert_califcumpli
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cert_califcumpli";
	$fdata["GoodName"] = "cert_califcumpli";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_califcumpli");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cert_califcumpli";

		$fdata["sourceSingle"] = "cert_califcumpli";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_califcumpli";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_califcumpli"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_califcumpli";
//	cert_obliga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cert_obliga";
	$fdata["GoodName"] = "cert_obliga";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_obliga");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cert_obliga";

		$fdata["sourceSingle"] = "cert_obliga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_obliga";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_obliga"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_obliga";
//	cert_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cert_obs";
	$fdata["GoodName"] = "cert_obs";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_obs";

		$fdata["sourceSingle"] = "cert_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_obs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_obs"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_obs";
//	cert_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cert_fecha";
	$fdata["GoodName"] = "cert_fecha";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "cert_fecha";

		$fdata["sourceSingle"] = "cert_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_fecha"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_fecha";
//	cert_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cert_status";
	$fdata["GoodName"] = "cert_status";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cert_status";

		$fdata["sourceSingle"] = "cert_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_status"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_status";
//	cert_mailsol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cert_mailsol";
	$fdata["GoodName"] = "cert_mailsol";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_mailsol");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mailsol";

		$fdata["sourceSingle"] = "cert_mailsol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mailsol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_mailsol"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_mailsol";
//	cert_fechacarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cert_fechacarga";
	$fdata["GoodName"] = "cert_fechacarga";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_fechacarga");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cert_fechacarga";

		$fdata["sourceSingle"] = "cert_fechacarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_fechacarga";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_fechacarga"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_fechacarga";
//	cert_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cert_file";
	$fdata["GoodName"] = "cert_file";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_file";

		$fdata["sourceSingle"] = "cert_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_file"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_file";
//	cert_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cert_estado";
	$fdata["GoodName"] = "cert_estado";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_estado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cert_estado";

		$fdata["sourceSingle"] = "cert_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "certs_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "certs_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_estado"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_estado";
//	cert_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cert_mailnot";
	$fdata["GoodName"] = "cert_mailnot";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cert_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mailnot";

		$fdata["sourceSingle"] = "cert_mailnot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mailnot";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cert_mailnot"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cert_mailnot";
//	sol_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sol_user";
	$fdata["GoodName"] = "sol_user";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","sol_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sol_user";

		$fdata["sourceSingle"] = "sol_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sol_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["sol_user"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "sol_user";
//	cer_numcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cer_numcontrato";
	$fdata["GoodName"] = "cer_numcontrato";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_numcontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_numcontrato";

		$fdata["sourceSingle"] = "cer_numcontrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_numcontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_numcontrato"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_numcontrato";
//	cer_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cer_vigencia";
	$fdata["GoodName"] = "cer_vigencia";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cer_vigencia";

		$fdata["sourceSingle"] = "cer_vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_vigencia"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_vigencia";
//	cer_nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cer_nombres";
	$fdata["GoodName"] = "cer_nombres";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_nombres");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_nombres";

		$fdata["sourceSingle"] = "cer_nombres";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_nombres";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=120";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_nombres"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_nombres";
//	cer_doc_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cer_doc_tipo";
	$fdata["GoodName"] = "cer_doc_tipo";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_doc_tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_doc_tipo";

		$fdata["sourceSingle"] = "cer_doc_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_doc_tipo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_doc_tipo"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_doc_tipo";
//	cer_doc_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cer_doc_num";
	$fdata["GoodName"] = "cer_doc_num";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_doc_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_doc_num";

		$fdata["sourceSingle"] = "cer_doc_num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_doc_num";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_doc_num"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_doc_num";
//	cer_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cer_objeto";
	$fdata["GoodName"] = "cer_objeto";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_objeto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_objeto";

		$fdata["sourceSingle"] = "cer_objeto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_objeto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=800";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_objeto"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_objeto";
//	cer_valor_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cer_valor_num";
	$fdata["GoodName"] = "cer_valor_num";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_valor_num");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cer_valor_num";

		$fdata["sourceSingle"] = "cer_valor_num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_valor_num";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_valor_num"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_valor_num";
//	cer_valor_letra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cer_valor_letra";
	$fdata["GoodName"] = "cer_valor_letra";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_valor_letra");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_valor_letra";

		$fdata["sourceSingle"] = "cer_valor_letra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_valor_letra";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_valor_letra"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_valor_letra";
//	cer_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cer_plazo";
	$fdata["GoodName"] = "cer_plazo";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_plazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_plazo";

		$fdata["sourceSingle"] = "cer_plazo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_plazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_plazo"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_plazo";
//	cer_fecha_suscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cer_fecha_suscripcion";
	$fdata["GoodName"] = "cer_fecha_suscripcion";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_fecha_suscripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cer_fecha_suscripcion";

		$fdata["sourceSingle"] = "cer_fecha_suscripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_fecha_suscripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_fecha_suscripcion"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_fecha_suscripcion";
//	cer_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cer_fecha_inicio";
	$fdata["GoodName"] = "cer_fecha_inicio";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_fecha_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cer_fecha_inicio";

		$fdata["sourceSingle"] = "cer_fecha_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_fecha_inicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_fecha_inicio"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_fecha_inicio";
//	cer_fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cer_fecha_fin";
	$fdata["GoodName"] = "cer_fecha_fin";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_fecha_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cer_fecha_fin";

		$fdata["sourceSingle"] = "cer_fecha_fin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_fecha_fin";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_fecha_fin"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_fecha_fin";
//	cer_estado_contrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cer_estado_contrato";
	$fdata["GoodName"] = "cer_estado_contrato";
	$fdata["ownerTable"] = "cert_master";
	$fdata["Label"] = GetFieldLabel("cert_master_1","cer_estado_contrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cer_estado_contrato";

		$fdata["sourceSingle"] = "cer_estado_contrato";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cer_estado_contrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacert_master_1["cer_estado_contrato"] = $fdata;
		$tdatacert_master_1[".searchableFields"][] = "cer_estado_contrato";


$tables_data["cert_master_1"]=&$tdatacert_master_1;
$field_labels["cert_master_1"] = &$fieldLabelscert_master_1;
$fieldToolTips["cert_master_1"] = &$fieldToolTipscert_master_1;
$placeHolders["cert_master_1"] = &$placeHolderscert_master_1;
$page_titles["cert_master_1"] = &$pageTitlescert_master_1;


changeTextControlsToDate( "cert_master_1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cert_master_1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cert_master_1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cert_master_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "cert_id,  	cert_hash,  	id_cont_fk,  	cont_hash_fk,  	cert_califcumpli,  	cert_obliga,  	cert_obs,  	cert_fecha,  	cert_status,  	cert_mailsol,  	cert_fechacarga,  	cert_file,  	cert_estado,  	cert_mailnot,  	sol_user,  	cer_numcontrato,  	cer_vigencia,  	cer_nombres,  	cer_doc_tipo,  	cer_doc_num,  	cer_objeto,  	cer_valor_num,  	cer_valor_letra,  	cer_plazo,  	cer_fecha_suscripcion,  	cer_fecha_inicio,  	cer_fecha_fin,  	cer_estado_contrato";
$proto0["m_strFrom"] = "FROM cert_master";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
						;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_id",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto6["m_sql"] = "cert_id";
$proto6["m_srcTableName"] = "cert_master_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_hash",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto8["m_sql"] = "cert_hash";
$proto8["m_srcTableName"] = "cert_master_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto10["m_sql"] = "id_cont_fk";
$proto10["m_srcTableName"] = "cert_master_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash_fk",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto12["m_sql"] = "cont_hash_fk";
$proto12["m_srcTableName"] = "cert_master_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_califcumpli",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto14["m_sql"] = "cert_califcumpli";
$proto14["m_srcTableName"] = "cert_master_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_obliga",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto16["m_sql"] = "cert_obliga";
$proto16["m_srcTableName"] = "cert_master_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_obs",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto18["m_sql"] = "cert_obs";
$proto18["m_srcTableName"] = "cert_master_1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_fecha",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto20["m_sql"] = "cert_fecha";
$proto20["m_srcTableName"] = "cert_master_1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_status",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto22["m_sql"] = "cert_status";
$proto22["m_srcTableName"] = "cert_master_1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mailsol",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto24["m_sql"] = "cert_mailsol";
$proto24["m_srcTableName"] = "cert_master_1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_fechacarga",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto26["m_sql"] = "cert_fechacarga";
$proto26["m_srcTableName"] = "cert_master_1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_file",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto28["m_sql"] = "cert_file";
$proto28["m_srcTableName"] = "cert_master_1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_estado",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto30["m_sql"] = "cert_estado";
$proto30["m_srcTableName"] = "cert_master_1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mailnot",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto32["m_sql"] = "cert_mailnot";
$proto32["m_srcTableName"] = "cert_master_1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sol_user",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto34["m_sql"] = "sol_user";
$proto34["m_srcTableName"] = "cert_master_1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_numcontrato",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto36["m_sql"] = "cer_numcontrato";
$proto36["m_srcTableName"] = "cert_master_1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_vigencia",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto38["m_sql"] = "cer_vigencia";
$proto38["m_srcTableName"] = "cert_master_1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_nombres",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto40["m_sql"] = "cer_nombres";
$proto40["m_srcTableName"] = "cert_master_1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_doc_tipo",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto42["m_sql"] = "cer_doc_tipo";
$proto42["m_srcTableName"] = "cert_master_1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_doc_num",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto44["m_sql"] = "cer_doc_num";
$proto44["m_srcTableName"] = "cert_master_1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_objeto",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto46["m_sql"] = "cer_objeto";
$proto46["m_srcTableName"] = "cert_master_1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_valor_num",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto48["m_sql"] = "cer_valor_num";
$proto48["m_srcTableName"] = "cert_master_1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_valor_letra",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto50["m_sql"] = "cer_valor_letra";
$proto50["m_srcTableName"] = "cert_master_1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_plazo",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto52["m_sql"] = "cer_plazo";
$proto52["m_srcTableName"] = "cert_master_1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_fecha_suscripcion",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto54["m_sql"] = "cer_fecha_suscripcion";
$proto54["m_srcTableName"] = "cert_master_1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_fecha_inicio",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto56["m_sql"] = "cer_fecha_inicio";
$proto56["m_srcTableName"] = "cert_master_1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_fecha_fin",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto58["m_sql"] = "cer_fecha_fin";
$proto58["m_srcTableName"] = "cert_master_1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cer_estado_contrato",
	"m_strTable" => "cert_master",
	"m_srcTableName" => "cert_master_1"
));

$proto60["m_sql"] = "cer_estado_contrato";
$proto60["m_srcTableName"] = "cert_master_1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "cert_master";
$proto63["m_srcTableName"] = "cert_master_1";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "cert_id";
$proto63["m_columns"][] = "cert_hash";
$proto63["m_columns"][] = "id_cont_fk";
$proto63["m_columns"][] = "cont_hash_fk";
$proto63["m_columns"][] = "cert_califcumpli";
$proto63["m_columns"][] = "cert_obliga";
$proto63["m_columns"][] = "cert_obs";
$proto63["m_columns"][] = "cert_fecha";
$proto63["m_columns"][] = "cert_status";
$proto63["m_columns"][] = "cert_mailsol";
$proto63["m_columns"][] = "cert_fechacarga";
$proto63["m_columns"][] = "cert_file";
$proto63["m_columns"][] = "cert_estado";
$proto63["m_columns"][] = "cert_mailnot";
$proto63["m_columns"][] = "sol_user";
$proto63["m_columns"][] = "cer_numcontrato";
$proto63["m_columns"][] = "cer_vigencia";
$proto63["m_columns"][] = "cer_nombres";
$proto63["m_columns"][] = "cer_doc_tipo";
$proto63["m_columns"][] = "cer_doc_num";
$proto63["m_columns"][] = "cer_objeto";
$proto63["m_columns"][] = "cer_valor_num";
$proto63["m_columns"][] = "cer_valor_letra";
$proto63["m_columns"][] = "cer_plazo";
$proto63["m_columns"][] = "cer_fecha_suscripcion";
$proto63["m_columns"][] = "cer_fecha_inicio";
$proto63["m_columns"][] = "cer_fecha_fin";
$proto63["m_columns"][] = "cer_estado_contrato";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "cert_master";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "cert_master_1";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cert_master_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cert_master_1 = createSqlQuery_cert_master_1();


	
						;

																												

$tdatacert_master_1[".sqlquery"] = $queryData_cert_master_1;



$tdatacert_master_1[".hasEvents"] = false;

?>