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
          <section <?php if (strlen($video_url) > 0):?> data-background-video-loop="true" data-background-video-muted="true" data-background-video="<?php echo $video_url ?>" <?php else: ?> data-background="<?php echo $background_image_url ?>" data-background-color="black" data-background-attachment="fixed" <?php endif; ?>> 
            <div class="bootstrap-wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 style="text-align: center; font-weight: bold"><?php echo get_the_title()?></h1>
                    <?php echo apply_filters( 'the_content', get_post_field('post_content', $post->ID));?>
                  </div>
                </div>
              </div>
            </div>
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