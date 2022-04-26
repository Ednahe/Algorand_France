<?php
//include_once "../header.php";
include_once "./../view/template/_navbar.php";
?>

<h1>Algorand la blockchain 3.0</h1>
<section class="first_section"></section>
<section class="second_section">
  <h2 class="first_title">
    Algorand c'est quoi au juste ?
    <div class="contain_svg" id="arrow_down">
      <svg
        class="arrow_svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 384 512"
      >
        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
        <path
          class="arrow_down"
          d="M192 384c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L192 306.8l137.4-137.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-160 160C208.4 380.9 200.2 384 192 384z"
        />
      </svg>
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
    </p>
    <div class="contain_adaptive_img">
      <img
        src="/image/scalabilit.png"
        class="scalable"
        alt="Représentation du trilemme de la blockchain"
      />
    </div>
    <p class="first_para">
      Dans l’algorithme de consensus d’Algorand, appelé Pure PoS, le réseau
      associe sa sécurité à l’honnêteté de la majorité. Il n’existe pas de
      mécanisme de sanction, également appelé « slashing », au cas où un acteur
      se conduirait mal. Plutôt que de punir les mauvais acteurs, Algorand
      préfère rendre la fraude par une minorité de l’argent impossible et la
      fraude par la majorité stupide. Tant que les deux tiers de la majorité
      sont honnêtes, le protocole fonctionnera parfaitement.
    </p>
  </article>
  <h2 class="second_title">Qu'elles sont les principales propriétés du réseau Algorand ?</h2>
  <div class="contain_liste">
    <ul>
      <li class="first_li li_right">
        Faibles exigences de calcul : pas besoin de fermes minières consommant
        beaucoup d’énergie.
      </li>
      <li class="first_li li_left">
        Accord rapide : toute la communauté est d’accord sur le bloc suivant et
        confirme les transactions avec une latence de l’ordre de la minute tout
        en scalant à de nombreux utilisateurs.
      </li>
      <li class="first_li li_right">
        Délégation : les détenteurs de tokens peuvent déléguer leurs jetons
        s’ils souhaitent participer au consensus.
      </li>
      <li class="first_li li_left">
        Probabilité de fork extrêmement faible : les utilisateurs peuvent
        compter sur un nouveau bloc dès qu’il apparaît. Même si le réseau est
        temporairement partitionné, Algorand s’assure qu’aucun utilisateur n’a
        de vues divergentes sur une transaction confirmée.
      </li>
      <li class="first_li li_right">
        Véritable décentralisation : le réseau n’est pas contrôlé par quelques
        mineurs ou un groupe de validateurs, car les proposants et les comités
        sont sélectionnés de manière aléatoire.
      </li>
      <li class="first_li li_left">
        Gouvernance : les détenteurs de tokens membres de la communauté peuvent
        proposer des modifications aux protocoles et convenir de son
        évolutivité.
      </li>
      <li class="first_li li_right">
        Des frais de transaction (frais de gas) fixe de 0.001 $algo quelques
        soit le nombre d'utilisateur du réseau.
      </li>
      <li class="first_li li_left li_end">
        Blockchain écologique : la blockchain algorand ne consomme presque rien,
        une transaction sur le réseau équivaut à 29 joules soit 37x moins qu'une
        recheche google.
      </li>
    </ul>
  </div>
</section>

<script src="/script/main.js"></script>