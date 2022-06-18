<?php
include_once "./../view/template/head.php";
include_once "./../view/template/_navbar.php";
?>

<!-- première partie -->

<h1>Algorand la blockchain 3.0</h1>
<section class="first_section">
  <div class="contain_img_background"></div>
</section>

<!-- fin première partie -->
<!-- seconde partie -->

<section class="second_section">
  <h2 class="first_title">
    Algorand c'est quoi au juste ?
    <div class="contain_svg" id="arrow_down">
      <img src="./image/plus-solid.svg" alt="symbole plus" class="arrow_svg">
    </div>
  </h2>
  <article class="contain_para" id="contain_para">
    <p class="first_para">
      Algorand est un projet créé par Silvio Micali, un informaticien
      italo-américain,professeur d’informatique au Département d’ingénierie
      électrique et informatique du MIT depuis 1983. Sa recherche porte sur
      cryptographie théorique et sécurité de l’information. Micali a été lauréat
      du Prix Gödel en 1993 et du prix Turing 2012 (l’équivalent du prix Nobel).
      Ses travaux fondamentaux sur la cryptographie asymétrique sont un pilier
      du domaine. Il est également le créateur du très connue Zero Knowledge
      Proof. Algorand a pour objectif de résoudre les trois principaux problèmes
      rencontrés aujourd’hui par les blockchains, également appelé trilemme de
      la blockchain : sécurité, évolutivité et décentralisation.
      Dans l’algorithme de consensus d’Algorand, appelé Pure PoS, le réseau
      associe sa sécurité à l’honnêteté de la majorité. Il n’existe pas de
      mécanisme de sanction, également appelé « slashing », au cas où un acteur
      se conduirait mal. Plutôt que de punir les mauvais acteurs, Algorand
      préfère rendre la fraude par une minorité de l’argent impossible et la
      fraude par la majorité stupide. Tant que les deux tiers de la majorité
      sont honnêtes, le protocole fonctionnera parfaitement.
    </p>
    <div class="contain_adaptive_img">
      <img
        src="./image/scalabilit.png"
        class="scalable"
        alt="Représentation du trilemme de la blockchain"
      />
    </div>
  </article>
  <h2 class="second_title">
    Qu'elles sont les principales propriétés du réseau Algorand ?
  </h2>
  <div class="contain_liste">
    <ul>
      <li class="first_li li_right">
        <p class="para_li">
          Faibles exigences de calcul : pas besoin de fermes minières consommant
          beaucoup d’énergie.
        </p>
      </li>
      <li class="first_li li_left">
        <p class="para_li">
          Accord rapide : toute la communauté est d’accord sur le bloc suivant
          et confirme les transactions avec une latence de l’ordre de la minute
          tout en scalant à de nombreux utilisateurs.
        </p>
      </li>
      <li class="first_li li_right">
        <p class="para_li">
          Délégation : les détenteurs de tokens peuvent déléguer leurs jetons
          s’ils souhaitent participer au consensus.
        </p>
      </li>
      <li class="first_li li_left">
        <p class="para_li">
          Probabilité de fork extrêmement faible : les utilisateurs peuvent
          compter sur un nouveau bloc dès qu’il apparaît. Même si le réseau est
          temporairement partitionné, Algorand s’assure qu’aucun utilisateur n’a
          de vues divergentes sur une transaction confirmée.
        </p>
      </li>
      <li class="first_li li_right">
        <p class="para_li">
          Véritable décentralisation : le réseau n’est pas contrôlé par quelques
          mineurs ou un groupe de validateurs, car les proposants et les comités
          sont sélectionnés de manière aléatoire.
        </p>
      </li>
      <li class="first_li li_left">
        <p class="para_li">
          Gouvernance : les détenteurs de tokens membres de la communauté
          peuvent proposer des modifications aux protocoles et convenir de son
          évolutivité.
        </p>
      </li>
      <li class="first_li li_right">
        <p class="para_li">
          Des frais de transaction (frais de gas) fixe de 0.001 $algo quelques
          soit le nombre d'utilisateur du réseau.
        </p>
      </li>
      <li class="first_li li_left li_end">
        <p class="para_li">
          Blockchain écologique : la blockchain algorand ne consomme presque
          rien, une transaction sur le réseau équivaut à 29 joules soit 37x
          moins qu'une recherche google.
        </p>
      </li>
    </ul>
  </div>
</section>

<!-- fin seconde partie -->
<!-- troisième partie -->

<section class="third_section">
  <h1>Sites utiles</h1>
  <div class="contain_third_section">
    <div class="contain_category">
      <div class="contain_third_title">
        <h3>DE-FI</h3>
        <div class="category">
          <div class="contain_int_category">
            <div
              class="contain_img_category"
              href="https://app.tinyman.org/"
              target="_blank"
            >
              <img
                src="./image/tinyman.jpg"
                alt="icone tinyman"
                class="img_category"
              />
              Tinyman
            </div>
            <div class="info" id="info_tiny">+ d'info</div>
            <div class="popup" id="popup_tiny">
              <div class="row">
                <h4>Tinyman</h4>
                <span class="close" id="close_tiny">X</span>
              </div>
              <p>
                Tinyman est le premier dex actif fonctionnant sur la blockchain
                Algorand, simple et efficace c'est celui que j'utilise en
                majorité. Les frais de swap sont fixe, 0.001 algo, et les pool
                de farming avantageuse.
              </p>
              <div class="contain_popup_img">
                <img
                  src="./image/tinypopup.jpg"
                  alt="bannière tinyman"
                  class="popup_img"
                />
              </div>
              <a
                class="contain_link_category"
                href="https://app.tinyman.org/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/algodex.png"
                alt="logo algodex"
                class="img_category"
              />
              Algodex
            </div>
            <div class="info" id="info_algodex">+ d'info</div>
            <div class="popup" id="popup_algodex">
              <div class="row">
                <h4>Algodex</h4>
                <span class="close" id="close_algodex">X</span>
              </div>
              <p>Algodex est le second dex d'Algorand</p>
              <a
                class="contain_link_category"
                href="https://app.algodex.com/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/algofi.png"
                alt="logo algofi"
                class="img_category"
              />
              Algofi
            </div>
            <div class="info" id="info_algofi">+ d'info</div>
            <div class="popup" id="popup_algofi">
              <div class="row">
                <h4>Algofi</h4>
                <span class="close" id="close_algofi">X</span>
              </div>
              <p>Algofi est un site de landing + dex</p>
              <a
                class="contain_link_category"
                href="https://app.algofi.org/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="contain_third_title">
        <h3>NFT</h3>
        <div class="category">
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/rand.png"
                alt="logo randgallery"
                class="img_category"
              />
              Randgallery
            </div>
            <div class="info" id="info_rand">+ d'info</div>
            <div class="popup" id="popup_rand">
              <div class="row">
                <h4>Randgallery</h4>
                <span class="close" id="close_rand">X</span>
              </div>
              <p>Randgallery est un market place nft</p>
              <a
                class="contain_link_category"
                href="https://www.randgallery.com/algo-collection/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/algogems.png"
                alt="logo algogems"
                class="img_category"
              />
              Algogems
            </div>
            <div class="info" id="info_gems">+ d'info</div>
            <div class="popup" id="popup_gems">
              <div class="row">
                <h4>Algogems</h4>
                <span class="close" id="close_gems">X</span>
              </div>
              <p>
                Algogems est un market place nft, la différence avec Randgallery
                c'est (outre le design) le fait qu'algogems possède un token de
                gouvernance, le $gems, les détenteurs peuvent voter pour définir
                le futur de la plateforme. Et le projet est français !
              </p>
              <div class="contain_popup_img">
                <img
                  src="./image/gems.jpg"
                  alt="bannière algogems"
                  class="popup_img"
                />
              </div>
              <a
                class="contain_link_category"
                href="https://www.algogems.io/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="contain_third_title">
        <h3>Stacking / farming</h3>
        <div class="category">
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/yieldly.jpg"
                alt="logo yieldly"
                class="img_category"
              />
              Yieldly
            </div>
            <div class="info" id="info_yldy">+ d'info</div>
            <div class="popup" id="popup_yldy">
              <div class="row">
                <h4>Yieldly</h4>
                <span class="close" id="close_yldy">X</span>
              </div>
              <p>
                Yieldly se veut comme un incubateur à projet, c'est aussi le
                premier site a proposer du farming sur Algorand
              </p>
              <a
                class="contain_link_category"
                href="https://app.yieldly.finance/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>

          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/algostak.jpg"
                alt="logo algostake"
                class="img_category"
              />
              Algostake
            </div>
            <div class="info" id="info_stake">+ d'info</div>
            <div class="popup" id="popup_stake">
              <div class="row">
                <h4>Algostake</h4>
                <span class="close" id="close_stake">X</span>
              </div>
              <p>
                Algostake est un site de farming / staking son avantage sur
                yieldly c'est que le staking ne nécessite pas de déposer ses
                tokens dans une pool particulière, ils sont conservé sur wallet
                ce qui est une garantie supplémentaire de sécurité
              </p>
              <a
                class="contain_link_category"
                href="https://app.algostake.org/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="contain_third_title">
        <h3>Gaming</h3>
        <div class="category">
          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/Zone_logo.jpeg"
                alt="logo zone"
                class="img_category"
              />
              Zone
            </div>
            <div class="info" id="info_zone">+ d'info</div>
            <div class="popup" id="popup_zone">
              <div class="row">
                <h4>Zone</h4>
                <span class="close" id="close_zone">X</span>
              </div>
              <p>Zone gaming</p>
              <a
                class="contain_link_category"
                href="https://play.zone.game/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>

          <div class="contain_int_category">
            <div class="contain_img_category">
              <img
                src="./image/smile.png"
                alt="logo algostake"
                class="img_category"
              />
              Smile
            </div>
            <div class="info" id="info_smile">+ d'info</div>
            <div class="popup" id="popup_smile">
              <div class="row">
                <h4>Smile</h4>
                <span class="close" id="close_smile">X</span>
              </div>
              <p>Smile est un site de gaming</p>
              <a
                class="contain_link_category"
                href="https://app.smilecoin.us/"
                target="_blank"
                >Lien</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include_once "./../view/template/footer.php";
?>
<script src="/script/main.js"></script>
<script src="/script/home.js"></script>