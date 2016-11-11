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
       <p align="left" class="registration_note">โปรดกรอกรายละเอียดดังต่อไปนี้ <br><font color="#999999">(1 ท่าน/ 1 user เท่านั้น) </font>:</p>

                <!-- <div class="registration_social">

                	 สมัครเพื่อล็อคอินผ่าน
										  <a onclick="OnLogin2();" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
										  หรือ
										  <a onclick="gp_login();" class="btn btn-gg"><i class="fa fa-google"></i> Google</a>

										  <a href="#" class="btn btn-tw pull-right"><i class="fa fa-twitter"></i> Twitter</a>
									</div>!-->
                </div>

              <form id="registration" name="registration" method="post" action="registration.php">
                            <div class="registration">
                                <div class="register-form"><h4>ข้อมูลส่่วนตัว</h4></div>

								<div class="register-form">
                                    <div>
                                        <div><strong>กรอก ชื่อ-นามสกุล ตามบัตรประชาชน เพื่อใช้ยืนยันเมื่อชนะประมูล </strong></div>
                                    </div>
                               </div>
								<div class="register-form">
                                    <div class="box">
                                        <div class="oldrow"><input placeholder="ชื่อ" type="text" id="firstnametb" class="input" name="firstname" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                    </div>
                                    <div class="box">
                                        <div class="oldrow"><input type="text" placeholder="นามสกุล" class="input" name="lastname" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
                                    </div>
                               </div>
                               <div class="register-form">
                                  <div class="box" style="width: 310px;">
                                    <div class="oldrow"><strong>วันเกิด</strong></div>
                                    <div class="oldrow" style="width: 310px;">
                                    <select size="1"  class="row_select_date" name="date" style="width:60px;">
                                        <option value="dd">DD</option>
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
                                        <option value="mm">MM</option>
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
						<option class="row_select_year" value="yyyy">YYYY</option>
						<option  value="2002">2002</option>
						<option  value="2001">2001</option>
						<option  value="2000">2000</option>
						<option  value="1999">1999</option>
						<option  value="1998">1998</option>
						<option  value="1997">1997</option>
						<option  value="1996">1996</option>
						<option  value="1995">1995</option>
						<option  value="1994">1994</option>
						<option  value="1993">1993</option>
						<option  value="1992">1992</option>
						<option  value="1991">1991</option>
						<option  value="1990">1990</option>
						<option  value="1989">1989</option>
						<option  value="1988">1988</option>
						<option  value="1987">1987</option>
						<option  value="1986">1986</option>
						<option  value="1985">1985</option>
						<option  value="1984">1984</option>
						<option  value="1983">1983</option>
						<option  value="1982">1982</option>
						<option  value="1981">1981</option>
						<option  value="1980">1980</option>
						<option  value="1979">1979</option>
						<option  value="1978">1978</option>
						<option  value="1977">1977</option>
						<option  value="1976">1976</option>
						<option  value="1975">1975</option>
						<option  value="1974">1974</option>
						<option  value="1973">1973</option>
						<option  value="1972">1972</option>
						<option  value="1971">1971</option>
						<option  value="1970">1970</option>
						<option  value="1969">1969</option>
						<option  value="1968">1968</option>
						<option  value="1967">1967</option>
						<option  value="1966">1966</option>
						<option  value="1965">1965</option>
						<option  value="1964">1964</option>
						<option  value="1963">1963</option>
						<option  value="1962">1962</option>
						<option  value="1961">1961</option>
						<option  value="1960">1960</option>
						<option  value="1959">1959</option>
						<option  value="1958">1958</option>
						<option  value="1957">1957</option>
						<option  value="1956">1956</option>
						<option  value="1955">1955</option>
						<option  value="1954">1954</option>
						<option  value="1953">1953</option>
						<option  value="1952">1952</option>
						<option  value="1951">1951</option>
						<option  value="1950">1950</option>
						<option  value="1949">1949</option>
						<option  value="1948">1948</option>
						<option  value="1947">1947</option>
						<option  value="1946">1946</option>
						<option  value="1945">1945</option>
						<option  value="1944">1944</option>
						<option  value="1943">1943</option>
						<option  value="1942">1942</option>
						<option  value="1941">1941</option>
						<option  value="1940">1940</option>
						<option  value="1939">1939</option>
						<option  value="1938">1938</option>
						<option  value="1937">1937</option>
						<option  value="1936">1936</option>
						<option  value="1935">1935</option>
						<option  value="1934">1934</option>
						<option  value="1933">1933</option>
						<option  value="1932">1932</option>
						<option  value="1931">1931</option>
						<option  value="1930">1930</option>
						<option  value="1929">1929</option>
						<option  value="1928">1928</option>
						<option  value="1927">1927</option>
						<option  value="1926">1926</option>
						<option  value="1925">1925</option>
						<option  value="1924">1924</option>
						<option  value="1923">1923</option>
						<option  value="1922">1922</option>
						<option  value="1921">1921</option>
						<option  value="1920">1920</option>
						<option  value="1919">1919</option>
						<option  value="1918">1918</option>
						<option  value="1917">1917</option>
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
                             <input type="hidden" name="idnumber" value="0" id="idnumber" />



                              	<div class="clear"></div>
                                <div class="registration_statebox">
                                   <div class="box">
                                    <div class="row_texttitle"><strong>โทรศัพท์มือถือ</strong></div>
                                    <div class="oldrow"><input type="number" placeholder="ตัวอย่าง: 0801234567" class="input" name="phoneno" maxlength="100" value="" />&nbsp;<font class="textnote_red-text-12-b">*</font></div>
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
                                <div class="box">
                                    <div class="oldrow"><strong>ยืนยันที่อยู่อีเมล</strong> <font color="#BEBEBE"></font></div>
                                    <div class="oldrow">
                                      <input name="cnfemail" type="email" autocomplete="off" class="input" maxlength="150" value="" />
                                      &nbsp;<font class="red-text-12-b" style="font-size: 14px;">*</font>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="registration_captcha">
                                  <div class="divclear">&nbsp;</div>

                                  <div class="cpimage"><?php echo $recaptcha_html;?></div>

                                  <!--<div class="registration_chkbox"><strong><font color="#FF0000">ใช้ Hotmail กรุณาเช็คเมลยืนยันที่ 'อีเมลขยะ' และคลิกคำว่า 'ช้าก่อน ข้อความนี้ปลอดภัย!' (smartphone ต้องเช็คเมลจาก browser >> อีเมลขยะ เท่านั้น)'</font></strong><br></div>-->
                                  
								  <div class="registration_chkbox"><input class="checkbox" type="checkbox" name="terms" value="1"  />ฉันเข้าใจยอมรับ <a href='siterules' target='_blank'>กฎกติกาของเว็บไซต์ </a> และจะ<span class='important'>ไม่สร้างบัญชีมากกว่าหนึ่งบัญชีต่อ 1 คน ต่อ 1 บ้าน และใช้ ชื่อ-นามสกุลจริงในการสมัคร</span> หากฝ่าฝืนทางเว็บไซต์สามารถดำนินการได้ตามเงื่อนไขและนโยบายการใช้บริการ</div>
                                  <div class="registration_chkbox"><input class="checkbox" type="checkbox" style="display:none" name="privacy" value="1" hidden checked="checked" /></div>
                                  <div></div>
                              </div>
                                <div class="registration_divclear_height1">&nbsp;</div>
                                  <div class="registration_submitbox">
                                    	<a href="<?php echo site_url('home/register');?>" class="btn btn-orange btn-lg">สมัครเลย!</a>
                                    <!-- <input type="image" src="images/thai/register1.png" onmouseover="this.src='images/thai/register1_hover.png'" onmouseout="this.src='images/thai/register1.png'" name="register"  onclick="return Checkregister();" /> -->
                                    <div class="registration_divclear_height1" style="margin-top:10px"><span style="font-size:16px;">เมื่อคุณได้กดปุ่ม "ลงทะเบียน" แล้วถือว่าคุณยอมรับ ข้อตกลงและเงื่อนไข และเลือกรับข่าวสารจากเราเพื่อรับฟรีคูปองส่วนลด 100 บาท</span></div>
                                 </div>
                             </div>
                          </form>
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
