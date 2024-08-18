<?php get_header() ?>
<div class="bootstrap-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?> 
          <?php edit_post_link(); ?>
        </article>
        <?php endwhile; ?>
      </div>
      <?php
      if ( get_next_posts_link() ) {
      next_posts_link();
      }
      ?>
      <?php
      if ( get_previous_posts_link() ) {
      previous_posts_link();
      }
      ?>
    </div>
  </div>
</div>

<?php else: ?>
 

<?php endif; ?>
<?php get_footer() ?>