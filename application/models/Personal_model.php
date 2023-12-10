<?php
class Personal_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_personal_region($region) {
        $sql = 'select p.* from personal p where region = ? order by jerarquia, estado';
        $query = $this->db->query($sql, array($region));
        return $query->result_array();
    }

    public function get_personal_cve($cve_personal)
    {
        $sql = 'select p.* from personal p where cve_personal = ? ';
        $query = $this->db->query($sql, array($cve_personal));
        return $query->row_array();
    }

}
