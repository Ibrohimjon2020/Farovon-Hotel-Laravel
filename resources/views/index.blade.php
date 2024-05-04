@include('header')

@include('navbar')

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" style="height: 76.8vh; object-fit: cover;" src="storage/rooms/breakfast.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">{{__('Ҳашаматли яшаш')}}</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">{{__('Бренднинг ҳашаматли меҳмонхонасини кашф этинг')}}</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" style="height: 76.8vh; object-fit: cover;" src="storage/rooms/wellcome.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">{{__('Ҳашаматли яшаш')}}</h6>
                                <h2 class="display-3 text-white mb-4 animated slideInDown">{{__('Бренднинг ҳашаматли меҳмонхонасини кашф этинг')}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">{{__('Биз ҳақимизда')}}</h6>
                        <h1 class="mb-4">{{__('Мехмонхонага хуш келибсиз')}}</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">4</h2>
                                        <p class="mb-0">{{__('Хоналар')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">4</h2>
                                        <p class="mb-0">{{__('Ходимлар')}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">{{$sumClients > 100 ? $sumClients : 150}}</h2>
                                        <p class="mb-0">{{__('Мижозлар')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">{{__('Кўпроқ ўрганинг')}}</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="storage/rooms/Farovon.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="storage/rooms/reseption weating place.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="storage/rooms/zinalar.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="storage/rooms/wellcome.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">{{__('Бизнинг хоналар')}}</h6>
                    <h1 class="mb-5">{{__('Хоналаримизни ўрганинг')}}</h1>
                </div>
                <div class="row g-4">
                    @foreach($roomTypes as $room)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" style="height:300px; width:500px; object-fit: cover;" src="{{asset('storage/'.$room->room->images['have'])}}" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$room->room->price[$current_locale]}}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">{{$room->name[$current_locale]}}</h5>
                                    <div class="ps-2">
                                        @for ($i = 0; $i < $room->room->rate; $i++)
                                            <small class="fa fa-star text-primary"></small>
                                            @endfor

                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>{{$room->number_of_beds}} {{__('Ётоқ')}}</small>
                                    <div class="line-clamp-2">
                                        @foreach($room->room->have[$current_locale] as $have)
                                        {{$have.", "}}
                                        @endforeach
                                    </div>
                                </div>
                                <p class="text-body mb-3 line-clamp-3">{{$room->room->short_content[$current_locale]}}</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-2" href="">{{__('Тафсилотларни кўриш')}}</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-2" href="">{{__('Банд қилиш')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Room End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">{{__('Бизнинг хизматлар')}}</h6>
                    <h2 class="mb-5">{{__('Хизматларимиз билан танишинг')}}</h2>
                </div>
                <div class="row g-4">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <?= $service->logo ?>
                                </div>
                            </div>
                            <h5 class="mb-3">{{$service->title[$current_locale]}}</h5>
                            <p class="text-body mb-0">{{$service->content[$current_locale]}}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-dark wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <?php $i = 1; ?>
                    @foreach($comments as $comment)
                    <div class="testimonial-item position-relative bg-white overflow-hidden" style="height: 22vh;">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg" style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">{{$comment->client->fullName}}</h6>
                                <small>{{$comment->client->country}}</small>
                            </div>
                            <p class="ms-5" style="text-align:right">{{$comment->created_at}}</p>
                        </div>
                        <p style="word-break: break-word; 
                        white-space: pre-wrap; 
                        overflow: hidden;
                        -webkit-line-clamp: 5;
                        display: -webkit-box;
                        -webkit-box-orient: vertical;">
                             {{$comment->comment}} 
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">{{__('Бизнинг жамоа')}}</h6>

                    <h2 class="mb-5">{{__('Бизнинг ходимларимизни ўрганинг')}}</h2>
                </div>
                <div class="row g-4">
                    @foreach($staffs as $staff)

                    <div class="col-lg-3 col-md-6 wow fadeInUp">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('storage/'.$staff->image) }}" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h6 class="fw-bold mb-0">{{$staff->firstname.' '.$staff->lastname}}</h6>
                                <small>{{$staff->phone}}</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
   @include('footer')