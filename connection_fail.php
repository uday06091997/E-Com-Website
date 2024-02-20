
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
    <main class="main page-404">
        <div class="page-content pt-150 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 col-md-12 m-auto text-center">
                        <h1 class="display-2 mb-30">Error Message</h1>
                        <p class="font-lg text-grey-700 mb-30">
                            <?php
                                echo $_GET['message'];
                            ?>
                            <br />
                            visit the <a href='/'> <span> Homepage</span></a> or <a href='/page-contact'><span>Contact us</span></a> about the problem
                        </p>
                        <a class='btn btn-default submit-auto-width font-xs hover-up mt-30' href='/'><i class="fi-rs-home mr-5"></i> Back To Home Page</a>
                    </div>
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