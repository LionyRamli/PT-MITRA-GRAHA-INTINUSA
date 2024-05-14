<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile</title>
    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- Link custom CSS --}}
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/scss/style.scss">

    {{-- Swiper JS --}}
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>
    {{-- Header --}}
    @include('layouts.navbar')
    {{-- End Header --}}

    {{-- Carousel --}}
    @include('layouts.carousel')
    {{-- End Carousel --}}

    {{-- About --}}
    @include('layouts.katalog')
    {{-- End About --}}

    {{-- Products --}}
    @include('layouts.product');
    {{-- End Products --}}

    {{-- Footert --}}
    @include('layouts.footer')
    {{-- End Footer --}}
    
    {{-- Javascript --}}
    <script src="asset/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>