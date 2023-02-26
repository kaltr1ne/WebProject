const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');

if(bar){
    bar.addEventListener('click', () => {
    nav.classList.add('active');
    })
}

if(close){
    close.addEventListener('click',() => {
        nav.classList.remove('active')
    })
}

function validoMeRegex(){
    var name_surname = /^[a-zA-Z]{5,10}$/;
    var name = document.getElementById('name').value;
    var usernameRegex = /^[a-zA-Z]{5,10}$/;
    var username = document.getElementById('username').value;
    var emailPattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    var email = document.getElementById('email').value;

    //Le te fillon me shkronje te madhe le te permbaje karaktere te vogla sa ka qef perdoruesi dhe le te perfundoj me numer
    var passwordRegex =/^[A-Z]{1}[a-z]{1,}[0-9]{1}$/
    var password = document.getElementById('password').value;

    if(name_surname.test(name)){
        console.log('Name is fine!');
    }
    else{
        alert('Name is wrong!');
    }
    if(usernameRegex.test(username)){
        console.log('Username is fine!');
    }else{
        alert("Username is Wrong!");
    }
    if(passwordRegex.test(password)){
        console.log("Password is fine!");
    }else{
        alert("Password is Wrong!");
    }
    if(emailPattern.test(email)){
        console.log("Email is fine!");
    }
    else{
        alert("Email is wrong!");
    }

}