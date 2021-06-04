<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <title>Desafio</title>
  <?php include_once('./api.php')?>
  <script>
    function formatar(mascara, documento) {
      var i = documento.value.length;
      var saida = mascara.substring(0, 1);
      var texto = mascara.substring(i)
      if (texto.substring(0, 1) != saida) {
        documento.value += texto.substring(0, 1);
      }
    }
    function PegCep(){
    var entrada = document.querySelector("#cep");
    var tex = entrada.value;
    
    var ent = $.ajax({
        type:'GET',
        url: "https://viacep.com.br/ws/"+tex+"/json/",
        success: function(result){
          var bairro = document.querySelector("#bairro");
          bairro.value = result.bairro;;

          var local = document.querySelector("#local");
          local.value = result.localidade;

          var rua = document.querySelector("#rua");
          rua.value = result.logradouro;;
            
        }
    });
    };

  

   
  </script>
</head>

<body>

  <div class="container">
    <h1 class="display-4">Tela de Cadastro
    </h1>
    <form method="post" >
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="Rnome" id="nome" placeholder="Coloque seu nome" required>

      </div>

      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" id="cpf" name="Rcpf" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this)" required />
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="Remail" placeholder="Coloque seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="number" class="form-control" id="tel" name="Rtel" placeholder="Coloque seu telefone">
      </div>
      <div class="form-group">
        <label><b>Endereço:</b></label><br>
        <label for="cep">CEP</label>
        <input type="number" class="form-control" name="Rcep" id="cep" placeholder="Coloque só números" onkeyup="PegCep()" required>
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" name="Rbairro" id="bairro" placeholder="Bairro">
        <label for="local">Estado:</label>
        <input type="text" class="form-control" name="Rlocal" id="local" placeholder="Localidade">
        <label for="rua">Logradouro:</label>
        <input type="text" class="form-control" name="Rrua" id="rua" placeholder="Logradoura">
      </div>

      <button type="submit"  class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>