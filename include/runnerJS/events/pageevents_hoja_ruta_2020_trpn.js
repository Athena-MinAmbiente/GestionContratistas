
Runner.pages.PageSettings.addPageEvent('hoja_ruta_2020_trpn',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl=Runner.getControl(pageid,'hr_nit_contra_ta');ctrl.makeReadonly();});Runner.pages.PageSettings.addPageEvent('hoja_ruta_2020_trpn',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrla=Runner.getControl(pageid,'hr_nit_contra_ta');ctrla.makeReadonly();var ctrlb=Runner.getControl(pageid,'id_cont_fk');ctrlb.makeReadonly();var ctrlc=Runner.getControl(pageid,'id_informe_fk');ctrlc.makeReadonly();var ctrld=Runner.getControl(pageid,'cxc_id_fk');ctrld.makeReadonly();});