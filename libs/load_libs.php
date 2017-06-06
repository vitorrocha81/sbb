
  
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="../../libs/css/bootstrap.min.css" />
 
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
         
    <!-- custom css -->
    <style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
    </style>

    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../../libs//js/jquery-3.0.0.min.js"></script>
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../libs/js/bootstrap.min.js"></script>
 

<script type='text/javascript'>
    function delete_user( id ){
         
        var answer = confirm('Deletar professor?');
        if (answer){
            // if user clicked ok, 
            // pass the id to delete.php and execute the delete query
            window.location = 'delete.php?id=' + id;
        } 
    }
</script>