<?php
class Personal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('personal_model');
	}

	public function get_personal_cve()
	{
        $cve_personal = $this->input->post('cve_personal');
        $persona = $this->personal_model->get_personal_cve($cve_personal);
        echo json_encode($persona);
	}

}
