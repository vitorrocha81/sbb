<!DOCTYPE HTML>
<html>
<head>
    <title>Atualizar dadados do  professor</title>
     
   <?php include '../../libs/load_libs.php'; ?>

         
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Atualizar</h1>
        </div>
     <?php
// get passed parameter value, in this case, the record ID
// isset() is a PHP function used to verify if a value is there or not
 
//include database connection
include 'config/database.php';
$id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: read.php");
    }
     
    if ( !empty($_POST)) {
        // keep track validation errors
     
        // keep track post values
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $disciplina = $_POST['disciplina'];
         
      
         
        // update data
        
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE professores  set nome = ?, disciplina = ?, email = ?, telefone = ?, celular = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$disciplina,$email,$telefone,$celular,$id));
            Database::disconnect();
            header("Location: read.php");
        
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
                   <td></td>
                   <td>
                       <input type='submit' value='ATUALIZAR' class='btn btn-success' />
                       <a href='read.php' class='btn btn-info'>LISTAR TODOS</a>
                   </td>
               </tr>
           </table>
       </form>  
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs//js/jquery-3.0.0.min.js"></script>
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/js/bootstrap.min.js"></script>

 
</body>
</html>