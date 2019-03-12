<?php


#UNIÃO#
/*************************************/
$array= new array();
$A = {1,2,3}
$B = {3,2,4}
$array = $A+$B;
var_dump($array);

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		A = itens do conjunto A # A tem r = linhas , n = colunas
		B = itens do conjunto B # B tem n = linhas , m = coluna
	array=A+B #array armazena a união do conjunto
	saida array
Fim


/**/

/*************************************/


#INTERSECÇÃO#
/*************************************/
$array= new array();
$digitos = {0,1,2,3}
$vogais = {a,e,i,o,u}
$pares = {0,2,4,6,...}

$array = $digitos.$pares;
var_dump($array);//saida: {0, 2, 4, 6, 8}

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		DIGITOS = itens de numeros # A tem r = linhas , n = colunas
		VOGAIS = itens de vogais # A tem r = linhas , n = colunas
		PARES = numeros pares # A tem r = linhas , n = colunas

	array=DIGITOS.PARES #AQUI OS PARES E OS DIGITOS SÃO SOMADOS
	saida array #É ONDE OS PARES DOS DIGITOS SÃO APRESENTADOS
Fim


/**/

/*************************************/


#DIFERENÇA#
/*************************************/
$array= new array();
$digitos = {0,1,2,3}
$vogais = {a,e,i,o,u}
$pares = {0,2,4,6,...}

$array = $digitos-$pares;
var_dump($array);//saida: {1,3,5,7,9}

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		DIGITOS = itens de numeros # A tem r = linhas , n = colunas
		VOGAIS = itens de vogais # A tem r = linhas , n = colunas
		PARES = numeros pares # A tem r = linhas , n = colunas

	array=DIGITOS-PARES #AQUI OS PARES SÃO SUBTRAIDOS DOS DIGITOS
	saida array #É ONDE O RESULTADO COM NUMEROS IMPARES SÃO APRESENTADOS
Fim


/**/

/*************************************/

?>
