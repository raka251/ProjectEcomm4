<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Models
{  
    function daftar($data)  
    {   $this->db->insert('users', $data);

    }

}
?> 