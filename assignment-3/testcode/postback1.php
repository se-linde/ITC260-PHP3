<?php
// postback1.php

if(isset($_POST['FirstName'])) // The form handler. 
{ // show data. 
    echo $_POST['FirstName']; 

} else { // show form. 
    echo '
    <form action = "postback1.php" method = "post"> 
    First Name: <input type = "text" name = "FirstName" /><br /> 
    <input type = "submit" /> 
    </form> 
    '; 
}