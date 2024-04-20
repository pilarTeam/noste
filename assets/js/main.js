jQuery(document).ready(function ($) {
	// DropDown

	$("#dropdown-toggle").click(function () {
		var dropdownMenuId = $(this).data("dropdown");
		$("#" + dropdownMenuId).toggleClass("hidden");
	});

	$(document).click(function (e) {
		var target = e.target;
		if (
			!$(target).is("#dropdown-toggle") &&
			!$(target).parents().is(".dropdown")
		) {
			$(".dropdown-menu").addClass("hidden");
		}
	});

	// Image Upload
	$("#FileUpload1").change(function (event) {
		var input = event.target;
		var text = $("#text");
		var avatarImage = $("#avatarImage");

		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				avatarImage.attr("src", e.target.result);
				text.addClass("hidden");
				avatarImage.removeClass("hidden");
			};
			reader.readAsDataURL(input.files[0]);
		}
	});

	


    $('.projekti-status').on('click', 'li', function(e){
        e.preventDefault();
        var currentstatus = $(this).data('status');


        if ( currentstatus != '' ) {

            $('.projekti-status .tab_list_btn').removeClass('bg-white');
            $(this).find('.tab_list_btn').addClass('bg-white');

            var grid_card = $('#dashboard_projectCard .card_item').eq(0).clone();

            jQuery('#dashboard_projectCard').addClass('hidden');
            jQuery('.change_status').removeClass('hidden');



            jQuery.ajax({
                url: main_ajax_object.ajaxurl,
                method: 'POST',
                data: {
                    'action' : 'project_status_change',
                    'status' : currentstatus
                },
                success: function(update) {
                    
                    if ( update.length > 10 ) {
                        var results = JSON.parse(update);
                         
                         $('#dashboard_projectCard .grid').empty();


                        $.map(results, function(value, index){

                            grid_card.find('.title').html(value['title']);
                            grid_card.find('.projektinumero').html(value['projektinumero']);
                            grid_card.find('.projektipaallikko').html(value['projektipaallikko']);
                            grid_card.find('.valvoja').html(value['valvoja']);
                            grid_card.find('.projektin_valmistelu').html(value['projektin_valmistelu']);

                            grid_card.find('.status').removeClass('aktiivinen keskeneräiset arkistoitu');

                            // grid_card.addClass(value['projektin_tila'].toLowerCase());
                            grid_card.find('.status').addClass(value['projektin_tila'].toLowerCase());
                            
                            // console.log(grid_card);
                            $('#dashboard_projectCard .grid').append(grid_card);
                             grid_card = $('#dashboard_projectCard .card_item').eq(0).clone();
                        });

                        jQuery('#dashboard_projectCard').removeClass('hidden');
                        jQuery('.change_status').addClass('hidden');
                        
                    }
                }
            });
        }
    });



    $('.project-layout').click(function(e){
        e.preventDefault();

        var layout = $(this).data('layout');

        $('.project-layout').removeClass('shadow-md');
        $(this).addClass('shadow-md');

        if ( layout != '' && layout == 'list-view-btn' ) {
            $('#dashboard_projectCard > .grid').addClass('list-layout');
        } else {
            $('#dashboard_projectCard > .grid').removeClass('list-layout');            
        }

    });


    $("#FileUpload1").change(function (event) {
        const input = event.target;
        const text = $("#text");
        const avatarImage = $("#avatarImage");

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                avatarImage.attr("src", e.target.result);
                text.addClass("hidden");
                avatarImage.removeClass("hidden");
            };
            reader.readAsDataURL(input.files[0]);
        }
    });



    // dropdown open close 
    $('.dropdown_click').on('click', '.dropdown-label', function(){
        $(this).parents('.dropdown_click').find('.dropdown_wrap').toggle();
    });

    $('.dropdown_click').on('click', '.dropdown_wrap label', function(){
        var selectedText = $(this).find('.name').text();
        $(this).parents('.dropdown_click').find('.selected-label').text(selectedText);
        $(this).parents('.dropdown_wrap').hide();
    });



    // Create Project
    $('#create-project').on('click', '.project-submit-btn', function(e){
        e.preventDefault();

        if ( confirm("Are you sure?") ) {
            $(this).parents('form').trigger('submit');
         }
    });
    // 
    $('#create-project').on('submit', 'form', function(e){
        e.preventDefault();

        if ( $('input[name="project_name"]').val() == '' ) {
            alert('please fill out Projektin nimi field');
            return;
        }

        if ( $('input[name="projektinumero"]').val() == '' ) {
            alert('please fill out Projektinumero field');
            return;
        }

        if ( $('input[name="luontipaivamaara"]').val() == '' ) {
            alert('please fill out Luontipäivämäärä field');
            return;
        }

        if ( !$('input[name="projektipaallikko"]').is(':checked') ) {
            alert('please fill out Projektipäällikkö field');
            return;
        }

        if ( !$('input[name="valvoja"]').is(':checked') ) {
            alert('please fill out Valvoja field');
            return;
        }

        var formData = new FormData($(this)[0]);
        formData.append('action', 'create_a_project');

        $.ajax({
            url: main_ajax_object.ajaxurl,
            type: 'POST',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function(response) {
                if ( response['success'] ) {
                    var url = response['data']['permalink'];
                    if ( url != '' ) {
                        location.replace(url);
                    }

                } else {
                    alert(response['data'][0]['message']);
                }
                
            },
            error: function(response) {
                // console.log(response);
                alert('failed!');
            }
        });
    
    });


// Create Project



    // calendar init
    $('#calendar').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1901,
        maxYear: parseInt(moment().format('YYYY'),10)
    }, function(start, end, label) {});

    // checkbox toogle click 
    $('.checkbox_change').on('change', function(){
        $(this).parent().find('.check_show').toggleClass('hidden');
    });
    // help toogle click 
    $('.help_click').on('click', function(){
        $(this).parent().find('.help_line').toggleClass('hidden');
        $(this).parents('.help_wrap').find('.help_show').toggleClass('hidden');
    });
    
    
});
