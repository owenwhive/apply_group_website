@extends('layouts.layout')


@section("meta")
<title>Institution</title>
@endsection
@section("content")




<div class="container-fluid px-5" style="  
background-image: url('/assets/images/div.hero\ \(2\).png');
background-size: cover;
background-position: center;
">
    <div class="row justify-content-center pt-3">
        <div class="content col-lg-10 col-12 px-0 px-lg-3 px-md-5 mt-5 pt-5">
            <span class="text-white font-s"
                style="background-color:#f5f8f833;padding: 5px 15px;border-radius:15px;"><i
                    class="bi bi-mortarboard"></i>&nbsp;
                Academic
                partners</span>
            <h1 style="color:#ffffff;font-weight: 600; " class="mt-2">Expand Your Network, <br>Foster Global
                Collaboration
            </h1>
            <p class="font-s" style="color:#ffffff;">Choose Apply Group for exclusive partnerships with thousands
                of recruitment partners around the globe, enriching campus diversity through active student
                recruitment..</p>
            <a href="explore.html" type="button" class="btn btn-outline-light rounded-5 font-s mb-5">Explore
                Programs</a>
        </div>
    </div>

</div>


    <!-- section 1 -->
    <section class="">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-md-11">
                    <p class="text-center mb-1">Streamline your journey</p>
                    <h4 style="font-weight: 700; color: #3A77EC;" class="text-center ">What you get from Apply Group
                    </h4>

                    <div class="row mt-4 justify-content-center">
                        <div class="col-6 col-lg-3">
                            <div class="recruit-card px-3" style=" background-color: #f0f7ff;">
                                <div style="display: flex;flex-direction: column; margin-bottom:2px;">
                                    <i class="bi bi-graph-up-arrow" style="color: #1E44AF;font-size:1.5rem;"></i>
                                    <p style="color: #1E44AF;" class="font-xs">Evaluated and Screened Application</p>
                                </div>


                            </div>

                        </div>

                        <div class="col-6 col-lg-3">
                            <div class="recruit-card px-3" style=" background-color: #EFFEF4;">
                                <div style="display: flex; flex-direction: column;  margin-bottom:2px;">
                                    <i class="bi bi-stopwatch" style="color: #126932;font-size:1.5rem"></i>
                                    <p style="color: #126932;" class="font-xs">Reduce your administration cost and time
                                    </p>
                                </div>



                            </div>

                        </div>


                        <div class="col-6 col-lg-3 mt-3 mt-lg-0">
                            <div class="recruit-card px-3" style="background-color: #FFF4FB;">
                                <div style=" display: flex; flex-direction: column; margin-bottom:2px" >
                                    <i class="bi bi-bank" style="color: #8B1D56;font-size:1.5rem"></i>
                                    <p style="color: #8B1D56;" class="font-xs">Frequent Online Webinar and Education
                                        Fair</p>
                                </div>


                            </div>

                        </div>

                        <div class="col-6 col-lg-3 mt-3 mt-lg-0">
                            <div class="recruit-card px-3" style="background-color: #FEFBE0;">

                                <div style="display: flex; flex-direction: column; margin-bottom:2px;">
                                    <i class="bi bi-award" style="color:#864C0D ;font-size:1.5rem;"></i>
                                    <p style="color:#864C0D ;font-size:small;">Agency Management CRM</p>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- section 2 -->
    <section>
        <div class="container-fluid mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-md-11">
                    <p class="text-center mb-0" style="color: #5D5D5D;">Features</p>
                    <h5 style="font-weight: 700; color: #3A77EC;" class="text-center ">Benefits for institution</h5>
                    <div class="row justify-content-evenly mt-4">
                        <div class="col-3 align-items-center  d-flex flex-column justify-content-center text-center">
                            <div class="circle" style="background-color: #dbebfe">
                                <div style="position:relative; top:8px; left:9px; font-size: 30px;">
                                    <i class="bi bi-clipboard-check" style="color:#1e44af"></i>
                                </div>

                            </div>
                            <p class="circle-txt">Comapre Courses</p>
                        </div>
                        <div class="col-3 align-items-center  d-flex flex-column justify-content-center text-center">
                            <div class="circle" style="background-color: #e0feea;">
                                <div style="position:relative; top:8px; left:9px; font-size: 30px;">
                                    <i class="bi bi-stopwatch" style="color:#136932"></i>
                                </div>
                            </div>
                            <p class="circle-txt">Comapre Courses</p>
                        </div>


                        <div class="col-3 align-items-center  d-flex flex-column justify-content-center text-center">
                            <div class="circle" style="background-color: #fee0f4;">
                                <div style="position:relative; top:8px; left:9px; font-size: 30px;">
                                    <i class="bi bi-hand-index" style=" color:#8b1d56"></i>
                                </div>
                            </div>
                            <p class="circle-txt">Comapre Courses</p>
                        </div>
                        <div class="col-3 align-items-center  d-flex flex-column justify-content-center text-center">
                            <div class="circle" style="background-color: #fff9c2;">
                                <div style="position:relative; top:8px; left:9px; font-size: 30px;">
                                    <i class="bi bi-file-bar-graph" style=" color:#976426"></i>
                                </div>
                            </div>
                            <p class="circle-txt">Comapre Courses</p>
                        </div>

                    </div>
                </div>
    </section>

    

        <!-- section 3 -->
        <section>
            <div class="container-fluid mt-5 pt-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-11">
                        <div class="card position-relative px-3 py-4 "
                            style="background-color:#f1f9fa8d; border-radius: 15px;border:none">
                            <img src="{{url('/')}}/assets/images/Vector.png" class="position-absolute d-none d-md-none d-lg-block"
                                style="width: 90px; height: 120px; bottom: 40px; left: -3rem;z-index:-2">
    
                            <div class="row">
                                <div class="col-7 col-lg-8 col-md-9">
                                    <div class="card-text w-100 mb-3 mb-lg-0">
    
                                        <h6 class="font-l fw-bold">Join Network of Global Recruitment Partners</h6>
                                        <p class="font-xs">We prioritize agent growth over the commonly echoed “Student
                                            First”
                                            mantra.</p>
                                    </div>
                                </div>
                                <div class="col-5 col-lg-4 col-md-3 d-flex justify-content-end align-items-center">
    
                                    <a href="partner.html"
                                        class="btn btn-sm text-white font-xs py-2 px-3 d-flex justify-content-center "
                                        style="background-color: #2469EB;">Partner with us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </section>


    <!-- section 4 -->
    <section>
        <div class="container-fluid mt-5 pt-5" style="background-color: #064786;">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-md-11">
                    <div class="row py-lg-5 py-2">

                        <div class="col-12 col-md-6  col-lg-6 mb-3">
                            <p class="text-white px-3 text-lg-start text-md-start text-center"
                                style="font-size:x-large;">Frequently
                                <br> Asked
                                Questions
                            </p>

                            <p class="text-white px-3 text-lg-start text-md-start text-center"
                                style="font-size:x-small;">Get your
                                question answered
                                right
                                way.</p>
                            <div class="d-flex justify-content-center justify-content-lg-start">
                                <img src="{{url('/')}}/assets/images/Frame 427319126.png" class="img-fluid"
                                    style=" width: 280px; height: 320px;">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 text-white px-4 px-lg-0">

                            <div class=" py-3  mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                            <div class=" py-3  mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                            <div class=" py-3   mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                            <div class=" py-3  mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                            <div class=" py-3  mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                            <div class=" py-3  mb-3"
                                style="position: relative; color: white;border-bottom:0.5px solid #ffffff49">
                                <p class="font-s" onclick="toggleParagraph(this)"
                                    style="margin: 0; position: relative; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                                    What is the recruitment process like at ApplyGroup?
                                    <span onclick="closeParagraph(event, this)"
                                        style="cursor: pointer; border: none; color: white; padding: 0 5px; border-radius: 50%;">×</span>
                                </p>
                                <p class="font-xs" style="display: none; margin: 10px 0 0 0;">The recruitment
                                    process at
                                    ApplyGroup
                                    involves
                                    application review, initial screening, interviews, assessments, reference
                                    checks, and
                                    job offers,
                                    emphasizing open communication and transparency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container-fluid mt-3 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-md-11">
                    <h4 style="font-weight: 700; color: #0060B9;" class="text-center font-md">We got students from all
                        around
                        the world
                    </h4>

                    <div class="map w-100 mt-4" style="width: 100%; margin-top: 1.5rem;">
                        <img src="{{url('/')}}/assets/images/World Map2.png" alt="Maps" class="img-fluid"
                            style="width: 100%; height: auto; object-fit: contain; max-height: 500px;">
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- section 5 -->

    <section>
        <div class="container-fluid mt-5 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-md-11">
                    <h4 class="mb-4 text-center" style="font-weight: 700; color: #0060B9;" class="text-center ">Trusted
                        by Leading
                        Institutions
                    </h4>
                    <div class="d-flex justify-content-center">

                        <span class="py-1 px-1 rounded-5 text-center" style="background-color: #f0f7ff;">
                            <span class="rounded-5 text-white px-1 py-1 align-items-center d-inline-flex"
                                style="background-color: #2469eb;">
                                <img src="{{url('/')}}/assets/images/Flag Rectangle 1.png" style="width: 30px; object-fit: cover;">
                                <span class="font-s px-2">
                                    UNITED STATES
                                </span></span>
                            <span class="rounded-5 px-1 py-1 align-items-center d-inline-flex">
                                <img src="{{url('/')}}/assets/images/Flag Rectangle 2.png" style="width: 30px; object-fit: cover;">
                                <span class="font-s px-2 text-primary">

                                    UNITED
                                    KINGDOM
                                </span>
                            </span>
                            <span class="rounded-5 px-1 py-1 align-items-center d-inline-flex">
                                <img src="{{url('/')}}/assets/images/Flag Rectangle 3.png" style="width: 30px; object-fit: cover;">
                                <span class="font-s px-2 text-primary">

                                    AUSTRALIA
                                </span>
                            </span>
                            <span class="rounded-5 px-1 py-1 align-items-center d-inline-flex">
                                <img src="{{url('/')}}/assets/images/Flag Rectangle 4.png" style="width: 30px; object-fit: cover;">
                                <span class="font-s px-2 text-primary">
                                    CANADA

                                </span>
                            </span>
                        </span>
                    </div>
                    <div class="row justify-content-center mt-5 gap-md-3 gap-2">
                        <img src="{{url('/')}}/assets/images/image 38.png" class="col-img">

                        <img src="{{url('/')}}/assets/images/image 41.png" class="col-img">

                        <img src="{{url('/')}}/assets/images/image 42.png" class="col-img">
                    </div>


                    <div class="row mt-4 justify-content-center gap-md-3 gap-2">
                        <img src="{{url('/')}}/assets/images/image 44.png" class="w-20" style="">
                        <img src="{{url('/')}}/assets/images/image 39.png" class="col-img">
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- section 6 -->
    <section class=" container px-lg-5 px-0 mt-5 pb-5">
        <div class=" px-4">
            <h5 class="heading ">Similar Blogs</h5>

            <div class="row row-cols-lg-5 row-cols-2 row-cols-md-4  font-s mt-3">

                <div class="col ">
                    <img src="{{url('/')}}/assets/images/Rectangle 10.png" class="card-img-top "
                        style="height: 190px; object-fit:cover; border-radius: 12px; " alt="...">
                    <div class="card-body">
                        <p class="card-date m-2 font-xs">June 4, 2024</p>
                        <p class="card-text m-2">"Insights & Inspiration: Explore Our Blog for Career Tips
                            and Company
                            Updates"
                        </p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{url('/')}}/assets/images/Rectangle 10.png" class="card-img-top"
                        style="height: 190px; object-fit:cover; border-radius: 12px;" alt="...">
                    <div class="card-body">
                        <p class="card-date m-2 font-xs">June 4, 2024</p>
                        <p class="card-text m-2">"Insider Perspectives: Read Our Blog for Career Tips and
                            Apply Group
                            Experiences"
                        </p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{url('/')}}/assets/images/Rectangle 10.png" class="card-img-top"
                        style="height: 190px; object-fit:cover; border-radius: 12px;" alt="...">
                    <div class="card-body">
                        <p class="card-date m-2 font-xs">June 4, 2024</p>
                        <p class="card-text m-2">"Inside Apply Group: Dive into Our Blog for Career Insights
                            and Team
                            Stories"
                        </p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{url('/')}}/assets/images/Rectangle 10.png" class="card-img-top"
                        style="height: 190px; object-fit:cover; border-radius: 12px;" alt="...">
                    <div class="card-body">
                        <p class="card-date m-2 font-xs">June 4, 2024</p>
                        <p class="card-text m-2">"Beyond the Application: Explore Our Blog for Career
                            Guidance and
                            Company
                            Culture"
                        </p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{url('/')}}/assets/images/Rectangle 10.png" class="card-img-top"
                        style="height: 190px; object-fit:cover; border-radius: 12px;" alt="...">
                    <div class="card-body">
                        <p class="card-date m-2 font-xs">June 4, 2024</p>
                        <p class="card-text m-2">"Beyond the Application: Explore Our Blog for Career
                            Guidance and
                            Company
                            Culture"
                        </p>
                    </div>
                </div>
            </div>
    </section>



@endsection