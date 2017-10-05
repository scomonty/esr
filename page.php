<?php get_header(); ?>
<?php include 'includes/pageHero.php';?>
    <?php if(have_posts()): while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; else: ?>
        <div class='page-header'>
          <h1>Oh no!</h1>
        </div> <!-- end page header -->
        <p>No content currently available for this page.</p>
        <?php endif; ?>
        <?php include 'includes/races.php';?>
<?php get_footer(); ?>
