<?php 
	include 'config/database.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	// echo $username ." : ".$password;

  	$pdo = Database::connect();

    $query = $pdo->prepare("SELECT * FROM users WHERE (username=:username OR email=:username) AND password=:password");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $enc_password = hash('sha256', $password);
    $query->bindParam("password", $enc_password, PDO::PARAM_STR);
    $query->execute();
	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['user_id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
		// session_write_close();
		header('Location: admin_index.php');
		// switch ($_SESSION['sess_userrole']) {
		//     case admin:
		//         header('Location: admin_index.php');
		//         break;
		//     case aluno:
		//         header('Location: profile.php');
		//         break;
		//     case professor:
		//         header('Location: userhome.php');
		//         break;
		// }
		
	}


?>