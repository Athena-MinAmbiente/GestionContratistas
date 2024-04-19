
Runner.controls.EditTagEditor=Runner.extend(Runner.controls.Control,{autocomplete:false,constructor:function(cfg){this.addEvent(["change","keyup"]);Runner.controls.EditTagEditor.superclass.constructor.call(this,cfg);this.autocomplete=this.getFieldSetting("autocomplete");if(this.autocomplete){$("#"+this.valContId).tagit({autocomplete:{delay:0,minLength:1,source:"tagit_search.php"}});}
else{$("#"+this.valContId).tagit();}},getForSubmit:function(){if(!this.appearOnPage()){return[];}
return[this.valueElem.clone().val(this.getValue())]}});Runner.controls.constants["EditTagEditor"]="EditTagEditor";