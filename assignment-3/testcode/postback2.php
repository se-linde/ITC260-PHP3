<?php
// postback2.php
// This works! 


// Here we create a constant to identify the name of the page:  
define('THIS_PAGE', basename ($_SERVER ['PHP_SELF'])); 

// The form handler.
if(isset($_POST['FirstName']))  
{ // show data. 
    
    
    echo '<pre>'; 
    var_dump($_POST); 
    echo '</pre>'; 
     
    
    // Feedback.
    echo "<p>Cool! Your name is: {$_POST['FirstName']}!</p>";  
    
    // echo $_POST['FirstName']; 
} else { // show form. 
    echo '
    <form action = "' . THIS_PAGE . '" method = "post"> 
    First Name: <input type = "text" name = "FirstName" /><br /> 
    <input type = "submit" /> 
    </form> 
    '; 
}


