<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

  <!-- Meta-Information -->
  <title>Administrator S-Library</title>
  <meta charset="utf-8">
  <meta name="description" content="Glade is a clean and powerful ready to use responsive AngularJs Admin Template based on Latest Bootstrap version and powered by jQuery, Glade comes with 3 amazing Dashboard layouts. Glade is completely flexible and user friendly admin template as it supports all the browsers and looks awesome on any device.">
  <meta name="keywords" content="admin, admin dashboard, angular admin, bootstrap admin, dashboard, modern admin, responsive admin, web admin, web app, bitlers">
  <meta name="author" content="bitlers">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Vendor: Bootstrap Stylesheets http://getbootstrap.com -->
  <link href="<?= base_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/bootstrap-table/bootstrap-table.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('vendor/fancybox/jquery.fancybox.min.css') ?>" />

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin/main.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin/responsive.css') ?>">

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url('assets/img/logosmp4.png') ?>">

  <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('vendor/bootstrap-table/bootstrap-table.min.js') ?>"></script>
  <script src="<?= base_url('vendor/fancybox/jquery.fancybox.min.js') ?>"></script>
  <script src="<?= base_url('vendor/dataTables.bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('vendor/tinymce/jquery.tinymce.min.js') ?>"></script>
  <script src="<?= base_url('vendor/tinymce/tinymce.min.js') ?>"></script>

</head>

<body>

  <?php $this->load->view('admin/navbar', $navdata) ?>

  <div class="main-content">
    <div class="panel-content">


      <?php if (isset($error)) : ?>
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      <?php endif ?>
      <?php if (isset($message)) : ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          <?= $message ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif ?>

      <div class="main-title-sec">
        <div class="row">
          <div class="col-md-3 column">
            <div>
              <h2><?= $breadcrumb[count($breadcrumb) - 1] ?></h2>
            </div>
          </div>
        </div>
      </div><!-- Heading Sec -->
      <ul class="breadcrumbs">
        <li><a href="<?= base_url('admin/') ?>" title="">Admin</a></li>
        <?php foreach ($breadcrumb as $item) : ?>
          <?php if (is_array($item)) : ?>
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin/'.$item[0]) ?>"><?= $item[1] ?></a>
            </li>
          <?php else : ?>
            <li class="breadcrumb-item active"><?= $item ?></li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>