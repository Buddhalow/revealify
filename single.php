<?php get_header()?>
<div class="bootstrap-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php
        while (have_posts()): the_post();
        ?>
        <article>
          <h1><?php echo get_the_title()?></h1>
          <?php the_content()?>
        </article>
        <?php
        endwhile;
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>