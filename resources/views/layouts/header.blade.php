<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $tittle}} | ByteRest</title>
    <!-- Favicon icon -->
    <link rel="icon"  href="{{ asset('assets/img/logo.svg') }}"  type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet"  href="{{ asset('assets/fonts/feather.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/fonts/fontawesome.css') }}" >
    <link rel="stylesheet"  href="{{ asset('assets/fonts/material.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('assets/css/styles-preset.css') }}" id="main-style-link">


	<!-- disenos -->
    <link rel="stylesheet" href="{{ asset('assets/css/diseno.css') }}" id="main-style-link">


</head>

<body class="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="{{ asset('assets/img/logo.svg') }}" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar @@menuclass">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="{{ asset('assets/img/logo.svg') }}" alt="" class="logo logo-lg">
					<img src="{{ asset('assets/img/logo.svg') }}" alt="" class="logo logo-sm">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					@include('layouts.menu-list')
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header @@headerclass">
		<div class="header-wrapper">
            @include('layouts.header-content')
		</div>
	</header>
	<!-- [ Header ] end -->


