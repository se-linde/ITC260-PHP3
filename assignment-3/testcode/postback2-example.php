
<html>
<body>
<?php
// postback2-example.php
// THIS WORKS REALLY WELL.     
    if (isset($_POST['tires'])) //isset determines if var has valid contents, even empty string
{//if var is set, show what it contains
      $myTires = (int)$_POST['tires']; //cast value sent via post to an integer
      $myPrice = 59.99;  //hard wire the cost per tire
      $myTotal = $myTires * $myPrice;  //calc cost
      echo '<h1><font color="blue">You ordered ' . $myTires . ' tires!!</font><br />';
      echo '<h1><font color="red">Such a deal at only $'. $myTotal .' for them all!!</font><br />';
      //put link on page to reset form
      print '<a href="' . $_SERVER['PHP_SELF'] . '">Reset page</a>';
}else{ //show form
?>
    <!--Note the server variable indicating the page we are on -->
    <form action="<? print $_SERVER['PHP_SELF']; ?>" method="post">
    How many tires do you want?<input type="text" name="tires"><br>
    <input type="submit" value="Show me the tires!!">
    </form>
<?
}//last curly brace of if/else
?>
</body>
</html>