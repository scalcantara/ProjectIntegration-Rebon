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
      $username = $_POST['fusername'];
      $password = $_POST['fpassword'];
  
      try{
        $stmt = $conn->prepare("SELECT usernameCol, passwordCol FROM utilisateurs WHERE (usernameCol = ? and passwordCol = ?);");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result();
      
        if ($stmt->num_rows > 0) {
          echo "<h1>Welcome.</h1><br>";
          if($username = "admin"){
            //admin home page
          }
          else{
            echo "<h1>Impossible to login.<br> This username with this password doesn't exist.";
          }              
        } 
      }
      catch (Exception $e){
        echo "Error: " . $conn . "<br>";
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