<?php
  /**
   *
   */
  class KelompokController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('TabunganModel','tabungan');
    }
    public function index()
    {
      $data['page_title'] = 'Kelompok';
      $data['kelompok'] = $this->tabungan->dataKelompok();
      $this->load->view('templates/header',$data);
      $this->load->view('tabungan/kelompok/index');
      $this->load->view('templates/footer');
    }
    public function tambah()
    {
      if (isset($_POST['submit'])) {
        $data = array(
          'kelompok_nama'=>$this->input->post('kelompok'),
          'kelompok_tahun'=>$this->input->post('tahun'),
          'kelompok_target'=>$this->input->post('target')
        );
        $this->tabungan->simpanKelompok($data);
        $this->session->set_flashdata('alert', 'berhasil');
        redirect('kelompok');
      }
    }
    public function edit()
    {
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])) {
        $kelompok = $this->input->post('kelompok');
        $tahun = $this->input->post('tahun');
        $target = $this->input->post('target');

        $data = array(
          'kelompok_nama'=>$kelompok,
          'kelompok_tahun'=>$tahun,
          'kelompok_target'=>$target
        );
        $this->tabungan->editKelompok($id, $data);
        $this->session->set_flashdata('alert', 'edit');
        redirect('kelompok');
      }
    }
    public function delete()
    {
      $id = $this->uri->segment(3);
      $data = array("kelompok_id"=>$id);
      $this->tabungan->deleteKelompok($data);
      $this->session->set_flashdata('alert', 'hapus');
      redirect('kelompok');
    }
  }


 ?>
