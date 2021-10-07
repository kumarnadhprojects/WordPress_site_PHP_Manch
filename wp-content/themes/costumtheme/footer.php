<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
<?php wp_footer(); ?>  
&copy 2020 | Kumar projects | All rights are reserved
</body>
</html>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/additional-methods.min.js"></script>
<script>
$(document).ready(function($) {
	jQuery.validator.setDefaults({
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
	$("#contactForm").validate({
		rules: {
			name: {
				required: true,
			},
			company: {
				required: true,
			},
			phone: {
				required: true,
			},
			email: {
				required: true,
				email: true
			},
			designation: {
				required: true
			}
		}
	});
});
</script>