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

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">ที่อยู่ :</div>
                                            <div class="mydetails_inner_right">
                                             <textarea class="form-control" id="add1" rows="3"></textarea>
                                           </div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">จังหวัด :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="aum"></div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left address_odd">รหัสไปรษณีย์ / Zip :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="zip"></div>
                                        </div>

                                        <div class="mydetails_inner_row">
                                            <div class="mydetails_inner_left mydetails_even">โทรศัพท์มือถือ :</div>
                                              <div class="mydetails_inner_right"> <input type="text" class="form-control" id="phone"></div>
                                        </div>

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
