<?php control_table([
  ], [
    ['field'=>'id_buku', 'label'=>'Judul Buku'],
    ['field'=>'nama', 'label'=>'Nama'],
    ['field'=>'isi_komentar', 'label'=>'Isi Komentar'],
    ['field'=>'tgl', 'label'=>'Tanggal'],
    ['field'=>'id_komentar',
     'label'=>'Opsi',
     'formatter'=> get_control_buttons([[
        'href'=>'delete/${value}',
        'style'=>'btn btn-sm btn-danger',
        'icon'=>'fa fa-trash',
        'confirm'=>'Yakin menghapus item ini?'
      ]])
    ],
  ]);
