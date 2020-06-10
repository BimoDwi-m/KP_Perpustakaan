<?php control_table([
    'toolbar' => get_control_buttons([[
      'href' => 'create',
      'label' => 'Tambah',
      'icon' => 'fa fa-plus',
      'style' => 'btn btn-success ml-2',
    ]])
  ], [
    ['field'=>'judul_buku', 'label'=>'Judul Buku'],
    ['field'=>'pengarang', 'label'=>'Pengarang'],
    ['field'=>'penerbit', 'label'=>'Penerbit'],
    ['field'=>'tahun', 'label'=>'Tahun'],
    ['field'=>'halaman', 'label'=>'Halaman'],
    ['field'=>'id_kategori', 'label'=>'Kategori'],
    ['field'=>'lokasi', 'label'=>'Lokasi'],
    ['field'=>'id_buku',
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
