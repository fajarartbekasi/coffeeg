@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center">

    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow mb-3" style="margin-top:-150px;">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mx-auto">
                                <img src="{{asset('logo/user.jpg')}}" class="rounded-circle" width="100%" height="100%" alt="">

                            </div>
                        </div>
                        <div class="pt-3">
                            <div class="d-flex justify-content-center">
                                <h3>
                                    <p class="font-weight-bolder">Fajar Dev</p>
                                </h3>
                                <span class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         fill="#3490dc"
                                         viewBox="0 0 24 24"
                                         width="30"
                                         height="30">
                                         <path class="heroicon-ui"
                                               d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>

                                    </svg>
                                </span>
                            </div>
                            <div class="text-center">
                                <h5 class="text-muted">
                                    @fajardev
                                </h5>
                            </div>
                            <div>
                                <h3>
                                    <span class="font-weight-bolder">Web programmer, UI/UX</span>
                                </h3>
                                <h6 class="text-muted">@twitter</h6>

                                <div class="pt-3">
                                    <div class="mb-3 d-flex">
                                        <span class="mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path class="heroicon-ui" d="M5.64 16.36a9 9 0 1 1 12.72 0l-5.65 5.66a1 1 0 0 1-1.42 0l-5.65-5.66zm11.31-1.41a7 7 0 1 0-9.9 0L12 19.9l4.95-4.95zM12 14a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                                            </svg>
                                        </span>
                                        <h6 class="pt-1">Bekasi</h6>
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 3.38V6H4v1.38l8 4 8-4zm0 2.24l-7.55 3.77a1 1 0 0 1-.9 0L4 9.62V18h16V9.62z"/></svg></span>
                                        <h6 class="text-info pt-1">fajarbekasieditting@gmail.com</h6>
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2h2V3a1 1 0 1 1 2 0v1h6V3a1 1 0 0 1 2 0v1zm-2 2H9v1a1 1 0 1 1-2 0V6H5v4h14V6h-2v1a1 1 0 0 1-2 0V6zm4 6H5v8h14v-8z"/></svg></span>
                                        <h6 class="pt-1">
                                            November 29
                                        </h6>
                                    </div>
                                    <div class="mb-3 d-flex">
                                        <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm16 8.59V6H4v6.59l4.3-4.3a1 1 0 0 1 1.4 0l5.3 5.3 2.3-2.3a1 1 0 0 1 1.4 0l1.3 1.3zm0 2.82l-2-2-2.3 2.3a1 1 0 0 1-1.4 0L9 10.4l-5 5V18h16v-2.59zM15 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></svg></span>
                                        <h6 class="pt-1 text-info">
                                            240 Photos and Videos
                                        </h6>
                                    </div>
                                    <div class="d-flex">
                                        <span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/></svg></span>
                                        <h6 class="pt-1 text-info">204 Followers you know</h6>
                                    </div>




                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="margin-top:-31px;">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="" class="nav-link active">Tweets & Replies</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://" class="nav-link">Tweets</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://" class="nav-link">Media</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <button type="submit" class="btn btn-outline-info">follow</button>
                        </ul>
                    </div>
                </nav>

                <div class="card border-0 shadow pt-3 mb-3">
                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="15%"
                                height="15%"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h3 class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </h3>
                                    </div>


                                    <h6 class="pt-1 mr-2">32 minuts ago.</h6>
                                    <span class="text-muted">
                                        <svg fill="none"
                                            height="12"
                                            stroke="#6c757d"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            viewBox="0 0 24 24"
                                            width="12"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="12" cy="12" r="2"/>
                                            <circle cx="12" cy="4" r="2"/>
                                            <circle cx="12" cy="20" r="2"/>
                                        </svg>
                                    </span>
                                </div>

                                <h6 class="text-primary">
                                    <p class="text-muted">
                                        How to create a great ui/ux design and implements Graphics design to code html and css.
                                    </p>
                                </h6>
                                <div class="d-flex">
                                    <div class="mr-2">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M6 14H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h12a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v13a1 1 0 0 1-1.7.7L16.58 18H8a2 2 0 0 1-2-2v-2zm0-2V8c0-1.1.9-2 2-2h8V4H4v8h2zm14-4H8v8h9a1 1 0 0 1 .7.3l2.3 2.29V8z"/></svg></span>
                                        <span>89</span>
                                    </div>
                                    <div class="mr-2">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" class="heroicon-ui" d="M6 18.7V21a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H7.1A7 7 0 0 0 19 12a1 1 0 1 1 2 0 9 9 0 0 1-15 6.7zM18 5.3V3a1 1 0 0 1 2 0v5a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h2.9A7 7 0 0 0 5 12a1 1 0 1 1-2 0 9 9 0 0 1 15-6.7z"/></svg></span>
                                        <span>89</span>
                                    </div>
                                    <div>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" class="heroicon-ui" <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"/></svg></svg></span>
                                        <span>89</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection