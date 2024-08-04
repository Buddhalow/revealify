  
        <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 5pt">
          <?php
            foreach ($posts as $post):
            ?>
              <div style="display: flex; align-items: center; justify-content: center">
                <img style="width: 100pt" src="<?php echo get_the_post_thumbnail_url($post->ID)?>">
              </div>
            <?php
            endforeach;
          ?>
        </div> 