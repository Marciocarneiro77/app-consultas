<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_consultorio';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<h3>Não Conectou</h3>!!! Erro: " . mysqli_connect_error());
}
else{
    echo"Conectado";
}


?>