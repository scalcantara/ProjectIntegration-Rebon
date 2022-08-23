<?php
class DatabaseConnection{
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $schema = "projet-integration";
  private $conn;

  public function getConnection(){
    try
    {
      $conn = new mysqli($this->servername, $this->username, $this->password, $this->schema);
      $conn->set_charset("utf8");
    }
    catch (Exception $ex)
    {
      echo "<p>Connection failed</p>";
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
  }
}
?>