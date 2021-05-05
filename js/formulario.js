//<![CDATA[



/*var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}*/
function preguntar(){
	if (confirm("tus datos estan seguros")) {
    	alert("pronto te estaremos respondiendo");
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
