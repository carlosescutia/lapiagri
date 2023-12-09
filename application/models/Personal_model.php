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

}
