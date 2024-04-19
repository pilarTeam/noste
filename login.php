<?php 

/* Template Name: Login */


get_header();



?>

<seciton class="logins">
	<div class="container md:container md:mx-auto px-4">
		<div class="flex flex-wrap flex-wrap items-center justify-around">
		  <div class="basis-1/2">
		    <div class="main-login-wrap <?php echo ( isset( $_GET['tm'] ) && $_GET['tm'] == 'forget' ) ? 'hidden' : ''; ?>">
		      <?php echo do_shortcode( '[ultimatemember form_id="9"]' ); ?>    
		    </div>

		    <div class="noste-reset <?php echo ( isset( $_GET['tm'] ) && $_GET['tm'] == 'forget' ) ? '' : 'hidden'; ?>">
		    	<div class="login-back">
		    		<button class="<?php echo ( isset($_GET['updated']) && !empty( $_GET['updated'] ) ) ? 'reset-form-back' : 'main-login-back'; ?>">
		    			<img src="<?php echo get_template_directory_uri() . '/assets/images/left-arrow.svg'; ?>">
		    			Mene takaisin
		    		</button>
		    	</div>

		    	<div class="noste-reset-wrap">
		        <?php if ( empty( $_GET['updated'] ) || !isset( $_GET['updated'] ) ): ?>
		      		<h2>Palauta salasanasi</h2>
		      		<p><strong>Syötä sähköpostiosoite</strong>, jonka annoit rekisteröityessäsi salasanan palautusta varten. Saat <strong>salasanan nollauslinkin</strong>.</p>          
		        <?php endif ?>
		    		<?php echo do_shortcode( '[ultimatemember_password]' ); ?>
		    	</div>
		    </div>
		  </div>
		  <div class="basis-1/2 flex justify-end p-8">
		    <img src="<?php echo get_template_directory_uri() . '/assets/images/login-right.jpg'; ?>">
		  </div>
		</div>		
	</div>
</seciton>


<script type="text/javascript">
  jQuery(document).ready(function($){
      let searchParams = new URLSearchParams(window.location.search);
      var updated_param = '';

      if ( searchParams.has('updated') ) {
        updated_param = searchParams.get('updated');

        $('.main-login-wrap').addClass('hidden');
        $('.noste-reset').removeClass('hidden');
      }

      $('.um-login a.um-link-alt').click(function(e){
        e.preventDefault();

        $('.main-login-wrap').addClass('hidden');
        $('.noste-reset').removeClass('hidden');        
      });


    $('.reset-form-back').click(function(e){
      e.preventDefault();
      
      location.replace( '/login/?updated=' );

    });

    $('.main-login-back').click(function(e){
      e.preventDefault();

      $('.main-login-wrap').removeClass('hidden');
      $('.noste-reset').addClass('hidden');
    });


  });
</script>

<?php get_footer(); ?>