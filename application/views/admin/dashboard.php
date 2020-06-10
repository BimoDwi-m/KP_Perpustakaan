<div class="main-content-area">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Anggota</strong></span>
          <h4>
            <?= $navdata['anggota'] ?>
          </h4>
          <i class="fa fa-users green-bg"></i>
          <h5>Total Anggota : <?= $navdata['anggota'] ?></h5>
        </div>
      </div><!-- Widget -->
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Buku</strong></span>
          <h4>
            <?= $navdata['buku'] ?>
          </h4>
          <i class="fa fa-book red-bg"></i>
          <h5>Total Stok Buku : <?= $stok[0]; ?></h5>
        </div>
      </div><!-- Widget -->
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Kategori</strong></span>
          <h4>
            <?= $kategori ?>
          </h4>
          <i class="fa fa-tags skyblue-bg"></i>
          <h5>Total Kategori Buku : <?= $kategori ?></h5>
        </div>
      </div><!-- Widget -->
    </div>


    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Peminjaman</strong></span>
          <h4>
            <?= $Peminjaman ?>
          </h4>
          <i class="fa fa-exchange green-bg"></i>
          <h5>Total Peminjaman dikembalikan : <?= $peminjamkembali ?></h5>
        </div>
      </div><!-- Widget -->
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Pengembalian</strong></span>
          <h4>
            <?= $pengembalian ?>
          </h4>
          <i class="fa fa-users red-bg"></i>
          <h5>Total Pengembalian Buku : <?= $pengembalian ?></h5>
        </div>
      </div><!-- Widget -->
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="widget">
        <div class="quick-report-widget">
          <span><strong>Komentar</strong></span>
          <h4>
            <?= $komentar ?>
          </h4>
          <i class="fa fa-comments green-bg"></i>
          <h5>Total Komentar : <?= $komentar ?></h5>
        </div>
      </div><!-- Widget -->
    </div>

  </div>
</div>