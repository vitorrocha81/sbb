<?php
     
    include '../../config/database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
     
        // keep track post values
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
         
     
        // insert data
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO professores (nome,email,telefone) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome,$email,$telefone));
            Database::disconnect();
            header("Location: read.php");
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
     <?php include '../../load_libs.php'; ?>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Professor</h3>
                    </div>
             

                    <form class="form-group" action="create.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="nome" type="text" class="form-control"  placeholder="Name" value="<?php echo !empty($nome)?$nome:'';?>">
                           
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="email" type="text" class="form-control"  placeholder="Email Address" value="<?php echo !empty($email)?$email:'';?>">
                            
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                        <label class="control-label">Telefone</label>
                        <div class="controls">
                            <input name="telefone" type="text" class="form-control"   placeholder="Telefone" value="<?php echo !empty($telefone)?$telefone:'';?>">
                        
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Cadastrar</button>
                          <a class="btn" href="read.php">Voltar</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>E