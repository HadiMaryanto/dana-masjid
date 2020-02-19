<?php
  /**
   *
   */
  class TabunganModel extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function lihatData()
    {
      // $this->db->select('*');
      $this->db->from('masjid_donatur');
      $this->db->order_by('donatur_date_created','desc');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function simpan($data)
    {
      $this->db->insert('masjid_donatur', $data);
    }
    public function editdonatur($id,$data)
    {
      $this->db->where('donatur_id',$id);
      $this->db->update('masjid_donatur',$data);
    }
    public function get_id($id)
    {
      $dapat = array('donatur_id'=>$id);
      return $this->db->get_where('masjid_donatur',$dapat);
    }
    public function deleteDonatur($id)
    {
      $this->db->delete('masjid_donatur',$id);
    }

    public function dataKelompok()
    {
      // $this->db->select('*');
      $this->db->from('masjid_kelompok');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function simpanKelompok($data)
    {
      $this->db->insert('masjid_kelompok', $data);
    }
    public function editKelompok($id,$data)
    {
      $this->db->where('kelompok_id',$id);
      $this->db->update('masjid_kelompok', $data);
    }
    public function deleteKelompok($id)
    {
      $this->db->delete('masjid_kelompok',$id);
    }
    public function dataTanggungan()
    {
      $this->db->from('masjid_tanggungan');
      $this->db->join('masjid_donatur','masjid_donatur.donatur_id = masjid_tanggungan.id_donatur');
      $this->db->join('masjid_kelompok','masjid_kelompok.kelompok_id = masjid_tanggungan.id_kelompok');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function tambahTanggung($data)
    {
      $this->db->insert('masjid_tanggungan',$data);
    }
    public function deleteTanggungan($id)
    {
      $this->db->delete('masjid_tanggungan',$id);
    }

    public function dataBayar()
    {
      $this->db->from('masjid_pembayar');
      $this->db->join('masjid_tanggungan','masjid_tanggungan.tanggungan_id = masjid_pembayar.id_tanggungan');
      $this->db->join('masjid_donatur','masjid_donatur.donatur_id = masjid_tanggungan.id_donatur');
      $this->db->join('masjid_kelompok','masjid_kelompok.kelompok_id = masjid_tanggungan.id_kelompok');
      $this->db->order_by('pembayar_date_created','desc');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function tambahBayar($data)
    {
      $this->db->insert('masjid_pembayar',$data);
    }
    public function cek_tang($id)
    {
      $this->db->from('masjid_tanggungan');
      $this->db->join('masjid_donatur','masjid_donatur.donatur_id = masjid_tanggungan.id_donatur');
      $this->db->join('masjid_kelompok','masjid_kelompok.kelompok_id = masjid_tanggungan.id_kelompok');
      $this->db->where('tanggungan_id',$id);
      $query = $this->db->get();
      return $query->row_array();
    }
    public function ubahTabung($data,$id)
    {
      $this->db->where('tanggungan_id',$id);
      $this->db->update('masjid_tanggungan',$data);
    }
    public function ubahTabung1($data,$id)
    {
      $this->db->where('tanggungan_id',$id);
      $this->db->update('masjid_tanggungan',$data);
    }
    public function cek_kel($id)
    {
      $this->db->from('masjid_tanggungan');
      $this->db->join('masjid_kelompok','masjid_kelompok.kelompok_id = masjid_tanggungan.id_kelompok');
      $this->db->where('kelompok_id',$id);
      $query = $this->db->get();
      return $query->row_array();
    }
    public function selKel($id)
    {
      $this->db->from('masjid_tanggungan');
      $this->db->join('masjid_kelompok','masjid_kelompok.kelompok_id = masjid_tanggungan.id_kelompok');
      $this->db->where('kelompok_id',$id);
      $query = $this->db->get();
      return $query->result_array();
    }
    public function ubahKel($data,$id)
    {
      $this->db->where('kelompok_id',$id);
      $this->db->update('masjid_kelompok',$data);
    }
  }

 ?>
