<x-guest-layout>
    <!-- Full Page Image Background Slider -->
    <div class="slider-container">
        <!-- Controls -->
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <!--Slider -->
        <div class="slider">
            <!-- Slide 0 -->
            <div class="slide slide-0 active" style="background-image:url('{{ asset('img/slide0.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content my-auto">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">Welcome to PETZ</h1>
                        <div class="hidden-mobile">
                            <p class="lead">Petz is a fun HTML5 Pet Template with many elements for your Pet related website</p>
                            <a href="services.html" class="btn btn-default">our services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="slide slide-1" style="background-image:url('{{ asset('img/slide1.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">We Love Pets!</h1>
                        <div class="hidden-mobile">
                            <p class="lead">We offer all the best quality products for your best friend.</p>
                            <a href="blog.html" class="btn btn-default">our Blog</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide slide-2" style="background-image:url('{{ asset('img/slide2.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">Amazing Services</h1>
                        <div class="hidden-mobile">
                            <p class="lead">We offer all the best quality products for your best friend.</p>
                            <a href="about.html" class="btn btn-default">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slide2 -->
        </div>
        <!--/Slider-->
    </div>
    <!--/ Slider ends -->
    <!-- SVG Curve Up -->
    <svg id="curveUp" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#fff">
        <path d="M0 100 C 20 0 50 0 100 100 Z"/>
    </svg>
    <!-- Section Services-index -->
    <section id="services-index">
        <!-- container -->
        <div class="container">
            <div class="section-heading">
                <h2>Our Services</h2>
            </div>
            <!-- /section-heading-->
            <div class="col-lg-10 offset-lg-1 text-center">
                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
            </div>
            <!-- /col-->
        </div>
        <!-- /container-->
        <div class="container-fluid bg-pattern margin1"  data-bottom-top="background-position: 0px 70%,99% 70%;"
             data-top-bottom="background-position: 0px -50%,99% -50%;">
            <div class="container">
                <div class="row p-3">
                    <!-- Services -->
                    <div class="slider-3">
                        <!-- Feature Box 1  -->
                        <div class="col-12">
                            <div class="box_icon m-3">
                                <div class="icon">
                                    <!-- icon -->
                                    <div class="image">
                                        <img src="{{ asset('img/service1.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Exotic Pets</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                                        <!-- Button-->
                                        <a class="btn" href="services-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /box_icon -->
                        </div>
                        <!-- /col-12 ends -->
                        <!-- Feature Box 2 -->
                        <div class="col-12">
                            <div class="box_icon m-3">
                                <div class="icon">
                                    <!-- icon -->
                                    <div class="image">
                                        <img src="{{ asset('img/service2.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Vet Services</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                                        <!-- Button-->
                                        <a class="btn" href="services-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /box_icon -->
                        </div>
                        <!-- /col-12 ends -->
                        <!-- Feature Box 3  -->
                        <div class="col-12">
                            <div class="box_icon m-3">
                                <div class="icon">
                                    <!-- icon -->
                                    <div class="image">
                                        <img src="{{ asset('img/service3.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Great Products</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                                        <!-- Button-->
                                        <a class="btn" href="services-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /box_icon -->
                        </div>
                        <!-- /col-12 ends -->
                        <!-- Feature Box 4  -->
                        <div class="col-12">
                            <div class="box_icon m-3">
                                <div class="icon">
                                    <!-- icon -->
                                    <div class="image">
                                        <img src="{{ asset('img/service4.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Pet Hotel</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                                        <!-- Button-->
                                        <a class="btn" href="services-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /box_icon -->
                        </div>
                        <!-- /col-12 ends -->
                        <!-- Feature Box 5  -->
                        <div class="col-12">
                            <div class="box_icon m-3">
                                <div class="icon">
                                    <!-- icon -->
                                    <div class="image">
                                        <img src="{{ asset('img/service5.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Dog Walking</h4>
                                        <p>Nulla vel metus scelerisque ante sollicitudinlorem ipsuet commodo. Cras purus odio, vestibulum in vulputate a Imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                                        <!-- Button-->
                                        <a class="btn" href="services-single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /box_icon -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /slider -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /container-fluid-->
    </section>
    <!-- Section About-index -->
    <section id="about-index" class="bg-lightcolor1">
        <div class="container">
            <div class="section-heading text-center">
                <h2>About Us</h2>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-7">
                    <h3>For your best friend</h3>
                    <p>
                        Pat a lorem ipsuet nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor  Phas ellus ac sodales felis tiam non metus.
                        vest ibulum orci eget usce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id iprum omnis.
                    </p>
                    <!-- Accordion -->
                    <div class="accordion mt-4" id="accordion1">
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Social Responsability
                                </button>
                            </p>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <p>Patatemp dolupta orem retibusam qui commolu
                                        les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Mission Statement
                                </button>
                            </p>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <p>Patatemp dolupta orem retibusam qui commolu
                                        les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Value added services
                                </button>
                            </p>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <p>Patatemp dolupta orem retibusam qui commolu
                                        les felis tiam non metus ali quam eros Pellentesque turpis lectus, placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget, viverra elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /accordion item -->
                    </div>
                    <!-- /.accordion -->
                </div>
                <!-- /col-lg-7-->
                <!-- Parallax object -->
                <div class="parallax-object1 hidden-sm d-none d-lg-block"  data-100-start="right: 0%;"
                     data-center-bottom="right:30%;"  >
                    <!-- Image -->
                    <img src="{{ asset('img/illustrations/petbowl.png') }}" alt="">
                </div>
                <!-- /parallax-object1-->
                <div class=" col-lg-5" >
                    <img src="{{ asset('img/about-index.png') }}" class="img-fluid" alt="">
                </div>
                <!-- /col-lg-5-->
            </div>
            <!-- /row -->
            <div class="row margin1 text-center">
                <!-- item 1 -->
                <div class="features col-lg-3">
                    <div class="col-12 big-icon">
                        <!-- icon -->
                        <i class="flaticon-dog-and-pets-house"></i>
                    </div>
                    <div class="col-12">
                        <h5>Housing</h5>
                        <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
                    </div>
                </div>
                <!-- /col-lg-3 -->
                <!-- item 2 -->
                <div class="features col-lg-3">
                    <div class="col-12 big-icon">
                        <!-- icon -->
                        <i class="flaticon-dog-in-front-of-a-man"></i>
                    </div>
                    <div class="col-12">
                        <h5>High Quality</h5>
                        <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
                    </div>
                </div>
                <!-- /col-lg-3 -->
                <!-- item 3 -->
                <div class="features col-lg-3">
                    <div class="col-12 big-icon">
                        <!-- icon -->
                        <i class="flaticon-veterinarian-hospital"></i>
                    </div>
                    <div class="col-12">
                        <h5>Vet Services</h5>
                        <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
                    </div>
                </div>
                <!-- /col-lg-3 -->
                <!-- item 1 -->
                <div class="features col-lg-3">
                    <div class="col-12 big-icon">
                        <!-- icon -->
                        <i class="flaticon-animals-3"></i>
                    </div>
                    <div class="col-12">
                        <h5>Special Care</h5>
                        <p>Aenean lacinia bibendum nulla sed consectetur ras mattis consectetur purus sit amet fermentum sociis natoque penatibus et magnis.</p>
                    </div>
                </div>
                <!-- /col-lg-3 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <div class="container-fluid">
        <!-- Section Call to action -->
        <section class="call-to-action small-section bg1" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -80px;" data-bottom-top="background-position: 50% 80px;">
            <div class="container text-center">
                <!-- card -->
                <div class="col-lg-5 bg-darkcolor card">
                    <div class="col-lg-12">
                        <h4>Subscribe to our newsletter</h4>
                        <p>Ultricies a,interdum donec eget metus auguen u Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem.</p>
                        <!-- Form -->
                        <div id="mc_embed_signup" class="margin1">
                            <!-- your form adresss in the line bellow -->
                            <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <div class="input-group">
                                            <input class="form-control input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                            <span class="input-group-btn">
                                    <button class="btn" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                                    </span>
                                        </div>
                                        <!-- Subscription results -->
                                        <div id="mce-responses" class="mailchimp">
                                            <div class="alert alert-danger response" id="mce-error-response"></div>
                                            <div class="alert alert-success response" id="mce-success-response"></div>
                                        </div>
                                    </div>
                                    <!-- /mc-fiel-group -->
                                </div>
                                <!-- /mc_embed_signup_scroll -->
                            </form>
                            <!-- /form ends -->
                        </div>
                        <!-- /mc_embed_signup -->
                    </div>
                    <!-- /col-lg -->
                </div>
                <!-- /col-lg -->
            </div>
            <!-- /container -->
        </section>
        <!-- /Section ends -->
    </div>
    <!-- /container-fluid --><!-- Section Reviews -->
    <section id="reviews">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Clients Reviews</h2>
            </div>
            <!-- Parallax object -->
            <div class="parallax-object2 hidden-sm d-none d-lg-block hidden-md"
                 data-100-start="transform:rotate(-0deg); left:20%;"
                 data-top-bottom="transform:rotate(-370deg);">
                <!-- Image -->
                <img src="{{ asset('img/illustrations/toy.png') }}" alt="">
            </div>
            <!-- /parallax-object -->
            <div class="col-lg-9 offset-lg-3">
                <!-- Reviews -->
                <div class="slider-3 mt-5 p-2">
                    <!-- review 1 -->
                    <div class="review">
                        <div class="col-12 p-3">
                            <!-- caption -->
                            <div class="review-caption">
                                <h5>Alejandro Bracamonte</h5>
                                <div class="small-heading">
                                    Dog Dad
                                </div>
                                <blockquote>
                                    Pet Ville Inn offers an exceptional experience for your dogs. From the moment you step inside, you'll be greeted by a welcoming atmosphere and friendly staff who genuinely care about your pet's well-being.
                                </blockquote>
                            </div>
                            <!-- Profile image -->
                            <div class="review-profile-image">
                                <img src="{{ asset('img/alejandro.jpeg') }}" alt="" >
                            </div>
                            <!--/review profile image -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /review-->
                    <!-- review 2 -->
                    <div class="review">
                        <div class="col-12 p-3">
                            <!-- caption -->
                            <div class="review-caption">
                                <h5>Carolina Ayllon</h5>
                                <div class="small-heading">
                                    Dog Mom
                                </div>
                                <blockquote>
                                    The happiest place for my dog. She was super happy and playing all day long. 100% recommended and it’s managed by the owner who is a dedicated person that loves animals.
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                </blockquote>
                            </div>
                            <!-- Profile image -->
                            <div class="review-profile-image">
                                <img src="{{ asset('img/carolina.jpeg') }}" alt="" >
                            </div>
                            <!--/review profile image -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /review-->
                    <!-- review 3 -->
                    <div class="review">
                        <div class="col-12 p-3">
                            <!-- caption -->
                            <div class="review-caption">
                                <h5>
                                    Valeria
                                    <br>
                                    Leon
                                </h5>
                                <div class="small-heading">
                                    Happy Customer
                                </div>
                                <blockquote>
                                    An incredible experience! The service at this dog hotel is exceptional. The place is absolutely beautiful and, most importantly, safe for our furry friends!
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                </blockquote>
                            </div>
                            <!-- Profile image -->
                            <div class="review-profile-image">
                                <img src="{{ asset('img/valeria.jpeg') }}" alt="" >
                            </div>
                            <!--/review profile image -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /review-->
                    <!-- review 4 -->
                    <div class="review">
                        <div class="col-12 p-3">
                            <!-- caption -->
                            <div class="review-caption">
                                <h5>Valderes Fuenmayor</h5>
                                <div class="small-heading">
                                    Dog parent
                                </div>
                                <blockquote>
                                    Excellent service! Super happy to have this great option to give my Lucca fun and care... Thanks for this initiative! 100% recommended.
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                </blockquote>
                            </div>
                            <!-- Profile image -->
                            <div class="review-profile-image">
                                <img src="{{ asset('img/valderes.jpeg') }}" alt="" >
                            </div>
                            <!--/review profile image -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /review-->
                    <!-- review 4 -->
                    <div class="review">
                        <div class="col-12 p-3">
                            <!-- caption -->
                            <div class="review-caption">
                                <h5>Gisela Romero</h5>
                                <div class="small-heading">
                                    Cat Mom
                                </div>
                                <blockquote>
                                    I left my two cats, I was a little nervous but they sent me pictures of my babies all the time, I totally recommend this place 👍✅.
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                    <br>
                                    &nbsp;
                                </blockquote>
                            </div>
                            <!-- Profile image -->
                            <div class="review-profile-image">
                                <img src="{{ asset('img/gisela.jpeg') }}" alt="" >
                            </div>
                            <!--/review profile image -->
                        </div>
                        <!-- /col-12 ends -->
                    </div>
                    <!-- /review-->
                </div>
                <!-- /slider -->
            </div>
            <!-- /col -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /Section ends -->
    <!-- callout-->
    <section class="callout container-fluid p-5 p-lg-0">
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-12 text-center text-xl-start p-0" data-start="right: 25%;"
                 data-center="right:0%;">
                <!-- image  -->
                <img src="{{ asset('img/call1.jpg') }}" class="img-fluid img-rounded" alt="">
            </div>
            <!-- text box  -->
            <div class="callout-box col-xl-6 offset-xl-5 col-lg-12 bg-darkcolor"  data-start="left: 25%;"
                 data-center="left:0%;">
                <h3>We Love Pets</h3>
                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus vi tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                <a href="contact.html" class="btn">Contact us</a>
            </div>
            <!-- /callout-box  -->
        </div>
        <!-- /row -->
    </section>
    <!-- /callout -->
    <!-- Section Stats -->
    <section id="stats" class="bg-lightcolor2">
        <div class="section-heading text-center">
            <h2>Our Stats</h2>
        </div>
        <div class="container">
            <div class="col-lg-9">
                <div class="row text-center">
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 1 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='180' data-delay='20' data-increment="19">0</div>
                        <h5>Customers</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 2 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='16' data-delay='10' data-increment="9">0</div>
                        <h5>Professionals</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 3 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='67' data-delay='20' data-increment="19">0</div>
                        <h5>Pets Hosted</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 4 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='50' data-delay='10' data-increment="9">0</div>
                        <h5>Products</h5>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- Section Ends--><!-- Section Contact  -->
    <section id="contact-index">
        <div class="container">
            <div class="section-heading">
                <h2>Contact Us</h2>
            </div>
            <div class="col-xl-6 offset-xl-6">
                <!-- contact info -->
                <h4>Information</h4>
                <ul class="list-inline">
                    <li><i class="fa fa-envelope"></i><a href="mailto:info@petville-inn.com">info@petville-inn.com</a></li>
                    <li><i class="fa fa-phone margin-icon"></i>Call Us +1 (786) 318-0694</li>
                    <li><i class="fa fa-map-marker margin-icon"></i>17235 Sw 224st. Miami. FL. 33170</li>
                </ul>
                <h4 class="margin1">Send us a Message</h4>
                <!-- Form Starts -->
                <div id="contact_form">
                    <div class="form-group">
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="name" class="form-control input-field" required="">
                        <label>Email Adress <span class="required">*</span></label>
                        <input type="email" name="email" class="form-control input-field" required="">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control input-field" required="">
                        <label>Message<span class="required">*</span></label>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                    </div>
                    <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
                </div>
                <!-- Contact results -->
                <div id="contact_results"></div>
            </div>
            <!-- /col-xl-->
        </div>
        <!-- /container -->
    </section>
    <!-- /Section ends -->
    <div class="container-fluid">
        <div class="section-heading mt-lg-5">
            <h2>Where to Find Us</h2>
        </div>
        <!-- map-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7198.824691883349!2d-80.47079860617096!3d25.55794473288831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9e8115198d631%3A0xeeec776f6d18abb1!2s17235%20SW%20224th%20St%2C%20Miami%2C%20FL%2033170!5e0!3m2!1ses-419!2sus!4v1712007667505!5m2!1ses-419!2sus" width="100%" height="400rem" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</x-guest-layout>
