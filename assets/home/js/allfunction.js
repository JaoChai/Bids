// JavaScript Document
function ChangeLanguage(id)
{
	lngurl = "changelanguage.php?lng=" + id;
	window.location.href = lngurl;
}

function CheckSearch()
{
	if(document.searchform.searchtext.value=="")
	{
		return false;
	}
}

function DoNewObject()
{
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
		}
	}
	//If we are using a non-IE browser, create a JavaScript instance of the object.
	if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function onBeforeUnloadAction()
{
	var url1="updatelogin.php";
	if(!xmlhttp)
	{
		var xmlhttp = false;
		xmlhttp = DoNewObject();
	}
	xmlhttp.open("GET",url1)
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var temp=xmlhttp.responseText;
		}
	}
xmlhttp.send(null);
}

window.onbeforeunload = function(f){
	if(!f) f = window.event;
	if(typeof f.pageX == "number")
	{
		X = f.pageX;
		Y = f.pageY;
	}
	else
	{
		X = f.clientX;
		Y = f.clientY;
	}
	if((X<0) || (Y<0))
	{
		 return onBeforeUnloadAction();
	}
}

function UpdateLoginLogout()
{
	st = document.getElementById('buynowconfirm');
	if(!st)
	{
		url1 = "updatelogin.php?buy_st=1";
	}
	else
	{
		url1 = "updatelogin.php";
	}
	if(!xmlhttp)
	{
		var xmlhttp = false;
		xmlhttp = DoNewObject();
	}
	xmlhttp.open("GET",url1)
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var temp=xmlhttp.responseText;
		}
	}
xmlhttp.send(null);
}


function ShowMainTitle(div_id)
{
	var obj1 = document.getElementById('GetGlobalID');
	//var obj = document.getElementById('');
	if(obj1.innerHTML=="")
	{
		obj1.innerHTML=div_id;
		var obj = document.getElementById('subtitle_'+div_id);
		if(navigator.appName!="Microsoft Internet Explorer")
		{
			obj.style.display = 'table-row';
		}
		else
		{
			obj.style.display = 'block';
		}
	}
	else
	{
		var obj2 = document.getElementById('subtitle_'+obj1.innerHTML);
		obj2.style.display = 'none';
		obj1.innerHTML=div_id;
		var obj3 = document.getElementById('subtitle_'+div_id);
		if(navigator.appName!="Microsoft Internet Explorer")
		{
			obj3.style.display = 'table-row';
		}
		else
		{
			obj3.style.display = 'block';
		}
	}
}
function ShowAnsTitle(ans_id)
{
	var obj4 = document.getElementById('GetGlobalAnsID');
	//var obj = document.getElementById('');
	if(obj4.innerHTML=="")
	{
		obj4.innerHTML=ans_id;
		var obj5 = document.getElementById('answer_'+ans_id);
		if(navigator.appName!="Microsoft Internet Explorer")
		{
			obj5.style.display = 'table-row';
		}
		else
		{
			obj5.style.display = 'block';
		}
	}
	else
	{
		var obj6 = document.getElementById('answer_'+obj4.innerHTML);
		obj6.style.display = 'none';
		obj4.innerHTML=ans_id;
		var obj7 = document.getElementById('answer_'+ans_id);
		if(navigator.appName!="Microsoft Internet Explorer")
		{
			obj7.style.display = 'table-row';
		}
		else
		{
			obj7.style.display = 'block';
		}
	}
}
function Checkregister()
{
	if(document.registration.firstname.value=="")
	{
		alert(lng_regenterfirstname);
		document.registration.firstname.focus();
		return false;
	}

	if(document.registration.lastname.value=="")
	{
		alert(lng_regenterlastname);
		document.registration.lastname.focus();
		return false;
	}

	if(document.registration.date.value=="dd")
	{
		alert(lng_regselbirthdate);
		document.registration.date.focus();
		return false;
	}

	if(document.registration.month.value=="mm")
	{
		alert(lng_regselbirthdate);
		document.registration.month.focus();
		return false;
	}

	if(document.registration.year.value=="yyyy")
	{
		alert(lng_regselbirthdate);
		document.registration.year.focus();
		return false;
	}

	if(document.registration.idnumber.value=='1')
	{
		if(document.registration.pin1.value!="" || document.registration.pin2.value!="" || document.registration.pin3.value!="" || document.registration.pin4.value!="" || document.registration.pin5.value!="")
		{
			if(document.registration.pin1.value.length<1 || document.registration.pin2.value.length<4 || document.registration.pin3.value.length<5 || document.registration.pin4.value.length<2 || document.registration.pin5.value.length<1)
			{
				alert(lng_regenteridno_valid);
				return false;
			}
		}

		if(document.registration.pin1.value=="" || document.registration.pin2.value=="" || document.registration.pin3.value=="" || document.registration.pin4.value=="" || document.registration.pin5.value=="")
		{
			if(document.registration.passport.value=='')
			{
				alert(lng_regenteridno);
				return false;
			}
		}

		if(document.registration.pin1.value.length<1 || document.registration.pin2.value.length<4 || document.registration.pin3.value.length<5 || document.registration.pin4.value.length<2 || document.registration.pin5.value.length<1)
		{
			if(document.registration.passport.value=='')
			{
				alert(lng_regenteridno);
				return false;
			}
		}
	}

	/*if(document.registration.addressline1.value=="")
	{
		alert(lng_regenteraddress);
		document.registration.addressline1.focus();
		return false;
	}
	if(document.registration.addressline2.value=="")
	{
		alert(lng_regenteraddress);
		document.registration.addressline2.focus();
		return false;
	}
	if(document.registration.city.value=="")
	{
		alert(lng_regentercity);
		document.registration.city.focus();
		return false;
	}

	if(document.registration.state.value=="")
	{
		alert("Please Enter State!");
		document.registration.state.focus();
		return false;
	}

	if(document.registration.postcode.value=="")
	{
		alert(lng_regenterpostcode);
		document.registration.postcode.focus();
		return false;
	}

	if(document.registration.countrycode.value=="none")
	{
		alert(lng_regentercountry);
		document.registration.countrycode.focus();
		return false;
	}
	else
	{
	if(document.registration.countrycode.value=='1|226')
	{
		if (document.registration.state2.value=="") {
			alert(lng_enterstate)
			document.registration.state2.focus();
			return false;
		}
		}else{
			if (document.registration.state1.value=="") {
			alert(lng_enterstate)
			document.registration.state1.focus();
			return false;
		}
	}
	}
*/
	if(document.registration.phoneno.value=="")
	{
		alert(lng_regenterphoneno);
		document.registration.phoneno.focus();
		return false;
	}
	if(document.registration.username.value=="")
	{
		alert(lng_plsenterusername);
		document.registration.username.focus();
		return false;
	}
	if(document.registration.username.value!="")
	{
		var username = document.registration.username.value;
		if(username.length < 6)
		{
			alert(lng_regusernametooshort);
			document.registration.username.focus();
			document.registration.username.select();
			return false;
		}
		if(username.length > 12)
		{
			alert(lng_regusernametoolong);
			document.registration.username.focus();
			document.registration.username.select();
			return false;
		}

		var reg1 = "^[Dd][Ii1][Nn][O0o]";
		var reg2 = "[Bb][Oo0][Tt]$";
		var reg3 = "[Dd][Ii1][Nn][O0o][Zz][Aa]";
		var res1 = username.match(reg1);
		var res2 = username.match(reg2);
		var res3 = username.match(reg3);
		if(res1 !=null || res2 != null || res3 != null)
		{
			alert(lng_wrongnameformat);
			document.registration.username.focus();
			document.registration.username.select();
			return false;
		}
	}

	var userflag = 0;
	var username = document.registration.username.value;
	var l = username.length;
	var allow = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_-";
	var l2= allow.length;
	var i = 0;

	while(i<=l)
	{
		var a = username.substr(i,1);
			var j = 0;
			while(j<=l2)
			{
				var b = allow.substr(j,1);
				if(a==b)
				{
					userflag = 1;
					break;
				}
				else
				{
					userflag = 0;
				}
				j = j + 1;
			}

			if(userflag==0)
			{
				break;
			}
			i = i + 1;
	 }

 	if(userflag==0)
	{
		alert(lng_regusernamewrongformat);
		document.registration.username.focus();
		document.registration.username.select();
		return false;
	}

	if(document.registration.password.value=="")
	{
		alert(lng_regenterpassword);
		document.registration.password.focus();
		return false;
	}

	if(document.registration.password.value.length<6)
	{
		alert(lng_regpasstooshort);
		document.registration.password.focus();
		return false;
	}

	if(document.registration.cnfpassword.value=="")
	{
		alert(lng_regconfpassword);
		document.registration.cnfpassword.focus();
		return false;
	}

	if(document.registration.password.value!=document.registration.cnfpassword.value)
	{
		alert(lng_regpassmismatch);
		document.registration.cnfpassword.focus();
		return false;
	}

	if(document.registration.email.value=="")
	{
		alert(lng_regenteremailadd);
		document.registration.email.focus();
		return false;
	}
	else
	{
		if(!validate_email(document.registration.email.value,lng_entervalidemail))
			{
				document.registration.email.select();
				return false;
			}
	}
	if(document.registration.cnfemail.value=="")
	{
		alert(lng_regenterconfemail);
		document.registration.cnfemail.focus();
		return false;
	}

	if(document.registration.email.value!=document.registration.cnfemail.value)
	{
		alert(lng_regemailmismatch);
		document.registration.cnfemail.focus();
		return false;
	}
	if(document.registration.rndcode.value=="")
	{
		alert(lng_regenterseccode);
		document.registration.rndcode.focus();
		return false;
	}
	if(document.registration.terms.checked!=true)
	{
		alert(lng_regreadterms);
		document.registration.terms.focus();
		return false;
	}

	if(document.registration.privacy.checked!=true)
	{
		alert(lng_regreadprivacy);
		document.registration.privacy.focus();
		return false;
	}
	document.registration.submit();
}

function validate_email(field,alerttxt)
{
	with (field){
		var value;
		value = field;
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2){
			alert(alerttxt);return false;
		}else{
			return true;
		}
	}
}
function getcountry(value)
{
	/*if(value=='1|226|1')
	{
		document.getElementById('states2').style.display='block';
		document.getElementById('states1').style.display='none';
	}
	else
	{
		document.getElementById('states1').style.display='block';
		document.getElementById('states2').style.display='none';
	}*/
	if(value == "none")
	{
		document.getElementById('counry_code').innerHTML = "+";
	}
	else
	{
		countryvalue = value.split("|");
		document.getElementById('counry_code').innerHTML = "+" + countryvalue[2];
	}
}

function setname(name)
{
	var temp = document.getElementById('bidpackname'+name).value;
	document.getElementById('bidpackname').innerHTML = temp;
}

function ClickBidDetails(status,auctionid)
{
	if(status==1)
	{
		document.getElementById('biddetailsplus_'+auctionid).style.display = "none";
		document.getElementById('biddetailsminus_'+auctionid).style.display = "block";
		document.getElementById('bidd'+auctionid).style.display = "block";
	}
	else if(status==2)
	{
		document.getElementById('biddetailsplus_'+auctionid).style.display = "block";
		document.getElementById('biddetailsminus_'+auctionid).style.display = "none";
		document.getElementById('bidd'+auctionid).style.display = "none";
	}
}
function deleteauc()
{
	if(confirm(lng_areyousuretodel))
	{
		document.watchauc.submit();
	}
}

function deleteauc2()
{
	if(confirm(lng_areyousuretodel))
	{
		document.watchauc2.submit();
	}
}

function deleteauc3()
{
	if(confirm(lng_areyousuretodel))
	{
		document.watchauc3.submit();
	}
}

function ShowMakepaymentbutton(Aucid,Accden,paydate)
{
	if(Accden=='Accepted' && paydate=='')
	{
		document.getElementById("wonacceptdenied_"+Aucid).innerHTML = "<font color='green'><b>"+lng_wonaccepted+"</b></font>";
		//document.getElementById("makepayment_"+Aucid).style.visibility = 'visible';
		document.getElementById("makepayment_"+Aucid).style.display = 'block';
		//document.getElementById("additemforsale_"+Aucid).style.display = "block";
	}
	else if(Accden=='Denied')
	{
		document.getElementById("wonacceptdenied_"+Aucid).innerHTML = "<font color='#C82C2F'><b>"+lng_wondenied+"</b></font>";
	}
	else if(paydate!="")
	{
		document.getElementById("wonacceptdenied_"+Aucid).innerHTML = "<font color='green'><b>"+lng_wonaccepted+"</b></font>";
		document.getElementById('paymentdate_' + Aucid).style.visibility= 'visible';
		document.getElementById('paymentdate_' + Aucid).innerHTML = "<b>" + paydate + "</b>";
	}
}
function OpenAcceptdeniedPopup(url)
{
		window.open(url,'popupWindow','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=350,height=200,screenX=150,screenY=200,top=200,left=200')
}
function checkbuybids()
{
	if(document.payment.paymentmethod.checked==false)
	{
		alert("Please choose how you'd like to buy!");
		return false;
	}
	else
	{
		bpid = document.payment.bidpackid.value;
		window.location.href='buybidspayment.php?bpid=' + bpid;
	}
}
/* Bid history Start Here */
function BidHistoryPlus(id,plus,minus)
{
	document.getElementById(plus).style.display = 'none';
	document.getElementById(minus).style.display = 'block';
	document.getElementById(id).style.display = 'block';
}

function BidHistoryMinus(id,plus,minus)
{
	document.getElementById(plus).style.display = 'block';
	document.getElementById(minus).style.display = 'none';
	document.getElementById(id).style.display = 'none';
}
function ClickBidDetails(status,auctionid)
{
	if(status==1)
	{
		document.getElementById('biddetailsplus_'+auctionid).style.display = "none";
		document.getElementById('biddetailsminus_'+auctionid).style.display = "block";
		document.getElementById('bidd'+auctionid).style.display = "block";
	}
	else if(status==2)
	{
		document.getElementById('biddetailsplus_'+auctionid).style.display = "block";
		document.getElementById('biddetailsminus_'+auctionid).style.display = "none";
		document.getElementById('bidd'+auctionid).style.display = "none";
	}
}
/* Bid histroy Ended Here */

/* Edit Password Start Here */
function checkpassword()
{
	if(document.newpassword.newpass.value=="")
	{
		alert(lng_plsenternewpass);
		document.newpassword.newpass.focus();
		return false;
	}

	if(document.newpassword.newpass.value.length<6)
	{
		alert(lng_passtooshort);
		document.newpassword.newpass.focus();
		document.newpassword.newpass.select();
		return false;
	}

	if(document.newpassword.cnfnewpass.value=="")
	{
		alert(lng_plsenterconfpass);
		document.newpassword.cnfnewpass.focus();
		return false;
	}

	if(document.newpassword.newpass.value!=document.newpassword.cnfnewpass.value)
	{
		alert(lng_passmismatch);
		document.newpassword.cnfnewpass.focus();
		document.newpassword.cnfnewpass.select();
		return false;
	}
}
/* Edit Password Ended Here */

/* Unsubscribe User Start Here */

function checkunsubscribeuser()
{
	if(document.unsubscribe.unsubscribecheck.checked==false)
	{
		alert(lng_plstickcheckbox);
		return false;
	}
}

/* Unsubscribe User Ended Here */

/* Newsletter Start Here */
function Checknewsletter()
{
	if(document.newsletter.subemail.value!="")
	{
		if(!validate_email2(document.newsletter.subemail.value,lng_entervalidemail))
			{
				document.newsletter.subemail.focus();
				return false;
			}
	}
}

function Checknewsletter1()
{
	if(document.newsletter1.unsubemail.value!="")
	{
		if(!validate_email2(document.newsletter1.unsubemail.value,lng_entervalidemail))
		{
			document.newsletter1.unsubemail.focus();
			return false;
		}
	}
}

function validate_email2(field,alerttxt){
	with (field){
		var value;
		value = field;
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2){
			alert(alerttxt);return false;
		}else{
			return true;
		}
	}
}
/* Newsletter Ended Here */

/* Affiliate Start Here */
function Checkaffiliate()
{
	if(document.invite.emailaddresses.value=="")
	{
		alert(lng_plsenteremailadd);
		document.invite.emailaddresses.focus();
		return false;
	}
	else
	{
		values = document.invite.emailaddresses.value;
		values2 = values.split(",");
		for(i=0;i<values2.length;i++)
		{
			if(!validate_email2(values2[i],lng_entervalidemail))
				{
					document.invite.emailaddresses.focus();
					return false;
				}
		}
	}
}
/* Affiliate Ended Here */

/* Addresses Start Here */
function HideDisplay(edit)
{
	var ed = edit;
	if(ed==1)
	{
		obj1 = document.getElementById('edit_address');
		obj1.style.display = 'block';
		document.getElementById('billing_address').style.display = 'none';
	}
	else
	{
		obj = document.getElementById('delivery_address');
		if(obj.style.display=='none')
		{
			obj.style.display='block';
		}
		else
		{
			obj.style.display='none';
		}
	}
}

function HideDisplayDeliveryAddress(edit)
{
	var ed = edit;
	if(ed==1)
	{
		obj1 = document.getElementById('delivery_address_exp1');
		obj1.style.display = 'block';
		document.getElementById('delivery_address_exp').style.display = 'none';
	}
	else
	{
		obj = document.getElementById('delivery_address');
		if(obj.style.display=='none')
		{
			obj.style.display='block';
		}
		else
		{
			obj.style.display='none';
		}
	}
}

function checkaddress()
{
	if(document.address.name.value=="")
	{
		alert(lng_plsentername);
		document.address.name.focus();
		return false;
	}
	if(document.address.address1.value=="")
	{
		alert(lng_plsenteradd);
		document.address.address1.focus();
		return false;
	}
	if(document.address.city.value=="")
	{
		alert(lng_plsentercity);
		document.address.city.focus();
		return false;
	}
	if(document.address.country.value=="")
	{
		alert(lng_plsselectcountry);
		document.address.country.focus();
		return false;
	}
	if(document.address.state1.value=="")
	{
		alert(lng_plsenterstate);
		document.address.state1.focus();
		return false;
	}
	if(document.address.zip.value=="")
	{
		alert(lng_plsenterpostcode);
		document.address.zip.focus();
		return false;
	}
	if(document.address.phone.value=="")
	{
		alert(lng_plsenterphoneno);
		document.address.phone.focus();
		return false;
	}

}

function checkaddress1()
{
	if(document.editaddress.name.value=="")
	{
		alert(lng_plsentername);
		document.editaddress.name.focus();
		return false;
	}
	if(document.editaddress.address1.value=="")
	{
		alert(lng_plsenteradd);
		document.editaddress.address1.focus();
		return false;
	}
	if(document.editaddress.city.value=="")
	{
		alert(lng_plsentercity);
		document.editaddress.city.focus();
		return false;
	}
	if(document.editaddress.country.value=="")
	{
		alert(lng_plsselectcountry);
		document.editaddress.country.focus();
		return false;
	}
	if(document.editaddress.state1.value=="")
	{
		alert(lng_plsenterstate);
		document.editaddress.state1.focus();
		return false;
	}
	if(document.editaddress.zip.value=="")
	{
		alert(lng_plsenterpostcode);
		document.editaddress.zip.focus();
		return false;
	}
	if(document.editaddress.phone.value=="")
	{
		alert(lng_plsenterphoneno);
		document.editaddress.phone.focus();
		return false;
	}
}
/* Addresses Ended Here */

/* Confirmation Start Here */
function Checkvouchersel()
{
	if(document.f1.novoucher.checked==false && document.f1.voucher.value=='none')
	{
		alert(lng_plschoosevoucher);
		document.f1.voucher.focus();
		return false;
	}
}
function number_format_new( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "." : dec_point;
    var t = thousands_sep == undefined ? "," : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
function TotalCountAmount(value)
{
		totalamount = document.getElementById('final_amount');
		subtotalamount = document.getElementById('sub_final_amount');
		voucheramount = document.getElementById('amountvoucher');
		voucher = value.split(",");

		selvoucheramount = voucher[2];
		vouchertype = voucher[3];
		vou_options = voucher[4];
		shipping = voucher[5];
		if( shipping == 1 ){
			voucheramount = document.getElementById('shipping_amountvoucher');
		}

	if(vouchertype==2)
	{
		if(value!="none")
		{
			auctionamountvalue = Number(document.getElementById('auctionamounthid').innerHTML);
			shippingamountvalue = Number(document.getElementById('shippingamounthid').innerHTML);

			oldtotalamount = auctionamountvalue;
			oldshippingamount = shippingamountvalue;

			if(vou_options == 1)
			{
				if(auctionamountvalue < selvoucheramount)
				{
					selvoucheramount1 = auctionamountvalue;
				}
				else
				{
					selvoucheramount1 = selvoucheramount;
				}

				if( shipping == 1 ){
					selvoucheramount1 = selvoucheramount;
				}

				if( shipping == 1 ){
					newtotalamount = oldshippingamount - selvoucheramount;
				} else {
					newtotalamount = oldtotalamount - selvoucheramount;
				}
				voucherdata = value.split(",");
				document.getElementById('freebidsvalue').innerHTML = voucherdata[2];
				if( shipping == 1 ){
					document.getElementById('shipping_Currency').style.display = "block";
					document.getElementById('shipping_per').style.display = "none";
					document.getElementById('Currency').style.display = "none";
					document.getElementById('per').style.display = "none";
				} else {
					document.getElementById('Currency').style.display = "block";
					document.getElementById('per').style.display = "none";
					document.getElementById('shipping_Currency').style.display = "none";
					document.getElementById('shipping_per').style.display = "none";
				}
			}
			else if(vou_options == 2)
			{
				if( shipping == 1 ){
					peramount = (shippingamountvalue * selvoucheramount)/100;
					selvoucheramount1  = peramount;
					newtotalamount = oldshippingamount - selvoucheramount1;
					document.getElementById('shipping_per').style.display = "block";
					document.getElementById('shipping_Currency').style.display = "none";
					document.getElementById('per').style.display = "none";
				document.getElementById('Currency').style.display = "none";
				} else {
					peramount = (auctionamountvalue * selvoucheramount)/100;

				/*if(auctionamountvalue<peramount)
				{
					selvoucheramount1 = auctionamountvalue;
				}
				else
				{
					selvoucheramount1 = peramount;
				}
				newtotalamount = selvoucheramount1;*/
				selvoucheramount1  = peramount;
				newtotalamount = oldtotalamount - selvoucheramount1;
				document.getElementById('per').style.display = "block";
				document.getElementById('Currency').style.display = "none";
				document.getElementById('shipping_per').style.display = "none";
					document.getElementById('shipping_Currency').style.display = "none";
				}
			}

			if(newtotalamount<0)
			{
				newtotalamount = shippingamountvalue + 0.00;
			}
			else
			{
				if( shipping == 1 ){
					newtotalamount = newtotalamount + auctionamountvalue;
				} else {
					newtotalamount = newtotalamount + shippingamountvalue
				}
			}
			if( shipping == 1 ){
				voucheramount.innerHTML = number_format_new( selvoucheramount1,2,'.','');
			} else {
				voucheramount.innerHTML =  number_format_new(selvoucheramount1,2,'.','');
			}
			if( shipping == 1 ){
				document.getElementById('shipping_dispvoucheramount').innerHTML = selvoucheramount;
			} else {
				document.getElementById('dispvoucheramount').innerHTML = selvoucheramount;
			}
			if(document.f1.novoucher.checked==false)
			{
				totalamount.innerHTML = number_format_new(newtotalamount,2,'.','');
				if( shipping == 1 ){
					subtotalamount.innerHTML = auctionamountvalue;
				} else {
					subtotalamount.innerHTML = number_format_new(newtotalamount-shippingamountvalue,2,'.','');
				}
				if( shipping == 1){
					document.getElementById("shippingvouchercontent").style.display = 'block';
					document.getElementById("vouchercontent").style.display = 'none';
				} else {

					document.getElementById("vouchercontent").style.display = 'block';
					document.getElementById("shippingvouchercontent").style.display = 'none';
				}
			}
		}
		else
		{
			document.getElementById("vouchercontent").style.display = 'none';
			document.getElementById("shippingvouchercontent").style.display = 'none';
			totalamount = document.getElementById('final_amount');
			subtotalamount = document.getElementById('sub_final_amount');

			auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
			shippingvalue = Number(document.getElementById('shippingamount').innerHTML);

			totalvalue = auctionvalue + shippingvalue;
			totalamount.innerHTML = number_format_new(totalvalue,2,'.','');
			subtotalamount = number_format_new(totalvalue-shippingvalue,2,'.','');
		}
		document.getElementById('freebidsnote').style.display = 'none';
	}
	else
	{

		auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
		shippingvalue = Number(document.getElementById('shippingamount').innerHTML);

		totalvalue = auctionvalue + shippingvalue;
		totalamount.innerHTML = number_format_new(totalvalue,2,'.','');
		subtotalamount.innerHTML = number_format_new(auctionvalue,2,'.','');
		voucheramount.innerHTML = "0.00";
		if( shipping == 1 || typeof shipping == undefined){
			document.getElementById('shipping_amountvoucher').innerHTML = "0.00";
			document.getElementById('shipping_dispvoucheramount').innerHTML = "0.00";
			document.getElementById("shippingvouchercontent").style.display = 'block';
			document.getElementById('dispvoucheramount').innerHTML = "0.00";
			document.getElementById("vouchercontent").style.display = 'none';
		} else {
			document.getElementById("shippingvouchercontent").style.display = 'none';
			document.getElementById('dispvoucheramount').innerHTML = "0.00";
			document.getElementById("vouchercontent").style.display = 'block';
		}


		if(value!="none")
		{
			voucherobj = document.getElementById('voucher');
			voucherdata = value.split(",");
			voucheramount = voucherdata[2];
			document.getElementById('freebidsnote').style.display = 'block';
			document.getElementById('freebidsvalue').innerHTML = voucherdata[2];
		}
		else
		{
			document.getElementById('freebidsnote').style.display = 'none';
		}
	}
}
function HideVoucher()
{
	value = document.getElementById('voucher').value;
	voucher = value.split(",");
	vouchertype = voucher[3];

	shipping = voucher[5];
	if(document.f1.novoucher.checked==true)
	{
		document.getElementById("vouchercontent").style.display = 'none';
		document.getElementById("shippingvouchercontent").style.display = 'none';

		totalamount = document.getElementById('final_amount');
		subtotalamount = document.getElementById('sub_final_amount');

		auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
		shippingvalue = Number(document.getElementById('shippingamount').innerHTML);

		totalvalue = auctionvalue + shippingvalue;
		totalamount.innerHTML = number_format_new(totalvalue,2,'.','');
		subtotalamount.innerHTML = number_format_new(auctionvalue,2,'.','');
		document.getElementById('freebidsnote').style.display = 'none';
	}
	else
	{
		if(document.f1.voucher.value=='none')
		{
			document.getElementById("vouchercontent").style.display = 'none';

			totalamount = document.getElementById('final_amount');
			subtotalamount = document.getElementById('sub_final_amount');

			auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
			shippingvalue = Number(document.getElementById('shippingamount').innerHTML);

			totalvalue = auctionvalue + shippingvalue;
			totalamount.innerHTML = number_format_new(totalvalue,2,'.','');
			subtotalamount.innerHTML = number_format_new(auctionvalue,2,'.','');
			document.getElementById('freebidsnote').style.display = 'none';
		}
		else
		{
			if( shipping == 1 ){
				document.getElementById("shippingvouchercontent").style.display = 'block';

				totalamount = document.getElementById('final_amount');
				subtotalamount = document.getElementById('sub_final_amount');

				auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
				shippingvalue = Number(document.getElementById('shippingamount').innerHTML);
				vouchervalue = Number(document.getElementById('shipping_amountvoucher').innerHTML)

				totalvalue = shippingvalue - vouchervalue;

				if(totalvalue<0)
				{
					totalvalue = shippingvalue + 0.00;
				}
				totalamount.innerHTML = number_format_new(totalvalue + auctionvalue,2,'.','');
				subtotalamount.innerHTML = number_format_new(auctionvalue,2,'.','');
				if(vouchertype==1)
				{
				document.getElementById('freebidsnote').style.display = 'block';
				}
			} else {
				document.getElementById("vouchercontent").style.display = 'block';

				totalamount = document.getElementById('final_amount');
				subtotalamount = document.getElementById('sub_final_amount');

				auctionvalue = Number(document.getElementById('auctionamount').innerHTML);
				shippingvalue = Number(document.getElementById('shippingamount').innerHTML);
				vouchervalue = Number(document.getElementById('amountvoucher').innerHTML)

				totalvalue = auctionvalue - vouchervalue;
				if(totalvalue<0)
				{
					totalvalue = shippingvalue + 0.00;
				}
				totalamount.innerHTML = number_format_new(totalvalue + shippingvalue,2,'.','');
				subtotalamount.innerHTML = number_format_new(totalvalue,2,'.','');
				if(vouchertype==1)
				{
				document.getElementById('freebidsnote').style.display = 'block';
				}
			}
		}

	}
}
/* Confirmation Ended Here */

/* product details Start Here */
function hideDisplayBids(id)
	{
		if(id==1)
		{
			document.getElementById('producthistory1_hidden').style.display='none';
			document.getElementById('producthistory1').style.display='block';
		}
		if(id==2)
		{
			document.getElementById('producthistory1_hidden').style.display='block';
			document.getElementById('producthistory1').style.display='none';
		}
	}

	function ShowMyButler(id)
	{
		if(id==1)
		{
			document.getElementById('bidbutler_show_main').style.display='block';
			document.getElementById('bidbutler_hide').style.display='none';
		}
		if(id==2)
		{
			document.getElementById('bidbutler_show_main').style.display='none';
			document.getElementById('bidbutler_hide').style.display='block';
		}
	}

	function addWatchlist(auc_id,uid)
	{
		var url2="addwatchauction.php?aid="+auc_id+"&uid="+uid;
		xmlhttp.open("GET",url2);
		xmlhttp.onreadystatechange=changeWatchAuction;
		xmlhttp.send(null);
	}

	function changeWatchAuction()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			var temp1=xmlhttp.responseText;
			alert(lng_auctionsuccessfullyadd);
			document.getElementById('added_watchlist').style.display = 'block';
			document.getElementById('notadded_watchlist').style.display = 'none';

		}
	}

function number_format_newp( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "." : dec_point;
    var t = thousands_sep == undefined ? "," : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
var front_min_price = front_min_price1;
function ChangePlaceBids()
{
	userpendingbids = document.getElementById('bids_count').innerHTML;
	placebids = document.getElementById('placebidscount').innerHTML;
	placeamount = document.getElementById('placebidsamounthid').innerHTML;
	if(document.getElementById('auctionbiddingpoint')){
		plusauctionbiddingpoint = Number(document.getElementById('auctionbiddingpoint').innerHTML);
	} else {
		plusauctionbiddingpoint = Number(1);
	}
	if(plusauctionbiddingpoint<=0) { plusauctionbiddingpoint = Number(1); }
	if(userpendingbids>0)
	{
		document.getElementById('placebidscount').innerHTML = (Number(placebids) + plusauctionbiddingpoint);
		document.getElementById('placebidsamount').innerHTML = 	number_format_newp(Number(placeamount) + Number(front_min_price),2,'.','');
		document.getElementById('placebidsamounthid').innerHTML = 	number_format_newp(Number(placeamount) + Number(front_min_price),2,'.','');
		newsavingvalue =  Number(document.getElementById('placebidssaving').innerHTML) - Number(front_min_price);
		document.getElementById('placebidssaving').innerHTML = number_format_newp(newsavingvalue,'2','.','');
		document.getElementById('placebidssavingdisp').innerHTML = number_format_newp(newsavingvalue,'2','.','');
	}
}


function GetXmlHttpObject(handler)
{
  var objXMLHttp=null
  if (window.XMLHttpRequest)
  {
      objXMLHttp=new XMLHttpRequest()
  }
  else if (window.ActiveXObject)
  {
      objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
  }
  return objXMLHttp
}

function stateChanged()
{
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
  {
          document.getElementById("txtResult").innerHTML=xmlHttp.responseText
  }
  else {
          //alert(xmlHttp.status);
  }
}

function htmlData(url, aid,pgno)
{

  if (url.length==0)
  {
      document.getElementById("txtResult").innerHTML="";
      return;
  }
  xmlHttp=GetXmlHttpObject()
  if (xmlHttp==null)
  {
      alert ("Browser does not support HTTP Request");
      return;
  }

  url=url+"?aid="+aid+"&pgno="+pgno;
  url=url+"&sid="+Math.random();
  xmlHttp.onreadystatechange=stateChanged;
  xmlHttp.open("GET",url,true) ;
  xmlHttp.send(null);
}

/* product details Ended Here */

/* wonauctionaccept Start Here */

function CheckValuewonauctionaccept(f1)
{
	var wonstatus = f1.Accden.value;
	if(wonstatus=="")
	{
		alert(lng_plsselaccordenied);
		f1.Accden.focus();
		return false
	}
}

/* wonauctionaccept Ended Here */

/* feedback start here */

function Checkfeedback()
{
	if(document.feedback_email.emailaddress.value=="")
	{
		alert(lng_feedjsenteremail);
		document.feedback_email.emailaddress.focus();
		return false;
	}
	else
	{
		if(!validate_email_feedback(document.feedback_email.emailaddress.value,lng_entervalidemail))
		{
			document.feedback_email.emailaddress.select();
			return false;
		}
	}
	if(document.feedback_email.name.value=="")
	{
		alert(lng_feedjsentername);
		document.feedback_email.name.focus();
		return false;
	}
	if(document.feedback_email.subject.value=="none")
	{
		alert(lng_feedjssubject);
		document.feedback_email.subject.focus();
		return false;
	}
	if(document.feedback_email.messagecontent.value=="")
	{
		alert(lng_feedjsentmess);
		document.feedback_email.messagecontent.focus();
		return false;
	}
}

function validate_email_feedback(field,alerttxt){
	with (field){
		var value;
		value = document.feedback_email.emailaddress.value;
		apos=value.indexOf("@");
		dotpos=value.lastIndexOf(".");
		if (apos<1||dotpos-apos<2){
			alert(alerttxt);return false;
		}else{
			return true;
		}
	}
}

/* feedback ended here */

/* forgot password start here */
function checkforgotpassword()
	{
		if(document.forgot.email.value=="")
		{
			alert(lng_plsenteremailadd);
			document.forgot.email.focus();
			document.forgot.email.select();
			return false;
		}
		else
		{
			if(!validate_email_forgot(document.forgot.email.value,lng_entervalidemail))
				{
					document.forgot.email.select();
					return false;
				}
		}
	}
	function validate_email_forgot(field,alerttxt){
		with (field){
			var value;
			value = document.forgot.email.value;
			apos=value.indexOf("@");
			dotpos=value.lastIndexOf(".");
			if (apos<1||dotpos-apos<2){
				alert(alerttxt);return false;
			}else{
				return true;
			}
		}
	}
/* forgot password ended here */

function BidpackVoucher(str)
{
	novoucherobj = document.getElementById('novoucher');
	value = document.getElementById('voucher').value;

	if(novoucherobj.checked==true)
	{
		document.getElementById('vouchercontent').style.display = 'none';
		document.getElementById('dispvoucheramount').innerHTML = voucheramount;

		bidpackamountobj = document.getElementById('bidpackamounthid');
		totalamountobj = document.getElementById('final_amounthid');
		document.getElementById('final_amount').innerHTML = totalamountobj.innerHTML;
	}
	else
	{
		if(value=="none")
		{
			voucherobj = document.getElementById('voucher');
			voucherdata = value.split(",");
			voucheramount = voucherdata[2];

			bidpackamountobj = document.getElementById('bidpackamounthid');
			totalamountobj = document.getElementById('final_amounthid');

			document.getElementById('vouchercontent').style.display = 'none';
			document.getElementById('dispvoucheramount').innerHTML = voucheramount;
			document.getElementById('final_amount').innerHTML = totalamountobj.innerHTML;
		}
		else
		{

			voucherobj = document.getElementById('voucher');
			voucherdata = value.split(",");
			voucheramount = voucherdata[2];

			vouchertype = voucherdata[3];
			vou_options = voucherdata[4];
			document.getElementById('freebidsnote').style.display = 'none';
			if(vouchertype==2)
			{
				bidpackamountobj = document.getElementById('bidpackamounthid');
				totalamountobj = document.getElementById('final_amounthid');


				if(novoucherobj.checked==false)
				{
					document.getElementById('vouchercontent').style.display = 'block';
					document.getElementById('dispvoucheramount').innerHTML = voucheramount;

					if(vou_options == 1)
					{
						if(Number(voucheramount)>Number(bidpackamountobj.innerHTML))
						{
							voucheramount = number_format_new(Number(bidpackamountobj.innerHTML),2,'.','');
						}
						savingamountcalc = number_format_new(Number(bidpackamountobj.innerHTML) - Number(voucheramount),2,'.',',');
						document.getElementById('amountvoucher').innerHTML = voucheramount;
						document.getElementById('Currency').style.display = "block";
						document.getElementById('per').style.display = "none";
					}
					else if(vou_options == 2)
					{
						perammount = number_format_new(Number(bidpackamountobj.innerHTML) *voucheramount/100,2,'.',',');
						savingamountcalc = number_format_new(Number(bidpackamountobj.innerHTML) - Number(perammount),2,'.',',');
						document.getElementById('amountvoucher').innerHTML = perammount;
						document.getElementById('per').style.display = "block";
						document.getElementById('Currency').style.display = "none";
					}
					if(savingamountcalc<=0){
						savingamountcalc = number_format_new(0,2,'.',',');
					}
					document.getElementById('final_amount').innerHTML = savingamountcalc;
				}
			}
			else
			{
				bidpackamountobj = document.getElementById('bidpackamounthid');
				totalamountobj = document.getElementById('final_amounthid');

				if(novoucherobj.checked==false)
				{
					document.getElementById('vouchercontent').style.display = 'block';
					voucheramount = "0.00";
					voucheramount.innerHTML = "0.00";
					document.getElementById('dispvoucheramount').innerHTML = "0.00";
					document.getElementById('amountvoucher').innerHTML = voucheramount;
					document.getElementById('freebidsvalue').innerHTML = voucherdata[2];
					savingamountcalc = number_format_new(Number(bidpackamountobj.innerHTML) - Number(voucheramount),2,'.',',');
					if(savingamountcalc<=0){
						savingamountcalc = number_format_new(0,2,'.',',');
					}
					if(value!="none")
					{
					document.getElementById('freebidsnote').style.display = 'block';
					}
					else
					{
					document.getElementById('freebidsnote').style.display = 'none';
					}
					document.getElementById('final_amount').innerHTML = savingamountcalc;
				}
			}
		}
	}
}
function onlyNumbers(evt)
{
   var charCode = (evt.which) ? evt.which : evt.keyCode
	 if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	return true;
}
