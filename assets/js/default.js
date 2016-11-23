var flipflop=1;
var storedata;
var pauseopenflag;
var setcountervar = "";

function OnloadPage()
{
    if($.browser.msie){
        //Configuring ajax
        $.ajaxSetup({
            cache: false
        });
    }

  var auctionUpdateTime = 0.5;
	var counterUpdateTime = 1000;

    auctionUpdateTime = auctionUpdateTime * 1000;

  var auctions = '';
	var prices = '';
	var auctions1 = '';

    $('.auction-item').each(function(){
        var auctionId    = $(this).attr('id');
        var auctionTitle = $(this).attr('title');
		auctions = auctions + auctionId + '=' + auctionTitle + '&';
    });

	var firstimage_bold;

	var GlobalVar = 0;
    setcountervar = setInterval(function(){
        if(auctions){
                getStatusUrl = 'update_info.php?flp=' + flipflop;
            $.ajax({
                url: getStatusUrl,
                dataType: 'json',
                type: 'POST',
                timeout: 2000,
                data: auctions,
				global: false,
                success: function(data){
					storedata = data;
					$.each(data, function(i, item){
					auction_id = item.a.id;
					auction_price = item.a.pr;
					auction_bidder_name = item.a.u;
					chk_update_info = item.a.F;
					if(chk_update_info!="")
					{
						//document.getElementById("update_info_chk").innerHTML = chk_update_info;
					}
				    if(auction_bidder_name=="")
				    {
					   auction_bidder_name="---"
				    }
					if(document.getElementById('price_index_page_' + auction_id) && document.getElementById('price_index_page_' + auction_id).innerHTML != auction_price)
					{
						if(GlobalVar == 1)
						{
							if($('.history_auctionid').length)
							{
								if(auction_id==document.getElementById('history_auctionid').innerHTML)
								{
									$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#ffffff",final:""})
									$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#ffffff",final:""})
								}
								else
								{
									$(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""});
									/*$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})
									$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})*/
								}
							}
							else
							{
								$(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""});
/*								$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})
								$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})*/
							}
						}
						document.getElementById('price_index_page_' + auction_id).innerHTML = auction_price;
						//document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency;
						if(Currency1!="") { document.getElementById('currencysymbol1_' + auction_id).innerHTML = Currency1;  }
						else { document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency; }
						document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
					}
					});
					GlobalVar = 1;
					data = null;
					auction_id = null;
					auction_price = null;
					auction_bidder_name = null;
					},
					error: function(XMLHttpRequest,textStatus, errorThrown){
					}
			});
		}
		if(flipflop==1) { flipflop = 2; }
		else if(flipflop==2) { flipflop = 1; }
		ChangeCountdownData(storedata);
	}, auctionUpdateTime);

    $('.bid-button-link').click(function(){
		newurl = $(this).attr('name');
        $.ajax({
            url: $(this).attr('name'),
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				if(result[0]=="unsuccess")
				{
					if(confirm(plsrechargebid))
					{
						window.location.href='buybids.php';
					}
				}
				else if(result[0]=="loginnotavailable")
				{
					alert(sessiontimedoutmsg);
					return false;
				}
				else if(result[0]=="auctioncancelled")
				{
					alert(auctioncancelledbyadmin);
					return false;
				}
				else if(result[0]=="alreadybuynow")
				{
					alert(alreadybuynow);
					return false;
				}
				//change for biginner auction is start
				else if(result[0]=="alreadywon")
				{
					alert(youalreadywonauc);
					return false;
				}
				else if(result[0]=="bidononerbiginner")
				{
					alert(youcanbidonlyone);
					return false;
				}
				else if(result[0]=="auclimitreach")
				{
					alert(auclimitreach);
					return false;
				}
				else if(result=="topbid")
				{
					alert(youaretopbidder);
					return false;
				}
				else if(result=="bannewcomerlimit")
				{
					alert(bannewcomerlimit);
					return false;
				}
				else if(result[0]=="success")
				{
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						obj.innerHTML = Number(objvalue) - 1;
					}

					if($('.history_auctionid').length)
					{
						getauctioniddata = newurl.split("&");
						getauctionid = getauctioniddata[1].substr(4);
						if(document.getElementById('history_auctionid').innerHTML == getauctionid)
						{
							ChangePlaceBids();
						}
					}
				}
			});
            },
			error: function(XMLHttpRequest,textStatus, errorThrown){
			}
        });

        return false;
    });


	if($('.productImageThumb').length){
    setInterval(function(){
		auctionhisid = document.getElementById('history_auctionid').innerHTML;

		oldprice = document.getElementById('curproductprice').innerHTML;
		newprice = document.getElementById('price_index_page_' + auctionhisid).innerHTML;
	if(oldprice!=newprice)
	{
		getStatusUrl3 = 'updatehistory.php';
	$.ajax({
		url: getStatusUrl3,
		dataType: 'json',
		type: 'POST',
		data: 'aucid_new='+auctionhisid,
		success: function(data){
			data1 = eval('(' + data.responseText + ')');
			for(i=0;i<data.histories.length;i++)
			{
				biddingprice = data.histories[i].history.bprice;
				biddingusername = data.histories[i].history.username;
				biddingtype = data.histories[i].history.bidtype;

				document.getElementById('bid_price_' + i).innerHTML = Currency + number_format1(biddingprice,2,Separator,T_Separator) + Currency1;
				document.getElementById('bid_user_name_' + i).innerHTML = biddingusername;

				if(biddingtype=='s')
				{
					document.getElementById('bid_type_' + i).innerHTML = placesinglebid;
				}
				else if(biddingtype=='b')
				{
					document.getElementById('bid_type_' + i).innerHTML = placebidbuddy;
				}
				else if(bidding_type=='m')
				{
					document.getElementById('bid_type_' + i).innerHTML = placesmsbid;
				}
			}

			if(data.myhistories.length)
			{
				for(j=0;j<data.myhistories.length;j++)
				{
					biddingprice1 = data.myhistories[j].myhistory.bprice;
					biddingusername1 = data.myhistories[j].myhistory.time;
					biddingtype1 = data.myhistories[j].myhistory.bidtype;

					document.getElementById('my_bid_price_' + j).innerHTML = Currency + number_format1(biddingprice1,2,Separator,T_Separator) + Currency1;
					document.getElementById('my_bid_time_' + j).innerHTML = biddingusername1;

					if(biddingtype1=='s')
					{
						document.getElementById('my_bid_type_' + j).innerHTML = placesinglebid;
					}
					else if(biddingtype1=='b')
					{
						document.getElementById('my_bid_type_' + j).innerHTML = placebidbuddy;
					}
					else if(biddingtype1=='m')
					{
						document.getElementById('my_bid_type_' + j).innerHTML = placesmsbid;
					}
				}
			}
			if(data.butlerslength.length)
			{
				changedatabutler(data,"dbut","");
			}
			else
			{
				if(document.getElementById('bids_count'))
				{
					for (j=1;j<5;j++)
					{
						if(document.getElementById('butlerstartprice_'+j) && document.getElementById('butlerstartprice_'+j).innerHTML!="&nbsp;")
						{
							document.getElementById('mainbutlerbody_' + j).style.display = 'none';
						}
					}
				}
			}
			if(data.biddinglength.length && document.getElementById('bids_count'))
			{
				userpendingbids = document.getElementById('bids_count');
				auctionplacebids = data.biddinglength[0].placebids.bids;

				placebids = Number(auctionplacebids);
				placeamount = document.getElementById('placebidsamounthid').innerHTML;
				oldplacedbidscount = Number(document.getElementById('placebidscount').innerHTML);

				if(userpendingbids && placebids>oldplacedbidscount)
				{
					document.getElementById('placebidscount').innerHTML = placebids;
					document.getElementById('placebidsamount').innerHTML = 	number_format(Number(placeamount) + Number(front_min_price),2,Separator,T_Separator);
					document.getElementById('placebidsamounthid').innerHTML = 	number_format(Number(placeamount) + Number(front_min_price),2,'.','');
					newsavingvalue =  Number(document.getElementById('placebidssaving').innerHTML) - Number(front_min_price);
					if(newsavingvalue < 0 ) {
						temp = newsavingvalue.toString();
						newsavingvalue1 = temp.replace('-','');
					}
					else
					{
						newsavingvalue1 = newsavingvalue;
					}
					document.getElementById('placebidssaving').innerHTML = number_format(Number(newsavingvalue),2,'.','');
					document.getElementById('placebidssavingdisp').innerHTML = number_format(Number(newsavingvalue1),2,Separator,T_Separator);

					if(document.getElementById('buynow_placebids_price_hid'))
					{
						buynowplacebidsold = Number(document.getElementById('buynow_placebids_price_hid').innerHTML);
						buynowsavingsold = Number(document.getElementById('buynow_price_savings_hid').innerHTML);
						buynowdiscountpriceforplus = number_format_newp(Number((Number(front_min_price) * Number(100)) / 100),2,'.','');
						newplacebidsvaluebuynow = Number(buynowplacebidsold + Number(buynowdiscountpriceforplus));
						newsavingsvaluebuynow = Number(buynowsavingsold - Number(buynowdiscountpriceforplus));

						if(newsavingsvaluebuynow <0)
						{
							temp = newsavingsvaluebuynow.toString();
							newsavingsvaluebuynow1 = temp.replace('-','');
						}
						else
						{
							newsavingsvaluebuynow1 = newsavingsvaluebuynow;
						}
						document.getElementById('buynow_placebids_price_hid').innerHTML = number_format(newplacebidsvaluebuynow,2,'.','');
						document.getElementById('buynow_price_savings_hid').innerHTML = number_format(newsavingsvaluebuynow,2,'.','');
						document.getElementById('buynow_placebids_price').innerHTML = number_format(newplacebidsvaluebuynow,2,'.',',');
						document.getElementById('buynow_price_savings').innerHTML = number_format(newsavingsvaluebuynow1,2,'.',',');
					}
				}
			}
			document.getElementById('curproductprice').innerHTML = data.histories[0].history.bprice;
		},
		error: function(XMLHttpRequest,textStatus, errorThrown){
//			alert(textStatus);
		}
		   });
	}
	 },counterUpdateTime);
    }

    $('.bookbidbutlerbutton').click(function(){
	if(document.getElementById('bookbidbutlerbutton').name!="")
	{
		var bidbutstartprice;
		var bidbutendprice;
		var totalbids;


		bidbutstartprice1 = document.bidbutler.bidbutstartprice.value;
		bidbutendprice1 = document.bidbutler.bidbutendprice.value;

		if(bidbutstartprice1.indexOf(",")>0)
		{
			bidbutstartprice1 = bidbutstartprice1.replace(".","");
			bidbutstartprice1 = bidbutstartprice1.replace(",",".");
		}
		else
		{
			bidbutstartprice1 = bidbutstartprice1.replace(",",".");
		}

		if(bidbutendprice1.indexOf(",")>0)
		{
			bidbutendprice1 = bidbutendprice1.replace(".","");
			bidbutendprice1 = bidbutendprice1.replace(",",".");
		}
		else
		{
			bidbutendprice1 = bidbutendprice1.replace(",",".");
		}

		bidbutstartprice = Number(bidbutstartprice1);
		bidbutendprice = Number(bidbutendprice1);
		totalbids = Number(document.bidbutler.totalbids.value);

		if(bidbutstartprice=="")
		{
			alert(entbutsprice);
			return false;
		}
		if(bidbutendprice=="")
		{
			alert(entbuteprice);
			return false;
		}
		if(totalbids=="")
		{
			alert(entbutbids);
			return false;
		}
		if(totalbids<=1)
		{
			alert(entmoreone);
			return false;
		}
		if(bidbutstartprice>bidbutendprice)
		{
			alert(spricegreat);
			return false;
		}
		if(bidbutstartprice==bidbutendprice)
		{
			alert(endpricegreat);
			return false;
		}
		$.ajax({
            url: "addbidbutler.php?aid="+$(this).attr('name')+"&bidsp="+bidbutstartprice+"&bidep="+bidbutendprice+"&totb="+totalbids,
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result;
				if(result=="unsuccessprice")
				{
					alert(bidfromvalueismust);
					return false;
				}
				else if(result=="alreadybuynow")
				{
					alert(alreadybuynow);
					return false;
				}
				else if(result=="unsuccessbid")
				{
					alert(entmoreone);
					return false;
				}
				else if(result=="unsuccessendprice")
				{
					alert(spricegreat);
					return false;
				}
				else if(result=="unsuccess")
				{
					alert(plsrechargebid);
					return false;
				}
				else if(result=="bidononerbiginner")
				{
					alert(youcanbidonlyone);
					return false;
				}
				else if(result=="alreadywon")
				{
					alert(youalreadywonauc);
					return false;
				}
				else if(result=="auclimitreach")
				{
					alert(auclimitreach);
					return false;
				}
				else if(result=="bannewcomerlimit")
				{
					alert(bannewcomerlimit);
					return false;
				}
				else
				{
					document.bidbutler.bidbutstartprice.value="";
					document.bidbutler.bidbutendprice.value="";
					document.bidbutler.totalbids.value="";
					document.getElementById('butlermessage').style.display='block';
					changeMessageTimer = setInterval("ChangeButlerImageSecond()",3000);
					changedatabutler(data,"abut",totalbids);
				}
			  });
			},
			error: function(XMLHttpRequest,textStatus, errorThrown){
//				alert(textStatus);
			}
        });

        return false;
	 }
    });
}

function DeleteBidButler(id,div_id)
{
	if(confirm(suredeletebutler))
	{
		$.ajax({
			url: url = "deletebutler.php?delid=" + id,
			dataType: 'json',
			success: function(data){
			$.each(data, function(i, item){
				result = item.result;
				if(result=="unsuccess")
				{
					alert(youbidisrunning);
				}
				else
				{
					//placebids = document.getElementById('butlerbids_' + div_id).innerHTML;
					placebids = document.getElementById('butler_placed_bids_' + div_id).innerHTML;
					usedbids = document.getElementById('butler_used_bids_' + div_id).innerHTML;
					objbids = document.getElementById('bids_count');
					objbidsvalue = document.getElementById('bids_count').innerHTML;
					if(objbids.innerHTML!='0')
					{
						//objbids.innerHTML = Number(objbidsvalue) + Number(placebids);
						objbids.innerHTML = Number(objbidsvalue) + (Number(placebids) - Number(usedbids.replace("/","")));
					}
					changedatabutler(data,"dbut","");
				}
			});
		},
			error: function(XMLHttpRequest,textStatus, errorThrown){
	//				alert(textStatus);
			}
		});
		return false;
	}
}

function ChangeCountdownData(resdata)
{
	if(resdata && resdata!="")
	{
		data = resdata;
		pt=1;
		$.each(data, function(i, item){
		auction_id = item.a.id;
		auction_time = item.a.t;
		pausestatus = item.a.pu;
		balloon_auction= item.a.ba;
//		alert(auction_id + "===" + auction_time + "===" + pausestatus);
		if(auction_time)
		{
			if(auction_time=='0' || auction_time=='-1')
			{
				document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
				document.getElementById('counter_index_page_' + auction_id).innerHTML = going;
			}
			else if(auction_time=='-2')
			{
				//setTimeout(function(){
				if($('.history_auctionid').length)
				{
					if(document.getElementById('history_auctionid').innerHTML==auction_id)
					{
						document.getElementById('bookbidbutlerbutton').name = "";
					}
				}
				document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
				document.getElementById('counter_index_page_' + auction_id).innerHTML = printended;
				document.getElementById('image_main_' + auction_id).onclick="";
				document.getElementById('image_main_' + auction_id).name="";
				document.getElementById('image_main_' + auction_id).onmouseover="";
				document.getElementById('image_main_' + auction_id).onmouseout="";
				document.getElementById('image_main_' + auction_id).src = allimagepath + "soldbut.png";
				//},0);
			}
			else if(pausestatus==1)
			{
				document.getElementById('counter_index_page_' + auction_id).innerHTML = printpause;
				document.getElementById('image_main_' + auction_id).src = allimagepath + "bidbut.png";
				document.getElementById('image_main_' + auction_id).onclick="";
				document.getElementById('image_main_' + auction_id).onmouseover="";
				document.getElementById('image_main_' + auction_id).name="";
				document.getElementById('image_main_' + auction_id).onmouseout="";
				pauseopenflag = 1;
			}
			else
			{
				if(auction_time<10)
				{
				document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
				document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
				}
				else
				{
				document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
				document.getElementById('counter_index_page_' + auction_id).innerHTML = calc_counter_from_time(auction_time);
				}
				if(pauseopenflag==1)
				{
					document.getElementById('image_main_' + auction_id).src = allimagepath + "bidbut.png";
					if(pt==data.length)
					{
						pauseopenflag = 0;
					}
				}
			}
		}
	/*	if(balloon_auction == "yes")
		{
			var ServerPage = "ballon_content.php?aid=" + auction_id;
			xmlhttp.open("GET",ServerPage);
			//var GlobalVar = 0;
			//var storedata = '';
			xmlhttp.onreadystatechange = function() {
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					result = xmlhttp.responseText;
					auction_balloon = "auction_balloon_"+auction_id;
					document.getElementById(auction_balloon).innerHTML = result;
					FB.XFBML.parse();
				}
			}
			xmlhttp.send(null);
		}*/
		pt++;
	  }
	  );

	}
	data = null;
}
function paginate(page)
{
	var ServerPage = "index.php?pgno1=" + page;
	xmlhttp.open("GET",ServerPage);
	//var GlobalVar = 0;
	//var storedata = '';
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			result = xmlhttp.responseText.split('~');
			document.getElementById("content_container").innerHTML = result[1];
			FB.XFBML.parse();

			clearInterval(setcountervar);
			newauctions = result[0].split(",");
			var auctions = '';
			var auctionUpdateTime = 0.5;
			var counterUpdateTime = 1000;

			auctionUpdateTime = auctionUpdateTime * 1000;

			for(i=0;i<newauctions.length;i++)
			{
				var auctionId    = "auction_"+newauctions[i];
				var auctionTitle = newauctions[i];
				auctions = auctions + auctionId + '=' + auctionTitle + '&';
			}
			var storedata = '';
			var GlobalVar = 0;

			setcountervar = setInterval(function(){
				if(auctions){
					getStatusUrl = 'update_info.php?flp=' + flipflop;
					$.ajax({
                url: getStatusUrl,
                dataType: 'json',
                type: 'POST',
                timeout: 2000,
                data: auctions,
				global: false,
                success: function(data){
					storedata = '';
					storedata = data;
					$.each(data, function(i, item){
					auction_id = item.a.id;
					auction_price = item.a.pr;
					auction_bidder_name = item.a.u;
					chk_update_info = item.a.F;
					if(chk_update_info!="")
					{
						//document.getElementById("update_info_chk").innerHTML = chk_update_info;
					}
				    if(auction_bidder_name=="")
				    {
					   auction_bidder_name="---"
				    }
					if(document.getElementById('price_index_page_' + auction_id) && document.getElementById('price_index_page_' + auction_id).innerHTML != auction_price)
					{
						if(GlobalVar == 1)
						{
							if($('.history_auctionid').length)
							{
								if(auction_id==document.getElementById('history_auctionid').innerHTML)
								{
									$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#ffffff",final:""})
									$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#ffffff",final:""})
								}
								else
								{
									$(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""});
									/*$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})
									$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})*/
								}
							}
							else
							{
								$(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""});
/*								$(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})
								$(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#f79909",speed:400,end:"#f8f6f3",final:""})*/
							}
						}
						document.getElementById('price_index_page_' + auction_id).innerHTML = auction_price;
						//document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency;
						if(Currency1!="") { document.getElementById('currencysymbol1_' + auction_id).innerHTML = Currency1;  }
						else { document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency; }
						document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
					}
					});
					GlobalVar = 1;
					data = null;
					auction_id = null;
					auction_price = null;
					auction_bidder_name = null;
					},
					error: function(XMLHttpRequest,textStatus, errorThrown){
					}
			});
		}
		if(flipflop==1) { flipflop = 2; }
		else if(flipflop==2) { flipflop = 1; }
		ChangeCountdownData(storedata);
	}, auctionUpdateTime);

    $('.bid-button-link').click(function(){
		newurl = $(this).attr('name');
        $.ajax({
            url: $(this).attr('name'),
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				if(result[0]=="unsuccess")
				{
					if(confirm(plsrechargebid))
					{
						window.location.href='buybids.php';
					}
				}
				else if(result[0]=="loginnotavailable")
				{
					alert(sessiontimedoutmsg);
					return false;
				}
				else if(result[0]=="auctioncancelled")
				{
					alert(auctioncancelledbyadmin);
					return false;
				}
				else if(result[0]=="alreadybuynow")
				{
					alert(alreadybuynow);
					return false;
				}
				//change for biginner auction is start
				else if(result[0]=="alreadywon")
				{
					alert(youalreadywonauc);
					return false;
				}
				else if(result[0]=="bidononerbiginner")
				{
					alert(youcanbidonlyone);
					return false;
				}
				else if(result[0]=="auclimitreach")
				{
					alert(auclimitreach);
					return false;
				}
				else if(result=="topbid")
				{
					alert(youaretopbidder);
					return false;
				}
				else if(result=="bannewcomerlimit")
				{
					alert(bannewcomerlimit);
					return false;
				}
				else if(result[0]=="success")
				{
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						obj.innerHTML = Number(objvalue) - 1;
					}

					if($('.history_auctionid').length)
					{
						getauctioniddata = newurl.split("&");
						getauctionid = getauctioniddata[1].substr(4);
						if(document.getElementById('history_auctionid').innerHTML == getauctionid)
						{
							ChangePlaceBids();
						}
					}
				}
			});
            },
			error: function(XMLHttpRequest,textStatus, errorThrown){
			}
        });

        return false;
    });
	document.getElementById('content_container').scrollIntoView();
		}
	}
	xmlhttp.send(null);
}
