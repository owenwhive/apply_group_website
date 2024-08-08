<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  @include('common.head')


  

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
  @yield("meta")

  @yield("styles")

  <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      border: 1px solid #E7E7E7;
      justify-content: center;
      align-items: center;
      padding: 10px 10px;
      border-radius: 10px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>


<style>
  .brand-logo img{ width: 100%}
</style>


</head>

<body>
  <div id="app">

    @include("common.header")


    @yield("content")


@include('common.footer')

</div>



@include('common.foot')

@yield("scripts")
@vite('resources/js/app.js')

</body>

</html>