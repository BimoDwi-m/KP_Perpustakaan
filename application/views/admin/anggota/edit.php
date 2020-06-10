<?= form_open_multipart("admin/anggota/update/$data->id_anggota", [], []) ?>
<?php control_input(['name'=>'nia', 'label'=>'NIA', 'value'=>$data->nia]) ?>
<?php control_input(['name'=>'nama', 'label'=>'Nama', 'value'=>$data->nama]) ?>
<?php control_option(['name'=>'jenis_kelamin', 'label'=>'Jenis Kelamin', 'value'=>$data->jenis_kelamin,
	'options' => [['k' => 'laki-laki'], ['k' => 'perempuan']], 'option_key' => 'k', 'option_value' => 'k']) ?>
<?php control_input(['name'=>'tempat_lahir', 'label'=>'Tempat Lahir', 'value'=>$data->jenis_kelamin]) ?>
<?php control_input(['name'=>'tgl_lahir', 'label'=>'Tanggal Lahir', 'value'=>$data->tgl_lahir]) ?>
<?php control_input(['name'=>'jenis', 'label'=>'Jenis', 'value'=>$data->jenis]) ?>
<?php control_submit() ?>
<?= form_close() ?>