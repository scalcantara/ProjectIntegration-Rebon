<!DOCTYPE html>
<html lang="en">
  <head>
	  <title>B_system - Login</title>
    <?php include './common/styles-fonts.php';?>
  </head>
  <body>
    <?php include './common/header.php';?>
    <main>
      <h1>Login</h1>
      <div class="login-container">
      <p>Hello, enter your username and password:</p>

      <form action="login-form.php" method="post">
        Username: <input type="text" name="fusername"><br>
        Password: <input type="text" name="fpassword"><br>
        <input type="submit">
      </form>

      <a href="">Forgot your password?</a>
      </div>  
      <?php include './common/socialmedia.php';?>
    </main>  
    <?php include './common/footer.php';?>  
  </body>
</html>