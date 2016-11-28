<div class="content_container">
 <div class="bidnow_row">
   <div class="content_middlebg" >

    	<div class="myaccount_container">
		      <div class="register_container" style="padding: 0 5%;">
        	<div class="allauctions_heading_row" id="register_banner" style="width:970px;">
          <div class="myaccount_heading_leftbg">&nbsp;</div>
          <div class="static_pg_heading_middlebg">สมัครเลย!</div>
          <div class="myaccount_heading_rightbg">&nbsp;</div>
          </div>
          <div class="static_pg_allauctions_contentbg">
          <div id="static_rightbanner" style="position: absolute;right: -125px;"></div>

				<div class="static_bodytopmid">

        <div id="registration_input_form" style="display:block;">
               <div class="registration_header">
       <p align="left" class="registration_note">โปรดกรอกรายละเอียดดังต่อไปนี้</p>

                <!-- <div class="registration_social">

                	 สมัครเพื่อล็อคอินผ่าน
										  <a onclick="OnLogin2();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
										  หรือ
										  <a onclick="gp_login();" class="btn btn-gg"><i class="fa fa-google"></i> Google</a>

										  <a href="#" class="btn btn-tw pull-right"><i class="fa fa-twitter"></i> Twitter</a>
									</div>!-->
                </div>

              <?php echo form_open('home/register');?>
                            <div class="registration">
                                <div class="register-form"><h4>ข้อมูลส่่วนตัว</h4></div>
                                <?php echo $this->session->flashdata('alert');?>
								<div class="register-form">
                                    <div>
                                        <div><strong>กรอก ชื่อ-นามสกุล ตามบัตรประชาชน เพื่อใช้ยืนยันเมื่อชนะประมูล </strong></div>
                                    </div>
                               </div>
								<div class="register-form">
                                    <div class="box">
                                        <div class="oldrow"><input placeholder="ชื่อ" type="text" id="firstnametb" class="input" name="fname" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                    </div>
                                    <div class="box">
                                        <div class="oldrow"><input type="text" placeholder="นามสกุล" class="input" name="lname" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                    </div>
                               </div>
                               <div class="register-form">
                                  <div class="box" style="width: 310px;">
                                    <div class="oldrow"><strong>วันเกิด</strong></div>
                                    <div class="oldrow" style="width: 310px;">
                                    <select size="1"  class="row_select_date" name="day" style="width:60px;">
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

																				<select name="year">
						<option class="row_select_year" value=" ">YYYY</option>
            <?php for($i=2002; $i>=1912; $i-- ){ ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ?>
											</select>


							&nbsp;<font class="textnote_red-text-12-b">*</font>

                                    </div>
                                </div>
                                <div class="box">
                                    <div class="oldrow"><strong>เพศ</strong></div>
                                    <div class="oldrow">&nbsp;
                                        <select size="1" style="width:100px" name="gender">
                                            <option selected="selected" value="Male">ชาย</option>
                                            <option  value="Female">หญิง</option>
                                        </select>
                                    </div>
                                </div>
                             </div>

                            <div class="register-form">

                              	<div class="clear"></div>
                                <div class="registration_statebox">
                                   <div class="box">
                                    <div class="row_texttitle"><strong>โทรศัพท์มือถือ</strong></div>
                                    <div class="oldrow"><input type="text" placeholder="ตัวอย่าง: 0801234567" class="input" name="tel" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                </div>
                                </div>
                             </div>

                             <div class="register-form">

                                <div class="clear"></div>
                                 <div class="registration_statebox">
                                    <div class="box">
                                     <div class="row_texttitle"><strong>ที่อยู่</strong></div>
                                     <div class="oldrow"><textarea name="address" rows="3" cols="60"></textarea></div>
                                 </div>
                                 </div>
                              </div>

                              <div class="register-form">

                                  <div class="clear"></div>
                                  <div class="registration_statebox">
                                     <div class="box">
                                      <div class="row_texttitle"><strong>จังหวัด</strong></div>
                                      <div class="oldrow"><select name="district">
                                        <option value=" ">กรุณาเลือกจังหวัด</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่ </option>
                                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                                        <option value="ชัยนาท">ชัยนาท </option>
                                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                                        <option value="ชุมพร">ชุมพร </option>
                                        <option value="ชลบุรี">ชลบุรี </option>
                                        <option value="เชียงใหม่">เชียงใหม่ </option>
                                        <option value="เชียงราย">เชียงราย </option>
                                        <option value="ตรัง">ตรัง </option>
                                        <option value="ตราด">ตราด </option>
                                        <option value="ตาก">ตาก </option>
                                        <option value="นครนายก">นครนายก </option>
                                        <option value="นครปฐม">นครปฐม </option>
                                        <option value="นครพนม">นครพนม </option>
                                        <option value="นครราชสีมา">นครราชสีมา </option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                                        <option value="นครสวรรค์">นครสวรรค์ </option>
                                        <option value="นราธิวาส">นราธิวาส </option>
                                        <option value="น่าน">น่าน </option>
                                        <option value="นนทบุรี">นนทบุรี </option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                                        <option value="ปทุมธานี">ปทุมธานี </option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                                        <option value="ปัตตานี">ปัตตานี </option>
                                        <option value="พะเยา">พะเยา </option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                                        <option value="พังงา">พังงา </option>
                                        <option value="พิจิตร">พิจิตร </option>
                                        <option value="พิษณุโลก">พิษณุโลก </option>
                                        <option value="เพชรบุรี">เพชรบุรี </option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                                        <option value="แพร่">แพร่ </option>
                                        <option value="พัทลุง">พัทลุง </option>
                                        <option value="ภูเก็ต">ภูเก็ต </option>
                                        <option value="มหาสารคาม">มหาสารคาม </option>
                                        <option value="มุกดาหาร">มุกดาหาร </option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                                        <option value="ยโสธร">ยโสธร </option>
                                        <option value="ยะลา">ยะลา </option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                                        <option value="ระนอง">ระนอง </option>
                                        <option value="ระยอง">ระยอง </option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี </option>
                                        <option value="ลำปาง">ลำปาง </option>
                                        <option value="ลำพูน">ลำพูน </option>
                                        <option value="เลย">เลย </option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา </option>
                                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                                        <option value="สระแก้ว">สระแก้ว </option>
                                        <option value="สระบุรี">สระบุรี </option>
                                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                                        <option value="สุโขทัย">สุโขทัย </option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                                        <option value="สุรินทร์">สุรินทร์ </option>
                                        <option value="สตูล">สตูล </option>
                                        <option value="หนองคาย">หนองคาย </option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                                        <option value="อุดรธานี">อุดรธานี </option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                                        <option value="อุทัยธานี">อุทัยธานี </option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง </option>
                                      </select>&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                  </div>
                                  </div>
                               </div>

                               <div class="register-form">

                                  <div class="clear"></div>
                                   <div class="registration_statebox">
                                      <div class="box">
                                       <div class="row_texttitle"><strong>รหัสไปรษณีย์</strong></div>
                                       <div class="oldrow"><input type="text" placeholder="ตัวอย่าง: 27120" class="input" name="post_code" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                   </div>
                                   </div>
                                </div>


                             <div class="registration_divclear_height">&nbsp;</div>
                             <div class="register-form"><h4>ข้อมูลการเข้าสู่ระบบ</h4></div>
                             <div class="registration_divclear_height">&nbsp;</div>
                             <div class="register-form">
                                <div class="box">
                                    <div class="oldrow"><strong>เลือก Username</strong></div>
                                    <div class="oldrow">
                                                                              <input name="username" id="usernametb" type="text" class="input"  maxlength="12" value="" />
                                                                            &nbsp;<font class="textnote_red-text-12-b">*</font>
									  <span id="user-result"></span>
                                    </div>
                                    <div class="oldrow">(ความยาวอย่างน้อย 6 ตัวอักษร)
							    </div>
                                </div>


                             </div>
                            <div class="clear">&nbsp;</div>
                            <div class="register-form" style="height:70px;">
                                <div class="box">
                                    <div class="oldrow"><strong>สร้างรหัสผ่าน</strong></div>
                                    <div class="oldrow"><input name="password" type="password" maxlength="16" value="" class="input" onkeyup="pwd_test_password(this.value);" />&nbsp;<font class="red-text-12-b" style="font-size: 14px;">*</font></div>
                                    <div class="oldrow">(ความยาวอย่างน้อย 6 ตัวอักษร) </div>
									<div class="row_passwordstrength">
                                    <div class="pstitle">การรักษาความปลอดภัยรหัสผ่าน:</div>
                                    <div class="psarea">
                                      <div class="psarea1">
                                        <div id="pwd_text" class="pstext"></div>
                                        <div id="pwd_bar" class="psbar"></div>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="box">
                                	<div class="oldrow"><strong>ยืนยันรหัสผ่าน</strong></div>
                                    <div class="oldrow"><input name="cnfpassword" type="password" class="input" maxlength="16" value="" />&nbsp;<font class="red-text-12-b" style="font-size: 14px;">*</font></div>

                                </div>
                            </div>
                            <div class="clear">&nbsp;</div>
                            <div class="register-form">
                                <div class="box">
                                    <div class="oldrow"><strong>อีเมล</strong></div>
                                    <div class="oldrow" id="emaildiv">
                                                                          <input name="email" id="emailtb" type="email" class="input" maxlength="150"  value="" />&nbsp;<font class="textnote_red-text-12-b">*</font>

                                    </div>
                                </div>
                                  </div>
                                  <div class="registration_captcha">
                                  <div class="divclear">&nbsp;</div>

                                  <div class="cpimage"><?php echo $recaptcha_html;?></div>

                                  <!--<div class="registration_chkbox"><strong><font color="#FF0000">ใช้ Hotmail กรุณาเช็คเมลยืนยันที่ 'อีเมลขยะ' และคลิกคำว่า 'ช้าก่อน ข้อความนี้ปลอดภัย!' (smartphone ต้องเช็คเมลจาก browser >> อีเมลขยะ เท่านั้น)'</font></strong><br></div>-->

								  <div class="registration_chkbox"><input class="checkbox" type="checkbox" id="rule" name="terms" value="1"  />
                    ฉันเข้าใจยอมรับ
                  <a href='<?php echo site_url('home/viewcontent/rule');?>' target='_blank'>กฎกติกาของเว็บไซต์ </a>
                  </div>

                              </div>
                                <div class="registration_divclear_height1">&nbsp;</div>
                                  <div class="registration_submitbox">
                                    	 <input type="submit" class="btn btn-orange btn-lg" id="btn_submit" disabled="disabled" value="สมัครเลย!">
                                    <!-- <input type="image" src="images/thai/register1.png" onmouseover="this.src='images/thai/register1_hover.png'" onmouseout="this.src='images/thai/register1.png'" name="register"  onclick="return Checkregister();" /> -->
                                    <div class="registration_divclear_height1" style="margin-top:10px"><span style="font-size:16px;">เมื่อคุณได้กดปุ่ม "ลงทะเบียน" แล้วถือว่าคุณยอมรับ ข้อตกลงและเงื่อนไข</span></div>
                                 </div>
                             </div>
                        <?php echo form_close();?>
                          <script type='text/javascript'>
                          var checker = document.getElementById('rule');
                          var sendbtn = document.getElementById('btn_submit');
                          // when unchecked or checked, run the function
                          checker.onchange = function(){
                          if(this.checked){
                             sendbtn.disabled = false;
                          } else {
                             sendbtn.disabled = true;
                          }

                          }
                          </script>
						</div> <!-- end of input form -->
						<!-- <div id="registration_blocker" style="display:none;"><div style='text-align: center'><img src='/images/icon-stop.png'></div>
            <h2 style="text-align: center;font-size: 42px;font-weight: normal;font-family: 'rsubold';color: #555;">อัยย่ะ!! เราพบว่าคุณเคยสร้างบัญชีไว้แล้ว</h2>
            <p>เพื่อความยุติธรรม หรือที่เราเรียกว่า 'Dinoza Fair Play' เรามีนโยบาย '1 บัญชี ต่อ 1 คน ต่อ 1 บ้าน' ซึ่งลูกค้า 1 ท่านจะสามารถมีได้เพียง 1 บัญชีเท่านั้น</p>
            <p>หากทำการลงทะเบียนซ้ำ ระบบจะทำการระงับการใช้งานบัญชีของคุณทันทีครับ</p>
            <p>หากคุณลืม Username หรือ รหัสผ่าน <a href='/forgotpassword'>คลิกที่นี่เลยครับ</a> หรือหากคุณกำลังช่วยเพื่อนในการสมัคร หรือคิดว่านี่เป็นข้อผิดพลาด ติดต่อแจ้งเรามาได้ทันทีที่เบอร์ 094-4040-555 ทีมงานของเรายินดีช่วยเหลือในการสมัครสมาชิกของคุณครับ</p>
            <p>ที่ Dinoza เรื่องความโปร่งใสและยุติธรรมต้องมาก่อนเสมอ เรามีนโยบาย '1 บัญชี ต่อ 1 คน ต่อ 1 บ้าน' เพื่อสนับสนุนความยุติธรรมในการประมูล และเพื่อป้องกันไม่ให้ผู้ประมูลมีมากกว่า 1 บัญชี หรือ เอาเปรียบผู้เข้าร่วมประมูลท่านอื่นๆ เมื่อมีนโยบายนี้แล้ว ไม่ใช่แค่จะ Fair สำหรับผู้ประมูลอื่นๆ แต่ยังเพิ่มโอกาสให้ผู้ประมูลอย่างคุณมีสิทธิ์ชนะมากขึ้นอีกด้วย! <a href='/siterules'>อ่านกฎของเราเพิ่มเติมได้ที่นี่</a></p>
            <p>มีบัญชีอยู่แล้ว? <a href='/login'>Log in ที่นี่เลย</a></p></div> -->

                          <div class="divclear">&nbsp;</div>
                   </div>
            </div>
    	</div>
    	</div>
        </div>
 </div>
</div>
