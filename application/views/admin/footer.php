
</div>
</div>

<!-- Vendor: Javascripts -->
<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Our Website Javascripts -->
<script src="<?= base_url('assets/js/admin/app.js') ?>"></script>
<script src="<?= base_url('assets/js/admin/common.js') ?>"></script>
<?php if(!isset($_GET['p'])) { ?>
    <script src="<?= base_url('assets/js/admin/home1.js') ?>"></script>
<?php } ?>
<?php
    if(isset($_GET['p'])){
        $hal = $_GET['p'];
        if($hal=='data'){
?>
        <script type="text/javascript" src="<?= base_url('vendor/datatables/dataTables.bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('vendor/fancybox/jquery.fancybox.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('vendor/dataTables.bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('vendor/tinymce/jquery.tinymce.min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('vendor/tinymce/tinymce.min.js') ?>"></script>
        <script type="text/javascript" class="init">
            tglpinjam = document.getElementById('datenow').valueAsDate = new Date();
        Date.prototype.addDays = function (days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
      }
      var date = new Date();
        tglsekarang = document.getElementById('tglkembali').valueAsDate = date.addDays(3);
    function addDays(date, days) {
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }
    function isi_otomatis() {
        var nim = $("#nim").val();
        $.ajax({
            url: 'lib/proses.php',
            data: "nim=" + nim,
        }).success(function (data) {
            var json = data,
                obj = JSON.parse(json);
            $('#nama').val(obj.nama);
            $('#id_anggota').val(obj.id_anggota);
        });
    }


            tinymce.init({
                selector: 'textarea',
                height: 200,
                branding: false,
                menubar: false,
                plugins: [
                    'advlist autolink lists link charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                ],
                toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',

            });
			$(document).ready(function() {
				$('#buku').DataTable({
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                responsive: true
                });
			} );
            $(document).on( "click", '.edit_button',function(e) {
                var judul = $(this).data('judul');
                var id = $(this).data('id');
                var pengarang = $(this).data('pengarang');
                var penerbit = $(this).data('penerbit');
                var sinopsis = $(this).data('sinopsis');
                var harga = $(this).data('harga');
                var stok = $(this).data('stok');
                var kategori= $(this).data('kategori');
                var halaman = $(this).data('halaman');
                var rating = $(this).data('rating');

                $("#rating_edit").val(rating);
                $("#"+kategori).attr({"selected": true});
                $(".edit_id").val(id);
                $(".edit_judul").val(judul);
                $(".edit_pengarang").val(pengarang);
                $(".edit_penerbit").val(penerbit);
                // $(".edit_sinopsis").val(sinopsis);
                tinyMCE.activeEditor.setContent(sinopsis);
                $(".edit_harga").val(harga);
                $(".edit_stok").val(stok);
                $(".edit_halaman").val(halaman);
                // $(".edit_rating").val(rating);
                // $(".edit_kategori").val(kategori);
            });
            $(document).on( "click", '.delete_button',function(e) {
                var judul = $(this).data('judul');
                var id = $(this).data('id');
                var pengarang = $(this).data('pengarang');
                var penerbit = $(this).data('penerbit');

                $(".hapus_id").val(id);
                $(".hapus_judul").val(judul);
                $(".hapus_pengarang").val(pengarang);
                $(".hapus_penerbit").val(penerbit);
            });
        </script>
<?php } else if($hal=='kategori'){?>
    <script type="text/javascript" class="init">
        $(document).on( "click", '.edit_button',function(e) {
                var kategori = $(this).data('kategori');
                var id = $(this).data('id');

                $(".edit_id").val(id);
                $(".edit_kategori").val(kategori);
        });
        $(document).on( "click", '.delete_button',function(e) {
                var kategori = $(this).data('kategori');
                var id = $(this).data('id');

                $(".hapus_id").val(id);
                $(".hapus_kategori").val(kategori);
        });
    </script>
<?php } else if($hal=='slider'){  ?>
    <script type="text/javascript" src="<?= base_url('vendor/fancybox/jquery.fancybox.min.js') ?>"></script>
    <script type="text/javascript" class="init">
        $(document).on( "click", '.edit_button',function(e) {
                var judul = $(this).data('judul');
                var id = $(this).data('id');
                var keterangan = $(this).data('keterangan');
                var urutan = $(this).data('urutan');

                $(".edit_id").val(id);
                $(".edit_judul").val(judul);
                $(".edit_keterangan").val(keterangan);
                $(".edit_urutan").val(urutan);
        });
        $(document).on( "click", '.delete_button',function(e) {
                var judul = $(this).data('judul');
                var id = $(this).data('id');
                var urutan = $(this).data('urutan');

                $(".hapus_id").val(id);
                $(".hapus_judul").val(judul);
                $(".hapus_urutan").val(urutan);
        });
    </script>
<?php } else if($hal=='comment'){?>
    <script type="text/javascript" src="<?= base_url('vendor/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('vendor/dataTables.bootstrap.min.js') ?>"></script>
    <script type="text/javascript" class="init">
        $(document).ready(function() {
				$('#komentar').DataTable({
                responsive: true,
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
                });
                $('#komentar_deleted').DataTable({
                responesive: true,
                "lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]]
                });
		} );
        $(document).on( "click", '.delete_button',function(e) {
                var judul = $(this).data('judul');
                var id = $(this).data('id');
                var komentar = $(this).data('komentar');
                var nama = $(this).data('nama');

                $(".hapus_id").val(id);
                $(".hapus_judul").val(judul);
                $(".hapus_komentar").val(komentar);
                $(".hapus_nama").val(nama);
        });
    </script>
    <script type="text/javascript" class="init">
    </script>
<?php } } ?>
</body>
</html>
