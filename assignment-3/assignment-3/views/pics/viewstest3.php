<?php
// application/views/pics/viewtest3.php
// User goes to this page once submit form  

$this->load->view($this->config->item('theme') . 'header');
?> 

<h2>Here you go! Here are your pictures!</h2>
<h2><?php echo $title; ?>!</h2>


<h2>What would you like to see pictures of?</h2>
<a href="<?=site_url("pics/kittens")?>">OMG! Kittens!</a><br />
<a href="<?=site_url("pics/horses")?>">Aw Cute! Horses!</a><br />
<a href="<?=site_url("pics/puppies")?>">HECKIN' BORK! Puppies!</a>

<h4>Not giving you joy?</h4><br />
<h4>Feel free to enter in a keyword, and search for it: </h4>


<form method="post" action=" ">
   <input type="text" name="subject"><br>
   <input type="submit" name="submit" value="Submit"><br>
</form> 


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