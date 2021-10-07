<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <?php wp_head(); ?>
    </head>
    <body>
    	<?php wp_footer(); ?>
	</body>
</html>