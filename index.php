<?php include "includes/header.php";?>
<link href="/css/index.css" rel="stylesheet">
<div id='wedding_info'>
  <table id='info_table'>
    <tr>
      <td id='ceremony_td'>
        <table class='info_block' id='ceremony_table'>
          <tr>
            <th>Ceremony</th>
          </tr>
          <tr>
            <td>3:30pm</td>
          </tr>
          <tr>
            <td>May 25, 2019</td>
          </tr>
          <tr>
            <td>Christian Campus House</td>
          </tr>
          <tr>
            <td>2231 4th St, Charleston, IL 61920</td>
          </tr>
        </table>
      </td>
      <td>
        <div id='countdown_div'>
          <h2 id='big_day'>Big Day Count Down!</h2>
          <p id='countdown'></p>
        </div>
      </td>
      <td id='reception_td'>
        <table class='info_block' id='reception_table'>
          <tr>
            <th>Reception</th>
          </tr>
          <tr>
            <td>Immediately Following Ceremony & Pictures</td>
          </tr>
          <tr>
            <td>EIU Grand Ball Room</td>
          </tr>
          <tr>
            <td>2231 4th St, Charleston, IL 61920</td>
          </tr>
          <tr>
            <td>Join us for dinner & dessert!</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>

<div id='mobile_wedding_info'>
  <div id='mobile_countdown_div'>
    <h2 id='mobile_big_day'>Big Day Count Down!</h2>
    <p id='mobile_countdown'></p>
  </div>
  <table class='info_table'>
    <tr>
      <td id='ceremony_td'>
        <table class='info_block' id='ceremony_table'>
          <tr>
            <th>Ceremony</th>
          </tr>
          <tr>
            <td>3:30pm</td>
          </tr>
          <tr>
            <td>May 25, 2019</td>
          </tr>
          <tr>
            <td>Christian Campus House</td>
          </tr>
          <tr>
            <td>2231 4th St, Charleston, IL 61920</td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td class='spacer'>
      </td>
    </tr>
    <tr>
      <td id='reception_td'>
        <table class='info_block' id='reception_table'>
          <tr>
            <th>Reception</th>
          </tr>
          <tr>
            <td>Immediately Following Ceremony & Pictures</td>
          </tr>
          <tr>
            <td>EIU Grand Ball Room</td>
          </tr>
          <tr>
            <td>2231 4th St, Charleston, IL 61920</td>
          </tr>
          <tr>
            <td>Join us for dinner & dessert!</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</div>



<script>
// Set the date we're counting down to
var countDownDate = new Date("May 25, 2019 15:30:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    let dayText = "";
    let hourText = "";
    let minText = "";
    let secText = "";

    if(days > 0){
      dayText = days + " days ";
    }

    if(days < 5){
      hourText = hours + " hours ";
    }

    if(days < 3){
      minText = minutes + " minutes ";
    }

    if(days < 1) {
      secText = seconds + " seconds ";
    }

    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = dayText + hourText + minText + secText;
    document.getElementById("mobile_countdown").innerHTML = dayText + hourText + minText + secText;

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "WE'RE MARRIED!";
    }
}, 1000);

function mapsSelector() {
  if /* if we're on iOS, open in Apple Maps */
    ((navigator.platform.indexOf("iPhone") != -1) ||
     (navigator.platform.indexOf("iPad") != -1) ||
     (navigator.platform.indexOf("iPod") != -1))
    window.open("maps://maps.google.com/maps?daddr=<lat>,<long>&amp;ll=");
  else /* else use Google */
    window.open("https://maps.google.com/maps?daddr=<lat>,<long>&amp;ll=");
}
</script>

<?php include "includes/footer.php";?>
