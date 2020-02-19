<?php
  /**
   *
   */
  class DonaturController extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model('TabunganModel','tabungan');
    }
    function index()
    {
      $data['page_title'] = 'Donatur';
      $data['donatur'] = $this->tabungan->lihatData();
      $this->load->view('templates/header',$data);
      $this->load->view('tabungan/donatur/index',$data);
      $this->load->view('templates/footer');
    }
    public function tambah()
    {
      if (isset($_POST['simpan'])) {
        $data = array(
          'donatur_nama'=>$this->input->post('donatur'),
          'donatur_tahun'=>$this->input->post('tahun'),
          'donatur_nohp'=>$this->input->post('noHp'),
          'donatur_jeniskel'=>$this->input->post('jenisKel'),
          'donatur_alamat'=>$this->input->post('alamat')
        );
        $this->tabungan->simpan($data);
        $this->session->set_flashdata('alert', 'berhasil');
        redirect('donatur');
      }
      $data['page_title'] = 'Tambah Data Donatur';
      $this->load->view('templates/header',$data);
      $this->load->view('tabungan/donatur/tambah',$data);
      $this->load->view('templates/footer');
    }
    public function edit()
    {
      $id = $this->uri->segment(3);
      if (isset($_POST['submit'])) {
        $donatur = $this->input->post('donatur');
        $tahun = $this->input->post('tahun');
        $noHp = $this->input->post('noHp');
        $jenis = $this->input->post('jenisKel');
        $alamat = $this->input->post('alamat');

        $data = array(
          'donatur_nama'=>$donatur,
          'donatur_tahun'=>$tahun,
          'donatur_nohp'=>$noHp,
          'donatur_jeniskel'=>$jenis,
          'donatur_alamat'=>$alamat
        );
        $this->tabungan->editdonatur($id,$data);
        $this->session->set_flashdata('alert', 'edit');
        redirect('donatur');
      }else {
        $data['row'] = $this->tabungan->get_id($id)->row_array();
        $data['page_title'] = 'Edit Data Donatur';
        $this->load->view('templates/header',$data);
        $this->load->view('tabungan/donatur/edit',$data);
        $this->load->view('templates/footer');
      }
    }
    public function delete()
    {
      $id = $this->uri->segment(3);
      $data = array("donatur_id"=>$id);
      $this->tabungan->deleteDonatur($data);
      $this->session->set_flashdata('alert', 'hapus');
      redirect('donatur');
    }    
  }


 ?>
