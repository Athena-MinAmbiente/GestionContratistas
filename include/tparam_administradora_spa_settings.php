<?php
$tdatatparam_administradora_spa = array();
$tdatatparam_administradora_spa[".searchableFields"] = array();
$tdatatparam_administradora_spa[".ShortName"] = "tparam_administradora_spa";
$tdatatparam_administradora_spa[".OwnerID"] = "";
$tdatatparam_administradora_spa[".OriginalTable"] = "tparam_administradora_spa";


$tdatatparam_administradora_spa[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_administradora_spa[".originalPagesByType"] = $tdatatparam_administradora_spa[".pagesByType"];
$tdatatparam_administradora_spa[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_administradora_spa[".originalPages"] = $tdatatparam_administradora_spa[".pages"];
$tdatatparam_administradora_spa[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_administradora_spa[".originalDefaultPages"] = $tdatatparam_administradora_spa[".defaultPages"];

//	field labels
$fieldLabelstparam_administradora_spa = array();
$fieldToolTipstparam_administradora_spa = array();
$pageTitlestparam_administradora_spa = array();
$placeHolderstparam_administradora_spa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_administradora_spa["Spanish"] = array();
	$fieldToolTipstparam_administradora_spa["Spanish"] = array();
	$placeHolderstparam_administradora_spa["Spanish"] = array();
	$pageTitlestparam_administradora_spa["Spanish"] = array();
	$fieldLabelstparam_administradora_spa["Spanish"]["adm_id_fk"] = "Adm Id Fk";
	$fieldToolTipstparam_administradora_spa["Spanish"]["adm_id_fk"] = "";
	$placeHolderstparam_administradora_spa["Spanish"]["adm_id_fk"] = "";
	$fieldLabelstparam_administradora_spa["Spanish"]["clase"] = "Clase";
	$fieldToolTipstparam_administradora_spa["Spanish"]["clase"] = "";
	$placeHolderstparam_administradora_spa["Spanish"]["clase"] = "";
	$fieldLabelstparam_administradora_spa["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipstparam_administradora_spa["Spanish"]["nombre"] = "";
	$placeHolderstparam_administradora_spa["Spanish"]["nombre"] = "";
	$fieldLabelstparam_administradora_spa["Spanish"]["spa_id"] = "Spa Id";
	$fieldToolTipstparam_administradora_spa["Spanish"]["spa_id"] = "";
	$placeHolderstparam_administradora_spa["Spanish"]["spa_id"] = "";
	$fieldLabelstparam_administradora_spa["Spanish"]["valor_avg"] = "Valor Avg";
	$fieldToolTipstparam_administradora_spa["Spanish"]["valor_avg"] = "";
	$placeHolderstparam_administradora_spa["Spanish"]["valor_avg"] = "";
	if (count($fieldToolTipstparam_administradora_spa["Spanish"]))
		$tdatatparam_administradora_spa[".isUseToolTips"] = true;
}


	$tdatatparam_administradora_spa[".NCSearch"] = true;



$tdatatparam_administradora_spa[".shortTableName"] = "tparam_administradora_spa";
$tdatatparam_administradora_spa[".nSecOptions"] = 0;

$tdatatparam_administradora_spa[".mainTableOwnerID"] = "";
$tdatatparam_administradora_spa[".entityType"] = 0;
$tdatatparam_administradora_spa[".connId"] = "dbct_at_localhost";


$tdatatparam_administradora_spa[".strOriginalTableName"] = "tparam_administradora_spa";

	



$tdatatparam_administradora_spa[".showAddInPopup"] = false;

$tdatatparam_administradora_spa[".showEditInPopup"] = false;

$tdatatparam_administradora_spa[".showViewInPopup"] = false;

$tdatatparam_administradora_spa[".listAjax"] = false;
//	temporary
//$tdatatparam_administradora_spa[".listAjax"] = false;

	$tdatatparam_administradora_spa[".audit"] = false;

	$tdatatparam_administradora_spa[".locking"] = false;


$pages = $tdatatparam_administradora_spa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_administradora_spa[".edit"] = true;
	$tdatatparam_administradora_spa[".afterEditAction"] = 1;
	$tdatatparam_administradora_spa[".closePopupAfterEdit"] = 1;
	$tdatatparam_administradora_spa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_administradora_spa[".add"] = true;
$tdatatparam_administradora_spa[".afterAddAction"] = 1;
$tdatatparam_administradora_spa[".closePopupAfterAdd"] = 1;
$tdatatparam_administradora_spa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_administradora_spa[".list"] = true;
}



$tdatatparam_administradora_spa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_administradora_spa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_administradora_spa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_administradora_spa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_administradora_spa[".printFriendly"] = true;
}



$tdatatparam_administradora_spa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_administradora_spa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_administradora_spa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_administradora_spa[".isUseAjaxSuggest"] = true;



												

$tdatatparam_administradora_spa[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_administradora_spa[".buttonsAdded"] = false;

$tdatatparam_administradora_spa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_administradora_spa[".isUseTimeForSearch"] = false;


$tdatatparam_administradora_spa[".badgeColor"] = "8FBC8B";


$tdatatparam_administradora_spa[".allSearchFields"] = array();
$tdatatparam_administradora_spa[".filterFields"] = array();
$tdatatparam_administradora_spa[".requiredSearchFields"] = array();

$tdatatparam_administradora_spa[".googleLikeFields"] = array();
$tdatatparam_administradora_spa[".googleLikeFields"][] = "spa_id";
$tdatatparam_administradora_spa[".googleLikeFields"][] = "adm_id_fk";
$tdatatparam_administradora_spa[".googleLikeFields"][] = "clase";
$tdatatparam_administradora_spa[".googleLikeFields"][] = "nombre";
$tdatatparam_administradora_spa[".googleLikeFields"][] = "valor_avg";



$tdatatparam_administradora_spa[".tableType"] = "list";

$tdatatparam_administradora_spa[".printerPageOrientation"] = 0;
$tdatatparam_administradora_spa[".nPrinterPageScale"] = 100;

$tdatatparam_administradora_spa[".nPrinterSplitRecords"] = 40;

$tdatatparam_administradora_spa[".geocodingEnabled"] = false;










$tdatatparam_administradora_spa[".pageSize"] = 20;

$tdatatparam_administradora_spa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_administradora_spa[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_administradora_spa[".orderindexes"] = array();


$tdatatparam_administradora_spa[".sqlHead"] = "SELECT spa_id,  	adm_id_fk,  	clase,  	nombre,  	valor_avg";
$tdatatparam_administradora_spa[".sqlFrom"] = "FROM tparam_administradora_spa";
$tdatatparam_administradora_spa[".sqlWhereExpr"] = "";
$tdatatparam_administradora_spa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_administradora_spa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_administradora_spa[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_administradora_spa[".highlightSearchResults"] = true;

$tableKeystparam_administradora_spa = array();
$tableKeystparam_administradora_spa[] = "spa_id";
$tdatatparam_administradora_spa[".Keys"] = $tableKeystparam_administradora_spa;


$tdatatparam_administradora_spa[".hideMobileList"] = array();




//	spa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "spa_id";
	$fdata["GoodName"] = "spa_id";
	$fdata["ownerTable"] = "tparam_administradora_spa";
	$fdata["Label"] = GetFieldLabel("tparam_administradora_spa","spa_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "spa_id";

		$fdata["sourceSingle"] = "spa_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "spa_id";

	
	
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


	$tdatatparam_administradora_spa["spa_id"] = $fdata;
		$tdatatparam_administradora_spa[".searchableFields"][] = "spa_id";
//	adm_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "adm_id_fk";
	$fdata["GoodName"] = "adm_id_fk";
	$fdata["ownerTable"] = "tparam_administradora_spa";
	$fdata["Label"] = GetFieldLabel("tparam_administradora_spa","adm_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "adm_id_fk";

		$fdata["sourceSingle"] = "adm_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adm_id_fk";

	
	
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


	$tdatatparam_administradora_spa["adm_id_fk"] = $fdata;
		$tdatatparam_administradora_spa[".searchableFields"][] = "adm_id_fk";
//	clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "clase";
	$fdata["GoodName"] = "clase";
	$fdata["ownerTable"] = "tparam_administradora_spa";
	$fdata["Label"] = GetFieldLabel("tparam_administradora_spa","clase");
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


	$tdatatparam_administradora_spa["clase"] = $fdata;
		$tdatatparam_administradora_spa[".searchableFields"][] = "clase";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "tparam_administradora_spa";
	$fdata["Label"] = GetFieldLabel("tparam_administradora_spa","nombre");
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


	$tdatatparam_administradora_spa["nombre"] = $fdata;
		$tdatatparam_administradora_spa[".searchableFields"][] = "nombre";
//	valor_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valor_avg";
	$fdata["GoodName"] = "valor_avg";
	$fdata["ownerTable"] = "tparam_administradora_spa";
	$fdata["Label"] = GetFieldLabel("tparam_administradora_spa","valor_avg");
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


	$tdatatparam_administradora_spa["valor_avg"] = $fdata;
		$tdatatparam_administradora_spa[".searchableFields"][] = "valor_avg";


$tables_data["tparam_administradora_spa"]=&$tdatatparam_administradora_spa;
$field_labels["tparam_administradora_spa"] = &$fieldLabelstparam_administradora_spa;
$fieldToolTips["tparam_administradora_spa"] = &$fieldToolTipstparam_administradora_spa;
$placeHolders["tparam_administradora_spa"] = &$placeHolderstparam_administradora_spa;
$page_titles["tparam_administradora_spa"] = &$pageTitlestparam_administradora_spa;


changeTextControlsToDate( "tparam_administradora_spa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_administradora_spa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_administradora_spa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_administradora_spa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "spa_id,  	adm_id_fk,  	clase,  	nombre,  	valor_avg";
$proto0["m_strFrom"] = "FROM tparam_administradora_spa";
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
	"m_strName" => "spa_id",
	"m_strTable" => "tparam_administradora_spa",
	"m_srcTableName" => "tparam_administradora_spa"
));

$proto6["m_sql"] = "spa_id";
$proto6["m_srcTableName"] = "tparam_administradora_spa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "adm_id_fk",
	"m_strTable" => "tparam_administradora_spa",
	"m_srcTableName" => "tparam_administradora_spa"
));

$proto8["m_sql"] = "adm_id_fk";
$proto8["m_srcTableName"] = "tparam_administradora_spa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "clase",
	"m_strTable" => "tparam_administradora_spa",
	"m_srcTableName" => "tparam_administradora_spa"
));

$proto10["m_sql"] = "clase";
$proto10["m_srcTableName"] = "tparam_administradora_spa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "tparam_administradora_spa",
	"m_srcTableName" => "tparam_administradora_spa"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "tparam_administradora_spa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_avg",
	"m_strTable" => "tparam_administradora_spa",
	"m_srcTableName" => "tparam_administradora_spa"
));

$proto14["m_sql"] = "valor_avg";
$proto14["m_srcTableName"] = "tparam_administradora_spa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tparam_administradora_spa";
$proto17["m_srcTableName"] = "tparam_administradora_spa";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "spa_id";
$proto17["m_columns"][] = "adm_id_fk";
$proto17["m_columns"][] = "clase";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "valor_avg";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tparam_administradora_spa";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tparam_administradora_spa";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_administradora_spa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_administradora_spa = createSqlQuery_tparam_administradora_spa();


	
						;

					

$tdatatparam_administradora_spa[".sqlquery"] = $queryData_tparam_administradora_spa;



$tdatatparam_administradora_spa[".hasEvents"] = false;

?>