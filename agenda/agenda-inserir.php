<?php
include "../includes/conexao.php";
$data = $_POST ['data'];
$hora = $_POST ['hora'];
$id_medico = $_POST ['id_medico'];
$sala = $_POST ['sala'];
$id_paciente= $_POST ['id_paciente'];

$sqlInserir = "INSERT INTO tb_agenda(data, hora, id_medico, sala, id_paciente)
values(
'{$data}',
'{$hora}',
{$id_medico},
'{$sala}',
{$id_paciente});";

$resultado = mysqli_query($conexao , $sqlInserir);

if($resultado){
    echo "Cadastro realizado com sucesso.<br>";
    echo "<a href='pacientes-listar.php'>Voltar</a>";

}else{
    echo "Algo deu errado";
}







?>