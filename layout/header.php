<?php

@session_start();

include "koneksi.php";

if (@$_SESSION['admin'] || @$_SESSION['accounting']) {
?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
        <title>APLIKASI AKUNTANSI SEDERHANA</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://kit.fontawesome.com/08bf8df301.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <style>
            .jumbotron {
                background-color: #A2D9FF;
                padding-top: 2rem;
            }
            #jurnal {
                background-color: #A2D9FF;
            }
            section {
                padding-top: 5rem;
            }
        </style>
        
    </head>

    <body id="Home">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow navbar-opacity-25" id="mainNav">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#page-top">APLIKASI AKUNTANSI SEDERHANA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#Home">Halaman Utama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#Tentang">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jurnal
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink" role="menu">
                                <li><a class="dropdown-item" href="jurnalPembelian.php">Jurnal Pembelian</a></li>
                                <li><a class="dropdown-item" href="jurnalPenjualan.php">Jurnal Penjualan</a></li>
                                <li><a class="dropdown-item" href="jurnalkas.php">Jurnal Penerimaan Kas</a></li>
                                <li><a class="dropdown-item" href="jurnalpengeluaran.php">Jurnal Pengeluaran Kas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="jurnalumum.php" class="nav-link">Jurnal Umum </a>
                        </li>
                        <li class="nav-item">
                            <a href="bukubesar.php" class="nav-link">Buku Besar </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="bi bi-person"> Akun</i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
<?php
}
?>