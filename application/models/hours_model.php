<?php
class Hours_model extends CI_Model {

    function get_hours($dateFrom, $nextDate, $idCliente)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('horas')
                    ->where('horas.id_clientes', $idCliente)
                    ->where('fecha_horas >=', $dateFrom)
                    ->where('fecha_horas <=', $nextDate)
                    ->join('clientes', 'clientes.id_clientes = horas.id_clientes')
                    ->join('usuarios', 'usuarios.id_usuarios = horas.id_usuarios')
                    ->join('tareas', 'tareas.id_tareas = horas.id_tareas')
                    ->join('subtareas', 'subtareas.id_subtareas = horas.id_subtareas')
                    ->where('clientes.status_clientes', 1)
                    ->where('horas.esprepago_horas', 1)
                    ->order_by('horas.fecha_horas', 'asc')
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }

    function get_horas_count($dateFrom)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('horas')
                    //->where('clientes.ID_Cliente', $idCliente)
                    ->where('Fecha', $dateFrom)
                    ->join('clientes', 'clientes.ID_Cliente = horas.ID_Cliente')
                    ->where('clientes.status_clientes', 1)
                    ->where('horas.esprepago_horas', 1)
                    ->order_by('horas.Fecha', 'asc')
                    ->count_all_results();
                    return $q;
    }

    function find_hours($dateFrom, $dateTo)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('horas')
                    //->where('clientes.ID_Cliente', $idCliente)
                    ->where('Fecha', $date)
                    ->join('clientes', 'clientes.ID_Cliente = horas.ID_Cliente')
                    ->where('clientes.EstaActivo', 1)
                    ->where('horas.EsPrepago', 1)
                    ->order_by('horas.Fecha', 'asc')
                    ->count_all_results();
                    return $q;
    }
}
