<div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <form class="needs-validation" action="<?php echo base_url('donatur/edit/'.$row['donatur_id']) ?>" method="post" novalidate="">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="donatur">Nama Donatur</label>
                        <input type="text" class="form-control" name="donatur" required tabindex="1" value="<?= $row['donatur_nama'] ?>">
                        <div class="invalid-feedback">
                          Nama tidak boleh kosong
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Tahun</label>
                        <input type="number" class="form-control" name="tahun" tabindex="2" required value="<?= $row['donatur_tahun'] ?>">
                        <div class="invalid-feedback">
                          Tahun tidak boleh kosong
                        </div>
                      </div>
                      <div class="form-group">
                        <label>No Hp</label>
                        <input type="number" class="form-control" name="noHp" required value="<?= $row['donatur_nohp'] ?>">
                        <div class="invalid-feedback">
                          No Hp tidak boleh kosong
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input class="form-control" type="text" name="jenisKel" value="<?php echo $row['donatur_jeniskel'] ?>">
                        <div class="invalid-feedback">
                          Jenis Kelamin tidak boleh kosong
                        </div>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="textarea" class="form-control" name="alamat" value="<?= $row['donatur_alamat'] ?>" required tabindex="5">
                        <div class="invalid-feedback">
                           Alamat tidak boleh kosong
                        </div>
                      </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit" name="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                  </form>
                </div>
              </div>
