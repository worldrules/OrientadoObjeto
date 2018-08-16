<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <title><?php echo isset($this->tituloPagina) ? $this->tituloPagina." | ". \Config\SiteInfo::$nome : \Config\SiteInfo::$nome ;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<?php $this->layout('layout.nav'); ?>
<div class="container">

