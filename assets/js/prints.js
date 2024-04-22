/**
 * @project Noste
 * @author theDevGarden
 * 
 * @responsibility Remal Mahmud
 * @url https://github.com/mahmudremal/
 * @frontend https://github.com/pilarTeam/nosteHTML
 */
// define global contants variables.
PRINTS_ARGS = {
  allowTwig: true
};

// document.querySelectorAll('#update-project .project-submit-btn').forEach(button => {
//   var form = button.parentElement.parentElement;
//   button.addEventListener('click', (event) => handleUpdateProjects(event, button, form));
//   form.addEventListener('submit', (event) => handleUpdateProjects(event, button, form));
// });
// function handleUpdateProjects(event, button, form) {
//   event.preventDefault();var data = {};var submit = button;
//   new FormData(form).forEach((value, key) => data[key] = value);
//   if (data?.action) {delete data.action;}

//   wp.ajax.post('update_a_project', data).done(json => {
//     submit.disabled = false;console.log(json);
//     if (json?.permalink != '') {
//       location.replace(json.permalink);
//     }
//   }).fail(error => {
//     console.error(error);
//     submit.disabled = false;
//   });
// }
/**
 * Submission events handling to send submission backend and getting response.
 */
document.querySelectorAll('.btn.gap-2.border.border-accent.bg-accent.text-white').forEach(submit => {
  if (submit.nodeName == 'A') {
    var btn = document.createElement('button');
    btn.className = submit.className;
    btn.innerHTML = submit.innerHTML;
    submit.parentElement.insertBefore(btn, submit);
    submit.remove();submit = btn;
  }
  var theForm = submit.parentElement.parentElement.previousElementSibling.querySelector('form');
  submit.addEventListener('click', async (event) => {
    event.preventDefault();submit.disabled = true;
    var isConfirmed = await confirm('Are you confirming it?');
    if (theForm && isConfirmed) {
      var formData = new FormData(theForm);
      if (typeof main_ajax_object?.query === 'object') {
        formData.append('ref_queries', JSON.stringify(main_ajax_object.query));
      }
      var data = Object.fromEntries(formData);
      // console.log(data);
      // formData.forEach((value, key) => data[key] = value);
      
      wp.ajax.post('project_submit_document', data).done(json => {
        submit.disabled = false;
        // console.log(json);
        if (PRINTS_ARGS?.allowTwig) {
          var template = Twig.twig({
            data: 'Please wait for a while until the preview templates are loaded{{ threedotsloader }}'
          });
        }
        var hiddenCard = document.querySelector('.card_item.relative.h-fit .card_header');
        if (hiddenCard && hiddenCard.nextElementSibling) {
          var printBtn = hiddenCard.lastElementChild;
          hiddenCard = hiddenCard.nextElementSibling;
          hiddenCard.style.display = 'none';
          var printPrevCard = document.createElement('div');
          // printPrevCard.classList.add('card_item', 'relative', 'h-fit');
          printPrevCard.className = hiddenCard.className;
          printPrevCard.classList.add('section-to-print');
          
          if (PRINTS_ARGS?.allowTwig) {
            printPrevCard.innerHTML = template.render({threedotsloader: '<span class="dots3loader"></span>'});
            if (typeof json?.template !== 'string') {json.template = 'blank'}
            fetch(`${main_ajax_object.theme_uri}/assets/js/twigs/${json?.template}.twig`)
            .then(data => data.text())
            .then(body => {
              // console.log(body);
              var template = Twig.twig({data: body});
              json.submission = json?.submission??{};
              json.submission.locale_args = main_ajax_object;
              printPrevCard.innerHTML = template.render(json.submission);
              submit.disabled = true;
            }).catch(error => console.error(error));
          } else {
            printPrevCard.innerHTML = hiddenCard.innerHTML;
            setTimeout(() => {
              Object.keys(json).forEach(key => {
                printPrevCard.querySelectorAll(`[name=${key}], [name="${key}[]"]`).forEach(input => {
                  // 
                  switch (input.type) {
                    case 'radio':
                    case 'checkbox':
                      if (typeof json[key] !== 'object') {
                        json[key] = [json[key]];
                      }
                      if (json[key].includes(input.value)) {
                        input.checked = true;
                      }
                      ['readonly', 'disabled'].forEach(attr => input.setAttribute(attr, true));
                      input.classList.add(...['border-b', 'border-line']);
                      input.classList.remove(...['shadow-input', 'border-accent']);
                      // if (true) {}
                      console.log(key, input)
                      break;
                    default:
                      var text = document.createElement('p');
                      text.className = input.className;
                      text.classList.add('text-sm', 'text-[#818D93]');
                      text.innerHTML = json[key];
                      ['shadow-input'].forEach(cls => text.classList.remove(cls));
                      // 
                      input.parentElement.insertBefore(text, input);
                      input.remove();
                      break;
                  }
                });
              });
              // 
              setTimeout(() => {
                printPrevCard.querySelectorAll(`${['radio', 'checkbox'].map(type => `input[type=${type}]`).join(', ')}, select, textarea`).forEach(input => {
                  ['readonly', 'disabled'].forEach(attr => input.setAttribute(attr, true));
                    input.classList.add(...['border-b', 'border-line']);
                    input.classList.remove(...['shadow-input', 'border-accent']);
                });
              }, 300);
            }, 300);
          }
          // 
          hiddenCard.parentElement.insertBefore(printPrevCard, hiddenCard);
          if (!(printBtn.dataset?.handledPrintEvent)) {
            printBtn.dataset.handledPrintEvent = true;
            printBtn.addEventListener('click', (event) => {
              event.preventDefault();event.stopPropagation();
              print();
            });
          }
        }
      }).fail(error => {
        console.error(error);
        submit.disabled = false;
      });
    } else {
      submit.disabled = false;
    }
  });
  
});
function generateRandomString(length) {
  let result = '';
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01 23456789';
  const charactersLength = characters.length;
  
  for (let i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  
  return result;
}
document.addEventListener("keypress", (event) => {
  console.log(event)
  switch (event.key) {
    case 'F':
      if (event.shiftKey) {
        document.querySelectorAll('form').forEach(theForm => {
          theForm.querySelectorAll(`${['text', 'email', 'tel'].map(type => `input[type=${type}]`).join(', ')}, textarea`).forEach(input => {
            switch (input.nodeName) {
              case 'TEXTAREA':
                input.innerHTML = generateRandomString(300)
                break;
              default:
                input.value = generateRandomString(30)
                break;
            }
          });
        });
      }
      break;
    default:
      break;
  }
}, false);


/**
 * Function to hook printing css on <head>
 */
// var style = document.createElement('style');
// style.type = 'text/css';
// style.innerHTML = ``;
// document.head.appendChild(style);

/**
 * prevent hash acnhors on click events.
 */
document.querySelectorAll('a[href="#!"], a[href="#"]').forEach(anchor => {
  anchor.addEventListener('click', (event) => event.preventDefault());
});
/**
 * Handle Submission on global form
 */
document.querySelectorAll('#global-form-submit').forEach(submit => {
  submit.addEventListener('click', (event) => {
    event.preventDefault();
    document.querySelector('#global-form').dispatchEvent(new Event('submit'));
  });
});
document.querySelectorAll('#global-form').forEach(form => {
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (confirm('Are you sure?')) {
      var formData = new FormData(form);
      /**
       * Validation goes here.
       */
      wp.ajax.post('global_form_' + form.dataset.type, Object.fromEntries(formData)).done(json => {
        if (json?.reload) {location.reload();}
        // 
        if (json?.template) {
          // 
          var hiddenCard = form;
          var printPrevCard = document.createElement('div');
          // printPrevCard.classList.add('card_item', 'relative', 'h-fit');
          printPrevCard.className = hiddenCard.className;
          printPrevCard.classList.add('section-to-print');
          // 
          fetch(`${main_ajax_object.theme_uri}/assets/js/twigs/${json?.template}.twig`)
          .then(data => data.text())
          .then(body => {
            // console.log(body);
            var template = Twig.twig({data: body});
            json.submission = json?.submission??{};
            json.submission.locale_args = main_ajax_object;
            printPrevCard.innerHTML = template.render(json.submission);

            // 
            hiddenCard.style.display = 'none';
            hiddenCard.parentElement.insertBefore(printPrevCard, hiddenCard);
          }).catch(error => console.error(error));
        }
        // 
      }).fail(error => {
        console.error(error);
      });
    }
  });
});