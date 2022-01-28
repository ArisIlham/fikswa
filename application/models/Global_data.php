<?php 
 
class Global_data extends CI_Model{	
	// public function __construct(){
    //     parent::__construct();
    // }

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function tampil_data(){
		$query = $this->db->get('kontak');
		return $query->result();
	}
 
	function input_data($data){
		$this->db->insert('kontak',$data);
	}
	function detail_data($nomor) {
		$this->db->where('nomor', $nomor);
		$query = $this->db->get('kontak');
		return $query->row();
	}
	function delete_data($nomor) {
		$this->db->where('nomor', $nomor);
		$this->db->delete('kontak');
	}
	function edit_data($nomor, $data) {
		$this->db->where('nomor', $nomor);
		$this->db->update('kontak', $data);
	}
	function tampil_tagihan(){
		$query = $this->db->get('tagihan');
		return $query->result();
	}
	function input_tagihan($data){
		$this->db->insert('tagihan',$data);
	}
	function edittagihan($nomor_tagihan, $data) {
		$this->db->where('nomor_tagihan', $nomor_tagihan);
		$this->db->update('tagihan', $data);
	}
	function detail_datatagihan($nomor_tagihan) {
		$this->db->where('nomor_tagihan', $nomor_tagihan);
		$query = $this->db->get('tagihan');
		return $query->row();
	}
	function delete_tagihan($nomor_tagihan) {
		$this->db->where('nomor_tagihan', $nomor_tagihan);
		$this->db->delete('tagihan');
	}
	function tampil_pesan(){
		$this->db->join('kontak', 'reminder.id_kontak=kontak.id_kontak');
		$this->db->join('tagihan', 'reminder.id_tagihan=tagihan.id_tagihan');
		$query = $this->db->get('reminder');
		return $query->result();
	}
	function input_pesan($data){
		$this->db->insert('reminder',$data);
	}
	function belumbayar(){
		$this->db->select('count(id_reminder) as jumlah_belum_bayar');
		$this->db->where('status_bayar', 0);
		$this->db->group_by('id_tagihan');
		$query = $this->db->get('reminder');
		
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('jumlah_belum_bayar' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
	function sudahbayar(){
		$this->db->select('count(id_reminder) as jumlah_sudah_bayar');
		$this->db->where('status_bayar', 1);
		$this->db->group_by('id_tagihan');
		$query = $this->db->get('reminder');
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('jumlah_sudah_bayar' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
	function jumlahtagihan(){
		$this->db->select('count(id_tagihan) as jumlah_tagihan');
		$this->db->group_by('id_tagihan');
		$query = $this->db->get('tagihan');
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('jumlah_tagihan' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
	function nominalbelumbayar(){
		$this->db->select('sum(nominal_tagihan) as nominal_tagihan');
		$this->db->join('reminder', 'reminder.id_tagihan=tagihan.id_tagihan');
		$this->db->where('status_bayar', 0);
		$query = $this->db->get('tagihan');
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('nominal_tagihan' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
	function nominalsudahbayar(){
		$this->db->select('sum(nominal_tagihan) as nominal_sdhbayar');
		$this->db->join('reminder', 'reminder.id_tagihan=tagihan.id_tagihan');
		$this->db->where('status_bayar', 1);
		$this->db->group_by('tagihan.id_tagihan');
		$query = $this->db->get('tagihan');
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('nominal_sdhbayar' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
	function totalnominal(){
		$this->db->select('sum(nominal_tagihan) as nominal_bayar');
		$query = $this->db->get('tagihan');
		if($query->result()){	
			return $query->result();
		}else{
			$res = (object) array('nominal_bayar' => 0);
			$result = array("0"=>$res);
			return $result;
		}
	}
}