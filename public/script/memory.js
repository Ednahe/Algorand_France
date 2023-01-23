const container = document.getElementById("contain_memory");
const nbTry = document.getElementById("span_memory");
const endTry = document.getElementById("end_try");
let tryIt = 12;

// générer les vies
nbTry.textContent = tryIt;

// placer aléatoirement les images dans le tableau
const img = () => [
  { imgSrc: "./image_memory/image/akita.png", name: "akita" },
  { imgSrc: "./image_memory/image/algo.jpg", name: "algo" },
  { imgSrc: "./image_memory/image/choice.png", name: "choice" },
  { imgSrc: "./image_memory/image/gems.png", name: "gems" },
  { imgSrc: "./image_memory/image/headline.png", name: "headline" },
  { imgSrc: "./image_memory/image/opul.png", name: "opul" },
  { imgSrc: "./image_memory/image/smile.png", name: "smile" },
  { imgSrc: "./image_memory/image/xet.png", name: "xet" },
  { imgSrc: "./image_memory/image/yieldly.jpg", name: "yldy" },
  { imgSrc: "./image_memory/image/Zone_logo.jpeg", name: "zone" },
  { imgSrc: "./image_memory/image/akita.png", name: "akita" },
  { imgSrc: "./image_memory/image/algo.jpg", name: "algo" },
  { imgSrc: "./image_memory/image/choice.png", name: "choice" },
  { imgSrc: "./image_memory/image/gems.png", name: "gems" },
  { imgSrc: "./image_memory/image/headline.png", name: "headline" },
  { imgSrc: "./image_memory/image/opul.png", name: "opul" },
  { imgSrc: "./image_memory/image/smile.png", name: "smile" },
  { imgSrc: "./image_memory/image/xet.png", name: "xet" },
  { imgSrc: "./image_memory/image/yieldly.jpg", name: "yldy" },
  { imgSrc: "./image_memory/image/Zone_logo.jpeg", name: "zone" },
];
const tab = img();

// placement aléatoire dans le tableau
const random = () => {
  const cardsData = img();
  cardsData.sort(() => Math.random() - 0.5);
  return cardsData;
};

// Générer le tableau en html
const cardGenerator = () => {
  const cardsData = random();
  const cards = document.querySelectorAll(".card");
  cardsData.forEach((item) => {
    const card = document.createElement("div");
    const face = document.createElement("img");
    const back = document.createElement("div");
    card.classList = "card";
    face.classList = "face";
    back.classList = "back";
    // lié les images aux cartes
    face.src = item.imgSrc;
    card.setAttribute("name", item.name);
    // afficher les cartes dans le container
    container.appendChild(card);
    card.appendChild(face);
    card.appendChild(back);

    card.addEventListener("click", (e) => {
      card.classList.toggle("cards");
      checkCards(e);
    });
  });
};

//vérification du click
const checkCards = (e) => {
  const clicked = e.target;
  clicked.classList.add("flip");
  const flipCard = document.querySelectorAll(".flip");
  const plateau = document.querySelectorAll(".cards");

  if (flipCard.length === 2) {
    if (flipCard[0].getAttribute("name") === flipCard[1].getAttribute("name")) {
      flipCard.forEach((card) => {
        card.classList.remove("flip");
        card.style.pointerEvents = "none";
      });
    } else {
      flipCard.forEach((card) => {
        card.classList.remove("flip");
        setTimeout(() => {
          card.classList.remove("cards");
        }, 1000);
      });
      tryIt--;
      nbTry.textContent = tryIt;
      if (tryIt === 0) {
        restart();
        notificationLoose();
      }
    }
  }
  // Si toutes les cartes ont été retourné = partie gagnée
  if (plateau.length === 20) {
    restart();
    notificationWin();
  }
};

// réinitialisation du jeu
const restart = (text) => {
  let cardData = random();
  let faces = document.querySelectorAll(".face");
  let cards = document.querySelectorAll(".card");
  container.style.pointerEvents = "none";
  cardData.forEach((item, index) => {
    cards[index].classList.remove("cards");
    //randomize
    setTimeout(() => {
      cards[index].style.pointerEvents = "all";
      faces[index].src = item.imgSrc;
      cards[index].setAttribute("name", item.name);
      container.style.pointerEvents = "all";
    }, 1000);
  });
  tryIt = 12;
  nbTry.textContent = tryIt;
  setTimeout(() => {
  }, 100);
};


// notification qui se déclanche une fois la partie terminée
const notificationWin = () => {
  const notif = document.createElement("p");
  notif.classList.add("notif");
  notif.innerText = "bien joué vous avez gagné";
  endTry.appendChild(notif);
  setTimeout(() => {
    notif.remove();
  }, 2000);
};

const notificationLoose = () => {
  const notif = document.createElement("p");
  notif.classList.add("notif");
  notif.innerText = "Dommage :(";
  endTry.appendChild(notif);
  setTimeout(() => {
    notif.remove();
  }, 2000);
};

addEventListener("load", cardGenerator);