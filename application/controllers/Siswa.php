<?php
class Siswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('siswa_model');
  }
  function index()
  {
    $data['siswa'] = $this->siswa_model->get_siswa();
    $this->load->view('templates/menu', $data); 
    $this->load->view('siswa/siswa_view', $data);
  }
  function form()
    {
        $this->load->view('templates/menu');
        $no_induk = $this->uri->segment(3);
        $result = $this->siswa_model->get_no_induk($no_induk);
        if ($result->num_rows() > 0) {
        $i = $result->row_array();
        $data = array(
            'no_induk'     => $i['no_induk'],
            'nama_siswa'    => $i['nama_siswa'],
            'kelas'  => $i['kelas']
        );
        $this->load->view('auth/form', $data);
        } else {
        $this->load->view('auth/gagal');
        }
    }
  // Admin
  function siswa()
  {
    $data['siswa'] = $this->siswa_model->get_siswa();
    $this->load->view('templates/menu', $data); 
    $this->load->view('admin_siswa/siswa_view', $data);
  }
  function add_new()
  {
    $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/menu', $data);
    $this->load->view('admin_siswa/add_siswa_view');
  }
  function save()
  {
    $no_induk = $this->input->post('no_induk');
    $nama_siswa = $this->input->post('nama_siswa');
    $kelas = $this->input->post('kelas');
    $this->siswa_model->save($no_induk, $nama_siswa, $kelas);
    redirect('siswa/siswa');
  }
  function delete()
  {
    $no_induk = $this->uri->segment(3);
    $this->siswa_model->delete($no_induk);
    redirect('siswa/siswa');
  }
  function get_edit()
  {
    $this->load->view('templates/menu');
    $no_induk = $this->uri->segment(3);
    $result = $this->siswa_model->get_no_induk($no_induk);
    if ($result->num_rows() > 0) {
      $i = $result->row_array();
      $data = array(
        'no_induk'     => $i['no_induk'],
        'nama_siswa'    => $i['nama_siswa'],
        'kelas'  => $i['kelas']
      );
      $this->load->view('admin_siswa/edit_siswa_view', $data);
    } else {
      echo "Data Was Not Found";
    }
  }
  function update()
  {
    $no_induk = $this->input->post('no_induk');
    $nama_siswa = $this->input->post('nama_siswa');
    $kelas = $this->input->post('kelas');
    $this->siswa_model->update($no_induk, $nama_siswa, $kelas);
    redirect('siswa/siswa');
  }
}
