<!-- website-header -->
<header class="header-area header-style-1 header-height-2">
    <div class="mobile-promotion">
        <span>Grand opening, <strong>up to 15%</strong> off all items. Only <strong>3 days</strong> left</span>
    </div>
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li><a href="https://nest-frontend.netlify.app/page-about.htlm">About Us</a></li>
                            <li><a href='page-account.php'>My Account</a></li>
                            <li><a href='shop-wishlist.php'>Wishlist</a></li>
                            <li><a href="https://nest-frontend.netlify.app/shop-order.php">Order Tracking</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>100% Secure delivery without contacting the courier</li>
                                <!-- <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today</li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        <ul>
                            <li>Need help? Call Us: <strong class="text-brand"> + 1800 900</strong></li>
                            <li>
                                <a class="language-dropdown-active" href="index.php#">English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-fr.png" alt="" />Français</a>
                                    </li>
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-dt.png" alt="" />Deutsch</a>
                                    </li>
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-ru.png" alt="" />Pусский</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="language-dropdown-active" href="index.php#">USD <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-fr.png" alt="" />INR</a>
                                    </li>
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-dt.png" alt="" />MBP</a>
                                    </li>
                                    <li>
                                        <a href="index.php#"><img src="assets/imgs/theme/flag-ru.png" alt="" />EU</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href='index.php'><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
                </div>
                <div class="header-right">
                    <div class="search-style-2">
                        <form action="shop-fullwidth.php" method="POST">
                            <select class="select-active" name="Category">
                                <option Value="All Categories">All Categories</option>
                                <?php
                                $rows = $obj3->select_query("SELECT * FROM `tbl_products` GROUP BY `brand`");
                                foreach ($rows as $row) {
                                ?>
                                    <option Value="<?php echo $row['brand'] ?>"><?php echo $row['brand'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <input type="text" placeholder="Search for items..." name="ItemName" />
                        </form>
                    </div>
                    <div class="header-action-right">
                        <div class="header-action-2">
                            <div class="search-location">
                                <form action="index.php#">
                                    <select class="select-active">
                                        <option>Your Location</option>
                                        <option>Alabama</option>
                                        <option>Alaska</option>
                                        <option>Arizona</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Indiana</option>
                                        <option>Maryland</option>
                                        <option>Nevada</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>New York</option>
                                    </select>
                                </form>
                            </div>
                            <div class="header-action-icon-2">
                                <a href='shop-compare.php'>
                                    <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-compare.svg" />
                                    <span class="pro-count blue">3</span>
                                </a>
                                <a href='shop-compare.php'><span class="lable ml-0">Compare</span></a>
                            </div>
                            <div class="header-action-icon-2">
                                <a href='shop-wishlist.php'>
                                    <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
                                    <span class="pro-count blue">6</span>
                                </a>
                                <a href='shop-wishlist.php'><span class="lable">Wishlist</span></a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class='mini-cart-icon' href='shop-cart.php'>
                                    <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
                                    <span class="pro-count blue">2</span>
                                </a>
                                <a href='shop-cart.php'><span class="lable">Cart</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href='shop-product-right.php'>Daisy Casual Bag</a></h4>
                                                <h4><span>1 × </span>$800.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="index.php#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-2.jpg" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href='shop-product-right.php'>Corduroy Shirts</a></h4>
                                                <h4><span>1 × </span>$3200.00</h4>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="index.php#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$4000.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a class='outline' href='shop-cart.php'>View cart</a>
                                            <a href='shop-checkout.php'>Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2">
                                <a href='page-account.php'>
                                    <img class="svgInject" alt="Nest" src="assets/imgs/theme/icons/icon-user.svg" />
                                </a>
                                <a href='page-account.php'><span class="lable ml-0">Account</span></a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
                                    <ul>
                                        <li>
                                            <a href='page-account.php'><i class="fi fi-rs-user mr-10"></i>My Account</a>
                                        </li>
                                        <li>
                                            <a href='page-account.php'><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a>
                                        </li>
                                        <li>
                                            <a href='page-account.php'><i class="fi fi-rs-label mr-10"></i>My Voucher</a>
                                        </li>
                                        <li>
                                            <a href='shop-wishlist.php'><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a>
                                        </li>
                                        <li>
                                            <a href='page-account.php'><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a>
                                        </li>
                                        <li>
                                            <a href='page-login.php'><i class="fi fi-rs-sign-out mr-10"></i>Sign out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href='index.php'><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categories-button-active" href="index.php#">
                            <span class="fi-rs-apps"></span> <span class="et">Browse</span> All Categories
                            <i class="fi-rs-angle-down"></i>
                        </a>
                        <div class="categories-dropdown-wrap categories-dropdown-active-large font-heading">
                            <div class="d-flex categori-dropdown-inner">
                                <ul>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-1.svg" alt="" />Milks and Dairies</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-2.svg" alt="" />Clothing & beauty</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-3.svg" alt="" />Pet Foods & Toy</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-4.svg" alt="" />Baking material</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-5.svg" alt="" />Fresh Fruit</a>
                                    </li>
                                </ul>
                                <ul class="end">
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-6.svg" alt="" />Wines & Drinks</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-7.svg" alt="" />Fresh Seafood</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-8.svg" alt="" />Fast food</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-9.svg" alt="" />Vegetables</a>
                                    </li>
                                    <li>
                                        <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/category-10.svg" alt="" />Bread and Juice</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="more_slide_open" style="display: none">
                                <div class="d-flex categori-dropdown-inner">
                                    <ul>
                                        <li>
                                            <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/icon-1.svg" alt="" />Milks and Dairies</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/icon-2.svg" alt="" />Clothing & beauty</a>
                                        </li>
                                    </ul>
                                    <ul class="end">
                                        <li>
                                            <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/icon-3.svg" alt="" />Wines & Drinks</a>
                                        </li>
                                        <li>
                                            <a href='shop-grid-right.php'> <img src="assets/imgs/theme/icons/icon-4.svg" alt="" />Fresh Seafood</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="more_categories"><span class="icon"></span> <span class="heading-sm-1">Show more...</span></div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block font-heading">
                        <nav>
                            <ul>
                                <li class="hot-deals"><img src="assets/imgs/theme/icons/icon-hot.svg" alt="hot deals" /><a href='shop-grid-right.php'>Deals</a></li>
                                <li>
                                    <a class='active' href='index.php'>Home</a>
                                </li>
                                <li>
                                    <a href='page-about.php'>About</a>
                                </li>
                                <li>
                                    <a href='shop-grid-right.php'>Shop</a>
                                </li>
                                <li>
                                    <a href="vendors-grid.php">Vendor</a>
                                </li>
                                <li class="position-static">
                                    <a href="index.php#">Mega menu <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="index.php#">Fruit & Vegetables</a>
                                            <ul>
                                                <li><a href='shop-product-right.php'>Meat & Poultry</a></li>
                                                <li><a href='shop-product-right.php'>Fresh Vegetables</a></li>
                                                <li><a href='shop-product-right.php'>Herbs & Seasonings</a></li>
                                                <li><a href='shop-product-right.php'>Cuts & Sprouts</a></li>
                                                <li><a href='shop-product-right.php'>Exotic Fruits & Veggies</a></li>
                                                <li><a href='shop-product-right.php'>Packaged Produce</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="index.php#">Breakfast & Dairy</a>
                                            <ul>
                                                <li><a href='shop-product-right.php'>Milk & Flavoured Milk</a></li>
                                                <li><a href='shop-product-right.php'>Butter and Margarine</a></li>
                                                <li><a href='shop-product-right.php'>Eggs Substitutes</a></li>
                                                <li><a href='shop-product-right.php'>Marmalades</a></li>
                                                <li><a href='shop-product-right.php'>Sour Cream</a></li>
                                                <li><a href='shop-product-right.php'>Cheese</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="index.php#">Meat & Seafood</a>
                                            <ul>
                                                <li><a href='shop-product-right.php'>Breakfast Sausage</a></li>
                                                <li><a href='shop-product-right.php'>Dinner Sausage</a></li>
                                                <li><a href='shop-product-right.php'>Chicken</a></li>
                                                <li><a href='shop-product-right.php'>Sliced Deli Meat</a></li>
                                                <li><a href='shop-product-right.php'>Wild Caught Fillets</a></li>
                                                <li><a href='shop-product-right.php'>Crab and Shellfish</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href='shop-product-right.php'><img src="assets/imgs/banner/banner-menu.png" alt="Nest" /></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>
                                                        Don't miss<br />
                                                        Trending
                                                    </h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href='shop-product-right.php'>Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>25%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='page-contact.php'>Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-flex">
                    <img src="assets/imgs/theme/icons/icon-headphone.svg" alt="hotline" />
                    <p>1900 - 888<span>24/7 Support Center</span></p>
                </div>
                <div class="header-action-icon-2 d-block d-lg-none">
                    <div class="burger-icon burger-icon-white">
                        <span class="burger-icon-top"></span>
                        <span class="burger-icon-mid"></span>
                        <span class="burger-icon-bottom"></span>
                    </div>
                </div>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href='shop-wishlist.php'>
                                <img alt="Nest" src="assets/imgs/theme/icons/icon-heart.svg" />
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="index.php#">
                                <img alt="Nest" src="assets/imgs/theme/icons/icon-cart.svg" />
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-3.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href='shop-product-right.php'>Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="index.php#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href='shop-product-right.php'><img alt="Nest" src="assets/imgs/shop/thumbnail-4.jpg" /></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href='shop-product-right.php'>Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="index.php#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href='shop-cart.php'>View cart</a>
                                        <a href='shop-checkout.php'>Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- mobile-header -->
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href='index.php'><img src="assets/imgs/theme/logo.svg" alt="logo" /></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="index.php#">
                    <input type="text" placeholder="Search for items…" />
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu font-heading">
                        <li class="menu-item-has-children">
                            <a href='index.php'>Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href='shop-grid-right.php'>shop</a>
                            <ul class="dropdown">
                                <li><a href='shop-grid-right.php'>Shop Grid – Right Sidebar</a></li>
                                <li><a href='shop-grid-left.php'>Shop Grid – Left Sidebar</a></li>
                                <li><a href='shop-list-right.php'>Shop List – Right Sidebar</a></li>
                                <li><a href='shop-list-left.php'>Shop List – Left Sidebar</a></li>
                                <li><a href='shop-fullwidth.php'>Shop - Wide</a></li>
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Single Product</a>
                                    <ul class="dropdown">
                                        <li><a href='shop-product-right.php'>Product – Right Sidebar</a></li>
                                        <li><a href='shop-product-left.php'>Product – Left Sidebar</a></li>
                                        <li><a href='shop-product-full.php'>Product – No sidebar</a></li>
                                        <li><a href='shop-product-vendor.php'>Product – Vendor Infor</a></li>
                                    </ul>
                                </li>
                                <li><a href='shop-filter.php'>Shop – Filter</a></li>
                                <li><a href='shop-wishlist.php'>Shop – Wishlist</a></li>
                                <li><a href='shop-cart.php'>Shop – Cart</a></li>
                                <li><a href='shop-checkout.php'>Shop – Checkout</a></li>
                                <li><a href='shop-compare.php'>Shop – Compare</a></li>
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Shop Invoice</a>
                                    <ul class="dropdown">
                                        <li><a href='shop-invoice-1.php'>Shop Invoice 1</a></li>
                                        <li><a href='shop-invoice-2.php'>Shop Invoice 2</a></li>
                                        <li><a href='shop-invoice-3.php'>Shop Invoice 3</a></li>
                                        <li><a href='shop-invoice-4.php'>Shop Invoice 4</a></li>
                                        <li><a href='shop-invoice-5.php'>Shop Invoice 5</a></li>
                                        <li><a href='shop-invoice-6.php'>Shop Invoice 6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.php#">Vendors</a>
                            <ul class="dropdown">
                                <li><a href='vendors-grid.php'>Vendors Grid</a></li>
                                <li><a href='vendors-list.php'>Vendors List</a></li>
                                <li><a href='vendor-details-1.php'>Vendor Details 01</a></li>
                                <li><a href='vendor-details-2.php'>Vendor Details 02</a></li>
                                <li><a href='vendor-dashboard.php'>Vendor Dashboard</a></li>
                                <li><a href='vendor-guide.php'>Vendor Guide</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.php#">Mega menu</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href='shop-product-right.php'>Dresses</a></li>
                                        <li><a href='shop-product-right.php'>Blouses & Shirts</a></li>
                                        <li><a href='shop-product-right.php'>Hoodies & Sweatshirts</a></li>
                                        <li><a href='shop-product-right.php'>Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href='shop-product-right.php'>Jackets</a></li>
                                        <li><a href='shop-product-right.php'>Casual Faux Leather</a></li>
                                        <li><a href='shop-product-right.php'>Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href='shop-product-right.php'>Gaming Laptops</a></li>
                                        <li><a href='shop-product-right.php'>Ultraslim Laptops</a></li>
                                        <li><a href='shop-product-right.php'>Tablets</a></li>
                                        <li><a href='shop-product-right.php'>Laptop Accessories</a></li>
                                        <li><a href='shop-product-right.php'>Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href='blog-category-fullwidth.php'>Blog</a>
                            <ul class="dropdown">
                                <li><a href='blog-category-grid.php'>Blog Category Grid</a></li>
                                <li><a href='blog-category-list.php'>Blog Category List</a></li>
                                <li><a href='blog-category-big.php'>Blog Category Big</a></li>
                                <li><a href='blog-category-fullwidth.php'>Blog Category Wide</a></li>
                                <li class="menu-item-has-children">
                                    <a href="index.php#">Single Product Layout</a>
                                    <ul class="dropdown">
                                        <li><a href='blog-post-left.php'>Left Sidebar</a></li>
                                        <li><a href='blog-post-right.php'>Right Sidebar</a></li>
                                        <li><a href='blog-post-fullwidth.php'>No Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.php#">Pages</a>
                            <ul class="dropdown">
                                <li><a href='page-about.php'>About Us</a></li>
                                <li><a href='page-contact.php'>Contact</a></li>
                                <li><a href='page-account.php'>My Account</a></li>
                                <li><a href='page-login.php'>Login</a></li>
                                <li><a href='page-register.php'>Register</a></li>
                                <li><a href='page-forgot-password.php'>Forgot password</a></li>
                                <li><a href='page-reset-password.php'>Reset password</a></li>
                                <li><a href='page-purchase-guide.php'>Purchase Guide</a></li>
                                <li><a href='page-privacy-policy.php'>Privacy Policy</a></li>
                                <li><a href='page-terms.php'>Terms of Service</a></li>
                                <li><a href='page-404.php'>404 Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="index.php#">Language</a>
                            <ul class="dropdown">
                                <li><a href="index.php#">English</a></li>
                                <li><a href="index.php#">French</a></li>
                                <li><a href="index.php#">German</a></li>
                                <li><a href="index.php#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap">
                <div class="single-mobile-header-info">
                    <a href='page-contact.php'><i class="fi-rs-marker"></i> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href='page-login.php'><i class="fi-rs-user"></i>Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="index.php#"><i class="fi-rs-headphones"></i>(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon mb-50">
                <h6 class="mb-15">Follow Us</h6>
                <a href="index.php#"><img src="assets/imgs/theme/icons/icon-facebook-white.svg" alt="" /></a>
                <a href="index.php#"><img src="assets/imgs/theme/icons/icon-twitter-white.svg" alt="" /></a>
                <a href="index.php#"><img src="assets/imgs/theme/icons/icon-instagram-white.svg" alt="" /></a>
                <a href="index.php#"><img src="assets/imgs/theme/icons/icon-pinterest-white.svg" alt="" /></a>
                <a href="index.php#"><img src="assets/imgs/theme/icons/icon-youtube-white.svg" alt="" /></a>
            </div>
            <div class="site-copyright">Copyright 2022 © Nest. All rights reserved. Powered by AliThemes.</div>
        </div>
    </div>
</div>