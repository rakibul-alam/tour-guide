@extends('.font-panel.master')


@section('title')
    {{$title}}
    @endsection


@section('body')

    @include('font-panel.common.special-discount')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3">
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
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Popular Destination</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart. ~ Hellen"</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="">
                        <img src="{{asset('/')}}/font-asset/images/bisanakandi.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Bisanakandi, Shylet</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/rangmati.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Rangamati, Chittagong</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/Jaganath-Temple-Kathmandu-Nepal.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Jaganath, Nepal</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/bhutan.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Hill City, Bhutan</h5>
                            </span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-3">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/bisanakandi.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Bisanakandi, Shylet</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-3">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/rangmati.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Rangamati, Chittagong</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-3">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/Jaganath-Temple-Kathmandu-Nepal.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Jaganath, Nepal</h5>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-3">
                    <div>
                        <img src="{{asset('/')}}/font-asset/images/bhutan.jpg" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Hill City, Bhutan</h5>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-3 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Other issues we can help you with</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>“Travel doesn't become adventure until you leave yourself behind” ~ Matry Rubin</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/font-asset/images/bus.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Bus Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/font-asset/images/train.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Rail Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-img">
                        <img src="{{asset('/')}}/font-asset/images/ship.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Cruise Tickets</h5>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pt-3 pb-3">
                    <div class="tranport-feature">
                        <img src="{{asset('/')}}/font-asset/images/plane.jpg" alt="transport" class="img-responsive">
                    </div>
                    <div class="transport-header pt-2">
                        <a href="" target="_blank">
                            <span class="anchor-wrap">
                                <span class="wrapBG"></span>
                                <h5 class="pl-3 wrap-header">Plane Tickets</h5>
                            </span>
                        </a>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 pt-3 pb-3">
                    <div class="text-center text-dark">
                        <h3>Review From Our Customers</h3>
                    </div>
                    <div class="text-muted text-center">
                        <p>"You are what you do, not what you say you'll do." ~ Carl</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="review-user mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="text-light mt-5 mb-2">
                            <h1>Happy Traveler</h1>
                            <p>Best Wishes From Our Happy Customers.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-user-cmmnt">
                            <img src="{{asset('/')}}/font-asset/images/founder902_n.jpg" class="stamp-img" alt="stamp">
                            <div class="float-left text-light mt-3">
                                <h5 class="m-0">Syful Islam</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                            <div class="float-left p-3 text-light">
                                <p class="text-justify">"The agency’s understanding of customer requirement is unparalleled in the industry."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-5">
                        <div class="review-user-cmmnt mt-5">
                            <img src="{{asset('/')}}/font-asset/images/founder902_n.jpg" class="stamp-img" alt="stamp">
                            <div class="float-left text-light mt-3">
                                <h5 class="m-0">Syful Islam</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                            <div class="float-left p-3 text-light">
                                <!--<p class="text-justify">"The agency’s understanding of customer requirement is unparalleled in the industry."</p>-->
                                <p class="text-justify">"Le destino is simply the best out there. I have used their service multiple times and was completely satisfied every time. The whole TBBD team was really friendly and forthcoming for all our needs. "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection