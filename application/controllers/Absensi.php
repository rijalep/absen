<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('absensi_model');
    }
    public function index()
    {
            $data['title'] = 'Presensi Online';
            $this->load->view('templates/menu', $data);
            $this->load->view('auth/index');
    }
    function save()
    {
        $tgl_hadir = date("Y-m-d H:i:s", strtotime('+0 day'));
        $no_induk = $this->input->post('no_induk');
        $tgl_hadir = $this->input->post('tgl_hadir');
        $this->absensi_model->save($no_induk, $tgl_hadir);
        redirect('siswa/form/'.$no_induk);
    }
    // Admin
    public function absensi()
    {
        $data['absensi'] = $this->absensi_model->get_by_role();
        $this->load->view('templates/menu', $data);
        $this->load->view('auth/absensi');
    }
    function simpan()
    {
        $tgl_hadir = date("Y-m-d  H:i:s", strtotime('+0 day'));
        $no_induk = $this->input->post('no_induk');
        $tgl_hadir = $this->input->post('tgl_hadir');
        $this->absensi_model->simpan($no_induk, $tgl_hadir);
        redirect('absensi/absensi');
    }
}
