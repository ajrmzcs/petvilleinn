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
            <div class="slide slide-0 active" style="background-image:url('{{ asset('img/main-1.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content my-auto">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">Welcome to Petville Inn</h1>
                        <div class="hidden-mobile">
                            <p class="lead">Where our beloved furry friends are part of our extended family.</p>
                            <a href="#" class="btn btn-default" onclick="scrollToServices()">Explore our services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="slide slide-1" style="background-image:url('{{ asset('img/main-2.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">We Love Pets!</h1>
                        <div class="hidden-mobile">
                            <p class="lead">Your pets deserve a safe place while they're away from home. Let us take care of them with love and professionalism.</p>
                            <a href="{{ route('about') }}" class="btn btn-default">About us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="slide slide-2" style="background-image:url('{{ asset('img/main-3.jpg') }}')">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <div class="slide__overlay">
                    </div>
                    <!-- slide text-->
                    <div class="slide__text">
                        <h1 class="slide__text-heading">Amazing Services</h1>
                        <div class="hidden-mobile">
                            <p class="lead">Make your pet’s lodging experience unforgettable! Take a look some of our regular guests!</p>
                            <a href="{{ route('gallery') }}" class="btn btn-default">Our Gallery</a>
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
        <div class="container" id="services">
            <div class="section-heading">
                <h2>Welcome to Petville Inn</h2>
            </div>
            <!-- /section-heading-->
            <div class="col-lg-10 offset-lg-1 text-center">
                <p>
                    At Petville Inn, we specialize in providing top-quality services for the care of your pets. We offer safe and comfortable lodging, engaging recreational routines, and reliable feeding, all rooted in social responsibility and a commitment to animal welfare.
                    We strive to create a safe, comfortable, and welcoming environment for your pets. Check out our services!
                </p>
                <p></p>
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
                                        <img src="{{ asset('img/dog-boarding-service.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Dog Boarding</h4>
                                        <p>Trust our team of animal care experts to ensure the well-being and happiness of your doggos during their stay with us.</p>
                                        <!-- Button-->
                                        <a class="btn" href="{{ route('dog-boarding') }}">Read More</a>
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
                                        <img src="{{ asset('img/cat-boarding-service.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Cat Boarding</h4>
                                        <p>Your best friend deserves the best care. Your Cats will be treated as part of our family in our home.</p>
                                        <!-- Button-->
                                        <a class="btn" href="{{ route('cat-boarding') }}">Read More</a>
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
                                        <img src="{{ asset('img/grooming-service.jpg') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="info">
                                        <h4>Grooming</h4>
                                        <p>Trust us to care for your faithful companion. Our team is trained to provide the best care and affection.</p>
                                        <!-- Button-->
                                        <a class="btn" href="{{ route('grooming') }}">Read More</a>
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
                <h2>Who we are</h2>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-7">
                    <h3>A home for your best friend</h3>
                    <p>
                        In our pet resort, we are dedicated to offering all the love and attention your pets deserve.
                        While staying at their temporary home away from home, we strive to create a warm and familiar environment where your furry friends feel loved and protected.
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
                                    <p>
                                        We are focused on providing support in the placement and adoption of furry companions in situations of abandonment or risk, ensuring their well-being and happiness at every stage of the process. It is our commitment to actively contribute to the rescue, care, and transportation of these animals to a new home, promoting responsible adoption and unconditional love towards pets.
                                    </p>
                                    <p>
                                        We are proud to partner with <a href="https://www.miamidade.gov/global/service.page?Mduid_service=ser159925122910773" target="_blank">Miami Dade shelter</a> and
                                        <a href="https://petorphansmiami.com/" target="_blank">Pet Orphans Miami</a> in our efforts to rescue, care for, and find loving homes for dogs and cats in need. Together, we are making a meaningful impact in the lives of these furry friends!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Our Beloved Mission
                                </button>
                            </p>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <p>
                                        Our mission at Petville Inn, is to provide a safe and welcoming environment for pets, ensuring their well-being and happiness at all times, offering the highest quality lodging, care, and grooming services.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- accordion item -->
                        <div class="accordion-item">
                            <p class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Vision
                                </button>
                            </p>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion1">
                                <div class="accordion-body">
                                    <p>
                                        Our vision is to be recognized as the ideal haven for pets, where every furry friend feels at home, receiving personalized attention, affection, and exceptional care during their stay wit us. Because every furry friend deserves the best! ❤️
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
                <div class="mt-4 mt-lg-0 col-lg-5" >
                    <img src="{{ asset('img/index-vertical-dog.jpeg') }}" class="img-fluid" alt="">
                </div>
                <!-- /col-lg-5-->
            </div>
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->
    <!-- /container-fluid --><!-- Section Reviews -->
    <section id="reviews" style="background-image:url('{{ asset('img/review-golden.jpg') }}')">
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
                <img src="{{ asset('img/we-love-pets.jpg') }}" class="img-fluid img-rounded" alt="">
            </div>
            <!-- text box  -->
            <div class="callout-box col-xl-6 offset-xl-5 col-lg-12 bg-darkcolor"  data-start="left: 25%;"
                 data-center="left:0%;">
                <h3>We are here for your Pets</h3>
                <p>
                    At Petville Inn, we provide a temporary home for your beloved pets while they are away from home.
                    Trust us to take care of your furry friend and become part of our family!
                </p>
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
                        <div class="numscroller" data-slno='1' data-min='0' data-max='25' data-delay='20' data-increment="19">0</div>
                        <h5>Customers</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 2 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='5' data-delay='10' data-increment="9">0</div>
                        <h5>Professionals</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 3 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='55' data-delay='20' data-increment="19">0</div>
                        <h5>Pets Hosted</h5>
                    </div>
                    <div class="col-lg-6 col-xl-3">
                        <!-- Number 4 -->
                        <div class="numscroller" data-slno='1' data-min='0' data-max='3' data-delay='10' data-increment="9">0</div>
                        <h5>Products</h5>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container-->
    </section>
    <!-- Section Ends--><!-- Section Contact  -->
    <section id="contact-index" style="background: url('{{ asset('img/contact-us.jpg') }}') no-repeat; background-attachment: fixed;background-position: 0% bottom;background-color: #fff;">
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
                <livewire:contact-form />
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
        <div id="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7198.824691883349!2d-80.47079860617096!3d25.55794473288831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9e8115198d631%3A0xeeec776f6d18abb1!2s17235%20SW%20224th%20St%2C%20Miami%2C%20FL%2033170!5e0!3m2!1ses-419!2sus!4v1712007667505!5m2!1ses-419!2sus" width="100%" height="400rem" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
    <script>
        function scrollToServices() {
            var target = document.getElementById('services');
            target.scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</x-guest-layout>
