<?php
class Users_model extends CI_Model {

    function get_users()
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('usuarios')
                    ->order_by('nombres_usuarios', 'asc')
                    ->where('status_usuarios', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_users_single($id)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('usuarios')
                    ->where('id_usuarios', $id)
                    ->where('status_usuarios', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_user_name($id)
    {
        $q= $this
                    ->db
                    ->select('id_usuarios, nombres_usuarios')
                    ->from('usuarios')
                    ->where('id_usuarios', $id)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
}