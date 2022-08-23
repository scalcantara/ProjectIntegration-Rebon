 
<!DOCTYPE html>
<html lang="en">
  <head>
     <title>B_system - Admin's Home Page</title>
    <?php include './common/styles-fonts.php';?>
  </head>
  <main>
    <body>
      <?php 
      include './common/header.php';
      include './DatabaseConnection.php';
      //CHANGE USER PASSWORD
      //DELETE USER


      
      //INSERT PRODUCT
      ?>
      <h1>New Product</h1>
      <div class="newproduct-container">

      <form action="newproduct-form.php" method="post">
        Name: <input type="text" name="fname"><br>
        Price: <input type="text" name="fprice"><br>
        Description: <input type="text" name="fdescription"><br>
        Name of the picture file 1: <input type="text" name="fpic1"><br>
        Name of the picture file 2: <input type="text" name="fpic2"><br>
        Name of the picture file 3: <input type="text" name="fpic3"><br>
        <input type="submit">
      </form>

      <!--MODIFY PRODUCT
      DELETE PRODUCT-->
      <h1>Delete Product</h1>
      <div class="deleteproduct-container">

      <form action="deleteproduct-form.php" method="post">
        Name of the product you want to delete:<br>
          <input type="text" name="fname"><br>
        <input type="submit">
      </form>
    </body>
    <?php include './common/socialmedia.php';?>
  </main>  
  <?php include './common/footer.php';?>
</html>
