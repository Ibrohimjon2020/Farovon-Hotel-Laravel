<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h2 class="m-0 text-primary text-uppercase">{{__('Мехмонхона')}}</h2>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <a href="https://t.me/Farovon7777">Farovon</a>
                            </div>
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <a href="tel:+998905840073">+998905840073</a>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Hotelier</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{route('main')}}" class="nav-item nav-link active">{{__('Асосий')}}</a>
                                <a href="{{route('route', ['route'=> 'about'])}}" class="nav-item nav-link">{{__('Биз ҳақимизда')}}</a>
                                <a href="{{route('route', ['route'=> 'service'])}}" class="nav-item nav-link">{{__('Хизматлар')}}</a>
                                <a href="{{route('route', ['route'=> 'room'])}}" class="nav-item nav-link">{{__('Хоналар')}}</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('Саҳифалар')}}</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="booking.html" class="dropdown-item">{{__('Банд қилиш')}}</a>
                                        <a href="team.html" class="dropdown-item">{{__('Бизнинг жамоа')}}</a>
                                        <a href="{{route('clients.index')}}" class="dropdown-item">{{__('Мижозлар')}}</a>
                                    </div>
                                </div>
                                <a href="{{route('route', ['route'=> 'contact'])}}" class="nav-item nav-link">{{__('Боғланиш')}}</a>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle ps-0" data-bs-toggle="dropdown">
                                    <img src="storage/flags/{{$current_locale}}.png" style="width: 34px; height: 34px;" class="float: right;" />
                                </a>
                                <div class="dropdown-menu" style="min-width: auto;">
                                    <div class="d-flex flex-column gap-3 px-2 rounded-0 m-0">
                                        @foreach ($all_locales as $item)
                                        <a href="{{route('set.locale', ['locale' => $item])}}">
                                            <img class="dropdown-item" src="storage/flags/{{$item}}.png" style="width: 34px; height: 34px; padding: 0;" />
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->