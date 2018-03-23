<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compromisso extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('compromisso_model');
		$this->load->helper('url');
	}

	public function index(){

		$data['compromissos'] = $this->compromisso_model->get_compromisso();
		$this->load->view('index', $data);
		
	}

	public function save(){
		
		$data['Titulo'] = $this->input->post('title');
		$data['Data_Compromisso'] = $this->input->post('date');
		$data['Hora_Compromisso'] = $this->input->post('time');
		
		if($data['Titulo'] != NULL && $data['Data_Compromisso'] != NULL && $data['Hora_Compromisso'] != NULL){
			$id = $this->input->post('id');
			// Variavel que recebe o resulta sa existencia ou nao de um id no banco	
			$result = $this->compromisso_model->search_id($id);

			if(count($result) > 0 && $id != NULL):
				//Se o id existir faz um update no compromisso
				$this->compromisso_model->update_compromisso($id,$data);
			else:
				//Senao adiciona um compromisso
				$data['Id'] = $this->input->post('id');
				$this->compromisso_model->add_compromisso($data);
			endif;
		}
		// Recarega a pagina index
		$this->index();
			
	}

	public function delete_compromisso($id = NULL){
 		
		if($id != NULL):
			$this->compromisso_model->delete_compromisso($id);
		endif;
		// Recarega a pagina index
		$this->index();

	}

	public function search_date_time(){
		
		$date = $this->input->post('date1');

		if($date != NULL):
			$data['compromissos'] = $this->compromisso_model->search_date_time($date);
			$this->load->view('index', $data);
		else:
			$this->index();
		endif;

	}


}
