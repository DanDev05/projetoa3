<?php
session_start();
?>
<html>
   <body background="fundo.jpg">
      <center>
         Olá, <?php
         if(isset($_SESSION['nome'])==null){
           ?>visitante
            <a href="login.php">login</a>
            <?php }else{
            echo $_SESSION['nome'];?>
            <a href="cadastrar.php">cadastrar</a><br>
            <a href="logout.php">sair</a>
          <?php } ?>
       </center>  
   </body>
</html>