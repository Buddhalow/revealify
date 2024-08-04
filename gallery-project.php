  
        <div class="gallery">
          <?php
            foreach ($posts as $post):
            ?>
            <a class="gallery-item" href="<?php echo get_the_permalink($post->ID)?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID)?>');">
              <div class="post-right-tag">App</div>
              <div class="post-description">
                <h6><?php echo get_the_title($post->ID)?></h6>
                <p><?php get_the_excerpt($post->ID)?></p>
              </div>
            </a>
            <?php
            endforeach;
          ?>
        </div> 