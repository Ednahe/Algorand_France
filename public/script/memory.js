let lastSelect = [];
let nbView = 0;
let ready = true;
let play = [
  [0, 0, 0, 0],
  [0, 0, 0, 0],
  [0, 0, 0, 0],
  [0, 0, 0, 0],
  [0, 0, 0, 0],
];

const main = () => {
  seeTab();
};

// fonction faisant apparaitre le tableau dans le dom
const seeTab = () => {
  let create = "";
  for (let i = 0; i < play.length; i++) {
    create += "<div>";
    for (let j = 0; j < play[i].length; j++) {
      if (play[i][j] === 0) {
        create +=
          "<button class='btn' onClick='verif(\"" +
          i +
          "-" +
          j +
          "\")'>?</button>";
      } else {
        create += "<img src='" + getImage(play[i][j]) + "' class='img'>";
      }
    }
    create += "</div>";
  }
  memory.innerHTML = create;
};

// fonction d'assignation d'image à un emplacement (numéro) du tableau
const getImage = (valeur) => {
  let generateImg = "";
  switch (valeur) {
    case 1:
      generateImg += "../image_memory/image/akita.png";
      break;
    case 2:
      generateImg += "./../image_memory/image/algo.jpg";
      break;
    case 3:
      generateImg += "./../image_memory/image/arcc.png";
      break;
    case 4:
      generateImg += "./../image_memory/image/gems.png";
      break;
    case 5:
      generateImg += "./../image_memory/image/headline.png";
      break;
    case 6:
      generateImg += "./../image_memory/image/opul.png";
      break;
    case 7:
      generateImg += "./../image_memory/image/smile.png";
      break;
    case 8:
      generateImg += "./../image_memory/image/xet.png";
      break;
    case 9:
      generateImg += "./../image_memory/image/yieldly.jpg";
      break;
    case 10:
      generateImg += "./../image_memory/image/Zone_logo.jpeg";
      break;
    default:
      console.log("bug");
  }
  return generateImg;
};

// fonction qui déclanche un évènement au 2nd clic
const verif = (bouton) => {
  if (ready) {
    nbView++;
    let line = bouton.substr(0, 1);
    let column = bouton.substr(2, 1);
    play[line][column] = playResult[line][column];
    seeTab();

    if (nbView > 1) {
      ready = false;
      setTimeout(() => {
        if (play[line][column] !== playResult[lastSelect[0]][lastSelect[1]]) {
          play[line][column] = 0;
          play[lastSelect[0]][lastSelect[1]] = 0;
        }
        seeTab();
        ready = true;
        nbView = 0;
      }, 500);
    } else {
      lastSelect = [line, column];
    }
  }
};

// fonction pour placer aléatoirement les images dans le tableau
const generateRandomTab = () => {
  let tab = [];
  let nbImagePosition = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

  for (let i = 0; i < 5; i++) {
    let ligne = [];
    for (let j = 0; j < 4; j++) {
      let end = false;
      while (!end) {
        let randomImage = Math.floor(Math.random() * 10);
        if (nbImagePosition[randomImage] < 2) {
          ligne.push(randomImage + 1);
          nbImagePosition[randomImage]++;
          end = true;
        }
      }
    }
    tab.push(ligne);
  }
  return tab;
};

let playResult = generateRandomTab();

addEventListener("load", () => {
  const memory = document.getElementById("memory");
  seeTab();  
});