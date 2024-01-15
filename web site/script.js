const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add('active');
    container.querySelector('.sign-up').classList.remove('hidden');
    container.querySelector('.sign-in').classList.add('hidden');
});

loginBtn.addEventListener('click', () => {
    container.classList.remove('active');
    container.querySelector('.sign-in').classList.remove('hidden');
    container.querySelector('.sign-up').classList.add('hidden');
});



