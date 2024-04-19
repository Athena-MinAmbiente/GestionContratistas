<?php
$tdatatparam_administradora = array();
$tdatatparam_administradora[".searchableFields"] = array();
$tdatatparam_administradora[".ShortName"] = "tparam_administradora";
$tdatatparam_administradora[".OwnerID"] = "";
$tdatatparam_administradora[".OriginalTable"] = "tparam_administradora";


$tdatatparam_administradora[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_administradora[".originalPagesByType"] = $tdatatparam_administradora[".pagesByType"];
$tdatatparam_administradora[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_administradora[".originalPages"] = $tdatatparam_administradora[".pages"];
$tdatatparam_administradora[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_administradora[".originalDefaultPages"] = $tdatatparam_administradora[".defaultPages"];

//	field labels
$fieldLabelstparam_administradora = array();
$fieldToolTipstparam_administradora = array();
$pageTitlestparam_administradora = array();
$placeHolderstparam_administradora = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_administradora["Spanish"] = array();
	$fieldToolTipstparam_administradora["Spanish"] = array();
	$placeHolderstparam_administradora["Spanish"] = array();
	$pageTitlestparam_administradora["Spanish"] = array();
	$fieldLabelstparam_administradora["Spanish"]["adm_id"] = "Adm Id";
	$fieldToolTipstparam_administradora["Spanish"]["adm_id"] = "";
	$placeHolderstparam_administradora["Spanish"]["adm_id"] = "";
	$fieldLabelstparam_administradora["Spanish"]["nombre_adm"] = "Nombre Adm";
	$fieldToolTipstparam_administradora["Spanish"]["nombre_adm"] = "";
	$placeHolderstparam_administradora["Spanish"]["nombre_adm"] = "";
	if (count($fieldToolTipstparam_administradora["Spanish"]))
		$tdatatparam_administradora[".isUseToolTips"] = true;
}


	$tdatatparam_administradora[".NCSearch"] = true;



$tdatatparam_administradora[".shortTableName"] = "tparam_administradora";
$tdatatparam_administradora[".nSecOptions"] = 0;

$tdatatparam_administradora[".mainTableOwnerID"] = "";
$tdatatparam_administradora[".entityType"] = 0;
$tdatatparam_administradora[".connId"] = "dbct_at_localhost";


$tdatatparam_administradora[".strOriginalTableName"] = "tparam_administradora";

	



$tdatatparam_administradora[".showAddInPopup"] = false;

$tdatatparam_administradora[".showEditInPopup"] = false;

$tdatatparam_administradora[".showViewInPopup"] = false;

$tdatatparam_administradora[".listAjax"] = false;
//	temporary
//$tdatatparam_administradora[".listAjax"] = false;

	$tdatatparam_administradora[".audit"] = false;

	$tdatatparam_administradora[".locking"] = false;


$pages = $tdatatparam_administradora[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_administradora[".edit"] = true;
	$tdatatparam_administradora[".afterEditAction"] = 1;
	$tdatatparam_administradora[".closePopupAfterEdit"] = 1;
	$tdatatparam_administradora[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_administradora[".add"] = true;
$tdatatparam_administradora[".afterAddAction"] = 1;
$tdatatparam_administradora[".closePopupAfterAdd"] = 1;
$tdatatparam_administradora[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_administradora[".list"] = true;
}



$tdatatparam_administradora[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_administradora[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_administradora[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_administradora[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_administradora[".printFriendly"] = true;
}



$tdatatparam_administradora[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_administradora[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_administradora[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_administradora[".isUseAjaxSuggest"] = true;



												

$tdatatparam_administradora[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_administradora[".buttonsAdded"] = false;

$tdatatparam_administradora[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_administradora[".isUseTimeForSearch"] = false;


$tdatatparam_administradora[".badgeColor"] = "DC143C";


$tdatatparam_administradora[".allSearchFields"] = array();
$tdatatparam_administradora[".filterFields"] = array();
$tdatatparam_administradora[".requiredSearchFields"] = array();

$tdatatparam_administradora[".googleLikeFields"] = array();
$tdatatparam_administradora[".googleLikeFields"][] = "adm_id";
$tdatatparam_administradora[".googleLikeFields"][] = "nombre_adm";



$tdatatparam_administradora[".tableType"] = "list";

$tdatatparam_administradora[".printerPageOrientation"] = 0;
$tdatatparam_administradora[".nPrinterPageScale"] = 100;

$tdatatparam_administradora[".nPrinterSplitRecords"] = 40;

$tdatatparam_administradora[".geocodingEnabled"] = false;










$tdatatparam_administradora[".pageSize"] = 20;

$tdatatparam_administradora[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_administradora[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_administradora[".orderindexes"] = array();


$tdatatparam_administradora[".sqlHead"] = "SELECT adm_id,  	nombre_adm";
$tdatatparam_administradora[".sqlFrom"] = "FROM tparam_administradora";
$tdatatparam_administradora[".sqlWhereExpr"] = "";
$tdatatparam_administradora[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_administradora[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_administradora[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_administradora[".highlightSearchResults"] = true;

$tableKeystparam_administradora = array();
$tableKeystparam_administradora[] = "adm_id";
$tdatatparam_administradora[".Keys"] = $tableKeystparam_administradora;


$tdatatparam_administradora[".hideMobileList"] = array();




//	adm_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "adm_id";
	$fdata["GoodName"] = "adm_id";
	$fdata["ownerTable"] = "tparam_administradora";
	$fdata["Label"] = GetFieldLabel("tparam_administradora","adm_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "adm_id";

		$fdata["sourceSingle"] = "adm_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adm_id";

	
	
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


	$tdatatparam_administradora["adm_id"] = $fdata;
		$tdatatparam_administradora[".searchableFields"][] = "adm_id";
//	nombre_adm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre_adm";
	$fdata["GoodName"] = "nombre_adm";
	$fdata["ownerTable"] = "tparam_administradora";
	$fdata["Label"] = GetFieldLabel("tparam_administradora","nombre_adm");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_adm";

		$fdata["sourceSingle"] = "nombre_adm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_adm";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_administradora["nombre_adm"] = $fdata;
		$tdatatparam_administradora[".searchableFields"][] = "nombre_adm";


$tables_data["tparam_administradora"]=&$tdatatparam_administradora;
$field_labels["tparam_administradora"] = &$fieldLabelstparam_administradora;
$fieldToolTips["tparam_administradora"] = &$fieldToolTipstparam_administradora;
$placeHolders["tparam_administradora"] = &$placeHolderstparam_administradora;
$page_titles["tparam_administradora"] = &$pageTitlestparam_administradora;


changeTextControlsToDate( "tparam_administradora" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_administradora"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_administradora"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_administradora()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "adm_id,  	nombre_adm";
$proto0["m_strFrom"] = "FROM tparam_administradora";
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
	"m_strName" => "adm_id",
	"m_strTable" => "tparam_administradora",
	"m_srcTableName" => "tparam_administradora"
));

$proto6["m_sql"] = "adm_id";
$proto6["m_srcTableName"] = "tparam_administradora";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_adm",
	"m_strTable" => "tparam_administradora",
	"m_srcTableName" => "tparam_administradora"
));

$proto8["m_sql"] = "nombre_adm";
$proto8["m_srcTableName"] = "tparam_administradora";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_administradora";
$proto11["m_srcTableName"] = "tparam_administradora";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "adm_id";
$proto11["m_columns"][] = "nombre_adm";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_administradora";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_administradora";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_administradora";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_administradora = createSqlQuery_tparam_administradora();


	
						;

		

$tdatatparam_administradora[".sqlquery"] = $queryData_tparam_administradora;



$tdatatparam_administradora[".hasEvents"] = false;

?>