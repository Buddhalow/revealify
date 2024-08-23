<?php get_header() ?>
<div class="sections">
  <div class="slides">
    <?php
      $query = new WP_Query(
      array(
        'post_type' => 'section',
        'tax_query' => [
          [
            'taxonomy' => 'domain',
            'field' => 'term_id',
            'terms' => domainity_get_domain_term_ids()
          ]
        ]
      )
    );
    domainity_pre_get_posts($query);
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $background_image_url = get_the_post_thumbnail_url($post->ID);
        $video_url = get_the_post_video_url($post->ID); 
        ?>
          <section class="<?php echo get_field("class", $post->ID)?>" style="position: relative; <?php echo get_field("style", $post->ID)?>" <?php if ($video_url != NULL && strlen($video_url) > 0):?> data-background-video-loop="true" data-background-video-muted="true" data-background-video="<?php echo $video_url ?>" <?php else: ?> data-background="<?php echo $background_image_url ?>" data-background-attachment="fixed" <?php endif; ?>> 
            <?php if ($video_url != NULL && strlen($video_url) > 0):?>
            <div class="section-video" style="<?php echo get_field("image_style", $post->ID)?>;position: absolute; left: 0; top: 0; width: 100%; height: 100%">
              <video style="position: fixed" autoplay loop>
                <source src="<?php echo $video_url?>" type="video/mp4">
              </video>
            </div>
            <?php else: ?>
            <div class="section-image" style="<?php echo get_field("image_style", $post->ID)?>; background-image: url('<?php echo $background_image_url ?>');  position: absolute; left: 0; top: 0; width: 100%; height: 100%"></div>
            <?php endif; ?>
            <div class="section-content" style="position: absolute; left: 0; top: 0; width: 80vw; height: 100%">
              <?php echo apply_filters( 'the_content', get_post_field('post_content', $post->ID));?>
                       
              <?php 
                $gallery_post_type = get_field('gallery_post_type', $post->ID, TRUE);
              
                if ($gallery_post_type != NULL && strlen($gallery_post_type) > 0) {
                  ?>
                  <div style="width: 100%">
                  <?php
                  $blurb_template = get_post_meta($post->ID, 'gallery_post_type_template', TRUE);
                  if (!$blurb_template) {
                    $blurb_template = "blurb";
                  }

                  $posts = get_posts(
                    array(
                      'post_type' => $gallery_post_type
                    )
                  ); 
                  get_template_part('gallery', $gallery_post_type, array(
                    'post_type' => $gallery_post_type,
                    'posts' => $posts,
                    'blurb_template' => $blurb_template
                  )); 
                  ?>
                </div>
              <?php } ?>
            </div>
          </section>
        <?php
      }
    }
    ?>
  </div>
<?php get_footer() ?>