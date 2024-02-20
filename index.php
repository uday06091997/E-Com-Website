<?php
include('./config.php');
include('./conn.php');
// $result = $conn->Create_Connection();
// if($result!='Successfull')
// {
//     // Redirect the browser to example.com
//     header("Location: ".$paths->home."connection_fail.php?message=".$result);    
// }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Nest - Multipurpose eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <?php include('./css.php') ?>
</head>

<body>
    <!-- Modal -->
    <?php include('./modal.php') ?>
    <!--Start header-->
    <?php include('./header.php') ?>
    <!--End header-->
    <!--Start Main-->
    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <!-- 2376X807 -->
                        <?php
                        $rows = $obj3->select_query("SELECT * FROM `ui_components` WHERE `name` LIKE 'slider-%'");
                        ?>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?php echo $rows[0]['img_path']; ?>)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    <?php echo $rows[0]['text']; ?>
                                </h1>
                                <p class="mb-65">Sign up for the daily newsletter</p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <?php
                        ?>
                        <!-- 2376X807 -->
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?php echo $rows[1]['img_path']; ?>)">
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                    <?php echo $rows[1]['text']; ?>
                                </h1>
                                <p class="mb-65">Save up to 50% off on your first order</p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>
        <!--End hero slider-->
        <section class="popular-categories section-padding">
            <div class="container wow animate__animated animate__fadeIn">
                <div class="section-title">
                    <div class="title">
                        <h3>Featured Categories</h3>
                        <ul class="list-inline nav nav-tabs links">
                            <li class="list-inline-item nav-item"><a class='nav-link' href='shop-grid-right.php'>Mobile</a></li>
                            <li class="list-inline-item nav-item"><a class='nav-link' href='shop-grid-right.php'>Electronics</a></li>
                            <li class="list-inline-item nav-item"><a class='nav-link active' href='shop-grid-right.php'>Appliances</a></li>
                            <li class="list-inline-item nav-item"><a class='nav-link' href='shop-grid-right.php'>Smart Wearables</a></li>
                            <li class="list-inline-item nav-item"><a class='nav-link' href='shop-grid-right.php'>Laptops</a></li>
                        </ul>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
                </div>
                <div class="carausel-10-columns-cover position-relative">
                    <div class="carausel-10-columns" id="carausel-10-columns">
                        <?php
                        $rows = $obj3->select_query("SELECT * FROM `ui_components` WHERE `name` = 'categories-carausel'");
                        for ($x = 0; $x < count($rows); $x++) {
                        ?>
                            <div class="card-2 bg-16 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                <figure class="img-hover-scale overflow-hidden">
                                    <!-- 120X120 -->
                                    <a href='shop-grid-right.php'><img src="<?php echo $rows[$x]['img_path'] ?>" alt="" /></a>
                                </figure>
                                <h6><a href='shop-grid-right.php'><?php echo $rows[$x]['text'] ?></a></h6>
                                <span>26 items</span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--End category slider-->
        <section class="banners mb-25">
            <div class="container">
                <div class="row">
                    <?php
                    $rows = $obj3->select_query("SELECT * FROM `ui_components` WHERE `name` = 'banner'");
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <!-- 768X450 -->
                            <img src="<?php echo $rows[0]['img_path'] ?>" alt="" />
                            <div class="banner-text">
                                <!-- <h4>
                                    Get easy returns, & friendly<br />customer support on<br />every purchase.
                                </h4> -->
                                <a class='btn btn-xs' href='shop-grid-right.php'>Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <!-- 768X450 -->
                            <img src="<?php echo $rows[1]['img_path'] ?>" alt="" />
                            <div class="banner-text">
                                <!-- <h4>
                                    Make your Breakfast<br />
                                    Healthy and Easy
                                </h4> -->
                                <a class='btn btn-xs' href='shop-grid-right.php'>Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <!-- 768X450 -->
                            <img src="<?php echo $rows[2]['img_path'] ?>" alt="" />
                            <div class="banner-text">
                                <!-- <h4>The best Organic <br />Products Online</h4> -->
                                <a class='btn btn-xs' href='shop-grid-right.php'>Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End banners-->
        <section class="product-tabs section-padding position-relative">
            <div class="container">
                <div class="section-title style-2 wow animate__animated animate__fadeIn">
                    <h3>Popular Products</h3>
                    <ul class="nav nav-tabs links" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                        </li>
                        <?php
                        $num = 2;
                        $array_brands = array();
                        $rows1 = $obj3->select_query("SELECT `brand` FROM `tbl_products` GROUP BY `brand`");
                        foreach ($rows1 as $row1) {
                        ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-<?php echo $num ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $num ?>" type="button" role="tab" aria-controls="tab-<?php echo $num ?>" aria-selected="false"><?php echo $row1['brand'] ?></button>
                            </li>
                        <?php
                            array_push($array_brands, $row1['brand']);
                            $num++;
                        }
                        ?>
                    </ul>
                </div>
                <!--End nav-tabs-->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            <!-- product card -->
                            <?php
                            $rows = $obj3->select_query("SELECT * FROM `tbl_products` WHERE `deleted_at`=''");
                            foreach ($rows as $row) {
                            ?>
                                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom">
                                                <a href='shop-product-right.php'>
                                                    <img class="default-img" src="<?php echo $row['product_img1'] ?>" alt="" />
                                                    <img class="hover-img" src="<?php echo $row['product_img2'] ?>" alt="" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label='Add To Wishlist' class='action-btn' href='shop-wishlist.php'><i class="fi-rs-heart"></i></a>
                                                <a aria-label='Compare' class='action-btn' href='shop-compare.php'><i class="fi-rs-shuffle"></i></a>
                                                <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="<?php echo $row['tag'] ?>"><?php echo $row['tag_text'] ?></span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href='shop-grid-right.php'><?php echo $row['brand'] ?></a>
                                            </div>
                                            <h2><a href='shop-product-right.php'><?php echo $row['product_name'] ?></a></h2>
                                            <!-- Product Rating -->
                                            <div class="product-rate-cover">
                                                <?php
                                                $rating = ($row['product_rating'] * 100) / 5
                                                ?>
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width: <?php echo $rating ?>%"></div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (<?php echo $row['product_rating'] ?>)</span>
                                            </div>
                                            <!-- Product Seller -->
                                            <!-- <div>
                                            <span class="font-small text-muted">By <a href='vendor-details-1.php'>NestFood</a></span>
                                        </div> -->
                                            <div class="product-card-bottom">
                                                <div class="product-price">
                                                    <span>₹<?php echo number_format($row['new_price']) ?></span>
                                                    <span class="old-price">₹<?php echo number_format($row['old_price']) ?></span>
                                                </div>
                                                <div class="add-cart">
                                                    <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <!--end product card-->
                        </div>
                        <!--End product-grid-4-->
                    </div>
                    <!--En tab one-->
                    <?php
                    $num = 2;
                    for ($y = 0; $y < count($array_brands); $y++) {
                    ?>
                        <div class="tab-pane fade" id="tab-<?php echo $num ?>" role="tabpanel" aria-labelledby="tab-<?php echo $num ?>">
                            <div class="row product-grid-4">
                                <?php
                                $brand = $array_brands[$y];
                                $rows = $obj3->select_query("SELECT * FROM `tbl_products` WHERE `brand`='" . $brand . "'");
                                $count = count($rows);
                                for ($x = 0; $x < $count; $x++) {
                                ?>
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href='shop-product-right.php'>
                                                        <img class="default-img" src="<?php echo $rows[$x]['product_img1'] ?>" alt="" />
                                                        <img class="hover-img" src="<?php echo $rows[$x]['product_img2'] ?>" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label='Add To Wishlist' class='action-btn' href='shop-wishlist.php'><i class="fi-rs-heart"></i></a>
                                                    <a aria-label='Compare' class='action-btn' href='shop-compare.php'><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="<?php echo $rows[$x]['tag'] ?>"><?php echo $rows[$x]['tag_text'] ?></span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href='shop-grid-right.php'><?php echo $rows[$x]['brand'] ?></a>
                                                </div>
                                                <h2><a href='shop-product-right.php'><?php echo $rows[$x]['product_name'] ?></a></h2>
                                                <div class="product-rate-cover">
                                                    <?php
                                                    $rating = ($rows[$x]['product_rating'] * 100) / 5
                                                    ?>
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: <?php echo $rating ?>%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (<?php echo $rows[$x]['product_rating'] ?>)</span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>₹<?php echo number_format($rows[$x]['new_price']) ?></span>
                                                        <span class="old-price">₹<?php echo number_format($rows[$x]['old_price']) ?></span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                <?php
                                }
                                ?>
                            </div>
                            <!--End product-grid-4-->
                        </div>
                    <?php
                        $num++;
                    }
                    ?>
                    <!--En tab two-->
                </div>
                <!--End tab-content-->
            </div>
        </section>
        <!--Products Tabs-->
        <!--End Best Sales-->
        <section class="section-padding pb-5">
            <div class="container">
                <div class="section-title wow animate__animated animate__fadeIn" data-wow-delay="0">
                    <h3 class="">Deals Of The Day</h3>
                    <a class='show-all' href='shop-grid-right.php'>
                        All Deals
                        <i class="fi-rs-angle-right"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href='shop-product-right.php'>
                                        <img src="assets/imgs/banner/Google1-portrait-568 X 503.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href='shop-product-right.php'>Google Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href='vendor-details-1.php'>NestFood</a></span>
                                    </div> -->
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>₹17,899</span>
                                            <span class="old-price">₹19,999</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href='shop-product-right.php'>
                                        <img src="assets/imgs/banner/Samsung1-portrait-568 X 503.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2026/04/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href='shop-product-right.php'>Samsung Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href='vendor-details-1.php'>NestFood</a></span>
                                    </div> -->
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>₹17,899</span>
                                            <span class="old-price">₹19,999</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-lg-block">
                        <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href='shop-product-right.php'>
                                        <img src="assets/imgs/banner/Apple1 -portrait-568 X 503.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2027/03/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href='shop-product-right.php'>Apple Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href='vendor-details-1.php'>NestFood</a></span>
                                    </div> -->
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>₹17,899</span>
                                            <span class="old-price">₹19,999</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 d-none d-xl-block">
                        <div class="product-cart-wrap style-2 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            <div class="product-img-action-wrap">
                                <div class="product-img">
                                    <a href='shop-product-right.php'>
                                        <img src="assets/imgs/banner/Google1-portrait-568 X 503.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="deals-countdown-wrap">
                                    <div class="deals-countdown" data-countdown="2025/02/25 00:00:00"></div>
                                </div>
                                <div class="deals-content">
                                    <h2><a href='shop-product-right.php'>Vivo Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.0)</span>
                                    </div>
                                    <!-- <div>
                                        <span class="font-small text-muted">By <a href='vendor-details-1.php'>Yoplait</a></span>
                                    </div> -->
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>₹17,899</span>
                                            <span class="old-price">₹19,999</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class='add' href='shop-cart.php'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Deals-->
        <section class="section-padding mb-30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay="0">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Selling</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-1.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-2.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-3.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Nestle Original Coffee-Mate Coffee Creamer</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                        <h4 class="section-title style-1 mb-30 animated animated">Trending Products</h4>
                        <div class="product-list-small animated animated">
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-4.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Organic Cage-Free Grade A Large Brown Eggs</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-5.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Seeds of Change Organic Quinoa, Brown, & Red Rice</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="assets/imgs/shop/thumbnail-6.jpg" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'>Naturally Flavored Cinnamon Vanilla Light Roast Coffee</a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div class="product-price">
                                        <span>$32.85</span>
                                        <span class="old-price">$33.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <!-- Recently added -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                        <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                        <div class="product-list-small animated animated">
                            <?php
                            $limit = 3;
                            $rows2 = $obj3->select_query("SELECT * FROM `tbl_products` ORDER BY `created_at` DESC LIMIT 3;");
                            foreach ($rows2 as $row2) {
                            ?>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="<?php echo $row2['product_img1']?>" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'><?php echo $row2['product_name']?></a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <?php
                                        $rating = ($row2['product_rating'] * 100) / 5
                                        ?>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: <?php echo $rating?>%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (<?php echo $row2['product_rating']?>)</span>
                                        <?php
                                        ?>
                                    </div>
                                    <div class="product-price">
                                        <span>₹<?php echo number_format($row2['new_price']) ?></span>
                                        <span class="old-price">₹<?php echo number_format($row2['old_price']) ?></span>
                                    </div>
                                </div>
                            </article>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Top Rated -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                        <h4 class="section-title style-1 mb-30 animated animated">Top Rated</h4>
                        <div class="product-list-small animated animated">
                        <?php
                            $limit = 3;
                            $rows2 = $obj3->select_query("SELECT * FROM `tbl_products` ORDER BY `product_rating` DESC LIMIT 3;");
                            foreach ($rows2 as $row2) {
                            ?>
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href='shop-product-right.php'><img src="<?php echo $row2['product_img1']?>" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href='shop-product-right.php'><?php echo $row2['product_name']?></a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <?php
                                        $rating = ($row2['product_rating'] * 100) / 5
                                        ?>
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: <?php echo $rating?>%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (<?php echo $row2['product_rating']?>)</span>
                                        <?php
                                        ?>
                                    </div>
                                    <div class="product-price">
                                        <span>₹<?php echo number_format($row2['new_price']) ?></span>
                                        <span class="old-price">₹<?php echo number_format($row2['old_price']) ?></span>
                                    </div>
                                </div>
                            </article>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End 4 columns-->
    </main>
    <!--End Main-->
    <!--Start Footer-->
    <?php include('./footer.php') ?>
    <!--End Footer-->
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- JS Section -->
    <?php include('./js.php') ?>
</body>

</html>