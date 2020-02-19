
<?php

// $data = json_decode(file_get_contents("http://muslimsalat.com/pekanbaru.json?key=bd099c5825cbedb9aa934e255a81a5fc"), TRUE);
// kalau mau pakai ini &latitude=0.561839&longitude=101.422042

$data = json_decode(file_get_contents("https://api.pray.zone/v2/times/today.json?city=pekanbaru"), TRUE);
// echo "<pre>";
// var_dump($data);exit;
$shubuh = $data['results']['datetime'][0]['times']['Fajr'];
$syuruk = $data['results']['datetime'][0]['times']['Sunrise'];
$dzuhur = $data['results']['datetime'][0]['times']['Dhuhr'];
$ashar = $data['results']['datetime'][0]['times']['Asr'];
$maghrib = $data['results']['datetime'][0]['times']['Maghrib'];
$isya = $data['results']['datetime'][0]['times']['Isha'];
$sunset = $data['results']['datetime'][0]['times']['Sunset'];
$malam = $data['results']['datetime'][0]['times']['Midnight'];
$masehi = $data['results']['datetime'][0]['date']['gregorian'];
$hijriah = $data['results']['datetime'][0]['date']['hijri'];

// var_dump($hijriah);die;
$pecah1 = explode("-", $hijriah);
$pecah2 = explode("-", $masehi);

$konverBulanHijriah = $pecah1[1];
$konverBulanMasehi = $pecah2[1];

$bulanhijriah = array(
  '01' => 'Muharram',
  '02' => 'Shafar',
  '03' => "Rabi'ul Awal",
  '04' => "Rabi'ul Akhir",
  '05' => 'Jumadil Awal',
  '06' => "Jumadil Akhir",
  '07' => 'Rajab',
  '08' => "Sya'ban",
  '09' => 'Ramadhan',
  '10' => 'Syawwall',
  '11' => 'Dzulqaidah',
  '12' => 'Dzulhijjah'
);
$bulanmasehi = array(
  '01' => 'Januari',
  '02' => 'Februari',
  '03' => 'Maret',
  '04' => 'April',
  '05' => 'Mei',
  '06' => 'Juni',
  '07' => 'Juli',
  '08' => 'Agustus',
  '09' => 'September',
  '10' => 'Oktober',
  '11' => 'November',
  '12' => 'Desember'
);

// echo "Subuh : " . $shubuh . "<br>";
// echo "Dhuhur : " . $dzuhur . "<br>";
// echo "Ashar : " . $ashar . "<br>";
// echo "Magrib : " . $maghrib . "<br>";
// echo "Isya : " . $isya . "<br>";
// echo $pecah2[2] . " " .$bulanmasehi[$konverBulanMasehi] . " " . $pecah2[0] . "<br>";
// echo $pecah1[2] . " " .$bulanhijriah[$konverBulanHijriah] . " " . $pecah1[0];
 ?>
    <div class="row sortable-card ui-sortable" >
              <div class="col-2">
                <div class="card card-primary">
                  <div class="card-header ui-sortable-handle">
                    <h4>Subuh</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $shubuh ?></p>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="card card-secondary">
                  <div class="card-header ui-sortable-handle">
                    <h4>Syuruk</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $syuruk ?></p>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="card card-secondary">
                  <div class="card-header ui-sortable-handle">
                    <h4>Dzuhur</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $dzuhur ?></p>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="card card-danger">
                  <div class="card-header ui-sortable-handle">
                    <h4>Ashar</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $ashar ?></p>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="card card-warning">
                  <div class="card-header ui-sortable-handle">
                    <h4>Magrib</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $maghrib ?></p>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="card card-warning">
                  <div class="card-header ui-sortable-handle">
                    <h4>Isya</h4>
                  </div>
                  <div class="card-body">
                    <p><?php echo $isya ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            		<div class="col-lg-3 col-md-12 col-12 col-sm-12">
                  <div class="card card-secondary">
                    <div class="card-header ui-sortable-handle">
                      <h4>Hijriah</h4>
                    </div>
                    <div class="card-body">
                      <p><?php echo $pecah1[2] . " " .$bulanhijriah[$konverBulanHijriah] . " " . $pecah1[0]; ?></p>
                    </div>
                  </div>
                  <div class="card card-secondary">
                    <div class="card-header ui-sortable-handle">
                      <h4>Masehi</h4>
                    </div>
                    <div class="card-body">
                      <p><?php echo $pecah2[2] . " " .$bulanmasehi[$konverBulanMasehi] . " " . $pecah2[0]; ?></p>
                    </div>
                  </div>
            		</div>
            			<div class="col-lg-6 col-md-12 col-12 col-sm-12">
            				<!-- <div class="card" style="background-color:#57a2de"> -->
            					<div class="card-body">
            						<div class="row p-t-16">
            							<div class="col-4"style="margin-left:2px;">
                            <div class="" style="font-size:40px;">
                              <span id="jam" style="color:black;">  </span>
                              <span style="margin-left:30px;color:black;"> : </span>
                            </div>
            							</div>
            							<div class="col-4" >
                            <div class="" style="font-size:40px;">
                              <span id="menit" style="color:black;" >  </span>
                              <span style="margin-left:30px;color:black;"> : </span>
                            </div>
            							</div>
                          <div class="col-3" >
                            <div class="" style="font-size:40px;margin-left:20px;">
                              <span id="detik" style="color:black;">  </span>
                            </div>
            							</div>
            						</div>
            					</div>
                      <?php
                        date_default_timezone_set('Asia/Jakarta');
                        $jamsekang = Date("h:i");
                        // var_dump($jamsekang);die;
                        if ($jamsekang == $shubuh): ?>
                          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;">IQOMAH</p>
                            </div>
                          <p id="demo"style="font-size:40px;color:black;margin-left:25px;"></p>
                          </div>
                        <?php elseif ($jamsekang == $dzuhur): ?>
                          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;">IQOMAH</p>
                            </div>
                          <p id="demo"style="font-size:40px;color:black;margin-left:25px;"></p>
                          </div>
                        <?php elseif ($jamsekang == $ashar): ?>
                          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;">IQOMAH</p>
                            </div>
                          <p id="demo"style="font-size:40px;color:black;margin-left:25px;"></p>
                          </div>
                        <?php elseif ($jamsekang == $maghrib): ?>
                          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;">IQOMAH</p>
                            </div>
                          <p id="demo"style="font-size:40px;color:black;margin-left:25px;"></p>
                          </div>

                        <?php elseif ($jamsekang == $isya): ?>
                          <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;">IQOMAH</p>
                            </div>
                          <p id="demo"style="font-size:40px;color:black;margin-left:25px;"></p>
                          </div>
                          <?php else: ?>
                            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                              <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                                <p style="font-size:30px;color:black;align:center;margin-left:145px;margin-top:50px;"></p>
                              </div>
                            <p style="font-size:40px;color:black;margin-left:25px;"></p>
                            </div>
                        <?php endif; ?>

            				</div>
                    <div class="col-lg-3 col-md-12 col-12 col-sm-12">
                      <div class="card card-secondary">
                        <div class="card-header ui-sortable-handle">
                          <h4>Sunset</h4>
                        </div>
                        <div class="card-body">
                          <p><?php echo $sunset; ?></p>
                        </div>
                      </div>
                      <div class="card card-secondary">
                        <div class="card-header ui-sortable-handle">
                          <h4>Tengah Malam</h4>
                        </div>
                        <div class="card-body">
                          <p><?php echo $malam; ?></p>
                        </div>
                      </div>
                		</div>
            			</div>
            		</div>
