<?php 

add_action( 'init', 'umcf_init' );
add_action( 'um_registration_complete', 'noste_employee_registration_complete', 10, 3 );


function umcf_init(){
	remove_action( 'um_after_login_fields', 'um_after_login_submit', 1001 );
	add_action( 'um_after_login_fields', 'noste_after_login_submit', 999 );
}


function noste_after_login_submit( $args ){
	if ( empty( $args['forgot_pass_link'] ) ) {
		return;
	} ?>

	<div class="um-col-alt-b">
		<a href="<?php echo esc_url( um_get_core_page( 'password-reset' ) ); ?>" class="um-link-alt">
			<?php _e( 'Unohditko salasanasi?', 'ultimate-member' ); ?>
		</a>
	</div>

	<?php
}
add_filter( 'um_registration_for_loggedin_users', '__return_true' );


add_action( "um_after_register_fields", function( $args ){
	echo sprintf('<input type="hidden" name="registered_manager_id" value="%d" />', get_current_user_id());
});


add_filter( 'um_selectbox_options', function($options, $key){
	error_log(print_r([$options, $key], true));

	return $options;
}, 10, 2);



function noste_employee_registration_complete($user_id, $args, $form_data) {
	if ( !empty($args['registered_manager_id']) ) {
		update_user_meta( $user_id, 'registered_manager_id', $args['registered_manager_id'] );
	}
}


