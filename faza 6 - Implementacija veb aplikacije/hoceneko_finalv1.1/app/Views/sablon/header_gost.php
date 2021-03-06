<?php
/**
 * @author Aleksandra Bogicevic 0390/17
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap-4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-4.4.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/script.js"></script>
    <title>hoceneko</title>
</head>
<body class="bg"  onload="promeniBojuNav()">
    <div class="cotainer-fluid">
        <!-- pocetak header-a gosta -->
        <div class="row headerGost">
            <div class="col-sm-4 col-md-4 col-lg-4 logoMesto">
                <a href="<?= site_url("Gost/index")?>">
                    <img id="logo" src="/img/logo.png"  onmousedown="storeActiveNav('pocetna')">
                </a>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="row headerBtns">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 colHdrBtns">
                        <?= anchor("Gost/login", "Uloguj se",'class="btn btn-sm btn-info"') ?> 
                         <?= anchor("Gost/register", "Registruj se",'class="btn btn-sm btn-info" ') ?>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">

                </div>
                <div class="row headerGostNavbar">
                    <div class="col-sm-8 col-md-8 col-lg-8 d-flex p-2 justify-content-left  align-items-center navbar-inverse">
                            <nav class="navbar navbar-expand-lg navbar-dark ">
                                <div class="collapse navbar-collapse" id="navbarText">
                                  <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active" id="pocetna"  onmousedown="storeActiveNav(this.id)">
                                        <a class="nav-link" href="<?= site_url("Gost/index")?>" onclick="promeniBojuNav()">Pocetna </a>
                                    </li>
                                    <li class="nav-item" id="info" onmousedown="storeActiveNav(this.id)">
                                        <a class="nav-link" href="<?= site_url("Gost/pregledInfo")?>"  onclick="promeniBojuNav()">O nama </a>
                                    </li>
                                    <li class="nav-item" id="podrska" onmousedown="storeActiveNav(this.id)">
                                      <a class="nav-link" href="<?= site_url("Gost/podrska")?>"  onclick="promeniBojuNav()">Podrska</a>
                                    </li>
                                  </ul>
                                </div>
                            </nav>
                    </div>
                    <div class="col-sm-2 col-md-2 col-lg-2">

                    </div>
                </div>
            </div>
        </div>
        <!-- kraj header-a za gosta -->