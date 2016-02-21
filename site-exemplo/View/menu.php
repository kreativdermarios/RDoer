<?php 

echo"
<nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Site Exemplo</a>
    </div>
    <div id=\"navbar\" class=\"navbar-collapse collapse\">
      <ul class=\"nav navbar-nav\">
        <li ><a href=\"index.php\" onclick=\"buscaClick('index');\" >Home</a></li>
        <li ><a href=\"preco.php\" onclick=\"buscaClick('preco');\">Preço</a></li>
        <li ><a href=\"sobre.php\" onclick=\"buscaClick('sobre');\">Sobre</a></li>
        <li ><a href=\"contato.php\" onclick=\"buscaClick('contato');\">Contato</a></li>
      </ul>
    </div><!--/.nav-collapse -->
</nav>

"; 

?>