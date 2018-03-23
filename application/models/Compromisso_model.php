<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compromisso_model extends CI_Model {
	public function _construct(Type $var = null)
	{
		$this->load->helper('database');
	}
// Metodo que pega o comprimosso que exixtem no Banco de Dados
	public function get_compromisso(){
		$query = $this->db->get('compromisso');
		return $query->result();
	}
//	Metodo que adiciona Compromisso na tabela
	public function add_compromisso($data=NULL){
		//Validacao
		if($data != NUll):
			$this->db->insert('compromisso',$data);
		endif;
	}
// Metodo que atualiza Compromisso na tabela
	public function update_compromisso($id =NULL, $data = NULL){		
		//Validacao
		if($data != NULL && $id != NULL){     
            $this->db->update('compromisso', $data, array('id'=>$id));              
        }
	}
// Metodo que deleta um Compromisso na tabela 
		public function delete_compromisso($id=NULL){
			//Validacao
			if ($id != NULL):
				$this->db->delete('compromisso', array('id'=>$id));            
			endif;
		} 
// Metodo que verifica a exixstencia do ID
		public function search_id($id=NULL){
			//Validacao
			if ($id != NULL){    
				$query = $this->db->get_where('compromisso',array('Id'=>$id));
				$result = $query->result_array();                 
				return $result;   
			}
		}  
// Metodo que busca os compromisso com datas e horarios determinados no parametro
		public function search_date_time($date = NULL){
			//Validacao
			if ($date != NULL){ 
				$array = array('Data_Compromisso' => $date);
				$this->db->select('*');
				$this->db->from('compromisso');
				$this->db->where($array);
				$query = $this->db->get();
				return $query->result();
			}
		}

		public function exist_compromisso(){
			$num  = $this->db->count_all('compromisso');
			//Validacao
			if ($num >= 1):
				return 1;
			else:
				return 0;
			endif;
		}
}
