<section class="content">
    <!-- Contact area start -->
    <div id="humanity-contact-id" class="theme-section contact-section white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-heading text-center">
                        <h2 class="area-title">contactarnos</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="single-contact-option text-left">
                        <i class="fa fa-map-o"></i>
                        <h4>address street</h4>
                        <p><span>Address</span> : 1 Hacker Way, Menlo Park</p>
                        <p>new York, USA</p>
                    </div>
                    <div class="single-contact-option text-left">
                        <i class="fa fa-phone"></i>
                        <h4>Mobile phone</h4>
                        <p><span>Phone 1:</span> +1 234 234 132</p>
                        <p><span>Phone 2:</span> +2 432 432 532</p>
                    </div>
                    <div class="single-contact-option text-left">
                        <i class="fa fa-envelope-o"></i>
                        <h4>Address email</h4>
                        <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                        <a href="mailto:admin@yourdomain.com">yourname@yourdomain.com</a>
                    </div>
                </div>                                
                <div class="col-md-9 col-sm-12">
                    <div class="contact-page-area">
                        <form id="humanity-contact-form" action="php/mail.php" method="POST" class="contcat-form">
                            <div class="form-head fix">
                                <div class="marg-area">
                                    <input type="text" name="name" placeholder="Name" Required>
                                </div>
                                <div class="marg-area">
                                    <input type="email" name="mail" placeholder="Email" Required>
                                </div>
                            </div>
                            <div class="form-head fix">
                                <div class="marg-area">
                                    <input type="text" name="subject" placeholder="Subject" Required>
                                </div>
                                <div class="marg-area">
                                    <input type="tel" name="phone" placeholder="Phone" Required>
                                </div>
                            </div>
                            <div class="form-body">
                                <textarea name="message" class="text-area" rows="10" placeholder="Message" Required></textarea>
                            </div>
                            <button class="btn btn-default" type="button">enviar mensaje</button>
                        </form>
                        <p class="humanity-form-send-message"></p>
                    </div>
                </div>                           
            </div>                           
        </div>
    </div>
    <!-- Contact area end -->
    <!-- Map area start -->
    <!--<div id="humanity-map"></div>--> 
    <!-- Map area end -->
    <!-- sponsor area start -->
    @include('includes.resources.sponsors')
    <!-- sponsor area end -->
</section>