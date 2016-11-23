<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getSiswa()
	{
		$this->db->select('siswa.*, kelas.nama_kelas');
		$this->db->from('siswa');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');

		$data = $this->db->get();
		return $data->result();

	}
	

	public function create() 
		{
			$data = array(
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'id_kelas' => $this->input->post('id_kelas')
			);

			$sql = $this->db->insert('siswa', $data);

			if($sql === true) {
				return true; 
			} else {
				return false;
			}
		} // /create function


	public function edit($id = null) 
		{
			if($id) {
				$data = array(
					'nama' => $this->input->post('edit_nama'),
					'alamat' => $this->input->post('edit_alamat'),
					'id_kelas' => $this->input->post('edit_kelas')
				);

				$this->db->where('id', $id);
				$sql = $this->db->update('siswa', $data);

				if($sql === true) {
					return true; 
				} else {
					return false;
				}
			}
				
		}


	public function fetchMemberData($id = null) 
	{
		// if($id) {
			$this->db->select('siswa.*, kelas.nama_kelas');
		$this->db->from('siswa');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
		$query = $this->db->get();
		// }
 		// return $query->row_array();
			// $sql = "SELECT * FROM siswa WHERE id = ?";
			// $query = $this->db->query($sql, array($id));
			// return $query->row_array();
		// }

		// $sql = "SELECT * FROM siswa";
		// $query = $this->db->query($sql);
		return $query->result_array();
	}


	public function selected_edit($id = null) 
	{
		$this->db->select('siswa.*, kelas.nama_kelas');
		$this->db->from('siswa');
		$this->db->where('id', $id);
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
		$query = $this->db->get();

		return $query->row();
	}

		public function remove($id = null) {
		if($id) {
			$sql = "DELETE FROM siswa WHERE id = ?";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return ($query === true) ? true : false;			
		} // /if
	}

}
