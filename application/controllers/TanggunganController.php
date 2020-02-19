<?php
  /**
   *
   */
  class TanggunganController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('TabunganModel','tabungan');
    }
    public function index()
    {
      $data['page_title'] = "Tanggungan";
      $data['tanggungan'] = $this->tabungan->dataTanggungan();
      $data['donatur'] = $this->tabungan->lihatData();
      $data['kelompok'] = $this->tabungan->dataKelompok();
      $this->load->view('templates/header',$data);
      $this->load->view('tabungan/tanggungan/index');
      $this->load->view('templates/footer');
    }
    public function tambah()
    {
      if (isset($_POST['submit'])) {
        $donaturTanggung = $this->input->post('donaturTanggung');
        $kelompokTanggung = $this->input->post('kelompokTanggung');
        $jumlah = $this->input->post('jumlah')/7;
        // $jumlah = $tangJumlah / 7;

        $data = array(
          'id_donatur'=>$donaturTanggung,
          'id_kelompok'=>$kelompokTanggung,
          'tanggungan_jumlah'=>$jumlah
        );
        // $kel = $this->tabungan->cek_kel($data['tanggungan_id']);
        // // echo "<pre>";
        // // var_dump($kel);die;
        // if ($kel['kelompok_nama'] == 'kelompok 1') {
        //   $id = $tang['kelompok_id'];
        //   $tab = $jumlahTang;
        //   $data = array(
        //     'kelompok_danaterkumpul'=>$tab
        //   );
        //   $this->tabungan->ubahKelompok($data);
        // }

        $this->tabungan->tambahTanggung($data);
        $this->session->set_flashdata('alert', 'berhasil');
        redirect('tanggungan');
      }
    }
    public function delete()
    {
      $id = $this->uri->segment(3);
      $data = array("tanggungan_id"=>$id);
      $this->tabungan->deleteTanggungan($data);
      $this->session->set_flashdata('alert', 'hapus');
      redirect('tanggungan');
    }
  }

 ?>
