
@include ('site.includes.header')

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Log In</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Log In</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Login Area -->
        <div class="login-section ptb-100">
            <div class="container">
                <div class="login-form">
                    <div class="login-title">
                        <h3>Welcome Back!</h3>
                        <p>Please login to your account.</p>
                    </div>                       
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Keep me Login</label>
                                </div>
                            </div>
                            <div class="col-lg-12 text-right">
                                <p class="forgot-password">
                                    <a href="login.html#">Forgot Password?</a>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <a href="login.html#" class="default-btn-one">Login Now</a>
                                </div>
                                <br>
                                <span>Don't have account? 
                                    <a href="signup.html">Signup!</a>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Login Area -->

        @include ('site.includes.footer')