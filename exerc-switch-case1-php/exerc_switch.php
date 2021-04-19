<?php
/* EXERCÍCIO 1 */ 

$dia = $_POST ["dia"]; 

// $dia = rand(0,15); 

switch ($dia){
    case 1:
        echo "Domingo!";
        break;
    case 2:
        echo "Segunda-feira!";
        break;
    case 3:
        echo "Terça-feira!";
        break;
    case 4:
        echo "Quarta-feira!";
        break;
    case 5:
        echo "Quinta-feira!";
        break;
    case 6:
        echo "Sexta-feira!";
        break;
    case 7:
        echo "Sábado!";
        break;
    default:
        echo "Dia inválido";
        break;
}

/* EXERCÍCIO 2 */

$letra = $_POST ["letra"];

// $letra="a"; 

switch($letra){
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        echo "Este caractere é uma vogal!";
        break; 

    default:
        echo "Este caractere não é uma vogal!";
        break;
    }

/* EXERCÍCIO 3 */

 $num1 = $_POST ["num1"]; 
 $num2 = $_POST ["num2"]; 
 $operador = $_POST ["operador"]; 
// $num1 = rand(1,50); 
// $num2 = rand(1,50); 
$soma = $num1+$num2;
$sub = $num1-$num2;
$mult = $num1*$num2;
$div = $num1/$num2;

switch ( $operador){
    case "+":
        echo "O resultado da operação de soma é: $soma";
        break;
       
    case "-":
        echo "O resultado da operação de subtração é: $sub";
        break;
        
    case "*": 
        echo "O resultado da operação de multiplicação é: $mult";
        break;
        
    case "/":
        echo "O resultado da operação de divisão é: $div";
        break;
        
    default:
        echo "Operação Inválida!";
        break;
    }

/* EXERCÍCIO 4 */

$ano = $_POST ["ano"]; 

// $ano = 1945;

switch ($ano){
    case 1930:
        echo "País Campeão: Uruguai";
        break;

    case 1934:
        echo "País Campeão:Itália";
        break;

    case 1938:
        echo "País Campeão:Itália";
        break;
    case 1950:
        echo "País Campeão:Uruguai";
        break;

    case 1954:
        echo "País Campeão:Alemanha Ocidental";
        break;

    case 1958:
        echo "País Campeão:Brasil";
        break;

    case 1962:
        echo "País Campeão:Brasil";
        break;

    case 1966:
        echo "País Campeão:Inglaterra";
        break;

    case 1970:
        echo "País Campeão:Brasil";
        break;

    case 1974:
        echo "País Campeão:Alemanha Ocidental";
        break;

    case 1978:
        echo "País Campeão:Argentina";
        break;

    case 1982:
        echo "País Campeão:Itália";
        break;

    case 1986:
        echo "País Campeão:Argentina";
        break;

    case 1990:
        echo "País Campeão:Alemanha Ocidental";
        break;

    case 1994:
        echo "País Campeão:Brasil";
        break;

    case 1998:
        echo "País Campeão:França";
        break;

    case 2002:
        echo "País Campeão:Brasil";
        break;

    case 2006:
        echo "País Campeão:Itália";
        break;

    case 2010:
        echo "País Campeão:Espanha";
        break;

    case 2014:
        echo "País Campeão:Alemanha";
        break;

    case 2018:
        echo "País Campeão:França";
        break;

    default:
        echo "Não aconteceu Copa do Mundo no ano fornecido.";
        break;
}
?>