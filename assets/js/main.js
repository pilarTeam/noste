const PRINTS_ARGS = {
    allowTwig: true
  };
  
  
  document.querySelectorAll('#update-project .project-submit-btn').forEach(button => {
    var form = button.parentElement.parentElement;
    button.addEventListener('click', (event) => handleUpdateProjects(event, button, form));
    form.addEventListener('submit', (event) => handleUpdateProjects(event, button, form));
  });
  
  function handleUpdateProjects(event, button, form) {
    event.preventDefault();
    var data = {};
    var submit = button;
    
    new FormData(form).forEach((value, key) => data[key] = value);
    if (data?.action) {delete data.action;}
  
    wp.ajax.post('update_a_project', data).done(json => {
      submit.disabled = false;console.log(json);
      if (json?.permalink != '') {
        location.replace(json.permalink);
      }
    }).fail(error => {
      console.error(error);
      submit.disabled = false;
    });
  }
  
  
  /**
   * prevent hash acnhors on click events.
   */
  document.querySelectorAll('a[href="#!"], a[href="#"]').forEach(anchor => {
    anchor.addEventListener('click', (event) => event.preventDefault());
  });
  
  jQuery(document).ready(function ($) {
      // DropDown
  
      $("#dropdown-toggle").on('click', function () {
          var dropdownMenuId = $(this).data("dropdown");
          $("#" + dropdownMenuId).toggleClass("hidden");
      });
  
      $(document).on('click', function (e) {
          var target = e.target;
          if (
              !$(target).is("#dropdown-toggle") &&
              !$(target).parents().is(".dropdown")
          ) {
              $(".dropdown-menu").addClass("hidden");
          }
      });
  
      // Image Upload
      $("#FileUpload1").on('change', function (event) {
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
  
  
  
      $('.project-layout').on('click', function(e){
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
  
  
      $("#FileUpload1").on('change', function (event) {
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
  
      // radio toogle click 
      $('.radio_change').on('change', function(){
          $name = $(this).attr('name');
  
          $('*[name="'+ $name +'"]').parent().find('.check_show').addClass('hidden');
  
          if ( $(this).prop("checked") && $(this).attr('name') == $name ) {
              $(this).parent().find('.check_show').removeClass('hidden');
          } 
      });
  
      // input yes/no
      $('.input-yes-no').on('click', 'input', function(){
  
          if ( $(this).attr('type') == 'text' ) {
              jQuery.map($(this).parents('.input-yes-no').find('input'), function(item, index){
                  if ( $(item).attr('type') == 'radio' || $(item).attr('type') == 'checkbox' ) {
                      $(item).parent().find('.check_show').addClass('hidden');
                      $(item).prop('checked', false);
                  }
              });            
          }
  
      });
  
      // help toogle click 
      $('.help_click').on('click', function(){
          $(this).parent().find('.help_line').toggleClass('hidden');
          $(this).parents('.help_wrap').find('.help_show').toggleClass('hidden');
      });
      
     
      $('form.ajax-submit').on('click', '*[type="submit"]', function(e){
          e.preventDefault();
          $(this).parents('form').trigger('submit');
      })
  
      $('form.ajax-submit').on('submit', function(e){
          e.preventDefault();
          var $this = $(this);
  
          if ( $('input[name="ptname"]').val() == '' ) {
              alert('Please reload again.');
              location.reload();
              return;
          }
  
          var formData = new FormData($(this)[0]);
          if (typeof main_ajax_object ?. query === 'object') {
              formData.append('ref_queries', JSON.stringify(main_ajax_object.query));
          }
          // 
          var formCard = window.formCard = $(this)[0];
          // 
          try {
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
                    if (response?.success) {
                        var data = response?.data??{};
                        console.log(data);
                        fetch(data?.template)
                        .then(data => data.text())
                        .then(body => {
                            var template = Twig.twig({data: body});
                            data.submission = data?.submission??{};
                            /** Passing locale arguments necessery for several places of preview templates */
                            data.submission.locale_args = main_ajax_object;
                            /** Added custom function get_global_keyword() for printing global keyword conditionally. */
                            data.submission.get_global_keyword = (key, def = '') => {
                              if ( typeof data.submission[key] !== 'undefined' && data.submission[key] != '') {
                                  return data.submission[key];
                              }
                              return def;
                          };
    
                          var printPrevCard = document.createElement('div');
                          formCard.classList.add('print_preview');
                          printPrevCard.classList.add('section-to-print');
                          printPrevCard.innerHTML = template.render(data.submission);
  
                          formCard.insertBefore(printPrevCard, $(formCard).children('.card_footer')[0]);
  
                          $this.find('*[type="submit"]').html('<i class="um-faicon-pencil-square-o"></i>Muokkaa').attr('class', 'btn bg-white border border-black2 edit_form' ).removeAttr('type');
                          $this.parents('body').find('.print-btn').removeClass('hidden');
                            
                        }).catch(error => console.error(error));
                    } else {
                      /**
                       * Error handles
                       */
                        var err = Object.values(response?.data??[]).map(err => err.message).join(' ');
                        alert(err);
                        // throw new Error(err);
                    }
                },
                error: function(xhr, status, error) {
                    var err = error?.Message??(xhr?.responseText??'Something went wrong!');
                    alert(err);
                    // throw new Error(xhr.responseText);
                }
            });
          } catch (err) {
            console.log(err.name + ': ' + err.message);
          }
      
      });
      
      /**
       * Enableing print button functions.
       */
      $('.card_header .print-btn').on('click', function(e){
          e.preventDefault();
  
          if ($('.print_preview').length) {
              print();
          }
      });
  
      $('body').on('click', '.edit_form', function(e){
          e.preventDefault();
  
          $(this).parents('body').find('.popup_wrap').removeClass('hidden');
      });
  
      $('body').on('click', '.cancel_popup', function(e){
          e.preventDefault();
  
          $(this).parents('.popup_wrap').addClass('hidden');
      });
  
  });
