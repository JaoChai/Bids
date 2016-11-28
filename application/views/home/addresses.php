<?php $this->load->view('layout_home/listmenu'); ?>

<div class="myaccount_container_inner">
               <div class="myaccount_heading_leftbg">&nbsp;</div>
               <div class="myaccount_heading_middlebg">ที่อยู่ของฉัน</div>
               <div class="myaccount_heading_rightbg">&nbsp;</div>
               <div class="myaccount_container_details">
                   <div class="myaccount_container_box">
                       <div class="addresses_container_box">

                               <!--                                <div><a class="darkblue-12-link" href="javascript: HideDisplay()"></a></div>
                               -->
                              <!-- <div class="mydetails_successmsg"><b>เปลี่ยนที่อยู่สำเร็จแล้ว</b></div> -->

                               <div class="addresses_line" style="clear:both">&nbsp;</div>
                                    <div id="billing_address">
                                   <div class="addresses_inner_box_billing">
                                       <div class="addresses_inner_row">
                                           <div class="addresses_inner_left address_inner_none" style="width:275px; text-align:left;">ที่อยู่ในการจัดส่ง</div>
                                           <div class="addresses_inner_right address_inner_none">&nbsp;</div>
                                       </div>
                                           <div class="clear">&nbsp;</div>
                                           <div class="addresses_inner_row">
                                               <div class="addresses_inner_left_billing address_even">ที่อยู่: </div>
                                               <div class="addresses_inner_right_billing"><?php echo $mem_address->mem_address;?></div>
                                           </div>
                                           <div class="clear"></div>

                                           <div class="clear"></div>
                                           <div class="addresses_inner_row">
                                               <div class="addresses_inner_left_billing address_even">จังหวัด : </div>
                                               <div class="addresses_inner_right_billing"> <?php echo $mem_address->mem_district;?></div>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="addresses_inner_row">
                                               <div class="addresses_inner_left_billing address_odd">รหัสไปรษณีย์ / Zip : </div>
                                               <div class="addresses_inner_right_billing"><?php echo $mem_address->mem_postcode;?></div>
                                           </div>
                                           <div class="clear"></div>
                                           <div class="addresses_inner_row">
                                               <div class="addresses_inner_left_billing address_even address_inner_last">โทรศัพท์มือถือ : </div>
                                               <div class="addresses_inner_right_billing address_inner_last"><?php echo $mem_address->mem_tel;?></div>
                                           </div>

                                           <div class="clear">&nbsp;</div>
                                           <div class="mydetails_inner_row">
                                           	<div class="mydetails_inner_left mydetails_last_submit">&nbsp;</div>
                                               <div> <a href="<?php echo site_url('home/vieweditaddresses');?>" class="btn btn-bid btn-sml">แก้ไข</a></div>
                                           </div>
                                         </div>


                               </div>
                        </div>
                   </div>
                   <div class="myaccount_container_bottom">&nbsp;</div>

               </div>
           </div>
       </div>
     </div>
  </div>
</div>
<div class="clearfix"></div>
