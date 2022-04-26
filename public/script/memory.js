const section = document.getElementById("section_memory");
const compteurVie = document.getElementById("span_memory");
let vie = 6;

// générer les vies
compteurVie.textContent = vie;

// placer aléatoirement les images dans le tableau
const getData = () => [
  {imgSrc: '../image_memory/image/akita.png', name:'akita'},
  {imgSrc: '../image_memory/image/algo.jpg', name:'algo'},
  {imgSrc: '../image_memory/image/arcc.png', name:'arcc'},
  {imgSrc: '../image_memory/image/gems.png', name:'gems'},
  {imgSrc: '../image_memory/image/headline.png', name:'headline'},
  {imgSrc: '../image_memory/image/opul.png', name:'opul'},
  {imgSrc: '../image_memory/image/smile.png', name:'smile'},
  {imgSrc: '../image_memory/image/xet.png', name:'xet'},
  {imgSrc: '../image_memory/image/yieldly.jpg', name:'yldy'},
  {imgSrc: '../image_memory/image/Zone_logo.jpeg', name:'zone'},
  {imgSrc: '../image_memory/image/akita.png', name:'akita'},
  {imgSrc: '../image_memory/image/algo.jpg', name:'algo'},
  {imgSrc: '../image_memory/image/arcc.png', name:'arcc'},
  {imgSrc: '../image_memory/image/gems.png', name:'gems'},
  {imgSrc: '../image_memory/image/headline.png', name:'headline'},
  {imgSrc: '../image_memory/image/opul.png', name:'opul'},
  {imgSrc: '../image_memory/image/smile.png', name:'smile'},
  {imgSrc: '../image_memory/image/xet.png', name:'xet'},
  {imgSrc: '../image_memory/image/yieldly.jpg', name:'yldy'},
  {imgSrc: '../image_memory/image/Zone_logo.jpeg', name:'zone'}
];
const tab = getData();

// placement aléatoire dans le tableau

const random = () => {
  const cardsData = getData();
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
    card.classList = 'card';
    face.classList = 'face';
    back.classList = 'back';
    // lié les images aux cartes
    face.src = item.imgSrc;
    card.setAttribute('name', item.name);
    // afficher les cartes dans la section
    section.appendChild(card);
    card.appendChild(face);
    card.appendChild(back);

    card.addEventListener('click', (e) => {
      card.classList.toggle("toggleCard");
      checkCards(e);
    })
  });
};

//vérification du click
const checkCards = (e) => {
  console.log(e);
  const clicked = e.target;
  clicked.classList.add("flip");
  const flipCard = document.querySelectorAll(".flip");
  const plateau = document.querySelectorAll('toggleCard');

  if(flipCard.length === 2) {
    if(flipCard[0].getAttribute('name') === flipCard[1].getAttribute('name')) {
      console.log("gagné");
      flipCard.forEach(card => {
        card.classList.remove('flip');
        card.style.pointerEvents = 'none';
      })
    } else {
      console.log("perdu");
      flipCard.forEach(card => {
        card.classList.remove('flip');
        setTimeout(() => {
          card.classList.remove('toggleCard');
        }, 1000);
      });
      vie--;
      compteurVie.textContent = vie;
      if(vie === 0) {
        restart("Perdu :'(");        
      };
    };
  };
  // partie gagnée
  if(plateau.length === 20) {
    restart("bien joué :)");
  }
};

// réinitialisation
const restart = (text) => {
  let cardData = random();
  let faces = document.querySelectorAll(".face");
  let cards = document.querySelectorAll(".card");
  section.style.pointerEvents = "none";
  cardData.forEach((item, index) => {
    cards[index].classList.remove("toggleCard");
    //randomize
    setTimeout(() => {
      cards[index].style.pointerEvents = "all";
      faces[index].src = item.imgSrc;
      cards[index].setAttribute("name", item.name);
      section.style.pointerEvents = "all";
    }, 1000);  
  })
  vie = 6;
  compteurVie.textContent = vie;
  setTimeout(() => {
    window.alert(text)
  }, 100);
};

addEventListener('load', cardGenerator);