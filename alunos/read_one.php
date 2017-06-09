<!DOCTYPE html>
<html lang="en">

<head>
<link  href="../libs/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../libs/css/sb-admin-2.css" rel="stylesheet" type="text/css" />
<link  href="../libs/css/metisMenu.css" rel="stylesheet" type="text/css" />
<link href="../libs/css/morris.css" rel="stylesheet" type="text/css" />
<link href="../libs/css/font-awesome.css" rel="stylesheet" type="text/css">

<!-- custom css -->
<style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
</style> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../libs/js/jquery-3.0.0.min.js"></script>
<script src="../libs/js/metisMenu.js"></script>
<script src="../libs/js/sb-admin-2.js"></script>
<script src="../libs/js/morris.js"></script>
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../libs/js/bootstrap.min.js"></script>
 

<script type='text/javascript'>

     <?php include "../config/site_config.php"; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SBB LANGUAGES</title>
    </script>
</head>

<body>

    <div id="wrapper">
        <?php include '../shared/top_navigation.php' ?>
        <?php include '../shared/sidebar.php' ?>

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
                  $sql = "SELECT * FROM alunos where id = ?";
                  $q = $pdo->prepare($sql);
                  $q->execute(array($id));
                  $data = $q->fetch(PDO::FETCH_ASSOC);
                  Database::disconnect();
              }
          ?>
    <div id="page-wrapper">    
            <div class="page-header">
                <h1>Sobre: <?php echo $data['nome'];?></h1>
            </div>
       
      

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
