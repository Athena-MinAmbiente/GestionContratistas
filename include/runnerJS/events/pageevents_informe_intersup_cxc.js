
Runner.pages.PageSettings.addPageEvent('informe_intersup_cxc',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrla=Runner.getControl(pageid,'id_cont');ctrla.makeReadonly();var ctrlb=Runner.getControl(pageid,'cxc_numdoc');ctrlb.makeReadonly();var ctrlc=Runner.getControl(pageid,'cont_banco');ctrlc.makeReadonly();var ctrld=Runner.getControl(pageid,'cont_factura');ctrld.makeReadonly();var ctrle=Runner.getControl(pageid,'cont_cuentatipo');ctrle.makeReadonly();var ctrle=Runner.getControl(pageid,'cont_cuentatipo');ctrle.makeReadonly();});