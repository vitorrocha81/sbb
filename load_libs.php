<link  href="libs/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="libs/css/sb-admin-2.css" rel="stylesheet" type="text/css" />
<link  href="libs/css/metisMenu.css" rel="stylesheet" type="text/css" />
<link href="libs/css/morris.css" rel="stylesheet" type="text/css" />
<link href="libs/css/font-awesome.css" rel="stylesheet" type="text/css">

<!-- custom css -->
<style>
    .m-r-1em{ margin-right:1em; }
    .m-b-1em{ margin-bottom:1em; }
    .m-l-1em{ margin-left:1em; }
</style>

    

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="libs/js/jquery-3.0.0.min.js"></script>
<script src="libs/js/metisMenu.js"></script>
<script src="libs/js/sb-admin-2.js"></script>
<script src="libs/js/morris.js"></script>
  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/js/bootstrap.min.js"></script>
 

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




