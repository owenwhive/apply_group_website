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
    .tab_1 {
       display: block;
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

  




@endsection

@section("scripts")
    <!-- footer -->
    {{-- <script>
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

        

    </script> --}}
@endsection

