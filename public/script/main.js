const header = document.getElementById("header");
const hamburger = document.querySelector('.hamburger');
const ulMenu = document.querySelector('.ul_nav');

// fonction principale
const main = () => {
  hamburgerMenu();
  addEventListener("scroll", scrollNav);
};
// fin de la fonction principale 

// partie nav

const scrollNav = () => {
  if (window.scrollY > 80) {
    header.classList.add("scroll_head");
  } else {
    header.classList.remove("scroll_head");
  }
}; 
// fin partie nav

// hamburger menu
const hamburgerMenu = () => {

  hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('burger');
      ulMenu.classList.toggle('burger');
  })

  document.querySelectorAll('header > nav > ul > li > a').forEach(n => n.addEventListener('click', () => {
      hamburger.classList.remove('burger');
      ulMenu.classList.remove('burger');
  }))
}
// fin hamburger menu

addEventListener("load", main);