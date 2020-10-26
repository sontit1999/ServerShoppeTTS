<?php
        require("connect.php");
		class User{
			function User($status,$iduser,$username,$sdt,$password,$linkavatar,$address){		
				$this->status = $status;
				$this->iduser = $iduser;
                $this->username = $username;
                $this->sdt = $sdt;
                $this->password =$password;
                $this->linkavatar = $linkavatar;
                $this->address = $address;
			}
		}
		$flag = 0;

		$sdt = $_GET['sdt'];
		$pass = $_GET['pass'];
		$query = "SELECT * FROM `account` WHERE sdt = '$sdt' and password = '$pass'";
		$data = mysqli_query($connect,$query);
	
		 while ($row = mysqli_fetch_assoc($data)) {
		 	    $flag = 1;
		        $user = new User("success",$row['iduser'],$row['username'],$row['sdt'],$row['password'],$row['linkavatar'],$row['address']);
		        break;
		     }
		     if($flag == 0){
		     	 $users = new User("fail","fail","fail","fail","fail","fail","fail");
		     	 echo json_encode($users,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
		     }else{
				echo json_encode($user,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
		     }
		

?>