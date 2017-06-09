<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read One Record - PHP CRUD Tutorial</title>
 
    <?php include '../load_libs.php'; ?>
</head>
<body>
 
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Detalhes do prrofessor</h1>
        </div>
         
        <?php
         
        //include database connection
        include '../config/database.php';
          $id = null;
              if ( !empty($_GET['id'])) {
                  $id = $_REQUEST['id'];
              }
               
              if ( null==$id ) {
                  header("Location: index.php");
              } else {
                  $pdo = Database::connect();
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $sql = "SELECT * FROM professores where id = ?";
                  $q = $pdo->prepare($sql);
                  $q->execute(array($id));
                  $data = $q->fetch(PDO::FETCH_ASSOC);
                  Database::disconnect();
              }
          ?>
      

       <!--we have our html table here where new user information will be displayed-->
       <table class='table table-hover table-responsive table-bordered'>
           <tr>
               <td>Nome</td>
               <td><?php echo $data['nome'];?></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><?php echo $data['email'];?></td>
           </tr>
           <tr>
               <td>Telefone</td>
               <td><?php echo $data['telefone'];?></td>
           </tr>
           <tr>
               <td>celular</td>
               <td><?php echo $data['celular'];?></td>
           </tr>

           <tr>
               <td>Discplina</td>
               <td><?php echo $data['disciplina'];?></td>
           </tr>
           <tr>
               <td>Hora/Aula</td>
               <td><?php echo $hora_aula = ' R$ ' . number_format($data['hora_aula'], 2, ',', '.');;?></td>
           </tr>

           
           <tr>
               <td></td>
               <td>
                   <a href='read.php' class='btn btn-danger'>Ver todos os professores</a>
                   <a class="btn btn-success" href="update.php?id=<?php echo $data['id'];?>">Atualizar</a>
               </td>
           </tr>
       </table> 
 
    </div> <!-- end .container -->
     
</body>
</html>