<?php get_header() ?>
<div class="reveal">
  <div class="slides">
    <?php
    $query = new WP_Query(
      array(
        'post_type' => 'sections',
      )
    );
    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        $background_image_url = get_the_post_thumbnail_url($post->ID);
        $video_url = get_the_post_video_url($post->ID);
        ?>
          <section <?php if (strlen($video_url) > 0):?> data-background-video-loop="true" data-background-video-muted="true" data-background-video="<?php echo $video_url ?>" <?php else: ?> data-background="<?php echo $background_image_url ?>" data-background-attachment="fixed" <?php endif; ?>> 
            <div class="bootstrap-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h5 style="text-align: center; font-weight: bold"><?php echo get_the_title()?></h5>
                    <?php echo apply_filters( 'the_content', get_post_field('post_content', $post->ID));?>
                    
                  </div>
                </div>
              </div>
            </div>
            <?php 
              $gallery_post_type = get_field('gallery_post_type', $post->ID, TRUE);
            
              if (strlen($gallery_post_type) > 0) {
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
          </section>
            
        <?php
      }
    }
    ?>
  </div>
</div>
<script type="text/javascript">  
  var reveal = new Reveal({
  // Activate the scroll view
  view: 'scroll',
  hash: false,

  // Force the scrollbar to remain visible
  scrollProgress: true,
})
  reveal.initialize();
</script>
<?php get_footer() ?>