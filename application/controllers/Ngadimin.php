<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngadimin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('global_data');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('masuk');
	}
	public function home(){
		$res_belum_bayar = $this->global_data->belumbayar();
		$data['jumlah_belum_bayar'] = $res_belum_bayar[0]->jumlah_belum_bayar;
		$res_sudah_bayar = $this->global_data->sudahbayar();
		$data['jumlah_sudah_bayar'] = $res_sudah_bayar[0]->jumlah_sudah_bayar;
		$res_jumlah_tagihan = $this->global_data->jumlahtagihan();
		$data['jumlah_tagihan'] = $res_jumlah_tagihan[0]->jumlah_tagihan;
		$res_nominal_blmbayar = $this->global_data->nominalbelumbayar();
		$data['nominal_blmbayar'] = $res_nominal_blmbayar[0]->nominal_tagihan;
		$res_nominal_sdhbayar = $this->global_data->nominalsudahbayar();
		$data['nominal_sdhbayar'] = $res_nominal_sdhbayar[0]->nominal_sdhbayar;
		$res_nominal_bayar = $this->global_data->totalnominal();
		$data['nominal_bayar'] = $res_nominal_bayar[0]->nominal_bayar;
		$this->load->view('home',$data);
	}
	public function kontak(){
		$queryAllkontak = $this->global_data->tampil_data();
		$DATA = array('queryAllkontak' => $queryAllkontak);
		$this->load->view('kontak', $DATA);
	}
	public function tambahkontak(){
		$this->load->view('tambahkontak');
	}
	function aksi_masuk(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->global_data->cek_login("akun",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "home"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Ngadimin/home"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url("Ngadimin/index"));
	}
	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$nomor = $this->input->post('nomor');

		
 
		$data = array(
			'nama' => $nama,
			'nomor' => $nomor,
			);
		$this->global_data->input_data($data,'kontak');
		redirect('Ngadimin/kontak');
	}
	public function edit_kontak($nomor){
		$querydatadetail = $this->global_data->detail_data($nomor);
		$DATA = array('querydatadetail' => $querydatadetail);
		$this->load->view('editkontak',$DATA);
	}
	public function edit_aksi(){
		$nama = $this->input->post('nama');
		$nomor = $this->input->post('nomor');

 
		$dataupdate = array(
			'nama' => $nama,
			'nomor' => $nomor	
			);
		$this->global_data->edit_data($nomor,$dataupdate);
		redirect('Ngadimin/kontak');
	}
	public function fungsiDelete($nomor)
	{
		$this->global_data->delete_data($nomor);
		redirect(base_url('Ngadimin/kontak/'));
	}
	public function fungsiDeletetagihan($nomor_tagihan)
	{
		$this->global_data->delete_tagihan($nomor_tagihan);
		redirect(base_url('Ngadimin/tagihan/'));
	}
	public function tagihan(){
		$queryalltagihan = $this->global_data->tampil_tagihan();
		$DATA = array('queryalltagihan' => $queryalltagihan);
		$this->load->view('tagihan', $DATA);
	}
	function tambahtagihanaksi(){
		$nama_tagihan = $this->input->post('nama_tagihan');
		$nomor_tagihan = $this->input->post('nomor_tagihan');
		$jenis_tagihan = $this->input->post('jenis_tagihan');
		$tgl_reminder = $this->input->post('tgl_reminder');
		$tgl_tagihan = $this->input->post('tgl_tagihan');
		$nominal_tagihan = $this->input->post('nominal_tagihan');
		$data = array(
			'nama_tagihan' => $nama_tagihan,
			'nomor_tagihan' => $nomor_tagihan,
			'jenis_tagihan' => $jenis_tagihan,
			'tgl_reminder' => $tgl_reminder,
			'tgl_tagihan' => $tgl_tagihan,
			'nominal_tagihan' => $nominal_tagihan,
			);
		$this->global_data->input_tagihan($data,'tagihan');
		redirect('Ngadimin/tagihan');
	}
	public function tambahtagihan(){
		$this->load->view('tambahtagihan');
	}
	public function edit_tagihan($nomor_tagihan){
		$querydatatagihan = $this->global_data->detail_datatagihan($nomor_tagihan);
		$DATA = array('querydatatagihan' => $querydatatagihan);
		$this->load->view('edittagihan',$DATA);
	}
	public function edittagihan(){
		$nama_tagihan = $this->input->post('nama_tagihan');
		$nomor_tagihan = $this->input->post('nomor_tagihan');
		$jenis_tagihan = $this->input->post('jenis_tagihan');
		$tgl_reminder = $this->input->post('tgl_reminder');
		$tgl_tagihan = $this->input->post('tgl_tagihan');
		$nominal_tagihan = $this->input->post('nominal_tagihan');
		$data = array(
			'nama_tagihan' => $nama_tagihan,
			'nomor_tagihan' => $nomor_tagihan,
			'jenis_tagihan' => $jenis_tagihan,
			'tgl_reminder' => $tgl_reminder,
			'tgl_tagihan' => $tgl_tagihan,
			'nominal_tagihan' => $nominal_tagihan,
			);
		$this->global_data->edittagihan($nomor_tagihan, $data);
		redirect('Ngadimin/tagihan');
	}
	public function pesan(){
		$queryallpesan = $this->global_data->tampil_pesan();
		$DATA = array('queryallpesan' => $queryallpesan);
		$this->load->view('pesan', $DATA);
	}
	public function tambahpesan(){
		$data['kontak']=$this->global_data->tampil_data();
		$data['tagihan']=$this->global_data->tampil_tagihan();
		$this->load->view('tambahpesan', $data);
	}
	function tambahpesanaksi(){
		$id_kontak = $this->input->post('id_kontak');
		$id_tagihan = $this->input->post('id_tagihan');
		$tgl_bayar = $this->input->post('tgl_bayar');
		$config['upload_path']          = './assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('media'))
                {
                        $error = array('error' => $this->upload->display_errors());
							print_r ($error);exit;
				}
                else
                {
                        $media = array('upload_data' => $this->upload->data());
                       
                }
		$pesan = $this->input->post('pesan');
		$data = array(
			'id_tagihan' => $id_tagihan,
			'id_kontak' => $id_kontak,
			'tgl_bayar' => $tgl_bayar,
			'media' => $media['upload_data']['file_name'],
			'pesan' => $pesan,
			);
		$this->global_data->input_pesan($data,'reminder');
		redirect('Ngadimin/pesan');
	}
	
}
