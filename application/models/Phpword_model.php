<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Pisyek Kumar
 * @email pisyek@gmail.com
 * @link http://www.pisyek.com
 */
class Phpword_model extends CI_Model {



    function get_news() {
        $query = $this->db->get('ci_news');
        return $query->result_array();
    }




}

/* End of file blog_model.php */
    /* Location: ./application/models/blog_model.php */    