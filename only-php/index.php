<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
   <!-- FONT: FONTAWESOME -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

   <!-- JS: JQUERY -->
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- JS: MOMENT -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>



   <!-- CSS: MY STYLE -->
   <link rel="stylesheet" href="style.css">

   <?php include "arrmusic.php" ?>
    <title></title>
  </head>
  <body>

      <div class="album">

          <?php foreach ($arralbum as $album ) {
            echo "<div class'album-items'>";
            echo "<ul>";
            $posterpath = $album['poster-path'];
            $titolo = $album['name'];
            $autore = $album['author'];
            $anno = $album['year'];
            echo "<li>"."<img src='".$posterpath."'>"."</li>";
            echo "<li>"."Nome album:".$titolo."</li>";
            echo "<li>"."Autore:".$autore."</li>";
            echo "<li>"."Anno:".$anno."</li>";
            echo "</ul>";
            echo "</div>";
          }
          ?>

      </div>


  </body>
</html>
