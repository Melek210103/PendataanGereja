</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>template/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>template/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url(); ?>template/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url(); ?>template/assets/vendor/quill/quill.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function() {
    $('.datatable').DataTable({
        "pageLength": 5,
        "lengthMenu": [5, 10, 25, 50, 100],
        "language": {
            "lengthMenu": "Tampilkan _MENU_ entri",
            "zeroRecords": "Tidak ada data yang ditemukan",
            "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
            "infoEmpty": "Menampilkan 0 hingga 0 dari 0 entri",
            "infoFiltered": "(difilter dari _MAX_ total entri)",
            "search": "Cari:",
            "paginate": {
                "first": "Pertama",
                "last": "Terakhir",
                "next": "Selanjutnya",
                "previous": "Sebelumnya"
            }
        }
    });
});
</script>
  <script src="<?= base_url(); ?>template/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url(); ?>template/assets/vendor/php-email-form/validate.js"></script>
  <!-- <script src="<?= base_url(); ?>template/assets/vendor/simple-datatables/simple-datatables.js"></script> -->

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>template/assets/js/main.js"></script>
 <!-- Form Submit JavaScript -->


</body>

</html>