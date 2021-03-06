<!-- Login Page -->
<div id="login-page" class="page box">
    <!-- Centered Content -->
    <div class="centered-content">
        <!--Social network login-->
        <!--
        <h3 class="text-center">Login with:</h3>
        <div class="text-center">
            <a class="btn btn-social-icon btn-facebook btn-lg"><span class="fa fa-facebook"></span></a>
            <a class="btn btn-social-icon btn-google btn-lg"><span class="fa fa-google"></span></a>
            <a class="btn btn-social-icon btn-twitter btn-lg"><span class="fa fa-twitter"></span></a>
        </div>
        <div class="text-center" >
            <h2 style="width: 100%; border-bottom: 1px solid #999; line-height: 0.1em;margin: 30px 0 20px; ">
                <span style="background-color:#fff;padding:10px 10px;color: #999; font-size: 0.75em">Or</span>
            </h2>
        </div>
        -->
        <!--Social network login-->
        <!-- Form -->
        <form action="<?php echo url('login/submit'); ?>" class="form">
            <div class="form-group">
                <label for="email" class="col-xs-1">Email</label>
                <div class="col-sm-12 col-xs-12">
                    <input type="email" name="email" id="email" placeholder="Email Address" class="input placeholder form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-xs-1">Password</label>
                <div class="col-sm-12 col-xs-12">
                    <input type="password" name="password" id="password" placeholder="Password" class="input form-control" />
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="form-results"></div>
            <div class="form-group">
                <div class="col-sm-offset-0 col-sm-12 col-xs-12">
                    <button class="button bold submit-btn btn-block form-control">Login</button>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group text-center">
                Don't have account yet ? <a href="<?php echo url('/register'); ?>">Sign up now</a>
            </div>
        </form>
        <!--/ Form -->
    </div>
    <!--/ Centered Content -->
</div>
<!--/ Login Page -->