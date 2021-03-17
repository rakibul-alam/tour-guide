<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-menu">
                    <div class="navbar-expand-md">
                        <nav class="navbar ptb-0" id="myMenu2">
                            <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('/')}}/font-asset/images/logo.png" alt="logo" class="logo-img"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
                                <span class="fa fa-bars fa-1x text-muted"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="myMenu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                                    <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="{{url('/packages')}}" class="nav-link">Packages</a></li>
                                    <li class="nav-item"><a href="{{url('/hotels')}}" class="nav-link">Hotels</a></li>
                                    <li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Blogs</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/blogs')}}" class="dropdown-item">Gallery</a></li>
                                            <li><a href="{{url('/blogs')}}" class="dropdown-item">Review</a></li>
                                            <li><a href="{{url('/blogs')}}" class="dropdown-item">Features</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>