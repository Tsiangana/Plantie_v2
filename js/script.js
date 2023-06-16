

let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () => {
    userBox.classList.toggle('active');
}