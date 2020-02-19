<?php /**
 *
 */
class BayarController extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('TabunganModel','tabungan');
  }
  public function index()
  {
    $data['bayar'] = $this->tabungan->dataBayar();
    $data['donatur'] = $this->tabungan->lihatData();
    $data['kelompok'] = $this->tabungan->dataKelompok();
    $data['tanggungan'] = $this->tabungan->dataTanggungan();
    $data['page_title'] = "Pembayaran";
    $this->load->view('templates/header',$data);
    $this->load->view('tabungan/bayar/index',$data);
    $this->load->view('templates/footer');
  }
  public function tambah()
  {
    if (isset($_POST['submit'])) {
      $namadonatur = $this->input->post('donaturTanggung');
      $tanggal = $this->input->post('tanggalBayar');
      $jumlah = $this->input->post('jumlah');


      $data = array(
        'id_tanggungan'=>$namadonatur,
        'pembayar_tgl'=>$tanggal,
        'pembayar_jumlah'=>$jumlah
      );
      $tang = $this->tabungan->cek_tang($data['id_tanggungan']);
      // echo "<pre>";
      // var_dump($kel);

      $jumlahTang = 0;
      if ($tang['tanggungan_tabungan'] == null) {
        $id = $tang['tanggungan_id'];
        $dataTanggung = array(
          'tanggungan_tabungan'=>$data['pembayar_jumlah']
        );
        $this->tabungan->ubahTabung($dataTanggung,$id);
      }
      else {
        $id = $tang['tanggungan_id'];
        $jumlahTang = $tang['tanggungan_tabungan'] + $data['pembayar_jumlah'];

        $data2 = array(
          'tanggungan_tabungan'=>$jumlahTang
        );
        $this->tabungan->ubahTabung1($data2, $id);
      }
      $kel = $this->tabungan->cek_kel($tang['id_kelompok']);
      if ($kel['kelompok_danaterkumpul'] == null) {
        if ($tang['id_kelompok'] == $kel['kelompok_id']) {
          $idKel = $kel['kelompok_id'];
          $danaTer = $kel['tanggungan_tabungan'];

          $dataKel = array(
            'kelompok_danaterkumpul'=>$danaTer
          );
          $this->tabungan->ubahKel($dataKel, $idKel);
        }
      }else {
        $idKel = $kel['kelompok_id'];
        $danaTer = $kel['tanggungan_tabungan'] + $kel['kelompok_danaterkumpul'];

        $dataKel = array(
          'kelompok_danaterkumpul'=>$danaTer
        );
        $this->tabungan->ubahKel($dataKel, $idKel);
      }
      $this->tabungan->tambahBayar($data);
      $this->session->set_flashdata('alert', 'berhasil');
      redirect('bayar');

    }
  }
}
 ?>
