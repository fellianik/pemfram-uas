<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard.css') ?>">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css" integrity="sha512-6c4nX2tn5KbzeBJo9Ywpa0Gkt+mzCzJBrE1RB6fmpcsoN+b/w/euwIMuQKNyUoU/nToKN3a8SgNOtPrbW12fug==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>

    <script src="<?php echo base_url('assets/bootstrap.bundle.min.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/feather.min.js.download') ?>"></script>
    <script src="<?php echo base_url('assets/chart.umd.min.js.download') ?>"></script>


    <header class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="<?php echo base_url("/index.php") ?>">Sistem Informasi Perpustakaan</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <div class="navbar-nav">
            <div class="nav-item text-nowrap px-5">
                <p class="fs-6 text-white  m-0">Hi, <?php echo $this->session->userdata['nama']; ?></p>
                <!-- <a class="nav-link px-3" href="<?php echo base_url('index.php/login/logout') ?>">Log out</a> -->
            </div>
        </div>
    </header>