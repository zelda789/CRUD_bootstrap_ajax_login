<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		$this->load->model('M_kelas');
		
	}
	public function index()
	{
		$data['judul'] = 'Menu siswa';
		$data['data_siswa'] = $this->M_siswa->getsiswa();
		$data['kelas'] =  $this->M_kelas->get_kelas();

		$this->load_template('siswa/home', $data);
	}
	
	public function create() 
	{
	
		$validator = array('success' => false, 'messages' => array());

		$config = array(
	    array(
        'field' => 'nama',
        'label' => 'nama',
        'rules' => 'trim|required'
	    ),
	    array(
        'field' => 'alamat',
        'label' => 'alamat',
        'rules' => 'trim|required'	            
	    ),
	    array(
        'field' => 'id_kelas',
        'label' => 'kelas',
        'rules' => 'trim|required|integer'	            
	    )
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() === true) {

			$createMember = $this->M_siswa->create(); 

			if($createMember === true) {
				$validator['success'] = true;
				$validator['messages'] = "Sukses Ditambahkan";
			} else {
				$validator['success'] = false;
				$validator['messages'] = "Error saat update Data";
			}			
		} 
			else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);	
			}			
		}

		echo json_encode($validator);
	}


	public function getSelectedMemberInfo($id) 
	{
		
			$data = $this->M_siswa->selected_edit($id);
			echo json_encode($data);
		
	}

	public function edit($id = null) 
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$config = array(
		    array(
	        'field' => 'edit_nama',
	        'label' => 'nama',
	        'rules' => 'trim'
		    ),
		    array(
	        'field' => 'edit_alamat',
	        'label' => 'alamat',
	        'rules' => 'trim'	            
		    ),
		    array(
	        'field' => 'edit_kelas',
	        'label' => 'kelas',
	        'rules' => 'trim|integer'	            
		    )
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if($this->form_validation->run() === true) {

				$editMember = $this->M_siswa->edit($id); 

				if($editMember === true) {
					$validator['success'] = true;
					$validator['messages'] = "Berhasil diupdate";
				} else {
					$validator['success'] = false;
					$validator['messages'] = "Error mengupdate data";
				}			
			} 
			else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);	
				}			
			}

			echo json_encode($validator);
		}
	}


	public function fetchMemberData() 
	{
		$result = array('data' => array());

		$data = $this->M_siswa->fetchMemberData();
		foreach ($data as $key => $value) {

			// button
			$buttons = '
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a type="button" onclick="editMember('.$value['id'].')" data-toggle="modal" data-target="#editMemberModal">Edit</a></li>
			    <li><a type="button" onclick="removeMember('.$value['id'].')" data-toggle="modal" data-target="#removeMemberModal">Hapus</a></li>			    
			  </ul>
			</div>
			';

				$result['data'][$key] = array(
					$value['nama'],
					$value['alamat'],
					$value['nama_kelas'],		
					$buttons
				);
		} // /foreach

		echo json_encode($result);
	}

	public function remove($id = null)
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$removeMember = $this->M_siswa->remove($id);
			if($removeMember === true) {
				$validator['success'] = true;
				$validator['messages'] = "Sukses Dihapus";
			}
			else {
				$validator['success'] = true;
				$validator['messages'] = "Sukses Dihapus";
			}

			echo json_encode($validator);
		}
	}
}