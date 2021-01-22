<?php

class Siswa_model extends CI_Model
{
  function get_siswa()
  {
    $result = $this->db->get('siswa');
    return $result;
  }
  function get_no_induk($no_induk)
  {
    $query = $this->db->get_where('siswa', array('no_induk' => $no_induk));
    return $query;
  }
  function delete($no_induk)
  {
    $this->db->where('no_induk', $no_induk);
    $this->db->delete('siswa');
  }
  function update($no_induk, $nama_siswa, $kelas)
  {
    $data = array(
      'no_induk' => $no_induk,
      'nama_siswa' => $nama_siswa,
      'kelas' => $kelas
    );
    $this->db->where('no_induk', $no_induk);
    $this->db->update('siswa', $data);
  }
  function save($no_induk, $nama_siswa, $kelas)
  {
    $data = array(
      'no_induk' => $no_induk,
      'nama_siswa' => $nama_siswa,
      'kelas' => $kelas
    );
    $this->db->insert('siswa', $data);
  }
}
