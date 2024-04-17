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

?>
<section class="pb-10 ">
	<div class="container px-4">
	    <!-- Card footer -->
	    <div class="card_footer p-2 border border-line">
	        <div class="flex items-center justify-between">
	            <a href="<?php echo esc_attr( site_url( remove_query_arg( [ 'tm', 'tmin' ] ) ) ); ?>" class="btn gap-2 border border-line">
	                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
	                    <defs>
	                        <pattern id="pattern" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 40, 0)" viewBox="0 0 20 20">
	                            <image preserveAspectRatio="xMidYMid slice" width="20" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO3dQYrVQBhF4ecKFVF6oHu5dZ12SuiK6xNUeiC6A4UnDxyI9jwHcz4IZPjDISGTP3W5SJIkSdJ/rnN/3bm+da7HbOvF0fOc2vV6fTa29b1zv/6+foxt3R0916l1rq9/BDHK0XK/Xt6eDKOA5P7h1d9RxrZ+vpvr7dGznZZRgIwCZBQgowAZBSh+ffHEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPGNbd08torpHz4vy5ciZTm08EWTM9fnouU5p+Mqi/Xtl/2dnfmwPb46e7XRqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMDmOAGAPEGCDGADEGiDFA+v7Dcw8nBrmtGntSNEjnevQsddora9s/jbl/vN0fPY8kSZIkXU7uFxa7dmp7vSU5AAAAAElFTkSuQmCC" />
	                        </pattern>
	                    </defs>
	                    <rect id="icons8-arrow-100" width="20" height="20" fill="url(#pattern)" />
	                </svg>

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