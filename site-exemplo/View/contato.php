<!DOCTYPE html>
<html lang="en">
  <head>
    <meta content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Exemplo Desafio RD</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-3.3.1/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap-3.3.1/dist/css/bootstrap-combobox.css" rel="stylesheet">
    <script src="../bootstrap-3.3.1/dist/js/bootstrap.js"></script>
    <script src="../bootstrap-3.3.1/dist/js/bootstrap-combobox.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="libsjs/jsPOST.js"></script>
    <script src="libsjs/jsLibClick.js"></script>

    <script>
    $( "form" ).submit(function( event ) {

        var url = 'https://rdoer.herokuapp.com/contatos';
        $.get(url, function(dataReturn) {
          $('#load_consulta').html(dataReturn);
        });

    });
    </script>

   <!-- Menu Principal -->

  </head>
  <body>
    <div class="container">
          <!-- Static navbar -->
    <?php  include "menu.php";  ?>

    <!-- Critérios de Busca -->

    <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="well">
          <h1>Entre em Contato</h1>
        </div>
      </div>
      <div class="row">
        <form class="form-inline" action="#" method="POST">
          <fieldset>
            <legend>Gostaríamos muito de ouvir de você, entre em contato conosco!</legend>
              <br>
              <br>
              <legend>Nome</legend>
              <div class="input">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" aria-describedby="basic-addon2">
              </div>
            <br>
            <br>
            <legend>E-Mail</legend>
            <div class="input-group">
              <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
            </div>
            <br>
            <br>
              <legend>Mensagem</legend>
              <div class="textarea">
                <textarea name="mesage" id="mesage" class="form-control" rows="5" ></textarea>
              </div>
            <br>
            <br>
            <button type="submit" class="btn btn-success">Enviar <span class="fa fa-arrow-right"></span></button>
            <br>
            <br>
          </fieldset>
        </form>
        <br>
      </div>
    </div>
   <!-- Main component for a primary marketing message or call to action -->

    </div><!--/.container-fluid -->
    
  </div> <!-- /container -->
  </body>
</html>