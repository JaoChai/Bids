<?php
$session_data = $this->session->userdata('logged_in');
//$mem_id = $session_data['id'];
$mem_id = $session_data['id'];
$username = $session_data['username'];
?>
<div class="block">
	<div class="container">
		<ul class="breadcrumbs">

		</ul>
	</div>
</div>

<div itemscope itemtype="http://schema.org/Product">
	<meta itemprop="url" content="https://seikostore-default.myshopify.com/products/contrast-dress-shirt">
	<meta itemprop="image" content="//cdn.shopify.com/s/files/1/1323/8471/products/89_grande.jpg?v=1471115180">


	<div class="block product-block">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-4">
					<!-- Product Gallery -->
					<div class="main-image">
						<img src="<?php echo base_url('uploads/'. $item->auc_newpic); ?>">
					</div>



					<!-- <img alt="" src="//cdn.shopify.com/s/files/1/1323/8471/products/89_1024x1024.jpg?v=1471115180" style="display: none" />


					<img alt="" src="//cdn.shopify.com/s/files/1/1323/8471/products/87_82f2e3cf-e13f-40ab-9d3a-30560788f858_1024x1024.jpg?v=1471115180" style="display: none" />


					<img alt="" src="//cdn.shopify.com/s/files/1/1323/8471/products/88_1024x1024.jpg?v=1471115180" style="display: none" />

					<div class="product-previews-wrapper">
					<div class="product-previews-carousel" id="previewsGallery">

					<a href="#" data-image="//cdn.shopify.com/s/files/1/1323/8471/products/89_1024x1024.jpg?v=1471115180" data-zoom-image="//cdn.shopify.com/s/files/1/1323/8471/products/89_1024x1024.jpg?v=1471115180"><img src="//cdn.shopify.com/s/files/1/1323/8471/products/89_medium.jpg?v=1471115180" alt="" /></a>

					<a href="#" data-image="//cdn.shopify.com/s/files/1/1323/8471/products/87_82f2e3cf-e13f-40ab-9d3a-30560788f858_1024x1024.jpg?v=1471115180" data-zoom-image="//cdn.shopify.com/s/files/1/1323/8471/products/87_82f2e3cf-e13f-40ab-9d3a-30560788f858_1024x1024.jpg?v=1471115180"><img src="//cdn.shopify.com/s/files/1/1323/8471/products/87_82f2e3cf-e13f-40ab-9d3a-30560788f858_medium.jpg?v=1471115180" alt="" /></a>

					<a href="#" data-image="//cdn.shopify.com/s/files/1/1323/8471/products/88_1024x1024.jpg?v=1471115180" data-zoom-image="//cdn.shopify.com/s/files/1/1323/8471/products/88_1024x1024.jpg?v=1471115180"><img src="//cdn.shopify.com/s/files/1/1323/8471/products/88_medium.jpg?v=1471115180" alt="" /></a>

				</div>
			</div>  -->

			<!-- /Product Gallery -->
		</div>
		<div class="col-sm-6 col-md-8 col-lg-5">
			<div itemprop="offers" itemscope itemtype="#">

				<meta itemprop="priceCurrency" content="USD">
				<link itemprop="availability" href="#">
				<div class="product-info-block classic">
					<div class="product-info-top">

						<!-- <div class="product-sku">SKU: <span>#0031</span></div> -->




					</div>

					<div class="product-name-wrapper" style="text-align:center;">
						<h1 itemprop="name" class="product-name"><?php echo $item->auc_item_title;?></h1>
						<div class="product-labels">
							<!--<span class="product-label sale">Sale</span>!-->
						</div>
					</div>


					<div class="product-availability">
					</div>



					<div class="countdown-circle">
						<div class="countdown-wrapper">
							<div class="countdown" data-countdown="<?php echo $item->auc_end_date;?>"></div>
							<!-- <div class="countdown-text">

							<div class="text1">Discount 23% OFF</div>
							<div class="text2">Have time to buy!</div>
						</div> -->
					</div>
				</div>


				<form action="#" method="post" enctype="multipart/form-data">
					<div class="product-options swatches ">
						<!-- Time !-->
						<script>
						var product_options = [];
						</script>
						<br/>
						<div class="price" >
							<span class="special-price"> <span class="money<?php echo $item->auc_id;?>">฿ <?php echo $item->auc_start;?></span></span>
						</div>

						<div class="mem" >
							<!-- <span class="special-price"> <span class=money>ผู้ชนะ</span></span> -->
							<span id="ended" style="display: none;"><p style="color:#FF1010; font-size:36px;"><b>Winner</b></p></span>
							<span class="special-member"> <span class="member<?php echo $item->auc_id;?>"><?php echo $item->auc_user;?></span></span>

							<br/> <br/>

							<span class="special-price">
								<?php if($this->session->userdata('logged_in')){?>
									<div>
										<button type="button" class="btn btn-lg" id="btn_bid<?php echo $item->auc_id;?>" style="width:200px;"></i>
											<span>BID</span></button>
										</div>
										<?php }else{ ?>
											<button type="button" class="btn btn-lg" style="width:200px;" onmouseover="$(this).find('span').text('Login')" onmouseout="$(this).find('span').text('Bid')" onclick="window.location.href='<?php echo site_url('home/viewlogin');?>'">
												<span>Bid</span>
											</button>
											<?php }?>
										</span>
									</div>
								</div>

								<!-- <div class="product-actions">
								<div class="row">
								<div class="col-md-6">
								<div class="product-meta">
								<span>
								<a href="#" title="Add to Wishlist" class="no_wishlist"> <i class="icon icon-heart"></i><span>Add to Wishlist</span> </a>
							</span>
						</div>
					</div>


					<div class="col-md-6">
					<div class="price" itemprop="price" content="77">
					<span class="old-price"><span class=money>$100.00</span></span>
					<span class="special-price"> <span class=money>$77.00</span></span>
				</div>

				<div class="actions">
				<button type="submit" class="btn"></i><span>BID</span></button>
			</div>

		</div>
	</div>
</div> -->

</form>
</div>
</div>
</div>
<br/>
<div class="col-md-12 col-lg-3 hidden-quickview">
	<center><h2 itemprop="name" class="product-name">BidCups สินค้าราคาถูก</h2></center>
	<?php if($this->session->userdata('logged_in')){ ?>
		<center><h2>Layout Banner</h2></center>
		<?php }else{ ?>
			<div><a class="btn btn-lg" style="width:300px;" href="<?php echo site_url('home/regis');?>"><i class="icon icon-user"></i><span>Create account</span></a></div>
			<?php } ?>
		</div>

		<div class="col-md-12 col-lg-3 hidden-quickview">
			<center><h2 itemprop="name" class="product-name">History Auction</h2></center>
			<div id="bid_history"></div>

		</div>

	</div>
</div>
</div>

<script>
$(document).ready(function() {
	setInterval(function(){
		$("#bid_history").load('<?php echo site_url('product/bid_history');?>', {auc_id: '<?php echo $item->auc_id;?>'} );

		$.getJSON('<?php echo site_url('product/bid_update');?>', {auc_id: '<?php echo $item->auc_id;?>'},function(result){
			$('.countdown').countdown(result.end_date)
			.on('update.countdown', function(event){
				if(event.offset.totalSeconds <= 10){
					$(this).addClass('highlight');
					$('#btn_bid'+'<?php echo $item->auc_id;?>').attr('id', 'btn_time'+'<?php echo $item->auc_id;?>');
				}else{
					$('#btn_time'+'<?php echo $item->auc_id;?>').attr('id', 'btn_bid'+'<?php echo $item->auc_id;?>');
					$(this).removeClass('highlight');
				}
				$(this).html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
			});

			$(".money"+'<?php echo $item->auc_id;?>').text('฿ '+result.price);
			$(".member"+'<?php echo $item->auc_id;?>').text(result.user);
		});
	},1000);

	// Countdown
	//$('.countdown').each(function() {
	var countdown = $('.countdown');
	var finalDate = $('.countdown').data('countdown');
	countdown.countdown(finalDate)
	.on('update.countdown', function(event){
		countdown.html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
	})
	.on('finish.countdown', function(event){
		$("#ended").show(0);
		$('.countdown').remove();
		$('#btn_time'+'<?php echo $item->auc_id;?>').remove();
		setTimeout(function(){
			window.location = "<?php echo base_url();?>";
		}, 20000);
	});
	//});
	$(document).on('click', '#btn_bid'+'<?php echo $item->auc_id;?>', function(){
		$.ajax({
			type: 'POST',
			url:  '<?php echo site_url('product/bid_process');?>',
			data:{
				auc_id: '<?php echo $item->auc_id; ?>',
				mem_id: '<?php echo $mem_id;?>',
				user: '<?php echo $username;?>'
			},
			dataType: 'json',
			success: function(data){
				if(data.error === 1){
					alert('You are already the highest bidder');
				}else if(data.error === 2){
					alert('You out of Bid');
				}else{


				}
			}
		});
	});

	$(document).on('click', '#btn_time'+'<?php echo $item->auc_id;?>', function(){
		$.ajax({
			type: 'POST',
			url:  '<?php echo site_url('product/update_time');?>',
			data:{
				auc_id: '<?php echo $item->auc_id; ?>',
				mem_id: '<?php echo $mem_id;?>',
				user: '<?php echo $username;?>'
			},
			dataType: 'json',
			success: function(data){
				if(data.error === 1){
					alert('You are already the highest bidder');
				}else if(data.error === 2){
					alert('You out of Bid');
				}else{


				}
			}
		});
	});
});
</script>


<div class="block">
	<div class="tabaccordion">
		<div class="container">
			<!-- Nav tabs -->
			<ul class="nav-tabs product-tab" role="tablist">




				<li class="active"><a href="#Tabproduct_tab_title_1" role="tab" data-toggle="tab">Description</a></li>




				<!-- <li ><a href="#Tabproduct_tab_title_2" role="tab" data-toggle="tab">Sizing Guide</a></li>




				<li ><a href="#Tabproduct_tab_title_3" role="tab" data-toggle="tab">Custom Tab</a></li>




				<li ><a href="#Tabproduct_tab_title_4" role="tab" data-toggle="tab">Assigned tags</a></li>




				<li ><a href="#Tabproduct_tab_title_5" role="tab" data-toggle="tab">Reviews</a></li> -->



			</ul>
			<!-- Tab panes -->

			<div class="tab-content">

				<div role="tabpanel" class="tab-pane active" id="Tabproduct_tab_title_1">

					<!--description-->

					<p><?php echo $item->auc_item_des;?></p>


				</div>


			</main>
