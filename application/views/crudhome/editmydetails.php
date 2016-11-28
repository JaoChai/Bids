<?php $this->load->view('layout_home/listmenu'); ?>

<div class="myaccount_container_inner">
                <div class="myaccount_heading_leftbg">&nbsp;</div>
                <div class="myaccount_heading_middlebg">รายละเอียดแอคเคาน์</div>
                <div class="myaccount_heading_rightbg">&nbsp;</div>
                <div class="myaccount_container_details">
                    <div class="myaccount_container_box">
                            <?php echo form_open('home/updatemembers'); ?>
                            	    <div class="mydetails_heading_title"><h4>ข้อมูลของคุณ :</h4>
                                    <?php echo $this->session->flashdata('alert');?>
                                    <div class="mydetails_inner_box">
                                        <!-- <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">รหัสลูกค้า :</div>
                                            <div class="mydetails_inner_right">17195</div>
                                        </div> -->
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <input type="hidden" name="id" value="<?php echo $id;?>">
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">Username :</div>
                                            <div class="mydetails_inner_right"><input type="text" class="form-control" name="username" value="<?php echo $mem_detail->mem_username;?>"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">เพศ :</div>
                                              <div class="mydetails_inner_right">
                                                <select size="1" style="width:100px" name="gender">
                                                  <?php $gender = $mem_detail->mem_gender;
                                                    switch ($gender) {
                                                      case 'Male': ?>
                                                      <option selected="selected" value="Male">ชาย</option>
                                                      <option  value="Female">หญิง</option>
                                                      <?php  break;
                                                      case 'Female': ?>
                                                      <option  value="Male">ชาย</option>
                                                      <option selected="selected" value="Female">หญิง</option>
                                                    <?php    break;
                                                    }
                                                  ?>
                                                </select>
                                              </div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ชื่อ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="fname" value="<?php echo $mem_detail->mem_fname;?>"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">นามสกุล :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="lname" value="<?php echo $mem_detail->mem_lname;?>"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">วันเกิด :</div>
                                              <div class="mydetails_inner_right"><select size="1"  class="row_select_date" name="day" style="width:60px;">
                                                      <?php for($i=1; $i<=31; $i++ ){ ?>
                                                        <?php if($mem_detail->mem_birth_day == $i){ ?>
                                                          <?php if($i < 10){ ?>
                                                            <option selected value="<?php echo "0".$i;?>"><?php echo "0".$i;?></option>
                                                              <?php }?>
                                                              <?php if($i > 10){ ?>
                                                                <option selected value="<?php echo $i;?>"><?php echo $i;?></option>
                                                                  <?php }?>
                                                          <?php }else{?>
                                                        <?php if($i < 10){ ?>
                                                        <option value="<?php echo "0".$i;?>"><?php echo "0".$i;?></option>
                                                        <?php }else{ ?>
                                                        <option  value="<?php echo $i;?>"><?php echo $i;?></option>
                                                        <?php } ?>
                                                        <?php } ?>
                                                      <?php } ?>
                                              </select>

                                              <select size="1" class="row_select_month" name="month" style="width:132px;">
                                                  <?php $month = $mem_detail->mem_birth_month;
                                                    switch ($month) {
                                                      case '01': ?>
                                                      <option selected value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php  break;
                                                      case '02': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option selected value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '03': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option selected value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '04': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option selected value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '05': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option selected value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '06': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option selected value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '07': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option selected value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '08': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option selected value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '09': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option selected value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '10': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option selected value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '11': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option selected value="11">พฤศจิกายน</option>
                                                      <option  value="12">ธันวาคม</option>
                                                      <?php    break;
                                                      case '12': ?>
                                                      <option  value="01">มกราคม</option>
                                                      <option  value="02">กุมพาพันธ์</option>
                                                      <option  value="03">มีนาคม</option>
                                                      <option  value="04">เมษายน</option>
                                                      <option  value="05">พฤษภาคม</option>
                                                      <option  value="06">มิถุนายน</option>
                                                      <option  value="07">กรกฎาคม</option>
                                                      <option  value="08">สิงหาคม</option>
                                                      <option  value="09">กันยายน</option>
                                                      <option  value="10">ตุลาคม</option>
                                                      <option  value="11">พฤศจิกายน</option>
                                                      <option selected value="12">ธันวาคม</option>
                                                      <?php    break;
                                                    }
                                                  ?>

                                              </select>

                                              <!-- Select Year มาให้ด้วย !-->
                                              <select name="year">
                                                <?php for($i=2002; $i>=1912; $i-- ){ ?>
                                                  <?php if($mem_detail->mem_birth_year == $i){ ?>
                                                    <option selected="selected" value="<?php echo $i;?>"><?php echo $i;?></option>
                                                    <?php }else{ ?>
                                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                                    <?php } ?>
                                                  <?php } ?>
                                              </select>
                                              <!-- ปิด ปี !-->

                                            </div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">อีเมล :</div>
                                              <div class="mydetails_inner_right"> <input type="email" class="form-control" name="email" value="<?php echo $mem_detail->mem_email;?>"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <!-- <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ประเทศ :</div>
                                            <div class="mydetails_inner_right"> <input type="text" class="form-control" id="Username"></div>
                                        </div> -->
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">โทรศัพท์มือถือ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" name="phone" value="<?php echo $mem_detail->mem_tel;?>"></div>
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
                                            <div> <button type="submit" class="btn btn-bid btn-sml">บันทึก</button></div>
                                        </div>

                                    </div>
                                </div>
                            <?php echo form_close(); ?>
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
