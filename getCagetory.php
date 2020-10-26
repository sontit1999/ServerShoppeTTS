<?php
        require("connect.php");
		class Cagetory{
			function Cagetory($idtype,$nametype,$linkimg,$description){		
				$this->idtype = $idtype;
                $this->nametype = $nametype;
                $this->linkimg = $linkimg;
                $this->description= $description;
			}
		}
		$arrCagetory = array();
		$query = "SELECT * FROM `loaisanpham`";
		$data = mysqli_query($connect,$query);
		 while ($row = mysqli_fetch_assoc($data)) {
		        array_push($arrCagetory, new Cagetory($row['idtype'],$row['nametype'],$row['linkimg'],$row['description']));
		     }
		echo json_encode($arrCagetory,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);


?>