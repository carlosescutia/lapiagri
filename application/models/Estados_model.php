<?php
class Estados_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_empleados_estado_punto($lat, $lon) {
        $sql = 'select em.cve_empleado, em.nom_empleado, em.cargo, em.zona, em.estado from empleados em where st_contains( (select st.the_geom from estados st where st_contains(st.the_geom, ST_SetSRID(ST_MakePoint(?,?), 4326))), ST_SetSRID(ST_MakePoint(em.lon, em.lat), 4326)) order by em.jerarquia desc';
        $query = $this->db->query($sql, array($lon, $lat));
        return $query->result_array();
    }

}
