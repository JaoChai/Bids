<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Seting Category
    </h1>
  </section>

   <section class="content">

    <div class="col-md-12">
      <?php $att = array('class' => 'form-horizontal');
      echo form_open('category/insert', $att);
      ?>
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label>Name Category:</label>
              <input type="text" class="form-control" id="namecat" name="namecate">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Description):</label>
                <textarea class="form-control" rows="3" name="cate_meta_des"></textarea>
           </div>

         </div>

         <div class="col-md-6">

           <div class="form-group">
             <label>Page Site Title:</label>
              <input type="text" class="form-control" id="cate_title" name="cate_title">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Keyword):</label>
               <textarea class="form-control" rows="3" name="cate_meta_key"></textarea>
           </div>

         </div>

         <!-- Ckeditor !-->

             <textarea id="cke_editor1" name="cke_editor1" rows="10" cols="80">

             </textarea>


          <!-- End Ckeditor !-->

       </div>

     </div>

     <div class="box-footer">
         <button type="submit" class="btn btn-info pull-right">Submit</button>
     </div>
     <?php echo form_close(); ?>

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
              <th>Categories Name</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $num = 1;
          foreach($result as $res): ?>
          <tr>
            <td><?php echo $num++;?></td>
            <td><?php echo $res->cate_name;?></td>
            <td>
              <a class="btn btn-warning" href="<?php echo site_url("category/update/" .$res->cate_id); ?>">Edit</a>
              <a class="btn btn-danger" href="<?php echo site_url("category/delete/" .$res->cate_id); ?>">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
      </div>
     </div>
    </div>
    </div>
  </div>

  </section>
