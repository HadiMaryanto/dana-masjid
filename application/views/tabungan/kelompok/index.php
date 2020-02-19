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
    <a style="color:white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a><hr>
    <div class="table-responsive">
      <table class="table table-striped" id="table-1">
        <thead>
          <tr>
          <th>No</th>
          <th>Kelompok</th>
          <th>Tahun</th>
          <th>Harga Sapi</th>
          <th>Dana Terkumpul</th>
          <th>Status</th>
          <th>aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no =  1;
            foreach ($kelompok as $key => $value) { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $value['kelompok_nama'] ?></td>
                <td><?php echo $value['kelompok_tahun'] ?></td>
                <td><?php echo $value['kelompok_target'] ?></td>
                <td><?php echo $value['kelompok_danaterkumpul'] ?></td>
                <td><?php echo $value['kelompok_status']?></td>
                <td>
                  <a class="btn btn-info" style="color:white;" data-toggle="modal" data-target="#exampleModal1<?php echo $value['kelompok_id'];?>">Edit </a>
                  <a href="<?php echo base_url('kelompok/delete/'.$value['kelompok_id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="<?php echo base_url('kelompok/tambah') ?>" method="post">
          <div class="form-group">
            <label>Kelompok</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <input type="text" name="kelompok" value="" class="form-control" required placeholder="contoh kelompok 1">
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-calendar"></i>
                </div>
              </div>
              <input type="number" name="tahun" value="" class="form-control" required>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Harga Sapi</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-box"></i>
                </div>
              </div>
              <input type="number" name="target" value="" class="form-control" required>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>


          <button type="submit" class="btn btn-primary mr-1" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php foreach ($kelompok as $key => $value): ?>
  <div class="modal fade" id="exampleModal1<?php echo $value['kelompok_id'];?>" tabindex="-1" role="dialog" aria-labelledby="formModal"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" novalidate="" action="<?php echo base_url('kelompok/edit/'.$value['kelompok_id']) ?>" method="post">
          <div class="form-group">
            <label>Kelompok</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <input type="text" name="kelompok" value="<?php echo $value['kelompok_nama']; ?>" class="form-control" required placeholder="contoh kelompok 1">
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Tahun</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-calendar"></i>
                </div>
              </div>
              <input type="number" name="tahun" value="<?php echo $value['kelompok_tahun']; ?>" class="form-control" required>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Harga Sapi</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fas fa-box"></i>
                </div>
              </div>
              <input type="number" name="target" value="<?php echo $value['kelompok_target']; ?>" class="form-control" required>
              <div class="invalid-feedback">
                Field tidak boleh kosong
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-1" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
