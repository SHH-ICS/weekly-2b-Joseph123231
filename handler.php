<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    <h1> Enter your radius in text field<h1>
        <!-- Numeric Textfield -->
<form action="handler.php" style="text-align: center;" method="post">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
    <label class="mdl-textfield__label" for="sample2">Input radius</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
  <!-- numeric text feild end-->
    
    <?php
    $userName = "";
    if ( isset( $_POST['radius'] ) ){
      $radius = $_POST['radius'];
    }
    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = \n";
    echo "<p>Circumference = \n";
    ?>
    <?php
    echo "hello world"
    ?>
    
  </body>
  
</html>
