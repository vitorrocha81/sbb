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
    <div id="page-wrapper">    
            <div class="page-header">
                <h1>Professores cadastrados</h1>
            </div>

            <?php
             echo "<a href='create.php' class='btn btn-primary m-b-1em'>Cadastrar professor</a>";
            // include database connection
          ?>

          <div class="row">
                       <table class="table table-striped table-bordered">
                         <thead>
                           <tr>
                             <th>Name</th>
                             <th>Email Address</th>
                             <th>Mobile Number</th>
                           </tr>
                         </thead>
                         <tbody>
                         <?php
                          include '../config/database.php';
                          $pdo = Database::connect();
                          $sql = 'SELECT * FROM professores ORDER BY id DESC';
                          foreach ($pdo->query($sql) as $row) {
                                   echo '<tr>';
                                   echo '<td>'. $row['nome'] . '</td>';
                                   echo '<td>'. $row['email'] . '</td>';
                                   echo '<td>'. $row['telefone'] . '</td>';
                                 echo '<td width=250>';
                                                                 echo '<a class="btn btn-info" href="read_one.php?id='.$row['id'].'">Ver</a>';
                                                                 echo ' ';
                                                                 echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Atualizar</a>';
                                                                 echo ' ';
                                                                 echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">X</a>';
                                                                 echo '</td>';
                                   echo '</tr>';
                          }
                          Database::disconnect();
                         ?>
                         </tbody>
                   </table>
               </div>
        <!-- dynamic content will be here -->
    </div>

</body>

</html>


