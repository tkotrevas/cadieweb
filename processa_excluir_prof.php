<?php
session_start();
    include_once("conexao.php");
   $id = $_POST['id'];
   $escola = $_SESSION['cnpj'];
  
    $result_usuario = "DELETE FROM professor WHERE idprofessor='$id' AND escola='$escola'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    
                    <script>window.location='excluirProf.php';alert('Professor(a) excluído com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='excluirProf.php';alert('Erro ao excluir o usuario!');</script>;
                ";    
            }
?>