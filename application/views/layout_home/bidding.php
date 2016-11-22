<?php $sql = "SELECT * FROM auction LEFT JOIN members ON auction.mem_id = members.mem_id";
$query = $this->db->query($sql);
// $sql_his = "SELECT * FROM history INNER JOIN members ON history.mem_id = members.mem_id";
// $query_his = $this->db->query($sql_his);
// $data = $query_his->last_row();
$num = 1;
$session_data = $this->session->userdata('logged_in');
$mem_id = $session_data['id'];
$username = $session_data['username'];
if($query->num_rows() > 0){
foreach($query->result() as $row): ?>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src="<?php echo base_url('uploads/'. $row->auc_pic); ?>"  border="0" alt="You uploads"/></a></div>
         </div>

          <div class="main_bidnow_title"><a href="#"><?php echo $row->auc_item_title;?></a></div>

          <div class="timeleft_title">สินค้าราคา <span class="marketprice_linethrough"><span><?php echo $row->auc_price;?></span></span></div>

          <div class="main_bidnow_price_inner" align="center">
            <div id="clockdiv<?php echo $num;?>">
              <div>
                <span class="days"></span>D
                <span class="hours"></span>:<span class="minutes"></span>:<span class="seconds"></span>
                <div id="demo<?php echo $num;?>"></div>
              </div>
            </div>
          </div>

          <div class="main_bidnow_bidder"><span id="product_bidder_4483">฿ <?php echo $row->auc_start;?></span></div>
          <?php if($row->mem_id == 0 ){ ?>
          <div class="main_bidnow_bidder"><span id="product_bidder_4483">Hello</span></div>
          <?php }else{ ?>
          <div class="main_bidnow_bidder"><span id="product_bidder_4483"><?php echo $row->mem_username;?></span></div>
          <?php } ?>
         <input type="hidden" name="id" id="id<?php echo $num;?>" value="<?php echo $row->auc_id;?>">
         <input type="hidden" name="bid_inc" id="bid_inc<?php echo $num;?>" value="<?php echo $row->auc_bids_inc;?>">

          <div class="main_bidnow_button">
            <?php if($this->session->userdata('logged_in')){?>
              <?php if($mem_id != $row->mem_id){ ?>
            <button type="button" id="btn_bid<?php echo $num;?>" class="btn btn-bid btn-sml">
              <span>Bid </span>
            </button>
            <?php }else{ ?>
              <button type="button" class="btn btn-bid btn-sml">
                <span>Bid </span>
              </button>
              <?php } ?>
            <?php }else{ ?>
              <button type="button" class="btn btn-bid btn-sml" onmouseover="$(this).find('span').text('Login')" onmouseout="$(this).find('span').text('Bid')" onclick="window.location.href='<?php echo site_url('home/regis');?>'">
                <span>Bid </span>
              </button>
              <?php }?>
           </div>

           <div class="main_buynow_area">
             <div class="auction_disount_belt_main">หรือซื้อได้ทันที</div>

             <div class="auction-boxes-row" style="padding-top: 20px">
                  <span class="btn btn-buy btn-sml" onclick="window.location.href='login.php'">Buy Now</span>
              </div>

           </div>

     </div>
  </div>
</div>
<?php $num++;?>
<script type="text/javascript">
var num = 1;

$(function(){

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);

  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    var status = 'null';
    var deadline = new Date('<?php echo $row->auc_end_date;?>');
    var id = '<?php echo $row->auc_id;?>';
    var start = '<?php echo $row->auc_start;?>';
    var bid_inc = '<?php echo $row->auc_bids_inc;?>';
    var mem_id = '<?php echo $mem_id;?>';
    if(t.total < 10000){
      $('#btn_bid'+num).click({id : id, date : deadline, start : start, bid_inc : bid_inc, status : 'notnull', mem_id : mem_id},cool_function);
    }else{
      $('#btn_bid'+num).click({id : id, date : deadline, start : start, bid_inc : bid_inc, status : status, mem_id : mem_id},cool_function);
    }

    if (t.total <= 0) {
      clearInterval(timeinterval);
      document.getElementById("demo"+num).innerHTML = "WINNER !!!";
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date('<?php echo $row->auc_end_date;?>');

initializeClock('clockdiv'+num, deadline);

//$(function(){
function cool_function(event){

if(event.data.status == 'null'){
  var date = event.data.date;

  var days = date.getDate();
  var year = date.getFullYear();
  var month = (date.getMonth()+1);
  var h = date.getHours();
  var m = date.getMinutes();
  var s = date.getSeconds();
  if(days < 10){
    days = "0" +days;
  }
  if(month < 10){
    month = "0" +month;
  }
  if(h < 10){
    h = "0" +h;
  }
  if(m < 10){
    m = "0" +m;
  }
  if(s < 10){
    s = "0" +s;
  }
  var result = ''+year+'-'+month+'-'+days+' '+h+':'+m+':'+s
  $.ajax({
    url: "<?php echo site_url('home/updatebid');?>",
    type: "POST",
    data: {"id" : event.data.id, "date" : result, "start" : event.data.start, "bid_inc" : event.data.bid_inc, "mem_id" : event.data.mem_id},
    success: function(data) {
        location.reload();
    }
});
}else{
    var date = event.data.date;
    //var res = test = 10;
    //updateClock();
    //var timeinterval = setInterval(updateClock, 1000);
    //var t = getTimeRemaining(test);
    //test += 10000;
    //alert(test);
    date.setSeconds(date.getSeconds() + 10.5);
    var days = date.getDate();
    var year = date.getFullYear();
    var month = (date.getMonth()+1);
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();
    if(days < 10){
      days = "0" +days;
    }
    if(month < 10){
      month = "0" +month;
    }
    if(h < 10){
      h = "0" +h;
    }
    if(m < 10){
      m = "0" +m;
    }
    if(s < 10){
      s = "0" +s;
    }
    var result = ''+year+'-'+month+'-'+days+' '+h+':'+m+':'+s

    //alert(result);
    $.ajax({
      url: "<?php echo site_url('home/updatebid');?>",
      type: "POST",
      data: {"id" : event.data.id, "date" : result, "start" : event.data.start, "bid_inc" : event.data.bid_inc, "mem_id" : event.data.mem_id},
      success: function(data) {
          location.reload();
      }
  });
}


//location.reload();
}
num++;
});
</script>

<?php endforeach;
} ?>
<script>

// function cool_function(event){
//   var date = event.data.date;
//
//       var days = date.getDate();
//       var year = date.getFullYear();
//       var month = (date.getMonth()+1);
//       var h = date.getHours();
//       var m = date.getMinutes();
//       var s = date.getSeconds();
//       if(days < 10){
//         days = "0" +days;
//       }
//       if(month < 10){
//         month = "0" +month;
//       }
//       if(h < 10){
//         h = "0" +h;
//       }
//       if(m < 10){
//         m = "0" +m;
//       }
//       if(s < 10){
//         s = "0" +s;
//       }
//       var result = ''+year+'-'+month+'-'+days+' '+h+':'+m+':'+s
//       alert(result);
//       //date = new Date();
//       //if(s < 10){
//         date.setSeconds(date.getSeconds() + 10);
//     $.ajax({
//       url: "<?php echo site_url('home/updatebid');?>",
//       type: "POST",
//       data: {"id" : event.data.id, "date" : result},
//       success: function(data) {
//           //alert('Success');
//       }
//   });
//     //}
// }


</script>
