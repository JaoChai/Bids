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
                                            <div class="mydetails_inner_right"><input type="text" class="form-control" id="username"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">เพศ :</div>
                                              <div class="mydetails_inner_right">
                                                <select size="1" style="width:100px" name="gender">
                                                    <option selected="selected" value="Male">ชาย</option>
                                                    <option  value="Female">หญิง</option>
                                                </select>
                                              </div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ชื่อ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="name"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">นามสกุล :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="lastname"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">วันเกิด :</div>
                                              <div class="mydetails_inner_right"><select size="1"  class="row_select_date" name="day" style="width:60px;">
                                                  <option value=" ">DD</option>
                                                          <option  value="01">01</option>
                                                          <option  value="02">02</option>
                                                          <option  value="03">03</option>
                                                          <option  value="04">04</option>
                                                          <option  value="05">05</option>
                                                          <option  value="06">06</option>
                                                          <option  value="07">07</option>
                                                          <option  value="08">08</option>
                                                          <option  value="09">09</option>
                                                          <option  value="10">10</option>
                                                          <option  value="11">11</option>
                                                          <option  value="12">12</option>
                                                          <option  value="13">13</option>
                                                          <option  value="14">14</option>
                                                          <option  value="15">15</option>
                                                          <option  value="16">16</option>
                                                          <option  value="17">17</option>
                                                          <option  value="18">18</option>
                                                          <option  value="19">19</option>
                                                          <option  value="20">20</option>
                                                          <option  value="21">21</option>
                                                          <option  value="22">22</option>
                                                          <option  value="23">23</option>
                                                          <option  value="24">24</option>
                                                          <option  value="25">25</option>
                                                          <option  value="26">26</option>
                                                          <option  value="27">27</option>
                                                          <option  value="28">28</option>
                                                          <option  value="29">29</option>
                                                          <option  value="30">30</option>
                                                          <option  value="31">31</option>
                                              </select>

                                              <select size="1" class="row_select_month" name="month" style="width:132px;">
                                                  <option value=" ">MM</option>
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
                                                  <option  value="12">ธันวาคม</option>
                                              </select>

                                              <!-- Select Year มาให้ด้วย !-->
                                              <select name="year">
                                                <option value="">Year</option>

                                              </select>
                                              <!-- ปิด ปี !-->

                                            </div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">อีเมล :</div>
                                              <div class="mydetails_inner_right"> <input type="email" class="form-control" id="email"></div>
                                        </div>
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <!-- <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ประเทศ :</div>
                                            <div class="mydetails_inner_right"> <input type="text" class="form-control" id="Username"></div>
                                        </div> -->
                                        <!--<div class="clear">&nbsp;</div>-->
                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_odd">โทรศัพท์มือถือ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="phone"></div>
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
                                            <div> <a href="#" class="btn btn-bid btn-sml">บันทึก</a></div>
                                        </div>
                                        <input type="hidden" value="submit" name="submit" />
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
