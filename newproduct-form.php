<!DOCTYPE html>
<html lang="en">
  <head>
	  <title>B_system</title>
    <?php include './common/styles-fonts.php';?>
  </head>
  <main>
    <body>
      <?php 
      include './common/header.php';
      include './DatabaseConnection.php';

      $bd = new DatabaseConnection();
      $conn = $bd->getConnection();
      $name = $_POST['fname'];
      $price = $_POST['fprice'];
      $description = $_POST['fdescription'];
      $pic1 = "./images/" . $_POST['fpic1'] . ".jpg";
      $pic2 = "./images/" . $_POST['fpic2'] . ".jpg";
      $pic3 = "./images/" . $_POST['fpic3'] . ".jpg";
  
      try{
        $stmt = $conn->prepare("INSERT INTO products (nameCol, priceCol, descriptionCol, pictureCol1, pictureCol2, pictureCol3) VALUES (?, ?, ?, ?, ?, ?);");        
        $stmt->bind_param("ssssss", $name, $price, $description, $pic1, $pic2, $pic3);
        $stmt->execute();
        if ($stmt){
        echo "<h1>New product created successfully</h1>";
        } 
      }
      catch (Exception $e){
        echo "Error.";
      }
      finally{
        $conn->close();
        $stmt->close();
      }           
      ?>
    </body>
    <?php include './common/socialmedia.php';?>
  </main>  
  <?php include './common/footer.php';?>
</html>