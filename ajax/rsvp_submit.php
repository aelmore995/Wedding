<?php
  include "../includes/db.php";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];

  if(isset($_POST['wedding'])){
    $wedding = 1;
  } else {
    $wedding = 0;
  }

  if(isset($_POST['reception'])){
    $reception = 1;
  } else {
    $reception = 0;
  }

  $query = "INSERT INTO wedding.rsvp (name, email, number_of_people, wedding, reception) VALUES ('$name', '$email', $number, $wedding, $reception)";
  $result = $db->query($query);

  include "../includes/header.php";
  include "../includes/footer.php";
?>
