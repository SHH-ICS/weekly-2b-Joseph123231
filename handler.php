<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
  </head>

  <body>
    <h1> Enter your radius in text field<h1>
        
    <form>
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
    </form>
  </body>
  
</html>
