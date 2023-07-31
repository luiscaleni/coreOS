const navContent = document.getElementById('navMobile');
const nav = document.getElementById('nav');

const menuButtonOpen = document.getElementById("menuButtonOpen");
const menuButtonClose = document.getElementById("menuButtonClose");

menuButtonOpen.addEventListener('click', ()=> {
    nav.classList.add("animate");
    menuButtonClose.style.display="block";
    menuButtonOpen.style.display="none";
});

menuButtonClose.addEventListener('click', ()=> {
    nav.classList.remove("animate");
    nav.style.zIndex=1;
    menuButtonOpen.style.display="block";
    menuButtonClose.style.display="none";
})