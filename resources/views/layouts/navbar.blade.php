<header class="header">
    <a href="#" class="logo">PT <span>MITRA GRAHA INTINUSA</span></a>

    <nav class="navbar">
        <a href="{{ route('home') }}" onclick="loadPage('{{ route('home') }}', 'content')">Home</a>
        <a href="{{ route('product') }}" onclick="loadPage('{{ route('product') }}', 'content')">Product</a>
<<<<<<< HEAD
        <a href="#" >Kontak</a>
=======
        <a href="{{ route('kontak') }}" onclick="loadPage('{{ route('kontak') }}', 'content')" >Kontak</a>
>>>>>>> 355c8ac6b97576ef2f19eaa5b00b71226aa3642d
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="info-btn" class="fas fa-info-circle"></div>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="Cari disini..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
    
</header>

<div class="contact-info">
    <div id="close-contact-info" class="fas fa-times"></div>

    <div class="info">
        <i class="fas fa-phone"></i>
        <h3 class="fw-bold">Phone Number</h3>
        <p>08121035085</p>
    </div>

    <div class="info">
        <i class="fas fa-envelope"></i>
        <h3 class="fw-bold">Email Address</h3>
        <p>mitragrahaintinusa@gmail.com</p>
    </div>

    <div class="info">
        <i class="fas fa-map-marker-alt"></i>
        <h3 class="fw-bold">Office Address</h3>
        <p>Ruko Mutiara Taman Palem Blok C5 No.26
            Cengkareng Timur - Jakarta Barat 11730
        </p>
    </div>

    <div class="share">
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="https://www.youtube.com/@cv.mitragrahaindonesia3867" class="fab fa-youtube"></a>
        <a href="" class="fab fa-instagram"></a>
    </div>
</div>
