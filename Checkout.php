<?php 
    require_once 'config.php';
    include 'header.php';
    

    $cartId=$_GET['cart_id'] ;
    $total=0;
?>



    <link rel="stylesheet" href="src/css/Checkout.css" type="text/css">

</head>
<body>

	
    

<?php echo "<form method ='POST' name='billing_details' action='btnCheckout.php?cartId=$cartId'>"?>
    
    <div class="container">
        <div class="wrapper">
            <div class="left-side">
                <h2>Order Summary</h2><hr>
                <div class="left-side-top">
<!--                     ====================================================
 -->
<?php 
                if(isset($_SESSION['log_user'])){
                    if(isset($_GET['Prcd_chkOut'])) { 
                    $sql="SELECT * FROM cart_details WHERE cart_id='$cartId'";
                    $result=$conn->query($sql);
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            $item_code=$row['item_code'];
                            $sqli="SELECT name,image FROM item WHERE item_code='$item_code'";
                            $cart_details_result=$conn->query($sqli);
                            
                            if($cart_details_result->num_rows>0){
                                while($cart_details_rows=$cart_details_result->fetch_assoc()){
                                    $item_img=$cart_details_rows['image'];                                           
                                    $item_size=$row['size'];
                                    $item_qty=$row['quantity'];
                                    $item_price=$row['price']*$item_qty;
                                    $total=$total+$item_price; 
                                    $item_name=$cart_details_rows['name']; 
                                    // echo ("<table><center><tr><td>".$item_name."</td><td>".$item_size."</td><td>".$item_qty."</td><td>".$item_price."</td></tr><center></table>");
                                    echo "<table class='item-table'>";
                                    echo "<tr><td class='img-col'><img src='".$item_img."' class='img-box'><td>";
                                    echo "<td class='desc-col'> <span class='item-name'>$item_name</span><br><spanclass='item-details'>Size $item_size Quantity $item_qty</span></td></tr>";
                                    echo "<tr><td><div class='price'>$item_price</div><td></tr></table>";
                                }

                                    
                            }
                            
                        }
                        
                        
                    }
                    } 
                }
            ?>


                   
            </div>
                <div class="left-side-bottom">
                    <div class="tot-desc">
                        <span style="float: left;">Delivery</span><br>
                        <span style="float: left;">TOTAL</span>
                    </div>
                    <div class="tot-value">
                        <span style="float: right;">RS.450.0</span><br>
                        <span style="float: right;">RS.<?php echo $total+450 ?>.0</span>
                    </div>
                </div>

            </div>
<div class="right-side">
                <div class="billing-details">
                   <h3>Address</h3> <br>
                    <div class="address-top">
                        <input type="text"  name="address" placeholder="Street Name">
                        <input type="text" name="address1" placeholder="District">
                    </div>
                    <input type="text" class="address3" name="address2" placeholder="Province">
                </div>
                <div class="payment-details">
                    <h3>Payment Method</h3> <br>
                    <img src="src/img/pay.png"
                    align="right"
                    width="300" 
                        height="120">
                    <input type="radio" id="COD" name="delivery" value="1">
                    <lable>Cash on Delivery</lable><br>
                    <input type="radio" id="frimi" name="delivery" value="2">
                    <lable>Frimi</lable><br>
                    <input type="radio" id="card" name="delivery" value="3">
                    <lable>Credit Card </lable><br><br>
                    <center>
                      <input type="submit" name="btnCheckout" class="btnCheckout" value="Checkout">
                   </center>
                </div>
            </div>
        </div>
    </div>

<!-- -->


</form>




</body>
</html>