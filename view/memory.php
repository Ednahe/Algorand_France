<?php  
include_once "../view/template/head.php";
include_once "../view/template/_navbar.php";
?>

<h1>Partie fun</h1>

<section class="section_article_memory">
   <article class="article_memory">
      <p class="para_memory">Voici un petit jeu de mémoire ou il vous faudra retrouver deux token identique de l'écosystème algorand, bon courage et bon fun :)</p>
   </article>
</section>
<section class="section_memory" id="section_memory">
<h3 class="try">Nombre d'essais restant :<span class="try" id="span_memory"></span></div> </h3>
<div class="contain_game">
   <div class="contain_memory" id="contain_memory"></div> 
   </div>
</section>
<section class="contain_toast">
   <div class="end_try" id="end_try"></div>
</section>
<script src="/script/memory.js"></script>
<script src="/script/main.js"></script>
<?php
include_once "../view/template/footer.php";
?>