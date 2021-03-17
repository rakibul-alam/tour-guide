@extends('font-panel.master')

@section('title')

    La Destino - Packages

    @endsection

@section('body')
    @include('font-panel.common.special-discount')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Today’s Hot Deals</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>”We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day to."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <div id="mySlider" class="carousel slide" data-ride="carousel" data-interval="2000">

                        <ol class="carousel-indicators">
                            <li data-target="#mySlider" data-slide-to="0"></li>
                            <li data-target="#mySlider" data-slide-to="1"></li>
                            <li data-target="#mySlider" data-slide-to="2"></li>
                            <li data-target="#mySlider" data-slide-to="3"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('/')}}/font-asset/images/cox1.jpg" alt="1" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <div class="text-white slider-cap">
                                        <h1>Cox's Bazar</h1>
                                        <p>Longest Sea Beach In The World!</p>
                                        <a href="">Stating from 6000tk</a>
                                    </div>
                                    <!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{asset('/')}}/font-asset/images/cox2.jpg" alt="2" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <div class="text-light slider-cap">
                                        <h1>Saint Martin</h1>
                                        <p>Blue Island Known As Mysterious Island!</p>
                                        <a href="">Stating from 6000tk</a>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{asset('/')}}/font-asset/images/kap1.jpg" alt="3" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <div class="text-white slider-cap">
                                        <h1>Kaptai</h1>
                                        <p>Land of Colorful Water!</p>
                                        <a href="">Stating from 6000tk</a>
                                    </div>
                                    <!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="{{asset('/')}}/font-asset/images/shy1.jpg" alt="4" class="img-responsive"/>
                                <div class="carousel-caption">
                                    <div class="text-light slider-cap">
                                        <h1>Shylet</h1>
                                        <p>The Beauty In the Green!</p>
                                        <a href="">Stating from 6000tk</a>
                                    </div>
                                    <!--<input type="button" class="btn btn-info btn-sm" value="Starting from 6000tk.">-->
                                </div>
                            </div>
                        </div>
                        <a href="#mySlider" class="carousel-control-prev" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a href="#mySlider" class="carousel-control-next" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="choice">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Upcoming Tour Packages</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>”All you need is the plan, the road map, and the courage to press on to your destination." ~ Earl</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="packages">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('/')}}/font-asset/images/bandarban.jpg" alt="offer" class="offer-img"/>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div>
                        <p class="text-danger">Date: 20/09/2018</p>
                        <h6>From $6000tk</h6>
                        <h3>Bandarban, Chittagong</h3>
                        <p class="text-muted">1 person/4 nights/3 star hotel</p>
                        <div class="fav-star">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half text-warning"></i>
                        </div>
                        <p class="text-justify">Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</p>
                        <a href="" class="btn btn-outline-info btn-sm">Read More!</a>
                        <a href="" class="btn btn-outline-secondary btn-sm">Enroll Me!</a>
                        <span>Enroll today and get <del class="text-danger">30% off!!</del></span>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('/')}}/font-asset/images/cox2.jpg" alt="offer" class="offer-img"/>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div>
                        <p class="text-danger">Date: 20/09/2018</p>
                        <h6>From $6000tk</h6>
                        <h3>Cox's Bazar, Chittagong</h3>
                        <p class="text-muted">1 person/4 nights/3 star hotel</p>
                        <div class="fav-star">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half text-warning"></i>
                        </div>
                        <!--<p class="text-justify"> — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</p>-->
                        <p class="text-justify">Cox’s Bazar is a small town and port in southern Bangladesh. This quaint little sea town boasts the world’s longest sea beach – over 120 km of unbroken sand! Combine this with the tropical climate and Cox’s Bazar should land fairly high on any beach-goers destination list.</p>
                        <a href="" class="btn btn-outline-info btn-sm">Read More!</a>
                        <a href="" class="btn btn-outline-secondary btn-sm">Enroll Me!</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('/')}}/font-asset/images/nepal.jpg" alt="offer" class="offer-img"/>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div class="">
                        <p class="text-danger">Date: 20/09/2018</p>
                        <h6>From $10000tk</h6>
                        <h3>Patang, Nepal</h3>
                        <p class="text-muted">1 person/4 nights/3 star hotel</p>
                        <div class="fav-star">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half text-warning"></i>
                        </div>
                        <!--<p class="text-justify">Bandarban is in Chittagong division and located in southeastern Bangladesh. It is one the most attractive travel destination in Bangladesh for its adventurous characteristics and heavenly scenic beauty. This eventually gets really hard to leave if anyone visits Bandarban. The scenic beauty will undoubtedly captivate your soul. Bandarban includes the three highest peak of Bangladesh — Tahjindong (or Bijoy), Mowdok Mual (or Saka Haphong) and Keokradong. Anyone can easily hike through the jungle and hilly rivers to win any of these three god’s creations. There are so many waterfalls hidden through the hills of Bandarban would appear in your hiking. The exotic offerings such as foods, tribal handicrafts etc from the tribal people will delight your heart. Meanwhile you can easily experience the tribal culture very closely.</p>-->
                        <p class="text-justify">Lalitpur Metropolitan City, historically Patan, is the third largest city of Nepal after Kathmandu and Pokhara and it is located in the south-central part of Kathmandu Valley which is a new metropolitan city of Nepal. Lalitpur is also known as Manigal. It is best known for its rich cultural heritage, particularly its tradition of arts and crafts</p>
                        <a href="" class="btn btn-outline-info btn-sm">Read More!</a>
                        <a href="" class="btn btn-outline-secondary btn-sm">Enroll Me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="text-center text-dark">
                        <h3>Find the Adventure of a lifetime</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>” The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.” ~ Marcel Proust</p>
                    </div>
                </div>
            </div>
            <div class="about-section-bg mt-3 mb-3">
                <div class="row">
                    <div class="offset-2 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8 offset-2">
                        <div class="text-white">
                            <form action="#" id="find_form" method="post">
                                <div>
                                    <div>Where to go!</div>
                                    <input type="text" class="form-control form-control-md" required="required" placeholder="Keyword here">
                                </div>
                                <div>
                                    <div>Adventure type:</div>
                                    <select name="adventure" id="adventure" class="form-control form-control-md">
                                        <option>Hill</option>
                                        <option>Sea</option>
                                        <option>Waterfall</option>
                                    </select>
                                </div>
                                <div>
                                    <div>Min price</div>
                                    <select name="min_price" id="min_price" class="form-control form-control-md">
                                        <option>--Enter a Price---</option>
                                        <option>6000 tk</option>
                                        <option>7000 tk</option>
                                    </select>
                                </div>
                                <div>
                                    <div>Max Price</div>
                                    <select name="max_price" id="max_price" class="form-control form-control-md">
                                        <option>--Enter a Price---</option>
                                        <option>6000 tk</option>
                                        <option>7000 tk</option>
                                    </select>
                                </div>

                                <div>
                                    <div>Trip Duration</div>
                                    <select name="max_price" id="duration" class="form-control form-control-md">
                                        <option>--Choose a Package--</option>
                                        <option>2 day & 3 night</option>
                                    </select>
                                </div>
                                <div class="text-center pt-3">
                                    <button type="button" class="btn btn-info btn-block">Find</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-xs-12 mt-3 pt-3 pb-3">
                    <div class="text-dark">
                        <h3>Did not find your Package?<br>
                            Feel free to ask us.<br>
                            We‘ll make it for you </h3>
                    </div>
                    <div class="text-muted">
                        <!--<p>”All you need is the plan, the road map, and the courage to press on to your destination." ~ Earl</p>-->
                        <button type="button" class="btn btn-secondary">Request For Package</button>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-xs-12 pt-3 pb-3">
                    <img src="{{asset('/')}}/font-asset/images/Panam%20City.jpg" alt="image" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    @endsection

