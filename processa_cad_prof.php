<?php
session_start();
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $materia = $_POST['materia'];
    $turma = $_POST['turma'];
    $email = $_POST['email'];
     $escola = $_SESSION['cnpj'];
    
   
    $result_usuario = "INSERT INTO professor (nome, materia, turma, email, escola) VALUES ('$nome','$materia','$turma','$email', '$escola')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    
                    <script>window.location='adicionarProf.php';alert('Professor cadastrado com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='adicionarProf.php';alert('Erro ao cadastrar o usuario!');</script>;
                ";    
            }
?>