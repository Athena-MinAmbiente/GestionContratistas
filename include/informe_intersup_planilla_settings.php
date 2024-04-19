<?php
$tdatainforme_intersup_planilla = array();
$tdatainforme_intersup_planilla[".searchableFields"] = array();
$tdatainforme_intersup_planilla[".ShortName"] = "informe_intersup_planilla";
$tdatainforme_intersup_planilla[".OwnerID"] = "";
$tdatainforme_intersup_planilla[".OriginalTable"] = "informe_intersup_planilla";


$tdatainforme_intersup_planilla[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_planilla[".originalPagesByType"] = $tdatainforme_intersup_planilla[".pagesByType"];
$tdatainforme_intersup_planilla[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_planilla[".originalPages"] = $tdatainforme_intersup_planilla[".pages"];
$tdatainforme_intersup_planilla[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_planilla[".originalDefaultPages"] = $tdatainforme_intersup_planilla[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_planilla = array();
$fieldToolTipsinforme_intersup_planilla = array();
$pageTitlesinforme_intersup_planilla = array();
$placeHoldersinforme_intersup_planilla = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_planilla["Spanish"] = array();
	$fieldToolTipsinforme_intersup_planilla["Spanish"] = array();
	$placeHoldersinforme_intersup_planilla["Spanish"] = array();
	$pageTitlesinforme_intersup_planilla["Spanish"] = array();
	$fieldLabelsinforme_intersup_planilla["Spanish"]["base_liq"] = "Base Liquidación (40%)";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["base_liq"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["base_liq"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["clase"] = "Clase";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["clase"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["clase"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["contrato_num"] = "Contrato Num";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["contrato_num"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["contrato_num"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["contrato_vigencia"] = "Contrato Vigencia";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["contrato_vigencia"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["contrato_vigencia"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["inf_id_fk"] = "Inf Id Fk";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["inf_id_fk"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["inf_id_fk"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["nombre"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["nombre"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["order_id"] = "Order Id";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["order_id"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["order_id"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["pago_mensual"] = "Pago Mensual";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["pago_mensual"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["pago_mensual"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["planilla_fecha"] = "Fecha de planilla";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["planilla_fecha"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["planilla_fecha"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["planilla_id"] = "Planilla Id";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["planilla_id"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["planilla_id"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["planilla_mes"] = "Periodo cotizado";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["planilla_mes"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["planilla_mes"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["planilla_num"] = "Número de planilla";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["planilla_num"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["planilla_num"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["planilla_valor"] = "Valor pagado";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["planilla_valor"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["planilla_valor"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["sys_date"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["sys_date"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["tipo_administradora"] = "Administradora";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["tipo_administradora"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["tipo_administradora"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["tipo_subsistema"] = "Subsistema";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["tipo_subsistema"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["tipo_subsistema"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["valor_avg"] = "Base %";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["valor_avg"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["valor_avg"] = "";
	$fieldLabelsinforme_intersup_planilla["Spanish"]["valor_ref"] = "Cotización obligatoria";
	$fieldToolTipsinforme_intersup_planilla["Spanish"]["valor_ref"] = "";
	$placeHoldersinforme_intersup_planilla["Spanish"]["valor_ref"] = "";
	if (count($fieldToolTipsinforme_intersup_planilla["Spanish"]))
		$tdatainforme_intersup_planilla[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_planilla[".NCSearch"] = true;



$tdatainforme_intersup_planilla[".shortTableName"] = "informe_intersup_planilla";
$tdatainforme_intersup_planilla[".nSecOptions"] = 0;

$tdatainforme_intersup_planilla[".mainTableOwnerID"] = "";
$tdatainforme_intersup_planilla[".entityType"] = 0;
$tdatainforme_intersup_planilla[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_planilla[".strOriginalTableName"] = "informe_intersup_planilla";

	



$tdatainforme_intersup_planilla[".showAddInPopup"] = false;

$tdatainforme_intersup_planilla[".showEditInPopup"] = false;

$tdatainforme_intersup_planilla[".showViewInPopup"] = false;

$tdatainforme_intersup_planilla[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_planilla[".listAjax"] = false;

	$tdatainforme_intersup_planilla[".audit"] = false;

	$tdatainforme_intersup_planilla[".locking"] = false;


$pages = $tdatainforme_intersup_planilla[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_planilla[".edit"] = true;
	$tdatainforme_intersup_planilla[".afterEditAction"] = 1;
	$tdatainforme_intersup_planilla[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_planilla[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_planilla[".add"] = true;
$tdatainforme_intersup_planilla[".afterAddAction"] = 1;
$tdatainforme_intersup_planilla[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_planilla[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_planilla[".list"] = true;
}



$tdatainforme_intersup_planilla[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_planilla[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_planilla[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_planilla[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_planilla[".printFriendly"] = true;
}



$tdatainforme_intersup_planilla[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_planilla[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_planilla[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_planilla[".isUseAjaxSuggest"] = true;



																								

$tdatainforme_intersup_planilla[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_planilla[".buttonsAdded"] = false;

$tdatainforme_intersup_planilla[".addPageEvents"] = true;

// use timepicker for search panel
$tdatainforme_intersup_planilla[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_planilla[".badgeColor"] = "daa520";


$tdatainforme_intersup_planilla[".allSearchFields"] = array();
$tdatainforme_intersup_planilla[".filterFields"] = array();
$tdatainforme_intersup_planilla[".requiredSearchFields"] = array();

$tdatainforme_intersup_planilla[".googleLikeFields"] = array();
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "planilla_id";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "order_id";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "inf_id_fk";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "contrato_num";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "contrato_vigencia";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "pago_mensual";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "base_liq";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "tipo_administradora";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "tipo_subsistema";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "clase";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "nombre";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "valor_avg";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "valor_ref";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "planilla_num";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "planilla_fecha";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "planilla_valor";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "planilla_mes";
$tdatainforme_intersup_planilla[".googleLikeFields"][] = "sys_date";



$tdatainforme_intersup_planilla[".tableType"] = "list";

$tdatainforme_intersup_planilla[".printerPageOrientation"] = 0;
$tdatainforme_intersup_planilla[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_planilla[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_planilla[".geocodingEnabled"] = false;










$tdatainforme_intersup_planilla[".pageSize"] = 20;

$tdatainforme_intersup_planilla[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_planilla[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_planilla[".orderindexes"] = array();


$tdatainforme_intersup_planilla[".sqlHead"] = "SELECT planilla_id,  	order_id,  	inf_id_fk,  	id_cont_fk,  	contrato_num,  	contrato_vigencia,  	pago_mensual,  	base_liq,  	tipo_administradora,  	tipo_subsistema,  	clase,  	nombre,  	valor_avg,  	valor_ref,  	planilla_num,  	planilla_fecha,  	planilla_valor,  	planilla_mes,  	sys_date";
$tdatainforme_intersup_planilla[".sqlFrom"] = "FROM informe_intersup_planilla";
$tdatainforme_intersup_planilla[".sqlWhereExpr"] = "";
$tdatainforme_intersup_planilla[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_planilla[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_planilla[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_planilla[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_planilla = array();
$tableKeysinforme_intersup_planilla[] = "planilla_id";
$tdatainforme_intersup_planilla[".Keys"] = $tableKeysinforme_intersup_planilla;


$tdatainforme_intersup_planilla[".hideMobileList"] = array();




//	planilla_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "planilla_id";
	$fdata["GoodName"] = "planilla_id";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","planilla_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "planilla_id";

		$fdata["sourceSingle"] = "planilla_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planilla_id";

	
	
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


	$tdatainforme_intersup_planilla["planilla_id"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "planilla_id";
//	order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "order_id";
	$fdata["GoodName"] = "order_id";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","order_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "order_id";

		$fdata["sourceSingle"] = "order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_id";

	
	
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


	$tdatainforme_intersup_planilla["order_id"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "order_id";
//	inf_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_id_fk";
	$fdata["GoodName"] = "inf_id_fk";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","inf_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_id_fk";

		$fdata["sourceSingle"] = "inf_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id_fk";

	
	
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


	$tdatainforme_intersup_planilla["inf_id_fk"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "inf_id_fk";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","id_cont_fk");
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


	$tdatainforme_intersup_planilla["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "id_cont_fk";
//	contrato_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contrato_num";
	$fdata["GoodName"] = "contrato_num";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","contrato_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contrato_num";

		$fdata["sourceSingle"] = "contrato_num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato_num";

	
	
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


	$tdatainforme_intersup_planilla["contrato_num"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "contrato_num";
//	contrato_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contrato_vigencia";
	$fdata["GoodName"] = "contrato_vigencia";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","contrato_vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contrato_vigencia";

		$fdata["sourceSingle"] = "contrato_vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato_vigencia";

	
	
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


	$tdatainforme_intersup_planilla["contrato_vigencia"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "contrato_vigencia";
//	pago_mensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pago_mensual";
	$fdata["GoodName"] = "pago_mensual";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","pago_mensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "pago_mensual";

		$fdata["sourceSingle"] = "pago_mensual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pago_mensual";

	
	
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


	$tdatainforme_intersup_planilla["pago_mensual"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "pago_mensual";
//	base_liq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "base_liq";
	$fdata["GoodName"] = "base_liq";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","base_liq");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "base_liq";

		$fdata["sourceSingle"] = "base_liq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "base_liq";

	
	
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


	$tdatainforme_intersup_planilla["base_liq"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "base_liq";
//	tipo_administradora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipo_administradora";
	$fdata["GoodName"] = "tipo_administradora";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","tipo_administradora");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_administradora";

		$fdata["sourceSingle"] = "tipo_administradora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_administradora";

	
	
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
	$edata["LookupTable"] = "tparam_administradora";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "adm_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_adm";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainforme_intersup_planilla["tipo_administradora"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "tipo_administradora";
//	tipo_subsistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipo_subsistema";
	$fdata["GoodName"] = "tipo_subsistema";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","tipo_subsistema");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_subsistema";

		$fdata["sourceSingle"] = "tipo_subsistema";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_subsistema";

	
	
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
	$edata["LookupTable"] = "tparam_administradora_spa";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "spa_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainforme_intersup_planilla["tipo_subsistema"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "tipo_subsistema";
//	clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "clase";
	$fdata["GoodName"] = "clase";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","clase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clase";

		$fdata["sourceSingle"] = "clase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clase";

	
	
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


	$tdatainforme_intersup_planilla["clase"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "clase";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatainforme_intersup_planilla["nombre"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "nombre";
//	valor_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "valor_avg";
	$fdata["GoodName"] = "valor_avg";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","valor_avg");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_avg";

		$fdata["sourceSingle"] = "valor_avg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_avg";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
	
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


	$tdatainforme_intersup_planilla["valor_avg"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "valor_avg";
//	valor_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "valor_ref";
	$fdata["GoodName"] = "valor_ref";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","valor_ref");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_ref";

		$fdata["sourceSingle"] = "valor_ref";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_ref";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatainforme_intersup_planilla["valor_ref"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "valor_ref";
//	planilla_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "planilla_num";
	$fdata["GoodName"] = "planilla_num";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","planilla_num");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "planilla_num";

		$fdata["sourceSingle"] = "planilla_num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planilla_num";

	
	
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


	$tdatainforme_intersup_planilla["planilla_num"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "planilla_num";
//	planilla_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "planilla_fecha";
	$fdata["GoodName"] = "planilla_fecha";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","planilla_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "planilla_fecha";

		$fdata["sourceSingle"] = "planilla_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planilla_fecha";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatainforme_intersup_planilla["planilla_fecha"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "planilla_fecha";
//	planilla_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "planilla_valor";
	$fdata["GoodName"] = "planilla_valor";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","planilla_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "planilla_valor";

		$fdata["sourceSingle"] = "planilla_valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planilla_valor";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatainforme_intersup_planilla["planilla_valor"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "planilla_valor";
//	planilla_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "planilla_mes";
	$fdata["GoodName"] = "planilla_mes";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","planilla_mes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "planilla_mes";

		$fdata["sourceSingle"] = "planilla_mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planilla_mes";

	
	
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
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mes_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatainforme_intersup_planilla["planilla_mes"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "planilla_mes";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "informe_intersup_planilla";
	$fdata["Label"] = GetFieldLabel("informe_intersup_planilla","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatainforme_intersup_planilla["sys_date"] = $fdata;
		$tdatainforme_intersup_planilla[".searchableFields"][] = "sys_date";


$tables_data["informe_intersup_planilla"]=&$tdatainforme_intersup_planilla;
$field_labels["informe_intersup_planilla"] = &$fieldLabelsinforme_intersup_planilla;
$fieldToolTips["informe_intersup_planilla"] = &$fieldToolTipsinforme_intersup_planilla;
$placeHolders["informe_intersup_planilla"] = &$placeHoldersinforme_intersup_planilla;
$page_titles["informe_intersup_planilla"] = &$pageTitlesinforme_intersup_planilla;


changeTextControlsToDate( "informe_intersup_planilla" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_planilla"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_planilla"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="informe_intersup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="informe_intersup_contratista";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "informe_intersup_contratista";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_planilla"][0] = $masterParams;
				$masterTablesData["informe_intersup_planilla"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup_planilla"][0]["masterKeys"][]="inf_id";
				$masterTablesData["informe_intersup_planilla"][0]["masterKeys"][]="id_cont_fk";
				$masterTablesData["informe_intersup_planilla"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup_planilla"][0]["detailKeys"][]="inf_id_fk";
				$masterTablesData["informe_intersup_planilla"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_planilla()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "planilla_id,  	order_id,  	inf_id_fk,  	id_cont_fk,  	contrato_num,  	contrato_vigencia,  	pago_mensual,  	base_liq,  	tipo_administradora,  	tipo_subsistema,  	clase,  	nombre,  	valor_avg,  	valor_ref,  	planilla_num,  	planilla_fecha,  	planilla_valor,  	planilla_mes,  	sys_date";
$proto0["m_strFrom"] = "FROM informe_intersup_planilla";
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
	"m_strName" => "planilla_id",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto6["m_sql"] = "planilla_id";
$proto6["m_srcTableName"] = "informe_intersup_planilla";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "order_id",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto8["m_sql"] = "order_id";
$proto8["m_srcTableName"] = "informe_intersup_planilla";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id_fk",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto10["m_sql"] = "inf_id_fk";
$proto10["m_srcTableName"] = "informe_intersup_planilla";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto12["m_sql"] = "id_cont_fk";
$proto12["m_srcTableName"] = "informe_intersup_planilla";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contrato_num",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto14["m_sql"] = "contrato_num";
$proto14["m_srcTableName"] = "informe_intersup_planilla";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contrato_vigencia",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto16["m_sql"] = "contrato_vigencia";
$proto16["m_srcTableName"] = "informe_intersup_planilla";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pago_mensual",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto18["m_sql"] = "pago_mensual";
$proto18["m_srcTableName"] = "informe_intersup_planilla";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "base_liq",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto20["m_sql"] = "base_liq";
$proto20["m_srcTableName"] = "informe_intersup_planilla";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_administradora",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto22["m_sql"] = "tipo_administradora";
$proto22["m_srcTableName"] = "informe_intersup_planilla";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_subsistema",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto24["m_sql"] = "tipo_subsistema";
$proto24["m_srcTableName"] = "informe_intersup_planilla";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "clase",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto26["m_sql"] = "clase";
$proto26["m_srcTableName"] = "informe_intersup_planilla";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto28["m_sql"] = "nombre";
$proto28["m_srcTableName"] = "informe_intersup_planilla";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_avg",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto30["m_sql"] = "valor_avg";
$proto30["m_srcTableName"] = "informe_intersup_planilla";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_ref",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto32["m_sql"] = "valor_ref";
$proto32["m_srcTableName"] = "informe_intersup_planilla";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "planilla_num",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto34["m_sql"] = "planilla_num";
$proto34["m_srcTableName"] = "informe_intersup_planilla";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "planilla_fecha",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto36["m_sql"] = "planilla_fecha";
$proto36["m_srcTableName"] = "informe_intersup_planilla";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "planilla_valor",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto38["m_sql"] = "planilla_valor";
$proto38["m_srcTableName"] = "informe_intersup_planilla";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "planilla_mes",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto40["m_sql"] = "planilla_mes";
$proto40["m_srcTableName"] = "informe_intersup_planilla";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "informe_intersup_planilla",
	"m_srcTableName" => "informe_intersup_planilla"
));

$proto42["m_sql"] = "sys_date";
$proto42["m_srcTableName"] = "informe_intersup_planilla";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "informe_intersup_planilla";
$proto45["m_srcTableName"] = "informe_intersup_planilla";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "planilla_id";
$proto45["m_columns"][] = "order_id";
$proto45["m_columns"][] = "inf_id_fk";
$proto45["m_columns"][] = "id_cont_fk";
$proto45["m_columns"][] = "contrato_num";
$proto45["m_columns"][] = "contrato_vigencia";
$proto45["m_columns"][] = "pago_mensual";
$proto45["m_columns"][] = "base_liq";
$proto45["m_columns"][] = "tipo_administradora";
$proto45["m_columns"][] = "tipo_subsistema";
$proto45["m_columns"][] = "clase";
$proto45["m_columns"][] = "nombre";
$proto45["m_columns"][] = "valor_avg";
$proto45["m_columns"][] = "valor_ref";
$proto45["m_columns"][] = "planilla_num";
$proto45["m_columns"][] = "planilla_fecha";
$proto45["m_columns"][] = "planilla_valor";
$proto45["m_columns"][] = "planilla_mes";
$proto45["m_columns"][] = "sys_date";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "informe_intersup_planilla";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "informe_intersup_planilla";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup_planilla";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_planilla = createSqlQuery_informe_intersup_planilla();


	
						;

																			

$tdatainforme_intersup_planilla[".sqlquery"] = $queryData_informe_intersup_planilla;



include_once(getabspath("include/informe_intersup_planilla_events.php"));
$tdatainforme_intersup_planilla[".hasEvents"] = true;

?>