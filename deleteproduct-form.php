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
  
      try{
        $stmt = $conn->prepare("DELETE FROM products WHERE(nameCol = ?);");        
        $stmt->bind_param("s", $name);
        $stmt->execute();
        if ($stmt){
        echo "<h1>Product deleted successfully.</h1>";
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