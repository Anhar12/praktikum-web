const hambuger = document.getElementById('btn-hamburger');
const sideBar = document.querySelector('.sidebar-section');
const overlay = document.querySelector('.overlay');
const closeBtn = document.getElementById('btn-close');

hambuger.addEventListener('click', function() {
    sideBar.classList.add('sidebar-transition');
    overlay.style.display = 'block';
});

closeBtn.addEventListener('click', function() {
    sideBar.classList.remove('sidebar-transition');
    overlay.style.display = 'none';
});

overlay.addEventListener('click', function() {
    sideBar.classList.remove('sidebar-transition');
    overlay.style.display = 'none';
});

window.addEventListener("resize", function(event) {
    if (window.innerWidth > 768) {
        closeBtn.click();
    }
});