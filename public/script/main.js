const arrowDown = document.getElementById('arrow_down');
const containPara = document.getElementById('contain_para');
const nav = document.getElementById('nav');

const main = () => {
    arrowDown.addEventListener('click', clickArrow);
    addEventListener('scroll', scrollNav);
}

const clickArrow = () => {
    containPara.style.animation = 'apparition 1s forwards';
    containPara.style.display = 'flex'; 
}

const scrollNav = () => {
    if (window.scrollY > 160) {
        nav.classList.add('scroll_nav');
    } else {
        nav/classList.remove('scroll_nav');
    }
}

addEventListener('load', main);