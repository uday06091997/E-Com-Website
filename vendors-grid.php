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
    <?php include('./css.php')?>
</head>

<body>
    <!--Start header-->
    <?php include('./header.php')?>
    <!--End header-->
    <!--Start Main-->
    <main class="main pages mb-80">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href='index.html' rel='nofollow'><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Vendors List
                </div>
            </div>
        </div>
        <div class="page-content pt-50">
            <div class="container">
                <div class="archive-header-2 text-center">
                    <h1 class="display-2 mb-50">Vendors List</h1>
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="sidebar-widget-2 widget_search mb-50">
                                <div class="search-form">
                                    <form action="vendors-grid.html#">
                                        <input type="text" placeholder="Search vendors (by name or ID)..." />
                                        <button type="submit"><i class="fi-rs-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-50">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="shop-product-fillter">
                            <div class="totall-product">
                                <p>We have <strong class="text-brand">780</strong> vendors now</p>
                            </div>
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
                                            <li><a class="active" href="vendors-grid.html#">50</a></li>
                                            <li><a href="vendors-grid.html#">100</a></li>
                                            <li><a href="vendors-grid.html#">150</a></li>
                                            <li><a href="vendors-grid.html#">200</a></li>
                                            <li><a href="vendors-grid.html#">All</a></li>
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
                                            <li><a class="active" href="vendors-grid.html#">Mall</a></li>
                                            <li><a href="vendors-grid.html#">Featured</a></li>
                                            <li><a href="vendors-grid.html#">Preferred</a></li>
                                            <li><a href="vendors-grid.html#">Total items</a></li>
                                            <li><a href="vendors-grid.html#">Avg. Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row vendor-grid">
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-1.png" alt="" />
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Mall</span>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Nature Food</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-7.png" alt="" />
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">Preferred</span>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2019</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Country Crock</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">18 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-2.png" alt="" />
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Mall</span>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Hambger Hel</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">63 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-8.png" alt="" />
                                    </a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Mall</span>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Totino's Pizza</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-3.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Maruchan Ramen</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-9.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>USA Noodle Soup</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-4.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Red Baron Pizza</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-10.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Mrs. Smith's Pie</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-5.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Dove Promises</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-11.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Mrs. Dash</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-6.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Lindt Grocery A1</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-12.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Snyder's-Lance</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-13.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Dreyer's/Edy's</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-14.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Wonderful</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-15.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Almonds</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                    <div class="col-lg-3 col-md-6 col-12 col-sm-6">
                        <div class="vendor-wrap mb-40">
                            <div class="vendor-img-action-wrap">
                                <div class="vendor-img">
                                    <a href='vendor-details-1.php'>
                                        <img class="default-img" src="assets/imgs/vendor/vendor-1.png" alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="vendor-content-wrap">
                                <div class="d-flex justify-content-between align-items-end mb-30">
                                    <div>
                                        <div class="product-category">
                                            <span class="text-muted">Since 2012</span>
                                        </div>
                                        <h4 class="mb-5"><a href='vendor-details-1.php'>Pistachios</a></h4>
                                        <div class="product-rate-cover">
                                            <div class="product-rate d-inline-block">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <span class="font-small ml-5 text-muted"> (4.0)</span>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <span class="font-small total-product">380 products</span>
                                    </div>
                                </div>
                                <div class="vendor-info mb-30">
                                    <ul class="contact-infor text-muted">
                                        <li><img src="assets/imgs/theme/icons/icon-location.svg" alt="" /><strong>Address: </strong> <span>5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                                        <li><img src="assets/imgs/theme/icons/icon-contact.svg" alt="" /><strong>Call Us:</strong><span>(+91) - 540-025-124553</span></li>
                                    </ul>
                                </div>
                                <a class='btn btn-xs' href='vendor-details-1.php'>Visit Store <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end vendor card-->
                </div>
                <div class="pagination-area mt-20 mb-20">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">
                                <a class="page-link" href="vendors-grid.html#"><i class="fi-rs-arrow-small-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="vendors-grid.html#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="vendors-grid.html#">2</a></li>
                            <li class="page-item"><a class="page-link" href="vendors-grid.html#">3</a></li>
                            <li class="page-item"><a class="page-link dot" href="vendors-grid.html#">...</a></li>
                            <li class="page-item"><a class="page-link" href="vendors-grid.html#">6</a></li>
                            <li class="page-item">
                                <a class="page-link" href="vendors-grid.html#"><i class="fi-rs-arrow-small-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <!--End Main-->
    <!--Start Footer-->
    <?php include('./footer.php')?>
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
    <?php include('./js.php')?>
</body>

</html>