<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class siswa_model extends CI_Model {
	
	function AllData(){ 
		$this->db->select('*');
		$this->db->from('siswa');
		$query = $this->db->get();
		if($query->row_array()>0){
			return $query->result_array();
		}
		return NULL;
    }
	function save($data){ // fungsi untuk menyimpan data
		$value = array(
			'nama' =>$data['nama'],
			'kelas' =>$data['kelas'],
			'alamat' =>$data['alamat']
		);
		$this->db->insert('siswa', $value); //memasukkan nilai ke tabel database
        return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
	function delete($data){ // fungsi untuk hapus data
		$this->db->where('id',$data['id']);
		$this->db->delete('siswa'); 
		return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
	function get_siswa($data){ //fungsi untuk menampilkan data siswa berdasarkan id
		$this->db->select('*');
		$this->db->where('id',$data['id']);
		$this->db->from('siswa');
		$query = $this->db->get();
		if($query->row_array()>0){
			return $query->result_array();
		}
		return NULL;
	}
	function update($data){
		$value = array(
			'nama' => $data['nama'],
			'kelas' => $data['kelas'],
			'alamat' =>$data['alamat']
		);
		$this->db->where('id',$data['id']);
		$this->db->update('siswa',$value);
		return (($this->db->affected_rows()>0)?TRUE:FALSE);
	}
}
?>