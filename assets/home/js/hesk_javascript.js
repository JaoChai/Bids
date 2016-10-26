/*******************************************************************************
*  Title: Helpdesk software Hesk
*  Version: 0.94 @ April 23, 2007
*  Author: Klemen Stirn
*  Website: http://www.phpjunkyard.com
********************************************************************************
*  COPYRIGHT NOTICE
*  Copyright 2005-2007 Klemen Stirn. All Rights Reserved.
*
*  This script may be used and modified free of charge by anyone
*  AS LONG AS COPYRIGHT NOTICES AND ALL THE COMMENTS REMAIN INTACT.
*  By using this code you agree to indemnify Klemen Stirn from any
*  liability that might arise from it's use.
*
*  Selling the code for this program, in part or full, without prior
*  written consent is expressly forbidden.
*
*  Obtain permission before redistributing this software over the Internet
*  or in any other medium. In all cases copyright and header must remain
*  intact. This Copyright is in full effect in any country that has
*  International Trade Agreements with the United States of America or
*  with the European Union.
*
*  Removing any of the copyright notices without purchasing a license
*  is illegal! To remove PHPJunkyard copyright notice you must purchase a
*  license for this script. For more information on how to obtain a license
*  please visit the site below:
*  http://www.phpjunkyard.com/copyright-removal.php
*******************************************************************************/

function hesk_insertTag(tag) {
var text_to_insert = '%%'+tag+'%%';
hesk_insertAtCursor(document.form1.msg, text_to_insert);
document.form1.message.focus();
}

function hesk_insertAtCursor(myField, myValue) {
if (document.selection) {
myField.focus();
sel = document.selection.createRange();
sel.text = myValue;
}
else if (myField.selectionStart || myField.selectionStart == '0') {
var startPos = myField.selectionStart;
var endPos = myField.selectionEnd;
myField.value = myField.value.substring(0, startPos)
+ myValue
+ myField.value.substring(endPos, myField.value.length);
} else {
myField.value += myValue;
}
}

function hesk_changeAll() {
d=document.form1;
  for (var i = 0; i < d.elements.length; i++) {
    if(d.elements[i].type == 'checkbox'){
      d.elements[i].checked = !(d.elements[i].checked);
    }
  }
}

function hesk_attach_disable(ids) {
 for($i=0;$i<ids.length;$i++) {
      if (ids[$i]=='c11'||ids[$i]=='c21'||ids[$i]=='c31'||ids[$i]=='c41'||ids[$i]=='c51') {
            document.getElementById(ids[$i]).checked=false;
      }
      document.getElementById(ids[$i]).disabled=true;
 }
}

function hesk_attach_enable(ids) {
 for($i=0;$i<ids.length;$i++) {
      document.getElementById(ids[$i]).disabled=false;
 }
}

function hesk_attach_toggle(control,ids) {
 if (document.getElementById(control).checked) {
     hesk_attach_enable(ids);
 } else {
     hesk_attach_disable(ids);
 }
}

function hesk_help(PAGE,HGT,WDT)
{
 var HeskWin = window.open("help_files/"+PAGE,"Hesk_help","height="+HGT+",width="+WDT+",toolbar=0,status=0,resizable=1,scrollbars=1");
 HeskWin.focus();
}

function hesk_toggleLayerDisplay(nr) {
	if (document.all)
		document.all[nr].style.display = (document.all[nr].style.display == 'none') ? 'block' : 'none';
	else if (document.getElementById)
		document.getElementById(nr).style.display = (document.getElementById(nr).style.display == 'none') ? 'block' : 'none';
}
