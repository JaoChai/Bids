<?php $sql = "SELECT * FROM auction";
$query = $this->db->query($sql);
if($query->num_rows() > 0){
foreach($query->result() as $row): ?>
<div class="main_bidnow_box" id="" >
  <div class="main_bidnow_middle">
     <div class="main_bidnow_area">
         <div class="main_bidnow_product_image_box">
            <div class="main_bidnow_product_image"><a href="#"><img src="<?php echo base_url('uploads/'. $row->auc_pic); ?>"  border="0" alt="You uploads"/></a></div>
         </div>
     </div>
  </div>
</div>
<?php endforeach;
} ?>

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
