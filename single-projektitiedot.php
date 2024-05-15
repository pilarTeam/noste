<?php 

if ( !is_user_logged_in() ) {
    wp_redirect( site_url() );
    exit;
}

$user = wp_get_current_user();

if ( !isset($user->roles) || empty($user->roles) ) {
    wp_redirect( site_url() );
    exit;
}

if ( !array_intersect( [ 'administrator' , 'um_valvoja', 'um_project-manager'], $user->roles ) ) {
    wp_redirect( site_url() );
    exit;
}



if ( array_intersect( [ 'um_project-manager' ], $user->roles ) ) {
	$projektipaallikko = !empty(get_field('projektipaallikko', get_the_ID())) ? array_column(get_field('projektipaallikko', get_the_ID()), 'value'): [];

	if ( empty($projektipaallikko) || !is_array($projektipaallikko) || !in_array(get_current_user_id(), $projektipaallikko) ) {
	    wp_redirect( site_url() );
	    exit;
	}
}


if ( array_intersect( [ 'um_valvoja' ], $user->roles ) ) {
	$valvoja = !empty(get_field('valvoja', get_the_ID())) ? get_field('valvoja', get_the_ID())[0]['value'] : 0;

	if ( empty($valvoja) || $valvoja != get_current_user_id() ) {
	    wp_redirect( site_url() );
	    exit;
	}
}


get_header( 'noste' );

if ( !isset($_GET['tm']) ) {

	echo get_template_part( 'template-parts/single/single-main' );

} elseif ( isset($_GET['tm']) && !empty($_GET['tm']) && !isset($_GET['tmin'] ) ) {
	
	$tm_url = sprintf('template-parts/single/%s/main', $_GET['tm']);

	if ( locate_template( $tm_url . '.php' ) ) {
		echo get_template_part( $tm_url );

?>
<section class="pb-10 ">
	<div class="container px-4">
	    <!-- Card footer -->
	    <div class="card_footer p-2 border border-line">
	        <div class="flex items-center justify-between">
	            <a href="<?php echo esc_attr( site_url( remove_query_arg( [ 'tm', 'tmin' ] ) ) ); ?>" class="btn gap-2 border border-line">
					<i class="um-faicon-angle-left"></i>
	                Takaisin
	            </a>
	        </div>
	    </div>
	    <!-- Card footer -->		
	</div>
</section>
<?php 

	} else {
		wp_redirect( site_url( remove_query_arg( 'tm' ) ) );
		exit;
	}

} elseif ( ( isset($_GET['tm']) && !empty($_GET['tm']) ) && ( isset($_GET['tmin'] ) && !empty($_GET['tmin']) ) ) {

	$tmin_url = sprintf('template-parts/single/%s/%s', $_GET['tm'], $_GET['tmin']);

	if ( locate_template( $tmin_url . '.php' ) ) {
		echo get_template_part( $tmin_url );
	} else {
		wp_redirect( site_url( remove_query_arg( 'tm' ) ) );
		exit;
	}

} else {
	wp_redirect( site_url( remove_query_arg( [ 'tm', 'tmin' ] ) ) );
	exit;
}

get_footer();