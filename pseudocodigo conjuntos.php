<?php


#UNIÃO#
/*************************************/
$array = array();
$A = array(1,2,3);
$B = array(4,5,6);

$count = count($array);
$Asize=count($A);
for ($i = 0; $i < $Asize; $i++) {
	$array[$i]=$A[$i];
	$count=$count+1;
}

$Bsize=count($B);
for ($i = 0; $i < $Bsize; $i++) {
	$array[$count]=$B[$i];
	$count=$count+1;
}
var_dump($array);

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		A = itens do conjunto A # A tem r = linhas , n = colunas
		B = itens do conjunto B # B tem n = linhas , m = colunas
	array=A+B #array armazena a união do conjunto
	saida array
Fim


/**/

/*************************************/


#INTERSECÇÃO#
/*************************************/
$array = array();
$A = array(1,2,3);
$B = array(2,5,1);


$Asize=count($A);
$Bsize=count($B);
for ($a = 0; $a < $Asize; $a++) {
	for ($b = 0; $b < $Bsize; $b++) {
		$count = count($array);
		if($A[$a]==$B[$b])
		{
			$array[$count]=$B[$b];
		}
	}
}

var_dump($array);

/**/

Entrada: A e B são conjuntos

C <- {}
para cada a A B faça
	 para cada A e B faça
		se A igual B então
			Insere(C,a)
		fim
    fim
fim

Algoritmo 2 - Insere(A,a)
Entrada: A é um conjunto, a é um valor que será inserido em Algoritmo

 se a C não A então
  	N <- |B|
       C[N+1] <- b
 fim


/**/

/*************************************/


#DIFERENÇA#
/*************************************/
$array = array();
$A = array(1,2,3);
$B = array(2,5,6);

$Asize=count($A);
$Bsize=count($B);


for ($a = 0; $a < $Asize; $a++) {
	$count = count($array);
	$igualdade=0;
	for ($b = 0; $b < $Bsize; $b++) {
		
		if($A[$a]==$B[$b])
		{
			$igualdade=1;
		}
	}
	
	if($igualdade!=1)
	{
		$array[$count]=$A[$a];
		
	}
	$igualdade=0;
}

for ($b = 0; $b < $Bsize; $b++) {
	$count = count($array);
	$igualdade=0;
	for ($a = 0; $a<$Asize; $a++) {
		
		if($B[$b]==$A[$a])
		{
			$igualdade=1;
		}
	}
	
	if($igualdade!=1)
	{
		$array[$count]=$B[$b];		
	}
	$igualdade=0;
}

var_dump($array);

/**/

Entrada: A e B são conjuntos

C <- {}
para cada a A B faça
	 para cada A e B faça
		se A igual B então
			Difere
			
		fim
		Insere(C,B)
    fim
	Indifere
fim

Algoritmo 2 - Insere(A,a)
Entrada: A é um conjunto, a é um valor que será inserido em Algoritmo

 se a C não B então
  	N <- |B|
       C[N+1] <- b
 fim



/**/

/*************************************/

#COMPLEMENTO#
/*************************************/
$array = array();
$A = array(1,2,3,5,7,10,20);
$B = array(2,5,6);

$Asize=count($A);
$Bsize=count($B);


for ($a = 0; $a < $Asize; $a++) {
	$count = count($array);
	$igualdade=0;
	for ($b = 0; $b < $Bsize; $b++) {
		
		if($A[$a]==$B[$b])
		{
			$igualdade=1;
		}
	}
	
	if($igualdade!=1)
	{
		$array[$count]=$A[$a];		
	}
	$igualdade=0;
}
var_dump($array);

/**/

Entrada: A e B são conjuntos

C <- {}
para cada a A B faça
	Igualdade
	 para cada A e B faça
		se A igual B então
			Difere
			
		fim
		
    fim
	
	Se Igualdade igual 1
		Insere(C,A)
	fim
fim

Algoritmo 2 - Insere(A,a)
Entrada: A é um conjunto, a é um valor que será inserido em Algoritmo

 se a C não B então
  	N <- |B|
       C[N+1] <- b
 fim


/**/

/*************************************/

#CONJUNTO DAS PARTES#
/*************************************/

$array = array();
$A = array(1,2,3,4);

$Asize=count($A);

$array[0]="vazio";

for ($a = 0; $a < $Asize; $a++) {	
	$array[$a+1]=$A[$a];	
}

for ($a = 0; $a < $Asize; $a++) {	
	for ($aa = $a+1; $aa < $Asize; $aa++) {
		$array[count($array)]=array($A[$a],$A[$aa]);
	}
}
$tamanho=count($array);

for ($a = 0; $a < $Asize; $a++) {
	$array[$tamanho][$a]=$A[$a];
}

echo '<pre>';
var_dump($array);
echo '<pre>';

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		A = itens do conjunto A # A tem r = linhas , n = colunas
		B = itens do conjunto B # B tem n = linhas , m = colunas
	array=A+B #array armazena a união do conjunto
	saida array
Fim


/**/

/*************************************/

#PRODUTO CARTESIANO#
/*************************************/

$array = array();
$A = array(1,2,3,);
$B = array('a','b');
$Asize=count($A);
$Bsize=count($B);

for ($a = 0; $a < $Asize; $a++) {	
	for ($b = 0; $b < $Bsize; $b++) {
		$array[count($array)]=array($A[$a],$B[$b]);
	}
}

echo '<pre>';
var_dump($array);
echo '<pre>';

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		A = itens do conjunto A # A tem r = linhas , n = colunas
		B = itens do conjunto B # B tem n = linhas , m = colunas
	array=A+B #array armazena a união do conjunto
	saida array
Fim


/**/

/*************************************/

#UNIÃO DISJUNTA#
/*************************************/

$array = array();
$A = array(1,2,3,);
$B = array('a','b');
$Asize=count($A);
$Bsize=count($B);

for ($a = 0; $a < $Asize; $a++) {	
	for ($b = 0; $b < $Bsize; $b++) {
		$array[count($array)]=array($A[$a].".A",$B[$b].".B");
	}
}

echo '<pre>';
var_dump($array);
echo '<pre>';

/**/

Inicio
	array = Array para armazenar a união dos conjuntos
		A = itens do conjunto A # A tem r = linhas , n = colunas
		B = itens do conjunto B # B tem n = linhas , m = colunas
	array=A+B #array armazena a união do conjunto
	saida array
Fim


/**/

/*************************************/

?>
