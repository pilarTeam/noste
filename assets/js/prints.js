
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
    
    // document.querySelectorAll('input[type="checkbox"]:not(:checked)').forEach(check => check.checked = true);
    // document.querySelectorAll('input[type="text"][value=""]').forEach(check => check.value = Math.random(0, 999));
});