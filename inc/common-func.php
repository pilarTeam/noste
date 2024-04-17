<?php 

add_action( 'wp_ajax_project_status_change', 'noste_project_status_change');
add_action( 'wp_ajax_create_a_project', 'noste_create_a_project');
add_filter('acf/load_field/name=projektipaallikko', 'noste_project_projektipaallikko');
add_filter('acf/load_field/name=valvoja', 'noste_project_valvoja');


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
	                            <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAALJElEQVR4nO1dC7AcRRVtUAEV/wii+EGFUlHKHwIKaCr+UiKKiIC/mPJDFYplKYofyu7el5D3Mrf37dw7L/FhFSkJYoz/gBSFRkoLlEriPxgTNIpBIESNETAJgTzrzqy62zO7O7M70/ubUzVVr957/Zm+031v3773tBAlSpQoUaJEiRIlSpQoUaIJE8v850mgMxXQxQpwWhv8ngbcoAz9QRvargz+Qxvaz0/95+3h3wA38P9yGS6rPXwL19Vce4m2mJ2dfZQ2/ms14OcV0FoFdK82NJfnw3WGdRv6HLfFbZZiaYAx5tG66r9VGZzVBnfkLYCOAopm1ZqKwfdPTU09bmyFo72Zk5ShlRrwAddC0K0e7gvglbJKrxTjACnlIcrQImVwffovmP6lDd6kga7gZUYBnqen6VRpgufLSf+YpUuXP0lK+Uh+wp8n/WP4b/w/FUPnh2UMfpnriOpKPXPWqyot5D6LUcOaNWsewS+ngf7UeTBwpwL6ijL44Yqhl3DZPPshl82cWAH6iDZ4lQL8W4oPYpvygvdJKQ8WowAJ+HZt6LYOL75dG6xJj16XpwA6gdvSxp+ngPyoD+2MAdwkgc4Sw4rF1erR2tC32rzkwxroB9rQubzc9Lu/UsqDZRVfzwpeAT7UZsZcNwEzzxTDgrm5uYOUwQuVwX+2+NIeZIuK13kxoKhM1Y6L9E64v0lQ/rSLl1R+VzHIYKWqAb/fckYYunqQBZEoGMCv1vuepO+uldPTTxSDCFaW9d1zkjm5QU4HLxVDigr4L1OGNrZ4t9vZ+BCDhEo1eJcydH+yXU+fdKmoiwLrOQ10SdK+id+dx0AMAiITMj6llaFfjKLvSPIeB/CXSUsy65W+dk4BfVQBHogrblolZ2cfI0YUUq48rK70bYPlAK8IfemUBvxsQoce0gYvEmMCbfCiRBMZ8DNOO8Lui4SZsY/3FGLMoKvB2xTQXnumVAy+10kHpBecYXegrrzf5KQDQogltdpRvNdhE1sB/k4D3scP/8wbN9Zr0lt+pKv+aA8X2Mqex0hCcFqhDbOS1kB/tzd6GugNwgGkMU9mF0vYZmcH4T4+nOIyLvrGH6S9kWRf2YSHxxZm9inAnyZYU4uEA+gqns6OxxSCsA2Mewv/UutQBj+Y0P7NhZj92tAXE5S4zr2hBLBuii2T2YSy15V+0wYXJ7T/hXwb8WZOik1Hgze68OVoLzg5SRgK6PfK4Kcq1eAEGQSHh49XezH/jv+W4ObYw+/hwkmpDP7QXtYr4L8iT2ehdaCEO+UUPV0UDOn7j1eAd9qmtTL46XYeYj4nV4YutU1SZfAvLo5p+ZAspmsN3prLB1wx9O6EZeBs4QDakLJ3w9rQORnKn2N7ERSgFA4gPf+d9rjxCWZvlcqVh8VP+fBa4QCTk7NPSDhyVVnr0YYqzSY67eaZJxxAGbreMoC2+b5/aNcVaoMftwZkf2V65oXCASqGzre+7Dv5A+kmqsVe9lw5AqXnvyhuCtPFPSgn2mrNjkA4gorOIXqaHQ11aWtQVglH0AaXW2O4pStdIk3wZttSWGxWPEM4ggL8TdOLeMHJ3dbFESiWQH4lHCFU8PbJYzdejYSTv2sK6XGr9k3zJvByoqd0W9cS33+qvVkUDqEAv261vzZTBRJmj7BNRgn+q4VDaMs66sVk5OXXttby7W2H9iE4zTbdM31gHIdkVbBJOIa2TMZBqy8rQido05j67+l+ihlaIhxDj5hANOBkVyqgfna8q6nwNJ0qHEOPmEDsZYt38qni0TiCwlaARYdR1u31daG/Ke4VKPjBPex74j4UHk5rha6yH65jQQV4gbVcXV9kR3mjORAR8IAPSMAXFPmuyuANmV0prC8sgUwV2Ul2xfRdGMbNx6cMetbsXNy5ENDarq2BLmB7RXWfZ0mR72pbr5xy17mQFaFXdPKKPSjCMVy2Lw2+yvoANnTuIODtTQIpOBZ3nARSmaodZy2RWzsWshMt2e1QZCfHSSDSW36ktWTt6FjIPi7tyX+fAuMkEN/3D23Wz7Q3TQebPJPdnEFkwTgJRPKBX/MM2dO5gxx01lCIM6GK7ORYCWRZ8DRrhtyTooN4d9MMKXgH28uAzM3NHcQHVwroruhBmdUr7FQgQMdbM2RLx0KcRtBUqIqvKbKTvQxIJUqFaCpfAfqQq/azgg/Zmq0sXJ9551x00HAvA6KZ9yS2wUux2cqp/axgtgirve907iAQWC9YG1iBAH3JLq8AV7hqPyviY0uVjoUqgB+wFM/NhXayhwGZ8PDYJiME8D45Pf0cV+1nBUd7Zo5+4XDM5nWO7i8yR7DXAdGGNjeU3+y6/UwkBZbfLlVIVRg6alNOVPH0ojo6LgKRXnCGpQp2pv7QtaFvWMvWzMAKBPDnDbN5o+v2u3W9Z4oNY8vKkuaOougveh2QSqTzIka5Ki103X76dnCLZXycl7owsxPE09aKyZLKY0CW1GpH8dOv9juBSXUsYTyYmQFCG1ptKffriuisSyunX+3bJDwK8JvZK4Fgvt3ZIhJeRl0gslZ7VpzExp/XXWeBftZTCGSaNkZcIBroCquN27qOwqxnljZOtQN8DJlrh0dYIJIJeeJZXBf2VKk2dItlcf06Tx7CNDR7ekiDHOoEbY16eGvPtLR1lrW5otLC7CgXPSJhQIWmAnIcqlXxvrw4okYxUG7CC55th+MqoJ+IvMCh8/bBFSsnzgPMLZQ0nN7Yr1DSG/NK1YuINfHHljD25k5yVmcXtaY43jAIBJaDhHh0YripLoayifl0E74wZ3mHw0DXlDAL1xUWrB5mtBq8NUEZXirGHBLorJiJC3RP4ZSyYbpbEtkl4KQYU0igM239p4D+LY1/ipMORJaRldRTd9OPDCV3SoT88nG6qIddsV38D3z3Rgty+6tHmW+xEdrQJxKoOw4wF6XoBzgyvgWH1WY+ChYjChkEhyvAr8VXCKY9xI/1tXOclqUN/jVBpzDl3gVixCCj9LukywX2O+NZ7ARZXf5cO+23QTBX5rWB7P91THhZIpEa0G6+JUgMEjzPeyzfyZEsFLpDDDGk8U+JUX00X2NxvBhUMO8gm3y2n0gMISrV4AQF+O0ksuj6s5r1iRh0cDxwP7lFekVIFQi0qtWtCNFNb0OkH+1gO1aCYsAhpTwk4uhqdgwmmvUwe4QYJoT3TTlMN+4po8nDBWmu7At5JyGYL4YRNmlXlgMtyZmqITUUXsbBAHnS8fEsYAXNGzqO/Eh5axubuGcP/G06HVhM/9xNTNcEH+zEz114Hd/MhDgKaCIM6YdgPi+LnJHEt/qwhcdso5xUySY4Xx4TUqJXaWHEJodXRU7R9OctCuhHTGQ59HefMD+tJYxdaRJHeXBVIt+uw4fvlmJ/XMFZY06hgMjSHytTkesDbuqHEOqpcCtk1X/jyF0iyUtH7HY2Dxd0tPUNbUtUooZ+2+4Ku64EEC2n1zDjKvviRto7zV7O5gHAne3CXsI1PuHuKgX43f+WYyGHO2VDizTg5TyYvL6HMwrojvByYT4KiJabuzTgH+sR8bewA5DJdCKSfH9e0RnFg3cNkMWPywT+rTKfOFa4xRKyduSWjj6eDTQqyN1sATX+D9PM8jWnMdfK/2dUbeitmkEA86HYEYjK0FL+W3iTc3jESatbXTnBeoepi0SJfNDCy1sNN3jsmm6raPGmrImaJToko7TxhrYTBGcUnTu0O+BBRHi/R4LJ2t7spI3MttBz0HGJOHjTl3I23B1tvujl5TgWBOnhO6yB3xftCUJGunWcqBJeX7ds5sRyWSpRokSJEiVE4fgP/0yNpcFYXqcAAAAASUVORK5CYII=" />
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
		$esitietolomake_url = home_url( add_query_arg(array($_GET), $wp->request ) );
		$kustannusseuranta_url = home_url( add_query_arg(array($_GET), $wp->request ) );
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4" viewBox="0 0 23 23">
                <defs>
                    <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                        <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACH0lEQVR4nO2aMU4DMRQFfVMEFceIqeNIsMdFIdRsEQlIMuPvN9IW6R4zdiRWaS2EEEJ4MH1sl0mfz8Npe2rVEIi9/PU5HD+++ml7bZWgpfZEqRWkV7sp+z+uyenVo1QJ0qtEKRDkvP/8dnx/abMye5DD2J73Uaa+KbMHaa21UlEqBCkVpUqQMlEqBSkRpVqQ6aNUDDJ1lKpBpo1SOciUUaoHmS7KCkGmirJKkGmirBRkiiirBdFHWTGIOsqqQbRRVg6ijDJ7kH6/54z87itBtmtRPhPEc0OYbwx8wC9JkMXo9AHFB8jAfeADZOA+8AEycB/4ABm4D3yADNwHPkAG7gMfIAP3gQ+QgfvAB8jAfeADZOA+8AEycB//HfDol339zm9rE2QkSG7IFXJDRm6I60TIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7mP1dVpP5wAckyI1JkJ/khox8ZblOhAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuI/Z/1PvN37XlSAjQXJDrpAbMnJDXCdCBu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3sB+TZEqSLD0JuyOAjJMjgxWuChBBCaKvzDQGUurXKthVmAAAAAElFTkSuQmCC" />
                    </pattern>
                </defs>
                <rect id="icons8-file-100_2_" data-name="icons8-file-100 (2)" width="23" height="23" fill="url(#pattern)" />
            </svg>
        
        </a>
        
        <a href="<?php echo esc_attr( $kustannusseuranta_url ); ?>" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4" viewBox="0 0 23 23">
                <defs>
                    <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                        <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACH0lEQVR4nO2aMU4DMRQFfVMEFceIqeNIsMdFIdRsEQlIMuPvN9IW6R4zdiRWaS2EEEJ4MH1sl0mfz8Npe2rVEIi9/PU5HD+++ml7bZWgpfZEqRWkV7sp+z+uyenVo1QJ0qtEKRDkvP/8dnx/abMye5DD2J73Uaa+KbMHaa21UlEqBCkVpUqQMlEqBSkRpVqQ6aNUDDJ1lKpBpo1SOciUUaoHmS7KCkGmirJKkGmirBRkiiirBdFHWTGIOsqqQbRRVg6ijDJ7kH6/54z87itBtmtRPhPEc0OYbwx8wC9JkMXo9AHFB8jAfeADZOA+8AEycB/4ABm4D3yADNwHPkAG7gMfIAP3gQ+QgfvAB8jAfeADZOA+8AEycB//HfDol339zm9rE2QkSG7IFXJDRm6I60TIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7mP1dVpP5wAckyI1JkJ/khox8ZblOhAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuI/Z/1PvN37XlSAjQXJDrpAbMnJDXCdCBu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3sB+TZEqSLD0JuyOAjJMjgxWuChBBCaKvzDQGUurXKthVmAAAAAElFTkSuQmCC" />
                    </pattern>
                </defs>
                <rect id="icons8-file-100_2_" data-name="icons8-file-100 (2)" width="23" height="23" fill="url(#pattern)" />
            </svg>
        
        </a>
        
        <a href="#!" class="hidden sm:block hover:bg-[#FAFAFB] focus:bg-[#FAFAFB] rounded p-2">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-4" viewBox="0 0 23 23">
                <defs>
                    <pattern id="pattern" preserveAspectRatio="xMidYMid slice" width="100%" height="100%" viewBox="0 0 100 100">
                        <image width="100" height="100" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAACH0lEQVR4nO2aMU4DMRQFfVMEFceIqeNIsMdFIdRsEQlIMuPvN9IW6R4zdiRWaS2EEEJ4MH1sl0mfz8Npe2rVEIi9/PU5HD+++ml7bZWgpfZEqRWkV7sp+z+uyenVo1QJ0qtEKRDkvP/8dnx/abMye5DD2J73Uaa+KbMHaa21UlEqBCkVpUqQMlEqBSkRpVqQ6aNUDDJ1lKpBpo1SOciUUaoHmS7KCkGmirJKkGmirBRkiiirBdFHWTGIOsqqQbRRVg6ijDJ7kH6/54z87itBtmtRPhPEc0OYbwx8wC9JkMXo9AHFB8jAfeADZOA+8AEycB/4ABm4D3yADNwHPkAG7gMfIAP3gQ+QgfvAB8jAfeADZOA+8AEycB//HfDol339zm9rE2QkSG7IFXJDRm6I60TIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7mP1dVpP5wAckyI1JkJ/khox8ZblOhAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuI/Z/1PvN37XlSAjQXJDrpAbMnJDXCdCBu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3gA2TgPvABMnAf+AAZuA98gAzcBz5ABu4DHyAD94EPkIH7wAfIwH3sB+TZEqSLD0JuyOAjJMjgxWuChBBCaKvzDQGUurXKthVmAAAAAElFTkSuQmCC" />
                    </pattern>
                </defs>
                <rect id="icons8-file-100_2_" data-name="icons8-file-100 (2)" width="23" height="23" fill="url(#pattern)" />
            </svg>
        
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


	$post_id = wp_insert_post([
		'post_type' => 'projektitiedot',
		'post_author' => get_current_user_id(),
		'post_title' => wp_strip_all_tags( $projektin_nimi ),
		'post_status'   => 'publish',
	]);

	if ( is_wp_error($post_id) ) {
		$error = new WP_Error( '002', 'Failed For Server Busy' );
		wp_send_json_error( $error );
	} else {

		update_field( 'projektinumero', $projektinumero, $post_id );
		update_field( 'luontipaivamaara', $luontipaivamaara, $post_id );
		update_field( 'projektipaallikko', $projektipaallikko, $post_id );
		update_field( 'valvoja', $valvoja, $post_id );
		update_field( 'projektin_tila', 'Aktiivinen', $post_id );

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