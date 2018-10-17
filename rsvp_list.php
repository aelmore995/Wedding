<?php
include "includes/header.php";
include "includes/db.php";

echo "<table style='width: 100%; margin-left: 5px;'><thead><th>Name</th><th>E-Mail</th><th># People</th><th>Wedding</th><th>Reception</th></thead><tbody>";
$result = $db->query("SELECT * FROM wedding.rsvp");
while($row = $result->fetch_array()){
  $name = $row['name'];
  $email = $row['email'];
  $number = $row['number_of_people'];
  $wedding = $row['wedding'];
  $reception = $rot['reception'];

  if($wedding){
    $wedding = 'Yes';
  } else {
    $wedding = 'No';
  }

  if($reception){
    $reception = 'Yes';
  } else {
    $reception = 'No';
  }

  echo "<tr><td>$name</td><td>$email</td><td>$number</td><td>$wedding</td><td>$reception</td></tr>";
}
echo "</tbody></table>";
include "includes/footer.php";

 ?>
