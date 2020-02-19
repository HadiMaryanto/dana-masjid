
</div>
<footer class="main-footer">
      <div class="footer-left">
        Copyright &copy; 2019
        <div class="bullet"></div>
        Design By <a href="#">Redstar</a>
      </div>
      <div class="footer-right"></div>
    </footer>
  </div>
</div>
<!-- General JS Scripts -->
<script type="text/javascript">

// var waktu1 = 5;
// var waktu2 = 59;
//
// setInterval(function() {
// var distance = 0;
// var distance1 = waktu1 --;
// var distance2 = waktu2 --;
// var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
// var menit = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
// var detik = Math.floor((distance2 % (1000 * 60)) / 1000);
//
// document.getElementById("demo").innerHTML = jam + "h " + menit + "m " + detik + "d ";
//
// }, 1000);

window.setTimeout("waktu()", 1000);

function waktu() {
  var waktu = new Date();
  setTimeout("waktu()", 1000);
  document.getElementById("jam").innerHTML = waktu.getHours();
  document.getElementById("menit").innerHTML = waktu.getMinutes();
  document.getElementById("detik").innerHTML = waktu.getSeconds();
}

var menit = 10;
var detik = 0;

function hitung() {
  setTimeout(hitung, 1000);
  $('#demo').html('0 jam ' + menit + ' menit ' + detik + ' detik ');
  detik --;
  if (detik < 0) {
    detik = 59;
    menit --;
    if (menit < 0) {
      menit = 0;
      detik = 0;
    }
  }
}
hitung();

</script>
<script src="<?php echo base_url()?>assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="<?php echo base_url()?>assets/js/flipclock.js"></script>
<script src="<?php echo base_url()?>assets/bundles/chartjs/chart.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url()?>assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<!-- Page Specific JS File -->
<script src="<?php echo base_url()?>assets/js/page/index2.js"></script>
<script src="<?php echo base_url()?>assets/js/page/todo.js"></script>
<!-- Template JS File -->
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="<?php echo base_url()?>assets/js/custom.js"></script>
<script src="<?php echo base_url()?>assets/bundles/datatables/datatables.min.js"></script>
<script src="<?php echo base_url()?>assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/js/page/datatables.js"></script>

<script src="<?php echo base_url() ?>assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>

<script src="<?php echo base_url() ?>assets/bundles/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/page/sweetalert.js"></script>
</body>


<!-- Mirrored from radixtouch.in/templates/admin/aegis/source/light/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2019 04:36:06 GMT -->
</html>
