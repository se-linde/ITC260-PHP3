<?php

echo "<h2>None of these are causing you joy? Feel free to enter in a keyword, and search for it:</h2>";
    
// Here we create a constant to identify the name of the page:  
define('THIS_PAGE', basename ($_SERVER ['PHP_SELF'])); 

// The form handler.
if(isset($_POST['Subject']))  
{ // show data. 
    
    echo '<pre>'; 
    var_dump($_POST); 
    echo '</pre>'; 
     
    // Feedback.
    echo "<p>Cool! Your subject is: http://www.lindese.com/CISP17/pics/{$_POST['Subject']}</p>";  
    echo "<p>Cool! Your subject is: {$_POST['Subject']}. Go visit the URL below:</p>";  
    echo "<p><a href=http://www.lindese.com/CISP17/pics/{$_POST['Subject']}>http://www.lindese.com/CISP17/pics/{$_POST['Subject']}</a>!</p>"; 
    
    // echo $_POST['FirstName']; 
} else { // show form. 
    echo '
    <form action = "' . THIS_PAGE . '" method = "post"> 
    Subject: <input type = "text" name = "Subject" /><br /> 
    <input type = "submit" /> 
    </form> 
    '; 
}
?>