<?php
  $acao = 'recuperar';
  require 'cadastro_controle.php';
  /*
  echo'<pre>';
  print_r($cliente);
  echo'</pre>';
  
*/

?>


<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!-- Estilo personalizado CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
   
    <!-- mascara -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <!-- javascript Personalizado -->
    <script src="js/scriptCustom.js"></script>
     
   
     
   


    

    <title>Cadastro de cliente</title>
  </head>
  <body>
    <?php if(isset($_GET['inclusao'] ) && $_GET['inclusao'] == 1) { ?>


      <div class="bg-success pt-2 text-white d-flex justify-content-center">
      <h5>Tarefa inserida com sucesso!</h5>

    </div>     

        <?php } ?>




      <div id="cabecalho" class="bg-light">
        <img src="img/imagem2.png" style="width: 600px; height: 300px;">
        <h1 class="display-1" style="color: black;">Cadastro de cliente</h1>
        
      </div>


      <div id="principal"
      class="bg-white border rounded">
       <!-- <form id="formulario" method="post" action="cadastro_controle.php?acao=inserir"> -->
        <form id="formulario" method="post" action="cadastro_controle.php?acao=inserir">
          <div class="form-group  row">

            <div class="col-sm-6">
              <label for="nome">Nome:</label>
            <input class="form-control" type="text" name="nomeUsuario" id="nomeUsuario" placeholder="Digite seu nome">
            </div>

            <div class="col-sm-6">
              <label for="telefone">Telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefoneUsuario" placeholder="Digite seu telefone">
            </div>

            <div class=" col-sm-6">
              <label for="cpf">CPF:</label>
            <input  class="form-control " type="text" name="cpf" id="cpfUsuario" placeholder="Digite seu CPF">
            </div>

            <div class=" col-sm-6">
              <label for="cep">Cep:</label>
            <input onkeyup="buscarCep()" class="form-control" type="text" name="cep" id="cepUsuario"
            placeholder="Digite seu cep">
            </div>

            <div class=" col-sm-3">
            <label for="logradouro">Logradouro:</label>
            <input class="form-control" type="text" name="logradouro" id="logradouroUsuario"
            >

            <label for="complemento">Complemento:</label>
            <input class="form-control" type="text" name="complemento" id="complementoUsuario"
            >

            <label for="bairro">Bairro:</label>
            <input class="form-control" type="text" name="bairro" id="bairroUsuario"
           >
            </div>

            <div class=" col-sm-3">
            <label for="localidade">Localidade:</label>
            <input class="form-control" type="text" name="localidade" id="localidadeUsuario"
           >

            <label for="ddd">DDD:</label>
            <input class="form-control" type="text" name="ddd" id="dddUsuario"
            >
            </div>

            <div class=" col-sm-6 " id="campoInformacao">
            <img src="img/form.png" style="width: 110px; height: 110px;">
          </div>
          <button class="btn btn-danger" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#exampleModal" >Salvar</button>
            
            
        </div>
      </form>
      <h4>REGISTROS</h4>
          <hr/>
      </div>
      <div class="table-responsive" style="margin: 10px;">
                   <table class="table table-sm">

                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>cep</th>
                            <th>logradouro</th>
                            <th>complemento</th>
                            <th>bairro</th>
                            <th>localidade</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cliente as $indice => $client) { ?>
                          <tr>
                              <td><?= $client->id ?></td>
                              <td><?= $client->nome ?></td>
                              <td><?= $client->telefone ?></td>
                              <td><?= $client->cpf ?></td>
                              <td><?= $client->cep ?></td>
                              <td><?= $client->logradouro ?></td>
                              <td><?= $client->complemento ?></td>
                              <td><?= $client->bairro ?></td>
                              <td><?= $client->localidade ?></td>
                              <td><?= $client->data_cadastro ?></td>
                          </tr>
                        <?php } ?>
                    </tbody>
                  
                  </table>
                </div>

   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" ></script>

  </body>
</html>