@extends('layouts.layout2')

@section("meta")
<title>Explore Courses</title>
@endsection

@section("content")


    <!-- secondary nav-bar -->
    <section class=" mt-2">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 col-md-12">
                    <nav style="background-color: transparent; ">
                        <div class="container">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row " style="color: #808080;">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#" style="color: #808080;">Home<span
                                            class="px-2">></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" style="color:#475569">University Explore</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <hr>




    <section class=" mt-2">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 col-md-12">
                    <div class="row d-flex align-items-end justify-content-center">
                        <div class="col-md-3 col-6 col-lg-3 mb-3">
                            <label for="inputField1" class="form-label">Search courses</label>
                            <input type="text" class="form-control font-xs" id="inputField1"
                                placeholder="Mechanical Engineering">
                        </div>
                        <div class="col-md-3 col-6 col-lg-3 mb-3">
                            <label for="inputField2" class="form-label">Select Location</label>
                            <input type="text" class="form-control font-xs" id="inputField2"
                                placeholder="Kathmandu, Nepal">
                        </div>
                        <div class="col-md-3 col-6 col-lg-3 mb-3">
                            <label for="inputField3" class="form-label">Select University</label>
                            <input type="text" class="form-control font-xs" id="inputField3"
                                placeholder="Oxford University">
                        </div>
                        <div class="col-md-3 col-6 col-lg-3 mb-3 d-flex justify-content-end">
                            <button type="button " class="btn d-flex align-items-center justify-content-center"
                                style="width: 35px; background-color: #256cec; color: white; height: 35px;">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container mt-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 pb-2 border-bottom">

                            <div class="d-flex gap-3">

                                <a href="" class="text-primary text-decoration-none font-s">See Popular Courses</a>
                                <a href="" class="text-primary text-decoration-none font-s">See Popular Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-12 col-md-4">
                            <div class="row">
                                <div class="col-6">

                                    <h5 class="text-start">Filters</h5>
                                </div>
                                <div class="col-6 d-flex justify-content-end">
                                    <span class="font-s">Clear all</span>
                                </div>
                            </div>
                            <div class="container-fluid mt-3">
                                <div class="row" id="toggleRow">
                                    <div class="col-9 p-0">
                                        <p class="font-md">Program Level</p>
                                    </div>
                                    <div class="col-3 d-flex justify-content-end" ">
                            <i class=" bi bi-chevron-right"></i>
                                    </div>
                                </div>
                                <div class="checkbox-content" id="checkboxContent">
                                    <input type="checkbox" class="mb-4" id="option1" name="option1" value="Option 1">
                                    <label for="option1">Primary School</label><br>
                                    <input type="checkbox" class="mb-4" id="option2" name="option2" value="Option 2">
                                    <label for="option2">Secondary School</label><br>
                                    <input type="checkbox" class="mb-4" id="option3" name="option3" value="Option 3">
                                    <label for="option3">Bachelors Degree</label><br>
                                    <input type="checkbox" class="mb-4" id="option4" name="option4" value="Option 4">
                                    <label for="option3">Masters Degree</label>
                                </div>
                            </div>
                            <div class="container-fluid mt-1">
                                <div class="row" id="toggleRow1">
                                    <div class="col-9 p-0">
                                        <p class="font-md">Program Level</p>
                                    </div>
                                    <div class="col-3 d-flex justify-content-end">
                                        <i class="bi bi-chevron-right"></i>
                                    </div>
                                </div>
                                <div class="checkbox-content1" id="checkboxContent1">
                                    <input type="checkbox" class="mb-4" id="option1" name="option1" value="Option 1">
                                    <label for="option1">Primary School</label><br>
                                    <input type="checkbox" class="mb-4" id="option2" name="option2" value="Option 2">
                                    <label for="option2">Secondary School</label><br>
                                    <input type="checkbox" class="mb-4" id="option3" name="option3" value="Option 3">
                                    <label for="option3">Bachelors Degree</label><br>
                                    <input type="checkbox" class="mb-4" id="option4" name="option4" value="Option 4">
                                    <label for="option3">Masters Degree</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-7 col-md-8">
                            <div class="row">

                                <div class="col-8 col-lg-10 mb-2">
                                    <h5 class="mb-0">Universities</h5>
                                    <small class="font-xs">1110 search results</small>
                                </div>
                                <div class="col-4 col-lg-2 d-flex justify-content-end align-items-center">
                                    <div>

                                        <button type="button" class="btn btn-light font-s">Sort <i
                                                class="bi bi-sort-down"></i></button>
                                    </div>


                                </div>

                            </div>
                            <div class="row justify-content-center">
                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-lg-4">
                                    <div class="card mb-3">
                                        <img src="assets/images/image 24.png" class="card-img" alt="...">
                                        <div class="card-body ">
                                            <h5 class="font-s mb-0 ">International Language Academy </h5>
                                            <i class="bi bi-geo-alt font-s" style="color: #6c6c6c;">Toronto, Ontario,
                                                CA</i>
                                            <small class="text-muted">Duration : 8 months</small>
                                            <p class="fw-bold">$ 3,458 USD/ Year</p>

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="row">

                                <div class="col-8 col-lg-10">
                                    <h5>Universities</h5>
                                    <small class="font-xs">1110 search results</small>
                                </div>
                                <div class="col-4 col-lg-2 d-flex justify-content-end align-items-center">
                                    <div>

                                        <button type="button" class="btn btn-light font-s">Sort <i
                                                class="bi bi-sort-down"></i></button>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection