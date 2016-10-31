<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Review Menu
    </h1>
  </section>

   <section class="content">

     <div class="col-md-12">
         <!-- Horizontal Form -->
         <div class="box box-info">
           <?php $att = array('class' => 'form-horizontal');
           echo form_open_multipart('review/insert', $att);
           ?>

             <div class="box-header with-border">
               <h3 class="box-title">Review Menu</h3>
             </div>
             <div class="box-body">


               <div class="form-group">
                 <label for="" class="col-sm-2 control-label">Review Title *</label>
                 <div class="col-sm-10">
                   <input type="text" class="form-control" id="review_title" name="review_title" value="">
                 </div>
               </div>

               <div class="form-group">
                   <label for="" class="col-sm-2 control-label">Upload Image *</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="userfile">
                    <span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Review Name *</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="review_name" name="review_name" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label for="" class="col-sm-2 control-label">Review Pbid *</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="review_pbid" name="review_pbid" value="">
                  </div>
                </div>

                 <div class="form-group">
                     <label for="" class="col-sm-2 control-label">Description *</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" rows="3" name="des"></textarea>
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
                    <th>Review Title</th>
                    <th>Image</th>
                    <th>Review Name</th>
                    <th>Pbid</th>
                  </tr>
              </thead>
              <tbody>
                <?php $num = 1;
                foreach($result as $res): ?>
                <tr>
                  <td><?php echo $num++;?></td>
                  <td><?php echo $res->review_title;?></td>
                  <td><img src="<?php echo base_url('uploads/review/'. $res->review_img); ?>" width="81" height="78"></td>
                  <td><?php echo $res->review_name;?></td>
                  <td><?php echo $res->review_pbid;?></td>
                  <td>
                    <a class="btn btn-warning" href="<?php echo site_url("review/update/" .$res->review_id); ?>">Edit</a>
                    <?php echo form_open("review/delete");?>
                            <input type="hidden" name="id" value="<?php echo $res->review_id;?>">
                            <input type="hidden" name="path" value="<?php echo $res->review_imgpath;?>">
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
