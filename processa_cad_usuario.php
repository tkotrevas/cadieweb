<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $CNPJ = $_POST['cnpj'];
    $IE = $_POST['ie'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
   
    $result_usuario = "INSERT INTO escola (nome, cnpj, ie, email, senha) VALUES ('$nome','$CNPJ','$IE',
    '$email','$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    
                    <script>window.location='login.php';alert('Usuario cadastrado com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='register.php';alert('Erro ao cadastrar o usuario!');</script>;
                ";    
            }
?>