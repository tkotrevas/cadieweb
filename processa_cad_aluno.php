<?php
session_start();

    include_once("conexao.php");
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $escola = $_SESSION['cnpj'];
    

    $result_usuario = "INSERT INTO aluno (nome, ra, email, senha, escola) VALUES ('$nome','$ra','$email','$senha', '$escola')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "                   
                    <script>window.location='adicionarUser.php';alert('Aluno cadastrado com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='adicionarUser.php';alert('Erro ao cadastrar o usuario!');</script>;
                ";    
            }
?>