<?php 

/* Template Name: View All Accounts */

if ( !is_user_logged_in() ) {
	wp_redirect( site_url() );
	exit;
}

$user = wp_get_current_user();

if ( isset($user->roles) && !empty($user->roles) && !array_intersect(['editor', 'administrator'], $user->roles) ) {
    wp_redirect( site_url() );
    exit;   
}

get_header( 'noste' );


$users = get_users([
	'meta_query' => [
		'relation' => 'AND',
			[
				'key'     => 'registered_manager_id',
				'value'   => get_current_user_id(),
			],
			[
				'key'     => 'account_status',
				'value'   => 'approved',
			]
	],
	'orderby' => 'ID',
	'order' => 'ASC',
	'fields' => 'IDs'
]);

?>

<section class="register-titlebar">
	<div class="flex px-8 pt-6 pb-3 items-center">
    	<div class="login-back">
			<a href="<?php echo get_permalink( 14 ); ?>" class="inline-block">
    			<img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.svg'; ?>">
    			Takaisin
			</a>
    	</div>
	</div>
</section>

<section>
	<div class="mx-auto max-w-[700px] pb-7 border-b border-solid border-gray mx-auto">
		<h2 class="text-heading font-medium m-0">Tilit</h2>
	</div>
</section>

<section id="view-all-accounts" class="py-14 mx-auto max-w-[700px]">
	<div class="w-sm border border-gray border-solid rounded-lg mx-auto">
		<div class=" px-8 py-4 border-b border-gray border-solid">
			<h3 class="font-medium text-heading m-0">Näytä kaikki tilit</h3>
			<span class="close"></span>
		</div>

		<div class="p-8">

			<?php foreach ($users as $user_id): 
				um_fetch_user($user_id);
				$edit_url = add_query_arg([
					'user' => rand(100, 999) . $user_id
				], get_permalink( 38 ) );
			?>
				<div class="flex flex-wrap py-4 justify-between items-center">
					<div class="flex flex-wrap items-center">
						<div class="mr-3 profile-img">
							<?php echo um_user( 'profile_photo' ); ?>
						</div>
						<div class="">
							<h4 class="text-xm text-heading m-0 font-medium"><?php echo um_user( 'display_name' ); ?></h4>
							<p class=" text-xs text-gray"><?php echo um_user('role_select'); ?></p>
						</div>
					</div>
					<div class=" flex flex-wrap items-center">
						<a href="<?php echo $edit_url; ?>" class="text-sm text-darkGray border border-solid border-gray px-4 py-2 rounded-lg">Muokkaa</a>
					</div>			
				</div>
				
			<?php endforeach ?>

		</div>			
	</div>
</section>

<?php get_footer(); ?>