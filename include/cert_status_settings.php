<?php
$tdatacert_status = array();
$tdatacert_status[".searchableFields"] = array();
$tdatacert_status[".ShortName"] = "cert_status";
$tdatacert_status[".OwnerID"] = "";
$tdatacert_status[".OriginalTable"] = "cert_status";


$tdatacert_status[".pagesByType"] = my_json_decode( "{}" );
$tdatacert_status[".originalPagesByType"] = $tdatacert_status[".pagesByType"];
$tdatacert_status[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacert_status[".originalPages"] = $tdatacert_status[".pages"];
$tdatacert_status[".defaultPages"] = my_json_decode( "{}" );
$tdatacert_status[".originalDefaultPages"] = $tdatacert_status[".defaultPages"];

//	field labels
$fieldLabelscert_status = array();
$fieldToolTipscert_status = array();
$pageTitlescert_status = array();
$placeHolderscert_status = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscert_status["Spanish"] = array();
	$fieldToolTipscert_status["Spanish"] = array();
	$placeHolderscert_status["Spanish"] = array();
	$pageTitlescert_status["Spanish"] = array();
	$fieldLabelscert_status["Spanish"]["certs_id"] = "Certs Id";
	$fieldToolTipscert_status["Spanish"]["certs_id"] = "";
	$placeHolderscert_status["Spanish"]["certs_id"] = "";
	$fieldLabelscert_status["Spanish"]["certs_nombre"] = "Certs Nombre";
	$fieldToolTipscert_status["Spanish"]["certs_nombre"] = "";
	$placeHolderscert_status["Spanish"]["certs_nombre"] = "";
	if (count($fieldToolTipscert_status["Spanish"]))
		$tdatacert_status[".isUseToolTips"] = true;
}


	$tdatacert_status[".NCSearch"] = true;



$tdatacert_status[".shortTableName"] = "cert_status";
$tdatacert_status[".nSecOptions"] = 0;

$tdatacert_status[".mainTableOwnerID"] = "";
$tdatacert_status[".entityType"] = 0;
$tdatacert_status[".connId"] = "contratacion_at_172_18_0_115";


$tdatacert_status[".strOriginalTableName"] = "cert_status";

	



$tdatacert_status[".showAddInPopup"] = false;

$tdatacert_status[".showEditInPopup"] = false;

$tdatacert_status[".showViewInPopup"] = false;

$tdatacert_status[".listAjax"] = false;
//	temporary
//$tdatacert_status[".listAjax"] = false;

	$tdatacert_status[".audit"] = false;

	$tdatacert_status[".locking"] = false;


$pages = $tdatacert_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacert_status[".edit"] = true;
	$tdatacert_status[".afterEditAction"] = 1;
	$tdatacert_status[".closePopupAfterEdit"] = 1;
	$tdatacert_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacert_status[".add"] = true;
$tdatacert_status[".afterAddAction"] = 1;
$tdatacert_status[".closePopupAfterAdd"] = 1;
$tdatacert_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacert_status[".list"] = true;
}



$tdatacert_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacert_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacert_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacert_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacert_status[".printFriendly"] = true;
}



$tdatacert_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacert_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacert_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacert_status[".isUseAjaxSuggest"] = true;



												

$tdatacert_status[".ajaxCodeSnippetAdded"] = false;

$tdatacert_status[".buttonsAdded"] = false;

$tdatacert_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacert_status[".isUseTimeForSearch"] = false;


$tdatacert_status[".badgeColor"] = "778899";


$tdatacert_status[".allSearchFields"] = array();
$tdatacert_status[".filterFields"] = array();
$tdatacert_status[".requiredSearchFields"] = array();

$tdatacert_status[".googleLikeFields"] = array();
$tdatacert_status[".googleLikeFields"][] = "certs_id";
$tdatacert_status[".googleLikeFields"][] = "certs_nombre";



$tdatacert_status[".tableType"] = "list";

$tdatacert_status[".printerPageOrientation"] = 0;
$tdatacert_status[".nPrinterPageScale"] = 100;

$tdatacert_status[".nPrinterSplitRecords"] = 40;

$tdatacert_status[".geocodingEnabled"] = false;










$tdatacert_status[".pageSize"] = 20;

$tdatacert_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacert_status[".strOrderBy"] = $tstrOrderBy;

$tdatacert_status[".orderindexes"] = array();


$tdatacert_status[".sqlHead"] = "SELECT certs_id,  	certs_nombre";
$tdatacert_status[".sqlFrom"] = "FROM cert_status";
$tdatacert_status[".sqlWhereExpr"] = "";
$tdatacert_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacert_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacert_status[".arrGroupsPerPage"] = $arrGPP;

$tdatacert_status[".highlightSearchResults"] = true;

$tableKeyscert_status = array();
$tableKeyscert_status[] = "certs_id";
$tdatacert_status[".Keys"] = $tableKeyscert_status;


$tdatacert_status[".hideMobileList"] = array();




//	certs_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "certs_id";
	$fdata["GoodName"] = "certs_id";
	$fdata["ownerTable"] = "cert_status";
	$fdata["Label"] = GetFieldLabel("cert_status","certs_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "certs_id";

		$fdata["sourceSingle"] = "certs_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certs_id";

	
	
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


	$tdatacert_status["certs_id"] = $fdata;
		$tdatacert_status[".searchableFields"][] = "certs_id";
//	certs_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "certs_nombre";
	$fdata["GoodName"] = "certs_nombre";
	$fdata["ownerTable"] = "cert_status";
	$fdata["Label"] = GetFieldLabel("cert_status","certs_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "certs_nombre";

		$fdata["sourceSingle"] = "certs_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "certs_nombre";

	
	
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


	$tdatacert_status["certs_nombre"] = $fdata;
		$tdatacert_status[".searchableFields"][] = "certs_nombre";


$tables_data["cert_status"]=&$tdatacert_status;
$field_labels["cert_status"] = &$fieldLabelscert_status;
$fieldToolTips["cert_status"] = &$fieldToolTipscert_status;
$placeHolders["cert_status"] = &$placeHolderscert_status;
$page_titles["cert_status"] = &$pageTitlescert_status;


changeTextControlsToDate( "cert_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cert_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cert_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cert_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "certs_id,  	certs_nombre";
$proto0["m_strFrom"] = "FROM cert_status";
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
	"m_strName" => "certs_id",
	"m_strTable" => "cert_status",
	"m_srcTableName" => "cert_status"
));

$proto6["m_sql"] = "certs_id";
$proto6["m_srcTableName"] = "cert_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "certs_nombre",
	"m_strTable" => "cert_status",
	"m_srcTableName" => "cert_status"
));

$proto8["m_sql"] = "certs_nombre";
$proto8["m_srcTableName"] = "cert_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cert_status";
$proto11["m_srcTableName"] = "cert_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "certs_id";
$proto11["m_columns"][] = "certs_nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cert_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cert_status";
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
$proto0["m_srcTableName"]="cert_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cert_status = createSqlQuery_cert_status();


	
								;

		

$tdatacert_status[".sqlquery"] = $queryData_cert_status;



$tdatacert_status[".hasEvents"] = false;

?>