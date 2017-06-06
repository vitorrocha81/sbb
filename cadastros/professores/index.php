<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Read Records - PHP CRUD Tutorial</title>
   <?php include '../../libs/load_libs.php'; ?>
 
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
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
                      include '../../config/database.php';
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
         
    </div> <!-- end .container -->

</body>

</html>