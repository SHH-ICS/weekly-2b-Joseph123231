<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
  </head>
  <body>

    <form>
    <?php
    if ( isset( $_POST['radius'] ) ){
    $radius = $_POST['radius'];
    }
    $Area = 3.14 * ($radius ** 2);
    $circumference = 2 * 3.14 *$radius;
        if ($radius >= 0){
         echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
         echo "<p>Area = ".$Area." \n";
         echo "<p>Circumference = ".$circumference." \n";
        }else {
        echo  "<h2> YOUR INPUT IS NOT VALID!!! </h2>\n";
        }
    ?>
    </form>
  </body>
</html>
