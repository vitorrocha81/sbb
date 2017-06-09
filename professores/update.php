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
 

     <?php include "../config/site_config.php"; ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SBB LANGUAGES</title>
</head>

<body>

    <div id="wrapper">
        <?php include '../shared/top_navigation.php' ?>
        <?php include '../shared/sidebar.php' ?>
    <div id="page-wrapper">    
            <div class="page-header">
                <h1>Atualizar Cadastro</h1>
            </div>
     <?php
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
 
//include database connection
include '../config/database.php';
$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    }
     
    if ( !empty($_POST)) {
     
        // keep track post values
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $disciplina = $_POST['disciplina'];
        $hora_aula = $_POST['hora_aula'];
        

        // update data
        
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE professores  set nome = ?, disciplina = ?, email = ?, telefone = ?, celular = ?, hora_aula = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$disciplina,$email,$telefone,$celular,
                        ($hora_aula = str_replace(',','.',$hora_aula)), $id));
            Database::disconnect();
        
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM professores where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nome = $data['nome'];
        $disciplina = $data['disciplina'];
        $email = $data['email'];
        $telefone = $data['telefone'];
        $celular = $data['celular'];
        $hora_aula = $data['hora_aula'];
        Database::disconnect();
    } 
    
?>
        <!--we have our html form here where new user information will be entered-->
       <form action="update.php?id=<?php echo $id?>" method="post">
           <table class='table table-hover table-responsive table-bordered'>
               <tr>
                   <td>nome</td>
                   <td> <input name="nome" type="text"  placeholder="Nome do professorr" value="<?php echo !empty($nome)?$nome:'';?>"></td>
               </tr>
               <tr>
                   <td>email</td>
                   <td><input type="text" name='email' class='form-control' value="<?php echo !empty($email)?$email:'';?>"></td>
               </tr>
               <tr>
                   <td>telefone</td>
                   <td><input type='text' name='telefone' class='form-control' value="<?php echo !empty($telefone)?$telefone:'';?>"></td>
               </tr>
              <tr>
                  <td>celular</td>
                  <td><input type='text' name='celular' class='form-control' value="<?php echo !empty($celular)?$celular:'';?>"></td>
              </tr>
              <tr>
                  <td>disciplina</td>
                  <td><input type='text' name='disciplina' class='form-control' value="<?php echo !empty($disciplina)?$disciplina:'';?>"></td>
              </tr>
              <tr>
                  <td>HORA / AULA</td>
                  <td><input type='text' name='hora_aula' class='form-control' value="<?php echo !empty($hora_aula)?number_format($hora_aula,2,',','.'):'';?>"></td>
              </tr>  
               <tr>
                   <td></td>
                   <td>
                       <input type='submit' value='ATUALIZAR' class='btn btn-success' />
                       <a href='index.php' class='btn btn-info'>LISTAR TODOS</a>
                   </td>
               </tr>
           </table>
       </form>  
    </div> <!-- end .container -->
     
                   </table>
               </div>
        <!-- dynamic content will be here -->
    </div>


</body>

</html>

