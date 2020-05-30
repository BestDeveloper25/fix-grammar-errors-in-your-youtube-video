<?php include('servers.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>fix youtube video grammar errors</title>
    <meta name="description" content="fix errors in youtube video grammar and video description, proofread youtube video before uploading it">
    <meta name="keywords" content="proofread, fix youtube video errors, video grammar description">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing-2.css">
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Playfair+Display:700" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <script src="srolling_to_reveal.js"></script>
    </head>

<body class="is-boxed has-animations">
    <header style="text-align:center;">
        <img src="youtube_seeklogo_com.png" class="w3-card-4" alt="graph" style="margin: auto; width: 25%;padding-top: 50px;" />
        <h1 style="color:blue;margin-left:5%;margin-right:5%;font-family:-apple-system"><br>Fix grammar errors in your youtube video title and description before uploading it<br />
        </h1>
        <h5 style="margin-left:10%;margin-right:10%;font-family:-apple-system">
            Are you ready to publish your video onto youtube? Let's help you to fix spelling and punctuation mistakes, typos, formatting issues and inconsistencies in your video title
            and video description before you upload it.<br />
        we will email you the results in less than 10 minutes.
        </h5>
    </header>
    <div class="body-wrap boxed-container">
        <section class=" overflow-hidden" style="padding-top:140px;padding-bottom:160px;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5" style="padding-bottom: 50px;">
                        <form action="index.php" class="bg-white rounded pb_form_v1" method="post">
                            <h2 class="mb-4 mt-0 text-center">please fill this form and submit</h2>
                            <?php include('errors.php'); ?>
                             <div class="form-group">
                                <input type="text" name="title" class="form-control py-3 reverse" placeholder="your video title" required>
                            </div>
                             <div class="form-group">
                            <textarea rows="4" cols="50" type="text" name="description" class="form-control py-3 reverse" placeholder="your video description" required></textarea> </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control py-3 reverse" placeholder="your email address" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="newuser" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="site-footer-top">

                        <div class="site-footer-unit">
                            <div class="site-footer-unit-inner">
                                <div class="footer-top-links">
                                    <div class="footer-title mb-16">Privacy Policy</div>
                                    <ul class="list-reset">
                                        <li>
                                            <a href="privacy_policy.html">view our privacy policy</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="site-footer-unit">
                            <div class="site-footer-unit-inner">
                                <div class="footer-top-links">
                                    <div class="footer-title mb-16">contact us</div>
                                    <ul class="list-reset">
                                        <li>
                                           We would love to hear from you. Contact us at: email@neckline.space
                                             and we guarantee response in less than 4 hours
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="site-footer-unit">
                            <div class="site-footer-unit-inner">
                                <div class="footer-top-links">
                                    <div class="footer-title mb-16">about us</div>
                                    <ul class="list-reset">
                                        <li>
                                            <a href="terms_of_service.html">View information about us and our terms of service</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-footer-bottom">

                        <div class="footer-copyright">&copy; 2019 neckline.space is a product of Hedtell Services, all rights reserved</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="dist/js/main.min.js"></script>
</body>

</html>