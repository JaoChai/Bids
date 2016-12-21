
<div class="block">
  <div class="container">
    <ul class="breadcrumbs">
      <li><a href="/"  title="Back to the frontpage"><i class="icon icon-home"></i></a></li>
      <li>

        <span>Create Account</span>
      </li>
    </ul>
  </div>
</div>

<div class="block boxed">
  <div class="container">
    <div class="form-card">
      <h2>Register<p class="lead">Name - last name as identification. To insist on auction</p></h2>
      <?php echo $this->session->flashdata('alert');?>
      <?php $attr = array('class'=>'form-horizontal');?>
      <?php echo form_open('home/register', $attr); ?>
        <div class="form-group">
          <div class="col-sm-3"><label>First name</label><input type="text" class="form-control" name="fname" placeholder="First Name"></div>
          <div class="col-sm-3"><label>Last name</label><input type="text" class="form-control" name="lname" placeholder="Last Name"></div>
        </div>

        <label>Birthday</label>
        <div class="form-group">
          <div class="col-sm-1"><label>Day</label><select class="form-control" name="day">
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
          </select></div>
          <div class="col-sm-1"><label>Month</label><select class="form-control" name="month">
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
          </select></div>
          <div class="col-sm-1"><label>Year</label><select class="form-control" name="year">
            <option value=" ">YYYY</option>
            <?php for($i=2002; $i>=1912; $i-- ){ ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php } ?>
            </select></div>
            <div class="col-sm-3"><label>Gender</label><select class="form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select></div>
          </div>

          <div class="form-group">
            <label class="col-sm-12" for="Phone">Phone</label>
            <div class="col-sm-6"><input type="text" class="form-control" name="tel" placeholder="Phone Number"></textarea></div>
          </div>

          <div class="form-group">
            <label class="col-sm-12" for="TextArea">Address</label>
            <div class="col-sm-6"><textarea class="form-control" name="address" id="TextArea"></textarea></div>
          </div>

          <div class="form-group">
            <label class="col-sm-1" for="Province">Province</label>
            <div class="col-sm-5"><select class="form-control" name="province">
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
            </select></div>
          </div>

          <div class="form-group">
            <label class="col-sm-1" for="inputEmail1">Postcode</label>
            <div class="col-sm-5"><input type="Zipcode" class="form-control" name="postcode" id="Zipcode" placeholder="Postcode"></div>
          </div>

          <h2>Please<p class="lead">Data logging</p></h2>
          <div class="form-group">
            <label class="col-sm-1" for="inputEmail1">Username</label>
            <div class="col-sm-5"><input type="username" class="form-control" name="username" id="username" placeholder="username"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-1" for="inputEmail1">Email</label>
            <div class="col-sm-5"><input type="email" class="form-control" name="email" id="inputEmail1" placeholder="Email"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-1" for="inputPassword1">Password</label>
            <div class="col-sm-5"><input type="password" class="form-control" name="password" id="inputPassword1" placeholder="Password"></div>
          </div>
          <div class="form-group">
            <label class="col-sm-1" for="inputPassword1">Confirm Password</label>
            <div class="col-sm-5"><input type="password" class="form-control" name="cnfpassword" id="inputPassword1" placeholder="Confirm Password"></div>
          </div>



          <div class="form-group">
            <div class="col-sm-2">
              <?php echo $recaptcha_html;?>
              <input class="checkbox" type="checkbox" id="rule" name="terms" value="1"  />
              ฉันเข้าใจยอมรับ
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6">
              <button type="submit" id="btn_submit" disabled="disabled" class="btn btn-info pull-right">Submit</button>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>


    </div>
  </div>

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

  $(document).ready(function() {
    $('#btn_submit').click(function(){
      swal({
            title: "กรุณายืนยัน Email ที่ท่านสมัครไว้",
            text: "ถ้าไม่เจอกรุณาไปดูที่เมล์ขยะ",
            type: "success"
      });

      setTimeout(function(){
  			window.location.href = "<?php echo site_url('home/index');?>";
  		}, 5000);

    });
  });
  </script>



</main>
