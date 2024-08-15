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
                                    <a class="">
                                        <router-link to="/home">
                                            Home
                                        </router-link>
                                    </a>
                                </li>
                                <li>
                                    <a class="active">
                                        <router-link to="/categories" >
                                            Categories
                                        </router-link>
                                    </a>
                                </li>
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

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="thumb">
                                <img src="img/blog-med-img-1.jpg" alt="" style="border-radius: 23px;">
                               <div class="item" style="margin-top:10px">
                                    <h4>Title Here</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec enim nibh, convallis sit amet dignissim sed, cursus eu diam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="top-streamers">
                                <div class="heading-section">
                                <h4><em>Top</em> Coverages</h4>
                                </div>
                                <ul>
                                <li>
                                    <span>01</span>
                                    <h6>Video Title</h6>
                                    <div class="main-button">
                                    <a href="#">Browse</a>
                                    </div>
                                </li>
                                <li>
                                    <span>02</span>
                                    <h6>Video Title</h6>
                                    <div class="main-button">
                                    <a href="#">Browse</a>
                                    </div>
                                </li>
                                <li>
                                    <span>03</span>
                                    <h6>Video Title</h6>
                                    <div class="main-button">
                                    <a href="#">Browse</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04</span>
                                    <h6>Video Title</h6>
                                    <div class="main-button">
                                    <a href="#">Browse</a>
                                    </div>
                                </li>
                                <li>
                                    <span>05</span>
                                    <h6>Video Title</h6>
                                    <div class="main-button">
                                    <a href="#">Browse</a>
                                    </div>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col-lg-12">
                            <div class="featured-games header-text">
                                <div class="heading-section">
                                <h4><em>Featured</em> Coverage</h4>
                                </div>
                                <div class="owl-features owl-carousel">
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="item">
                                        <div class="thumb">
                                            <img src="img/gallery-img-1-3col.jpg" alt="">
                                            <div class="hover-effect">
                                                <h6>Category</h6>
                                            </div>
                                        </div>
                                        <h4>Title<br><span>Date</span></h4>
                                        <ul>
                                            <li>
                                                <div class="main-button">
                                                    <router-link to="/photos">
                                                        Browse
                                                    </router-link>
                                                </div>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12" style="margin-top: 15px">
                        <div class="content">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-border-button">
                                        <a href="#">Visit our Youtube now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
            </div>

            
            </div>
        </div>


    </div>
</template>

