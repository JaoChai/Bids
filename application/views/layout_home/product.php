<?php
$sql = "SELECT * FROM auction WHERE auc_status = 0";
$query = $this->db->query($sql);
$num = 1;
$session_data = $this->session->userdata('logged_in');
//$mem_id = $session_data['id'];
$mem_id = $session_data['id'];
$username = $session_data['username'];
?>

<div class="block">
  <div class="container">
    <!-- <ul class="filters filters-product style2">
    <li><a href="#" class="filter-label">All<span class="count"></span></a></li>
    <li><a href="#" class="filter-label active" data-filter=".tag-filter-new">new<span class="count"></span></a></li>
    <li><a href="#" class="filter-label " data-filter=".tag-filter-sale">sale<span class="count"></span></a></li>
  </ul> -->

  <div class="products-grid-wrapper isotope-wrapper">
    <div class="products-grid four-in-row product-variant-5 isotope">
      <?php foreach($query->result() as $row): ?>
        <div class="product-item large" id="product-item<?php echo $row->auc_id;?>">
          <div class="product-item-inside">
            <div class="product-item-info">
              <div class="product-item-photo">
                <!-- <div class="product-item-label label-sale">
                <span>NEW</span>
              </div> -->
              <div class="carousel-inside">
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <a href="<?php echo site_url('home/viewproduct/'. $row->auc_id);?>">
                      <img class="product-image-photo" src="<?php echo base_url('uploads/'. $row->auc_newpic); ?>">
                    </a>
                  </div>
                </div>
              </div>

              <div class="countdown-box">
                <div class="countdown-wrapper">
                  <div class="countdown-title" id="spe<?php echo $num;?>">special auction</div>
                  <div class="countdown" id="countdown<?php echo $num;?>" data-countdown="<?php echo $row->auc_end_date;?>"></div>
                </div>
              </div>
            </div>

            <div class="product-item-details">
              <div class="product-item-name">
                <a title="Backless mini dress" href="<?php echo site_url('home/viewproduct/'. $row->auc_id);?>" class="product-item-link">
                  <?php echo $row->auc_item_title;?></a>
                </div>

                <div class="price-box">
                  <span class="price-container">
                    <span class="price-wrapper ">

                      <span class=""><span class=money>สินค้าราคา <?php echo $row->auc_price;?></span></span>

                      <p>
                        <span class="special-price"><span id="money<?php echo $num;?>">฿ <?php echo $row->auc_start;?></span></span>
                      </p>
                      <span id="ended<?php echo $num;?>" style="display: none;"><p style="color:#FF1010; font-size:36px;"><b>Winner</b></p></span>
                      <p>

                        <span class="members"><span id="member<?php echo $num;?>" style="font-size:20px;"><?php echo $row->auc_user;?></span></span>

                      </p>

                      <p>
                        <?php if($this->session->userdata('logged_in')){?>
                          <button type="button" class="btn" id="btn_bid<?php echo $num;?>">
                            <span>BID</span>
                          </button>
                          <?php }else{ ?>
                            <button type="button" class="btn btn-bid btn-sml" onmouseover="$(this).find('span').text('Login')" onmouseout="$(this).find('span').text('Bid')" onclick="window.location.href='<?php echo site_url('home/viewlogin');?>'">
                              <span>Bid</span>
                            </button>
                            <?php }?>
                          </p>

                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <script>
            setInterval(function(){

              $.getJSON('<?php echo site_url('product/bid_update');?>', {auc_id: '<?php echo $row->auc_id; ?>'},function(result){
                $('#countdown'+'<?php echo $num;?>').countdown(result.end_date)
                .on('update.countdown', function(event){
                  if(event.offset.totalSeconds <= 10){
                    //$(this).addClass('highlight');
                    $('#btn_bid'+'<?php echo $num;?>').attr('id', 'btn_time'+'<?php echo $num;?>');
                  }else{
                    $('#btn_time'+'<?php echo $num;?>').attr('id', 'btn_bid'+'<?php echo $num;?>');
                    //$(this).removeClass('highlight');
                  }
                  $(this).html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
                });
                //$('#countdown'+'<?php echo $num;?>').data('countdown');
                $("#money"+'<?php echo $num;?>').text('฿ '+result.price);
                $("#member"+'<?php echo $num;?>').text(result.user);
              });
            }, 1000);


            $(document).ready(function() {
              // Countdown
              //$('.countdown').each(function() {
              var countdown = $('#countdown'+'<?php echo $num;?>');
              var finalDate = $('#countdown'+'<?php echo $num;?>').data('countdown');
              countdown.countdown(finalDate)
              .on('update.countdown', function(event){
                countdown.html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
              })
              .on('finish.countdown',function(event){
                $("#ended"+'<?php echo $num;?>').show(0);
                $('#spe'+'<?php echo $num;?>').remove();
                $('#countdown'+'<?php echo $num;?>').remove();
                $('#btn_time'+'<?php echo $num;?>').remove();
                //$('#product-item'+'<?php echo $row->auc_id;?>').hide(0);
                $.ajax({
                  type: 'POST',
                  url:  '<?php echo site_url('product/bid_winner');?>',
                  data:{
                    auc_id: '<?php echo $row->auc_id; ?>',
                    mem_id: '<?php echo $mem_id;?>',
                  },
                  dataType: 'json',
                  success: function(data){
                    if(data.success === "success"){
                      setTimeout(function(){
                        location.reload();
                      }, 20000);
                    }
                  }
                });
              });
              //});

              $(document).on('click', '#btn_bid'+'<?php echo $num;?>', function(){

                // $('.countdown').each(function() {
                //   var countdown = $(this);
                //   var finalDate = $(this).data('countdown');
                //   countdown.countdown(finalDate)
                //      .on('update.countdown', function(event) {
                //        if(event.offset.totalSeconds < 10){
                //          //alert('hello');
                //          $.ajax({
                //            type: 'POST',
                //            url: '<?php echo site_url('product/update_time');?>',
                //            data: {
                //              auc_id: '<?php echo $row->auc_id; ?>',
                //              mem_id: '<?php echo $mem_id;?>',
                //              user: '<?php echo $username;?>'
                //            },
                //            dataType: 'json',
                //            success: function(data){
                //              if(data.error === 1){
                //                 alert('You are already the highest bidder');
                //              }else if(data.error === 2){
                //                alert('You out of Bid');
                //              }else{
                //               //  var end_date = data.end_date;
                //               //  $('#countdown'+'<?php echo $num;?>').countdown(end_date)
                //               //  .on('update.countdown', function(event){
                //               //    $(this).html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
                //               //  });
                //               }
                //            }
                //          });
                //        }
                //     //countdown.html(event.strftime('<span><span>%D</span>DAYS</span>' + '<span><span>%H</span>HRS</span>' + '<span><span>%M</span>MIN</span>' + '<span><span>%S</span>SEC</span>'));
                //   });
                // });
                $.ajax({
                  type: 'POST',
                  url:  '<?php echo site_url('product/bid_process');?>',
                  data:{
                    auc_id: '<?php echo $row->auc_id; ?>',
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
                      //alert('hello');
                      //$('#btn_time'+'<?php echo $num;?>').attr('id', 'btn_bid'+'<?php echo $num;?>');

                    }


                  }
                });
              });

              $(document).on('click', '#btn_time'+'<?php echo $num;?>', function(){

                $.ajax({
                  type: 'POST',
                  url:  '<?php echo site_url('product/update_time');?>',
                  data:{
                    auc_id: '<?php echo $row->auc_id; ?>',
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
                      //$('#btn_time'+'<?php echo $num;?>').attr('id', 'btn_bid'+'<?php echo $num;?>');

                    }
                  }
                });
              });

            });
            '<?php $num++;?>'
            </script>
          <?php endforeach;?>

          <!-- End Product !-->

        </div>
      </div>

    </div>
  </div>
