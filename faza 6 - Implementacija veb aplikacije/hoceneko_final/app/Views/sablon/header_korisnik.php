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
    <link rel="shortcut icon" href="/img/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/script.js"></script>
    <title>hoceneko</title>
</head>
<body class="bg" onload="promeniBojuNav()">
    <div class="cotainer-fluid">
        <!-- pocetak header-a korisnika -->
        <div class="row headerKorisnik">
            <div class="col-sm-4 col-md-4 col-lg-4 logoMesto">
                <a href="<?= site_url("$controller/index")?>">
                    <img id="logo" src="/img/logo.png" onmousedown="storeActiveNav('pocetna')">
                </a>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="row headerBtns">
                    <div class="col-sm-6 col-md-6 col-lg-6">

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 colHdrBtnsAndName">
                        <span>Dobrodosli, </span>
                         <?php  echo $korisnik->ime." ".$korisnik->prezime." "; ?>  
                         <?= anchor("$controller/logout", "Izloguj se",'class="btn btn-sm btn-info" onmousedown="storeActiveNav("pocetna")"') ?>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2">

                </div>
                <div class="row headerKorisnikNavbar">
                    <div class="col-sm-8 col-md-8 col-lg-8 d-flex p-2 justify-content-left  align-items-center navbar-inverse">
                          <nav class="navbar navbar-expand-xl navbar-dark ">
                            <div class="collapse navbar-collapse" id="navbarText">
                              <ul class="navbar-nav mr-auto">
                                <li class="nav-item active" id="pocetna"  onmousedown="storeActiveNav(this.id)">
                                    <a class="nav-link" href="<?= site_url("$controller/index")?>">Pocetna </a>
                                </li>
                                <li class="nav-item" id="mojProfil" onmousedown="storeActiveNav(this.id)">
                                  <a class="nav-link" href="<?= site_url("$controller/mojProfil")?>" >Moj profil </a>
                                </li>
                                 <li class="nav-item" id="mojeObjave" onmousedown="storeActiveNav(this.id)">
                                  <a class="nav-link" href="<?= site_url("$controller/mojeObjave")?>" >Moje objave </a>
                                </li>
                                <li class="nav-item" id="dodajObjavu" onmousedown="storeActiveNav(this.id)">
                                    <a class="nav-link" href="<?= site_url("$controller/postavljanjeObjave")?>" >Dodaj objavu</a>
                                  </li>
                                  <li class="nav-item" id="podrska" onmousedown="storeActiveNav(this.id)">
                                    <a class="nav-link" href="<?= site_url("$controller/podrska")?>">Podrska</a>
                                  </li>
                                <li class="nav-item" id="info" onmousedown="storeActiveNav(this.id)">
                                  <?=anchor("$controller/pregledInfo", 'O nama', array('class' => 'nav-link'));?>
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
        <!-- kraj header-a za korisnika -->