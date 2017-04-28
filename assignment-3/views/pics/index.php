<?php
// application/views/news/index.php
// This is the default view for my pics site. 

$this->load->view($this->config->item('theme') . 'header');


?> 

<h2><?php echo $title; ?></h2>

<?php 

var $param = $pics; 

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
    
}

$this->load->view($this->config->item('theme') . 'footer');  

?> 
