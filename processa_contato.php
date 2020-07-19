<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
   
    $result_usuario = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome','$email','$mensagem')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script>window.location='index.php';alert('Mensagem enviada com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='index.php';alert('Erro ao enviar a mensagem!');</script>;
                ";    
            }
?>