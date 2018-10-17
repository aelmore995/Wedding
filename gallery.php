<?php session_start(); error_reporting(E_ALL);?>
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
    <link href="/css/gallery.css" rel="stylesheet">


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
    <div id='content_div'>
    <table id='photo_table'>
      <?php
      $root = $_SERVER['DOCUMENT_ROOT'];
      $directory = "$root/images/gallery";

      if (! is_dir($directory)) {
          exit('Invalid diretory path');
      }

      $files = array();
      foreach (scandir($directory) as $file) {
          if ('.' === $file) continue;
          if ('..' === $file) continue;

          $files[] = $file;
      }

      shuffle($files);

      $columns = 4;
      $count = 1;
      echo "<tr>";
      foreach($files as $file){
        echo "<td><img src='/images/gallery/$file' class='gallery_pic'/></td>";
        if($count === $columns){
          echo "</tr><tr>";
          $count = 1;
        } else {
          $count++;
        }
      }
      echo "</tr>";
      ?>
    </table>
<?php include "includes/footer.php"?>
