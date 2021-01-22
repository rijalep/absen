<?php

class Absensi_model extends CI_Model
{
    function get_absensi()
    {
        $result = $this->db->get('absensi');
        return $result;
    }
    function save($no_induk, $tgl_hadir)
    {
        $tgl_hadir = date("Y-m-d H:i:s", strtotime('+0 day'));
        $data = array(
        'no_induk' => $no_induk,
        'tgl_hadir' => $tgl_hadir
        );
        $this->db->insert('absensi', $data);
        $a = $this->db->query("INSERT INTO absensi (no_induk, tgl_hadir) VALUES ('$no_induk','$tgl_hadir')");
        return $a;
    }
    // Admin
    function simpan($no_induk, $tgl_hadir)
    {
        $tgl_hadir = date("Y-m-d H:i:s", strtotime('+0 day'));
        $data = array(
        'no_induk' => $no_induk,
        'tgl_hadir' => $tgl_hadir
        );
        $this->db->insert('absensi', $data);
    }
    function get_by_role()
    {
        $this->db->select('absensi.*, siswa.no_induk AS no_induk, siswa.nama_siswa, siswa.kelas');
        $this->db->join('siswa', 'absensi.no_induk = siswa.no_induk');
        $this->db->from('absensi');
        $query = $this->db->get();
        return $query->result();
    }
}
