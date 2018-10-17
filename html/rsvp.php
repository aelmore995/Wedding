<?php include "includes/header.php"?>
<link rel="stylesheet" type="text/css" href="/css/rsvp.css"/>
<form id='rsvp_form' action='ajax/rsvp_submit.php' method='POST'>
  <table id='rsvp_table'>
    <tr>
      <td>
        <label for='name'>Name: </label><input id='name' type='text' name='name'>
      </td>
      <td>
        <label for='email'>E-Mail: </label><input id='email' type='email' name='email'>
      </td>
    </tr>
    <tr>
      <td>
        <label for='phone'>Phone: </label><input id='phone' type='tel' name='phone'>
      </td>
      <td>
        <label for='wedding'># of People: </label><input id='number' type='text' name='number'>
      </td>
    </tr>
    <tr>
      <td>
        <span id='attending_text'>Attending the: </span><label for='wedding'>Wedding: </label><input id='wedding' type='checkbox' name='wedding'>
      </td>
      <td>
        <label for='reception'>Reception: </label><input id='reception' type='checkbox' name='reception'>
      </td>
    </tr>
  </table>

  <table id='rsvp_table_mobile'>
    <tr>
      <td>
        <label for='name'>Name: </label><input id='name' type='text' name='name'>
      </td>
    </tr>
    <tr>
      <td>
        <label for='email'>E-Mail: </label><input id='email' type='email' name='email'>
      </td>
    </tr>
    <tr>
      <td>
        <label for='phone'>Phone: </label><input id='phone' type='tel' name='phone'>
      </td>
    </tr>
    <tr>
      <td>
        <label for='wedding'># of People: </label><input id='number' type='text' name='number'>
      </td>
    </tr>
    <tr>
      <td>
        <span id='attending_text'>Attending the: </span><label for='wedding'>Wedding: </label><input id='wedding' type='checkbox' name='wedding'><label for='reception'>Reception: </label><input id='reception' type='checkbox' name='reception'>
      </td>
    </tr>
  </table>
  <input id='submit_btn' type='submit' value='Submit'>
</form>

<?php include "includes/footer.php"?>
