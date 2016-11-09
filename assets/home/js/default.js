var flipflop=1;
var storedata;
var pauseopenflag;
var setcountervar = "";
var gosold = "&nbsp;";

function OnloadPage()
{
    //if($.browser.msie){
	if (navigator.userAgent.match("MSIE")){
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
					if(!document.getElementById('seat-auction-'+auction_id))
					{
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
										// Trying color
										// $(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""})
										// $(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""})
										// setTimeout(function(){$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');}, 1000);
										// setTimeout(function(){$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');}, 1000);
										$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');
										$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');
										$(document.getElementById('price_index_page_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_' + auction_id)).offsetWidth;
										$(document.getElementById('currencysymbol_' + auction_id)).offsetWidth = $(document.getElementById('currencysymbol_' + auction_id)).offsetWidth;
										$(document.getElementById('price_index_page_' + auction_id)).addClass('flashcash');
										$(document.getElementById('currencysymbol_' + auction_id)).addClass('flashcash');
									}
									else
									{
										// Trying color
										// $(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#f8f6f3",final:""});
										// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
										$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
										$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
										$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
									}
								}
								else
								{
									// Trying color
									// $(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#f8f6f3",final:""});
									// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
									$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
									$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
								}
							}
							document.getElementById('price_index_page_' + auction_id).innerHTML = auction_price;
							updateBidsaurusFromPrice(auction_price);

							//document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency;
							if(Currency1!="") { document.getElementById('currencysymbol1_' + auction_id).innerHTML = Currency1;  }
							else { document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency; }
							var bidding_username_prefix = auction_bidder_name.substr(0, 1).toUpperCase() ;
							if(bidding_username_prefix!="-")
							{
								document.getElementById('product_bidder_' + auction_id).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+auction_bidder_name;
							}else {
								document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
							}
							if(document.getElementById('curbidder'))
							{
								document.getElementById('curbidder').innerHTML = auction_bidder_name;
							}//document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;

						}
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
		var newaiduse = $(this).attr("id");
		var newaidusersplit = newaiduse.split("image_main_");
		var newaid = "";
		if(newaidusersplit[1]!="")
		{
			newaid = newaidusersplit[1];
		}
        $.ajax({
            url: $(this).attr('name'),
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				var bids = 0;
				if( typeof item.bids != 'undefined'){
				    bids = item.bids;
				}
				if(result[0]=="unsuccess")
				{
					//Show modal window instead of the commened out.
					showBuyBidsWindow();


					/*if(confirm(plsrechargebid))
					{
						window.location.href='buybids.php';
					}*/
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
					//alert(youaretopbidder);
					return false;
				}
				else if(result=="bannewcomerlimit")
				{
					alert(bannewcomerlimit);
					return false;
				}
				else if(result=="alreadyrebateforbuynow")
				{
					//alert(lng_alreadyrebateforbuynow);
					//return false;
					prd_rebat_box_open();
				}
				else if(result=="cannotsetautobidmorethanbuynowprice")
				{
					alert(lng_cannotsetautobidmorethanbuynowprice);
					return false;
				}
				else if(result[0]=="highvalueauclimitreach")
				{
					alert(lng_highvalueauclimitreach);
					return false;
				}
				else if(result[0]=="alreadylockedauctioncannotbid")
				{
					alert(lng_alreadylockedauctioncannotbid);
					if(document.getElementById("image_locked_auc_"+newaid))
					{
						document.getElementById("image_locked_auc_"+newaid).style.display = "inline-block";
						document.getElementById("image_main_"+newaid).style.display = "none";
					}
					return false;
				} else if( result[0] == "alreadysetautobidsametoproductprice" ){

				    alert(lng_alreadysetautobidsametoproductprice);
				    return false;

				} else if(result[0]=="success") {
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;

					if(obj.innerHTML!='0')
					{
						if(bids > 0){
						    obj.innerHTML = Number(objvalue) - bids;
						} else {
						    obj.innerHTML = Number(objvalue) - 1;
						}

						if (obj.innerHTML == '0')
						{
							showBuyBidsWindow();
						}
						else if(document.getElementById('running_out_of_bid_notification'))
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
								if(newaid!="")
								{
									if( document.getElementById('index_buynow_placebids_price_hid_'+newaid) && document.getElementById('index_buynow_price_savings_hid_'+newaid) && document.getElementById('index_buynow_placebids_price_'+newaid) && document.getElementById('index_buynow_price_savings_'+newaid) )
									{
										var default_single_bid = document.getElementById('global_price_for_default_single_bid').value;
										if( bids > 0 ){
										    default_single_bid = default_single_bid * bids;
										}

										var buynow_placebids_price = document.getElementById('index_buynow_placebids_price_'+newaid);
										var buynow_placebids_price_hid = document.getElementById('index_buynow_placebids_price_hid_'+newaid);

										var buynow_placebids_price_final = Number(buynow_placebids_price_hid.innerHTML)+Number(default_single_bid);

										buynow_placebids_price.innerHTML = number_format(buynow_placebids_price_final,0,'','');
										buynow_placebids_price_hid.innerHTML = number_format(buynow_placebids_price_final,0,'','');

										var buynow_price_savings = document.getElementById('index_buynow_price_savings_'+newaid);
										var buynow_price_savings_hid = document.getElementById('index_buynow_price_savings_hid_'+newaid);

										var buynow_price_savings_final = Number(buynow_price_savings_hid.innerHTML)-Number(default_single_bid);

										buynow_price_savings.innerHTML = number_format(buynow_price_savings_final,0,'','');
										buynow_price_savings_hid.innerHTML = number_format(buynow_price_savings_final,0,'','');
									}
								}
							}
						}
					}

					if($('.history_auctionid').length)
					{
						getauctioniddata = newurl.split("&");
						getauctionid = getauctioniddata[1].substr(4);
						if(document.getElementById('history_auctionid').innerHTML == getauctionid)
						{
							//ChangePlaceBids();
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
				var bidding_username_prefix = biddingusername.substr(0, 1).toUpperCase() ;
				document.getElementById('bid_user_name_' + i).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+biddingusername;

				if(biddingtype=='s')
				{
					document.getElementById('bid_type_' + i).innerHTML = placesinglebid;
				}
				else if(biddingtype=='b')
				{
					document.getElementById('bid_type_' + i).innerHTML = placebidbuddy;
				}
				else if(biddingtype=='m')
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
						buynowdiscountpriceforplus = number_format_newp(Number((Number(front_min_price) * Number(100)) / 100),0,'.','');
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

						if( document.getElementById('product_detail_bidnow_bidmultiplier') ){
						    bids = document.getElementById('product_detail_bidnow_bidmultiplier').innerHTML.replace('x','');

						    newsavingsvaluebuynow2 = bids * front_min_price;
						    newsavingsvaluebuynow1 = newsavingsvaluebuynow1 - newsavingsvaluebuynow2;
						    newsavingsvaluebuynow1 = Number(newsavingsvaluebuynow1) + Number(buynowdiscountpriceforplus);
						    newplacebidsvaluebuynow = Number(newplacebidsvaluebuynow) + Number(newsavingsvaluebuynow2);
						    newplacebidsvaluebuynow = Number(newplacebidsvaluebuynow) - Number(buynowdiscountpriceforplus);
						}

						document.getElementById('buynow_placebids_price_hid').innerHTML = number_format(newplacebidsvaluebuynow,0,'.','');
						document.getElementById('buynow_price_savings_hid').innerHTML = number_format(newsavingsvaluebuynow1,0,'.','');
						document.getElementById('buynow_placebids_price').innerHTML = number_format(newplacebidsvaluebuynow,0,'.',',');
						document.getElementById('buynow_placebids_bottom').innerHTML = number_format(newplacebidsvaluebuynow,0,'.',',');
						document.getElementById('buynow_price_savings').innerHTML = number_format(newsavingsvaluebuynow1,0,'.',',');
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

	$('#bookbidbutlerbutton10').click(function(){
		document.getElementById('totalbids').value = "10";
		var aid = document.getElementById('history_auctionid').innerHTML;
		var auction_price = document.getElementById('price_index_page_'+aid).innerHTML;
		document.bidbutler.bidbutstartprice.value = auction_price;
		$('.bookbidbutlerbutton').click();
	});

	$('#bookbidbutlerbutton20').click(function(){
		document.getElementById('totalbids').value = "20";
		var aid = document.getElementById('history_auctionid').innerHTML;
		var auction_price = document.getElementById('price_index_page_'+aid).innerHTML;
		document.bidbutler.bidbutstartprice.value = auction_price;
		$('.bookbidbutlerbutton').click();
	});

	$('#bookbidbutlerbutton50').click(function(){
		document.getElementById('totalbids').value = "50";
		var aid = document.getElementById('history_auctionid').innerHTML;
		var auction_price = document.getElementById('price_index_page_'+aid).innerHTML;
		document.bidbutler.bidbutstartprice.value = auction_price;
		$('.bookbidbutlerbutton').click();
	});

	$('#bookbidbutlerbutton100').click(function(){
		document.getElementById('totalbids').value = "100";
		var aid = document.getElementById('history_auctionid').innerHTML;
		var auction_price = document.getElementById('price_index_page_'+aid).innerHTML;
		document.bidbutler.bidbutstartprice.value = auction_price;
		$('.bookbidbutlerbutton').click();
	});

	overbidsaurus=false;
	manualbid=false;
	reducedbidsaurus= false;
	toolessbidsaurus= false;
	readd = false;

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

		var auction_price = document.getElementById('price_index_page_'+$(this).attr('name')).innerHTML;
		bidbutstartprice = Number(bidbutstartprice1);
		if(bidbutstartprice<auction_price)
		{
			bidbutstartprice=auction_price;
		}
		bidbutendprice = Number(bidbutendprice1);
		totalbids = Number(document.bidbutler.totalbids.value);
		totalbids = Math.floor(totalbids);
		if(totalbids < 3)
		{
			totalbids = 3;
			toolessbidsaurus = true;
		}
		document.bidbutler.totalbids.value=totalbids;

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

		if(document.getElementById('curauctiontime')&&document.getElementById('curbidder')&&bidbutstartprice-.1<=auction_price)
		{
			var auction_time=Number(document.getElementById('curauctiontime').innerHTML);
			if(auction_time <= 12 && auction_time > -3)
			{
				var auction_bidder = document.getElementById('curbidder').innerHTML;
				var currentuser = document.getElementById('curuser').innerHTML;
				if(currentuser != auction_bidder)
				{
					$('.bid-button-link').click()
					totalbids = totalbids - 1;
					manualbidplaced = true;
				}
			}
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
					finalbids = item.finalbids;
					bidmultiplier = item.bidmultiplier;
					if(Number(finalbids) == 0 || Number(finalbids) < Number(bidmultiplier) || Number(finalbids) < Number(bidmultiplier*3))
					{
						showBuyBidsWindow();//alert(plsrechargebid);
						return false;
					}
					document.getElementById('totalbids').value = Math.floor(finalbids/bidmultiplier);
					$('.bookbidbutlerbutton').click();
					reducedbidsaurus = true;
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
				else if(result=="alreadyrebateforbuynow")
				{
					//alert(lng_alreadyrebateforbuynow);
					//return false;
					prd_rebat_box_open();
				}
				else if(result=="cannotsetautobidmorethanbuynowprice")
				{
					canbidmore = item.canbidmore;
					bidmultiplier = item.bidmultiplier;
					noofbids = Math.floor(canbidmore);
					if(noofbids < 1)
					{
						alert(lng_cannotsetautobidmorethanbuynowprice);
						return false;
					}
					document.getElementById('totalbids').value = Math.floor(canbidmore);
					$('.bookbidbutlerbutton').click();
					overbidsaurus = true;
					return false;

					//return false;
				}
				else if(result=="highvalueauclimitreach")
				{
					alert(lng_highvalueauclimitreach);
					return false;
				}
				else if(result=="alreadylockedauctioncannotbid")
				{
					alert(lng_alreadylockedauctioncannotbid);
					if(document.getElementById("image_locked_auc_"+$(this).attr('name')))
					{
						document.getElementById("image_locked_auc_"+$(this).attr('name')).style.display = "inline-block";
						document.getElementById("image_main_"+$(this).attr('name')).style.display = "none";
					}
					return false;
				}
				else
				{
					document.bidbutler.bidbutstartprice.value=auction_price;
					document.bidbutler.bidbutendprice.value="999999.95";
					document.bidbutler.totalbids.value="";
					$('#bidbutinbids').text(" - ");
					$('#bidsaurus_customadd').hide();
					$( "#custombsr-toggle" ).removeClass('active');
					$('#bidsaurus_table').slimScroll({ scrollTo: '0px' });

					bidmultiplier = Number(document.getElementById('bidmultiplier').innerHTML);
					totalbids = Number(totalbids);
					actualbids = totalbids*bidmultiplier;
					if(manualbid)
					{
						var popupText = lng_bidsauruslessthan10secs+totalbids+lng_bidsauruslessthan10secs2;
					}else if (reducedbidsaurus)
					{
						var popupText = lng_bidsaurusnotenoughbids+actualbids+lng_bidsaurusnotenoughbids2+totalbids+lng_bidsaurusnotenoughbids3+actualbids+lng_bidsaurusnotenoughbids4;
					}else if (overbidsaurus)
					{
						var popupText = lng_bidsaurusmoreproductprice+actualbids+lng_bidsaurusmoreproductprice2+totalbids+lng_bidsaurusmoreproductprice3+actualbids+lng_bidsaurusmoreproductprice4;
					}else if (toolessbidsaurus)
					{
						var popupText = lng_bidsauruslessthan3;
					} else
					{
						var popupText = lng_bidsaurusplaced;
					}
					poppuper = "#bidsaurus_tablehead";
					$(poppuper).attr("data-content",popupText);
					$(poppuper).popover('show');
					$('#mainbutlerbody_1').addClass('flashbg');
					setTimeout(function(){$(poppuper).popover('hide')}, 3000);
					setTimeout(function () {
						$('#mainbutlerbody_1').removeClass('flashbg');
					}, 3000);
					//$( ".btn-bsr" ).blur();
					// document.getElementById('butlermessage').style.display='block';
					// changeMessageTimer = setInterval("ChangeButlerImageSecond()",3000);


					changedatabutler(data,"abut",totalbids);
					manualbid=false;
					reducedbidsaurus=false;
					overbidsaurus=false;
					toolessbidsaurus=false;
				}
			  });
			},
			error: function(XMLHttpRequest,textStatus, errorThrown){
//				alert(textStatus);
				manualbid=false;
				reducedbidsaurus=false;
				overbidsaurus=false;
				toolessbidsaurus=false;
			}
        });

        return false;
	 }
    });

	$('.bid-button-buyseat').click(function(){
		var geturlsplit = $(this).attr('name').split('&');
		var auctid = geturlsplit[1].replace("aid=","");
		var availableseats = document.getElementById("available_seats_"+auctid).innerHTML;
		var morepassesval =  document.getElementById("morepasses").value;
		var morepassno = 1;
		if(document.getElementById("morepasses").value=="")
		{
			alert(plsenterhowmanypasses);
			document.getElementById("morepasses").focus();
			return false;
		}
		if(Number(document.getElementById("morepasses").value)<=0)
		{
			alert(passesvaluemustbe);
			document.getElementById("morepasses").focus();
			return false;
		}
		if(Number(morepassesval)>Number(availableseats))
		{
			alert(numberpassesisgrater);
			document.getElementById("morepasses").value = "";
			return false;
		}
		if(Number(morepassesval)>1)
		{
			/*if(!confirm(youwanttobuy+" "+morepassesval+" "+onlywordpasses))
			{
				document.getElementById("morepasses").value = "";
				return false;
			}
			morepassno = Number(morepassesval);	*/
			alert(lng_youcannotbuymorethenone);
			document.getElementById("morepasses").focus();
			return false;
		}

		$.ajax({
            url: $(this).attr('name')+'&morepasses='+morepassno,
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				if(result[0]=="auctionclosedbyadmin")
				{
					alert(youcantbuyseatadmin);
					return false;
				}
				if(result[0]=="reserveunsuccess")
				{
					alert(youdonthavebalance);
					return false;
				}
				if(result[0]=="unsuccess")
				{
					if(confirm(plsrechargeyouraccount))
					{
						window.location.href='buybids.php';
					}
					return false;
				}
				if(result[0]=="alreadybooked")
				{
					alert(youalreadyhaveapasses);
					return false;
				}
				if(result[0]=="noseatavailable")
				{
					alert(nopassesavailable);
					return false;
				}
				if(result[0]=="auclimitreach")
				{
					alert(auclimitreach);
					return false;
				}
				else if(result[0]=="highvalueauclimitreach")
				{
					alert(lng_highvalueauclimitreach);
					return false;
				}
				else if(result[0]=="alreadylockedauctioncannotbid")
				{
					alert(lng_alreadylockedauctioncannotbid);
					if(document.getElementById("image_locked_auc_"+auctid))
					{
						document.getElementById("image_locked_auc_"+auctid).style.display = "inline-block";
						document.getElementById("image_main_"+auctid).style.display = "none";
					}
					return false;
				}
				if(result[0]=="success")
				{
					bidpoint = result[1];
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						obj.innerHTML = Number(objvalue) - (Number(bidpoint)*Number(morepassesval));

						if(document.getElementById('running_out_of_bid_notification'))
						{
							var running_out_of_bid_notification = document.getElementById('running_out_of_bid_notification').value;
							if(Number(running_out_of_bid_notification)>=Number(obj.innerHTML))
							{
								document.getElementById("low_bid_notification_main").style.display='inline-block';
								$("#bids_count").addClass("low");
							}
						}
					}
				}
			    document.getElementById('available_seats_'+result[2]).innerHTML = Number(document.getElementById('available_seats_'+result[2]).innerHTML) - Number(morepassesval);
				document.getElementById("morepasses").value = "";
				alert(yourpassesbooked);
				if(document.getElementById("producturllink")!=null)
				{
					if(document.getElementById("producturllink").innerHTML!="")
					{
						window.location.href=document.getElementById("producturllink").innerHTML;
					}
				}
			});
            },
			error: function(XMLHttpRequest,textStatus, errorThrown){
//				alert(textStatus);
			}
        });

        return false;
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
						//if( typeof data.butlerslength[0].bidbutler.bidmultiplier != 'undefined' ){
						if(document.getElementById('product_detail_bidnow_bidmultiplier')){
						    var bmbidvalues = Number(objbidsvalue);
						    var bmplacedbids = Number(placebids);
						    var bmusedbids = Number(usedbids.replace("/",""));

						    objbids.innerHTML = bmbidvalues + ((bmplacedbids-bmusedbids) * document.getElementById('product_detail_bidnow_bidmultiplier').innerHTML.replace("x",""));
						    //data.butlerslength = [];
					} else {

						objbids.innerHTML = Number(objbidsvalue) + (Number(placebids) - Number(usedbids.replace("/","")));
					    }
						if(document.getElementById('running_out_of_bid_notification'))
						{
							var running_out_of_bid_notification = document.getElementById('running_out_of_bid_notification').value;
							if(Number(running_out_of_bid_notification)>=Number(objbids.innerHTML))
							{
								document.getElementById("low_bid_notification_main").style.display='inline-block';
								$("#bids_count").addClass("low");
							}
						}
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
		if(document.getElementById('seat-auction-'+auction_id))
		{
			if(item.a.se && item.a.se!="")
			{
				if(document.getElementById('auction_total_seats_'+auction_id))
				{
					totalseats = Number(document.getElementById('auction_total_seats_'+auction_id).innerHTML);
					document.getElementById('auction_due_seats_'+auction_id).innerHTML = Number(totalseats-Number(item.a.se));
				}
			}
		}
		else
		{
			if(auction_time)
			{
				if(auction_time=='0' || auction_time=='1' )
				{
					document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = going;
				}
				else if( auction_time=='-1')
				{
					document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
					document.getElementById('counter_index_page_' + auction_id).innerHTML = gosold;
				}
				else if(auction_time=='-2')
				{
					//setTimeout(function(){
					if($('.history_auctionid').length)
					{
						if(document.getElementById('history_auctionid').innerHTML==auction_id && document.getElementById('bookbidbutlerbutton'))
						{
							document.getElementById('bookbidbutlerbutton').name = "";
						}
					}
					var checkingaucdata = 0;
					if(document.getElementById("product_detail_inner_auction_flag_" + auction_id))
					{
						//alert("1==>"+auction_id)
						if(document.getElementById("product_details_inner_auction_"+auction_id))
						{
							$("#product_details_inner_auction_"+auction_id).removeClass("product_details_inner_auction");
							$("#product_details_inner_auction_"+auction_id).addClass("product_details_inner_won_auction");
							$("#product_details_inner_auction_"+auction_id).removeAttr("id");
							var multiplier = 1;
							if(document.getElementById('product_detail_bidnow_bidmultiplier'))
							{
								var multiplier = document.getElementById('product_detail_bidnow_bidmultiplier').innerHTML.replace("x","");
							}
							var ServerPage = "checkauctiondata.php?aid=" + auction_id + "&bm=" + multiplier;
							xmlhttp.open("POST",ServerPage);
							//var GlobalVar = 0;
							//var storedata = '';
							xmlhttp.onreadystatechange = function() {
								if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
									result = xmlhttp.responseText;
									result = result.split("~~~|~~~");
									if(result[0]!="")
									{
										//document.getElementById("product_details_inner_auction_"+auction_id).innerHTML = result;
										//alert(result);
										//$(".product_details_inner_auction_"+auction_id).html(result);
										//alert("==>"+document.getElementsByClassName("product_details_inner_auction_"+auction_id).length);
										document.getElementsByClassName("product_details_inner_won_auction")[0].innerHTML = result[0];
										jQuery(".wonauction_payment").hide();
										jQuery(".wonauction_payment").slideDown();
										//$("#product_details_inner_auction_"+auction_id).removeAttr("id");
										//alert("test");
										//FB.XFBML.parse();
									}else{
										//$("#product_details_inner_auction_"+auction_id).removeAttr("id");
										if(document.getElementById('counter_index_page_' + result[1]))
										{
											document.getElementById('counter_index_page_' + result[1]).style.color = '#000000';
											document.getElementById('counter_index_page_' + result[1]).innerHTML = printended;
										}

										if(document.getElementById('image_main_' + result[1]))
										{
											document.getElementById('image_main_' + result[1]).onclick="";
											document.getElementById('image_main_' + result[1]).name="";
										}

										if(document.getElementById('image_main_' + result[1]))
										{
											document.getElementById('image_main_' + result[1]).onmouseover="";
											document.getElementById('image_main_' + result[1]).onmouseout="";
											document.getElementById('image_main_' + result[1]).src = allimagepath + "soldbut.png";
											document.getElementById("image_main_"+ result[1]).style.display = "inline-block";

											if(document.getElementById("image_locked_auc_"+ result[1]))
											{
												document.getElementById("image_locked_auc_"+ result[1]).style.display = "none";
											}
										}
									}
								}
							}
							xmlhttp.send(null);
						}/*else {
							if(document.getElementById('counter_index_page_' + auction_id))
							{
								document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
								document.getElementById('counter_index_page_' + auction_id).innerHTML = printended;
							}

							if(document.getElementById('image_main_' + auction_id))
							{
								document.getElementById('image_main_' + auction_id).onclick="";
								document.getElementById('image_main_' + auction_id).name="";
							}

							if(document.getElementById('image_main_' + auction_id))
							{
								document.getElementById('image_main_' + auction_id).onmouseover="";
								document.getElementById('image_main_' + auction_id).onmouseout="";
								document.getElementById('image_main_' + auction_id).src = allimagepath + "soldbut.png";
							}
						}*/
					}else {
						if(document.getElementById('counter_index_page_' + auction_id))
						{
							document.getElementById('counter_index_page_' + auction_id).style.color = '#000000';
							document.getElementById('counter_index_page_' + auction_id).innerHTML = printended;
							document.getElementById('image_main_' + auction_id).onclick="";
							document.getElementById('image_main_' + auction_id).name="";
							document.getElementById('image_main_' + auction_id).onmouseover="";
							document.getElementById('image_main_' + auction_id).onmouseout="";
							document.getElementById('image_main_' + auction_id).src = allimagepath + "soldbut.png";
						}
					}
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
					if(document.getElementById('auction_resets_clock_txt_flag_' + auction_id))
					{
						if(auction_time<=120 && document.getElementById('auction_resets_clock_txt_flag_' + auction_id).value=="")
						{
							document.getElementById('normal_text_bid_info_enable_' + auction_id).style.display = 'none';
							document.getElementById('every_bid_resets_clock_txt_' + auction_id).style.display = 'block';
							document.getElementById('auction_resets_clock_txt_flag_' + auction_id).value = "1";
						}
					}

					if(auction_time<10)
					{
					document.getElementById('counter_index_page_' + auction_id).style.color = '#ff0000';
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
				if(document.getElementById('curauctiontime'))
				{
					document.getElementById('curauctiontime').innerHTML=auction_time;
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
		}
		pt++;
	  }
	  );

	}
	data = null;
}
function paginate(page)
{
	ShowPageLoader();
	var CurrentCatID = "";
	var searchtxt = "";
	if(document.getElementById("CurrentCatID"))
	{
		CurrentCatID = document.getElementById("CurrentCatID").value;
	}

	if(document.getElementById("AuctionSearchTxt"))
	{
		searchtxt = document.getElementById("AuctionSearchTxt").value;
	}
	var ServerPage = "index.php?pgno1=" + page + "&cat_id="+ CurrentCatID + "&s=" + searchtxt;
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
									// $(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""})
									// $(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""})
									// setTimeout(function(){$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');}, 1000);
									// setTimeout(function(){$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');}, 1000);
									$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('price_index_page_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_' + auction_id)).offsetWidth ;
									$(document.getElementById('currencysymbol_' + auction_id)).offsetWidth = $(document.getElementById('currencysymbol_' + auction_id)).offsetWidth ;
									$(document.getElementById('price_index_page_' + auction_id)).addClass('flashcash');
									$(document.getElementById('currencysymbol_' + auction_id)).addClass('flashcash');
								}
								else
								{
									// $(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#f8f6f3",final:""});
									// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
									$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
									$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
								}
							}
							else
							{
								// $(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#f8f6f3",final:""});
								// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
								$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
								$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
								$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
							}
						}
						document.getElementById('price_index_page_' + auction_id).innerHTML = auction_price;
						updateBidsaurusFromPrice(auction_price);
						//document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency;
						if(Currency1!="") { document.getElementById('currencysymbol1_' + auction_id).innerHTML = Currency1;  }
						else { document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency; }
						var bidding_username_prefix = auction_bidder_name.substr(0, 1).toUpperCase() ;
						if(bidding_username_prefix!="-")
						{
							document.getElementById('product_bidder_' + auction_id).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+auction_bidder_name;
						}else {
							document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
						}
						if(document.getElementById('curbidder'))
						{
							document.getElementById('curbidder').innerHTML = auction_bidder_name;
						}
						//document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
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
		var newaiduse = $(this).attr("id");
		var newaidusersplit = newaiduse.split("image_main_");
		var newaid = "";
		if(newaidusersplit[1]!="")
		{
			newaid = newaidusersplit[1];
		}
        $.ajax({
            url: $(this).attr('name'),
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				var bids = 0;
				if( typeof item.bids != 'undefined'){
				    bids = item.bids;
				}
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
				else if(result=="alreadyrebateforbuynow")
				{
					//alert(lng_alreadyrebateforbuynow);
					//return false;
					prd_rebat_box_open();
				}
				else if(result=="cannotsetautobidmorethanbuynowprice")
				{
					alert(lng_cannotsetautobidmorethanbuynowprice);
					return false;
				}
				else if(result[0]=="highvalueauclimitreach")
				{
					alert(lng_highvalueauclimitreach);
					return false;
				}
				else if(result[0]=="alreadylockedauctioncannotbid")
				{
					alert(lng_alreadylockedauctioncannotbid);
					if(document.getElementById("image_locked_auc_"+newaid))
					{
						document.getElementById("image_locked_auc_"+newaid).style.display = "inline-block";
						document.getElementById("image_main_"+newaid).style.display = "none";
					}
					return false;
				} else if( result[0] == "alreadysetautobidsametoproductprice" ){

				    alert(lng_alreadysetautobidsametoproductprice);
				    return false;

				}
				else if(result[0]=="success")
				{
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						if(bids > 0){
						    obj.innerHTML = Number(objvalue) - bids;
						} else {
						    obj.innerHTML = Number(objvalue) - 1;
						}

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
								if(newaid!="")
								{
									if( document.getElementById('index_buynow_placebids_price_hid_'+newaid) && document.getElementById('index_buynow_price_savings_hid_'+newaid) && document.getElementById('index_buynow_placebids_price_'+newaid) && document.getElementById('index_buynow_price_savings_'+newaid) )
									{
										var default_single_bid = document.getElementById('global_price_for_default_single_bid').value;
										if( bids > 0 ){
										    default_single_bid = default_single_bid * bids;
										}
										var buynow_placebids_price = document.getElementById('index_buynow_placebids_price_'+newaid);
										var buynow_placebids_price_hid = document.getElementById('index_buynow_placebids_price_hid_'+newaid);

										var buynow_placebids_price_final = Number(buynow_placebids_price_hid.innerHTML)+Number(default_single_bid);

										buynow_placebids_price.innerHTML = number_format(buynow_placebids_price_final,0,'','');
										buynow_placebids_price_hid.innerHTML = number_format(buynow_placebids_price_final,0,'','');

										var buynow_price_savings = document.getElementById('index_buynow_price_savings_'+newaid);
										var buynow_price_savings_hid = document.getElementById('index_buynow_price_savings_hid_'+newaid);

										var buynow_price_savings_final = Number(buynow_price_savings_hid.innerHTML)-Number(default_single_bid);

										buynow_price_savings.innerHTML = number_format(buynow_price_savings_final,0,'','');
										buynow_price_savings_hid.innerHTML = number_format(buynow_price_savings_final,0,'','');
									}
								}
							}
						}
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
	//document.getElementById('content_container').scrollIntoView();
	$(window.opera?'html':'html, body').animate({ scrollTop: jQuery('.content_container').offset().top+12 }, 'slow' );
		}
	}
	xmlhttp.send(null);
}

function updateBidsaurusFromPrice(auction_price)
{
/*	if (document.getElementById('bidbutstartprice'))
	{
		if(document.getElementById('bidbutstartprice').innerHTML <= auction_price)
		document.getElementById('bidbutstartprice').innerHTML = auction_price+.1;
	}
	*/
	if(document.getElementById('bidbutstartprice')){
	{
		if ((document.getElementById('bidbutstartprice').value =="" || document.getElementById('bidbutstartprice').value < (Number(auction_price))))
			document.getElementById('bidbutstartprice').value = (Number(auction_price)).toFixed(2);
		}
	}
}

function CategoryFilter(catid,searchtxt)
{
	var ServerPage = "index.php?pgno1=1&cat_id="+ catid + "&s=" + searchtxt;
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
									// $(document.getElementById('currencysymbol_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""});
									// $(document.getElementById('price_index_page_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#ffffff",final:""});
									$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('price_index_page_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_' + auction_id)).offsetWidth;
									$(document.getElementById('price_index_page_' + auction_id)).addClass('flashcash');
									// setTimeout(function(){$(document.getElementById('price_index_page_' + auction_id)).removeClass('flashcash');}, 1000);
									$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('currencysymbol_' + auction_id)).offsetWidth = $(document.getElementById('currencysymbol_' + auction_id)).offsetWidth;
									$(document.getElementById('currencysymbol_' + auction_id)).addClass('flashcash');
									// setTimeout(function(){$(document.getElementById('currencysymbol_' + auction_id)).removeClass('flashcash');}, 1000);
								}
								else
								{
									// $(document.getElementById('price_index_page_main_' + auction_id)).highlightFade({start:"#ff5910",speed:400,end:"#f8f6f3",final:""});
									// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
									$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
									$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
									$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
								}
							}
							else
							{
								// setTimeout(function(){$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');}, 1000);
								$(document.getElementById('price_index_page_main_' + auction_id)).removeClass('flashcash');
								$(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth = $(document.getElementById('price_index_page_main_' + auction_id)).offsetWidth;
								$(document.getElementById('price_index_page_main_' + auction_id)).addClass('flashcash');
							}
						}
						document.getElementById('price_index_page_' + auction_id).innerHTML = auction_price;
						updateBidsaurusFromPrice(auction_price);
						//document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency;
						if(Currency1!="") { document.getElementById('currencysymbol1_' + auction_id).innerHTML = Currency1;  }
						else { document.getElementById('currencysymbol_' + auction_id).innerHTML = Currency; }
						var bidding_username_prefix = auction_bidder_name.substr(0, 1).toUpperCase() ; ;
						if(bidding_username_prefix!="-")
						{
							document.getElementById('product_bidder_' + auction_id).innerHTML = "<span class='bidusericon i"+bidding_username_prefix+"'>"+bidding_username_prefix+"</span>"+auction_bidder_name;
						}else {
							document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
						}
						if(document.getElementById('curbidder'))
						{
							document.getElementById('curbidder').innerHTML = auction_bidder_name;
						}
						//document.getElementById('product_bidder_' + auction_id).innerHTML = auction_bidder_name;
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
		var newaiduse = $(this).attr("id");
		var newaidusersplit = newaiduse.split("image_main_");
		var newaid = "";
		if(newaidusersplit[1]!="")
		{
			newaid = newaidusersplit[1];
		}
        $.ajax({
            url: $(this).attr('name'),
            dataType: 'json',
            success: function(data){
				$.each(data, function(i, item){
				result = item.result.split("|");
				var bids = 0;
				if( typeof item.bids != 'undefined'){
				    bids = item.bids;
				}
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
				else if(result=="alreadyrebateforbuynow")
				{
					//alert(lng_alreadyrebateforbuynow);
					//return false;
					prd_rebat_box_open();
				}
				else if(result=="cannotsetautobidmorethanbuynowprice")
				{
					alert(lng_cannotsetautobidmorethanbuynowprice);
					return false;
				}
				else if(result[0]=="highvalueauclimitreach")
				{
					alert(lng_highvalueauclimitreach);
					return false;
				}
				else if(result[0]=="alreadylockedauctioncannotbid")
				{
					alert(lng_alreadylockedauctioncannotbid);
					if(document.getElementById("image_locked_auc_"+newaid))
					{
						document.getElementById("image_locked_auc_"+newaid).style.display = "inline-block";
						document.getElementById("image_main_"+newaid).style.display = "none";
					}
					return false;
				} else if( result[0] == "alreadysetautobidsametoproductprice" ){

				    alert(lng_alreadysetautobidsametoproductprice);
				    return false;

				}
				else if(result[0]=="success")
				{
					obj = document.getElementById('bids_count');
					objvalue = document.getElementById('bids_count').innerHTML;
					if(obj.innerHTML!='0')
					{
						if(bids > 0){
						    obj.innerHTML = Number(objvalue) - bids;
						} else {
						    obj.innerHTML = Number(objvalue) - 1;
						}


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
								if(newaid!="")
								{
									if( document.getElementById('index_buynow_placebids_price_hid_'+newaid) && document.getElementById('index_buynow_price_savings_hid_'+newaid) && document.getElementById('index_buynow_placebids_price_'+newaid) && document.getElementById('index_buynow_price_savings_'+newaid) )
									{
										var default_single_bid = document.getElementById('global_price_for_default_single_bid').value;

										if( bids > 0 ){
										    default_single_bid = default_single_bid * bids;
										}

										var buynow_placebids_price = document.getElementById('index_buynow_placebids_price_'+newaid);
										var buynow_placebids_price_hid = document.getElementById('index_buynow_placebids_price_hid_'+newaid);

										var buynow_placebids_price_final = Number(buynow_placebids_price_hid.innerHTML)+Number(default_single_bid);

										buynow_placebids_price.innerHTML = number_format(buynow_placebids_price_final,0,'',',');
										buynow_placebids_price_hid.innerHTML = number_format(buynow_placebids_price_final,0,'','');

										var buynow_price_savings = document.getElementById('index_buynow_price_savings_'+newaid);
										var buynow_price_savings_hid = document.getElementById('index_buynow_price_savings_hid_'+newaid);

										var buynow_price_savings_final = Number(buynow_price_savings_hid.innerHTML)-Number(default_single_bid);

										buynow_price_savings.innerHTML = number_format(buynow_price_savings_final,0,'','');
										buynow_price_savings_hid.innerHTML = number_format(buynow_price_savings_final,0,'','');
									}
								}
							}
						}
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
	$(window.opera?'html':'html, body').animate({ scrollTop: jQuery('.content_container').offset().top-36 }, 'slow' );
	//document.getElementById('content_container').scrollIntoView(500);
		}
	}
	xmlhttp.send(null);
}
