<?php
include './common/header.php';
include './ConnectToDatabase.php';
include './ClassUser.php';


public function getProdCategory()
{
  $cm = $this->getConnection();

  $sql = "SELECT * FROM pictures";

  $result = $cm->query($sql);

  if ($result->num_rows > 0){

    while($row = $result->fetch_assoc())
    {?>
      <img src="<?php echo $row["pictureCol"];?>"><?php
      echo "<h3>" . $row["nameCol"] . "</h3>"; 
      echo "<p>" . $row["priceCol"] . "</p>";
    }

  }

  else{
    echo "";
  }
}?>