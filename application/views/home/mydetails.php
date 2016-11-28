<?php $this->load->view('layout_home/listmenu'); ?>

<div class="myaccount_container_inner">
                <div class="myaccount_heading_leftbg">&nbsp;</div>
                <div class="myaccount_heading_middlebg">รายละเอียดแอคเคาน์</div>
                <div class="myaccount_heading_rightbg">&nbsp;</div>
                <div class="myaccount_container_details">
                    <div class="myaccount_container_box">
                            <form name="f1" method="post" action="">
                            	                                <div class="mydetails_heading_title"><h4>ข้อมูลของคุณ :</h4>
                                    <div class="mydetails_inner_box">
                                        <!-- <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">รหัสลูกค้า :</div>
                                            <div class="mydetails_inner_right">17195</div>
                                        </div> -->
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">Username :</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_username;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <?php $gender = $mem_detail->mem_gender;
                                          switch ($gender) {
                                            case 'Male':
                                              $gender = "ชาย";
                                              break;
                                            case 'Female':
                                              $gender = "หญิง";
                                              break;
                                          }
                                        ?>
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">เพศ :</div>
                                            <div class="mydetails_inner_right"><?php echo $gender;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ชื่อ :</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_fname;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">นามสกุล :</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_lname;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">วันเกิด :</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_birth_day. "-" .$mem_detail->mem_birth_month. "-" .$mem_detail->mem_birth_year;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">อีเมล :</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_email;?></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <!-- <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ประเทศ :</div>
                                            <div class="mydetails_inner_right"></div>
                                        </div> -->
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">โทรศัพท์มือถือ</div>
                                            <div class="mydetails_inner_right"><?php echo $mem_detail->mem_tel;?></div>
                                            <!--<div class="mydetails_inner_right mydetails_last_right"><strong>+</strong>&nbsp;<input type="text" name="mobileno" value="" class="logintextboxclas" style="width: 120px;" /></div>-->
                                        </div>
                                        <div class="mydetails_inner_row">
                                            <!-- <div class="mydetails_inner_left_last mydetails_inner_left mydetails_even">ภาษา</div>
                                            <div class="mydetails_inner_right" style="border-bottom:1px solid #E0E0E0;">
	                                            <select name="language" style="width:120px;">
                                                 <option value="english" >
                                                       ภาษาอังกฤษ
                                                </option>
                                                 <option value="thai"  selected="selected" >
                                                        	ไทย
                                                  </option>
                                                  </select>
                                            </div> -->
                                        </div>
                                        <!--<input type="hidden" name="language" value="thai" />-->
                                        <!--<div class="clear">&nbsp;</div>
                                        <div class="clear">&nbsp;</div>-->
                                        <div class="clear">&nbsp;</div>
                                        <div class="mydetails_inner_row">
                                        	<div class="mydetails_inner_left mydetails_last_submit">&nbsp;</div>
                                            <div> <a href="<?php echo site_url('home/vieweditmydetail');?>" class="btn btn-bid btn-sml">แก้ไข</a></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
