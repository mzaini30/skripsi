<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

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
	public function index()
	{
		$this->beranda();
	}

	public function beranda(){
		$data = $this->db->order_by('nomor')->get('esai')->result();
		$isi = 'soal/beranda';
		$judul = 'Beranda - ';
		$this->load->view('template/global', compact('data', 'isi', 'judul'));
	}

	public function tambah(){
		if (!$_POST){
			$judul = 'Tambah - ';
			$isi = 'soal/tambah';
			$action = 'tambah';
			$data = null;
			$this->load->view('template/global', compact('judul', 'isi', 'action', 'data'));
		} else {
			$data = (object) $this->input->post();
			$this->db->insert('esai', $data);
			redirect(base_url() . 'tambah');
		}
	}

	public function edit($id = null){
		if (!$_POST){
			$data = $this->db->get_where('esai', compact('id'))->result_array();
			$judul = 'Edit - ';
			$isi = 'soal/tambah';
			$action = $id . '/edit';
			$this->load->view('template/global', compact('judul', 'isi', 'action', 'data'));
		} else {
			$data = (object) $this->input->post();
			$this->db->update('esai', $data, compact('id'));
			redirect(base_url());
		}	
	}

	public function hapus($id = null){
		$this->db->delete('esai', compact('id'));
		redirect(base_url());
	}
}
