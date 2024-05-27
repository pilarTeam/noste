
jQuery(document).ready(function ($) {
    // console.log('print.js');
    [...document.querySelectorAll('input[type="checkbox"][checked]')].map(checkbox => {
        checkbox.previousElementSibling.children[0].classList.remove('hidden');
        return checkbox;
    });
});