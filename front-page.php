<?php get_header(); ?>
<?php include 'includes/hero.php';?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
<?php include 'includes/math.php';?>
