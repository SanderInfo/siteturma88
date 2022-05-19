<?php
//Verificar o dia da semana
//http://www.linhadecodigo.com.br/artigo/3565/trabalhando-com-funcoes-em-php.asp


date_default_timezone_set('America/Sao_Paulo');
$hora = date('H:i:s');

//iniciar uma session
session_start();
// Se a session não existir, será criada
if (empty($_SESSION['lista'])) {
    $_SESSION['lista'] = [];
}

function listar(){

    //echo "Espelho de Array - Apresentação didática <br>";
    //echo "======================================". "<br>";
    //print_r($_SESSION['lista']);
    //echo "<br><br>";
    
    //$qtderegistros = count($_SESSION['lista']);
    //echo "Quantidade de registros no Array = " . $qtderegistros;
    //echo "<br><br>";

    echo "Tabela com dados <br>";
    echo "======================================". "<br>";
    echo "<br>";

    $tabela = "<table border='1'>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cep</th>
                        <th>Endereco</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>";
    $retorno = $tabela;
    
    foreach ($_SESSION['lista'] as $linhadoarray){
        $retorno .= "<tr>";
        foreach ($linhadoarray as $coluna=>$conteudodacoluna){
            $retorno .="<td>" .$conteudodacoluna . "</td>";
        }
        $retorno .= "</tr>";
    }

    $retorno .= "</tbody> </table>";
    return $retorno;

   }

   session_destroy();

function dia_atual(){
   
    
    $hoje = getdate();        
 
    //return $hoje;
     //print_r($hoje);

    
      switch($hoje["wday"]){

        
        case 0:
        return "Domingo";
        break;    

        case 1:
            return "Segunda-feira";
            break;    

            case 2:
                return "Terça-feira";
                break;    
                
                case 3:
                    return "Quarta-feira";
                    break;    

                    case 4:
                        return "Quinta-feira";
                        break;    

                        case 5:
                            return "Sexta-feira";
                            break;    

                            case 6:
                                return "Sábado";
                                break;    
      }
     
}

?>