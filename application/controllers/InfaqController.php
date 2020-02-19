<?php
  /**
   *
   */
  class InfaqController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('InfaqModel','infaq');
    }
    public function index()
    {
      $data['page_title'] = 'Data Uang Masuk';
      $data['infaq'] = $this->infaq->dataInfaq();
      $data['hitung'] = $this->infaq->hitung();
      $data['pengeluaran'] = $this->infaq->pengeluaran();
  		$this->load->view('templates/header',$data);
  		$this->load->view('infaq/masuk',$data);
  		$this->load->view('templates/footer');
    }
    public function tambah()
    {
      if (isset($_POST['submit'])) {
        $data = array(
          'infaq_tanggal'=>$this->input->post('tanggal'),
          'infaq_jenis'=>$this->input->post('jenis'),
          'infaq_jumlah'=>$this->input->post('jumlah'),
          'infaq_keterangan'=>$this->input->post('keterangan')
        );
        $this->infaq->simpan($data);
        $this->session->set_flashdata('alert', 'berhasil');
        redirect('infaq/masuk');
      }
    }
    public function editMasuk()
    {
      if (isset($_POST['submit'])) {
        $id = $this->input->post('infaq_id');
        $tanggal = $this->input->post('infaq_tanggal');
        $jumlah = $this->input->post('infaq_jumlah');
        $keterangan = $this->input->post('infaq_keterangan');

        $data = array(
          'infaq_tanggal'=>$tanggal,
          'infaq_jumlah'=>$jumlah,
          'infaq_keterangan'=>$keterangan,
          'infaq_jenis'=>'masuk'
        );
        // echo "<pre>";
        // var_dump($validasi);die;
        $this->infaq->ubah($id,$data);
        $this->session->set_flashdata('alert', 'edit');
        redirect('infaq/masuk');
      }
    }
    public function deleteMasuk()
    {
      $id = $this->uri->segment(4);
      $data = array("infaq_id"=>$id);
      $this->infaq->hapusMasuk($data);
      $this->session->set_flashdata('alert', 'hapus');
      redirect('infaq/masuk');
    }
    public function index2()
    {
      $data['page_title'] = 'Data Uang Keluar';
      $data['infaq'] = $this->infaq->dataInfaq();
      $data['hitung'] = $this->infaq->hitung();
      $data['pengeluaran'] = $this->infaq->pengeluaran();
  		$this->load->view('templates/header',$data);
      $this->load->view('infaq/keluar',$data);
      $this->load->view('templates/footer');
    }
    public function editKeluar()
    {
      if (isset($_POST['submit'])) {
        $id = $this->input->post('infaq_id');
        $tanggal = $this->input->post('infaq_tanggal');
        $jumlah = $this->input->post('infaq_jumlah');
        $keterangan = $this->input->post('infaq_keterangan');

        $data = array(
          'infaq_tanggal'=>$tanggal,
          'infaq_jumlah'=>$jumlah,
          'infaq_keterangan'=>$keterangan
        );
        // echo "<pre>";
        // var_dump($validasi);die;
        $this->infaq->ubah($id,$data);
        $this->session->set_flashdata('alert', 'edit');
        redirect('infaq/keluar');
      }
    }
    public function deleteKeluar()
    {
      $id = $this->uri->segment(4);
      $data = array("infaq_id"=>$id);
      $this->infaq->hapusKeluar($data);
      $this->session->set_flashdata('alert', 'hapus');
      redirect('infaq/keluar');
    }
    public function jam()
    {
      $data['page_title'] = 'Jadwal Sholat';
      $this->load->view('templates/header',$data);
      $this->load->view('jam');
      $this->load->view('templates/footer');
    }
  }


 ?>
