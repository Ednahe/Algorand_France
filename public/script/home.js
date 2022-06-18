const arrowDown = document.getElementById("arrow_down");
const containPara = document.getElementById("contain_para");
const body = document.querySelector("body");

// déclaration des éléments du dom nécessaire à l'apparition des popup
const info = [...document.querySelectorAll('.info')];
const popup = [...document.querySelectorAll('.popup')];
const infoTiny = document.getElementById("info_tiny");
const popupTiny = document.getElementById("popup_tiny");

const infoDex = document.getElementById("info_algodex");

const infoAlgofi = document.getElementById("info_algofi");

const infoRand = document.getElementById("info_rand");

const infoGems = document.getElementById("info_gems");

const infoYldy = document.getElementById("info_yldy");

const infoStake = document.getElementById("info_stake");

const infoZone = document.getElementById("info_zone");

const infoSmile = document.getElementById("info_smile");
// fin de la (longue) déclaration

// fonction principale
const mainHome = () => {
  arrowDown.addEventListener("click", clickArrow);
  clickOpen();
  closing();
  getAnim();
};
// fin de la fonction principale 

// partie liste
const tabPair = [];
const tabImpair = [];
const {scrollTop, clientHeight} = document.documentElement;

const seeLi = () => {
  const allLi = [...document.querySelectorAll(".para_li")];
  for(i = 0; i < allLi.length; i++) {
    if(i % 2 === 0) {
      tabPair.push(allLi[i]);
    } else {
      tabImpair.push(allLi[i]);
    }
  }
}

const getAnim = () => {
  seeLi();
  addEventListener('scroll', animParaLeft);
  addEventListener('scroll', animParaRight);  
} 

  const animParaLeft = () => {
    for(i = 0; i < tabPair.length; i++) {
      const topElementToTopViewport = tabPair[i].getBoundingClientRect().top;
      if (scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8) {
        tabPair[i].classList.add('para_li_left');
      } else {
        tabPair[i].classList.remove('para_li_left');
      }
    }
  }

  const animParaRight = () => {
    for(i = 0; i < tabImpair.length; i++) {
      const topElementToTopViewport = tabImpair[i].getBoundingClientRect().top;
      if (scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8) {
        tabImpair[i].classList.add('para_li_right');
      } else {
        tabImpair[i].classList.remove('para_li_right');
      }
    }
  }  
    /*   tabPair[0].style.animationDelay = '0.3s';
  tabPair[1].style.animationDelay = '0.6s';
  tabPair[2].style.animationDelay = '0.9s';
  console.log(tabPair[0]); */

//fin partie liste

// partie clic svg
const clickArrow = () => {
  containPara.style.animation = "apparition 1s forwards";
  containPara.style.display = "flex";
};
// fin partie clic

// partie popup
// déclaration du body
const bodyBackground = () => {
  body.style.background = "rgba(1, 1, 1, 0.5)";
};

const bodyNone = () => {
  body.style.background = "rgb(20, 22, 26)";
};

const test = () => {
  for (let i = 0; i < info.length; i++) {
    if(info[i].style.borderRadius !== "24px") {
      info[i].style.borderRadius = "24px";
    } else {
      console.log('test');
    }
  }
}

const tinyRadius = () => {
  infoTiny.style.borderRadius = "24px";
}

const tinyEnd = () => {
  infoTiny.style.borderRadius = "23px";
}

// fonction de génération des différentes popup
const generatePopupTiny = () => {
  
  if (infoTiny.style.borderRadius === "24px") {
    popup[0].style.transform = "scale(1)";
  } else if (infoTiny.style.borderRadius === "23px") {
    popup[0].style.transform = "scale(0)";
  }
};
const generatePopupDex = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[1].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[1].style.transform = "scale(0)";
  }
};
const generatePopupFi = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[2].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[2].style.transform = "scale(0)";
  }
};
const generatePopupRand = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[3].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[3].style.transform = "scale(0)";
  }
};
const generatePopupGems = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[4].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[4].style.transform = "scale(0)";
  }
};
const generatePopupYldy = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[5].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[5].style.transform = "scale(0)";
  }
};
const generatePopupStake = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[6].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[6].style.transform = "scale(0)";
  }
};
const generatePopupZone = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[7].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[7].style.transform = "scale(0)";
  }
};
const generatePopupSmile = () => {
  if (body.style.background === "rgba(1, 1, 1, 0.5)") {
    popup[8].style.transform = "scale(1)";
  } else if (body.style.background === "rgb(20, 22, 26)") {
    popup[8].style.transform = "scale(0)";
  }
};
// fin des fonctions générant les popup
// appel des fonctions spécifique aux popup
const openTiny = () => {
  tinyRadius();
  generatePopupTiny();
};
const closeTinyman = () => {
  tinyEnd();
  generatePopupTiny();
};
const openDex = () => {
  bodyBackground();
  generatePopupDex();
};
const closeAlgodex = () => {
  bodyNone();
  generatePopupDex();
};
const openFi = () => {
  bodyBackground();
  generatePopupFi();
};
const closeFi = () => {
  bodyNone();
  generatePopupFi();
};
const openRand = () => {
  bodyBackground();
  generatePopupRand();
};
const closeRandGal = () => {
  bodyNone();
  generatePopupRand();
};
const openGems = () => {
  bodyBackground();
  generatePopupGems();
};
const closeAlgogems = () => {
  bodyNone();
  generatePopupGems();
};
const openYieldly = () => {
  bodyBackground();
  generatePopupYldy();
};
const closeYieldly = () => {
  bodyNone();
  generatePopupYldy();
};
const openStake = () => {
  bodyBackground();
  generatePopupStake();
};
const closeAlgostake = () => {
  bodyNone();
  generatePopupStake();
};
const openZone = () => {
  bodyBackground();
  generatePopupZone();
};
const closeZoneGame = () => {
  bodyNone();
  generatePopupZone();
};
const openSmile = () => {
    bodyBackground();
    generatePopupSmile();
  };
  const closeSmileGame = () => {
    bodyNone();
    generatePopupSmile();
  };
// fin de l'appel des fonctions spécifique aux popup

const clickOpen = () => {
  info[0].addEventListener("click", openTiny);
  info[1].addEventListener("click", openDex);
  info[2].addEventListener("click", openFi);
  info[3].addEventListener("click", openRand);
  info[4].addEventListener("click", openGems);
  info[5].addEventListener("click", openYieldly);
  info[6].addEventListener("click", openStake);
  info[7].addEventListener("click", openZone);
  info[8].addEventListener("click", openSmile);
}; 

const closing = () => {
  document.querySelectorAll(".close").forEach(n => n.addEventListener("click", () => {
    closeTinyman();
    closeAlgodex();
    closeFi();
    closeRandGal();
    closeAlgogems();
    closeYieldly();
    closeAlgostake();
    closeZoneGame();
    closeSmileGame();
  }))
}

addEventListener("load", mainHome);