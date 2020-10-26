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
		$producttid = $_GET['idproduct'];
		$arrProduct = array();
		$query = "SELECT * FROM sanpham where idproduct = $producttid ";
		$data = mysqli_query($connect,$query);
		 while ($row = mysqli_fetch_assoc($data)) {
		        array_push($arrProduct, new Product($row['idproduct'],$row['nameproduct'],$row['description'],$row['price'],$row['linkimage'],$row['numberbuy'],$row['idtype']));
		     }
		echo json_encode($arrProduct,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);


?>