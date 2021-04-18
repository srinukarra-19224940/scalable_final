<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health Care : Contact</title>
    <?php include('src/head.php') ?>
</head>

<body>

    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->

    <?php echo youAreHere("Contact") ?>
    <!--=========== BEGIN Google Map SECTION ================-->
    <!-- <section id="googleMap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Intergraph+Way%2C+Madison%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="500" frameborder="0" style="border:0"></iframe>
    </section> -->
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1000" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=dublin&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">how to make a website map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
    <!--=========== END Google Map SECTION ================-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <div class="contact-form">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <div class="line"></div>
                        </div>
                        <p>Fill out all required Field to send a Message. Please don't SKm,Thank you!</p>
                        <form class="submitphoto_form" method="post" action="sendmail.php">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Your name" name="nam">
                            <input type="email" class="wp-form-control wpcf7-email" placeholder="Email address" name="from">
                            <input type="text" class="wp-form-control wpcf7-text" placeholder="Subject" name="sub">
                            <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us" name="mess"></textarea>
                            <button class="wpcf7-submit button--itzel" type="submit"><i class="button__icon fa fa-envelope"></i><span>Send Message</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="contact-address">
                        <div class="section-heading">
                            <h2>Contact Information</h2>
                            <div class="line"></div>
                        </div>
                        <p>Feel free to contact us any moment using any of the details provided below.</p>
                        <address class="contact-info">
                            <p><span class="fa fa-home"></span>NCI
                                dublin, <i>Ireland</i></p>
                            <p><span class="fa fa-phone"></span>123458976</p>
                            <p><span class="fa fa-envelope"></span>healthcare@gmail.com</p>
                        </address>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=========== Start Footer SECTION ================-->
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
