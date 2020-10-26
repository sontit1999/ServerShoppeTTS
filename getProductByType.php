<?php
        require("connect.php");
		class Product{
			function Product($id,$name,$mota,$gia,$linkanh,$numberbuy,$idtype){		
				$this->id = $id;
                $this->name = $name;
                $this->mota = $mota;
                $this->gia =$gia;
                $this->linkanh= $linkanh;
                $this->numberbuy = $numberbuy;
                $this->idtype = $idtype;
			}
		}
        $idtype = $_GET['idtype'];

		$arrProduct = array();
		$query = "SELECT * FROM `sanpham` WHERE idtype = $idtype";
		$data = mysqli_query($connect,$query);
		 while ($row = mysqli_fetch_assoc($data)) {
		        array_push($arrProduct, new Product($row['idproduct'],$row['nameproduct'],$row['description'],$row['price'],$row['linkimage'],$row['numberbuy'],$row['idtype']));
		     }
		echo json_encode($arrProduct,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);


?>