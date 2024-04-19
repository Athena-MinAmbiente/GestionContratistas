<?php
$tdatatparam_gruposanguineo = array();
$tdatatparam_gruposanguineo[".searchableFields"] = array();
$tdatatparam_gruposanguineo[".ShortName"] = "tparam_gruposanguineo";
$tdatatparam_gruposanguineo[".OwnerID"] = "";
$tdatatparam_gruposanguineo[".OriginalTable"] = "tparam_gruposanguineo";


$tdatatparam_gruposanguineo[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_gruposanguineo[".originalPagesByType"] = $tdatatparam_gruposanguineo[".pagesByType"];
$tdatatparam_gruposanguineo[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_gruposanguineo[".originalPages"] = $tdatatparam_gruposanguineo[".pages"];
$tdatatparam_gruposanguineo[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_gruposanguineo[".originalDefaultPages"] = $tdatatparam_gruposanguineo[".defaultPages"];

//	field labels
$fieldLabelstparam_gruposanguineo = array();
$fieldToolTipstparam_gruposanguineo = array();
$pageTitlestparam_gruposanguineo = array();
$placeHolderstparam_gruposanguineo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_gruposanguineo["Spanish"] = array();
	$fieldToolTipstparam_gruposanguineo["Spanish"] = array();
	$placeHolderstparam_gruposanguineo["Spanish"] = array();
	$pageTitlestparam_gruposanguineo["Spanish"] = array();
	$fieldLabelstparam_gruposanguineo["Spanish"]["gs_id"] = "Gs Id";
	$fieldToolTipstparam_gruposanguineo["Spanish"]["gs_id"] = "";
	$placeHolderstparam_gruposanguineo["Spanish"]["gs_id"] = "";
	$fieldLabelstparam_gruposanguineo["Spanish"]["gs_name"] = "Gs Name";
	$fieldToolTipstparam_gruposanguineo["Spanish"]["gs_name"] = "";
	$placeHolderstparam_gruposanguineo["Spanish"]["gs_name"] = "";
	if (count($fieldToolTipstparam_gruposanguineo["Spanish"]))
		$tdatatparam_gruposanguineo[".isUseToolTips"] = true;
}


	$tdatatparam_gruposanguineo[".NCSearch"] = true;



$tdatatparam_gruposanguineo[".shortTableName"] = "tparam_gruposanguineo";
$tdatatparam_gruposanguineo[".nSecOptions"] = 0;

$tdatatparam_gruposanguineo[".mainTableOwnerID"] = "";
$tdatatparam_gruposanguineo[".entityType"] = 0;
$tdatatparam_gruposanguineo[".connId"] = "edl_at_127_0_0_1";


$tdatatparam_gruposanguineo[".strOriginalTableName"] = "tparam_gruposanguineo";

	



$tdatatparam_gruposanguineo[".showAddInPopup"] = false;

$tdatatparam_gruposanguineo[".showEditInPopup"] = false;

$tdatatparam_gruposanguineo[".showViewInPopup"] = false;

$tdatatparam_gruposanguineo[".listAjax"] = false;
//	temporary
//$tdatatparam_gruposanguineo[".listAjax"] = false;

	$tdatatparam_gruposanguineo[".audit"] = true;

	$tdatatparam_gruposanguineo[".locking"] = false;


$pages = $tdatatparam_gruposanguineo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_gruposanguineo[".edit"] = true;
	$tdatatparam_gruposanguineo[".afterEditAction"] = 1;
	$tdatatparam_gruposanguineo[".closePopupAfterEdit"] = 1;
	$tdatatparam_gruposanguineo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_gruposanguineo[".add"] = true;
$tdatatparam_gruposanguineo[".afterAddAction"] = 1;
$tdatatparam_gruposanguineo[".closePopupAfterAdd"] = 1;
$tdatatparam_gruposanguineo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_gruposanguineo[".list"] = true;
}



$tdatatparam_gruposanguineo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_gruposanguineo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_gruposanguineo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_gruposanguineo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_gruposanguineo[".printFriendly"] = true;
}



$tdatatparam_gruposanguineo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_gruposanguineo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_gruposanguineo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_gruposanguineo[".isUseAjaxSuggest"] = true;



												

$tdatatparam_gruposanguineo[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_gruposanguineo[".buttonsAdded"] = false;

$tdatatparam_gruposanguineo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_gruposanguineo[".isUseTimeForSearch"] = false;


$tdatatparam_gruposanguineo[".badgeColor"] = "BC8F8F";


$tdatatparam_gruposanguineo[".allSearchFields"] = array();
$tdatatparam_gruposanguineo[".filterFields"] = array();
$tdatatparam_gruposanguineo[".requiredSearchFields"] = array();

$tdatatparam_gruposanguineo[".googleLikeFields"] = array();
$tdatatparam_gruposanguineo[".googleLikeFields"][] = "gs_id";
$tdatatparam_gruposanguineo[".googleLikeFields"][] = "gs_name";



$tdatatparam_gruposanguineo[".tableType"] = "list";

$tdatatparam_gruposanguineo[".printerPageOrientation"] = 0;
$tdatatparam_gruposanguineo[".nPrinterPageScale"] = 100;

$tdatatparam_gruposanguineo[".nPrinterSplitRecords"] = 40;

$tdatatparam_gruposanguineo[".geocodingEnabled"] = false;










$tdatatparam_gruposanguineo[".pageSize"] = 20;

$tdatatparam_gruposanguineo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_gruposanguineo[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_gruposanguineo[".orderindexes"] = array();


$tdatatparam_gruposanguineo[".sqlHead"] = "SELECT gs_id,  	gs_name";
$tdatatparam_gruposanguineo[".sqlFrom"] = "FROM tparam_gruposanguineo";
$tdatatparam_gruposanguineo[".sqlWhereExpr"] = "";
$tdatatparam_gruposanguineo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_gruposanguineo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_gruposanguineo[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_gruposanguineo[".highlightSearchResults"] = true;

$tableKeystparam_gruposanguineo = array();
$tableKeystparam_gruposanguineo[] = "gs_id";
$tdatatparam_gruposanguineo[".Keys"] = $tableKeystparam_gruposanguineo;


$tdatatparam_gruposanguineo[".hideMobileList"] = array();




//	gs_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "gs_id";
	$fdata["GoodName"] = "gs_id";
	$fdata["ownerTable"] = "tparam_gruposanguineo";
	$fdata["Label"] = GetFieldLabel("tparam_gruposanguineo","gs_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "gs_id";

		$fdata["sourceSingle"] = "gs_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gs_id";

	
	
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


	$tdatatparam_gruposanguineo["gs_id"] = $fdata;
		$tdatatparam_gruposanguineo[".searchableFields"][] = "gs_id";
//	gs_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gs_name";
	$fdata["GoodName"] = "gs_name";
	$fdata["ownerTable"] = "tparam_gruposanguineo";
	$fdata["Label"] = GetFieldLabel("tparam_gruposanguineo","gs_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gs_name";

		$fdata["sourceSingle"] = "gs_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gs_name";

	
	
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


	$tdatatparam_gruposanguineo["gs_name"] = $fdata;
		$tdatatparam_gruposanguineo[".searchableFields"][] = "gs_name";


$tables_data["tparam_gruposanguineo"]=&$tdatatparam_gruposanguineo;
$field_labels["tparam_gruposanguineo"] = &$fieldLabelstparam_gruposanguineo;
$fieldToolTips["tparam_gruposanguineo"] = &$fieldToolTipstparam_gruposanguineo;
$placeHolders["tparam_gruposanguineo"] = &$placeHolderstparam_gruposanguineo;
$page_titles["tparam_gruposanguineo"] = &$pageTitlestparam_gruposanguineo;


changeTextControlsToDate( "tparam_gruposanguineo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_gruposanguineo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_gruposanguineo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_gruposanguineo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "gs_id,  	gs_name";
$proto0["m_strFrom"] = "FROM tparam_gruposanguineo";
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
	"m_strName" => "gs_id",
	"m_strTable" => "tparam_gruposanguineo",
	"m_srcTableName" => "tparam_gruposanguineo"
));

$proto6["m_sql"] = "gs_id";
$proto6["m_srcTableName"] = "tparam_gruposanguineo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "gs_name",
	"m_strTable" => "tparam_gruposanguineo",
	"m_srcTableName" => "tparam_gruposanguineo"
));

$proto8["m_sql"] = "gs_name";
$proto8["m_srcTableName"] = "tparam_gruposanguineo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_gruposanguineo";
$proto11["m_srcTableName"] = "tparam_gruposanguineo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "gs_id";
$proto11["m_columns"][] = "gs_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_gruposanguineo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_gruposanguineo";
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
$proto0["m_srcTableName"]="tparam_gruposanguineo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_gruposanguineo = createSqlQuery_tparam_gruposanguineo();


	
						;

		

$tdatatparam_gruposanguineo[".sqlquery"] = $queryData_tparam_gruposanguineo;



$tdatatparam_gruposanguineo[".hasEvents"] = false;

?>