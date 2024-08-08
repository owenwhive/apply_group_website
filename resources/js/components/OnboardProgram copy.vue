<template>
    <div>


          <!-- form-section -->
    <section>
        <div class="container">
            <div class="row justify-content-center" style="margin-top: -5rem;">
                <img :src="'assets/images/map/Group 1.png'" alt="" style="z-index: -1;"
                    class="position-absolute w-100 mt-5 d-none d-md-none d-lg-block">

                <div class="col-12 col-lg-7 col-md-8">

                    <form id="regForm " class="px-3 py-4 "
                        style="background-color: #FAFAFA !important;border-radius: 15px;box-shadow: 0px 2px 10px #cacaca">
                        <div  v-show = "step == 0" class="tab">
                            <h3 class="font-md fw-bold">First of all, what should we call you ?
                            </h3>
                            <!-- business info -->
                            <p class="mb-0 font-s">
                                        Next, we’ll ask a few questions to help us match you with the best study
                                        programs !
                                    </p>

                            <div>
                                <div class="form-group mt-4 mb-4">
                                    <label for="form-businessname-input" class="form-label  font-xs">Your first
                                        name</label>
                                    <input type="text" v-model="user" class="form-control font-xs" id="form-businessname-input"
                                        placeholder="Ex: Hari Bahadur" oninput="this.className = ''">
                                </div>

                            </div>
                        </div>


                        <div v-for="(q, index) in questions" :key="index" v-show = "step == index" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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



                        <!-- One "tab" for each step in the form: -->
                        <div  v-show = "step == 1" class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                    </div>
                                    <span class="font-s">Hey {{ user }}</span>
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
                        <div  v-show = "step == 2" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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

                        <div  v-show = "step == 3" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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
                        <div  v-show = "step == 4" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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
                        <div  v-show = "step == 5" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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
                        <div  v-show = "step == 6" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Preference</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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

                        <div  v-show = "step == 7" class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
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
                        <div  v-show = "step == 8" class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
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
                        <div  v-show = "step == 9" class="tab pb-3">
                            <div class="">


                                <div class="d-flex align-items-center">
                                    <div>

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
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

                        <div  v-show = "step == 10" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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

                        <div  v-show = "step == 11" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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

                        <div  v-show = "step == 12" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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

                        <div  v-show = "step == 13" class="tab pb-3">
                            <div class="">
                                <div class="row align-items-center">
                                    <div class="col-8">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-arrow-left-short"></i></button>
                                        <span class="font-s">Background</span>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end">

                                        <button type="button" class="btn font-xl p-0" id="prevBtn"
                                            @click="nextPrev(-1)"><i class="bi bi-x"></i></button>
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
                                @click="nextPrev(1)">Next</button>
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



    </div>
  </template>
  

  <script setup>
  import { ref, onMounted, watch } from 'vue'
  import axios from "axios";


const step = ref(0);
const user = ref("");
const totalStep = 13;

let questions = ref({});

async function getQuestions(){
  let results = await axios.get('/questionset')
  
  .then(response => {
    console.log(response.data);
    questions = response.data.questions;
  })
  .catch(error => {
    console.log(error);
  });
}
onMounted(() => {
    getQuestions(); })
    

    function nextPrev(inc = 0){

        if(step == totalStep ){
            return;
        }else{
step.value = step.value + inc;
        }   

    }




</script>