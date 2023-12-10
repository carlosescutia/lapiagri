<?php
class Empleados_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_empleados() {
        $sql = 'select * from empleados order by cve_empleado;';
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function get_empleado($cve_empleado) {
        $sql = 'select * from empleados where cve_empleado = ?;';
        $query = $this->db->query($sql, array($cve_empleado));
        return $query->row_array();
    }

    public function get_empleados_region($region) {
        $sql = 'select e.* from empleados e where region = ? order by jerarquia, estado';
        $query = $this->db->query($sql, array($region));
        return $query->result_array();
    }

    public function guardar($data, $cve_empleado)
    {
        if ($cve_empleado) {
            $this->db->where('cve_empleado', $cve_empleado);
            $this->db->update('empleados', $data);
            $id = $cve_empleado;
        } else {
            $this->db->insert('empleados', $data);
            $id = $this->db->insert_id();
        }
        return $id;
    }

    public function eliminar($cve_empleado)
    {
        $this->db->where('cve_empleado', $cve_empleado);
        $result = $this->db->delete('empleados');
    }

}
