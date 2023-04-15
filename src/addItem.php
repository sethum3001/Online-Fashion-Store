<?php require_once 'config.php'?>
<?php include 'adminHeader.php'?>
<?php 
	if(isset($_SESSION['log_user'])){
		$user=$_SESSION['log_user'];
		$sql="SELECT admin_id FROM admin WHERE  admin_name='$user'";
		if($result=$conn->query($sql)){
			if($result->num_rows>0){

				$admin=$row['admin_id'];
			}
		}else{

			echo "no results";
		}
		
	}else{
		header("Location:adminLog.php");
	}
?>



	
<?php 
    require 'config.php';
    

    if(!isset($_SESSION['log_user'])){
        header('adminLog.php');
    }else{
        $adminName=$_SESSION['log_name'];
    }
?>


 
 <link rel="stylesheet" href="src/css/addItem.css" type="text/css">

</header>
<body>
    

 

    <form method = "post" action="addItem.php">

    <div class="container-1">
        <div class="left-side">
            <label>Product Name</label>
            <input class="product-name" name="productName"type="text">
            <div class="wrapper">
                 <div class="category">
                <label>Category</label>
                <select class="category-select" name="category">
                <option value="men">Men</option>
                <option value="women">Women</option>
                <option value="kid">Kid</option>
                </select>
                </div>
                <div class="type">
                <label>Type</label>
                <select class="type-select" name="type">
                <optgroup label="Men">
                    <option value="t-shirt">Long sleeves shirt</option>
                    <option value="t-shirt">Short sleeves shirt</option>
                    <option value="t-shirt">Short sleeves T-shirt</option>
                    <option value="t-shirt">Long sleeves T-shirt</option>
                    <option value="t-shirt">Trousers</option>
                    <option value="t-shirt">Shorts</option>
                </optgroup>
                <optgroup label="Women">
                    <option value="BLOUSE">BLOUSE </option>
                    <option value="SKIRTS">Skirts </option>
                    <option value="DRESS">Dresses</option>
                    <option value="PANTS">Pants</option>
                    <option value="SHORTS">Shorts</option>
                </optgroup>
                <optgroup label="Kids">
                    <option value="t-shirt">Girls</option>
                    <option value="t-shirt">Boys</option>
                    <option value="t-shirt">Baby collection</option>
                </optgroup>   
                </select>
                </div>
            </div>
            
            <label>Description</label>
            <input class="description" name="description" type="text">
            
        </div>
        <div class="middle">
            <div class="product-images">
                <label>Product Images</label>
                <input type="text" name="imageAddress">
                <p>*Image must not exceed the size of 4MB</p>
            </div>
            <div class="add-size">
                <label>Add Size</label>
                <div class="size-toplayer">
                    <label><input type="radio" id="XS" value="XS" name="Size">XS</label>
                    <label><input type="radio" id="S" value="S" name="Size">S</label>
                    <label><input type="radio" id="M" value="M" name="Size">M</label>                   
                </div>
                <div class="size-bottomlayer">
                    <label><input type="radio" id="L" value="L" name="Size">L</label>
                    <label><input type="radio" id="XL" value="XL" name="Size">XL</label>

                </div>
            </div>
        </div>
        <div class="right-side">
            <label>Price</label>
            <input type="number" name="price">
            <label>Qty</label>
            <input class="qty-input" type=number min="1" max="" value="1" name="qty">
            <div class="btn-grp">
				<input type="submit" value="Add product" name="addproduct">
				<input type="reset" value="Cancel" name="cancel">
              
            </div>
        </div>
    </div>
        </form>
    




</body>
</html>

<?php

	if(isset($_POST["addproduct"])){
		$name=$_POST["productName"];
		$category=$_POST["category"];
		$type=$_POST["type"];
		$description=$_POST["description"];
		$image=$_POST["imageAddress"];
		$size=$_POST["Size"];
		$price=$_POST["price"];
		$qty=$_POST["qty"];

		$sql="INSERT INTO item(name,unit_price,type,category,item_desc,stock,image,admin_id,size) VALUES('$name','$price','$type','$category','$description','$qty','$image','1','$size')";

		if($conn->query($sql)){
			echo '<script>alert("Item added successfully")</script>';
		}else{
			echo '<script>alert("Item was not added")</script>';
		}
	}
	
	$conn->close();

  ?>