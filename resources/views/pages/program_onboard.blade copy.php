@extends('layouts.layout')

@section("meta")
<title>Onboard Program</title>
@endsection


@section("styles")
<style>
    /* .form-control {
        border: none !important;
    } */
    .content {
        display: none;
        /* padding: 15px; */
        /* background-color: #f1f1f1; */
        /* border: 1px solid #ddd; */
        margin-top: 2px;
        font-size: 14px;
    }

    .collapsible:hover {
        cursor: pointer;

    }

    .collapsible.active .bi-chevron-right {
        transform: rotate(90deg);
        transition: all 0.3s ease-in-out;

    }

    .content1 {
        display: none;
        /* padding: 15px; */
        /* background-color: #f1f1f1; */
        /* border: 1px solid #ddd; */
        margin-top: 2px;
        font-size: 14px;
        border-bottom: 1px solid #cacaca;
    }

    .collapsible1:hover {
        cursor: pointer;

    }

    .collapsible1.active .bi-chevron-right {
        transform: rotate(90deg);
        transition: all 0.3s ease-in-out;

    }

    .font-s {
        margin: 0;
    }

    #regForm {
        /* background-color: #ffffff; */
        /* margin: 100px auto; */
        /* padding: 40px; */
        /* width: 70%; */
        /* min-width: 300px; */

    }

    .tab {
        display: none;
    }

    input {
        /* padding: 10px; */
        width: 100%;
        background-color: #ffffff;
        /* font-size: 17px; */
        /* font-family: Raleway; */
        /* border: 1px solid #585858; */
    }

    input:focus {
        border: none;
        outline: #015bb0;
        border-radius: 5px;
        /* font-size: 0.8rem; */
    }


    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    .step {
        height: 10px;
        width: 10px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.8;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #015bb0;
    }
</style>
@endsection

@section("content")




<div class="container-fluid px-5" style="height:250px; 
background-image: url('assets/images/div.hero\ 3.png');
background-size: cover;
background-position: center;
">
<div class="row justify-content-center ">
  <!-- <div class="content col-lg-10 col-12 px-0 px-lg-3 px-md-5">
      <h1 style="color:#ffffff; margin-top: 12px;">Partner with us</h1>
      <p style="color:#ffffff; margin-top: 12px;">Our commitment is Exclusive; we
          collaborate solely with our
          Partners for the recruitment of aspiring students to universities and colleges. This exclusivity
          builds trust, ensuring transparency in lead generation and eliminating conflicts of interest in the
          pursuit of shared financial goals. At Apply Group, we think it's important to create long-term
          partnerships that help both our organization and our Business Partners succeed</p>
  </div> -->

</div>
</div>



<onboard-program></onboard-program>

    <!-- form-section -->
    <section>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: -5rem;">
                <img src="./assets/images/map/Group 1.png" alt="" style="z-index: -1;"
                    class="position-absolute w-100 mt-5 d-none d-md-none d-lg-block">

                <div class="col-12 col-lg-7 col-md-8">

                    <form id="regForm " class="px-3 py-4 "
                        style="background-color: #FAFAFA !important;border-radius: 15px;box-shadow: 0px 2px 10px #cacaca">
                        <div class="tab">
                            <h3 class="font-md fw-bold">First of all, what should we call you ?
                            </h3>
                            <!-- business info -->
                            <div>
                                <div class="form-group mt-4 mb-4">
                                    <label for="form-businessname-input" class="form-label  font-xs">Your first
                                        name</label>
                                    <input type="text" class="form-control font-xs" id="form-businessname-input"
                                        placeholder="Ex: Hari Bahadur" oninput="this.className = ''">
                                </div>

                            </div>
                        </div>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Hey Kancha</span>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">First of all, what should we call you ?
                                    </h3>
                                    <p class="mb-0 font-s">
                                        Next, we’ll ask a few questions to help us match you with the best study
                                        programs !
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">Which countries do you want to study in?
                                    </h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Canada </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            UK </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Australia </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Default Ireland
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">Which levels of education are you apply for ?
                                    </h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Primary / Elementary School </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Secondary School </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Bachelor's Degree / College Diploma / Undergraduate </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Master's Degree / Post-graduate </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            English as a Second Language (ESL) </label>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold mt-2">What would you like to study ?
                                    </h3>
                                    <div class="container-fluid mt-3">
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        Engineering and Technology
                                                    </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold mt-2">When do you want to start your studies ?
                                    </h3>
                                    <div class="container-fluid mt-3">
                                        <div class="mb-2 pb-2 border-bottom">
                                            <div class="row collapsible1" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        2024 </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content1">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <div class="row collapsible1" id="">
                                                <div class="col-10 p-0">
                                                    <p class="font-s">
                                                        2025 </p>
                                                </div>
                                                <div class="col-2 d-flex justify-content-end">
                                                    <i class="bi bi-chevron-right"></i>
                                                </div>
                                            </div>
                                            <div class="content1">
                                                <p>This is the expanded content related to Engineering and Technology.
                                                </p>
                                                <!-- Add more content here as needed -->
                                            </div>
                                        </div>


                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">What's your estimated yearly tuition budget?
                                    </h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Up to ~$10,000 USD</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Up to ~$20,000 USD </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            Up to ~$30,000 USD</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            No limit </label>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Hey Kancha</span>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">You’re doing great Hari Bahadur!
                                    </h3>
                                    <p class="mb-0 font-s">
                                        Next, we will ask you 6 - 8 questions to check your eligibility.
                                    </p>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Background</span>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">What is your nationality?
                                    </h3>
                                    <select name="" id="" class="form-select-sm w-10 font-s">
                                        <option value="
                                        ">Type your nationality here</option>
                                    </select>
                                </div>

                            </div>

                        </div>
                        <div class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Background</span>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">What is your country of residence ?
                                    </h3>
                                    <select name="" id="" class="form-select-sm w-10 font-s">
                                        <option value="
                                        ">Type your residence here</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">Which valid study permits or visa do you have ?
                                    </h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            USA F1 Visa</label>
                                    </div>


                                </div>

                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">What is your highest level of education ?
                                    </h3>
                                    <span class="font-s">Status</span>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            I have graduated</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            I have graduated</label>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Country of education</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ex. USA</option>
                                            <option value="1">UK</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Education Level</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ex. Secondary</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Degree</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ex. Bachelors</option>
                                            <option value="1">UK</option>

                                        </select>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">What is your most recent overall grade ?
                                    </h3>

                                    <div class="form-group mb-2">
                                        <label for="">Grade Scheme</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ex. USA</option>
                                            <option value="1">UK</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="">Grading average</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Ex. Secondary</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            onclick="nextPrev(-1)"><i class="bi bi-x"></i></button>
                                    </div>
                                </div>
                                <div class="px-2">

                                    <h3 class="font-md fw-bold">Have you taken any English proficiency tests ?
                                    </h3>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            IELTS</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label font-s" for="flexCheckDefault">
                                            TOEFL</label>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div style="overflow:auto;" class="">

                            <button type="button" class=" btn btn-primary font-xs w-100" id="nextBtn"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div class="mt-2" style="text-align:center;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>





@endsection

@section("scripts")
    <!-- footer -->
    <script>
        document.getElementById('navbarToggler').addEventListener('click', function () {
            var navbarContent = document.getElementById('navbarSupportedContent');
            navbarContent.classList.toggle('show');
        });
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab


        let user = localStorage.getItem("user") || "";
        var currentStep = 0;



        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
        document.addEventListener('DOMContentLoaded', function () {
            var collapsible = document.querySelector('.collapsible');
            var content = document.querySelector('.content');

            collapsible.addEventListener('click', function () {
                content.style.display = (content.style.display === 'block') ? 'none' : 'block';
                collapsible.classList.toggle('active');
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            var collapsible1 = document.querySelector('.collapsible1');
            var content1 = document.querySelector('.content1');

            collapsible1.addEventListener('click', function () {
                content1.style.display = (content1.style.display === 'block') ? 'none' : 'block';
                collapsible1.classList.toggle('active');
            });
        });


        function storeName(value){
            localStorage.setItem("user", value);
        }

        

    </script>
@endsection

