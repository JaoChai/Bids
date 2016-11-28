<?php $this->load->view('layout_home/listmenu'); ?>



<div class="myaccount_container_inner">
                <div class="myaccount_heading_leftbg">&nbsp;</div>
                <div class="myaccount_heading_middlebg">รายละเอียดแอคเคาน์</div>
                <div class="myaccount_heading_rightbg">&nbsp;</div>
                <div class="myaccount_container_details">
                    <div class="myaccount_container_box">
                            <?php echo form_open('home/updateaddress'); ?>
                            	  <div class="mydetails_heading_title"><h4>ข้อมูลของคุณ :</h4>
                                  <?php echo $this->session->flashdata('alert');?>
                                    <div class="mydetails_inner_box">
                                      <input type="hidden" name="id" value="<?php echo $id;?>">
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ที่อยู่ :</div>
                                            <div class="mydetails_inner_right">
                                             <textarea class="form-control" name="address" rows="3"><?php echo $mem_address->mem_address;?></textarea>
                                           </div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">จังหวัด :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="district" value="<?php echo $mem_address->mem_district;?>"></div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left address_odd">รหัสไปรษณีย์ / Zip :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="postcode" value="<?php echo $mem_address->mem_postcode;?>"></div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">โทรศัพท์มือถือ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="phone" value="<?php echo $mem_address->mem_tel;?>"></div>
                                        </div>

                                        <div class="clear">&nbsp;</div>
                                        <div class="mydetails_inner_row">
                                        	<div class="mydetails_inner_left mydetails_last_submit">&nbsp;</div>
                                            <div> <button type="submit" class="btn btn-bid btn-sml">บันทึก</button></div>
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close();?>
                            <div class="clear">&nbsp;</div>
                            <div class="clear">&nbsp;</div>
                            <div class="clear">&nbsp;</div>
                    </div>
                    <div class="myaccount_container_bottom">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
        <div class="clearfix"></div>
