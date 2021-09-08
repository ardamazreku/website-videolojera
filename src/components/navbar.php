<?php include "src/components/search.php";?>

<header class="nk-header nk-header-opaque">
<!-- START: Top Contacts -->
<div class="nk-contacts-top">
    <div class="container">
        <div class="nk-contacts-right">
            <ul class="nk-contacts-icons">
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSearch">
                        <span class="fa fa-search"></span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span class="fa fa-user"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Top Contacts -->

<!-- START: Navbar -->
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                <a href="index.php" class="nk-nav-logo">
                    <img src="src/assets/images/logo.png" alt="SteCord" width="90">
                </a>
            <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                <li>
                    <a href="index.php"> Home </a>
                </li>
                <li>
                    <a href="forum-topics.php"> Forum </a
                </li>
                <li>
                    <a href="blog-list.php"> Blog </a>
                </li>
                <li>
                    <a href="gallery.php"> Gallery </a>
                </li>
                <li>
                    <a href="news.php"> News </a>
                </li>
                <li>
                    <a href="store.php"> Store </a>
                </li>
            </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END: Navbar -->
</header>
<!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.php">
                <img src="src/assets/images/logo.png" alt="" width="40">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav"></ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->