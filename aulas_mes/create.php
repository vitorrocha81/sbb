<?php

// Start Session
session_start();

// check user login
if(empty($_SESSION['sess_user_id']))
{
    header("Location: index.php");
}

// Database connection
require(__DIR__.'/../database.php');
$db = DB();

// Application library ( with DemoLib class )
require(__DIR__.'/../lib/library.php');
$app = new DemoLib();

$user = $app->UserDetails($_SESSION['sess_user_id']); // get user details

?>
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

    <script>
    $( function() {
      $( ".datas" ).datepicker();
    } );
    </script>
 
</head>

<body>

    <div id="wrapper">
        <?php include '../shared/top_navigation.php' ?>
        <?php include '../shared/sidebar.php' ?>
    <div id="page-wrapper">    
            <div class="page-header">
                <h1>NOVA AULA </h1>
            </div>
           <h3>Hello <?php echo $user->name ?>,</h3>
            <?php echo $user->email ?>,</h3>
<?php
     
    include '../config/database.php';
 
    if ( !empty($_POST)) {

        // keep track validation errors
     
        // keep track post values
        $aluno_id = $_POST['aluno_id'];
        $professor_id = $_SESSION['sess_user_id'];
        $materia = $_POST['materia'];
        //Pegue a data no formato dd/mm/yyyy
        $data = $_POST['dia_aula'];
        //Exploda a data para entrar no formato aceito pelo DB.
        $dataF = explode('/', $data);
        $dia_aula = $dataF[2].'-'.$dataF[1].'-'.$dataF[0];
        $cadastrado_por = $_SESSION['sess_user_id'];
        // if ( ! empty( $_POST ) ) {
        //  // Variáveis geradas dinamicamente
        //  foreach ( $_POST as $variavel => $valor ) {
        //  echo $$variavel = $valor;
        //  }
        // die('ok');
        //  }     
        // // insert data
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO aulas_mes (aluno_id,professor_id,materia,dia_aula,cadastrado_por) values(?, ?, ?, ?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($aluno_id,$professor_id,$materia, $dia_aula,$cadastrado_por));
            Database::disconnect();
          echo '<div class="alert alert-success" id="sucesso">Cadastro Efetuado com sucesso</div>';
           
            
    }
?>
 
<body>
     
                   
             

                    <form class="form-group" action="create.php" method="post">
                    <!-- capos escondidos  -->
                    
                      <!-- fim dos campos escondidos -->
                     <div class="control-group">
                       <label class="control-label">Aluno</label>
                       <div class="controls">
                           <select name="aluno_id">
                               <option value="0" >Selecione</option>
                               <option value="1">aluno xxxx</option>
                               <option value="2">aluno yyyy</option>
                               <option value="3">aluno zeze</option>
                               <option value="4">aluno joao</option>
                             </select>
                       </div>
                     </div>

                      <div class="control-group">
                        <label class="control-label">DATA</label>
                        <div class="controls">
                          <input type="date" id="dia_aula" name="dia_aula" class="datas" />
                        </div>
                      </div>

                      <label class="control-label">MATÉRIA DESTA AULA</label>
                        <div class="controls">
                            <input name="materia" type="text" class="form-control"  placeholder="Matéria do Dia">
                       </div>
                          
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
                          <a class="btn" href="index.php">Voltar</a>
                        </div>
                        <div class="form-group">
                                
                            </div>
                    </form>

       <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">         
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <script type="text/javascript">
         $("#cadastrar").on('click', function(){
             setTimeout(function(){
                 $("#sucesso").css("display","none");
             }, 5000);  
         }); 
       </script>       
  </body>
</html>