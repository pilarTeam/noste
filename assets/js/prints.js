
jQuery(document).ready(function ($) {
    // console.log('print.js');
    [...document.querySelectorAll('input[type="checkbox"][checked]')].map(checkbox => {
        checkbox.previousElementSibling.children[0].classList.remove('hidden');
        return checkbox;
    });
    // document.querySelectorAll('form.ajax-submit').forEach(target => {
    //     target.addEventListener("contextmenu", (event) => {
    //         event.preventDefault();
    //     });
    // });
    document.addEventListener('keypress', (event) => {
        if (event.shiftKey) {
            switch (event.key) {
                case 'F':
                    // document.querySelectorAll('input[type="checkbox"]:not(:checked)').forEach(check => check.checked = true);
                    // document.querySelectorAll('input[type="text"][value=""]').forEach(check => check.value = Math.random(0, 999));
                    // console.log('All inputs are blank filled with random numbers and all checkboxs are not checked mark them checked');
                    break;
                default:
                    break;
            }
        }
    });
    // 
});