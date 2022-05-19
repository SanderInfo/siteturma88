<?php

date_default_timezone_set('America/Sao_Paulo');
$hora = date('H:i:s');

require_once("../functions/funcoes.php");
 $nome = $_POST['txtNome'];
 $email = $_POST['txtEmail'];
 $fone = $_POST['txtFone'];
 $endereco = $_POST['txtEndereco'];
 $bairro = $_POST['txtBairro'];
 $cidade = $_POST['txtCidade'];
 $uf = $_POST['txtUF'];
 $cep = $_POST['txtCep'];
 //Definir o conjunto de dados 
 $array = ["nome"=>"{$nome}", "cep"=>"{$cep}", "endereco"=>"{$endereco}", 
 "bairro"=>"{$bairro}", "cidade"=>"{$cidade}", "uf"=>"{$uf}", "email"=>"{$email}", "fone"=>"{$fone}"];
 
 array_push($_SESSION['lista'], $array);

// apresentar o resultado de duas variáveis
//echo "Nome: " . $nome . "<br>";
//echo "Email: " . $email . "<br>";
// Verificar se o campo txtNome foi preenchido
// Se sim, atribuir valores as variáveis 

if (isset($_POST["btnEnviar"])) {
    if (!empty($_POST["txtNome"])) {
        $email = $_POST['txtEmail'];     
        $fone = $_POST['txtFone'];
} 
   



      
        
  
 
 // apresentar o valor da variável 
 // echo "Cep: " . $cep . "<br>"; 
 
 // atribuir o resultado na variável $body
 $body = "===================================" . "<br>";
 $body = $body . "FALE CONOSCO - TESTE EXIBIÇÃO" . "<br>";
 $body = $body . "===================================" . "<br>";
 $body = $body . "Nome: " . $nome . "<br>";
 $body = $body . "Email: " . $email . "<br>";
 $body = $body . "Telefone: " . $fone . "<br>";
 // apresentar o valor da variável 
 echo $body. "<br>";

 //Chamar a função dia_atual
 $dia = dia_atual(); 
 echo $dia . "<br>";

 $hora = date('H:i:s');
 echo $hora. "<br>";

 if (($hora >= "00:00:00") && ($hora <= "11:59:59")) {
     echo "Bom dia !!";
 }

elseif(($hora >= "12:00:00") && ($hora <= "17:59:59")) {
    echo "Boa tarde !!";
}

else {
    echo "Boa noite !!";
}

}

$exibirdados = listar();
echo $exibirdados;
