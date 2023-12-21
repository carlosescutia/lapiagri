<?php
class Estados extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('estados_model');
	}

    public function get_estado_punto()
    {
        $lat = $this->input->post('lat');
        $lon = $this->input->post('lon');
        $estado = $this->estados_model->get_estado_punto($lat, $lon);
        echo json_encode($estado);
    }

    public function get_empleados_estado_punto()
    {
        $lat = $this->input->post('lat');
        $lon = $this->input->post('lon');
        $empleados = $this->estados_model->get_empleados_estado_punto($lat, $lon);
        echo json_encode($empleados);
    }

}
