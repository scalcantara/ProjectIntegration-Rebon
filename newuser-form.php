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
      include './ClassUser.php';

      $bd = new DatabaseConnection();
      $conn = $bd->getConnection();
      $name = $_POST['fname'];
      $username = $_POST['fusername'];
      $password = $_POST['fpassword'];
  
      try{
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nameCol, usernameCol, passwordCol) VALUES (?, ?, ?);");

        
          $stmt->bind_param("sss", $name, $username, $password);
          $stmt->execute();
          if ($conn){
          echo "<h1>New user created successfully</h1>";
          echo "<p>Welcome, " . $name . ".</p>";
        } 
      }
      catch (Exception $e){
        echo "Error: " . $conn . "<br>" . $conn->error; //remove message
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