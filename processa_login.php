<?php
    session_start();
    include_once("conexao.php");
    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];


    
    $result_usuario = "SELECT cnpj, senha FROM escola WHERE cnpj = '$cnpj' && senha = '$senha'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
               $_SESSION['cnpj'] = $cnpj;
               $_SESSION['senha'] = $senha; 
             

                     
                echo "<script>window.location='portal.php';alert(' Bem vindo ao CADiE!');</script>";
                      
                     
                     
  
                  
            }else{
                
                    
                     
                     echo "<script>window.location='login.php';alert('Ocorreu um erro ao efetuar login, por favor tente novamente.');</script>";
                   
            }
?>