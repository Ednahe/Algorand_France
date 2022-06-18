const arrowDown = document.getElementById("arrow_down");
const containPara = document.getElementById("contain_para");
const body = document.querySelector("body");

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

// appel de la partie liste

const getAnim = () => {
  seeLi();
  addEventListener('scroll', animParaLeft);
  addEventListener('scroll', animParaRight);  
} 

// génération de l'effet

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

//fin partie liste

// partie clic svg
const clickArrow = () => {
  containPara.style.animation = "apparition 1s forwards";
  containPara.style.display = "flex";
};
// fin partie clic

// partie popup
// déclaration des éléments du dom nécessaire à l'apparition des popup
const info = [...document.querySelectorAll('.info')];
const popup = [...document.querySelectorAll('.popup')];
const infoTiny = document.getElementById("info_tiny");


const tinyRadius = () => {
  info[0].style.borderRadius = "24px";
}

const tinyEnd = () => {
  info[0].style.borderRadius = "23px";
}


// fonction de génération des différentes popup
const generatePopupTiny = () => {
  
  if (info[0].style.borderRadius === "24px") {
    popup[0].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[0].style.transform = "scale(0)";
  }
};
const generatePopupDex = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[1].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[1].style.transform = "scale(0)";
  }
};
const generatePopupFi = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[2].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[2].style.transform = "scale(0)";
  }
};
const generatePopupRand = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[3].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[3].style.transform = "scale(0)";
  }
};
const generatePopupGems = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[4].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[4].style.transform = "scale(0)";
  }
};
const generatePopupYldy = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[5].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[5].style.transform = "scale(0)";
  }
};
const generatePopupStake = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[6].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[6].style.transform = "scale(0)";
  }
};
const generatePopupZone = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[7].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
    popup[7].style.transform = "scale(0)";
  }
};
const generatePopupSmile = () => {
  if (info[0].style.borderRadius === "24px") {
    popup[8].style.transform = "scale(1)";
  } else if (info[0].style.borderRadius === "23px") {
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
  tinyRadius();
  generatePopupDex();
};
const closeAlgodex = () => {
  tinyEnd();
  generatePopupDex();
};
const openFi = () => {
  tinyRadius();
  generatePopupFi();
};
const closeFi = () => {
  tinyEnd();
  generatePopupFi();
};
const openRand = () => {
  tinyRadius();
  generatePopupRand();
};
const closeRandGal = () => {
  tinyEnd();
  generatePopupRand();
};
const openGems = () => {
  tinyRadius();
  generatePopupGems();
};
const closeAlgogems = () => {
  tinyEnd();
  generatePopupGems();
};
const openYieldly = () => {
  tinyRadius();
  generatePopupYldy();
};
const closeYieldly = () => {
  tinyEnd();
  generatePopupYldy();
};
const openStake = () => {
  tinyRadius();
  generatePopupStake();
};
const closeAlgostake = () => {
  tinyEnd();
  generatePopupStake();
};
const openZone = () => {
  tinyRadius();
  generatePopupZone();
};
const closeZoneGame = () => {
  tinyEnd();
  generatePopupZone();
};
const openSmile = () => {
  tinyRadius();
  generatePopupSmile();
};
  const closeSmileGame = () => {
  tinyEnd();
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