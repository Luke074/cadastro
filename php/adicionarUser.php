<?php

require_once('conexao.php');

$conex = conexaoMySql();

$nome = (string) null;
$cpf = (string) null;
$email = (string) null;
$senha = (string) null;

$nome = $_POST['txtNome'];
$cpf = $_POST['txtCpf'];
$email = $_POST['txtEmail'];
$senha = md5($_POST['txtSenha']);

$sql = "insert into usuario
  (
    nome, 
    cpf, 
    email, 
    senha
  ) 
  value
  (
    '".$nome."', 
    '".$cpf."', 
    '".$email."', 
    '".$senha."'
  );
";

// var_dump($sql);

if (mysqli_query($conex, $sql))
{
  echo
  ("
    <script>
        alert('Registro Inserido com sucesso!');
        location.href = '../src/index.html';
    </script>
  ");
}
else{
  echo
  ("
    <script>
        alert('Erro ao Inserir os dados no Banco de Dados! Veja os Dados que estão sendo inseridos');
        location.href = '../src/index.html';
        window.history.back();
    </script> 
  ");
}