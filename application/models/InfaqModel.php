<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfaqModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function dataInfaq()
    {
        $this->db->from('masjid_infaq');
        $this->db->order_by('infaq_date_created','desc');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function hitung(){
        $this->db->select('SUM(infaq_jumlah) as total');
        $this->db->from('masjid_infaq');
        $this->db->where('infaq_jenis','masuk');
        $query = $this->db->get()->row()->total;
        return $query;
    }
    public function pengeluaran(){
      $this->db->select('SUM(infaq_jumlah) as total1');
      $this->db->from('masjid_infaq');
      $this->db->where('infaq_jenis','keluar');
      $query = $this->db->get()->row()->total1;
      return $query;
    }
    public function Keuangan()
    {
      $this->db->select('*');
      $this->db->from('masjid_infaq');
      $query = $this->db->get();
      return $query->result_array();
    }
    public function uang_keluar()
    {
        $this->db->select('*');
        $this->db->from('masjid_infaq');
        $this->db->where('infaq_jenis','keluar');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function simpan($data)
    {
      $this->db->insert('masjid_infaq',$data);
    }
    public function ubah($id,$data)
    {
      $this->db->where('infaq_id',$id);
      $this->db->update('masjid_infaq',$data);
    }
    public function hapusMasuk($id)
    {
      $this->db->delete('masjid_infaq',$id);
    }
    public function hapusKeluar($id)
    {
      $this->db->delete('masjid_infaq',$id);
    }
}
