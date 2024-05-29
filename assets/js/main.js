const PRINTS_ARGS = {
    allowTwig: true
  };
  
  
  // document.querySelectorAll('#update-project .project-submit-btn').forEach(button => {
  //   var form = button.parentElement.parentElement;
  //   button.addEventListener('click', (event) => handleUpdateProjects(event, button, form));
  //   form.addEventListener('submit', (event) => handleUpdateProjects(event, button, form));
  // });
  
  function handleUpdateProjects(event, button, form) {
    event.preventDefault();
    var data = {};
    var submit = button;
    
    new FormData(form).forEach((value, key) => data[key] = value);
    if (data?.action) {delete data.action;}
  
    wp.ajax.post('update_a_project', data).done(json => {
        submit.removeAttribute('disabled');console.log(json);
      if (json?.permalink != '') {
        location.replace(json.permalink);
      }
    }).fail(error => {
      console.error(error);
      submit.removeAttribute('disabled');
    });
  }
  
  
  /**
   * prevent hash acnhors on click events.
   */
  document.querySelectorAll('a[href="#!"], a[href="#"]').forEach(anchor => {
    anchor.addEventListener('click', (event) => event.preventDefault());
  });
  
  jQuery(document).ready(function ($) {
      
      // Step Content Expand Close
      $("#showMore").click(function(){
          $("#excerpt_content").hide();
          $("#full_content").removeClass("hidden");
      });
  
      $("#hideMore").click(function(){
          $("#full_content").addClass("hidden");
          $("#excerpt_content").show();
      });
  
      // Excerpt Expand Content
      var $showMoreButton = $('.excerpt-expand .showMore');
      var $content = $('.excerpt-expand .content');
  
      if ($showMoreButton.length > 0 && $content.length > 0) {
          var wordsToShow = 30;
          var words = $content.html().trim().split(/\s+/);
          var isVisible = false;
  
          $content.html(words.slice(0, wordsToShow).join(' ') + ' ...');
  
          $showMoreButton.click(function () {
              if (isVisible) {
                  $content.html(words.slice(0, wordsToShow).join(' ') + ' ...');
                  $showMoreButton.text('Lue lisää');
              } else {
                  $content.html(words.join(' '));
                  $showMoreButton.text('Vähemmän lukemista');
              }
              isVisible = !isVisible;
          });
      }
  
  
  
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
          var search_query = $('input[name="psearch"]').val() ?? '';
  
  
          if ( currentstatus != '' ) {
  
              $('.projekti-status .tab_list_btn').removeClass('bg-white');
              $(this).find('.tab_list_btn').addClass('bg-white');
  
              var grid_card = $('#dashboard_projectCard .card_item.sample').eq(0).clone();
  
              jQuery('#dashboard_projectCard').addClass('hidden');
              jQuery('.change_status').removeClass('hidden');
  
  
  
              jQuery.ajax({
                  url: main_ajax_object.ajaxurl,
                  method: 'POST',
                  data: {
                      'action' : 'project_status_change',
                      'status' : currentstatus,
                      'psearch' : search_query
                  },
                  success: function(response) {
  
                      
                      if ( response['success'] ) {
                          var results = response['data'];
                           
                           $('#dashboard_projectCard .grid').empty();
  
                           
                          $.map(results, function(value, index){
  
                              grid_card.find('.title').html(value['title']);
                              grid_card.find('.project-details-wrap a').attr('href', value['permalink']);
                              grid_card.find('.project-edit-osoite a').attr('href', value['edit_permalink']);
  
                              grid_card.find('.projektinumero').html(value['projektinumero']);
                              
                              grid_card.find('.projektipaallikko').html(value['projektipaallikko']);
                              grid_card.find('.valvoja').html(value['valvoja']);
  
                              grid_card.find('.projektin_valmistelu').html(value['projektin_valmistelu']);
  
                              grid_card.find('.status').removeClass('aktiivinen keskeneräiset arkistoitu');
                              grid_card.find('.status').addClass(value['projektin_tila_status'].toLowerCase());
                              grid_card.find('.status').html(value['projektin_tila_status']);
  
                              grid_card.find('.pilar_T1 span').html(value['pilar_T1']);
                              grid_card.find('.pilar_K1').html(value['pilar_K1']);
                              grid_card.find('.pilar_K2').html(value['pilar_K2']);
                              
                              // console.log(grid_card);
                              grid_card.removeClass('sample hidden');
                              $('#dashboard_projectCard .grid').append(grid_card);
                               grid_card = $('#dashboard_projectCard .card_item').eq(0).clone();
                          });
  
  
                      } else {
                          $('#dashboard_projectCard .grid').empty();
                          $('#dashboard_projectCard .grid').html(response['data'][0]['message']);
                      }
                      
                      jQuery('#dashboard_projectCard').removeClass('hidden');
                      jQuery('.change_status').addClass('hidden');
                  }
              });
          }
      });
  
      $('body').on('click', '.step_main_status-switch button', function(e){
          e.preventDefault();
          $(this).parents('.step_main_status-switch').find('ul').toggleClass('hidden');
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
  
      $('body').on('click', '.switch-toggle', function(e){
          e.preventDefault();
  
          var toggleData = $(this).attr('data-toggle');
  
          if ( toggleData ) {
              $('#' + toggleData).toggle();
          }
      })
  
  
  
  // Create Project
      $('#create-project').on('click', '.project-submit-btn', function(e){
          e.preventDefault();
  
          $('.popup_wrap').removeClass('hidden');
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
          "singleDatePicker": true,
          "showDropdowns": true,
          "autoApply": true,
          "minYear": 1901,
          "maxYear": parseInt(moment().format('YYYY'),10)
      }, function(start, end, label) {});
  
  
  
      // checkbox toogle click 
      $('body').on('change', '.checkbox_change', function(e){
          e.preventDefault();
  
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
      $('.help_click').on('click', function(e){
          e.preventDefault();
  
          if ( $(this).hasClass('active') ) {
              console.log('with');
              $('.help_line, .help_show').addClass('hidden');
              $('.help_click').removeClass('active');
          } else {
              $('.help_line, .help_show').addClass('hidden');
  
              $(this).parent().find('.help_line').removeClass('hidden')
              $(this).parents('.help_wrap').find('.help_show').removeClass('hidden');
  
              $(this).addClass('active');
          }
      });
  
  
  
      
      // input field readonly switch by checkbox
      // $('.switch_readonly').on('change', '*[type="checkbox"]', function(e){
      //     e.preventDefault();
  
      //     if ( $(this).prop('checked') ) {
      //         $(this).parents('.switch_readonly').find('*[type="text"]').prop('readonly', false);
      //     } else {
      //         $(this).parents('.switch_readonly').find('*[type="text"]').prop('readonly', true).val('');
      //     }
      // });
      // input field readonly switch by checkbox
  
  
  
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
          submitBtn = document.querySelector('.card_footer button[type="submit"]');
          submitBtn.disabled = true;
          // 
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
  
                      var data = response?.data??response;
                      
                      if (data) {
                        setTimeout(() => {
                            [...document.querySelectorAll('.card_header .print-btn')].map(btn => btn.click());
                        }, 1000);
                        submitBtn.removeAttribute('disabled');
                      }
                  } else {
                      if ( response['data'][0] ) {
                          alert(response['data'][0]['message']);
                      }
                  }
              },
              error: function(response) {
                  // console.log(response);
                  alert('failed!');
              }
          });
      
      });
      
      /**
       * Enableing print button functions.
       */
      let formCard = false;let printPrevCard = false;
      $('.card_header .print-btn').on('click', async (event) => {
            event.preventDefault();
          // var theForm = document.querySelector('form.ajax-submit');
          // theForm.reset();
          if (printPrevCard && formCard && formCard?.classList) {
              printPrevCard.remove();
              formCard.classList.remove('print_preview');
          }
          
          if ($(this).data('previewed')) {
              print();
          } else {
              formCard = $this = window.formCard = $('form.ajax-submit')[0];
              // var data = Object.fromEntries(new FormData(theForm));
              let data = {};
              await fetch(`${main_ajax_object.ajaxurl}?action=noste_get_project_step&tm=${event.target.dataset?.tm}&tmin=${event.target.dataset?.tmin}&project_id=${event.target.dataset?.project_id}`).then(data => data.json()).then(json => {
                  data = json;
                  fetch(event.target.dataset.formPath)
                  .then(data => data.text())
                  .then(body => {
                        var template = Twig.twig({data: body});
                        data.submissions = data?.submissions??{};
                        data.submissions.locale_args = main_ajax_object;
                        var functions_to_do = {before: [], after: []};
                        // 
                        data.submissions.currentPage = 0;
                        data.submissions.totalPages = 0;
                        data.submissions.helpers = {};
                        data.submissions.helpers.array_is_checked = (keywords, value = 'on') => {
                        // console.log(keywords, value)
                        return (keywords.includes(value))?'checked':'';
                        }
                        data.submissions.helpers.noste_checkbox_attrset = (keyword) => {
                            var dataset = (data.submissions['noste_check'])?data.submissions['noste_check']:data.submissions;
                            var attrs = 'name="noste_check[]" value="' + keyword + '" readonly style="display:none;"';
                            if (Object.values(dataset).includes(keyword)) {
                                attrs +=' checked';
                            }
                            return attrs;
                        }
                        data.submissions.helpers.noste_textinput_attrset = (keyword, def = '') => {
                            return `name="${keyword}" value="${(data.submissions[keyword]?data.submissions[keyword]:def)}"`;
                        }
                        data.submissions.helpers.is_checked = (keyword, value = 'on') => {
                            return (data.submissions[keyword] && (
                                data.submissions[keyword] == value
                                ||
                                (data.submissions[keyword][0] && data.submissions[keyword][0] == value)
                            ))?'checked':'';
                        };
                        data.submissions.print_the_gantt_chart = (args) => {
                            const chart_id = 'the_gantt_chart-' + new Date().getTime();
                            functions_to_do.after.push(() => {
                                $.ajax({
                                    url: main_ajax_object.ajaxurl, type: 'POST',
                                    data: {action: 'gantt_form_print', ...args},
                                    success: (response) => document.querySelectorAll('#' + chart_id).forEach(body => body.innerHTML = response),
                                    error: (error) => console.error(error)
                                });
                            });
                            return '<div class="place_gantt_chart_here" id="' + chart_id + '"></div>';
                        };
                        // {{ get_global_keyword( 'pilar_K1', 'K1') }}
                        data.submissions.get_global_keyword = (key, def = '') => {
                            if ( typeof data.global_keywords[key] !== 'undefined' && data.global_keywords[key] != '') {
                                return data.global_keywords[key];
                            }
                            return def;
                        };
                        data.submissions.do_pages_start = (totalPages, mode = 'potrait') => {
                            console.log(data.submissions);
                            data.submissions.totalPages = parseInt(totalPages);
                            return `
                            <div class="noste_pages" data-oriantation="${mode}">
                                <div class="single-page">
                                    <div class="page-wrap">
                                        <div class="page-header">
                                            <img src="${data.submissions.locale_args.thumbnail}" alt="Logo" />
                                        </div>
                                        <div class="page-body">
                            `;
                        }
                        // {{ do_page_break() }}
                        data.submissions.do_page_break = () => {
                            data.submissions.currentPage++;
                            return `
                                    </div>
                                    <div class="page-footer">
                                        <span class="page-footer-pagination">${data.submissions.currentPage}/${data.submissions.totalPages}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-page">
                                <div class="page-wrap">
                                    <div class="page-header">
                                        <img src="${data.submissions.locale_args.thumbnail}" alt="Logo" />
                                    </div>
                                    <div class="page-body">
                            `;
                        }
                        data.submissions.do_pages_end = () => {
                            data.submissions.currentPage++;
                            return `
                                        </div>
                                        <div class="page-footer">
                                            <span class="page-footer-pagination">${data.submissions.currentPage}/${data.submissions.totalPages}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                        }
                        // 
                        printPrevCard = document.createElement('div');
                        formCard.classList.add('print_preview');
                        printPrevCard.classList.add('section-to-print');
                        if ($(this).data('is-approved')) {
                        printPrevCard.classList.add('is_approved');
                        }
                        printPrevCard.innerHTML = template.render(data.submissions);
                        // 
                        setTimeout(() => {
                            [...printPrevCard.querySelectorAll('input[type="checkbox"][checked]')].map(checkbox => {
                                checkbox.previousElementSibling.children[0].classList.remove('hidden');
                                return checkbox;
                            });
                            formCard.insertBefore(printPrevCard, $(formCard).children('.card_footer')[0]);
                            // 
                            // $(this).data('previewed', true);
                            // 
                            functions_to_do.after.map(func => func());
                            // 
                            
                            print();
                            // printPrevCard.remove();
                            // formCard.classList.remove('print_preview');
                        }, 500);
                        
                  }).catch(error => console.error(error));
              });
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
  
  
  /* Notification Template */
  
      $('.notification-filter').on('click', '.dropdown_wrap', function(){
          $(this).parents('form').trigger('submit');
      });
  
      $('.close_notification').on('click', function(e){
          e.preventDefault();
  
          var key = $(this).attr('data-key');
  
          $('*[name="'+ key +'"]').prop('checked', false);
  
          $('.notification-filter').trigger('submit');
  
      });
      
      $('#project_notify_status').on('click', '.btn', function(e){
          e.preventDefault();
  
          var status = $(this).data('status');
          var tm = $(this).parents('#project_notify_status').data('tm');
          var tmin = $(this).parents('#project_notify_status').data('tmin');
          var pid = $(this).parents('#project_notify_status').data('pid');
          // var preview = $(this).parents('#project_notify_status').data('preview');
  
          if ( tm == '' || tmin == '' || pid == '' || status == '' ) {
              alert('something is wrong!!!');
              return;            
          }
  
          $.post(
              main_ajax_object.ajaxurl, 
              {
                  action: "update_manager_project_status",
                  status: status,
                  tm: tm,
                  tmin: tmin,
                  pid: pid
              }, function(response) {
                  if ( response['success'] ) {
                      location.replace(response['data']['permalink']);
                  } else {
                      console.log(response);
                      // alert(response['data'][0]['message'])
                  }
              }
          );        
  
      });
  
  /* Notification Template */
  
      // table collapse 
      $('.row_collapse').on('click', function(){
          var get_id = $(this).attr('id');
  
          $(this).find('.icon1').toggleClass('hidden');
          $(this).find('.icon2').toggleClass('hidden');
          
          $(`.row_${get_id}`).toggleClass('hidden');
          $(`.col_${get_id}`).toggleClass('invisible');
  
      });
  
  
      /*
      * Step Comments on Submit
      */
      $('form#step_comments').on('blur', 'input[name="comments"]', function(e){
          e.preventDefault();
  
          if ( $(this).val() == '' ) {
              alert('Please fill up comment box.');
              return;
          }
  
          $(this).parents('form').trigger('submit');
      });
  
  
      $('form#step_comments').on('submit', function(e){
          e.preventDefault();
          var $this = $(this);
  
          var triggerClass = $(this).hasClass('not_form') ? 'update_status' : '';
  
          var formData = new FormData($(this)[0]);
          formData.append('action', 'update_comment_box');
          formData.append('update_status', triggerClass);
  
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
                  if ( response['success'] && response['data']['status'] != '' ) {
                      $this.parents('tr').find('#project_table_status div').addClass('status_2');
                  }
              },
              error: function(response) {
                  alert(response['data'][0]['message'])
              }
          });        
      });
  
  });