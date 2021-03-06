@include('user.includes.header')

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Profile Page</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Box Area -->
<section class="contact-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-map-marker"></i>
                    <div class="content-title">
                        <h3>Address</h3>
                        <p>32 st Kilda Road, Melbourne VIC, 3004 Australia</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-contact-box">
                    <i class="fa fa-envelope"></i>
                    <div class="content-title">
                        <h3>Email</h3>
                        <a href="mailto:hello@exto.com">hello@exto.com</a>
                        <a href="mailto:hello@exto.com">fax@exto.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-contact-box">
                    <i class="fa fa-phone"></i>
                    <div class="content-title">
                        <h3>Phone</h3>
                        <a href="tel:+123(456)123">+123(456)123</a>
                        <a href="tel:+123(456)123">+123(456)123</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Box Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Drop us a message for any query</h2>
            <p>If you have an idea, we would love to hear about it.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone-number" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="default-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->

@include('user.includes.footer')