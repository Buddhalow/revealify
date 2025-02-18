<?php get_header()?>
        <?php
        while (have_posts()): the_post();
        if (has_post_thumbnail($post->ID)) {
          ?>
          <div class="hero hero-image" style="background-image: url('<?php echo get_post_thumbnail_url($post->ID)?>')"></div>
          <?php
        } else {
          ?><div style="height:50pt"></div><?php
        }
        ?>
        <div class="bootstrap-wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <article>
                  <h1><?php echo get_the_title()?></h1>
                  <?php the_content()?>
                </article>
              </div>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        ?>
<?php get_footer() ?>