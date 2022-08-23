<!DOCTYPE html>
<html lang="en">
  <head>
    <title>B_system - Create account</title>
    <?php include './common/styles-fonts.php';?>
  </head>
  <body>
  <?php include './common/header.php';?>
    <main>
      <h1>Create an account</h1>
      <div class="newuser-container">
       
        <form action="./newuser-form.php" method="post">
          Name: <input type="text" name="fname"><br>
          Username: <input type="text" name="fusername"><br>
          Password: <input type="text" name="fpassword"><br>
          <input type="submit">
        </form>

      </div>  
      <?php include './common/socialmedia.php';?>
    </main>  
    <?php include './common/footer.php';?>
  </body>
</html>