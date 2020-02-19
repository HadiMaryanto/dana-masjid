<div class="col-12">
    <?php if ($this->session->flashdata('alert') == 'berhasil') { ?>
      <div class="alert alert-primary alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Menambah Data
        </div>
      </div>
    <?php }elseif ($this->session->flashdata('alert') == 'edit') { ?>
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Mengubah Data
        </div>
      </div>
    <?php }elseif ($this->session->flashdata('alert') == 'hapus') {?>
      <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">
          <span>&times;</span>
          </button>
          Berhasil Menghapus Data
        </div>
      </div>
    <?php } ?>
<div class="card">
  <div class="card-header">
    <h4>Tabel Karyawan</h4>
  </div>
  <div class="card-body">
    <a href="<?php echo base_url('donatur/tambah') ?>" class="btn btn-primary">Tambah</a><hr>
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
          <tr>
          <th>No</th>
          <th>Donatur</th>
          <th>Tahun</th>
          <th>Jenis Kelamin</th>
          <th>No Hp</th>
          <th>Alamat</th>
          <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no =  1;
            foreach ($donatur as $key => $value) { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value['donatur_nama'] ?></td>
                <td><?php echo $value['donatur_tahun'] ?></td>
                <td><?php echo $value['donatur_jeniskel'] ?></td>
                <td><?php echo $value['donatur_nohp'] ?></td>
                <td><?php echo $value['donatur_alamat']?></td>
                <td>
                  <a href="<?php echo base_url('donatur/edit/'.$value['donatur_id']) ?>" class="btn btn-info" style="color:white;">Edit </a>
                  <a href="<?php echo base_url('donatur/delete/'.$value['donatur_id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
              </tr>
          <?php $no++;
        }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
