<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Setting Admin
    </h1>
  </section>

  <section class="content">

    <div class="col-md-12">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <!-- <div id="infoMessage"><?php echo $message;?></div> -->
        <?php $att = array('class' => 'form-horizontal');
        echo form_open('bank/insert', $att);
        ?>

        <div class="box-header with-border">
          <h3 class="box-title">Setting Bank</h3>
        </div>
        <div class="box-body">
          <p>กรุณาเพิ่มบัญชีธนาคาร</p>
          <div id="wizard" class="form_wizard wizard_horizontal">

            <div id="step-1">
              <form class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">เลือกธนาคารธนาคาร<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="bank">
                      <option value="">กรุณาเลือกธนาคาร</option>
                      <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                      <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                      <option value="ธนาคารกสิกร">ธนาคารกสิกร</option>
                      <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                      <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                      <option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">เลขที่บัญชี <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" name="num_bank" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">ชื่อบัญชี<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" name="name_bank" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">สาขา<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="first-name" required="required" name="branch" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

              </div>



            </div>
          </div>

          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
          <!-- /.box-footer -->
          <?php echo form_close();?>

        </div>

        <div class="col-md-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Menu</h3>
            </div>

            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bank</th>
                    <th>Account Number</th>
                    <th>Account</th>
                    <th>Branch</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1;
                  foreach($result as $res): ?>
                  <tr>
                    <td><?php echo $num++;?></td>
                    <td><?php echo $res->bank_name;?></td>
                    <td><?php echo $res->bank_num;?></td>
                    <td><?php echo $res->bank_members;?></td>
                    <td><?php echo $res->bank_branch;?></td>

                    <td>
                      <a class="btn btn-warning" href="<?php echo site_url("admin/edit_user/" .$res->bank_id); ?>">Edit</a>
                      <?php echo form_open("admin/delete");?>
                      <input type="hidden" name="id" value="<?php //echo $res->admin_id;?>">
                      <input type="hidden" name="path" value="<?php //echo $res->admin_picpath;?>">
                      <input type="submit" class="btn btn-danger" value="Delete">
                      <?php echo form_close();?>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
