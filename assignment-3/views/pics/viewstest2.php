<?php
// application/views/news/index.php
// This is the default view for my pics site. 

$this->load->view($this->config->item('theme') . 'header');
?> 


<h2>What would you like to see pictures of?</h2>
<a href="<?=site_url("pics/kittens")?>">OMG! Kittens!</a><br />
<a href="<?=site_url("pics/horses")?>">Aw Cute! Horses!</a><br />
<a href="<?=site_url("pics/puppies")?>">HECKIN' BORK! Puppies!</a>


<?php
echo "<h4>Feel free to enter in a keyword, and search for it:</h4>";
    
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

     
            
<h2>Here you go! Here are your pictures!</h2>
<h2><?php echo $title; ?>!</h2>

<?php 

// var $param = $pics; 

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
    
}

$this->load->view($this->config->item('theme') . 'footer');  
?>