<template>
    <div style="background-color: #ffffff">
        
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <a href="index.html" class="logo">
                                LOGO HERE
                                <!-- <img src="img/logo-1.png" alt=""> -->
                            </a>
                            <!-- ***** Search End ***** -->
                            <!-- ***** Menu Start ***** -->
                            <ul class="nav">
                                <li>
                                    <a class="active">
                                        <router-link to="/home" >
                                            Home
                                        </router-link>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a class="">
                                        <router-link to="/categories"  >
                                            Categories
                                        </router-link>
                                    </a>
                                </li> -->
                                <li>
                                    <a class="">
                                        <router-link to="/photos"  >
                                            Photos
                                        </router-link>
                                    </a>
                                </li>
                                <li>
                                    <a class="">
                                        <router-link to="/videos" >
                                            Videos
                                        </router-link>
                                    </a>
                                </li>
                            </ul>   
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                <!-- ***** Banner Start ***** -->
                <div class="main-banner">
                    <div class="row">
                    <div class="col-lg-7">
                        <div class="header-text">
                        <h4><em>Digital Assets</em> Management System</h4>
                        <div class="main-button">
                            <a>
                                <router-link to="/categories">
                                    Browse Here
                                </router-link>
                            </a>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="most-popular">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="heading-section">
                        <h4><em>Latest</em> Events</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                <img src="img/dummy/1.jpg" alt="">
                                <h4>Title<br><span>Category</span></h4>
                                <ul>
                                    <li>
                                        <div class="main-button">
                                        <a href="#">View</a>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                <img src="img/dummy/2.jpg" alt="">
                                <h4>Title<br><span>Category</span></h4>
                                <ul>
                                    <li>
                                        <div class="main-button">
                                        <a href="#">View</a>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                <img src="img/dummy/3.jpg" alt="">
                                <h4>Title<br><span>Category</span></h4>
                                <ul>
                                    <li>
                                        <div class="main-button">
                                        <a href="#">View</a>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="item">
                                <img src="img/dummy/4.jpg" alt="">
                                <h4>Title<br><span>Category</span></h4>
                                <ul>
                                    <li>
                                        <div class="main-button">
                                        <a href="#">View</a>
                                        </div>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-button">
                                    <a>
                                        <router-link to="/photos">
                                            Browse Photos
                                        </router-link>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="gaming-library">
                    <div class="col-lg-12">
                        <div class="heading-section">
                            <h4><em>Latest</em> Coverage</h4>
                        </div>
                        <div class="item">
                            <ul>
                            <li><img src="img/dummy/5.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Title A</h4><span>Title</span></li>
                            <li><h4>0:00</h4><span>Duration</span></li>
                            <li><h4>Category A</h4><span>Category</span></li>
                            <li><h4>Date A</h4><span>Date</span></li>
                            <li><div class="main-border-button"><a href="#">Watch</a></div></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                            <li><img src="img/dummy/6.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Title A</h4><span>Title</span></li>
                            <li><h4>0:00</h4><span>Duration</span></li>
                            <li><h4>Category A</h4><span>Category</span></li>
                            <li><h4>Date A</h4><span>Date</span></li>
                            <li><div class="main-border-button"><a href="#">Watch</a></div></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                            <li><img src="img/dummy/7.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Title A</h4><span>Title</span></li>
                            <li><h4>0:00</h4><span>Duration</span></li>
                            <li><h4>Category A</h4><span>Category</span></li>
                            <li><h4>Date A</h4><span>Date</span></li>
                            <li><div class="main-border-button"><a href="#">Watch</a></div></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                            <li><img src="img/dummy/8.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Title A</h4><span>Title</span></li>
                            <li><h4>0:00</h4><span>Duration</span></li>
                            <li><h4>Category A</h4><span>Category</span></li>
                            <li><h4>Date A</h4><span>Date</span></li>
                            <li><div class="main-border-button"><a href="#">Watch</a></div></li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul>
                            <li><img src="img/dummy/4.jpg" alt="" class="templatemo-item"></li>
                            <li><h4>Title A</h4><span>Title</span></li>
                            <li><h4>0:00</h4><span>Duration</span></li>
                            <li><h4>Category A</h4><span>Category</span></li>
                            <li><h4>Date A</h4><span>Date</span></li>
                            <li><div class="main-border-button"><a href="#">Watch</a></div></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                    <div class="main-button">
                        <a href="https://www.youtube.com/@dostvideos" target="_blank">View Our Youtube</a>
                    </div>
                    </div>
                </div>
                <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
            </div>
        </div>


    </div>
</template>

