<?php
			$optionsArray = array( 'totals' => array( 'planilla_id' => array( 'totalsType' => '' ),
'order_id' => array( 'totalsType' => '' ),
'inf_id_fk' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'contrato_num' => array( 'totalsType' => '' ),
'contrato_vigencia' => array( 'totalsType' => '' ),
'pago_mensual' => array( 'totalsType' => '' ),
'base_liq' => array( 'totalsType' => '' ),
'tipo_administradora' => array( 'totalsType' => '' ),
'tipo_subsistema' => array( 'totalsType' => '' ),
'clase' => array( 'totalsType' => '' ),
'nombre' => array( 'totalsType' => '' ),
'valor_avg' => array( 'totalsType' => '' ),
'valor_ref' => array( 'totalsType' => '' ),
'planilla_num' => array( 'totalsType' => '' ),
'planilla_fecha' => array( 'totalsType' => '' ),
'planilla_valor' => array( 'totalsType' => '' ),
'planilla_mes' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'base_liq',
'clase',
'nombre',
'pago_mensual',
'planilla_fecha',
'planilla_mes',
'planilla_num',
'planilla_valor',
'tipo_administradora',
'tipo_subsistema',
'valor_avg',
'valor_ref' ),
'exportFields' => array( 'base_liq',
'clase',
'nombre',
'pago_mensual',
'planilla_fecha',
'planilla_mes',
'planilla_num',
'planilla_valor',
'tipo_administradora',
'tipo_subsistema',
'valor_avg',
'valor_ref' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'base_liq' => array( 'export_field' ),
'clase' => array( 'export_field1' ),
'nombre' => array( 'export_field6' ),
'pago_mensual' => array( 'export_field8' ),
'planilla_fecha' => array( 'export_field9' ),
'planilla_mes' => array( 'export_field11' ),
'planilla_num' => array( 'export_field12' ),
'planilla_valor' => array( 'export_field13' ),
'tipo_administradora' => array( 'export_field15' ),
'tipo_subsistema' => array( 'export_field16' ),
'valor_avg' => array( 'export_field17' ),
'valor_ref' => array( 'export_field18' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field6',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field6' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field15' => 'grid',
'export_field16' => 'grid',
'export_field17' => 'grid',
'export_field18' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field6',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field6',
'export_field8',
'export_field9',
'export_field11',
'export_field12',
'export_field13',
'export_field15',
'export_field16',
'export_field17',
'export_field18' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'base_liq',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'clase',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'nombre',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'pago_mensual',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'planilla_fecha',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'planilla_mes',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'planilla_num',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'planilla_valor',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'tipo_administradora',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'tipo_subsistema',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'valor_avg',
'type' => 'export_field' ),
'export_field18' => array( 'field' => 'valor_ref',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>