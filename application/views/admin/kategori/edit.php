<?= form_open_multipart("admin/kategori/update/$data->id_kategori", [], []) ?>
<?php control_input(['name'=>'judul_kategori', 'label'=>'Judul Kategori', 'value'=>$data->judul_kategori]) ?>
<?php control_submit() ?>
<?= form_close() ?>