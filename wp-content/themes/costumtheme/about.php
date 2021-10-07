<?php /* Template Name: about */ ?>
<?php get_header(); ?>

<div class="container-fluid">
<h1><?php the_title(); ?></h1>
 
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    	<?php the_content(); ?>
    
    <?php endwhile; endif; ?>
 <h1>This is load with custom about me page</h1> 
	
</div>

<?php get_footer(); ?>
