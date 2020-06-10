<?php control_table([
    'toolbar' => get_control_buttons([[
      'href' => 'create',
      'label' => 'Tambah',
      'icon' => 'fa fa-plus',
      'style' => 'btn btn-success ml-2',
    ]])
  ], [
    ['field'=>'nia', 'label'=>'NIA'],
    ['field'=>'nama', 'label'=>'Nama'],
    ['field'=>'jenis_kelamin', 'label'=>'Jenis Kelamin'],
    ['field'=>'tempat_lahir', 'label'=>'Tempat Lahir'],
    ['field'=>'tgl_lahir', 'label'=>'Tanggal Lahir'],
    ['field'=>'jenis', 'label'=>'Jenis Anggota'],
    ['field'=>'id_anggota',
     'label'=>'Opsi',
     'formatter'=> get_control_buttons([[
        'href'=>'edit/${value}',
        'style'=>'btn btn-sm btn-warning',
        'icon'=>'fa fa-edit',
      ], [
        'href'=>'delete/${value}',
        'style'=>'btn btn-sm btn-danger',
        'icon'=>'fa fa-trash',
        'confirm'=>'Yakin menghapus item ini?'
      ]])
    ],
  ]);
