const registerLink = document.querySelector('.linkToRegister');
const loginLink = document.querySelector('.linkToLogin');

// forms variables

const registerForm = document.querySelector('.registerForm');
const loginForm = document.querySelector('.loginForm');

// form submit buttons

const loginBtn = document.querySelector('.login-btn');
const registerBtn = document.querySelector('.register-btn');

registerLink.addEventListener('click', () => {
    registerForm.style.display = 'block';
    loginForm.style.display = 'none';
})

loginLink.addEventListener('click', () => {
    registerForm.style.display = 'none';
    loginForm.style.display = 'block';
})

loginBtn.addEventListener('click', () => {sessionStorage.formRoute = 'login'})
registerBtn.addEventListener('click', () => {sessionStorage.formRoute = 'register'})

window.onload = () => {
    if (sessionStorage.formRoute && sessionStorage.formRoute === 'register') {
        registerForm.style.display = 'block';
        loginForm.style.display = 'none';
    } else{
        sessionStorage.formRoute = 'login';
        registerForm.style.display = 'none';
        loginForm.style.display = 'block';
    }
}