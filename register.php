<?php
        require("connect.php");
		
		$username = $_GET['username'];
		$sdt = $_GET['sdt'];
		$password = $_GET['password'];
		$linkavatar = $_GET['linkavatar'];
		$address = $_GET['address'];
	    
	    $query = "SELECT * FROM `account` WHERE sdt = '$sdt' ";
	    $flag = 0;
		$data = mysqli_query($connect,$query);
		 while ($row = mysqli_fetch_assoc($data)) {
		        $flag = 1;
		        break;
		     }
		 if($flag == 0){
		 	$query1 = "INSERT INTO `account` (`iduser`, `username`, `sdt`, `password`, `linkavatar`, `address`) VALUES (NULL, '$username', '$sdt', '$password', '$linkavatar', '$address');";
			$data = mysqli_query($connect,$query1);		 
			echo "succes";
		}else{
			echo "fail";
		}
		
?>