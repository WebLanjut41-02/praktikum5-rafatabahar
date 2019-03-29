<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  function list(){
    $total = $this->db->count_all('mahasiswa');

    $this->load->library('pagination');

    $config['total_rows'] = $total;
    $config['base_url'] = 'http://localhost/PWL/praktikum5-rafatabahar/index.php/Home/list/';
    $config['per_page'] = 5;
    $config['num_links'] = $total / $config['per_page'];
    $config['next_link'] = '&nbspNext&nbsp';
    $config['prev_link'] = '&nbspprevious&nbsp';
    $config['use_page_numbers'] = TRUE;

    $this->pagination->initialize($config);

    if($this->uri->segment(3)){
      $page = ($this->uri->segment(3)-1)*$config['per_page'];
    }
    else{
      $page = 0;
    }

    $data['mahasiswa'] = $this->db->get('mahasiswa',$config['per_page'],$page)->result();
    // print_r($data['mahasiswa']);

    $this->load->view('list', $data);

  }

  public function tambah()
  {
    $this->load->view('add');
  }

  public function postTambah()
  {
    $data['nim'] = $this->input->post('nim');
    $data['nama'] = $this->input->post('nama');
    $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
    $data['ipk'] = $this->input->post('ipk');
    $data['kelas'] = $this->input->post('kelas');

    $this->db->insert('mahasiswa', $data);
    redirect(base_url('Home/list'));
  }

  public function edit($id)
  {
    $data['mahasiswa'] = $this->db->where('id',$id)->get('mahasiswa')->row();
    $this->load->view('edit',$data);
  }

  public function postEdit()
  {
    $id = $this->input->post('id');
    $data['nim'] = $this->input->post('nim');
    $data['nama'] = $this->input->post('nama');
    $data['tanggal_lahir'] = $this->input->post('tanggal_lahir');
    $data['ipk'] = $this->input->post('ipk');
    $data['kelas'] = $this->input->post('kelas');

    $this->db->where('id',$id)->update('mahasiswa', $data);
    redirect(base_url('Home/list'));
  }

  public function hapus($id)
  {
    $this->db->where('id',$id)->delete('mahasiswa');
    redirect(base_url('Home/list'));
  }

  public function cari($earch = ''){
    if ($this->input->post('cari')) {
        $cari = $this->input->post('cari');
    }else {
        $cari = $earch;
    }

    $query = $this->db->like('nim',$cari)->or_like('nama',$cari)->or_like('kelas',$cari)->get('mahasiswa')->result();

    $total = count($query);

    // echo $total;

    $this->load->library('pagination');

    $config['total_rows'] = $total;
    $config['base_url'] = 'http://localhost/PWL/praktikum5-rafatabahar/index.php/Home/cari/'.$cari.'/';
    $config['per_page'] = 5;
    $config['num_links'] = $total / $config['per_page'];
    $config['next_link'] = '&nbspNext&nbsp';
    $config['prev_link'] = '&nbspprevious&nbsp';
    $config['use_page_numbers'] = TRUE;

    $this->pagination->initialize($config);

    if($this->uri->segment(4)){
      $page = ($this->uri->segment(4)-1)*$config['per_page'];
    }
    else{
      $page = 0;
    }

    // echo 'holaa'.$this->uri->segment(4);

    $query = $this->db->like('nim',$cari)->or_like('nama',$cari)->or_like('kelas',$cari)->get('mahasiswa',$config['per_page'],$page)->result();
    // print_r($query);

    $data['mahasiswa'] = ($total)?$query:'Tidak ada data';

    $this->load->view('list', $data);

  }
}
