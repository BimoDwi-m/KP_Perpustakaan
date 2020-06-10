<?= form_open_multipart("admin/buku/update/$data->id_buku", [], []) ?>
<?php control_input(['name'=>'judul_buku', 'label'=>'Judul Buku', 'value'=>$data->judul_buku]) ?>
<?php control_input(['name'=>'pengarang', 'label'=>'Pengarang', 'value'=>$data->pengarang]) ?>
<?php control_input(['name'=>'penerbit', 'label'=>'Penerbit', 'value'=>$data->penerbit]) ?>
<?php control_input(['name'=>'tahun', 'label'=>'Tahun', 'value'=>$data->tahun]) ?>
<?php control_input(['name'=>'halaman', 'label'=>'Halaman', 'value'=>$data->halaman]) ?>
<?php control_input(['name'=>'id_kategori', 'label'=>'Kategori', 'value'=>$data->id_kategori]) ?>
<?php control_option(['name'=>'lokasi', 'label'=>'Jenis Kelamin', 'value'=>$data->lokasi,
	'options' => [(object)[ 'k' => 'Novel' ],(object)[ 'k' => 'Majalah' ],(object)[ 'k' => 'Referensi' ],(object)[ 'k' => 'Cerita Anak' ],(object)[ 'k' => 'Al-Quran' ],(object)[ 'k' => 'Pertanian' ],(object)[ 'k' => 'Masakan' ],(object)[ 'k' => 'Teknologi' ],(object)[ 'k' => 'Peternakan' ],(object)[ 'k' => 'Olahraga' ],(object)[ 'k' => 'Kesenian' ],(object)[ 'k' => 'Bahasa' ],(object)[ 'k' => 'Motivasi' ]], 'option_key' => 'k', 'option_value' => 'k']) ?>
<?php control_textarea(['name'=>'sinopsis', 'label'=>'Sinopsis', 'value'=>$data->sinopsis]) ?>
<?php control_input(['name'=>'id_lokasi', 'label'=>'Lokasi', 'value'=>$data->id_lokasi]) ?>
<?php control_input(['name'=>'stok', 'label'=>'Lokasi', 'value'=>$data->stok]) ?>
<?php control_image(['name'=>'cover', 'label'=>'Cover', 'value'=>$data->cover, 'folder'=>'cover']) ?>
<?php control_input(['name'=>'rating', 'label'=>'Rating', 'value'=>$data->rating]) ?>
<?php control_input(['name'=>'best', 'label'=>'Best', 'value'=>$data->best]) ?>
<?php control_submit() ?>
<?= form_close() ?>