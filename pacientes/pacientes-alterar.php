<?php
include "../includes/conexao.php";

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    $convenio = "";
    if(isset($_POST['convenio'])){
        $convenio = $_POST['convenio'];
    }
    $diagnostico = $_POST['diagnostico'];
$data_nascimento = $_POST['data_nascimento'];

$sqlAlterar = "UPDATE tb_pacientes SET 

nome = '{$nome}',
telefone = '{$telefone}',
data_nascimento = '{$data_nascimento}',
convenio = '{$convenio}',
diagnostico = '{$diagnostico}'
WHERE id = {$id_paciente};";

$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='pacientes-listar.php'>Voltar</a>";
}
else{
    echo "Algum erro aconteceu";
}





?>