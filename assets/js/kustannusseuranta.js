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
			tarjousTotal();
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
		tarjousTotal();
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

	function checkValidNum (val) {
		if ( val == '' || isNaN(parseInt( val.replace(/\D/g, ""), 10 )) ) {
			return 0;
		}
		
		return parseInt( val.replace(/\D/g, ""), 10 );
	}

	$('body').on('input', '.tarjous_value, .ennuste1', function(e){
		e.preventDefault();

		var tarjous_value_total = checkValidNum ( $('.tarjous_value_total').val() );
		var ennuste1 = checkValidNum ( $('input[name="ennuste1"]').val() );


		if ( $('input[name="ennusteE2"]').length > 0 ) {
			$('input[name="ennusteE2"]').val( (tarjous_value_total + ennuste1) + ' €' );
		}

		ennusteE5();
	});

	$('body').on('input', 'input[name="ennuste2"], input[name="ennuste3"]', function(e){
		e.preventDefault();

		var ennuste2 = checkValidNum ( $('input[name="ennuste2"]').val() );
		var ennuste3 = checkValidNum ( $('input[name="ennuste3"]').val() );


		if ( $('input[name="ennusteE3"]').length > 0 ) {
			$('input[name="ennusteE3"]').val( (ennuste2 + ennuste3) + ' €' );
		}

		ennusteE5();
	});

	$('body').on('input', 'input[name="ennuste4"], input[name="ennuste5"]', function(e){
		e.preventDefault();

		var ennuste4 = checkValidNum ( $('input[name="ennuste4"]').val() );
		var ennuste5 = checkValidNum ( $('input[name="ennuste5"]').val() );


		if ( $('input[name="ennusteE4"]').length > 0 ) {
			$('input[name="ennusteE4"]').val( (ennuste4 + ennuste5) + ' €' );
		}

		ennusteE5();
	});

	$('body').on('input', 'input[name="ennuste6"]', function(e){
		e.preventDefault();

		var ennuste6 = checkValidNum ( $('input[name="ennuste6"]').val() );


		if ( $('input[name="ennusteE6"]').length > 0 ) {
			$('input[name="ennusteE6"]').val( ennuste6 + ' €' );
		}

		ennusteE5();
	});


	function ennusteE5(){
		var E2 = checkValidNum ( $('input[name="ennusteE2"]').val() );
		var E3 = checkValidNum ( $('input[name="ennusteE3"]').val() );
		var E4 = checkValidNum ( $('input[name="ennusteE4"]').val() );
		var E6 = checkValidNum ( $('input[name="ennusteE6"]').val() );
		var BU1 = checkValidNum ( $('.pilar_BU1').html() );
		var BU2 = checkValidNum ( $('.pilar_BU2').html() );
		var BU3 = checkValidNum ( $('.pilar_BU3').html() );
		var BU4 = checkValidNum ( $('.pilar_BU4').html() );
		var BU5 = checkValidNum ( $('.pilar_BU5').html() );
		var BU6 = checkValidNum ( $('.pilar_BU6').html() );
		var	E5 = BU5-((E2-BU2)+(E3-BU3)+(E4-BU4)+(E6-BU6));
		var E1_6T = E2 + E3 + E4 + E5 + E6;

		if ( $('input[name="ennusteE5"]').length > 0 ) {
			
			if ( E5 > 0 ) {
				$('input[name="ennusteE5"]').val(E5 + ' €');
			} else {
				$('input[name="ennusteE5"]').val(0 + ' €');				
			}
		}


		if ( $('input[name="E1-6T"]').length > 0 ) {
			if ( E1_6T > 0 ) {
				$('input[name="E1-6T"]').val(E1_6T + ' €');
			} else {
				$('input[name="E1-6T"]').val(0 + ' €');				
			}
		}


	}


	function tarjousTotal() {
		var BU1 = checkValidNum ( $('.pilar_BU1').html() );
		var tarjousG24 = checkValidNum ( $('.tarjous_G24').eq(0).html() );
		var tarjous_1_total = checkValidNum ( $('.tarjous_1_total').html() );
		var tarjous_2_total = checkValidNum ( $('.tarjous_2_total').html() );
		var tarjous_3_total = checkValidNum ( $('.tarjous_3_total').html() );
		var tarjous_4_total = checkValidNum ( $('.tarjous_4_total').html() );
		var tarjous_5_total = checkValidNum ( $('.tarjous_5_total').html() );
		var tarjous_6_total = checkValidNum ( $('.tarjous_6_total').html() );
		var tarjous_total = ( BU1 + tarjousG24 + tarjous_1_total + tarjous_2_total + tarjous_3_total + tarjous_4_total + tarjous_5_total + tarjous_6_total );

		if ( $('input[name="tarjous_total"]').length > 0 ) {
			if ( tarjous_total > 0 ) {
				$('input[name="tarjous_total"]').val(tarjous_total + ' €');
			} else {
				$('input[name="tarjous_total"]').val(0 + ' €');				
			}
		}
	}


});