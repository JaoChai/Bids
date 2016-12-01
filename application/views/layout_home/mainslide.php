<div class="block full-nopad small-margin fullwidth">
  <div class="container">
    <div class="mainSlider " data-thumb="true" data-thumb-width="230" data-thumb-height="100">
      <div class="sliderLoader"><div class="swiper-lazy-preloader swiper-lazy-preloader-black"></div></div>

      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach($slide as $row): ?>
          <div class="swiper-slide">
            <div class="wrapper">
              <figure><img alt="BidCups" src="<?php echo base_url('uploads/'. $row->img_newname); ?>"></figure>
            </div>
          </div>
        <?php endforeach; ?>
          <!-- <div class="swiper-slide">
            <div class="wrapper">
              <figure><img src="<?php echo base_url();?>assets/home/images/12.jpg" alt="" /></figure>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="wrapper">
              <figure><img src="<?php echo base_url();?>assets/home/images/13.jpg" alt="" /></figure>
            </div>
          </div> -->

    </div>

    <div class="swiper-pagination"></div>
    <!-- <div class="swiper-pagination-thumbs"><div class="thumbs-wrapper"><div class="thumbs"></div></div></div> -->
  </div>
</div>
</div>
</div>
