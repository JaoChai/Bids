<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Setting Silder
    </h1>
  </section>

   <section class="content">

     <div class="col-md-12">
         <!-- Horizontal Form -->
         <div class="box box-info">
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart('slideImg/do_upload', $att);
           ?>

             <div class="box-header with-border">
               <h3 class="box-title">Setting Silder</h3>
             </div>
             <div class="box-body">
               <center>

                  <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>

               <div class="col-md-12">
                <input type="file" id="file" name="userfile">
              </div>
            </center>

              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>

            </div>
             </div>
           </form>
         </div>

         <div class="col-md-12">

           <div class="box">
             <div class="box-header">
               <h3 class="box-title">List Picture</h3>
             </div>

             <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Picture</th>
                  <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $num = 1;
                  foreach($result as $res): ?>
                  <tr>
                    <td><?php echo $num++;?></td>
                    <td><?php echo $res->img_name;?></td>
                    <td><img alt="Your uploaded image" src="<?php echo base_url('uploads/'. $res->img_newname); ?>" width="150" height="100"></td>
                    <td>
                      <?php echo form_open("slideImg/delete");?>
                        <input type="hidden" name="id" value="<?php echo $res->img_id;?>">
                        <input type="hidden" name="path" value="<?php echo $res->img_path;?>">
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
  </section>
</div>
