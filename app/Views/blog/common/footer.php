<div class="clearfix"></div>
</div> 
<!--/ Content -->
<!-- Footer -->
<footer>
    <div class="copyrights">
        &copy;<?php echo date('Y') . ' <b>' . $title . '</b>'; ?> All Rights Reserved
    </div>
    <div class="social">
    <b style="display: inline">Follow me </b>
        <a href="<?php echo $facebook; ?>" target="_blank" class="facebook">
            <span class="fa fa-facebook"></span>
        </a>
        <a href="<?php echo $twitter; ?>" target="_blank" class="twitter">
            <span class="fa fa-twitter"></span>
        </a>
        <a href="<?php echo $instagram; ?>" target="_blank" class="instagram">
            <span class="fa fa-instagram"></span>
        </a>
        <!--        <a href="#" class="google">
                    <span class="fa fa-google-plus"></span>
                </a>
                <a href="#" class="youtube">
                    <span class="fa fa-youtube"></span>
                </a>
                <a href="#" class="pinterest">
                    <span class="fa fa-pinterest"></span>
                </a>
                <a href="#" class="rss">
                    <span class="fa fa-rss"></span>
                </a>-->
    </div>
</footer>
<!--/ Footer -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- WOW JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script><!-- Custom JS -->
<script src="<?php echo assets('blog/js/custom.js'); ?>"></script>
<!-- Google ReCAPTCHA -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    // Navbar items
    var currentUrl = window.location.href;
    var segment = currentUrl.split('/').pop();
    $('#nav-' + segment).addClass('active');
</script>
</body>
</html>
