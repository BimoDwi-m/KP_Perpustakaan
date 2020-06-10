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
  <link rel="stylesheet" type="text/css" href="<?= base_url('vendor/datatables/dataTables.bootstrap.min.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('vendor/fancybox/jquery.fancybox.min.css') ?>" />

  <!-- Our Website CSS Styles -->
  <link rel="stylesheet" href="<?= base_url('vendor/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin/main.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin/responsive.css') ?>">

  <!-- Favicons -->
  <link rel="icon" href="<?= base_url('assets/img/logosmp4.png') ?>">

</head>

<body>

  <?php $this->load->view('admin/navbar', $navdata) ?>

  <div class="main-content">
  <div class="panel-content">

    <div class="main-title-sec">
      <div class="row">
        <div class="col-md-3 column">
          <div >
            <h2><?= $breadcrumb[count($breadcrumb) - 1] ?></h2>
          </div>
        </div>
      </div>
    </div><!-- Heading Sec -->
    <ul class="breadcrumbs">
      <li><a href="<?= base_url('admin/')?>" title="">Admin</a></li>
      <?php foreach ($breadcrumb as $b) : ?>
        <li><a href="#" title=""><?=$b?></a></li>
      <?php endforeach ?>
    </ul>