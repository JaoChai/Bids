<div class="block">
  <div class="container">

  </div>
</div>

<br/>

<div class="block">
  <div class="container">
    <div class="title center">
      <h1>Shopping cart</h1>
    </div>
    <?php echo form_open('home/viewbanktransfer'); ?>
    <div class="cart-table">
      <div class="table-header">
        <div class="name">
           Bid
        </div>
        <div class="price">
          Bid Cost
        </div>
      </div>

      <div class="table-row">
        <div class="name">
          <center><?php echo $package->package_bid;?></center>

        </div>
        <div class="price">
          <span class=money>฿<?php echo $package->package_cost;?></span>
        </div>

      </div>

    </div>
    <div class="row">
      <div class="col-md-3 total-wrapper">
        <table class="total-price">

          <tr  class="total">
            <td>Subtotal</td>
            <input type="hidden" name="id" value="<?php echo $package->package_id;?>">
            <input type="hidden" name="bidpackage" value="<?php echo $package->package_bid;?>">
            <input type="hidden" name="cost" value="<?php echo $package->package_cost;?>">
            <td><span class=money>฿<?php echo $package->package_cost;?></span></td>
          </tr>
        </table>
        <div class="cart-action">
          <div><button class="btn" type="submit" name="checkout">Checkout</button></div>

        </div>
      </div>
      <?php echo form_close();?>


</main>
