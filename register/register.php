<?php 

/* Template Name: Register */


if ( !is_user_logged_in() ) {
	wp_redirect( site_url() );
	exit;
}

$user = wp_get_current_user();

if ( isset($user->roles) && !empty($user->roles) && !array_intersect(['editor', 'administrator'], $user->roles) ) {
    wp_redirect( site_url() );
    exit;   
}

get_header('noste');

?>

<section class="register-titlebar bg-graybg border-b border-gray border-solid">
	<div class="flex px-8 py-8 justify-between">
		<div class="basis-1/2">
			<h2 class="text-xl text-heading font-medium">Luo uusi käyttäjä</h2>
		</div>
		<div class="basis-1/2 text-xl text-right">
			<a href="<?php echo get_permalink( 31 ); ?>" class=" border border-gray rounded-lg text-sm px-6 py-3 inline-block">Näytä kaikki tilit</a>
		</div>		
	</div>
</section>
<section class="register-tiedot py-10">
	<div class="max-w-3xl mx-auto">
		<h3 class="text-lg text-heading font-medium m-0">Käyttäjätilin tiedot</h3>
		<p class=" text-sm text-lightGray font-normal m-0">Luo paikallinen käyttäjä- tai järjestelmänvalvojatili</p>
		<?php echo do_shortcode( '[ultimatemember form_id="8"]' ); ?>
	</div>
</section>



<?php 
get_footer(); ?>