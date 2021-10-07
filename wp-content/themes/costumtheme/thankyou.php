<?php /* Template Name: Thankyou */ ?>
<?php get_header(); ?>

<div class="container">
<h1><?php the_title(); ?></h1>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; endif; ?>
   
	<a href="http://localhost/manch" class="btn btn-primary">Back to home</a>
</div>

<?php get_footer(); ?>
