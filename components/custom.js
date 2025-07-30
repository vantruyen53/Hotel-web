const btnToggle = document.querySelector('.toggle-btn');
const dropDown = document.querySelector('.dropDown');
const closeDropDown = document.querySelector('.close-toggle-btn');

btnToggle.onclick = function(){
    dropDown.classList.toggle('open');
};
closeDropDown.onclick = function(){
    dropDown.classList.remove('open');
}

// scroll navbar 
const navbar = document.querySelector('.compenentNav nav .container-fluid');
const logo = document.querySelector('.compenentNav nav .logo');
const a = document.querySelectorAll('.compenentNav nav li a');
const book = document.querySelector('.compenentNav nav .action-btn');
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $(navbar).addClass('scroll');
             $(logo).addClass('scroll');
             $(a).addClass('scroll');
             $(book).addClass('scroll');
        }else{
             $(navbar).removeClass('scroll');
             $(logo).removeClass('scroll');
             $(a).removeClass('scroll');
             $(book).removeClass('scroll');
        }
    });
});
