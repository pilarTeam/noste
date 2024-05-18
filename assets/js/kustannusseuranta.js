jQuery(document).ready(function ($) {
	$('body').on('input', '.kustan_calculate', function(e){
		e.preventDefault();

		if ( $('.laskun_summa').length > 0 ) {
			var laskun_summa_total = 0;
			jQuery.map($('.laskun_summa'), function(item, index){
				var val = $(item).val();

				if ( val != '' ) {
					if ( !isNaN(parseInt( val.replace(/\D/g, ""), 10 )) ) {
						laskun_summa_total += parseInt( val.replace(/\D/g, ""), 10 );
					}
				}

				$('.laskun_summa_total').html(laskun_summa_total + ' €');
			});
		}

		if ( $('.tarjous_value').length > 0 ) {


			var tarjous_value_total = 0;
			jQuery.map($('.tarjous_value'), function(item, index){
				var val = $(item).val();

				if ( val != '' ) {
					if ( !isNaN(parseInt( val.replace(/\D/g, ""), 10 )) ) {
						tarjous_value_total += parseInt( val.replace(/\D/g, ""), 10 );
						
						if ( $(item).hasClass('G24') ) {
							$('.tarjous_G24').html( parseInt( val.replace(/\D/g, ""), 10 ) + ' €');
						}
					}
				}

				$('.tarjous_value_total').val(tarjous_value_total + ' €');
			});
		}
	});


	function kustan_total_calculate (items, total_item) {
		if ( $(items).length > 0 ) {
			var laskun_summa_total = 0;
			jQuery.map($(items), function(item, index){
				var val = $(item).val();

				if ( val != '' ) {
					if ( !isNaN(parseInt( val.replace(/\D/g, ""), 10 )) ) {
						laskun_summa_total += parseInt( val.replace(/\D/g, ""), 10 );
					}
				}

				$(total_item).html(laskun_summa_total + ' €');
			});
		}		
	}


	$('body').on('input', '.tarjous_1_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_1_value', '.tarjous_1_total');
	});

	$('body').on('input', '.tarjous_2_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_2_value', '.tarjous_2_total');
	});

	$('body').on('input', '.tarjous_3_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_3_value', '.tarjous_3_total');
	});

	$('body').on('input', '.tarjous_4_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_4_value', '.tarjous_4_total');
	});

	$('body').on('input', '.tarjous_5_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_5_value', '.tarjous_5_total');
	});

	$('body').on('input', '.tarjous_6_value', function(e){
		e.preventDefault();
		kustan_total_calculate ('.tarjous_6_value', '.tarjous_6_total');
	});




});