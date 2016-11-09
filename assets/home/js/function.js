function number_format1( number, decimals, dec_point, thousands_sep ) {
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "." : dec_point;
    var t = thousands_sep == undefined ? "," : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

var GlobalVar = 0;
var GlobalStat = 0;
	function changeimage(id)
	{
		var idnew = id;
		if(idnew==1)
		{
			document.getElementById('mainimage'+idnew).style.display='block';
			document.getElementById('mainimage2').style.display='none';
			document.getElementById('mainimage3').style.display='none';
			document.getElementById('mainimage4').style.display='none';
		}
		if(idnew==2)
		{
			document.getElementById('mainimage'+idnew).style.display='block';
			document.getElementById('mainimage1').style.display='none';
			document.getElementById('mainimage3').style.display='none';
			document.getElementById('mainimage4').style.display='none';
		}
		if(idnew==3)
		{
			document.getElementById('mainimage'+idnew).style.display='block';
			document.getElementById('mainimage1').style.display='none';
			document.getElementById('mainimage2').style.display='none';
			document.getElementById('mainimage4').style.display='none';
		}
		if(idnew==4)
		{
			document.getElementById('mainimage'+idnew).style.display='block';
			document.getElementById('mainimage1').style.display='none';
			document.getElementById('mainimage2').style.display='none';
			document.getElementById('mainimage3').style.display='none';
		}
	}

function changeData(responseText,stat_us)
{
	var text = responseText;
	if(text!="")
	{
		counter = text.split('#');
	    for (i = 0; i < counter.length; i++)
		{
		   counter_data1 = counter[i].split(':');
		   auction_id = counter_data1[0];
		   auction_price = counter_data1[1];
		   auction_bidder_name = counter_data1[2];
		   if(auction_bidder_name=="")
		   {
			  auction_bidder_name="---"
		   }
			if(document.getElementById('price_index_page_' + auction_id).innerHTML != Currency + auction_price)
			{
				if(GlobalVar == 1)
				{
					document.getElementById('price_index_page_' + auction_id).style.backgroundColor = "#ff5910";
				}
		   		document.getElementById('price_index_page_' + auction_id).innerHTML = Currency + auction_price;
				var bidding_username_prefix = auction_bidder_name.substr(0, 1).toUpperCase() ;
				if(bidding_username_prefix!="-")
				{
					document.getElementById('product_bidder_' + auction_id).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+auction_bidder_name;
				}else {
					document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
				}
		   		//document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
			}
			else
			{
				document.getElementById('price_index_page_' + auction_id).style.backgroundColor = "white";
			}
		}

	}
	GlobalVar = 1;
}

function hidedisplayzoom(div_id) {
	document.getElementById(div_id).style.display = 'block';
	if(document.getElementById('zoomimagename').innerHTML!="" && document.getElementById('zoomimagename').innerHTML!=div_id)
	{
		document.getElementById(document.getElementById('zoomimagename').innerHTML).style.display	= 'none';
	}
	document.getElementById('zoomimagename').innerHTML = div_id;
}

function closezoomimage(div_id)
{
	document.getElementById(div_id).style.display='none';
}

function calc_counter_from_time_old(diff) {
  if (diff > 0) {
    hours=Math.floor(diff / 3600)

    minutes=Math.floor((diff / 3600 - hours) * 60)

    seconds=Math.round((((diff / 3600 - hours) * 60) - minutes) * 60)
  } else {
    hours = 0;
    minutes = 0;
    seconds = 0;
  }

  if (seconds == 60) {
    seconds = 0;
  }

  if (minutes < 10) {
    if (minutes < 0) {
      minutes = 0;
    }
    minutes = '0' + minutes;
  }
  if (seconds < 10) {
    if (seconds < 0) {
      seconds = 0;
    }
    seconds = '0' + seconds;
  }
  if (hours < 10) {
    if (hours < 0) {
      hours = 0;
    }
    hours = '0' + hours;
  }
  return hours + ":" + minutes + ":" + seconds;
}

var xmlhttp = false;
//Check if we are using IE.
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

function CheckSaveProperty(auction_ids){
	var objId = "URL"
		var ServerPage = "update_time.php?aids=" + auction_ids;
		var objNew = document.getElementById(objId)
		xmlhttp.open("GET",ServerPage)
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				mainarray = xmlhttp.responseText.split('/');
				counters = mainarray[0].split('#')
				for (i = 0; i < counters.length; i++)
				{
					counter_data = counters[i].split(':');
					auction_id = counter_data[0];
					pausestatus = counter_data[2];
					if(counter_data[1]=='0')
					{
					document.getElementById('counter_index_page_' + auction_id).innerHTML = 'Ended';
					document.getElementById('image_main_' + auction_id).src = "images/but_sold2.jpg";
					document.getElementById('image_main_' + auction_id).onclick="";
					document.getElementById('image_main_' + auction_id).onmouseover="";
					document.getElementById('image_main_' + auction_id).onmouseout="";
					}
					else if(pausestatus==1)
					{
						document.getElementById('counter_index_page_' + auction_id).innerHTML = 'Pause';
						document.getElementById('image_main_' + auction_id).src = "images/bid_click_white_bid_hover.jpg";
						document.getElementById('image_main_' + auction_id).onclick="";
						document.getElementById('image_main_' + auction_id).onmouseover="";
						document.getElementById('image_main_' + auction_id).onmouseout="";
					}
					else
					{
					auction_time = counter_data[1];
						if(auction_time<10)
						{
						document.getElementById('counter_index_page_' + auction_id).style.color = '#E80000';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
						}
						else
						{
						document.getElementById('counter_index_page_' + auction_id).style.color = '#6e6d6d';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
						}
						if(document.getElementById('curauctiontime'))
						{
							document.getElementById('curauctiontime').innerHTML=auction_time;
						}
					}
				}
			}
		}
xmlhttp.send(null);
}

function CheckSaveProperty1(auction_ids,auc_his_id,butlerbuttonid){
	var objId = "URL"
		var ServerPage = "update_time.php?aids=" + auction_ids + "&auc_his_id=" + auc_his_id;
		var objNew = document.getElementById(objId)
		xmlhttp.open("GET",ServerPage)
		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				mainarray = xmlhttp.responseText.split('/');
				counters = mainarray[0].split('#')
				for (i = 0; i < counters.length; i++)
				{
					counter_data = counters[i].split(':');
					auction_id = counter_data[0];
					pausestatus = counter_data[2];
					if(counter_data[1]=='0')
					{
					document.getElementById('counter_index_page_' + auction_id).innerHTML = 'Ended';
					document.getElementById('image_main_' + auction_id).src = "images/but_sold2.jpg";
					document.getElementById('image_main_' + auction_id).onclick="";
					document.getElementById('image_main_' + auction_id).onmouseover="";
					document.getElementById('image_main_' + auction_id).onmouseout="";
					if(butlerbuttonid==auction_id)
					{
						document.getElementById('bookbidbutlerbutton').disabled = true;
					}
					}
					else if(pausestatus==1)
					{
						document.getElementById('counter_index_page_' + auction_id).innerHTML = 'Pause';
						document.getElementById('image_main_' + auction_id).src = "images/bid_click_white_bid_hover.jpg";
						document.getElementById('image_main_' + auction_id).onclick="";
						document.getElementById('image_main_' + auction_id).onmouseover="";
						document.getElementById('image_main_' + auction_id).onmouseout="";
					}
					else
					{
					auction_time = counter_data[1];
						if(auction_time<10)
						{
						document.getElementById('counter_index_page_' + auction_id).style.color = '#E80000';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
						}
						else
						{
						document.getElementById('counter_index_page_' + auction_id).style.color = '#6e6d6d';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
						}
					}
				}
			CheckProHistory(mainarray[1]);
			}
		}
xmlhttp.send(null);
}

function setbidding(prid,aid,uid)
{
	var url="getbid.php?prid="+prid+"&aid="+aid+"&uid="+uid;

	new Ajax.Request(url,
		{
		method: 'get',
		onSuccess: function(transport)
		{
			if(transport.status==200)
			{
				var temp=transport.responseText;
				if(temp=="unsuccess")
				{
					if(confirm("Please recharge your bid account"))
					{
						window.location.href='buybids.html';
					}
				}

				if(temp=="success")
				{
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						obj.innerHTML = Number(objvalue) - 1;

						if(document.getElementById('running_out_of_bid_notification'))
						{
							var running_out_of_bid_notification = document.getElementById('running_out_of_bid_notification').value;
							if(Number(running_out_of_bid_notification)>=Number(obj.innerHTML))
							{
								document.getElementById("low_bid_notification_main").style.display='inline-block';
								$("#bids_count").addClass("low");
							}
						}

						if(document.getElementById('global_price_for_default_single_bid'))
						{
							if(document.getElementById('global_price_for_default_single_bid').value>0)
							{
								if(aid!="")
								{
									if( document.getElementById('index_buynow_placebids_price_hid_'+aid) && document.getElementById('index_buynow_price_savings_hid_'+aid) && document.getElementById('index_buynow_placebids_price_'+aid) && document.getElementById('index_buynow_price_savings_'+aid) )
									{
										var default_single_bid = document.getElementById('global_price_for_default_single_bid').value;

										var buynow_placebids_price = document.getElementById('index_buynow_placebids_price_'+aid);
										var buynow_placebids_price_hid = document.getElementById('index_buynow_placebids_price_hid_'+aid);

										var buynow_placebids_price_final = Number(buynow_placebids_price_hid.innerHTML)+Number(default_single_bid);

										buynow_placebids_price.innerHTML = number_format(buynow_placebids_price_final,2,'.',',');

										//Show Rebate only if the logged in user has placed 1 or more bids - work in progress
										//var buynow_placebids_rebate_main = document.getElementById('auction_balloon_'+aid).getElementsByClassName('auction_bid_rebate_amount_main');
										//buynow_placebids_rebate_main.className = buynow_placebids_rebate_main.className + " fadein";

										buynow_placebids_price_hid.innerHTML = number_format(buynow_placebids_price_final,2,'.','');

										var buynow_price_savings = document.getElementById('index_buynow_price_savings_'+aid);
										var buynow_price_savings_hid = document.getElementById('index_buynow_price_savings_hid_'+aid);

										var buynow_price_savings_final = Number(buynow_price_savings_hid.innerHTML)-Number(default_single_bid);

										buynow_price_savings.innerHTML = number_format(buynow_price_savings_final,2,'.',',');
										buynow_price_savings_hid.innerHTML = number_format(buynow_price_savings_final,2,'.','');
									}
								}
							}
						}
					}
				}
			}
		}
		});
}

function CheckProHistory(aucid_new){
		var history__data = "";
		var history____data;
		history__data = aucid_new;
		if(history__data!="" && history__data!="|")
		{
			history____data = history__data.split('|');
			counter_history = history____data[0].split('#');
			counter_history_mybid = history____data[1].split('#');
			if(counter_history!="")
			{
				for (i = 0; i < counter_history.length; i++)
				{
				   history_data = counter_history[i].split(':');
				   bidding_price = history_data[0];
				   bidding_username = history_data[1];
				   if(bidding_username=="" && bidding_price!="")
				   {
					   bidding_username="user removed";
				   }
				   bidding_type = history_data[2];
					document.getElementById('bid_price_' + i).innerHTML = "R$" + bidding_price;
					var bidding_username_prefix = bidding_username.substr(0, 1).toUpperCase() ;
					document.getElementById('bid_user_name_' + i).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+bidding_username;

					if(bidding_type=='s')
					{
						document.getElementById('bid_type_' + i).innerHTML = "Single Bid";
					}
					else if(bidding_type=='b')
					{
						document.getElementById('bid_type_' + i).innerHTML = "AutoBidder";
					}
				}
			}
			if(counter_history_mybid!="")
			{
				for (i = 0; i < counter_history_mybid.length; i++)
				{
				   history_data1 = counter_history_mybid[i].split('!');
				   bidding_price1 = history_data1[0];
				   bidding_time1 = history_data1[1];
				   bidding_type1 = history_data1[2];
					document.getElementById('my_bid_price_' + i).innerHTML = "R$" + bidding_price1;
					document.getElementById('my_bid_time_' + i).innerHTML = bidding_time1;

					if(bidding_type1=='s')
					{
						document.getElementById('my_bid_type_' + i).innerHTML = "Single Bid";
					}
					else if(bidding_type1=='b')
					{
						document.getElementById('my_bid_type_' + i).innerHTML = "AutoBidder";
					}
				}
			}
		 }
}

function changedatabutler(data,page,butlerpbids)
{
	var changeMessageTimer;

	data1 = eval('(' + data.responseText + ')');
	k = 1;
	for (j=0;j<data.butlerslength.length;j++)
	{
			if(data.butlerslength[j].bidbutler.startprice!="" && number_format1(data.butlerslength[j].bidbutler.startprice,2,Separator,T_Separator)!="0.00")
			{
				if(Number(j)<Number(data.butlerslength.length))
				{
					butlerstartprice = Currency + number_format1(data.butlerslength[j].bidbutler.startprice,2,Separator,T_Separator);
					butlerendprice = Currency + number_format1(data.butlerslength[j].bidbutler.endprice,2,Separator,T_Separator);
					butlerbid = data.butlerslength[j].bidbutler.bids;
					usedbid = data.butlerslength[j].bidbutler.usedbids;
					but_id = data.butlerslength[j].bidbutler.id;
					var blockst = 1;

					if(document.getElementById('product_detail_bidnow_bidmultiplier'))
			        {
			            multiplier = document.getElementById('product_detail_bidnow_bidmultiplier').innerHTML.replace("x","");
			        }
			        else
			        {
			        	multiplier = 1;
			        }
		            usedtimes = usedbid*multiplier;
		            butlertimes = butlerbid*multiplier;
	            	ending = usedtimes+"/"+butlertimes;
				}
				else
				{
					butlerstartprice = "&nbsp;";
					butlerendprice = "";
					butlerbid ="&nbsp;";
					but_id = "";
					usedbid = "&nbsp;";
					usedtimes = "&nbsp;";
					butlertimes = "";
					ending = "&nbsp;";
					var blockst = 0;
				}
			}
			else
			{
				butlerstartprice = "&nbsp;";
				butlerendprice = "";
				butlerbid ="&nbsp;";
				but_id = "";
				usedbid = "&nbsp;";
				usedtimes = "&nbsp;";
				butlertimes = "";
				ending = "&nbsp;";
				var blockst = 0;
			}

			if(j==0)
			{
				if(blockst==1)
				{
					document.getElementById('mainbutlerbody_' + k).style.display = 'block';
					document.getElementById('butlerstartprice_1').innerHTML = butlerstartprice;
					document.getElementById('butlerendprice_1').innerHTML = ending;
					//document.getElementById('butlerendprice_1').style.display = 'none';
					//document.getElementById('butlerbids_1').innerHTML = butlerbid;
					document.getElementById('butler_used_bids_1').innerHTML = usedbid+"/";
					document.getElementById('butler_placed_bids_1').innerHTML = butlerbid;

					document.getElementById('deletebidbutler_1').style.display = 'block';
					//document.getElementById('deletebidbutler_1').innerHTML = "<input type='button' class='button_butler_remove' onclick='DeleteBidButler(\""+but_id+"\",\"1\");' id='butler_image_1' value='-' />";
					document.getElementById('deletebidbutler_1').innerHTML =  '<button type="button" class="btn btn-link" onclick="DeleteBidButler(&quot;'+but_id+'&quot;,&quot;1&quot;);" id="butler_image_1"><i class="fa fa-times-circle"></i></button>';
				}
				else
				{
					document.getElementById('mainbutlerbody_' + k).style.display = 'block';
					document.getElementById('butlerstartprice_1').innerHTML = butlerstartprice;
					document.getElementById('butlerendprice_1').innerHTML = ending;
					//document.getElementById('butlerendprice_1').style.display = 'none';
					//document.getElementById('butlerbids_1').innerHTML = butlerbid;
					document.getElementById('butler_used_bids_1').innerHTML = usedbid;
					document.getElementById('butler_placed_bids_1').innerHTML = butlerbid;
					document.getElementById('deletebidbutler_1').style.display = 'none';
				}
			}
			else if(j==1)
			{
				document.getElementById('mainbutlerbody_' + k).style.display = 'block';
				document.getElementById('butlerstartprice_2').innerHTML = butlerstartprice;
				document.getElementById('butlerendprice_2').innerHTML = ending;
				//document.getElementById('butlerendprice_2').style.display = 'none';
				//document.getElementById('butlerbids_2').innerHTML = butlerbid;
				document.getElementById('butler_used_bids_2').innerHTML = usedbid+"/";
				document.getElementById('butler_placed_bids_2').innerHTML = butlerbid;
				if(blockst==1)
				{
				document.getElementById('deletebidbutler_2').style.display = 'block';
				//document.getElementById('deletebidbutler_2').innerHTML = "<input type='button' class='button_butler_remove' onclick='DeleteBidButler(\""+but_id+"\",\"2\");' id='butler_image_2' value='-' >";
				document.getElementById('deletebidbutler_2').innerHTML = '<button type="button" class="btn btn-link" onclick="DeleteBidButler(&quot;'+but_id+'&quot;,&quot;2&quot;);" id="butler_image_2"><i class="fa fa-times-circle"></i></button>';
				}
				else
				{
				document.getElementById('deletebidbutler_2').style.display = 'none';
				}

			}
			else if(j==2)
			{
				document.getElementById('mainbutlerbody_' + k).style.display = 'block';
				document.getElementById('butlerstartprice_3').innerHTML = butlerstartprice;
				document.getElementById('butlerendprice_3').innerHTML = ending;
				//document.getElementById('butlerendprice_3').style.display = 'none';
				//document.getElementById('butlerbids_3').innerHTML = butlerbid;
				document.getElementById('butler_used_bids_3').innerHTML = usedbid+"/";
				document.getElementById('butler_placed_bids_3').innerHTML = butlerbid;
				if(blockst==1)
				{
				document.getElementById('deletebidbutler_3').style.display = 'block';
				//document.getElementById('deletebidbutler_3').innerHTML = "<input type='button' class='button_butler_remove' onclick='DeleteBidButler(\""+but_id+"\",\"3\");' id='butler_image_3' value='-' >";
				document.getElementById('deletebidbutler_3').innerHTML = '<button type="button" class="btn btn-link" onclick="DeleteBidButler(&quot;'+but_id+'&quot;,&quot;3&quot;);" id="butler_image_3"><i class="fa fa-times-circle"></i></button>';
				}
				else
				{
				document.getElementById('deletebidbutler_3').style.display = 'none';
				}

			}
			else if(j>2)
			{
				document.getElementById('mainbutlerbody_' + k).style.display = 'block';
				document.getElementById('butlerstartprice_' + k).innerHTML = butlerstartprice;
				document.getElementById('butlerendprice_' + k).innerHTML = ending;
				//document.getElementById('butlerendprice_' + k).style.display = 'none';
				//document.getElementById('butlerbids_' + k).innerHTML = butlerbid;
				document.getElementById('butler_used_bids_'+k).innerHTML = usedbid+"/";
				document.getElementById('butler_placed_bids_'+k).innerHTML = butlerbid;
				if(blockst==1)
				{
				document.getElementById('deletebidbutler_' + k).style.display = 'block';
				//document.getElementById('deletebidbutler_' + k).innerHTML = "<input type='button' class='button_butler_remove' onclick='DeleteBidButler(\""+but_id+"\",\"" + k + "\");' id='butler_image_" + k +"' value='-' />";
				document.getElementById('deletebidbutler_' + k).innerHTML = '<button type="button" class="btn btn-link" onclick="DeleteBidButler(&quot;'+but_id+'&quot;,&quot;'+k+'&quot;);" id="butler_image_'+k+'"><i class="fa fa-times-circle"></i></button>';
				}
				else
				{
				document.getElementById('deletebidbutler_' + k).style.display = 'none';
				}

			}
		k++;
	}

	if(document.getElementById('product_detail_bidnow_bidmultiplier')){
		    butlerpbids = butlerpbids * document.getElementById('product_detail_bidnow_bidmultiplier').innerHTML.replace("x","");
	}

	for(p=data.butlerslength.length+1;p<=20;p++)
	{
		document.getElementById('mainbutlerbody_' + p).style.display = 'none';
	}
	if(page=="abut")
	{
		document.getElementById('live_no_bidbutler').style.display = 'none';
		//changeMessageTimer = setInterval("ChangeButlerImageSecond()",3000);

		if(butlerpbids!="&nbsp;")
		{
			objbids = document.getElementById('bids_count');
			objbidsvalue = document.getElementById('bids_count').innerHTML;

			if(objbids.innerHTML!='0')
			{
				objbids.innerHTML = Number(objbidsvalue) - Number(butlerpbids);

				if(document.getElementById('running_out_of_bid_notification'))
				{
					var running_out_of_bid_notification = document.getElementById('running_out_of_bid_notification').value;
					if(running_out_of_bid_notification >= objbids.innerHTML )
					{
						document.getElementById("low_bid_notification_main").style.display='inline-block';
						$("#bids_count").addClass("low");
					}
				}
			}
		}
	}
}

function ChangeButlerImageSecond()
{
	document.getElementById('butlermessage').style.display='none';
	clearInterval(changeMessageTimer);
}

function calc_counter_from_time(TimerID){
		var tmp=TimerID;
		var days=Math.floor(tmp/(24*60*60)); tmp=tmp-(24*60*60)*days;
		var hours=Math.floor(tmp/(60*60)); tmp=tmp-(60*60)*hours;
		var minutes=Math.floor(tmp/(60)); tmp=tmp-(60)*minutes;
		var secs=Math.floor(tmp);

		if(hours<=9 && hours>=0)
		{
			hours = "0" + hours;
		}
		if(minutes<=9 && minutes>=0)
		{
			minutes = "0" + minutes;
		}
		if(secs<=9)
		{
			secs = "0" + secs;
		}

		if(days>0)
		{
			return days + "d " + hours + ":" + minutes + ":" + secs;
		}
		else
		{
			return hours + ":" + minutes + ":" + secs;
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
