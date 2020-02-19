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
  <div class="card-body">
    <div class="card-header">
      <p style="color:green;"> Sisa Saldo : Rp <?php $hitung;
        $pengeluaran;
        $semua = $hitung - $pengeluaran;
        echo number_format($semua,2,',','.');
       ?></p>
    </div>
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
            <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jenis</th>
            <th>Keterangan</th>
            <th>Jumlah</th>
            <th>aksi</th>
            </tr>
        </thead>
        </thead>
        <tbody>
            <?php
            $no = 1;
                foreach ($infaq as $key => $value) {

            if ($value['infaq_jenis'] == 'keluar'): ?>
              <tr>
                  <td><?=$no;?></td>
                  <td><?=$value['infaq_date_created'];?></td>
                  <td><?=$value['infaq_jenis'];?></td>
                  <td><?=$value['infaq_keterangan'];?></td>
                  <td>Rp <?=number_format($value['infaq_jumlah'],2,',','.');?></td>
                  <td>
                    <a class="btn btn-info" style="color:white;" data-toggle="modal" data-target="#exampleModal1<?php echo $value['infaq_id'] ?>">Edit </a>
                    <a href="<?php echo base_url('infaq/keluar/deleteKeluar/'.$value['infaq_id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                  </td>
              </tr>

            <?php $no++; endif; ?>
            <?php
                }
            ?>
        </tbody>
        <tr style="margin-bottom:10px;border:1px;">
          <td colspan="4">Total keluar</td>
          <td style="color: red;background-color: aliceblue;">Rp <?php echo number_format($pengeluaran,2,',','.')?></td>
          <td colspan="2"></td>
        </tr>
      </table>
    </div>
  </div>
</div>

<?php foreach ($infaq as $key => $value): ?>
  <div class="modal fade" id="exampleModal1<?php echo $value['infaq_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Tanggal <?php echo $value['infaq_tanggal']; ?></h5>
                   </div>
                   <div class="modal-body">
                       <form class="needs-validation" novalidate="" action="<?php echo base_url('infaq/keluar/editKeluar') ?>" method="post">
                         <div class="form-group">
                             <label>Tanggal</label>
                              <input type="date" class="form-control" name="infaq_tanggal" placeholder="" value="<?php echo $value['infaq_tanggal']; ?>" >
                             <input type="hidden" name="infaq_id"  value="<?php echo $value['infaq_id']; ?>">
                         </div>
                      <div class="form-group">
                          <label>Jumlah</label>
                          <input type="text" class="form-control" name="infaq_jumlah" placeholder="" value="<?php echo $value['infaq_jumlah']; ?>">
                      </div>
                      <div class="form-group">
                          <label>Keterangan</label>
                          <input type="text" class="form-control" name="infaq_keterangan" placeholder="" value="<?php echo $value['infaq_keterangan']; ?>">
                      </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                     <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                   </div>
                 </form>
               </div>
           </div>
         </div>
<?php endforeach; ?>
