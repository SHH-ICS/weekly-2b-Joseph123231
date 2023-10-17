<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
  </head>
  <form action="handler.php" method="Post">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
    <label class="mdl-textfield__label" for="sample2">Number...</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
</form>
  <body>
        
    <form>
    <?php
    $userName = "";
    if ( isset( $_POST['radius'] ) ){
      $radius = $_POST['radius'];
    }
    $pi = 3.14
    $Area = pi * $radius ** 2
    $circumference = 2 * $pi *
    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = $Area \n";
    echo "<p>Circumference = \n";
    ?>
    <?php
    echo "hello world"
    ?>
    </form>
  </body>
  
</html>
