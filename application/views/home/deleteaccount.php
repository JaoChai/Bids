<div class="block">
  <div class="container">

  </div>
</div>
<br/>
<div class="block">
  <div class="container">
    <div class="title center">
      <h1>My Account</h1>
    </div>
  </div>
</div>


<div class="grid">
  <div class="form-card">
    <?php $this->load->view('home/profilemenu'); ?>
    <div class="col-md-9">
      <div>
        <h2>Auccount Detail</h2>
        ปิดบัญชี BidCups ของคุณ

        สิ่งสำคัญ: คุณจะไม่สามารถลงทะเบียนได้อีกครั้ง โดยใช้ที่อยู่อีเมลล์นี้ภายใน 2 เดือน และสิทธิ์ประมูลทั้งหมดจะถูกยกเลิก
        <div class="checkbox">
          <label>
            <input type="checkbox" id="rule"> ใช่ฉันต้องการที่จะปิดบัญชี BidCups ของฉัน
          </label>
        </div>

              <div>
                <!-- <a href="editaccount.php" class="btn btn-lg" id="btn_submit" disabled="disabled" style="width:200px;"></i>
                  <span>Delete</span></a> -->
                  <button type="submit" id="btn_submit" disabled="disabled" class="btn btn-info" style="width:200px;">Delete</button>
                </div>
            </div>

          </div>
        </div>
      </div>
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
</script>

</main>
