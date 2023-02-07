<?php
$nome2='PEDRO';
$gmail='carlo@gmail.com.br';
$senha='12345678ú';
//ela funciona da seguinte maneira, ela pega um parte especifica da string , selecionada por vc, o primeiro numero é de onde ela se inicia.
// o segundo numero é quantos casas após o primeiro valor vc quer pegar,neste caso irá pegar 'st'
substr($gmail,2,2);

$nome = substr($gmail,0,4);
echo substr($gmail,0,4).PHP_EOL; 
//caso não defina um segundo valor, ele vai do valor inicial desejado até o final da string
echo substr($gmail,5).PHP_EOL; 

//strpos pega uma posição especifica ,retornando o valor em que ela está ou false , neste caso terá o valor 5, que é a posição do '@'

$posicaoArroba=strpos($gmail,'@');
echo substr($gmail,$posicaoArroba).PHP_EOL; 

//strlen para pegar o tamanho da variavel em BITES, caracteres com acentos tem tamanho diferente normalmente 2,COLOQUE a extensão MB_ na frente para contar os  multi bite como 1;
//outro ponto impontante, strings podem ser acessadas como array ,string[1],porem NÃO são arrays.
var_dump(mb_strlen($senha));

if(mb_strlen($senha) < 7){
    echo'senha fraca'.PHP_EOL;
}else{
echo 'senha confirmada'.PHP_EOL;

}

//strtoupper para deixar as letras em maisculo,porem ele tambem tem problemas com letras com acento, use MB_ na frente
var_dump(mb_strtoupper($nome));

//strtolower para deixar tudo minusculo,mesmo problema do strtoupper, use MB_  na frente

var_dump(mb_strtolower($nome2));