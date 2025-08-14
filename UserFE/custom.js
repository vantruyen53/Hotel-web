// SHow modal
id="book-service"
var modal = document.getElementById("register-service");
var btn = document.querySelectorAll(".book-service");
var closeBookService = document.querySelector('#close-book-service');

// Book service click 
const userBookSerivce = document.querySelectorAll('.user-infor-book-services');
const timeFrame = document.getElementById('display-frame-time');
const setTime = document.querySelector('.set-time');

let costOfTeaCeremony = document.querySelector('.tea-ceremony-cost').textContent;
let costOfHotSpring = document.querySelector('.hot-spring-cost').textContent;
let costOfMassage = document.querySelector('.massage-cost').textContent;
let costOfMeditation = document.querySelector('.meditation-cost').textContent;
let costOfSauna = document.querySelector('.sauna-cost').textContent;


// SHow modal
btn.forEach(click =>{
    click.onclick=function(){
        modal.style.display='block';
    };
});

closeBookService.onclick =function(){
     modal.style.display='none';
        userBookSerivce.forEach(infor =>{
        infor.classList.remove('error');
        setTime.classList.remove('error');
        infor.value = '';
        timeFrame.textContent = '';
    });
};


// Book service click 
document.getElementById('booking-service').addEventListener('submit', function(even){
    even.preventDefault();

    let hasError = false;

    let userPhoneDiv = document.getElementById('phone');
    let userEmailDiv = document.getElementById('useremail');

    // Check input is empty 
    userBookSerivce.forEach(infor =>{
        if(infor.value.trim() ===""){
            hasError = true;
            infor.classList.add('error');
        }else{
            infor.classList.remove('error');
        }
    });
    if (timeFrame.textContent.trim() === "") {
        hasError = true;
        setTime.classList.add('error');
    } else{
        setTime.classList.remove('error');
    }

    // Check input regex 
    const patternPhone = /^(03|07|09|86)[0-9]{8}$/;
    let phoneResult = patternPhone.test(userPhoneDiv.value.trim());
    const patternEmail = /^[\w.-]+@gmail\.com$/;
    let emailResult = patternEmail.test(userEmailDiv.value.trim());
    if(!phoneResult){
        hasError = true;
        userPhoneDiv.classList.add('error');
    }else{
        userPhoneDiv.classList.remove('error');
    }
    if(!emailResult){
        hasError = true;
        userEmailDiv.classList.add('error');
    }else{
        userEmailDiv.classList.remove('error');
    }

    if(hasError === false){
        const form = document.querySelector('.register-service .modal-register form');
        form.action ="../BE/insertServices.php";
        form.submit();

        modal.style.display='none';
    }
});

