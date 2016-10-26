<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Seting Category
    </h1>
  </section>

   <section class="content">

    <div class="col-md-12">
       <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label>Name Category:</label>
              <input type="text" class="form-control" id="namecat" name="namecat" value="">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Description):</label>
                <textarea class="form-control" rows="3" name="meta_des"></textarea>
           </div>

         </div>

         <div class="col-md-6">

           <div class="form-group">
             <label>Page Site Title:</label>
              <input type="text" class="form-control" id="namemenu" name="namemenu" value="">
           </div>

           <div class="form-group">
             <label>Page Meta Tag (Keyword):</label>
               <textarea class="form-control" rows="3" name="meta_key"></textarea>
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


   <div class="col-md-12">

     <div class="box">
       <div class="box-header">
         <h3 class="box-title">List Menu</h3>
       </div>

       <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>No</th>
            <th>Menu Name</th>
            <th>Action</th>
          </tr>
          <!-- Loop Data Here !-->

        </table>
      </div>
     </div>
    </div>
    </div>
  </div>

  </section>
