<?php
include('./config.php');
include('./conn.php');

$Category = $_POST['Category'];
$ItemName = $_POST['ItemName'];

$table = "SELECT * FROM `tbl_products`";
$where = "";
if ($ItemName != '') {
    $where = "WHERE `product_name` LIKE '%" . $ItemName . "%' ";
}
if ($where == "" && $Category != 'All Categories') {
    $where = "WHERE `brand` LIKE '%" . $Category . "%' ";
} else if ($Category != 'All Categories') {
    $where = $where . "AND `brand` LIKE '%" . $Category . "%'";
}
$sql = $table . " " . $where;
$row_items = $obj3->select_query($sql);
$items_count = count($row_items);
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
    <!--Start header-->
    <?php include('./header.php') ?>
    <!--End header-->
    <!--Start Main-->
    <main class="main">
        <div class="page-header mt-30 mb-50">
            <div class="container">
                <div class="archive-header">
                    <div class="row align-items-center">
                        <div class="col-xl-3">
                            <h1 class="mb-15">List of Items</h1>
                            <!-- <div class="breadcrumb">
                                <a href='/' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                                <span></span> Shop <span></span> Snack
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-30">
            <div class="row">
                <div class="col-12">
                    <div class="shop-product-fillter">
                        <!-- Total Items Count -->
                        <div class="totall-product">
                            <p>We found <strong class="text-brand"><?php echo $items_count ?></strong> items for you!</p>
                        </div>
                        <!-- sorting -->
                        <div class="sort-by-product-area">
                            <div class="sort-by-cover mr-10">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps"></i>Show:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> 50 <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">50</a></li>
                                        <li><a href="#">100</a></li>
                                        <li><a href="#">150</a></li>
                                        <li><a href="#">200</a></li>
                                        <li><a href="#">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sort-by-cover">
                                <div class="sort-by-product-wrap">
                                    <div class="sort-by">
                                        <span><i class="fi-rs-apps-sort"></i>Sort by:</span>
                                    </div>
                                    <div class="sort-by-dropdown-wrap">
                                        <span> Featured <i class="fi-rs-angle-small-down"></i></span>
                                    </div>
                                </div>
                                <div class="sort-by-dropdown">
                                    <ul>
                                        <li><a class="active" href="#">Featured</a></li>
                                        <li><a href="#">Price: Low to High</a></li>
                                        <li><a href="#">Price: High to Low</a></li>
                                        <li><a href="#">Release Date</a></li>
                                        <li><a href="#">Avg. Rating</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-grid">
                        <?php
                        for ($x = 0; $x < count($row_items); $x++) {
                        ?>
                            <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href='/shop-product-right'>
                                                <img class="default-img" src="<?php echo $row_items[$x]['product_img1']?>" alt="" />
                                                <img class="hover-img" src="<?php echo $row_items[$x]['product_img2']?>" alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label='Add To Wishlist' class='action-btn' href='/shop-wishlist'><i class="fi-rs-heart"></i></a>
                                            <a aria-label='Compare' class='action-btn' href='/shop-compare'><i class="fi-rs-shuffle"></i></a>
                                            <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="<?php echo $row_items[$x]['tag']?>"><?php echo $row_items[$x]['tag_text']?></span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href='/shop-grid-right'><?php echo $row_items[$x]['product']?></a>
                                        </div>
                                        <h2><a href='/shop-product-right'><?php echo $row_items[$x]['product_name']?></a></h2>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                        <div>
                                            <span class="font-small text-muted">By <a href='/vendor-details-1'><?php echo $row_items[$x]['brand']?></a></span>
                                        </div>
                                        <div class="product-card-bottom">
                                            <div class="product-price">
                                                <span>₹<?php echo $row_items[$x]['new_price']?></span>
                                                <span class="old-price">₹<?php echo $row_items[$x]['old_price']?></span>
                                            </div>
                                            <div class="add-cart">
                                                <a class='add' href='/shop-cart'><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
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
                    <!--product grid-->
                    <div class="pagination-area mt-20 mb-20">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fi-rs-arrow-small-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--End pagination-->
                </div>
            </div>
        </div>
    </main>
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