<?php include "includes/header.php";?>
<link href="/css/index.css" rel="stylesheet">

<div id='wedding_info'>
    <h1 class='section_header'>Ceremony</h1>
    <p class='info'>EIU Christian Campus House</p>
    <p class='info'>2231 4th St, Charleston, IL 61920</p>
    <p class='info'>May 25, 2019 @ 3:30pm</p>
    <!--Picture of CCH-->
</div>

<div id='reception_info'>
  <h1 class='section_header'>Reception</h1>
  <p class='info'>EIU Grand Ballroom</p>
  <p class='info'>600 Lincoln Ave, Charleston, IL 61920<a href='' class='link'>(See Map Here)</a></p>
  <p class='info'>May 25, 2019 @ 5:00pm</p>
  <!--Picture of Grand Ball Room-->
</div>

<div id='suggestions'>
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

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

<?php include "includes/footer.php";?>
