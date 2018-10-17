<?php session_start(); ?>
<html lang="en">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.png" />
    <link rel="stylesheet" type="text/css" href="/slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick/slick-theme.css"/>
    <script type="text/javascript" src="/slick/slick/slick.min.js"></script>

    <title>The Elmores</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Main CSS -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Acme|Crimson+Text|Dancing+Script|Fredericka+the+Great|Indie+Flower|Lobster|Pacifico|Shadows+Into+Light+Two" rel="stylesheet">
    <!-- font-family: 'Lobster', cursive;
          font-family: 'Abril Fatface', cursive;
          font-family: 'Shadows Into Light Two', cursive;
          font-family: 'Acme', sans-serif;
          font-family: 'Indie Flower', cursive;
          font-family: 'Crimson Text', serif;
          font-family: 'Pacifico', cursive;
          font-family: 'Dancing Script', cursive;
          font-family: 'Fredericka the Great', cursive;
    -->

  </head>
  <body>

  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" style='height: 6.2vh; margin-top: 0.5vh; outline: none;' type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/rsvp.php">RSVP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/registry.php">Registry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gallery.php">Photos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/recommendations.php">Hotels</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div id='photo-scoller'>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/116.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/42.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/173.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/80.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/135.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/140.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/15.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/124.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/168.JPG' class='scroller-image'></div>
      <div style="text-align: center" class='scroller-div'><img src='/scroller_pics/127.JPG' class='scroller-image'></div>
    </div>

    <div id='stamp-div'>
      <img id='stamp-line' src='/images/stamp_line.png'>
      <img id='stamp-circle' src='/images/stamp_circle.png'>
      <div id='stamp-text'>E</div>
    </div>

    <div id='content_div'>
