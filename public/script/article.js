const {scrollTop, clientHeight} = document.documentElement;

const onScroll = () => {
    addEventListener('scroll', articleEffect)
}

const articleEffect = () => {
    const allArticles = [...document.querySelectorAll('.contain_article')];

    for (let i = 0; i < allArticles.length; i++) {

        const topElementToTopViewport = allArticles[i].getBoundingClientRect().top;
      
          if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8) {
            allArticles[i].style.opacity = '1';
            allArticles[i].style.transition = '0.8s ease-in';
          } 
          else {
            allArticles[i].style.opacity = '0';
          }
    }
  }

  addEventListener('load', onScroll);