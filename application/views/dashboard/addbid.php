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
        echo form_open('members/updatebid', $att);
        ?>

        <div class="box-header with-border">
          <h3 class="box-title">Add Bid</h3>
        </div>
        <div class="box-body">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Bid<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="hidden" id="first-name" required="required" name="id" value="<?php echo $bid;?>">
                    <input type="text" id="first-name" required="required" name="bid" class="form-control col-md-7 col-xs-12">
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


      </div>
    </section>
  </div>
