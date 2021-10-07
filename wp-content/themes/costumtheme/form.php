<?php /* Template Name: form */ ?>
<?php get_header(); ?>

<div class="container"> 
   <h1><?php the_title(); ?></h1>
   		<div class="row">
        	<div class="col-sm-6"> 
		<form id="contactForm" action="http://localhost/manch/wp-admin/admin-post.php" method="post">
          <div class="form-group">
            <label><span class="text-danger">*</span>Name</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label><span class="text-danger">*</span>Company Name</label>
            <input type="text" class="form-control" id="company" name="company">
          </div>
          <div class="form-group">
            <label><span class="text-danger">*</span>Designation</label>
            <input type="text" class="form-control" id="designation"name="designation">
          </div>
          <div class="form-group">
            <label><span class="text-danger">*</span>Email Address</label>
            <input type="text" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label><span class="text-danger">*</span>Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">
          </div>
        </form>
        </div>
        <div class="col-sm-6">
        <h4>Visit Us</h4>
        <p><strong>KUMAR PROJECTS PVT. LTD.</strong><br>
         #no 6-2, Vegavaram, Denduluru(mandal),Gopannapalem post,Near water tank<br>
          Eluru - 534 450 Andhra Pradesh, India</p>
        <h4>Email Us</h4>
        <p>info@kumarprojects.com<br>
          support@kumarprojects.com</p>
        </div>
      </div>

<?php get_footer(); ?>
