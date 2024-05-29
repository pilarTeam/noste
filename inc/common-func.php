<?php 

add_action( 'wp_ajax_project_status_change', 'noste_project_status_change');
add_action( 'wp_ajax_create_a_project', 'noste_create_a_project');

add_action( 'wp_ajax_esitietolomake_form', 'noste_esitietolomake_form');
add_action( 'wp_ajax_noste_update_project_step', 'noste_update_project_step');

add_action( 'wp_ajax_update_manager_project_status', 'update_manager_project_status');

add_filter('acf/load_field/name=projektipaallikko', 'noste_project_projektipaallikko');
add_filter('acf/load_field/name=valvoja', 'noste_project_valvoja');

add_action( 'wp_ajax_update_comment_box', 'update_comment_box' );
add_action( 'wp_ajax_update_valvoja_step_status', 'update_valvoja_step_status' );

function GetIconsMarkup($url, $width = '20px', $class = 'iconsmarkup') {

	if ( empty($url) ) {
		return;
	}

	// $remote_svg_file = wp_remote_get( get_template_directory_uri() . '/assets/icons/' . $url);
	// $body = wp_remote_retrieve_body( $remote_svg_file );
	$body = file_get_contents(get_template_directory() . '/assets/icons/' . $url);

	if ( !empty($body) ) {
		return sprintf('<span class="%s" style="width: %s">%s</span>', $class, $width, $body);
	}
}

function noste_send_form_notification( $employee_id, $content, $project_id, $user_id, $tm, $status = 'active' ){
	global $wpdb;

	if ( empty($employee_id) || empty($project_id) || empty($user_id) || !is_user_logged_in() || empty($content) || empty($tm) ) {
		return;
	}

	$wpdb->insert(
		'wp_noste_notifications',
		[
			'employer' => $employee_id,
			'content' => $content,
			'project_id' => $project_id,
			'user_id' => $user_id,
			'status' => $status,
			'tm' => $tm
		],
		[
			'%d',
			'%s',
			'%d',
			'%d',
			'%s',
			'%s'
		]
	);

	return $wpdb->insert_id;
}

function noste_get_roles ( $role_key = '' ) {

	if ( !isset( wp_roles()->roles ) && !is_array(wp_roles()->roles) ) {
		return [];
	}
	$roles = array_filter(array_combine(array_keys(wp_roles()->roles), array_column(wp_roles()->roles, 'name')));

	return empty($role_key) ? $roles : $roles[$role_key];

}

function noste_check_array_data ( $array = [], $value = '', $default = '' ) {
	if ( is_null( $array ) || empty($array) ) {
		return $default;
	}

	if ( !isset($array[$value]) || empty($array[$value]) ) {
		return $default;
	}

	return $array[$value];
}

function noste_check_empty($value, $default = '') {
	if ( !isset($value) || empty($value) ) {
		return $default;
	}

	return $value;
}

function noste_check_empty_2($project_id, $key_code) {
	$meta = get_post_meta( $project_id, 'pilar_' . $key_code, true );
    if ( !isset($meta) || empty($meta) ) {
		echo esc_html($key_code);
	} else {
        echo $meta;
    }
}

function noste_checked_with_json($checked = '', $current = '' ){

	if ( !isset($checked) || empty($checked) || strlen($checked) < 3 ) {
		return;
	}

	$decoded = json_decode( $checked, true );

	if ( !$decoded && !is_array($decoded) ) {
		return;
	}

	if ( in_array($current, $decoded) ) {
		return 'checked';
	}
	
	return;

}

function noste_checked_with_array($checked = [], $current = '' ){

	if ( !isset($checked) || empty($checked) || !is_array($checked) ) {
		return;
	}

	if ( in_array($current, $checked) ) {
		return 'checked';
	}

	return;

}
function noste_is_checked($stored, $current, $echo = true) {
    $stored = (array) $stored;
    if ( in_array($current, $stored) ) {
        if ($echo) {
            echo 'checked';
        } else {
            return 'checked';
        }
    }
    return;
}


function noste_custom_logo_url () {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( empty($custom_logo_id) ) {
		return;
	}

	$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

	if ( empty($image) ) {
		return;
	}	
	return $image[0];	
}

function noste_checkbox_status($checked) {
	if ( $checked ) {
		return '';
	} else {
		return 'hidden';
	}
}

function noste_checkbox_status_readonly($value) {
	if ( $value ) {
		return '';
	} else {
		return 'readonly';
	}
}



function noste_custom_checkbox_checked( $checked = '', $current = '' ) {
	return noste_checked_with_json($checked, $current) ? '' : 'hidden';
}

function noste_project_status_change(){
	$status = !empty($_POST['status']) ? $_POST['status'] : '';

	if ( empty($status) ) {
		$error = new WP_Error( '001', 'Invalid Select Filter' );
		wp_send_json_error( $error );		
	}

	$user = wp_get_current_user();

	if ( !isset($user->roles) || empty($user->roles) ) {
		$error = new WP_Error( '001', 'Invalid Users' );
		wp_send_json_error( $error );			
	}


	if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) {
	    $args = [
	        'post_type' => 'projektitiedot',
	        'numberposts' => -1,
	        'fields' => 'ids'
	    ];
	}

	if ( array_intersect( [ 'um_valvoja' ], $user->roles ) ) {
	    $args = [
	        'post_type' => 'projektitiedot',
	        'numberposts' => -1,
	        'fields' => 'ids',
	    ];

		$args['meta_query'][] = [
			'key' => 'valvoja',
			'value' => get_current_user_id(),
			'compare' => 'LIKE'
		];

	}

	if ( array_intersect( [ 'um_project-manager' ], $user->roles ) ) {
	    $args = [
	        'post_type' 	=> 'projektitiedot',
	        'numberposts' 	=> -1,
	        'fields' 		=> 'ids',
	        'meta_key'      => 'projektipaallikko',
	        'meta_value'    => get_current_user_id()
	    ];
	}


	if ( isset($_POST['psearch']) && !empty($_POST['psearch']) ) {
	    $args['s'] = $_POST['psearch'];
	 	error_log(print_r($_POST, true));
	}


	if ( $status != 'all' ) {
		$args['meta_query'][] = [
			'key' => 'projektin_tila',
			'value' => $status,
			'compare' => '='
		];
	}

	 $args['meta_query'][]['relation'] = 'AND';

	 if ( empty($args) ) {
		$error = new WP_Error( '001', 'Invalid Query' );
		wp_send_json_error( $error );		 	
	 }

	 $projects = get_posts( $args );

	 if ( empty($projects) ) {
		$error = new WP_Error( '001', 'Ei tuloksia!!!' );
		wp_send_json_error( $error );		 	
	 }

	$output = [];

    if ( !empty($projects) && is_array($projects) ) {
    	foreach ($projects as $id) {

            $output[$id]['title'] = get_the_title( $id );

            $output[$id]['permalink'] = !in_array('editor', $user->roles) ? get_the_permalink( $id ) : '';
            $output[$id]['edit_permalink'] = add_query_arg([ 'pid' => $id ], get_permalink( 60 ) );

            $output[$id]['projektinumero'] = !empty(get_field('projektinumero', $id)) ? get_field('projektinumero', $id) : '';
    		$output[$id]['projektin_tila_status'] = !empty(get_field('projektin_tila', $id)) ? get_field('projektin_tila', $id) : '';
            $output[$id]['projektipaallikko'] = !empty(get_field('projektipaallikko', $id)) ? implode(', ', array_column( get_field('projektipaallikko', $id), 'label')) : '';

            $output[$id]['valvoja'] = !empty(get_field('valvoja', $id)) ? get_field('valvoja', $id)['label'] : '';
            $output[$id]['projektin_valmistelu'] = !empty(get_field('projektin_valmistelu', $id)) ? get_field('projektin_valmistelu', $id) : '';

            $output[$id]['pilar_T1'] = noste_check_empty( get_post_meta( $id, 'pilar_T1', true ), 'Tilaaja (Yritys)');
            $output[$id]['pilar_K1'] = noste_check_empty( get_post_meta( $id, 'pilar_K1', true ), 'Kiinteistön nimi');
            $output[$id]['pilar_K2'] = noste_check_empty( get_post_meta( $id, 'pilar_K2', true ), 'Kiinteistön osoite');
    	}
    }

	wp_send_json_success((array) $output, 200);

	wp_die();
}


function noste_header_middle() {
	ob_start();

	if ( is_page( 20 ) ) :
	?>
	<div class="flex justify-center col-span-2 lg:col-span-1 max-w-md mx-auto projekti-status">
	    <ul class="flex flex-auto space-x-2 items-center justify-between p-1 rounded-full bg-gray">
	        <li class="flex item-center justify-center active" data-status="all">
	            <button class="tab_list_btn flex flex-wrap gap-x-2 px-3 py-1 rounded-3xl bg-white">
 					<?php echo noste_check_empty ( GetIconsMarkup( 'kaikki.svg' ) ); ?> 
	                Kaikki
	            </button>
	        </li>
	        <li class="flex item-center justify-center" data-status="Aktiivinen">
	            <button class="tab_list_btn flex flex-wrap gap-x-2 px-3 py-1 rounded-3xl">
	            	<?php echo noste_check_empty ( GetIconsMarkup( 'aktiivinien.svg' ) ); ?> 
	                Aktiiviset
	            </button>
	        </li>
	        <li class="flex item-center justify-center" data-status="Arkistoitu">
	            <button class="tab_list_btn flex flex-wrap gap-x-2 px-3 py-1 rounded-3xl">
	            	<?php echo noste_check_empty ( GetIconsMarkup( 'arkistoitu.svg' ) ); ?> 
	                Arkistoidut
	            </button>
	        </li>
	    </ul> <!-- tab_box -->
	</div> <!-- Tab Fuild -->

	<?php elseif ( ( is_single() && 'projektitiedot' == get_post_type() ) && isset($_GET['tm']) ) : 
	$single_main_step = json_decode( get_option( 'single_main_steps'), true ) ?? [];

	if ( empty($single_main_step) ) {
		return;
	}

	?>
        <!-- Tab Fuild -->
        <ul class="flex flex-col sm:flex-row flex-auto items-center justify-between rounded-sm md:rounded-md bg-white border border-line" id="buttonList_2">
        	<?php foreach ($single_main_step as $step_top => $value): 
        		$active_step = '';
        		if ( isset($_GET['tm']) && !empty($_GET['tm']) ) {
        			$active_step = array_key_exists($_GET['tm'], $value) ? 'active' : '';
        		}
        		?>
	            <li class="flex item-center md:justify-center w-full md:w-auto md:border-r border-line text-sm text-left <?php echo esc_attr( $active_step ); ?>">
	                  <?php echo esc_html( $step_top ); ?>
	            </li>
        	<?php endforeach ?>
        </ul> <!-- tab_box -->
	<?php 
	endif;

	return ob_get_clean();
}


function noste_header_notification(){
	
	ob_start();

	$user = wp_get_current_user();

	if ( is_page( [ 20, 66 ] ) && isset($user->roles) && !empty($user->roles) && array_intersect(['um_valvoja', 'administrator'], $user->roles) ) : ?>

		<?php 
			global $wpdb;
			$existing = $wpdb->get_results( $wpdb->prepare( "SELECT id FROM wp_noste_notifications WHERE user_id = %d AND status = 'active'", get_current_user_id() ), ARRAY_A );

		 ?>

		<a href="<?php echo esc_attr( get_permalink( 66 )  ); ?>" class="<?php echo esc_html ( !empty($existing) ? 'has_active' : ''); ?>">
	        <?php echo noste_check_empty ( GetIconsMarkup( 'notification.svg', '24px' ) ); ?> 
	        <span class="count"><?php echo esc_html( !empty(count($existing)) ? count($existing) : '' ); ?></span>
		</a>

	<?php elseif ( ( is_single() && 'projektitiedot' == get_post_type() ) || is_page( [ 62, 64 ] ) ) :

		if ( is_page( [62, 64 ] ) ) {
			global $wp;
			$esitietolomake_url = add_query_arg(array($_GET), get_permalink( 62 ) );
			$kustannusseuranta_url = add_query_arg(array($_GET), get_permalink( 64 ) );
		} else {
			$esitietolomake_url = add_query_arg([
						'pid' => get_the_ID()
					], get_permalink( 62 ) );

			$kustannusseuranta_url = add_query_arg([
						'pid' => get_the_ID()
					], get_permalink( 64 ) );

			$projektiraportti_url = add_query_arg([
						'pid' => get_the_ID()
					], get_permalink( 121 ) );

		}

		 ?>
	        <a href="<?php echo esc_attr( $esitietolomake_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2 relative tooltip">
				<?php echo noste_check_empty ( GetIconsMarkup( 'global-1.svg' ) ); ?>
				<span class="tooltiptext">Esitietolomake</span>
	        </a>
	        
	        <a href="<?php echo esc_attr( $kustannusseuranta_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2 relative tooltip">
				<?php echo noste_check_empty ( GetIconsMarkup( 'global-2.svg' ) ); ?>
				<span class="tooltiptext">Kustannusseuranta</span>
	        </a>
	        
	        <a href="<?php echo esc_attr( $projektiraportti_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2 relative tooltip">
				<?php echo noste_check_empty ( GetIconsMarkup( 'global-3.svg' ) ); ?>
				<span class="tooltiptext">Projektiraportti 31 pv</span>
	        </a>	
		<?php 
	endif;

	return ob_get_clean();	
}


function noste_create_a_project() {
	check_ajax_referer( 'create_project_validation', 'create_project_nonce_field' );

	if ( empty($_POST['project_name']) || empty($_POST['projektinumero']) || empty($_POST['luontipaivamaara']) ) {
		$error = new WP_Error( '001', 'Please fill out blank fields' );
		wp_send_json_error( $error );
	}

	$projektin_nimi = sanitize_text_field( $_POST['project_name'] );
	$projektinumero = sanitize_text_field( $_POST['projektinumero'] );
	$luontipaivamaara = sanitize_text_field( $_POST['luontipaivamaara'] );
	$projektipaallikko = sanitize_text_field( $_POST['projektipaallikko'] );
	$valvoja = sanitize_text_field( $_POST['valvoja'] );
	$project_id = !empty($_POST['project_id']) ? sanitize_text_field( $_POST['project_id'] ) : 0;


	$args = [
		'post_type' => 'projektitiedot',
		'post_author' => get_current_user_id(),
		'post_title' => wp_strip_all_tags( $projektin_nimi ),
		'post_status'   => 'publish',
	];


	if ( isset($_POST['to_update_id']) && !empty($_POST['to_update_id']) ) {
		$args['ID'] = (int) $_POST['to_update_id'];
	}

	$post_id = wp_insert_post($args);

	if ( is_wp_error($post_id) ) {
		$error = new WP_Error( '002', 'Failed For Server Busy' );
		wp_send_json_error( $error );
	} else {
		update_field( 'projektinumero', $projektinumero, $post_id );
		update_field( 'luontipaivamaara', $luontipaivamaara, $post_id );
		update_field( 'projektipaallikko', $projektipaallikko, $post_id );
		update_field( 'valvoja', $valvoja, $post_id );
		update_field( 'projektin_tila', 'Aktiivinen', $post_id );

		update_post_meta( $post_id, 'pilar_K4', $projektin_nimi );
		update_post_meta( $post_id, 'pilar_K8', $projektinumero );

		wp_send_json_success([
			'permalink' => get_permalink( $post_id )
		], 200);
	}



	wp_die();
}


function noste_project_projektipaallikko($field) {
  
    // reset choices
    $field['choices'] = array();
    
    $choices = get_users([ 
	    'role__in'  => [ 'um_project-manager'],
	    'fields'    => [ 'id', 'display_name' ]
	]);
    
    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice->id ] = $choice->display_name;
            
        }
        
    }
    

    // return the field
    return $field;	
}

function noste_project_valvoja($field) {
  
    // reset choices
    $field['choices'] = array();
    
    $choices = get_users([ 
	    'role__in'  => [ 'um_valvoja'],
	    'fields'    => [ 'id', 'display_name' ]
	]);
    
    // loop through array and add to field 'choices'
    if( is_array($choices) ) {
        
        foreach( $choices as $choice ) {
            
            $field['choices'][ $choice->id ] = $choice->display_name;
            
        }
        
    }
    

    // return the field
    return $field;	
}

function noste_esitietolomake_form(){
	check_ajax_referer( 'esitietolomake_validation', 'esitietolomake_nonce_field' );


	if ( isset($_POST['pid']) && !empty($_POST['pid']) ) {
    
	    $project_id = (int) $_POST['pid'];

	    if ( is_int($project_id) ) {
	        foreach ($_POST as $key => $value) {
	            if ( str_contains( $key, 'pilar' ) && !empty($value) ) {

	                if ( is_array($value) ) {
	                    
	                    $satize_arr = array_map(function($arrval){
	                        return trim( stripslashes( sanitize_text_field( $arrval ) ) );
	                    }, $value);

	                    update_post_meta( $project_id, $key, json_encode( $satize_arr ) );


	                } else {
	                    $santiza_val = trim( stripslashes( sanitize_text_field( $value ) ) );
	                    update_post_meta( $project_id, $key, $santiza_val );                    
	                }

	            }
	        }

	        unset($_POST['action']);
	        unset($_POST['esitietolomake_nonce_field']);

			wp_send_json_success($_POST, 200);

	    } else {
			$error = new WP_Error( '001', 'Please fill out blank fields' );
			wp_send_json_error( $error );
	    }
	

	}

	$error = new WP_Error( '002', 'Server Busy' );
	wp_send_json_error( $error );
}


function recursive_sanitize_text_field( $array ) {

    foreach ($array as $key => & $value ) {
    
        if ( is_array( $value ) ) {
            $value = recursive_sanitize_text_field( $value );
        } else {
            $value = sanitize_text_field( wp_unslash($value) );
        }
    }

    return $array;
}



function noste_update_project_step() {
	check_ajax_referer( 'project_step_form_validation', 'project_step_form__nonce_field' );
	$response = (object) ['template' => false, 'submission' => [], 'global_keywords' => []];

	if ( empty($_POST['ptname']) ) {
		$error = new WP_Error( '001', 'PT NAME ISSUE' );
		wp_send_json_error( $error );
	}

	if ( empty($_POST['post_id']) ) {
		$error = new WP_Error( '002', 'Invalid Project' );
		wp_send_json_error( $error );
	}

	$user = wp_get_current_user();

	if ( !isset($user->roles) || empty($user->roles) ) {
		$error = new WP_Error( '003', "You Don't have Permission!!!" );
		wp_send_json_error( $error );
	}


	if ( !array_intersect( [ 'administrator' , 'um_project-manager'], $user->roles ) ) {
		$error = new WP_Error( '004', "You Don't have Permission!!!" );
		wp_send_json_error( $error );
	}

	recursive_sanitize_text_field($_POST);

	// error_log(print_r($_POST, true));

	$field_key = $_POST['ptname'];
	$post_id = $_POST['post_id'];

	unset($_POST['ptname']);
	unset($_POST['action']);
	unset($_POST['project_step_form__nonce_field']);
	unset($_POST['_wp_http_referer']);


	$global_data = array_filter($_POST, function($k){
		return str_contains( $k, 'pilar' );
	}, ARRAY_FILTER_USE_KEY);


	foreach ($global_data as $k => $v) {
		$_POST[$k] = get_post_meta( $post_id, $k, true );			
	}
    /* Preview Template */
	$ref_queries = (array) json_decode( preg_replace( '/[\x00-\x1F\x80-\xFF]/', '', stripslashes(html_entity_decode(isset($_POST['ref_queries'] ) ? $_POST['ref_queries'] : '{}' ) ) ), true);

	$step_id = $ref_queries['tm'] ?? false;
	$form_id = $ref_queries['tmin'] ?? false;

	$response->submission = $_POST;

	$template = implode('/', (array) [$step_id, $form_id]);
	$template_path = get_template_directory() . '/template-preview/' . $template . '.twig';

	$template_dir = get_template_directory() . '/template-preview/'. $step_id;
	if (!is_dir($template_dir)) {mkdir($template_dir, 0777, true);}
	
	if (!file_exists($template_path)) {
		$myfile = fopen($template_path, "w+") or die("Unable to open file!");
		$text = `<div class="noste_pages">
					<div class="single-page">
						<div class="page-wrap">
							<div class="page-header">
								<img src="{{ locale_args.site_uri }}wp-content/uploads/2024/03/logo-noste.png" alt="Logo" />
							</div>
							<div class="page-body">
								Preview template not found!
							</div>
							<div class="page-footer">
								<span class="page-footer-pagination">1/1</span>
							</div>
						</div>
					</div>
				</div>`;
		fwrite($myfile, $text);
		fclose($myfile);
	}
	if (file_exists($template_path) && !is_dir($template_path)) {
		$response->template = str_replace([ABSPATH], [site_url('/')], $template_path) . '?v=' . filemtime($template_path);
	} else {
		$response->template = get_template_directory_uri() . '/template-preview/blank.twig';
	}
    /* Preview Template */

	foreach ($global_data as $k => $v) {
		unset($_POST[$k]);			
	}

	// $data = maybe_serialize( $_POST );
	$data = $_POST; // Added by Remal mahmud Please review @mdkamrulislam0093

	if ( empty($data) ) {
		$error = new WP_Error( '005', 'Content Data issue' );
		wp_send_json_error( $error );		
	}

	
	$updated = update_post_meta( $post_id, $field_key, $data );

	if ( !$updated ) {
		$error = new WP_Error( '006', 'You have to change any fields value.' );
		wp_send_json_error( $error );			
	}


	if ( $updated ) {

	$project_header_info = !empty(get_option( 'noste_project_header_info', true )) ? json_decode( get_option( 'noste_project_header_info', true ), true ) : [];

	$tm = implode('-', [ $step_id, $form_id ]);

	$project_header_info[$tm]['tm'] = $tm;

	/* Notification */
		$user_id = !empty(get_field('valvoja', $post_id)) ? get_field('valvoja', $post_id)['value'] : 0;

		if ( !empty($user_id) ) {
			
			$notify = noste_send_form_notification( 
				get_current_user_id(), 
				json_encode( $project_header_info[$tm] ), 
				$post_id, 
				$user_id,
				$tm,
				'active'
			);

		}
	/* Notification */


	/* Step Status */

	$project_tmin_status = !empty( get_post_meta( $post_id, sprintf('%s_status', $step_id), true ) ) ? json_decode( get_post_meta( $post_id, sprintf('%s_status', $step_id), true ), true ) : [];
	$project_tmin_status[$form_id]['status'] = 2;

	update_post_meta( $post_id, sprintf('%s_status', $step_id), json_encode( $project_tmin_status ) );
	
	/* Step Status */


	/** Last Updated Step **/
	$single_main_step = json_decode( get_option( 'single_main_steps'), true ) ?? [];

	if ( !empty($single_main_step) ) {
    	foreach ($single_main_step as $step_top => $value): 
    		if ( isset($ref_queries['tm']) && !empty($ref_queries['tm']) && array_key_exists($ref_queries['tm'], $value)  ) {
    			update_post_meta( $post_id, 'last_updated_step', $step_top );
    		}
    	endforeach;
	}

	/** End Last Updated Step **/


		// preview_template_response
		wp_send_json_success((array) $response, 200);
		// preview_template_response
	} 

	wp_die();	
}


function noste_form_header($type = 'form') {

	$project_header_info = !empty(get_option( 'noste_project_header_info', true )) ? json_decode( get_option( 'noste_project_header_info', true ), true ) : [];

	if ( empty($project_header_info) || empty($_GET['tm']) || empty($_GET['tmin']) ) {
		return;
	}

	$tm = implode('-', [ $_GET['tm'], $_GET['tmin'] ]);

	$step = $project_header_info[$tm]['step'] ?? '';
	$instep = $project_header_info[$tm]['instep'] ?? '';
	$form_name = $project_header_info[$tm]['form_name'] ?? '';

	$project_tmin_status = !empty( get_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), true ) ) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), true ), true ) : [];


	ob_start();

	?>
		<div class="card_header flex flex-col md:flex-row items-center md:justify-between px-4 md:px-8 py-6 border-b border-line top-0 z-10">
	        <div>
	            <p class="text-sm font-normal text-[#586B74] mb-1"><?php echo esc_html( noste_check_empty(get_post_meta( get_the_ID(), 'pilar_K4', true ), 'Project nimi') ); ?></p>
	            <!-- Breadcrumb -->
	            <nav class="flex justify-between" aria-label="Breadcrumb">
	                <ol class="inline-flex flex-wrap items-center mb-3 sm:mb-0">
	                    <li>
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html( $step ); ?></span>
	                    </li>
	                    <span class="mx-1 md:mx-2 text-black">/</span>
	                    <li aria-current="page">
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html( $instep ); ?></span>
	                    </li>
	                    <span class="mx-1 md:mx-2 text-gray-400">/</span>
	                    <li aria-current="page">
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html( $form_name ); ?></span>
	                    </li>
	                </ol>
	            </nav>
	        </div>

			<?php
			$preview_path = '/template-preview/' . implode('/', [$_GET['tm'], $_GET['tmin']]) . '.twig';
			if (file_exists(get_template_directory() . $preview_path) && !is_dir(get_template_directory() . $preview_path)) {
				$preview_path = $preview_path . '?v=' . filemtime(get_template_directory() . $preview_path);
			}
			?>
	        <button class="btn gap-2 border border-line bg-[#E9E9F0] print-btn" data-form-path="<?php echo esc_url(get_template_directory_uri() . $preview_path); ?>" data-is-approved="<?php echo esc_attr(isset($project_tmin_status[$_GET['tmin']]) && isset($project_tmin_status[$_GET['tmin']]['status']) && $project_tmin_status[$_GET['tmin']]['status'] == 3?'true':'false'); ?>" data-tm="<?php echo esc_attr($_GET['tm']??''); ?>" data-tmin="<?php echo esc_attr($_GET['tmin'] ?? ''); ?>" data-project_id="<?php echo esc_attr(get_the_ID()); ?>">
				<i class="um-icon-ios-printer-outline"></i>
				Luonnos
	        </button>
	    </div>
	<?php
	return ob_get_clean();

}

function noste_form_footer($type = 'form') {
	$edit_url = add_query_arg([
	    'tm' => $_GET['tm'] ?? '',
	    'tmin' => $_GET['tmin'] ?? '',
	], get_permalink( get_the_ID() ) );

	$user = wp_get_current_user();

	$project_tmin_status = !empty( get_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), true ) ) ? json_decode( get_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), true ), true ) : [];
	// $project_tmin_status = get_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), true );
	
	// $project_tmin_status[$_GET['tmin']]['status'] = 0;
	// update_post_meta( get_the_ID(), sprintf('%s_status', $_GET['tm']), json_encode( $project_tmin_status ) );

	// var_dump($project_tmin_status);

	$preview_status = false;

	if ( isset($project_tmin_status[$_GET['tmin']]) && !empty($project_tmin_status[$_GET['tmin']]) && $project_tmin_status[$_GET['tmin']]['status'] == 2 && isset($user->roles) && !empty($user->roles) && array_intersect( [ 'administrator' ], $user->roles ) ) {
		$preview_status = true;
	} 


	if ( isset($user->roles) && !empty($user->roles) && array_intersect( [ 'um_valvoja' ], $user->roles ) && $project_tmin_status[$_GET['tmin']]['status'] != 2 ) {
		return;
	} elseif ( isset($user->roles) && !empty($user->roles) && array_intersect( [ 'um_valvoja' ], $user->roles ) && $project_tmin_status[$_GET['tmin']]['status'] == 2 ) {
		$preview_status = true;
	}

	if ( isset($user->roles) && !empty($user->roles) && array_intersect( [ 'um_project-manager' ], $user->roles ) && $project_tmin_status[$_GET['tmin']]['status'] == 2 ) {
		return;
	}


	ob_start();
	?>

	    <div class="popup_wrap hidden fixed left-0 top-0 w-full h-full bg-[#00151F66] z-50">
	        <div class="w-[95%] lg:w-auto rounded-[12px] bg-white border border-solid border-[#E1E1EA] max-w-[600px] absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
	            <h3 class="text-[#08202C] text-[20px] font-medium px-3 lg:px-8 pt-8 pb-10">Oletko varma, että haluat palauttaa muokattavaksi?</h3>
	            <hr class="border-b border-solid border-[#E1E1EA] mt-3">
	            <div class="p-4 flex gap-4 justify-end">
	                <button class="cancel_popup inline-block border border-solid border-[#E1E1EA] text-[#08202C] rounded-lg px-[10px] py-[5px] text-[14px]">Peruuta</button>

	                <a href="<?php echo esc_attr( $edit_url ); ?>" class="submit_popup_form inline-block bg-[#00B2A9] rounded-lg px-3 lg:px-[10px] py-[5px] text-[14px] text-white">Kyllä, haluan muokata</a>
	            </div>
	        </div>
	    </div>

	    <?php if ( $preview_status ): ?>

			<!-- Card footer -->
			<div class="card_footer p-4 border-t border-line" id="project_notify_status" data-tm="<?php echo esc_attr( $_GET['tm'] ?? '' ); ?>" data-tmin="<?php echo esc_attr( $_GET['tmin'] ?? '' ); ?>" data-pid="<?php echo esc_attr( get_the_ID() ); ?>">
	            <div class="flex items-center justify-between">
	                <span class="btn gap-2 border border-line cursor-pointer" data-status="denied">kieltää</span>
	                <span class="btn gap-2 border border-accent bg-accent text-white cursor-pointer" data-status="admitted">hyväksytty</span>
	            </div>
	        </div>  	

	    	<?php else: ?>

			<!-- Card footer -->
			<div class="card_footer p-4 border-t border-line">
	            <div class="flex items-center justify-between">
	                <a href="<?php echo esc_attr( site_url( remove_query_arg(['tmin']) ) ); ?>" class="btn gap-2 border border-line">
	                	<i class="um-faicon-angle-left"></i>
	                    Takaisin
	                </a>

	                <button class="btn gap-2 border border-accent bg-accent text-white" type="submit">Lähetä hyväksyttäväksi</button>
	            </div>
	        </div>  	
	    <?php endif ?>
	<?php
	return ob_get_clean();
}

function update_manager_project_status(){

	if ( !is_user_logged_in() ) {
		$error = new WP_Error( '001', 'Invalid User' );
		wp_send_json_error( $error );		
	}

	$user = wp_get_current_user();

	if ( !isset($user->roles) || empty($user->roles) || !array_intersect( [ 'administrator' , 'um_valvoja' ], $user->roles ) ) {
		$error = new WP_Error( '001', "you don't have permission to change it!!!" );
		wp_send_json_error( $error );
	} 

    $status = $_POST['status'] ?? '';
    $tm = $_POST['tm'] ?? '';
    $tmin = $_POST['tmin'] ?? '';
    $pid = $_POST['pid'] ?? '';

    if ( empty($status) || empty($tm) || empty($tmin) || empty($pid) ) {
		$error = new WP_Error( '001', "You don't have sufficient information for change it!!!" );
		wp_send_json_error( $error );
    }

	global $wpdb;

	$project_tmin_status = !empty( get_post_meta( $pid, sprintf('%s_status', $tm), true ) ) ? json_decode( get_post_meta( $pid, sprintf('%s_status', $tm), true ), true ) : [];


	if ( $status == 'admitted' ) {
		$project_tmin_status[$tmin]['status'] = 3;
	} else {
		$project_tmin_status[$tmin]['status'] = 0;		
	}

	$updated = update_post_meta( $pid, sprintf('%s_status', $tm), json_encode( $project_tmin_status ) );
	
	$tmStep = implode('-', [ $tm, $tmin ]);
	
	$existing = $wpdb->get_row( $wpdb->prepare( "SELECT id FROM `wp_noste_notifications` WHERE `tm` LIKE %s AND `status` = 'active' ORDER BY `id` DESC", $tmStep ) );

	if ( !empty($updated) && !empty($existing) ) {

		$updated_status = $wpdb->update(
			'wp_noste_notifications',
			array( 'status' => 'deactived' ),
			array( 'id' => $existing->id ),
			array( '%s' ),
			array( '%d' )
		);

		if ( $updated_status ) {
			wp_send_json_success([
				'permalink' => get_the_permalink( 66 )
			], 200);
		}
	} else {
		$error = new WP_Error( '001', "Already Updated!!!" );
		wp_send_json_error( $error );		
	}

	wp_die();
}


function update_comment_box() {

	if ( empty($_POST['tm']) || empty($_POST['tmin']) || empty($_POST['comments']) || empty($_POST['post_id']) ) {
		$error = new WP_Error( '001', "Please reload again!!!" );
		wp_send_json_error( $error );			
	}

	recursive_sanitize_text_field($_POST);

	$post_id = $_POST['post_id'];

	$project_tmin_status = !empty( get_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), true ) ) ? json_decode( get_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), true ), true ) : [];

	$project_tmin_status[$_POST['tmin']]['comment'] = $_POST['comments'];

	if ( !empty($_POST['update_status']) ) {
		$project_tmin_status[$_POST['tmin']]['status'] = 2;
	}

	$updated_status = update_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), json_encode( $project_tmin_status ) );


	if ( !empty($_POST['update_status']) ) {

		if ( $updated_status ) {

			/* Notification */
				$user_id = !empty(get_field('valvoja', $post_id)) ? get_field('valvoja', $post_id)['value'] : 0;

				if ( !empty($user_id) ) {
					$project_header_info = [
						'tmin' => $_POST['tmin'],
						'tm' =>  $_POST['tm'],
					];
					$notify = noste_send_form_notification( 
						get_current_user_id(), 
						json_encode( $project_header_info ), 
						$post_id, 
						$user_id,
						$_POST['tm'],
						'active'
					);

				}
			/* Notification */
			
			if ( $notify ) {
				wp_send_json_success([
					'status' => $_POST['update_status']
				], 200);
			} else {
				$error = new WP_Error( '001', "Updated but Didn't update notification!!!" );
				wp_send_json_error( $error );				
			}
			
		} else {
			$error = new WP_Error( '001', "Already Updated!!!" );
			wp_send_json_error( $error );		
		}	

	} else {
		wp_send_json_success([
			'status' => $_POST['update_status']
		], 200);
	}


}


function update_valvoja_step_status(){

	if ( empty($_POST['tm']) || empty($_POST['tmin']) || empty($_POST['valvoja_status']) || empty($_POST['post_id']) ) {
		$error = new WP_Error( '001', "Please reload again!!!" );
		wp_send_json_error( $error );			
	}

	recursive_sanitize_text_field($_POST);

	$post_id = $_POST['post_id'];

	$project_tmin_status = !empty( get_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), true ) ) ? json_decode( get_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), true ), true ) : [];

	$project_tmin_status[$_POST['tmin']]['status'] = $_POST['valvoja_status'];

	$updated_status = update_post_meta( $post_id, sprintf('%s_status', $_POST['tm']), json_encode( $project_tmin_status ) );

	if ( $updated_status ) {
		wp_send_json_success([
			'status' => $_POST['valvoja_status']
		], 200);
	}

}