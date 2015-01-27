<?php
class Prepaid_model extends CI_Model {
    function get_prepaids($client, $dateFrom)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('prepaid')
                    ->where('fecha_prepaid <=', $dateFrom)
                    //->where('Fecha <=', $nextDate)
                    ->where('id_clientes',$client)
                    //->or_where('ID_Cliente', 21)
                    ->where('horas !=', 0)
                    ->order_by('prepaid.fecha_prepaid', 'asc')
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_prepaids_all($dateFrom)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->select_sum('prepaid.horas')
                    ->select_max('fecha_prepaid')
                    ->from('prepaid')
                    ->where('fecha_prepaid <=', $dateFrom)
                    ->order_by('prepaid.fecha_prepaid', 'desc')
                    ->group_by('id_clientes')
                    ->where('horas !=', 0)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_prepaids_range($client, $from, $to)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('prepaid')
                    ->where('fecha_prepaid >=', $from)
                    ->where('fecha_prepaid <=', $to)
                    //->where('Fecha <=', $nextDate)
                    ->where_in('id_clientes',$client)
                    //->or_where('ID_Cliente', 21)
                    ->where('horas !=', 0)
                    ->order_by('prepaid.fecha_prepaid', 'asc')
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
     function get_prepaids_dateNow($client, $year, $month)
{
$q= $this
->db
->select('*')
->from('prepaid')
->where('MONTH(fecha_prepaid) =', $month)
->where('YEAR(fecha_prepaid) =', $year)
//->where('Fecha <=', $nextDate)
->where_in('id_clientes',$client)
//->or_where('ID_Cliente', 21)
->where('horas !=', 0)
->order_by('prepaid.fecha_prepaid', 'asc')
->get();
if($q->num_rows() > 0) {
return $q->result_array();
}
return array();
}
}