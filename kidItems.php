<?php require_once 'config.php' ;
	if(isset($_GET["search"])){
		$min=$_GET["min"];
		$max=$_GET["max"];
		$categories_arry=$_GET["cat"];
		$myArray=array();
		foreach($categories_arry as $categories_strg){
			$myArray[]="'".$categories_strg."'";
		}
		$chk=implode(",",$myArray);
		$sql="SELECT * FROM item where category like'%kid%' AND size='s' AND type IN ($chk) AND unit_price BETWEEN $min AND $max " ;
	}else{
		$sql="SELECT * FROM item where category like '%kid%' AND size='s'"; 
	}
	?>


<?php include 'header.php'?>
	
    <link rel="stylesheet" href="src/css/test1.css" type="text/css">
	



</head>
<body>

	

<!--    End of header-->
   

    <!-- box-1 -->
    
   <div class="wrapper">
     <div class="left-side">
       <form method="get" name="selection-box" style="background-color: #9e9e9e59;justify-content: center;margin: 48px 0;">
           <label><h2>SHOP BY</h2></label>
                  
       <div class="categories">
           <label><h3>Categories</h3></label>
		
        <input type="checkbox" name="cat[]" value="PANTS" >
        <label >Pant</label><br>
        <input type="checkbox" name="cat[]" value="Skirts" >
        <label >Skirts</label><br>
        <input type="checkbox" name="cat[]" value="Shirts">
        <label >Shirt</label><br>
        <input type="checkbox" name="cat[]" value="T-shirts">
        <label >T-skirts</label><br>
        <input type="checkbox"  name="cat[]" value="Dresses">
        <label >Dresses</label><br>

         </div>
        

      
    <div class="priceSlider">
         <label><h3>Price</h3></label>
    
       <div class="min-max">
        <div class="min">
         <label>Min</label><span id="min-value"></span>
        </div>
       <div class="max">
         <label>Max</label><span id="max-value"></span>
       </div>     
       </div> 
    
       <div class="min-max-range">
         <input type="range" min="0" max="5000" value="2000" class="range" id="min" name="min">
         <input type="range" min="5001" max="10000" value="8000" class="range" id="max" name="max">      
       </div>    
    
       <div style="clear: both;"></div>    
   </div> 
         
   <div class="size-box">
        <label><h3>Size</h3></label>
       <div class="size">
         <input type="checkbox" name="size">
         <label>XS</label>
         <input type="checkbox" name="size">
         <label>S</label>  
         <input type="checkbox" name="size">
         <label>M</label><br>
         <input type="checkbox" name="size">
         <label>L</label>
         <input type="checkbox" name="size">
         <label>XL</label>
       
        </div> 
   </div>
        <input type="submit" name="search" value="Search"  style="  
     display: block;
    height: 30px;
    width: 120px;
    margin: 30px 0;
    text-align: center;
    background-color:deepskyblue;
    font-size: 16px;
    border:none;
    color: white;
    margin-left: auto;
    margin-right: auto;">
         </form>
         
         
       </div>

        <div class="right-side">
                    
     <?php if($result=$conn->query($sql)){

	if($result->num_rows>0){


		while($row=$result->fetch_assoc()){

			echo ("<div class='item-box' style='background-image: url(".$row['image'].");'>");

			echo ("<div class='item-box-overlay'>");

			echo ("<center><a href='itemDetails.php?id=".$row['item_code']."'><button class='item-view-button'>View Item</button></a></center>");


			echo ("</div>");

			echo ("<div class='item-box-disc'><p>" .$row['name']."</p></div>");

			echo ("</div>");


		}



	}else
		echo "no result";
		//no rows







}else
	echo "Failed";;//queryfailed

	
?>
   




 



            </div>
    </div> 
    
  

 <script type="text/javascript" src="src/Js/priceSlider.js"></script>

<?php include 'footer.php'?>