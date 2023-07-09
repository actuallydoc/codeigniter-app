<?php
// Get the current URL
$currentURL = $_SERVER['REQUEST_URI'];

// Define the base URL
$baseURL = "/";

// Check if the current URL matches the base URL
if ($currentURL === $baseURL) {
    $activeClass = "active";
} else {
    $activeClass = "";
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Codeigniter page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<section>
    <nav id="navbar" class="navbar navbar-expand-lg sticky-top navbar-light" style="transition: background-color 0.5s ease;">
        <div class="container" style="color: whitesmoke">
            <a class="navbar-brand" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-smartwatch" viewBox="0 0 16 16">
                    <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5V5z"/>
                    <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667zM4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3z"/>
                </svg>
                MojeUreKlon
            </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $activeClass ?>"" aria-current="page" href="#">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">O produktu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Brezplačni preizkus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
                <li class="nav-item ">
                <li>  <a class="nav-link btn btn-link mx-3" href="/blog/create">Create</a></li>
                </li>
                <li class="nav-item ">
                <li>  <a class="nav-link btn btn-link mx-3">Prijava</a></li>
                </li>
            </ul>
            <form class="d-flex" method="get" action="/posts" id="searchForm">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
                <button class="btn btn-secondary" type="submit">Search</button>
            </form>
        </div>
    </div>
    <a id="button" href="#" class="btn btn-secondary px-5 py-3 floating-button bi bi-arrow-up" style="color:white">Na začetek</i></a>
</nav>
<body style="background-image: url('https://mojeure.si/img/header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center; position: sticky; top: 0; height: 100vh;">

<style>
    .floating-button {
        position: fixed;
        bottom: -70px;
        right: 20px;
        z-index: 9999;
        transition: bottom 0.3s;
    }
    .show-floating-button {
        bottom: 20px;
    }


</style>

<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the form from submitting

        var searchInput = document.getElementById('searchInput').value;
        var formAction = '/posts/' + encodeURIComponent(searchInput); // Append input value to the action URL

        // Update the action attribute of the form
        document.getElementById('searchForm').setAttribute('action', formAction);

        // Submit the form
        document.getElementById('searchForm').submit();
    });
    const navbar = document.getElementById('navbar');
    const button = document.getElementById('button');
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY || window.pageYOffset;
        if (scrollPosition > 100) {
            button.classList.add('show-floating-button');
            navbar.style.background = "";
            navbar.classList.add('bg-light');
        } else {
            button.classList.remove('show-floating-button');
            navbar.classList.remove('bg-light');
        }
    });
</script>