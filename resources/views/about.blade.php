@include('header')

@include('navbar')
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center pb-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">{{__('Биз ҳақимизда')}}</h1>
        </div>
    </div>
</div>


<!-- Aylanib turadigan rasmlar -->
<center>
    <div class="Maxamadraximov">
        <div class="box">
            <span style="--i:1"><img src="img/1.jpg"></span>
            <span style="--i:2"><img src="img/2.jpg"></span>
            <span style="--i:3"><img src="img/3.jpg"></span>
            <span style="--i:4"><img src="img/4.jpg"></span>
            <span style="--i:5"><img src="img/5.jpg"></span>
            <span style="--i:6"><img src="img/6.jpg"></span>
            <span style="--i:7"><img src="img/7.jpg"></span>
            <span style="--i:8"><img src="img/8.jpg"></span>
            <span style="--i:9"><img src="img/9.jpeg"></span>
            <span style="--i:10"><img src="img/10.jpg"></span>
            <span style="--i:11"><img src="img/11.jpg"></span>
            <span style="--i:12"><img src="img/12.jpg"></span>
            <span style="--i:13"><img src="img/13.jpg"></span>
        </div>
    </div>
</center>
<!-- ./ Aylanib turadigan rasmlar -->


<!-- 360 graduslik vr mexmon xona -->
<div class="farovon360">
    <iframe src="https://uzbekistan360.uz/ru/location/gostinitsa1OTu"></iframe>
</div>
<!-- ./ 360 graduslik vr mexmon xona -->


<!-- Corusel -->
<div class="container my-4">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="10"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="11"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="12"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="13"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-30" src="img/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/5.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/6.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/7.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/8.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/9.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/10.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/11.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/12.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-30" src="img/13.jpg" alt="Third slide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- ./ Corusel -->

@include('footer')