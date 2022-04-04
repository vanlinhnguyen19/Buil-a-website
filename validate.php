
<?php				
		$myusersname= "paulnguyen2608@gmail.com";
		$mypass ="12345";
		
		 if(isset($_POST['login'])){   
		 	$usersname = $_POST['usersname';
			$pass = $_POST['password'];
			$rem = $_POST['remember'];	  
			if( $usersname == $myusersname and $pass == $mypass ){	
					$rem = $_POST["remember"];
				if ( isset($_POST["remember"])){
					setcookie("usersname", $usersname, time()+60*60*7);	
					setcookie("pass",$password, time()+60*60*7);
					}		
					session_start();
					$_SESSION["usersname"]= $usersname;
					 
			}else{
				echo "Usersnname or Password is Incorrect.<br>Click here to <a href ='Login.php'>try again</a>";
				} 	
		 }
		 else{	   
		 	header('location: login.html');
		 } 
		
?>

