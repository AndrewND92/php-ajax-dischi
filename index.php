<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php-Ajax-Dischi</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script id="template" type="text/x-handlebars-template">
      <div class="cd">
        <img src="" />

        <h3></h3>
        <small></small>
        <strong></strong>
      </div>
    </script>

    <link rel="stylesheet" href="css/style.css">

    <?php include "database.php" ?>;
  </head>
  <body>


    <div class="container">

        <div class="header">
        </div>

        <div class="cd-container">

            <?php
              foreach ($database as $cd) {

            ?>
            <div class="cd">

              <img src="<?php echo $cd['poster'] ?>">

              <h3> <?php echo $cd['title'] ?> </h3>
              <small> <?php echo $cd['author'] ?> </small>
              <strong><?php echo $cd['year'] ?></strong>

            </div>
            <?php
          }

          ?>
        </div>
    </div>





















    <script type="text/javascript" src="js/script.js">
    </script>
  </body>
</html>
