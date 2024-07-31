<?php get_header() ?>
<div class="bootstrap-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-m-12">
        <h3>Portfolio</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 5pt">
          <?php
            while (have_posts()): the_post();
            ?>
              <div style="display: flex; align-items: center; justify-content: center">
                <img style="width: 100pt" src="<?php echo get_the_post_thumbnail_url($post->ID)?>">
              </div>
            <?php
            endwhile;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>        