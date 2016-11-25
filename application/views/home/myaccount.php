<?php $this->load->view('layout_home/listmenu'); ?>

<div class="myaccount_container_inner">
          <div class="myaccount_heading_leftbg">&nbsp;</div>
          <div class="myaccount_heading_middlebg">สินค้าที่คุณได้เข้าร่วมประมูล</div>
          <div class="myaccount_heading_rightbg">&nbsp;</div>
          <div class="myaccount_container_details" style="min-height:80px;">
              <div class="myaccount_container_box">
                      <div class="clear">&nbsp;</div>
                        <div class="clear">&nbsp;</div>
                        <div class="darkblue-14" align="center">ไม่พบข้อมูล</div>
                        <div class="clear">&nbsp;</div>
                                      </div>
              <div class="myaccount_container_bottom">&nbsp;</div>
          </div>
          <div class="clear">&nbsp;</div>

            <div class="buybids_row" style="float:right;">
              <div class="myaccount_heading_leftbg">&nbsp;</div>
              <div class="myaccount_heading_middlebg">ซื้อ Bid</div>
            <div class="myaccount_heading_rightbg">&nbsp;</div>
              <div class="pennyauctions_container">
                  <div class="pennyauctions_middlebg">

                  <div class="maininvitecontents invitefriendgetbids" onclick="window.location.href='invite'">
                      <div class="buybidsinvitelogo"></div>
                      <div class="buybidsinvitetext">
                          <div class="buybidsinvitetext_inner"><a onclick="window.location.href='invite'">ชวนเพื่อนมาจอยน์และรับ Bid ฟรี</a></div>
                          <div class="buybidsinvitetextsmall">แชร์ความสนุกกับเพื่อนๆ พ่อแม่พี่น้อง</div>
                      </div>
                      <div class="buybidsinvitegiftbids">
                          <div class="buybidsinvitegiftbids">150&nbsp;Bids</div>
                          <div class="buybidsinvitegiftbids_small">10&nbsp;Bids ต่อเพื่อน</div>
                      </div>
                  </div>


                  <div class="mainbuybidsbuycontents">
                      <div class="buybidsbuylogo"></div>
                      <div class="buybidsinvitetext">
                          <div class="buybidsinvitetext_inner">ซื้อ Bid จะได้ไม่พลาดโอกาสเมื่อมันมาถึง</div>
                          <div class="buybidsinvitetextsmall">เราขอแนะนำให้เพื่อนมี Bid เก็บไว้อย่างต่ำที่ 50 Bid จะได้ไม่พลาดโอกาสเมื่อมีรายการประมูลดีๆโผล่ขึ้นมาครับ</div>
                      </div>
                      <div class="buybidsinvitegiftbids">
                          <div class="buybidslovegiftbids">&nbsp;</div>
                      </div>
                  </div>

                  <div class="clear"></div>

                <form name="f1" id="f1" action="buybids" method="post">
                  <!--<div class="myaccount_title_middlebg" style="width:710px;padding-left:10px;">เลือก Bid Pack แล้วกด Buy &darr;</div>-->
                  <div class="current_selected" style="padding-top:15px;display:none;">You have currently selected:  <span class="selected_bidpack" id="bidpackname"></span></div>

                                                        <div class="bidpack_container_new">
                              <div class="bidpack_rediobtn_new">
                                                                      <input name="bidpack" type="radio" value="9" onclick="javascript: setname1('1');" id="bidpack_id_9" />

                              </div>
                                                                    <label for="bidpack_id_9">
                                  <div class="bidpack_detail_light">
                                      <div class="bidpack_title_new">Value Pack</div>
                                      <div class="bidpack_bids_new">100 Bids</div>
                  <!-- <div class="bidpack_price">฿500</div>-->
                                      <!--<div class="bidpack_price" style="float:right;width:110px;">฿5.00/1 bid</div>-->
                                  </div>
                                  </label>
                                                            </div>
                              <div class="clear"></div>
                      <input type="hidden" value="Value Pack" name="bidpackname1" id="bidpackname1" />

                      <input type="hidden" name="bidpackid" value="9" />
                                                                                      <div class="bidpack_container_new">
                              <div class="bidpack_rediobtn_new">
                                                                      <input name="bidpack" type="radio" value="10" onclick="javascript: setname1('2');" id="bidpack_id_10" />

                              </div>
                                                                    <label for="bidpack_id_10">
                                      <div class="bidpack_detail_dark">
                                          <div class="bidpack_title_new">Best Seller Pack</div>
                                          <div class="bidpack_bids_new">200 Bids</div>
                  <!--<div class="bidpack_price">฿1,000</div>-->
                                          <!--<div class="bidpack_price" style="float:right;width:110px;">฿5.00/1 bid</div>-->
                                      </div>
                                  </label>
                                                            </div>
                              <div class="clear"></div>
                      <input type="hidden" value="Best Seller Pack" name="bidpackname2" id="bidpackname2" />

                      <input type="hidden" name="bidpackid" value="10" />
                                    <div class="bidpack_container_new">
                              <div class="bidpack_rediobtn_new">

                                  <input checked="checked" name="bidpack" type="radio" value="11" onclick="javascript: setname1('4');" id="bidpack_id_11" />

                              </div>
                                                                    <label for="bidpack_id_11">
                                  <div class="bidpack_detail_light">
                                      <div class="bidpack_title_new">Power Pack</div>
                                      <div class="bidpack_bids_new">500 Bids</div>
                  <!-- <div class="bidpack_price">฿2,500</div>-->
                                      <!--<div class="bidpack_price" style="float:right;width:110px;">฿5.00/1 bid</div>-->
                                  </div>
                                  </label>
                                                            </div>
                              <div class="clear"></div>
                      <input type="hidden" value="Power Pack" name="bidpackname4" id="bidpackname4" />

                      <input type="hidden" name="bidpackid" value="11" />
                                                                                                              <div class="bidpack_container_new">
                              <div class="bidpack_rediobtn_new">
                                                                      <input name="bidpack" type="radio" value="12" onclick="javascript: setname1('6');" id="bidpack_id_12" />

                              </div>
                                                                    <label for="bidpack_id_12">
                                      <div class="bidpack_detail_dark">
                                          <div class="bidpack_title_new">Jumbo Pack</div>
                                          <div class="bidpack_bids_new">1000 Bids</div>

                                      </div>
                                  </label>
                              </div>

                  <div class="clear"></div>

                      <input type="hidden" value="Jumbo Pack" name="bidpackname6" id="bidpackname6" />

                      <input type="hidden" name="bidpackid" value="12" />

                   <div class="bidpack_buybids_btn_new clear" style="padding-left:45px;"><input type="image" src="images/thai/buybids_button.png" onmouseover="this.src='images/thai/buybids_button_hover.png'" onmouseout="this.src='images/thai/buybids_button.png'" style="cursor:pointer"  />
                      </div>


                   </form>
                </div>
              </div>
          </div>
      </div>
  </div>
  <div class="clear"></div>
</div>
</div>
</div>
<div class="clearfix"></div>
