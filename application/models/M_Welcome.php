<?php 
class M_Welcome extends CI_Model{
    public function cekLogin($data){
        return $this->db->get_where('user',$data);
    }
}
