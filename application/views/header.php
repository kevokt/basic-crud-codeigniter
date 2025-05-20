<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>

<head>
    <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>"
        media="screen,projection" />
    <title>Sistem Multimedia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
    @media only screen and (min-width: 993px) {
        .text-offset {
            position: relative;
            left: 45%;
        }
        }
</style>
</head>

<body>
    <script type="text/javascript" src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>

    <div class="navbar-fixed " style="text-align: center;">
        <nav>
            <div class="nav-wrapper cyan darken-2">
                <a href="<?= site_url(); ?>" class="brand-logo text-offset" >PROJECT UJIAN</a>
                
            </div>
        </nav>
    </div>


    <ul class="sidenav" id="mobile-demo">
        <li><a href="#">Login</a></li>
        <li class="divider"></li>
        <li><a href="<?= site_url('welcome/create'); ?>">Create</a></li>
    </ul>

    <main class="container">

