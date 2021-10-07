<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>
			<?php if(is_front_page() || is_home()){
                echo get_bloginfo('name');
                } else{
                echo wp_title('');
            }?>
            </title>
      
        <?php wp_head(); ?>
     
    </head>
    <body <?php body_class(); ?>>
		<header class="sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="http://localhost/manch">Manch</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/manch/test-page/">Introduction <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/manch/html">Think manch</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Contact us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="http://localhost/manch/contact-us">Contact us</a>
                      <a class="dropdown-item" href="http://localhost/manch/contact-page">Contact Page</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="http://localhost/manch/contact-us/phone">Phone</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://localhost/manch/about-us">About us</a>
                  </li>
					<li class="nav-item">
                    <a class="nav-link" href="http://localhost/manch/form">Form</a>
                  </li>
            </ul>
              </div>
            </nav>
    </header>
    
    	
