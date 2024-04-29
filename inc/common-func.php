<?php 

add_action( 'wp_ajax_project_status_change', 'noste_project_status_change');
add_action( 'wp_ajax_create_a_project', 'noste_create_a_project');

add_action( 'wp_ajax_esitietolomake_form', 'noste_esitietolomake_form');
add_action( 'wp_ajax_noste_update_project_step', 'noste_update_project_step');

add_filter('acf/load_field/name=projektipaallikko', 'noste_project_projektipaallikko');
add_filter('acf/load_field/name=valvoja', 'noste_project_valvoja');

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

function noste_custom_checkbox_checked( $checked = '', $current = '' ) {
	return noste_checked_with_json($checked, $current) ? '' : 'hidden';
}

function noste_project_status_change(){
	$status = !empty($_POST['status']) ? $_POST['status'] : '';

	if ( !empty($status) ) {

		$user = wp_get_current_user();

		if ( $status == 'all' ) {

			if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) {
			    $projects = get_posts([
			        'post_type' => 'projektitiedot',
			        'numberposts' => -1,
			        'fields' => 'ids',
			    ]);
			}

		} else {

			if ( array_intersect( [ 'editor', 'administrator' ], $user->roles ) ) {
			    $projects = get_posts([
			        'post_type' => 'projektitiedot',
			        'numberposts' => -5,
			        'fields' => 'ids',
				    'meta_query'    => array(
				        'relation'      => 'AND',
				        array(
				            'key'       => 'projektin_tila',
				            'value'     => $status,
				            'compare'   => '=',
				        ),
				    ),			        
			    ]);
			}

		}

		$output = [];

        if ( !empty($projects) && is_array($projects) ) {
        	foreach ($projects as $id) {
        		$output[$id]['projektin_tila'] = !empty(get_field('projektin_tila', $id)) ? get_field('projektin_tila', $id) : '';
                $output[$id]['projektinumero'] = !empty(get_field('projektinumero', $id)) ? get_field('projektinumero', $id) : '';
                $output[$id]['projektipaallikko'] = !empty(get_field('projektipaallikko', $id)) ? get_field('projektipaallikko', $id)['label'] : '';
                $output[$id]['valvoja'] = !empty(get_field('valvoja', $id)) ? implode(', ', array_column(get_field('valvoja', $id), 'label')) : '';
                $output[$id]['projektin_valmistelu'] = !empty(get_field('projektin_valmistelu', $id)) ? get_field('projektin_valmistelu', $id) : '';
                $output[$id]['title'] = get_the_title( $id );
                $output[$id]['permalink'] = get_the_permalink( $id );
                $output[$id]['projektin_tila
'] = get_the_permalink( $id );
        	}
        }
		echo json_encode( $output );
	}

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
	                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
	                    <defs>
	                        <pattern id="pattern1" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
	                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAADiElEQVR4nO2dv4sTQRiGJwqKNgpaCRa2FidYW1mIglq5BwdmJkmxoJeZeNn5jM2xra2lvZV/gWBrF1s78cedIsiBjRyCyMncBczhXbK5ZHe+nXkf2C5Hhn1m5su7NzMrBAAAAAAAAAAAAAALpLFL0tAzaeibNPa71I/v+W5TdKhe76zU9oEydqgM7ey/7Jbv9sVCo9XNrktjXyhN2/+L2LvcKPHd0KBp9fsXlbHrytCHwySMy2jp7I7vNgdHkucn3I2Vml4qbX9PlKDtH2XotexZmaytnfLd9qBo6+yyMvap6+nTRoMydtN99n43u+S73UGRpoMzylAqDb2ZPiXRLzdq3OhJkuS477aHRKNpBteUsc+Vpp8FRLyTmgbN1SfnfDc82gKtjN3ayxd2aRHfjbwyQmt9UupsWWn7alSAJxfo3c9ly+7vxJwgrxzQI5WxW9NHgxsxdt2NoHklIK8U7pG0/9K07UKeC3vuJs5rAXmFQYFOkFf+0VmlC+7GKkPvp0rQ9MMJaz2iq2IBIK8w6JEp8gqLHtlAXqlZgVZl5hVNG7Kb3RLcH3GP3Yxh09BDJy/UvCI1bYiqibRAN4pOh6IKYi3QnRk6X2VCZI/uFuuR1SdoxWE6rFyIsV+LFOg8z4+FUKDVjI9vKhcyKUGv9PvnY58OlW8hvnukqHw6pLeTpkPvQmIo0HKGX4d1FHKkBL3icTpM0/x00e+ojZBY8oriLKTuBTooIfXIKzSxQIclhHleaXcHV0QJsBUSQoEOWkgAeSUsIbH8x08FLKThK6/MQ3BCOh7zyiIIQgjXAh2lEE95pTTqL6TCvFIFtRfCuUAfheCEyAXlFV8EJ0TUHAhhBoQwA0KYASHMgBBmQAgzIIQZEMIMCGEGhDADQpgBIcyAEGZACDMghBkQwgwIYQaEMANCmAEhjHALNCDEM9MWgpfeAKw6EcIt2iu0U0vTFwgpkVnPZmwaui3KRmr7cXy9bejrshLuZzO6Q7lGW4c3lbY3QxUime/Umpk6CklrtFMrZCGNKM5m5C6kU/OdWkEISbgX6FiEtPGyF/9C0pALNIe8UjRBR1GgOeQVrmczBsdRhSQxF2hOQtoo0P6FpCjQ/oXkKNA8hHRiS9DcOKQA71T1dgMwRYg6/OcqXpdaBdEnaG5IQ58OGA3D3ZekLPC0UFBUiLY3dh+zaPsZCRoAAAAAAIhS+AvZbGLmOWuKzwAAAABJRU5ErkJggg==" />
	                        </pattern>
	                    </defs>
	                    <rect id="icons8-layers-100" width="23" height="23" fill="url(#pattern1)" />
	                </svg>    
	                Kaikki
	            </button>
	        </li>
	        <li class="flex item-center justify-center" data-status="Aktiivinen">
	            <button class="tab_list_btn flex flex-wrap gap-x-2 px-3 py-1 rounded-3xl">
	                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
	                    <defs>
	                        <pattern id="pattern2" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
	                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACH0lEQVR4nO2aMU4DMRQFfVMEFceIqeNIsMdFIdRsEQlIMuPvN9IW6R4zdiRWaS2EEEJ4MH1sl0mfz8Npe2rVEIi9/PU5HD+++ml7bZWgpfZEqRWkV7sp+z+uyenVo1QJ0qtEKRDkvP/8dnx/abMye5DD2J73Uaa+KbMHaa21UlEqBCkVpUqQMlEqBSkRpVqQ6aNUDDJ1lKpBpo1SOciUUaoHmS7KCkGmirJKkGmirBRkiiirBdFHWTGIOsqqQbRRVg6ijDJ7kH6/54z87itBtmtRPhPEc0OYbwx8wC9JkMXo9AHFB8jAfeADZOA+8AEycB/4ABm4D3yADNwHPkAG7gMfIAP3gQ+QgfvAB8jAfeADZOA+8AEycB//HfDol339zm9rE2QkSG7IFXJDRm6I60TIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7mP1dVpP5wAckyI1JkJ/khox8ZblOhAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuI/Z/1PvN37XlSAjQXJDrpAbMnJDXCdCBu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3sB+TZEqSLD0JuyOAjJMjgxWuChBBCaKvzDQGUurXKthVmAAAAAElFTkSuQmCC" />
	                        </pattern>
	                    </defs>
	                    <rect id="icons8-file-100_2_" data-name="icons8-file-100 (2)" width="23" height="23" fill="url(#pattern2)" />
	                </svg>

	                Aktiivinien
	            </button>
	        </li>
	        <li class="flex item-center justify-center" data-status="Arkistoitu">
	            <button class="tab_list_btn flex flex-wrap gap-x-2 px-3 py-1 rounded-3xl">
	                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23" height="23" viewBox="0 0 23 23">
	                    <defs>
	                        <pattern id="pattern3" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
	                            <image width="100" height="100" xlink:href="data:image/png;base64,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" />
	                        </pattern>
	                    </defs>
	                    <rect id="icons8-closed-topic-100" width="23" height="23" fill="url(#pattern3)" />
	                </svg>
	                Arkistoitu
	            </button>
	        </li>
	    </ul> <!-- tab_box -->
	</div> <!-- Tab Fuild -->

	<?php elseif ( ( is_single() && 'projektitiedot' == get_post_type() ) || is_page( 62 ) ) : ?>
        <!-- Tab Fuild -->
        <ul class="flex flex-col sm:flex-row flex-auto items-center justify-between rounded-sm md:rounded-md bg-white border border-line" id="buttonList_2">
            <li class="flex item-center md:justify-center w-full md:w-auto md:border-r border-line">
                <button class="text-sm text-left">
                    Projektin valmistelu
                </button>
            </li>
            <li class="flex item-center md:justify-center w-full md:w-auto md:border-r border-line">
                <button class="text-sm text-left">
                    Rakentamisen valmistelu
                </button>
            </li>
            <li class="flex item-center md:justify-center w-full md:w-auto md:border-r border-line">
                <button class="text-sm text-left">
                    Rakentamisen käynnistäminen
                </button>
            </li>
            <li class="flex item-center md:justify-center w-full md:w-auto md:border-r border-line">
                <button class="text-sm text-left">
                    Rakentaminen
                </button>
            </li>
            <li class="flex item-center md:justify-center w-full md:w-auto">
                <button class="text-sm text-left">
                    Rakennustöiden vastaanotto ja toimeksiannon lopetus
                </button>
            </li>
        </ul> <!-- tab_box -->
	<?php 
	endif;

	return ob_get_clean();
}


function noste_header_notification(){
	ob_start();

	if ( is_page( [ 20, 66 ] ) ) :
	?>
		<a href="<?php echo esc_attr( get_permalink( 66 )  ); ?>">
		    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6" viewBox="0 0 32 32">
		        <defs>
		            <pattern id="pattern5" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
		                <image width="100" height="100" xlink:href="data:image/png;base64,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" />
		            </pattern>
		        </defs>
		        <rect id="icons8-time-machine-100" width="32" height="32" fill="url(#pattern5)" />
		    </svg>
		</a>

	<?php elseif ( ( is_single() && 'projektitiedot' == get_post_type() ) || is_page( [ 62, 64 ] ) ) : ?>

	<?php 

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


	}

	 ?>
        <a href="<?php echo esc_attr( $esitietolomake_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00" style=" width: auto; height: 20px;"> <path fill="#08202c" d="M 62.79 19.56 C 62.27 19.30 61.75 19.23 61.23 19.36 C 60.96 19.43 60.77 19.33 60.66 19.08 C 60.63 19.00 60.64 18.92 60.70 18.83 C 60.78 18.73 60.88 18.70 61.00 18.74 C 61.70 18.99 62.37 18.91 63.00 18.52 C 63.30 18.33 63.63 18.24 63.98 18.23 C 64.95 18.20 65.90 18.18 66.82 18.17 C 122.29 17.92 178.16 17.89 234.43 18.10 C 235.52 18.10 236.46 18.27 237.26 18.62 C 237.73 18.81 237.81 19.11 237.52 19.52 C 237.27 19.87 237.30 20.17 237.61 20.43 C 237.97 20.72 238.31 20.70 238.62 20.36 C 238.95 19.99 238.98 19.61 238.70 19.22 C 238.50 18.94 238.57 18.80 238.91 18.81 C 239.00 18.81 239.08 18.86 239.14 18.96 C 239.20 19.05 239.19 19.12 239.11 19.19 C 238.92 19.36 238.83 19.56 238.86 19.79 C 238.88 19.93 238.93 20.06 239.02 20.18 C 239.63 21.05 239.93 22.33 239.94 24.00 C 239.97 31.75 239.99 39.47 240.00 47.18 C 240.01 47.62 240.36 47.98 240.80 47.98 C 243.05 47.97 245.46 48.02 248.01 48.12 C 248.32 48.13 248.61 48.20 248.87 48.31 C 249.29 48.51 249.38 48.82 249.13 49.24 C 248.85 49.72 248.97 50.33 249.41 50.66 C 249.82 50.97 250.24 51.01 250.69 50.77 C 251.26 50.47 251.94 50.88 251.94 51.52 L 252.00 76.97 C 252.00 77.51 252.43 77.95 252.97 77.96 L 260.58 78.12 C 261.23 78.13 261.63 78.83 261.32 79.40 L 261.17 79.67 C 261.01 79.96 261.06 80.33 261.31 80.56 C 261.82 81.02 262.24 81.10 262.58 80.79 C 263.12 80.30 263.99 80.74 263.99 81.50 L 263.99 172.71 C 263.99 173.39 264.53 173.94 265.21 173.95 L 278.67 174.11 C 278.87 174.11 279.06 174.21 279.18 174.37 C 279.57 174.88 279.58 175.33 279.23 175.71 C 279.07 175.88 279.08 176.15 279.25 176.32 C 279.49 176.55 279.75 176.71 280.03 176.78 C 280.26 176.84 280.49 176.70 280.55 176.48 C 280.60 176.31 280.69 176.21 280.84 176.18 C 280.96 176.15 281.09 176.21 281.15 176.33 C 281.69 177.39 281.96 178.49 281.97 179.62 C 281.98 208.79 282.00 238.08 282.03 267.47 C 282.04 272.48 281.77 276.88 281.24 280.66 C 281.17 281.16 280.92 281.30 280.50 281.08 C 280.46 281.05 280.42 281.04 280.37 281.04 C 280.14 281.03 279.92 281.07 279.71 281.17 C 278.66 281.69 277.42 281.95 276.00 281.95 C 191.91 282.00 107.04 282.01 21.38 281.98 C 21.00 281.98 20.74 281.58 20.90 281.24 C 21.19 280.61 21.22 280.01 21.01 279.43 C 20.89 279.10 20.65 278.92 20.30 278.89 C 19.79 278.86 19.30 278.92 18.85 279.06 C 18.33 279.22 18.07 279.03 18.07 278.49 C 17.93 243.43 17.96 210.06 18.15 178.37 C 18.15 177.75 18.31 177.15 18.64 176.58 C 18.75 176.38 19.02 176.34 19.18 176.50 C 19.73 177.05 20.30 176.99 20.88 176.33 C 21.18 175.99 21.13 175.72 20.72 175.51 L 20.36 175.32 C 19.97 175.12 19.97 174.93 20.37 174.75 C 21.06 174.44 21.42 174.11 22.25 174.09 C 26.83 173.98 31.21 173.96 35.40 174.02 C 35.82 174.03 36.03 173.82 36.03 173.40 C 35.98 142.45 35.98 112.21 36.04 82.67 C 36.04 82.01 36.21 81.37 36.56 80.74 C 36.81 80.27 37.08 80.27 37.36 80.72 C 37.41 80.79 37.46 80.86 37.53 80.91 C 37.80 81.12 38.06 81.11 38.31 80.88 L 38.88 80.36 C 39.16 80.11 39.17 79.84 38.92 79.57 C 38.81 79.46 38.69 79.38 38.55 79.35 C 38.10 79.22 38.06 79.02 38.45 78.75 C 40.18 77.52 45.43 78.00 47.45 78.01 C 47.74 78.02 47.97 77.78 47.97 77.49 L 48.06 51.54 C 48.06 51.30 48.15 51.07 48.31 50.88 C 48.83 50.29 49.22 50.24 49.47 50.73 C 49.60 50.98 49.92 51.05 50.15 50.89 L 50.97 50.29 C 51.19 50.14 51.21 49.96 51.04 49.75 C 50.89 49.59 50.73 49.47 50.54 49.40 C 50.11 49.23 50.08 49.01 50.46 48.74 C 52.18 47.52 57.28 48.00 59.44 48.00 C 59.79 48.00 59.96 47.82 59.96 47.47 L 60.08 21.50 C 60.08 20.75 60.92 20.31 61.52 20.73 C 61.89 21.00 62.36 20.85 62.91 20.30 C 63.22 20.00 63.18 19.75 62.79 19.56 Z M 228.01 30.84 C 228.01 30.38 227.63 30.00 227.17 30.00 L 72.83 30.00 C 72.37 30.00 71.99 30.38 71.99 30.84 L 71.99 47.16 C 71.99 47.62 72.37 48.00 72.83 48.00 L 227.17 48.00 C 227.63 48.00 228.01 47.62 228.01 47.16 L 228.01 30.84 Z M 240.01 60.72 C 240.01 60.32 239.69 60.00 239.29 60.00 L 60.71 60.00 C 60.31 60.00 59.99 60.32 59.99 60.72 L 59.99 77.26 C 59.99 77.66 60.31 77.98 60.71 77.98 L 239.29 77.98 C 239.69 77.98 240.01 77.66 240.01 77.26 L 240.01 60.72 Z M 182.36 175.12 C 182.71 174.73 183.17 174.49 183.76 174.40 C 185.43 174.16 187.04 174.04 188.59 174.04 C 208.44 173.98 229.38 173.97 251.39 174.01 C 251.73 174.01 252.00 173.74 252.00 173.41 L 252.00 90.75 C 252.00 90.33 251.66 89.99 251.25 89.99 L 48.75 89.99 C 48.33 89.99 47.99 90.33 47.99 90.75 L 47.99 173.24 C 47.99 173.67 48.33 174.01 48.76 174.01 C 69.12 173.98 90.79 173.99 113.76 174.05 C 117.50 174.06 119.43 176.06 119.74 179.60 C 120.27 185.56 121.76 190.72 124.21 195.09 C 134.31 213.05 159.41 214.90 172.67 199.56 C 177.57 193.91 179.76 186.27 180.39 178.78 C 180.47 177.87 180.78 177.06 181.31 176.37 C 181.65 175.94 182.00 175.53 182.36 175.12 Z M 117.97 206.10 C 113.92 200.96 110.36 194.01 109.82 187.23 C 109.80 186.94 109.62 186.69 109.35 186.58 C 108.34 186.16 107.31 185.95 106.25 185.95 C 80.41 186.02 55.27 186.03 30.84 185.98 C 30.71 185.98 30.59 186.01 30.48 186.06 C 30.16 186.23 30.00 186.49 30.00 186.84 L 30.03 269.15 C 30.03 269.73 30.32 270.02 30.90 270.02 L 269.25 269.99 C 269.68 269.99 270.02 269.65 270.02 269.22 L 270.03 186.76 C 270.03 186.32 269.67 185.97 269.23 185.97 C 244.30 186.01 219.12 185.99 193.69 185.91 C 192.58 185.90 191.56 186.14 190.61 186.62 C 190.32 186.76 190.17 186.99 190.16 187.31 C 190.00 190.14 189.30 192.98 188.07 195.83 C 183.52 206.32 176.34 213.85 166.53 218.42 C 162.16 220.45 157.80 221.60 153.45 221.86 C 148.27 222.17 143.87 221.83 140.26 220.86 C 131.22 218.41 123.79 213.49 117.97 206.10 Z M 279.63 279.35 C 279.35 279.76 279.37 280.15 279.70 280.51 C 279.91 280.74 280.28 280.69 280.42 280.41 C 280.66 279.96 280.59 279.57 280.21 279.26 C 280.03 279.11 279.76 279.16 279.63 279.35 Z"/> </svg>
        
        </a>
        
        <a href="<?php echo esc_attr( $kustannusseuranta_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 100.00 100.00" style=" width: auto; height: 20px;"> <path fill="#08202c" d="M 88.50 87.85 C 89.54 88.18 90.59 87.88 91.60 88.37 C 95.56 90.28 94.27 95.98 89.79 95.98 C 62.37 95.99 35.96 95.99 10.55 96.00 C 5.88 96.00 4.20 90.54 8.41 88.37 C 8.72 88.21 9.06 88.12 9.41 88.09 L 11.42 87.95 C 11.83 87.92 12.04 87.69 12.04 87.28 L 12.00 5.93 C 12.00 4.47 13.54 3.53 14.84 4.18 L 17.50 5.52 C 17.83 5.69 18.17 5.69 18.51 5.52 L 21.01 4.25 C 21.39 4.05 21.79 4.00 22.21 4.09 C 23.28 4.32 24.32 4.80 25.33 5.51 C 25.63 5.72 26.02 5.75 26.35 5.58 L 29.03 4.24 C 29.41 4.05 29.85 3.99 30.26 4.09 C 31.27 4.33 32.24 4.77 33.19 5.42 C 33.62 5.71 34.07 5.74 34.53 5.50 L 37.01 4.24 C 37.39 4.05 37.79 4.00 38.21 4.09 C 39.24 4.32 40.22 4.75 41.14 5.39 C 41.56 5.68 42.10 5.72 42.55 5.49 L 44.97 4.26 C 45.36 4.06 45.82 4.00 46.25 4.10 C 47.26 4.32 48.23 4.75 49.16 5.40 C 49.57 5.69 50.09 5.73 50.53 5.50 L 53.02 4.24 C 53.38 4.06 53.79 4.00 54.18 4.08 C 55.23 4.30 56.22 4.74 57.17 5.41 C 57.57 5.69 58.09 5.72 58.52 5.50 L 61.02 4.24 C 61.39 4.05 61.82 3.99 62.23 4.09 C 63.26 4.32 64.24 4.76 65.17 5.40 C 65.58 5.68 66.10 5.72 66.54 5.49 L 69.02 4.24 C 69.39 4.05 69.81 4.00 70.21 4.08 C 71.24 4.31 72.23 4.75 73.16 5.40 C 73.57 5.68 74.10 5.72 74.54 5.49 L 77.02 4.24 C 77.38 4.05 77.80 4.00 78.20 4.08 C 79.23 4.31 80.23 4.75 81.20 5.41 C 81.53 5.63 81.95 5.68 82.33 5.54 C 83.05 5.27 83.74 4.93 84.41 4.51 C 85.84 3.62 88.01 4.07 88.01 6.00 C 87.97 32.84 87.96 59.89 87.98 87.14 C 87.98 87.47 88.19 87.75 88.50 87.85 Z M 83.55 9.47 C 81.67 10.42 80.28 9.51 78.73 8.58 C 78.22 8.27 77.71 8.28 77.21 8.61 C 76.24 9.25 75.24 9.68 74.22 9.90 C 73.79 9.99 73.38 9.94 72.99 9.75 L 70.52 8.49 C 70.11 8.29 69.62 8.32 69.24 8.57 C 68.29 9.22 67.31 9.66 66.32 9.88 C 65.82 9.99 65.34 9.93 64.88 9.70 L 62.52 8.49 C 62.11 8.29 61.63 8.32 61.25 8.57 C 60.26 9.25 59.23 9.70 58.15 9.92 C 57.75 10.00 57.37 9.95 57.01 9.76 L 54.50 8.49 C 54.17 8.32 53.83 8.32 53.50 8.49 L 51.31 9.61 C 50.48 10.03 49.50 10.03 48.68 9.61 L 46.64 8.56 C 46.23 8.35 45.83 8.35 45.43 8.55 L 42.65 9.92 C 42.24 10.12 41.76 10.12 41.36 9.92 L 38.37 8.44 C 38.12 8.31 37.86 8.32 37.61 8.45 L 35.14 9.70 C 34.43 10.06 33.59 10.06 32.88 9.70 L 30.50 8.50 C 30.17 8.33 29.83 8.33 29.50 8.50 L 27.12 9.71 C 26.40 10.07 25.56 10.07 24.85 9.70 L 22.62 8.56 C 22.22 8.35 21.82 8.35 21.41 8.55 L 18.96 9.78 C 18.65 9.93 18.33 10.00 17.99 9.97 C 17.54 9.93 17.13 9.80 16.76 9.58 C 16.25 9.27 16.00 9.42 16.00 10.01 L 15.99 91.00 C 15.99 91.56 16.44 92.01 17.00 92.01 L 83.40 91.99 C 83.76 91.99 84.06 91.69 84.06 91.33 L 84.01 9.76 C 84.01 9.52 83.76 9.36 83.55 9.47 Z"/> <rect fill="#08202c" x="23.76" y="22.00" width="34.22" height="3.98" rx="1.94"/> <rect fill="#08202c" x="65.76" y="22.02" width="10.16" height="3.94" rx="1.88"/> <rect fill="#08202c" x="-13.11" y="-1.97" transform="translate(36.87,35.98) rotate(0.2)" width="26.22" height="3.94" rx="1.92"/> <rect fill="#08202c" x="65.77" y="34.02" width="10.12" height="3.94" rx="1.87"/> <rect fill="#08202c" x="23.76" y="46.02" width="34.22" height="3.96" rx="1.94"/> <rect fill="#08202c" x="-5.05" y="-1.96" transform="translate(70.82,47.99) rotate(-0.2)" width="10.10" height="3.92" rx="1.87"/> <rect fill="#08202c" x="-13.11" y="-1.98" transform="translate(36.87,59.99) rotate(0.1)" width="26.22" height="3.96" rx="1.93"/> <rect fill="#08202c" x="-5.05" y="-1.97" transform="translate(70.82,59.99) rotate(-0.4)" width="10.10" height="3.94" rx="1.87"/> <circle fill="#08202c" cx="26.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="32.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="38.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="44.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="50.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="56.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="62.00" cy="72.00" r="1.97"/> <circle fill="#08202c" cx="68.00" cy="71.99" r="1.96"/> <circle fill="#08202c" cx="73.97" cy="72.00" r="1.94"/> <rect fill="#08202c" x="-8.07" y="-1.88" transform="translate(67.85,81.97) rotate(0.1)" width="16.14" height="3.76" rx="1.70"/> </svg>
        </a>
        
        <a href="#!" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2">
			<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0.00 0.00 300.00 300.00" style=" width: auto; height: 20px;"> <path fill="#08202c" d="M 254.99 84.51 C 255.74 85.26 256.45 85.98 257.13 86.67 C 257.36 86.91 257.51 87.20 257.58 87.53 C 257.87 88.92 258.02 90.37 258.02 91.87 C 258.01 157.73 258.00 222.77 257.98 287.00 C 257.98 287.55 257.54 287.99 256.99 287.99 L 42.25 288.00 C 42.11 288.00 42.00 287.89 42.00 287.75 L 42.00 12.98 C 42.00 12.44 42.43 12.01 42.97 12.01 C 87.92 12.00 132.93 12.00 178.00 12.00 C 181.33 12.00 183.86 12.88 185.60 14.64 C 208.09 37.34 231.22 60.63 254.99 84.51 Z M 174.91 95.99 C 174.41 95.99 174.00 95.58 174.00 95.08 L 174.00 24.90 C 174.00 24.40 173.59 23.99 173.09 23.99 L 54.90 23.99 C 54.40 23.99 53.99 24.40 53.99 24.90 L 54.01 275.09 C 54.01 275.59 54.42 276.00 54.92 276.00 L 245.09 276.00 C 245.59 276.00 246.00 275.59 246.00 275.09 L 246.00 96.88 C 246.00 96.38 245.59 95.97 245.09 95.97 L 174.91 95.99 Z M 186.49 33.66 C 185.97 36.38 185.73 39.16 185.77 42.00 C 185.96 55.87 186.04 69.47 185.99 82.81 C 185.99 83.48 186.54 84.03 187.21 84.02 C 200.95 83.99 214.94 84.03 229.19 84.12 C 231.42 84.13 233.73 83.94 236.10 83.54 C 236.39 83.49 236.62 83.36 236.79 83.14 C 236.95 82.93 236.98 82.70 236.89 82.43 C 236.74 81.97 236.43 81.67 235.96 81.53 C 234.93 81.22 234.36 80.86 233.60 80.09 C 218.82 65.19 204.19 50.61 189.72 36.34 C 189.14 35.77 188.68 34.99 188.49 34.21 C 188.33 33.56 187.92 33.20 187.26 33.11 C 186.83 33.06 186.58 33.24 186.49 33.66 Z"/> <path fill="#08202c" d="M 203.77 153.16 C 204.14 151.59 204.44 150.06 204.66 148.58 C 205.02 146.15 205.94 143.95 207.41 141.98 C 211.29 136.80 219.20 136.82 223.83 140.92 C 225.84 142.69 227.53 145.51 227.97 148.19 C 229.06 154.87 224.84 159.35 218.76 161.26 C 216.41 162.00 214.84 162.47 212.96 164.34 C 211.22 166.07 209.56 167.88 207.99 169.76 C 199.68 179.71 191.97 189.39 184.84 198.80 C 183.89 200.05 182.92 201.37 181.94 202.77 C 180.85 204.32 180.21 205.81 180.02 207.25 C 179.71 209.68 179.62 212.04 178.75 214.38 C 176.58 220.21 172.14 222.67 165.43 221.74 C 162.19 221.30 159.81 219.45 158.30 216.20 C 157.06 213.53 156.26 211.01 155.91 208.64 C 155.60 206.53 154.46 204.31 152.49 201.99 C 140.80 188.14 131.13 177.23 123.48 169.28 C 121.27 166.99 118.67 166.93 115.66 169.09 C 113.79 170.44 111.76 172.95 109.75 174.75 C 105.90 178.19 102.28 181.93 98.89 185.97 C 97.50 187.62 96.48 189.39 96.02 191.47 C 94.17 199.82 90.56 205.46 80.83 203.59 C 75.45 202.55 71.99 197.28 72.01 192.01 C 72.02 187.82 74.41 183.27 78.62 181.88 C 80.09 181.40 81.25 180.66 82.81 180.48 C 85.16 180.20 87.27 179.35 89.13 177.92 C 94.91 173.47 100.49 167.77 105.86 160.82 C 106.88 159.50 107.58 158.01 107.96 156.36 C 109.27 150.72 111.67 144.96 118.23 144.12 C 127.60 142.91 131.20 150.18 132.36 157.97 C 132.55 159.24 133.29 161.05 134.06 162.08 C 135.93 164.55 137.80 166.88 139.68 169.06 C 146.35 176.79 153.27 184.53 160.44 192.28 C 162.18 194.16 164.80 197.68 167.33 198.16 C 168.62 198.41 169.97 197.67 171.39 195.95 C 179.09 186.62 187.06 176.80 195.31 166.48 C 197.62 163.58 199.62 160.25 201.80 157.21 C 202.81 155.79 203.47 154.44 203.77 153.16 Z"/> </svg>
        
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
	    'role__in'  => [ 'subscriber'],
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


// function noste_update_project_step() {
// 	check_ajax_referer( 'project_step_form_validation', 'project_step_form__nonce_field' );

// 	if ( empty($_POST['ptname']) ) {
// 		$error = new WP_Error( '001', 'PT NAME ISSUE' );
// 		wp_send_json_error( $error );
// 	}

// 	if ( empty($_POST['post_id']) ) {
// 		$error = new WP_Error( '002', 'Invalid Project' );
// 		wp_send_json_error( $error );
// 	}

// 	$field_key = $_POST['ptname'];
// 	$post_id = $_POST['post_id'];

// 	unset($_POST['ptname']);
// 	unset($_POST['action']);
// 	unset($_POST['project_step_form__nonce_field']);
// 	unset($_POST['_wp_http_referer']);

// 	$data = serialize($_POST);

// 	if ( empty($data) ) {
// 		$error = new WP_Error( '001', 'Conent Data issue' );
// 		wp_send_json_error( $error );		
// 	}

// 	$updated = update_post_meta( $post_id, $field_key, $data );

// 	if ( $updated ) {
// 		wp_send_json_success($_POST, 200);
// 	}

// 	wp_die();	
// }


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
	$response = (object) ['template' => false, 'submission' => []];

	if ( empty($_POST['ptname']) ) {
		$error = new WP_Error( '001', 'PT NAME ISSUE' );
		wp_send_json_error( $error );
	}

	if ( empty($_POST['post_id']) ) {
		$error = new WP_Error( '002', 'Invalid Project' );
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


	$ref_queries = (array) json_decode( preg_replace( '/[\x00-\x1F\x80-\xFF]/', '', stripslashes(html_entity_decode(isset($_POST['ref_queries'] ) ? $_POST['ref_queries'] : '{}' ) ) ), true);

	$step_id = $ref_queries['tm'] ?? false;
	$form_id = $ref_queries['tmin'] ?? false;

	$response->submission = $_POST;

	$template = implode('/', (array) [$step_id, $form_id]);
	$template_path = get_template_directory() . '/template-preview/' . $template . '.twig';
	// $template_path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $template_path);
	
	if (!file_exists($template_path)) {
		$myfile = fopen($template_path, "w+") or wp_send_json_error(new WP_Error('009', "Unable to open file! " . $template_path ));
		$text = '<div class="noste_pages">
					<div class="single-page">
						<div class="page-wrap">
							<div class="page-header">
								<img src="{{ locale_args.thumbnail }}" alt="Logo" />
							</div>
							<div class="page-body">
								Preview template not found!
							</div>
							<div class="page-footer">
								<span class="page-footer-pagination">1/1</span>
							</div>
						</div>
					</div>
				</div>';
		fwrite($myfile, $text);
		fclose($myfile);
	}
	if (file_exists($template_path) && !is_dir($template_path)) {
		$response->template = str_replace([ABSPATH], [site_url('/')], $template_path) . '?v=' . filemtime($template_path);
	} else {
		$response->template = get_template_directory_uri() . '/template-preview/blank.twig';
	}

	/**
	 * Added to pass global keywords according to form_ids
	 * @author Remal mahmud
	 * 
	 * @date 28 April, 2024 12:40PM
	 */

	foreach ($global_data as $k => $v) {
		unset($_POST[$k]);			
	}

	$data = json_encode( $_POST );

	if ( empty($data) ) {
		$error = new WP_Error( '001', 'Content Data issue' );
		wp_send_json_error( $error );		
	}
	
	$updated = update_post_meta( $post_id, $field_key, $data );

	/** Remal Added this line due to a issue with his server. */
	wp_send_json_success($response);
	// 
	if ( $updated ) {
		wp_send_json_success($response);
	} else {
		$error = new WP_Error( '000', 'Something went wrong!' );
		wp_send_json_error($error);
	}
}


function noste_form_header($type = 'form') {
	include 'header_helpers.php';ob_start();
	$columns = ['Projektin valmistelu', 'Rakentamisen valmistelu', 'Rakentamisen käynnistäminen', 'Rakentaminen', 'Rakennustöiden vastaanotto ja toimeksiannon lopetus'];
	if (isset($forms_params) && is_array($forms_params) && isset($forms_params[$_GET['tm'] . '-' . $_GET['tmin']])) {
		$breadcrumb = $forms_params[$_GET['tm'] . '-' . $_GET['tmin']];
	}
	$breadcrumb = (object) wp_parse_args($breadcrumb, [
		'column'		=> 0,
		'step'			=> $_GET['tm'],
		'form'			=> $_GET['tmin'],
		'form_title'	=> '',
		'form_version'	=> '',
	]);
	?>
		<div class="card_header flex flex-col md:flex-row items-center md:justify-between px-4 md:px-8 py-6 border-b border-line top-0 z-10">
	        <div>
	            <p class="text-sm font-normal text-[#586B74] mb-1">Project nimi</p>
	            <!-- Breadcrumb -->
	            <nav class="flex justify-between" aria-label="Breadcrumb">
	                <ol class="inline-flex flex-wrap items-center mb-3 sm:mb-0">
	                    <li>
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html(isset($columns[$breadcrumb->column])?$columns[$breadcrumb->column]:''); ?></span>
	                    </li>
	                    <span class="mx-1 md:mx-2 text-black">/</span>
	                    <li aria-current="page">
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html( isset( $steps_names[$breadcrumb->step] ) ? $steps_names[$breadcrumb->step] : '' ); ?></span>
	                    </li>
	                    <span class="mx-1 md:mx-2 text-gray-400">/</span>
	                    <li aria-current="page">
	                        <span class="text-xs md:text-sm font-medium text-black"><?php echo esc_html( !empty($breadcrumb->form_version) ? $breadcrumb->form_version : $breadcrumb->form_title ); ?></span>
	                    </li>
	                </ol>
	            </nav>
	        </div>

	        <button class="btn gap-2 border border-line bg-[#E9E9F0] print-btn hidden">
				<i class="um-icon-ios-printer-outline"></i>
				Luonnos
	        </button>
	    </div>
	<?php
	return ob_get_clean();
}
function noste_form_footer($type = 'form') {
	$edit_url = add_query_arg([
	    'tm' => $_GET['tm'],
	    'tmin' => $_GET['tmin'],
	], get_permalink( get_the_ID() ) );

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

		<!-- Card footer -->
		<div class="card_footer p-4 border-t border-line">
            <div class="flex items-center justify-between">
                <a href="<?php echo esc_attr( site_url( remove_query_arg(['tmin']) ) ); ?>" class="btn gap-2 border border-line">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                        <defs>
                            <pattern id="pattern13" width="1" height="1" patternTransform="matrix(-1, 0, 0, 1, 40, 0)" viewBox="0 0 20 20">
                                <image preserveAspectRatio="xMidYMid slice" width="20" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO3dQYrVQBhF4ecKFVF6oHu5dZ12SuiK6xNUeiC6A4UnDxyI9jwHcz4IZPjDISGTP3W5SJIkSdJ/rnN/3bm+da7HbOvF0fOc2vV6fTa29b1zv/6+foxt3R0916l1rq9/BDHK0XK/Xt6eDKOA5P7h1d9RxrZ+vpvr7dGznZZRgIwCZBQgowAZBSh+ffHEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPDEKT4zCE6PwxCg8MQpPjMITo/DEKDwxCk+MwhOj8MQoPGNbd08torpHz4vy5ciZTm08EWTM9fnouU5p+Mqi/Xtl/2dnfmwPb46e7XRqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMjhqDo8bgqDE4agyOGoOjxuCoMThqDI4ag6PG4KgxOGoMDmOAGAPEGCDGADEGiDFA+v7Dcw8nBrmtGntSNEjnevQsddora9s/jbl/vN0fPY8kSZIkXU7uFxa7dmp7vSU5AAAAAElFTkSuQmCC" />
                            </pattern>
                        </defs>
                        <rect id="icons8-arrow-100" width="20" height="20" fill="url(#pattern13)" />
                    </svg>
                    Takaisin
                </a>

                <button class="btn gap-2 border border-accent bg-accent text-white" type="submit">Hyväksy</button>
            </div>
        </div>
	<?php
	return ob_get_clean();
}