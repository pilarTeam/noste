<?php 

/* Template Name: Edit Member */

if ( !is_user_logged_in() && !current_user_can('administrator') ) {
	wp_redirect( site_url() );
	exit;
}


if ( !empty($_POST['user-updated']) ) {

	$nonce = $_REQUEST['update_profile_nonce'];
	if ( ! wp_verify_nonce( $nonce, 'update_profile' ) ) {
		die( __( 'Security check', 'textdomain' ) ); 
	} 

	$errors = new WP_Error();

	if ( empty($_POST['user_id'])  ) {
		wp_redirect( get_permalink( 31 ) );
		exit;
	}

	$fields = [
		$_POST['nt_first_name'],
		$_POST['nt_last_name'],
		$_POST['nt_phone'],
		$_POST['nt_email'],
		$_POST['nt_user_role'],
	];

	foreach ($fields as $item) {
		if ( empty($item) ) {
			$errors->add('invalid', 'Please fill up all fields');
		}
	}

	if ( !empty($_POST['nt_user_password']) && empty($_POST['nt_user_confirm_password']) ) {
			$errors->add('invalid', 'Password not matched');
	}


	if ( !empty($_POST['nt_user_confirm_password']) && empty($_POST['nt_user_password']) ) {
			$errors->add('invalid', 'Password not matched');
	}


	if ( !empty($_POST['nt_user_password']) && !empty($_POST['nt_user_confirm_password']) && $_POST['nt_user_password'] != $_POST['nt_user_confirm_password'] ) {
			$errors->add('invalid', 'Password not matched');
	}

	if ( is_wp_error( $errors ) ) {
		$messages = $errors->get_error_messages(); 
	} 

	if ( empty( $errors->errors ) ) {
		$user_id = substr($_POST['user_id'], 3);
		$first_name = sanitize_text_field( $_POST['nt_first_name'] );
		$last_name = sanitize_text_field( $_POST['nt_last_name'] );
		$nt_phone = sanitize_text_field( $_POST['nt_phone'] );
		$nt_email = sanitize_email( $_POST['nt_email'] );
		$nt_user_role = sanitize_text_field( $_POST['nt_user_role'] );

		wp_update_user([
			'ID' => $user_id,
			'first_name' => $first_name,
			'last_name' => $last_name,
			'user_email' => $nt_email,
			'role' => $nt_user_role,
		]);

		if ( !empty($_POST['nt_user_password']) && !empty($_POST['nt_user_confirm_password']) && $_POST['nt_user_password'] == $_POST['nt_user_confirm_password'] ) {
			wp_update_user([
				'ID' => $user_id,
				'user_pass' => $_POST['nt_user_password']
			]);
		}

		wp_redirect( get_permalink( 31 ) );
		exit;

	}

} else {
	if ( !isset($_GET['user']) || empty($_GET['user']) ) {
		wp_redirect( get_permalink( 31 ) );
		exit;
	}
}

get_header('noste');

echo $messages;

if ( !empty($_GET['user']) ):

	$all_roles = [
		'subscriber' => 'Subscriber',
		'um_paakayttaja' => 'Paakayttaja'
	];

	$user_id = substr($_GET['user'], 3);
	um_fetch_user($user_id);
?>
	
<section class="register-titlebar">
	<div class="flex px-8 pt-6 pb-3 items-center">
    	<div class="login-back">
			<a href="<?php echo get_permalink( 14 ); ?>" class="inline-block">
    			<img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.svg'; ?>">
    			<?php echo esc_html( 'Takaisin' ); ?>
			</a>
    	</div>
	</div>
</section>

<section>
	<?php echo $messages; ?>
</section>

<section>
	<div class=" w-sm pb-7 border-b border-solid border-gray mx-auto">
		<h3 class="text-xl text-heading font-medium m-0">Muokkaa tiliä</h3>
	</div>
</section>

<section class="update-profile py-10">
	<div class="w-sm mx-auto">
		<h3 class="text-lg text-heading font-medium m-0">Käyttäjätilin tiedot</h3>
		<p class=" text-sm text-lightGray font-normal m-0">Muokkaa käyttäjätilin tietoja alla.</p>

		<form action="<?php echo get_permalink( 38 ); ?>" class=" pt-6" method="post">
			<input type="hidden" name="user_id" id="user_id" value="<?php echo esc_attr( $_GET['user'] ); ?>">
			<input type="hidden" name="update_profile_nonce" value="<?php echo wp_create_nonce('update_profile'); ?>">

			<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-4">
				<div class="sm:col-span-1">
					<label for="nt_first_name" class="block text-sm font-medium leading-6 text-heading">Etunimi</label>
					<div class="mt-2">
						<input type="text" name="nt_first_name" id="nt_first_name" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" required value="<?php echo esc_attr( um_user( 'first_name' ) ); ?>">
					</div>
				</div>	
				
				<div class="sm:col-span-1">
					<label for="nt_last_name" class="block text-sm font-medium leading-6 text-heading">Sukunimi</label>
					<div class="mt-2">
						<input type="text" name="nt_last_name" id="nt_last_name" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" value="<?php echo esc_attr( um_user( 'last_name' ) ); ?>" required>
					</div>
				</div>	

				<div class="sm:col-span-1">
					<label for="nt_email" class="block text-sm font-medium leading-6 text-heading">Työsähköposti</label>
					<div class="mt-2">
						<input type="text" name="nt_email" id="nt_email" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" value="<?php echo esc_attr( um_user( 'user_email' ) ); ?>" required>
					</div>
				</div>	
				
				<div class="sm:col-span-1">
					<label for="nt_phone" class="block text-sm font-medium leading-6 text-heading">Puhelinnumero</label>
					<div class="mt-2">
						<input type="tel" name="nt_phone" id="nt_phone" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" value="<?php echo esc_attr( um_user( 'phone_number' ) ); ?>" required>
					</div>
				</div>	

				<div class="sm:col-span-2">
					<label for="nt_user_role" class="block text-sm font-medium leading-6 text-heading">Käyttäjärooli</label>
					<div class="mt-2">
						<select name="nt_user_role" id="nt_user_role" class="block w-full rounded-md border border-solid border-gray py-2 px-4 bg-white" required>
							<?php foreach ($all_roles as $key => $roles): ?>
								<option value="<?php echo esc_attr( $key ); ?>" <?php echo selected( um_user('role_select'), $roles ); ?>><?php echo esc_html( $roles ); ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>		
			</div>

			<div class=" mt-11 pt-11 border-t border-solid border-gray">
				<h3 class="text-lg text-heading font-medium m-0">Salasana</h3>
				<p class=" text-sm text-lightGray font-normal m-0">Vaihda vanha salasana uuteen luotuun salasanaan.</p>		
				
				<div class="grid grid-cols-1 gap-y-6 gap-x-4 mt-5">
					<div class="sm:col-span-1">
						<label for="nt_user_password" class="block text-sm font-medium leading-6 text-heading">Vanha salasana</label>
						<div class="mt-2 relative">
							<input type="password" name="nt_user_password" id="nt_user_password" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" placeholder="••••••••••••••">
							<span class="noste-toogle-password"></span>						
						</div>
					</div>	

					<div class="sm:col-span-1">
						<label for="nt_user_confirm_password" class="block text-sm font-medium leading-6 text-heading">Uusi salasana</label>
						<div class="mt-2 relative">
							<input type="password" name="nt_user_confirm_password" id="nt_user_confirm_password" class="block w-full rounded-md border border-solid border-gray py-2 px-4 text-heading" placeholder="••••••••••••••">
							<span class="noste-toogle-password"></span>							
						</div>										
				</div>
				</div>
			</div>

			<div class=" mt-8 flex flex-wrap justify-between">
				<button class=" px-5 py-3 w-auto rounded-lg bg-white border border-solid border-gray shadow-lg text-heading font-medium">Nollaa</button>
				<input type="submit" value="Tallenna muutokset" name="user-updated" class=" bg-ancent px-5 py-3 w-auto rounded-lg text-white font-medium cursor-pointer">				
			</div>

		</form>

	</div>	
</section>

<?php endif ?>



<?php 
get_footer(); ?>