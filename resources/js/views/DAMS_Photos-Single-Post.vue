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

                <!-- ***** Featured Start ***** -->
                <div class="row">
                    <div class="col-lg-12">
                    <div class="feature-banner header-text">
                        <div class="row">
                        <div class="col-lg-12">
                            <img src="img/blog-med-img-1.jpg" alt="" style="border-radius: 23px;">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="game-details">
                    <div class="row">
                    <div class="col-lg-12">
                        <h2>Title</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="content">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-2">
                                <img src="img/flickr-img-1.jpg" alt="" style="border-radius: 23px; margin-bottom: 30px;">
                            </div>
                            <div class="col-lg-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec enim nibh, convallis sit amet dignissim sed, cursus eu diam. Phasellus porttitor consequat magna et lacinia. Cras semper malesuada nisi vitae aliquet. Cras tincidunt sed nulla ut eleifend. In lobortis lobortis pellentesque. Nunc id imperdiet nunc.</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="left-info">
                                    <div class="left">
                                        <h4>Category Title</h4>
                                        <span>Tags</span>
                                    </div>
                                    <ul>
                                        <li>Category Title</li>
                                        <li>#Tag1, #Tag2, #Tag3</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="left-info">
                                    <div class="left">
                                        <h4>Category Title</h4>
                                        <span>Tags</span>
                                    </div>
                                    <ul>
                                        <li>Category Title</li>
                                        <li>#Tag1, #Tag2, #Tag3</li>
                                    </ul>
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
        </div>

    </div>
</template>

