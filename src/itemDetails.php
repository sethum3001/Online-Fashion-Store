<?php require_once 'config.php'?>




<?php


if(!empty($_GET['id'])){
	$itemCode =$_GET['id'];
	$sql = "SELECT * FROM item WHERE item_code =" . $itemCode . ";";
	$result=$conn->query($sql);	

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $item_name = $row["name"];
    $price = $row["unit_price"];
    $item_desc = $row["item_desc"];
    $image = $row["image"];
  }
} else {
  echo "Empty row";
}

}






//  $_GET['itemcode'];
// $sql = "SELECT * FROM item WHERE item_code =" . $itemCode . ";";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   while ($row = $result->fetch_assoc()) {
//     $name = $row["name"];
//     $price = $row["unit_price"];
//     $item_desc = $row["item_desc"];
//     $image = $row["image"];
//   }
// } else {
//   echo "Empty row";
// }

?>
<?php include 'header.php'?>

    <link rel="stylesheet" href="src/css/itemDetails.css" type="text/css">

 <head>
 <body>   

    <div class="container">
       <div class="left-side">
           <div class="image-box">
                <img src="<?php echo $image ?>" height="350px" width="250px">
            </div>
           
        </div>
        
        
        <div class="right-side">
            <span><?php echo $item_name ?></span>
            <div class="product-price">
                <span>Rs.<?php echo $price ?> </span>
            </div>
            <div class="description-box">
                <p><?php echo $item_desc ?> </p>
            </div>
            <?php echo  "<form  method='post' action='addCart.php?item_name=".$item_name."'>"?>
            <div class="size">
                <label class="size-label">Size</label>
                <select class="size-select" name="size">
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l" >L</option>
                    
                </select>
            </div>
            <div class="qty">
                <label>Quantity</label>
                <input class="qty-input" type=number name="qty" min="1" max="" value="1">
               
                 <input type="submit" name="addCart" value="Add to cart"><br>
                 <div id="Nostock"></div>
                
            </div>
          </form>
            
           
        </div>
    </div>
  


<!-- Query reviews -->

<div class="rev-box">

	<h2>What our customer say</h2>


<?php 

	


	$sqli="SELECT c.name,r.review_disc FROM review r,customer c WHERE c.cus_id=r.cus_id AND item_code=$itemCode";

	$rev_result=$conn->query($sqli);
	if($rev_result->num_rows>0){

		while($row_rev=$rev_result->fetch_assoc()){

			echo "<div class='rev-container'>";
			echo "<h4 class='user'>".$row_rev['name']."</h4>";
			echo "<p class='rev_desc'>".$row_rev['review_disc']."</p>";
			echo "</div>";

		}

	}else{

		echo "<p class='no_rev'>No reviews</p>";
	}




?>

</div>
 <?php echo  "<form  method='post' action='addReview.php?item_code=".$itemCode."'>"?>;

	<textarea cols="70" rows="10" name="reviewDesc"></textarea><br>
	<input type="submit" name="revBtn" value="Make review" style="margin-left: 30px; margin-bottom: 50px;">

</form>
    




<?php include 'footer.php';?>