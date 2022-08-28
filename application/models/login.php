<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_model{

    public function login_form($username,$password){
        $query = $this->db->where(['name' => $username,'surname'=>$password])->get('code');


        if($query->num_rows()){
            return $query->row()->id;
        }else{
            return FALSE;
        }
    }
}
?>