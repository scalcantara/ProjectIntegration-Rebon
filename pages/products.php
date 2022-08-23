<!DOCTYPE html>
<html lang="en">
  <head>
	  <title>B_system - Product Category</title>
    <?php include './common/styles-fonts.php';?>
  </head>
  <body>
    <?php include './common/header.php';?>
    <main class="main-margin">
      <h1>Product category</h1>
      <ul class="navigation">
        <li><a href="./index.html">Home ></a></li>
        <li><a href="./products.html">Product category</a></li>
      </ul>
      <div class="grid-container">
      <?php
      include './DatabaseConnection.php';
      $bd = new DatabaseConnection();
      
      try{
        $conn = $bd->getConnection();
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
  
        if (!empty($result) && $result->num_rows > 0){
  
          while($row = $result->fetch_assoc())
          {?><div class="product">
            <img src="<?php echo $row["pictureCol1"];?>" alt="picture of product"><?php
            echo "<br><h3>" . $row["nameCol"] . "</h3><br>"; 
            echo "<p>" . $row["priceCol"] . "</p></div>";
          }
        } 
      }
      catch(Exception $e){
        echo "<h1>Products won't load.</h1>";
      }
      finally{$conn->close();}

      ?><!--
        <div class="product">
          <img src="./images/rectangle-gris.png" alt="Rectangle"></img>
          <h3><a href="./produit1.html">Product #1</a></h3>
          <p>$ 60.99</p>
        </div>-->
      </div>
      <div class="more-products">      
      <button href="#">See more products</button>
      </div>

      <?php include "./common/socialmedia.php";?>
    </main>  
    <?php include './common/footer.php';?>
  </body>
</html>







