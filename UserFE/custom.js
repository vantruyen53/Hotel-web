// Booking services 
var modal = document.getElementById("register-service");
var btn = document.querySelectorAll("#book-service");
var closeBookService = document.querySelectorAll('#close-book-service');
var bookService = document.getElementById('action-book');
var bookMessage = document.getElementById('book-service-success');

// Reset message
const message = document.querySelectorAll('.messageContent');
    message.forEach(item =>{
        item.style.display='none';
});

btn.forEach(click =>{
    click.onclick=function(){
        modal.style.display='block';
    };
});

closeBookService.forEach(close =>{
    close.onclick=function(){
        modal.style.display='none';
    };
});

bookService.onclick= function(){
    bookMessage.style.display="flex";

        // Load message register services 
    setTimeout(()=>{
        message.forEach(item =>{
            item.style.display='block';
        })
    },1070);
    // Close load message register services 
    setTimeout(()=>{;
        modal.style.display='none';
        bookMessage.style.display="none";
        message.forEach(item =>{
            item.style.display='none';
        });
    },4000);
};
