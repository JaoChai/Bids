<?php $sql = "SELECT * FROM auction";
$query = $this->db->query($sql);
$num = 1;
if($query->num_rows() > 0){
foreach($query->result() as $row): ?>
<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src="<?php echo base_url('uploads/'. $row->auc_pic); ?>"  border="0" alt="You uploads"/></a></div>
         </div>
         <center><p><?php echo $row->auc_item_title;?></p></center>
         <center><p><?php echo $row->auc_start;?></p></center>
         <center><h4><p><div id="item<?php echo $num;?>"></div></p></h4></center>

         <center><button type="button" id="btn_bid<?php echo $num++;?>" class="btn btn-primary">Bid </button></center>
     </div>
  </div>
</div>

<script type="text/javascript">
var num = 1;
$(function(){
  var shortly = new Date('<?php echo $row->auc_end_date;?>');

    var opt={
    labels: ['Years', 'Months', 'Weeks', 'Days ', ':', ':', ''],
    labels1: ['Years', 'Months', 'Weeks', 'Days ', ':', ':', ''],
    whichLabels: null,
    padZeroes: true,
    timeSeparator: ':',
    format: 'DHMS',
}

$("#item"+num).countdown($.extend(opt,{
   until: shortly,
}));

$('#btn_bid'+num).click(function(){

   var periods = $('#item'+num).countdown('getTimes');
   alert(periods);


});
num++;
  });

</script>

<?php endforeach;
} ?>
<!-- <script type="text/javascript">
var num = 1;
  $(document).ready(function(){


    num++;
  });
</script> -->
<!-- <div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div>

<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src=""  border="0" alt="" /></a></div>
         </div>
     </div>
  </div>
</div> -->
