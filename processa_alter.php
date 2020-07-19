<?php
session_start();
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cnpj = $_POST['cnpj'];
    $ie = $_POST['ie'];
    
    $result_usuario = "UPDATE escola SET nome='$nome', email='$email', senha='$senha', cnpj='$cnpj', ie='$ie' WHERE cnpj='". $_SESSION['cnpj']."'";

    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                     $_SESSION['cnpj'] = $cnpj;
                    
                   echo "
                     <script>window.location='perfil.php';alert('Editado  com sucesso!');</script>;
                ";    
            }else{
                echo "
                     <script>window.location='perfil.php';alert('Erro ao editar as informações!');</script>;
                ";    
            }
?>