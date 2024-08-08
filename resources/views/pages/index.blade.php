@extends('layouts.layout')

@section("meta")
<title>Apply Group Homepage</title>
@endsection

@section("content")

  <!-- section1 -->
  <div class="container-fluid px-5 p-5" style="  
      background-image: url('assets/images/div.hero\ \(1\).png');
      background-size: cover;
      background-position: center;
      ">
    <div class="row justify-content-center pt-5">
      <div class="content col-lg-10 col-12 px-0 px-lg-3 px-md-5">

        <h1 style="color:#ffffff; margin-top: 12px;">Your Place For <br>Global Opportunity</h1>
        <p style="color:#ffffff; margin-top: 12px;">Apply Group is an education marketplace connecting agencies with
          universities and colleges globally and locally.
          Agencies can sign up to help students find the best, affordable institutions using our top-notch technology,
          matching
          student requirements with numerous providers in both academic and technical sector
        </p>

        <button type="button" class="btn btn-main1 btn-sm me-3">Explore Opportunities</button>
        <button type="button" class="btn btn-outline-light btn-sm ">Learn more</button>

        <div class="cont mt-4 text-white">
          <h6>Happy Students</h6>
          <div class="">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">
            <img src="{{url('assets/images/a1.jpg')}}" class="image-rounded object-fit-cover overlap" alt="student-image">

          </div>

        </div>

      </div>

    </div>
  </div>




  @include('sections.home.partner_with_us')
  @include('sections.home.who_we_are')
  @include('sections.home.milestone')
  @include('sections.home.what_we_do')
  @include('sections.home.success_stories')
  @include('sections.home.similar_blog')





    


  <!-- section-9 -->

  <section class="container px-lg-5 mt-5">
    <div class="container px-lg-5">
      <div class="card position-relative" style="background-color: #f1f9fa76; border:none;border-radius: 15px; ">
        <img src="assets/images/Vector.png" class="img-fluid position-absolute" style="width: 80px;top:-2rem;z-index:-2;
          left: -3rem;">
        <div class="card-body" style=" display: flex; flex-direction: column; align-items: flex-start;z-index: 99; ">
          <div class="card-text w-100">
            <div class="row">
              <div class="col-12 col-lg-6">
                <h6 class="p-2 font-md" style="font-weight: 610;">Start 30 minutes Discovery call !</h6>
                <p class="p-2 font-xs">
                  Schedule a consultation with one of our experts today and learn how our solutions can revolutionize
                  your global recruitment process.
                </p>
              </div>

              <div class="col-lg-6 d-flex align-items-center justify-content-end mt-3 mt-lg-0">
                <a href="universityDetail.html" class="btn btn-sm font-xxs me-2"
                  style="background-color: #2469EB; color: white;">Apply for Universities now</a>
                <a href="explore.html" class="btn btn-outline-primary btn-sm font-xs">Explore</a>
              </div>
            </div>
          </div>
        </div>

      </div>
  </section>



  <section>

    <div style="width: 80%; margin: 0 auto">
<div id="map"></div>
    </div>
  </section>

@endsection


@section("styles")
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<style>
    #map { height: 600px; }
</style>

@endsection

@section("scripts")

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<script>


var geojsonData = {
    "type": "FeatureCollection",
    "features": [
      
        {
            "type": "Feature",
            "properties": { "name": "Canada" },
            "geometry": {
                "type": "Polygon",
                "coordinates": [
            [
                [-106.3468, 56.1304],
                [-102.3425, 55.1278],
                [-96.7898, 54.1237],
                // More coordinates...
            ]
        ]            }
        },
        {
            "type": "Feature",
            "properties": { "name": "United States" },
            "geometry": {
                "type": "Polygon",
                "coordinates": [ /* Coordinates here */ ]
            }
        },
        {
            "type": "Feature",
            "properties": { "name": "Australia" },
            "geometry": {
                "type": "Polygon",
                "coordinates": [ /* Coordinates here */ ]
            }
        },
        {
            "type": "Feature",
            "properties": { "name": "United Arab Emirates" },
            "geometry": {
                "type": "Polygon",
                "coordinates": [ /* Coordinates here */ ]
            }
        }
        // Add other countries as needed
    ]
};

var map = L.map('map').setView([20, 0], 2);

// Add OpenStreetMap tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
}).addTo(map);

// Function to style the countries
function style(feature) {
    // Highlight only the selected countries
    const selectedCountries = ['Canada', 'United States', 'Australia', 'United Arab Emirates'];
    if (selectedCountries.includes(feature.properties.name)) {
        return {
            fillColor: 'blue',
            weight: 2,
            opacity: 1,
            color: 'blue',
            fillOpacity: 0.7
        };
    } else {
        return {
            fillColor: 'transparent',
            weight: 1,
            opacity: 1,
            color: 'grey',
            fillOpacity: 0.1
        };
    }
}

// Add GeoJSON layer with custom styling
L.geoJson(geojsonData, {
    style: style
}).addTo(map);

</script>
@endsection