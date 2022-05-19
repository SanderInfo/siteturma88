<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Array</title>
</head>
<body>
    
<?php

echo "teste de array <br>";

//Atribuição de um array
$array_numeros = array(5, 10, 15, 20, 25);

//Apresentação de dados
print_r($array_numeros);

echo "<br><br>";

//Verificar a quantidade de itens
$qtdeitens = count($array_numeros);

echo "Quantidade de itens da coleção = " .$qtdeitens;

echo "<br><br>";


//Apresentar os dados utilizando estrutura de repetição
//Utilizando o For

for($i=0;$i <$qtdeitens;$i++){
    echo "Ídice = " . $i . " Valor = ". $array_numeros[$i]. "<br>";
}

//Utilizando o Foreach
foreach($array_numeros as $i){
    echo $i . "<br />";
}

$salarios = array();
$salarios["Claudia"] = 1000;
$salarios["João"] = 7000;
$salarios["Luiza"] = 12000;

foreach($salarios as $key_arr => $var_arr){
    echo $var_arr . "=" . $key_arr . "<br />";
}

$Produtos = array (
    array("MaçÃ",20,10),
    array("Banana",10,15),
    array("Laranja",15,7),
    array("Pera",20,5)
);

//For dentro de outro For
for ($linha = 0; $linha < 4; $linha++) {
    echo "<p><b>Linha Número : " . $linha. "</b></p>";
    echo "<ul>";
    for ($coluna = 0; $coluna < 3; $coluna++){
        echo "<li>" .$Produtos[$linha][$coluna]."</li>";
    }

    echo "</ul>";

}

$idade = array("Marcos"=>"35", "Suzana"=>"37", "Joel"=>"43");

session_start();

//Sea session não existir, será criada
if (empty($_SESSION['lista'])) {
    $_SESSION['lista'] = [];
}

array_push($_SESSION['lista'], $idade);

$tabela = "<table border='1'>
               <thead>
                    <tr>
                         <th>Nome</th>
                         <th>Idade</th>
                    </tr>
                </thead>
                <tbody>";
                
$retorno = $tabela;  

print_r($_SESSION['lista']);

foreach ($_SESSION['lista'] as $linhadoarray){
    foreach($linhadoarray as $key_nome => $var_idade){
    $retorno .= "<tr>";
    $retorno .= "<td>" .$key_nome . "</td>";
    $retorno .= "<td>" .$var_idade . "</td>";
    $retorno .= "</tr>";
    }
}

    $retorno .= "<tr>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "</tr>";

$indice = array_keys($idade);
rsort($indice);   

while (!empty($indice)) {
    $retorno .= "<tr>";
    $nomecoluna = array_pop($indice);
    $retorno .= "<td>" .$nomecoluna . "</td>";
    $retorno .= "<td>" .$idade[$nomecoluna] . "</td>";

    $retorno .= "</tr>";
}

$retorno .= "<tr>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "</tr>";

$indice = array_keys($idade);

do {
$retorno .= "<tr>";
$nomecoluna = array_pop($indice);
$retorno .= "<td>" .$nomecoluna . "</td>";
$retorno .= "<td>" .$idade[$nomecoluna] . "</td>";

$retorno .= "</tr>";
}

while (!empty($indice));

$retorno .= "<tr>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "<td> ****** </td>";
    $retorno .= "</tr>";

foreach ($idade as $coluna=>$conteudodacoluna) {
    $retorno .= "<tr>";
    $retorno .= "<td>" .$coluna . "</td>";
    $retorno .= "<td>" .$conteudodacoluna . "</td>";
    $retorno .= "</tr>";  
}    



$retorno .= "</tbody></table>";
echo $retorno;
 
session_destroy()

?>


</body>
</html>