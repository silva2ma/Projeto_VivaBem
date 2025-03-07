let container = document.querySelector('.container');
let registerBtn = document.querySelector('.register');
let loginBtn = document.querySelector('.login');

registerBtn.addEventListener('click', function() {
    container.classList.add('active');
});

loginBtn.addEventListener('click', function() {
    container.classList.remove('active');
});
