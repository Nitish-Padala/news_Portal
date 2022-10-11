<?php include('include/header.php'); ?>
<?php include('controlpanel/config/connection.php'); ?>



<!-- end rt-mobile-header -->

<!-- Start Main -->
<main>
    <?php
    $post_id = intval($_GET['id']);
    $sql = mysqli_query($conn, "select * from `forms` WHERE id = $post_id");
    $row = mysqli_fetch_assoc($sql);

    $query = mysqli_query($conn, "SELECT name FROM categories where id= '" . $row['categorie_id'] . "'");
    $by = mysqli_fetch_assoc($query);

    $sqlquery = mysqli_query($conn, "SELECT name FROM user where id= '".$row['created_by']."'");
    $data = mysqli_fetch_assoc($sqlquery);

    $dataquery = mysqli_query($conn,"SELECT * FROM forms WHERE categorie_id ='" . $row['categorie_id'] . "'");
    






    ?>

    <!-- Start inner page Banner -->
    <div class="banner inner-banner">
        <div class="container">
            <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="index.php">
                            <?php echo $by['name']; ?>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="rt-text-truncate">
                            Best Tech Accessories 10 Work From Home Essentials We Have Delivery For All Area
                        </span>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End inner page Banner -->

    <!-- start rt-sidebar-section-layout-2 -->
    <section class="rt-sidebar-section-layout-2">
        <div class="container">
            <div class="row gutter-40 sticky-coloum-wrap">

                <div class="col-xl-9 sticky-coloum-item">
                    <div class="rt-left-sidebar-sapcer-5">

                        <div class="rt-main-post-single grid-meta">

                            <!-- start post header -->
                            <div class="post-header">
                                <span class="rt-cat-primary"><?php echo $by['name']; ?></span>
                                <h2 class="title">
                                    <?php echo $row['title']; ?>
                                </h2>
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            <span class="rt-meta">
                                                by <a href="author.html" class="name"><?php echo $data['name']; ?></a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                <?php echo $row['created_at']; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-comments icon"></i>
                                                250 Comments
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="far fa-clock icon"></i>
                                                2 minute read
                                            </span>
                                        </li>
                                        <li>
                                            <span class="rt-meta">
                                                <i class="fas fa-signal icon"></i>
                                                3,250 Views
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="share-box-area">
                                    <div class="left-area">
                                        <div class="social-share-box">
                                            <div class="share-text mb--10">
                                                <span class="rt-meta">
                                                    <i class="fas fa-share-alt icon"></i>
                                                    Share: 1,509
                                                </span>
                                            </div>
                                            <ul class="social-share-style-1 mb--10">
                                                <li>
                                                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank" href="https://twitter.com/">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank" href="https://dribbble.com/">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="right-area">
                                        <ul class="social-share-style-1 layout-2 mb--10">
                                            <li>
                                                <a target="_blank" href="https://www.facebook.com/">
                                                    <i class="social-icon fas fa-envelope"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://twitter.com/">
                                                    <i class="social-icon fas fa-print"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end post-header -->

                            <!-- strat post img -->
                            <figure class="post-img">
                                <img src="media/post_image/<?php echo $row['image'] ?>" alt="post-img" width="960" height="520">
                            </figure>
                            <!-- end post-img -->

                            <!-- strat psot body -->
                            <div class="post-body">
                                <p class="rt-dropcap-style-1">
                                    <?php echo $row['discription']; ?>
                                </p>

                                <!-- <figure class="rt-blockquote-area">
                                    <blockquote class="rt-blockquote">
                                       <i class="fas fa-quote-left"></i>
                                       <p>
                                          when an unknown printer took a galley of type and scrambled it to make a type
                                          area
                                          specimen book It has survived not only five centuries.but also the leap
                                          introduce
                                          electronic typesetting, remaining essentially unchanged.
                                       </p>
                                       <span class="name">Willum Skeener</span>
                                    </blockquote>
                                 </figure> -->


                                <!-- middle post -->
                                <!-- <div class="single-content">
                                    <h3 class="title">Middle Post Heading</h3>
                                    <p class="mb--25">
                                       Our should never complain, complaining is a weak emotion, you got life, we
                                       breathing, we blessed. Surround yourself with angels. They
                                       never said winning was easy. Some people can’t handle success, I can. Look at the
                                       sunset, life is amazing, life is beautiful, life is what
                                       A federal government initiated report conducted by the.
                                    </p>
                                    <div class="thumb-vidided mb--30">
                                       <div class="row gutter-24">
                                          <div class="col-lg-6">
                                             <img src="media/gallery/single-post-img_1.jpg" alt="post-img" width="696"
                                                height="540">
                                          </div>
                                          <div class="col-lg-6">
                                             <p>
                                                Prom should never complain, complaining is a weak emoti you
                                                got life, we breathing, we blessed. Surround yourself with an
                                                gels. They never said winning.
                                             </p>
                                             <ul class="list-style-6">
                                                <li>Pasting their cartoon to form over bags</li>
                                                <li>Certified emergency medical technician was</li>
                                                <li>Galaxy’s Edge the best thing about</li>
                                                <li>Phone owner uses </li>
                                             </ul>
                                             <p>
                                                Prom should never complain, complaining is a weak emoti you
                                                got life, we breathing, we blessed. Surround yourself with an
                                                gels. They never said winning.Prom should never complain, com
                                                plaining is a weak emoti you got life, we breathing, we blessed
                                                urround yourself with angels. They never said winning.
                                             </p>
                                          </div>
                                       </div>
                                    </div>
                                    <p>
                                       Our should never complain, complaining is a weak emotion, you got life, we
                                       breathing, we blessed. Surround yourself with angels. They
                                       never said winning was easy. Some people can’t handle success, I can. Look at the
                                       sunset, life is amazing, life is beautiful, life is what
                                       A federal government initiated report conducted by the.
                                    </p>
                                 </div> -->


                                <!-- end post -->
                                <!-- <div class="single-content">
                                    <h3 class="title">Success is how high you bounce when you hit bottom</h3>
                                    <p class="mb--25">
                                       Our should never complain, complaining is a weak emotion, you gotlife, we
                                       breathing,
                                       we blessed. Surround yourself with angels. They
                                       never said winning was easy. Some people can’t handle success I can. Look at the
                                       sunset.Nmply dummy text of the printing and typ
                                       esetting industry. Lorem Ipsum has been the industry’s st andard dummy text ever
                                       since the 1500s, when an unknown printer took a
                                       galley of type andse aerr crambled it to make a type specimen book.
                                    </p>
                                    <div class="thumb-post-area mb--30">
                                       <div class="row gutter-24">
                                          <div class="col-lg-6">
                                             <div class="item-img">
                                                <img src="media/gallery/single-post-img_2.jpg" alt="post-img"
                                                   width="696" height="540">
                                                <a href="http://www.youtube.com/watch?v=1iIZeIy7TqM"
                                                   class="play-btn play-btn-white_lg rt-play-over">
                                                   <i class="fas fa-play"></i>
                                                </a>
                                             </div>
                                          </div>
                                          <div class="col-lg-6">
                                             <div class="item-img">
                                                <img src="media/gallery/single-post-img_3.jpg" alt="post-img"
                                                   width="696" height="540">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <p>
                                       Our should never complain, complaining is a weak emotion, you gotlife, we
                                       breathing,
                                       we blessed. Surround yourself with angels. They
                                       never said winning was easy. Some people can’t handle success I can. Look at the
                                       sunset.Nmply dummy text of the printing and typ
                                       esetting industry. Lorem Ipsum has been the industry’s st andard dummy.
                                    </p>
                                    <ul class="list-style-6 layout-2">
                                       <li>Crisp fresh iconic elegant timeless clean perfume</li>
                                       <li>Neck straight sharp silhouette and dart detail</li>
                                       <li>Machine wash cold slim fit premium stretch selvedge denim comfortable low
                                          waist</li>
                                    </ul>
                                    <p>
                                       Our should never complain, complaining is a weak emotion, you gotlife, we
                                       breathing,
                                       we blessed. Surround yourself with angels. They
                                       never said winning was easy. Some people can’t handle success I can. Look at the
                                       sunset.Nmply dummy text of the printing and typ
                                       esetting industry. Lorem Ipsum has been the industry’s st andard dummy.
                                    </p>
                                 </div> -->

                                <!-- ad banner -->
                                <div class="ad-banner-img mt--45 mb--40">
                                    <a href="#">
                                        <img src="media/gallery/ad-banner_4.jpg" alt="ad-banner" width="960" height="150">
                                    </a>
                                </div>

                            </div>
                            <!-- end post body -->

                            <!-- start social-share-box-2 -->
                            <div class="social-share-box-2 mb--40">
                                <div class="row gutter-30">
                                    <div class="col-xl-7 col-lg-6">
                                        <!-- <div class="conent-block">
                                          <h4 class="block-tile mb--20">Popular Tags:</h4>
                                          <div class="tag-list">
                                             <a href="#" class="tag-link">beautiful</a>
                                             <a href="#" class="tag-link">travel</a>
                                             <a href="#" class="tag-link">technology</a>
                                             <a href="#" class="tag-link">politics</a>
                                          </div>
                                       </div> -->
                                    </div>
                                    <div class="col-xl-5 col-lg-6 d-flex justify-content-start justify-content-lg-end">
                                        <div class="conent-block">
                                            <h4 class="block-tile mb--20">Share This Post:</h4>
                                            <ul class="social-share-style-1 ">
                                                <li>
                                                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                                                        <i class="social-icon fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="tw" target="_blank" href="https://twitter.com/">
                                                        <i class="social-icon fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="yu" target="_blank" href="https://www.youtube.com/">
                                                        <i class="social-icon fab fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dr" target="_blank" href="https://dribbble.com/">
                                                        <i class="social-icon fab fa-dribbble"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dw" target="_blank" href="https://cloud.google.com/">
                                                        <i class="social-icon fas fa-cloud"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="wh" target="_blank" href="https://www.whatsapp.com/">
                                                        <i class="social-icon fab fa-whatsapp"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end social-share-box-2 -->

                            <!-- start author box -->
                            <div class="author-box-style-1 mb--50">
                                <div class="author-img">
                                    <img src="media/profile_image/nitish.jpg" alt="nitish" width="170" height="170">
                                </div>
                                <div class="author-content">
                                    <h3 class="author-name"><?php echo $by['name']; ?></h3>
                                    <span class="author-role">Admin</span>
                                    <p class="user-desc">
                                        Tthe leap into electronic typesetting, remaining essentiallyuncha
                                        opularisedthe
                                        with
                                        the release of Letrasetsheets containingthe leap electrtypesetting remaining
                                        essentially unchanged.
                                    </p>
                                    <ul class="social-style-5">

                                        <li>
                                            <a target="_blank" href="https://www.facebook.com/">
                                                <i class="social-icon fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://twitter.com/">
                                                <i class="social-icon fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.pinterest.com/">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://www.instagram.com/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- end author box -->

                            <!-- start post-pagination-box -->
                            <div class="post-pagination-box mb--40">

                                <div class="row gutter-30">
                                    <div class="col-lg-6">
                                        <div class="next-prev-wrap">
                                            <div class="item-icon">
                                                <a href="#">
                                                    <i class="fas fa-chevron-left"></i>
                                                    Previous Article
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    <a href="#">
                                                        Top Best Compu follower career games are
                                                        Speak Market Reseach.
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="next-prev-wrap next-wrap">
                                            <div class="item-icon">
                                                <a href="#">
                                                    Next Article
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">
                                                    <a href="#">
                                                        Best Technology Compu follower Career
                                                        Speak Market Reseach
                                                    </a>
                                                </h4>
                                                <span class="rt-meta">
                                                    <i class="far fa-calendar-alt icon"></i>
                                                    DECEMBER 9, 2022
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end pagination box -->

                            <!-- start blog-post-comment -->
                            <div class="blog-post-comment mb--50">
                                <form action="#" class="rt-contact-form comments-form-style-1">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="name">Your Name *</label>
                                                <input type="text" name="name" id="name" class="form-control" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="email">E-mail *</label>
                                                <input type="text" name="email" id="email" class="form-control" data-error="Email field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="rt-form-group">
                                                <label for="website">Website *</label>
                                                <input type="text" name="website" id="website" class="form-control" data-error="Web Url field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="rt-form-group">
                                                <label for="comment">Comments *</label>
                                                <textarea name="comment" id="comment" class="form-control text-area" data-error="Comment field is required" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="rt-form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="comment-form-check1">
                                                    <label class="form-check-label" for="comment-form-check1">
                                                        Save my name, email, and website in this browser for the next time I
                                                        comment.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="submit-btn">
                                                Post Comment
                                            </button>
                                        </div>
                                        <div class="form-response"></div>
                                    </div>
                                </form>
                            </div>
                            <!-- end blog-post-comment -->

                            <!-- start related-post-box -->
                            <div class="related-post-box">
                                <div class="titile-wrapper mb--40">
                                    <h2 class="rt-section-heading mb-0 flex-grow-1 me-3">
                                        <span class="rt-section-text">Related Post </span>
                                        <span class="rt-section-dot"></span>
                                        <span class="rt-section-line"></span>
                                    </h2>

                                    <div class="slider-navigation style-2">
                                        <i class="fas fa-chevron-left slider-btn btn-prev"></i>
                                        <i class="fas fa-chevron-right slider-btn btn-next"></i>
                                    </div>
                                </div>
                                <!-- end titile-wrapper -->

                                <div class="swiper-container rt-post-slider-style-5">
                                    <div class="swiper-wrapper">
                                    <?php 
                                                while($forms = mysqli_fetch_assoc($dataquery)){
                                                
                                                ?>
                                        <div class="swiper-slide">
                                            <div class="slide-item">
                                                
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="front_post.php?id=<?php echo $forms['id']?>">
                                                            <img src="media/post_image/<?php echo $forms['image'] ?>" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal"><?php echo $by['name']; ?></a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                            <?php echo $forms['title'] ?>
                                                            </a>
                                                        </h4>

                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            <?php echo $forms['created_at'] ?>
                                                        </span>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <?php
                                                 }
                                                ?>
                                        <!-- end swiper slide -->
                                        <!-- <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="media/gallery/post-md_43.jpg" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal">Design</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After The Moon How Close gea
                                                                Is Space Travel Reall.
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            DECEMBER 9, 2022
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end swiper slide -->

                                        <!-- <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="media/gallery/post-md_44.jpg" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal">Design</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After The Moon How Close gea
                                                                Is Space Travel Reall.
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            DECEMBER 9, 2022
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end swiper slide -->

                                        <!-- <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="#" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal"></a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After The Moon How Close gea
                                                                Is Space Travel Reall.
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            DECEMBER 9, 2022
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end swiper slide -->

                                        <!-- <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="media/gallery/post-md_46.jpg" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal">Design</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After The Moon How Close gea
                                                                Is Space Travel Reall.
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            DECEMBER 9, 2022
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end swiper slide -->

                                        <!-- <div class="swiper-slide">
                                            <div class="slide-item">
                                                <div class="rt-post-grid grid-meta">
                                                    <div class="post-img">
                                                        <a href="single-post1.html">
                                                            <img src="media/gallery/post-md_47.jpg" alt="post" width="551" height="431">
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <a href="graphics.html" class="rt-post-cat-normal">Design</a>
                                                        <h4 class="post-title">
                                                            <a href="single-post1.html">
                                                                After The Moon How Close gea
                                                                Is Space Travel Reall.
                                                            </a>
                                                        </h4>
                                                        <span class="rt-meta">
                                                            <i class="far fa-calendar-alt icon"></i>
                                                            DECEMBER 9, 2022
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- end swiper slide -->


                                    </div>
                                    <!-- end swiper wrapper -->
                                </div>
                                <!-- end swiper container + editor-choice-slider-style-1  -->

                            </div>
                            <!-- end related-post-box -->

                        </div>
                        <!-- end rt-main-post-single -->
                    </div>
                    <!-- end rt-left-sidebar-sapcer-5 -->
                </div>
                <!-- end col-->

                <div class="col-xl-3 col-lg-8 mx-auto sticky-coloum-item">
                    <div class="rt-sidebar sticky-wrap">

                        <div class="sidebar-wrap mb--40">
                            <div class="search-box">
                                <form action="#" class="form search-form-box">
                                    <div class="form-group">
                                        <input type="text" name="sarch" id="search" placeholder="Search..." class="form-control rt-search-control">
                                        <button type="submit" class="search-submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">
                            <div class="post-banner-style-1">
                                <a href="#" class="image-link">&nbsp;</a>
                                <div class="post-content">
                                    <div class="logo">
                                        <a href="index-2.html">
                                            <img src="media/logo/logo-light.svg" alt="logo" width="162" height="52">
                                        </a>
                                    </div>
                                    <h3 class="title">
                                        <a href="#">
                                            The Most Powerful
                                            <span>News & Magazine WP Theme</span>
                                        </a>
                                    </h3>
                                    <div class="btn-wrap">
                                        <a href="#" class="btn-white-sm">
                                            shop now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Stay Connected </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="social-connection">
                                <li>
                                    <a href="https://www.facebook.com/">
                                        <i class="fab fa-facebook-f facebook"></i>
                                        <span class="text"><span>15,985</span> Fans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="fab fa-twitter twitter"></i>
                                        <span class="text"><span>20,751</span> Follower</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/">
                                        <i class="fab fa-youtube youtube"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://cloud.google.com/">
                                        <i class="fas fa-cloud cloud"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://dribbble.com/">
                                        <i class="fab fa-dribbble dribbble"></i>
                                        <span class="text"><span>35,999</span> Subscriber</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Popular News </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="post-list">
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="media/gallery/post-sm_1.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                DECEMBER 9, 2022
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="media/gallery/post-sm_2.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                DECEMBER 9, 2022
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="media/gallery/post-sm_3.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                DECEMBER 9, 2022
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="rt-post post-sm style-1">
                                        <div class="post-img">
                                            <a href="single-post1.html">
                                                <img src="media/gallery/post-sm_4.jpg" alt="post" width="100" height="100">
                                            </a>
                                        </div>
                                        <div class="ms-4 post-content">
                                            <a href="gaming.html" class="rt-post-cat-normal">Sports</a>
                                            <h4 class="post-title">
                                                <a href="single-post1.html">
                                                    Top Beste ampute are
                                                    Speak Market.
                                                </a>
                                            </h4>
                                            <span class="rt-meta">
                                                <i class="far fa-calendar-alt icon"></i>
                                                DECEMBER 9, 2022
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Hot Categories </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <ul class="rt-categories">
                                <li>
                                    <a href="gaming.html" data-bg-image="media/gallery/cat_1.jpg">
                                        <span class="cat-name">Sports</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_2.jpg">
                                        <span class="cat-name">World</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="technology.html" data-bg-image="media/gallery/cat_3.jpg">
                                        <span class="cat-name">Technology</span>
                                        <span class="count">59</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_4.jpg">
                                        <span class="cat-name">Food</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="life-style.html" data-bg-image="media/gallery/cat_5.jpg">
                                        <span class="cat-name">Travel</span>
                                        <span class="count">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end slidebar wrap  -->

                        <div class="sidebar-wrap mb--40">
                            <div class="subscribe-box-style-1" data-bg-image="media/elements/element_5.png">
                                <div class="subscribe-content">
                                    <h3 class="title">
                                        Subscribe To Our Newsletter
                                    </h3>
                                    <p>
                                        No spam, notifications only about
                                        new products, updates.
                                    </p>
                                    <form action="#" method="post" class="subscribe-form rt-form">
                                        <div class="rt-form-group">
                                            <input type="email" name="email" id="email_1" placeholder="enter e-mail" class=" rt-form-control">
                                        </div>

                                        <button type="submit" class="rt-submit-btn">Subscribe Now</button>

                                    </form>
                                    <div class="small-text">Don’t worry, we don’t spam</div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                        <div class="sidebar-wrap mb--40">
                            <h2 class="rt-section-heading style-2 mb--30">
                                <span class="rt-section-text">Tags </span>
                                <span class="rt-section-dot"></span>
                                <span class="rt-section-line"></span>
                            </h2>
                            <div class="tag-list">
                                <a href="#" class="tag-link">beautiful</a>
                                <a href="#" class="tag-link">travel</a>
                                <a href="#" class="tag-link">technology</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">chemical</a>
                                <a href="#" class="tag-link">politics</a>
                                <a href="#" class="tag-link">business</a>
                                <a href="#" class="tag-link">makeup</a>
                                <a href="#" class="tag-link">social</a>
                            </div>
                        </div>
                        <!-- end sidebar wrap -->

                    </div>
                    <!-- end rt-sidebar -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row  -->
        </div>
        <!-- end container -->
    </section>
    <!-- end rt-sidebar-section-layout-2 -->

</main>
<!-- End Main -->

<!-- Start Footer -->
<?php include('include/footer.php'); ?>