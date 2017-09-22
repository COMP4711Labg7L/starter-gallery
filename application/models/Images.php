<?php
/**
 * Gets and orders images
 * User: kimdongwon
 * Date: 2017-09-21
 * Time: 5:56 PM
 */
class Images extends CI_Model{

    public function __construct(){
        parent::__construct();

    }

    // returns all images
    function all(){
        $this -> db -> order_by("id", "desc");
        $query = $this -> db -> get('images');
        return $query -> result_array();
    }

    // returns 3 newest images
    function newest(){
        $this -> db -> order_by("id", "desc");
        $this -> db -> limit(3);
        $query = $this -> db -> get("images");
        return $query -> result_array();
    }

}