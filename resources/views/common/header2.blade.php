    <!-- nav-bar -->
    <nav class="navbar navbar-expand-lg bg-transparent w-100" style="position: relative;">
        <div class="container">
            <a href="{{url('/')}}" class="brand-logo"><img src="assets/images/image 20a.png" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                id="navbarToggler" aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse font-xs px-3 d-none d-md-none d-lg-block">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color: #808080;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/recruitment')}}">Recruitment Partners</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/institution')}}">Institutions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/courses')}}">Explore Courses</a>
                    </li>
                </ul>
                <form class="d-flex align-items-center" role="search" style="color: #ffffff;">
                    <div class="px-2">

                        <i class="bi bi-search font-md text-gray"></i>
                        <i class="bi bi-filter-right px-2 font-md text-gray"></i>
                        <span class="font-md text-gray">|</span>
                    </div>
                    <button type="button" class="btn btn-light mx-2 font-s">Login</button>

                    <button type="button" class="btn btn-main mx-2 font-s">Signup</button>
                </form>
            </div>
            <div class="navbar-content font-xs" id="navbarSupportedContent">
                <div class="container-fluid">
                    <div class="row" style="background-color:#0160b9;height: 50px;">

                    </div>
                    <div class="row py-2">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="assets/images/image 20a.png" alt="Logo" class="w-75">
                        </div>
                    </div>
                    <div class="col-12">

                        <ul class="navbar-nav me-auto mt-3 mb-3 px-2" style="color: #808080;">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ url('/recruitment')}}">Recruitment
                                    Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"   href="{{ url('/institution')}}">Institutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/courses')}}">Explore Courses</a>
                            </li>
                        </ul>
                        <div class="col-12 mb-2 ">

                            <button type="button" class="btn btn-light w-100  font-s">Login</button>
                        </div>
                        <div class="col-12">

                            <button type="button" class="btn btn-main w-100 font-s">Signup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
    </nav>
