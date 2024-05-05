<x-guest-layout>
    <!-- Section Gallery -->
    <section id="gallery" class="pages">
        <div class="jumbotron gallery-header"  data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -80px;" data-bottom-top="background-position: 50% 80px;">
            <!-- Heading -->
            <div class="jumbo-heading"  data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -80px;" data-bottom-top="background-position: 50% 80px;">
                <h1>Gallery</h1>
            </div>
        </div>
        <div class="container">
            <!-- centered Gallery navigation -->
            <ul class="nav nav-pills category-isotope justify-content-center mt-5">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-bs-toggle="tab" data-filter="*">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tab" data-filter=".dog">Dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tab" data-filter=".cat">Cats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="tab" data-filter=".facilities">Facilities</a>
                </li>
            </ul>
            <!-- /ul -->
            <!-- Gallery Starts-->
            <div class="row">
                <div class="col-lg-12 margin1">
                    <div id="lightbox">
                        <!-- Dogs -->
                        @php
                            $dogIndexes = range(1,6);
                        @endphp
                        @foreach($dogIndexes as $index)
                            <div class="col-lg-4 col-md-6 dog">
                                <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                        <img class="img-fluid" src="{{ asset('img/gallery/dogs/dogs'.$index.'.jpg') }}" alt="">
                                        <span class="overlay-mask"></span>
                                        <a href="{{ asset('img/gallery/dogs/dogs'.$index.'.jpg') }}" class="link centered" title="">
                                            <i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End of Dogs -->
                        <!-- Cats -->
                        @php
                            $catIndexes = range(1,6);
                        @endphp
                        @foreach($catIndexes as $index)
                            <div class="col-lg-4 col-md-6 cat">
                                <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                        <img class="img-fluid" src="{{ asset('img/gallery/cats/cats'.$index.'.jpg') }}" alt="">
                                        <span class="overlay-mask"></span>
                                        <a href="{{ asset('img/gallery/cats/cats'.$index.'.jpg') }}" class="link centered" title="">
                                            <i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End of Cats -->
                        <!-- Facilities -->
                        @php
                            $facilityIndexes = range(1,7);
                        @endphp
                        @foreach($facilityIndexes as $index)
                            <div class="col-lg-4 col-md-6 facilities">
                                <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                        <img class="img-fluid" src="{{ asset('img/gallery/facilities/facilities'.$index.'.jpg') }}" alt="">
                                        <span class="overlay-mask"></span>
                                        <a href="{{ asset('img/gallery/facilities/facilities'.$index.'.jpg') }}" class="link centered" title="">
                                            <i class="fa fa-expand"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End of Facilities -->
                    </div>
                    <!-- /lightbox-->
                </div>
                <!-- /col-lg-12-->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- Section ends -->
</x-guest-layout>
