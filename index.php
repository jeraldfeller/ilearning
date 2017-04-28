<?php
include 'includes/header.php';
?>


    <!-- Content Start -->
    <div id="main">
        <!-- Slider Start-->
        <div class="fullwidthbanner-container">
                        <img src="http://admin.ilearningedu.com/images/header/<?php echo $cmsClass->getHeaderImage(); ?>"  alt="Pixma" data-lazyload="http://admin.ilearningedu.com/images/header/<?php echo $cmsClass->getHeaderImage(); ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        </div>  
        <!-- Slider End-->
        <!-- Main Content start-->

        <!-- Main Content end-->

        <!-- Product Content Start-->
        <div class="product-lead bottom-pad">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 text-center animate_afl d1">

                            <video id="my-video" class="video-js" controls preload="auto" width="570" height="420" autoplay
                                   poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                                <source src="video/test.mp4" type='video/mp4'>
                                <p class="vjs-no-js">
                                    To view this video please enable JavaScript, and consider upgrading to a web browser that
                                    <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                                </p>
                            </video>

                            <script src="http://vjs.zencdn.net/5.19.1/video.js"></script>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 animate_afr d3">
                            <div class="app-service">
                                <h3>Pixma App Services</h3>
                                <h4>We provide all kinds of iPhone application design and development services.</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Vivamus diam diam, fermentum sed dapibus eget, egestas sed eros. Lorem fermentum ipsum dolor sit amet.Lorem fermentum diam diam.
                                </p>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>
                                <div class="divider"></div>
                                <div class="learnmore">
                                    <a class="btn-special btn-grey" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Content end-->
        <!-- Latest Posts start -->
        <div class="latest-posts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 com-sm-12 col-xs-12">
                        <h3 class="title">Our Teachers</h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="blog-showcase col-lg-12 col-md-12 col-sm-12 col-xs-12 animate_afb d1">
                        <ul>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t1.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t1.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">Ma. Mae Santos</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t2.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t2.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">John Doe</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                            <li class="">
                                <div class="blog-showcase-thumb col-lg-4">
                                    <div class="post-body">
                                        <a class="post-item-link" href="img/teachers/t3.jpg" data-rel="prettyPhoto"><span class="post-item-hover"></span><span class="fullscreen"><i class="fa fa-search"></i></span><img alt="" src="img/teachers/t3.jpg"></a>
                                    </div>
                                </div>
                                <div class="blog-showcase-extra-info col-lg-4">
                                    <span><a href="#">Instructor</a></span>
                                    <h4><a href="#" class="title">Mary Claire Sumbang</a></h4>
                                    <p>Mauris sed mauris bibendum est imperdiet porttitor tincidunt at lorem. Proin augue massa</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
        <!-- Latest Posts End -->
        <!-- Our Clients Start-->
        <div class="our-clients">
            <div class="bg-overlay">
                <div class="container">
                    <div class="row">
                        <div class="client">
                            <div class="client-logo">

                                <img src="img/ilearning_system.png" style="width: 100%; height: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Clients End -->
    </div>
    <!-- Content End -->
    <?php include 'includes/footer.php'; ?>