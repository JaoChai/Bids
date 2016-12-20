<div class="block">
  <div class="container">

  </div>
</div>
<br/>
<div class="block">
  <div class="container">
    <div class="title center">
      <h1>Payment</h1>
    </div>
  </div>
</div>


<div class="grid">
  <div class="form-card">
    <?php $this->load->view('home/profilemenu');?>
    <div class="col-md-9">
      <div>
        <h2>Payment</h2>
        <?php echo form_open('bank/insert_transferbid'); ?>
          <div class="form-group">
            <label for="address"><h3>Choose Bid : <?php echo $bidpackage;?></h3></label>
          </div>

          <div class="form-group">
            <label for="address">Amount</label>
            <input type="text" class="form-control" id="Amount" name="test" placeholder="Amount" disabled value="฿<?php echo $cost;?>">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="amount" value="<?php echo $cost;?>">
          </div>


          <div class="form-group">
            <label for="jung">Bank Transfer</label><br>
            <input class="input-radio" type="radio" name="bank" value="ธนาคารกรุงไทย" /> ธนาคารกรุงไทย
            <input class="input-radio" type="radio" name="bank" value="ธนาคารกรุงเทพ" /> ธนาคารกรุงเทพ
            <input class="input-radio" type="radio" name="bank" value="ธนาคารกสิกรไทย" /> ธนาคารกสิกรไทย
            <input class="input-radio" type="radio" name="bank" value="ธนาคารกรุงศรีอยุธยา" /> ธนาคารกรุงศรีอยุธยา
            <input class="input-radio" type="radio" name="bank" value="ธนาคารทหารไทย" /> ธนาคารทหารไทย
           </div>


          <div class="form-group">
            <label for="time">Time Of Transfer</label>
            <div class='input-group date' id='transfer_date'>
               <input type='text' class="form-control" name="transfer_date" value="<?php echo set_value('transfer_date');?>" />
               <span class="input-group-addon">
                   <i class="fa fa-calendar" aria-hidden="true"></i>
               </span>
           </div>
          </div>


          <div class="form-group">
            <label for="Other">Other</label>
            <textarea class="form-control" name="other" id="Other"></textarea>
          </div>


          <button type="submit" class="btn">Complete</button>
        <?php echo form_close();?>

          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    $(function(){

     $("#transfer_date").datetimepicker({
       format: 'DD-MM-YYYY HH:mm:ss'
     });
    });
    </script>

</main>
