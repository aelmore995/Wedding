<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="/css/rsvp.css"/>
<form id='rsvp_form' action='ajax/rsvp_submit.php' method='POST'>
  <label for='name'>Name: </label><input id='name' type='text' name='name'><br>
  <label for='email'>E-Mail: </label><input id='email' type='email' name='email'><br>
  <label for='wedding'># of People: </label><input id='number' type='text' name='number'><br>
  <span id='attending_text'>Attending the: </span>
  <label for='wedding'>Wedding: </label><input id='wedding' type='checkbox' name='wedding'>
  <label for='reception'>Reception: </label><input id='reception' type='checkbox' name='reception'><br>
  <input id='submit_btn' type='submit' value='Submit'>
</form>

<?php include "includes/footer.php"?>
