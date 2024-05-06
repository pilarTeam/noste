<?php 

if ( !is_singular( 'projektitiedot' ) ) {
   return;
}

echo do_shortcode( '[gantt-form form_id="lahtotietojen/aikataulu"]' ); 

?>