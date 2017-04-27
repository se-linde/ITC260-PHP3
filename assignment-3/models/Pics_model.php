<?php

// This is the model, I think.  

// This has to connect to the server instead of a database. 

$response = json_decode(file_get_contents($url));
$pics = $response->photos->photo;
 



<?php
class Pics_model extends CI_Model { // extends the previous class. 

    
    // This will always load the database. 
    /* public function __construct()
    {
            $this->load->database();
    } */ 

    
    
    public function get_pics($slug = FALSE)
    {
            if ($slug === FALSE)
            {
                    // $query = $this->db->get('sp17_news');
                    // return $query->result_array();
            }

            //$query = $this->db->get_where('sp17_news', array('slug' => $slug)); 
            // puppies, oils, bones, etc. 
            // return $query->row_array();
        
    } // end get_news() method

            public function set_pics()
        {
            $this->load->helper('url');

            $param = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'title also' => $param,
                'text' => $this->input->post('text')
            );

            // return $this->db->insert('sp17_news', $data);
        }
} // end news model class. 