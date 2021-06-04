<?php

$hostName = "127.0.0.1";
$username = "gabu";
$password = "123456";
$database = "mxm";

//criando a conexão 
$conn = mysqli_connect($hostName, $username, $password, $database);

// if(!$conn){
// 	die("A conexão ao BD falhou " . mysqli_connect_error());
// }
// else{
// 	echo "conectado ao banco de dados - Mysql !" . "<br>";
// }



if(isset($_POST['Rnome']) && isset($_POST['Rcpf']) && isset($_POST['Remail']) && isset($_POST['Rtel']) && isset($_POST['Rcep']) && isset($_POST['Rbairro']) && isset($_POST['Rlocal']) && isset($_POST['Rrua']) ){
   
    $nome = $_POST['Rnome'];
    
    $cpf = $_POST['Rcpf'];
    $email = $_POST['Remail'];
    $tel = $_POST['Rtel'];
    $cep = $_POST['Rcep'];
    $bairro = $_POST['Rbairro'];
    $estado = $_POST['Rlocal'];
    $rua = $_POST['Rrua'];
    
  

    $sql = "insert into registro (Nome, cpf,email, telefone,cep,bairro,localidade,logradouro) values ('$nome','$cpf', '$email', '$tel', '$cep', '$bairro', '$estado', '$rua')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-success">
        <strong>Success!</strong> Dados salvo com Sucesso !!.
      </div>' ;
    }

}


/*

 `idRegistro` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(45) NOT NULL,
  `cpf` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT NULL,
  `cep` INT NULL,
  `bairro` VARCHAR(45) NULL,
  `localidade` VARCHAR(45) NULL,
  `logradouro` VARCHAR(45) NULL,
*/


?>