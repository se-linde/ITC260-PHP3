<?php

$this->load->view($this->config->item('theme') . 'header'); 


// This is the view from the Flickr API example. 

foreach($pics as $pic){

    $size = 'm';
    $photo_url = '
    http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

    echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
 
}


$this->load->view($this->config->item('theme') . 'footer'); 
