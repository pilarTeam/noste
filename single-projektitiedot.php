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

if ( !array_intersect( [ 'editor', 'administrator' , 'um_project-manager', 'subscriber'], $user->roles ) ) {
    wp_redirect( site_url() );
    exit;
}


get_header( 'noste' );


if ( !isset($_GET['tm']) ) {

	echo get_template_part( 'template-parts/single/single-main' );

} elseif ( isset($_GET['tm']) && !empty($_GET['tm']) && !isset($_GET['tmin'] ) ) {
	
	$tm_url = sprintf('template-parts/single/%s/main', $_GET['tm']);

	if ( locate_template( $tm_url . '.php' ) ) {
		echo get_template_part( $tm_url );
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