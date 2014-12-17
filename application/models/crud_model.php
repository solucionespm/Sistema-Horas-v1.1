<?php
class Crud_model extends CI_Model {

    public function agregar($tabla, $data){
                        
            $this->db->insert($tabla, $data);
            return true;
        }
        
        public function editar($data, $tabla, $id, $field){
            $this->db->where($field, $id);
            $this->db->update($tabla, $data);
            return true;
        }
        
        public function delete($id, $campo, $tabla){
            $this->db->where($campo, $id);
            $this->db->delete($tabla); 
            return true;
        }

    public function state_data($id, $campo, $idField, $stateField, $state){
        $data = array(
            $stateField =>  $state
        );
        $this->db->where($idField, $id);
        $this->db->update($campo, $data);
        return true;
    }
    
}