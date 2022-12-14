$(document).ready(function($) {
    $("#sync1").owlCarousel({
        slideSpeed : 300,
        paginationSpeed : 500,
        items: 1,
        singleItem: true,
        autoPlay : 4000,
        margin: 24,
        loop: true,
        nav: true,
        navigation : true,
        navText: [
            "<img class='owl-prev' src='../img/icons/l.png'>",
            "<img class='owl-next' src='../img/icons/r.png'>"
        ],
    });
});

/* Start register.blade */

let btn = document.querySelector('#btn_eye');
let input = document.querySelector('#password');

btn.addEventListener('click',()=> {
    if ( input.type === "password") {
        input.type = "text"
        $('.fa_eye').addClass('d-none');
        $('.fa_eye').removeClass('d-block');
        $('.fa_eye-slash').addClass('d-block');
        $('.fa_eye-slash').removeClass('d-none');
    } else {
        input.type = "password"
        $('.fa_eye').addClass('d-block');
        $('.fa_eye').removeClass('d-none');
        $('.fa_eye-slash').addClass('d-none');
        $('.fa_eye-slash').removeClass('d-block');
    }
})

let btn_confirm = document.querySelector('#btn_eye_slash');
let input_confirm = document.querySelector('#password-confirm');

btn_confirm.addEventListener('click',()=> {
    if ( input_confirm.type === "password") {
        input_confirm.type = "text"
        $('.c_fa_eye').addClass('d-none');
        $('.c_fa_eye').removeClass('d-block');
        $('.c_fa_eye-slash').addClass('d-block');
        $('.c_fa_eye-slash').removeClass('d-none');
    } else {
        input_confirm.type = "password"
        $('.c_fa_eye').addClass('d-block');
        $('.c_fa_eye').removeClass('d-none');
        $('.c_fa_eye-slash').addClass('d-none');
        $('.c_fa_eye-slash').removeClass('d-block');
    }
})

/* End register.blade */


