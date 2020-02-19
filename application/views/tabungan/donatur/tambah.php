<div class="col-12 col-md-12">
                <div class="card">
                  <form class="needs-validation" action="<?php echo base_url('donatur/tambah/') ?>" method="post" novalidate="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nik">Nama Donatur</label>
                      <input type="text" class="form-control" name="donatur" required tabindex="1">
                      <div class="invalid-feedback">
                        Nama tidak boleh kosong
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Tahun</label>
                      <input type="number" class="form-control" name="tahun" tabindex="2" required>
                      <div class="invalid-feedback">
                        Tahun tidak boleh kosong
                      </div>
                    </div>
                    <div class="form-group">
                      <label>No Hp</label>
                      <input type="number" class="form-control" name="noHp" required>
                      <div class="invalid-feedback">
                        No Hp tidak boleh kosong
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control" name="jenisKel">
                        <option value="disabled">---- pilih ----</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <div class="invalid-feedback">
                        Jenis Kelamin tidak boleh kosong
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="textarea" class="form-control" name="alamat" required tabindex="5">
                      <div class="invalid-feedback">
                         Alamat tidak boleh kosong
                      </div>
                    </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit" name="simpan">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
