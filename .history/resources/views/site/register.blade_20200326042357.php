@include ('site.includes.header')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Sign Up</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Sign Up</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Signup Area -->
    <div class="signup-section ptb-100">
        <div class="container">
            <div class="signup-form">
                <h3>Create your Account</h3>
                <form>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                        </div>
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
                                <label class="form-check-label" for="checkme">Keep Me Signup</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="send-btn">
                                <a href="signup.html#" class="default-btn-one">Signup Now</a>
                            </div>
                            <br>
                            <span>Already a registered user? 
                                <a href="login.html">Login!</a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Signup Area -->

@include ('site.includes.footer')