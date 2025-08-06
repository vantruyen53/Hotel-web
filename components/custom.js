const btnToggle = document.querySelector('.toggle-btn');
const dropDown = document.querySelector('.dropDown');
const closeDropDown = document.querySelector('.close-toggle-btn');
const containerFluid = document.querySelector('.container-fluid');
const actionBtn = document.querySelector('.action-btn');

btnToggle.onclick = function(){
    dropDown.classList.toggle('open');
};
closeDropDown.onclick = function(){
    dropDown.classList.remove('open');
}

// scroll navbar 
const logo = document.querySelector('.compenentNav nav .logo');
const a = document.querySelectorAll('.compenentNav nav li a');
const toggleBtn = document.querySelectorAll('.compenentNav nav .toggle-btn');
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
             $(logo).addClass('scroll');
             $(a).addClass('scroll');
             $(toggleBtn).addClass('scroll');
             $(containerFluid).addClass('scroll');
             $(actionBtn).addClass('scroll');
        }else{
             $(logo).removeClass('scroll');
             $(a).removeClass('scroll');
             $(toggleBtn).removeClass('scroll');
             $(containerFluid).removeClass('scroll');
             $(actionBtn).removeClass('scroll');
        }
    });
});


