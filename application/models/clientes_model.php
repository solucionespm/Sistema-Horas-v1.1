<?php
class Clientes_model extends CI_Model {

    function get_clientes()
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('clientes')
                    ->order_by('cliente', 'asc')
                    ->where('status_clientes', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_clientes_single($id)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('clientes')
                    ->where('id_clientes', $id)
                    ->where('status_clientes', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_proyectos($cliente)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('proyectos')
                    ->where('id_clientes', $cliente)
                    ->order_by('proyecto', 'asc')
                    ->where('status_proyectos', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function count_projects($cliente)
    {
        $q= $this
                    ->db
                    ->select('id_clientes, status_proyectos')
                    ->from('proyectos')
                    ->where('id_clientes', $cliente)
                    ->where('status_proyectos', 1)
                    ->count_all_results();
            return $q;
    }
    
    function get_all_proyectos()
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('proyectos')
                    ->order_by('proyecto', 'asc')
                    ->where('status_proyectos', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_proyecto_single($id)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('proyectos')
                    ->where('id_proyectos', $id)
                    ->where('status_proyectos', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
}