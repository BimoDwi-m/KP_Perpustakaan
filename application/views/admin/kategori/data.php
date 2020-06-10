<?php control_table([
    'toolbar' => get_control_buttons([[
      'href' => 'create',
      'label' => 'Tambah',
      'icon' => 'fa fa-plus',
      'style' => 'btn btn-success ml-2',
    ]])
  ], [
    ['field'=>'judul_kategori', 'label'=>'Judul Kategori'],
    ['field'=>'id_kategori',
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
