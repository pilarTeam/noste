/**
 * @project Noste
 * @author theDevGarden
 * 
 * @responsibility Remal Mahmud
 * @url https://github.com/mahmudremal/
 * @frontend https://github.com/pilarTeam/nosteHTML
 */

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
      var data = {};
      new FormData(theForm).forEach((value, key) => data[key] = value);
      wp.ajax.post('project_submit_document', data).done(json => {
        submit.disabled = false;
        console.log(json);
        // var template = Twig.twig({
        //   data: 'Please wait for a while until the preview templates are loaded{{ threedotsloader }}'
        // });
        var hiddenCard = document.querySelector('.card_item.relative.h-fit .card_header');
        if (hiddenCard && hiddenCard.nextElementSibling) {
          var printBtn = hiddenCard.lastElementChild;
          hiddenCard = hiddenCard.nextElementSibling;
          hiddenCard.style.display = 'none';
          var printPrevCard = document.createElement('div');
          // printPrevCard.classList.add('card_item', 'relative', 'h-fit');
          printPrevCard.className = hiddenCard.className;
          printPrevCard.classList.add('section-to-print');
          
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
            setTimeout(() => {
              printPrevCard.querySelectorAll(`${['radio', 'checkbox'].map(type => `input[type=${type}]`).join(', ')}, select, textarea`).forEach(input => {
                ['readonly', 'disabled'].forEach(attr => input.setAttribute(attr, true));
                  input.classList.add(...['border-b', 'border-line']);
                  input.classList.remove(...['shadow-input', 'border-accent']);
              });
            }, 300);
          }, 300);
          
          // printPrevCard.innerHTML = template.render({threedotsloader: '<span class="dots3loader"></span>'});
          // fetch(`${main_ajax_object.theme_uri}/assets/js/twigs/example.twig`)
          // .then(data => data.text())
          // .then(body => {
          //   console.log(body)
          //   var template = Twig.twig({data: body});
          //   printPrevCard.innerHTML = template.render(json);
          //   // print();
          // }).catch(error => console.error(error));
          // Twig.renderFile(`${main_ajax_object.theme_uri}/assets/js/twigs/example.twig`, json, (error, compiledHtml) => {
          //   if (error) {console.error(error);}
          //   printPrevCard.innerHTML = compiledHtml;
          // });
          hiddenCard.parentElement.insertBefore(printPrevCard, hiddenCard);
          if (!(printBtn.dataset?.handledPrintEvent)) {
            printBtn.dataset.handledPrintEvent = true;
            printBtn.addEventListener('click', (event) => {
              event.preventDefault();event.stopPropagation();
              print();// printDiv(printPrevCard);
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
function generateRandomString(length) {
  let result = '';
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz01 23456789';
  const charactersLength = characters.length;
  
  for (let i = 0; i < length; i++) {
    result += characters.charAt(Math.floor(Math.random() * charactersLength));
  }
  
  return result;
}

/**
 * Function to hook printing css on <head>
 */
// var style = document.createElement('style');
// style.type = 'text/css';
// style.innerHTML = ``;
// document.head.appendChild(style);

function printDiv(node) { 
  var divContents = node.innerHTML; 
  var a = window.open('', '', 'height=500, width=500'); 
  a.document.write('<html>'); 
  a.document.write('<body > <h1>Div contents are <br>'); 
  a.document.write(divContents); 
  a.document.write('</body></html>'); 
  a.document.close(); 
  a.print(); 
}