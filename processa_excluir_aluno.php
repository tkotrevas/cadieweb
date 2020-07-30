<?php
    include_once("conexao.php");
   $ra = $_POST['ra'];
  
    $result_usuario = "DELETE FROM aluno WHERE ra='$ra'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
   if(mysqli_affected_rows($conn) != 0){
                echo "
                    
                    <script>window.location='excluirUser.php';alert('Aluno excluído com sucesso!');</script>;
                ";   
            }else{
                echo "
                    <script>window.location='excluirUser.php';alert('Erro ao excluir o usuario!');</script>;
                ";    
            }
?>