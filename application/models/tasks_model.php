<?php
class Tasks_model extends CI_Model {

    function get_tasks()
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('tareas')
                    ->order_by('tarea', 'asc')
                    ->where('status_tareas', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_tasks_single($id)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('tareas')
                    ->where('id_tareas', $id)
                    ->where('status_tareas', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_subtasks($task)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('subtareas')
                    ->where('id_tareas', $task)
                    ->order_by('subtarea', 'asc')
                    ->where('status_subtareas', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_all_subtasks()
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('subtareas')
                    ->order_by('subtarea', 'asc')
                    ->where('status_subtareas', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
    
    function get_subtasks_single($id)
    {
        $q= $this
                    ->db
                    ->select('*')
                    ->from('subtareas')
                    ->where('id_subtareas', $id)
                    ->where('status_subtareas', 1)
                    ->get();
            if($q->num_rows() > 0) {
                    return $q->result_array();
                }
            return array();
    }
}