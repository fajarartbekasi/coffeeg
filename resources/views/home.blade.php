@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 rounded-bottom">
                <div class="card border-top-0" style="margin-top: -24px;">
                    <div class="card-body">
                        <div class="pt-2 d-flex">
                            <div class="mr-auto">
                                <small>Who to follow</small>
                            </div>
                            <div class="text-info">
                                <small>Refresh</small>
                                <small>See All</small>
                            </div>
                        </div>

                        <div class="d-flex ">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/></svg>
                            </span>
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <small class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </small>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet..
                                    </span>
                                </small>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/></svg>
                            </span>
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <small class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </small>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet..
                                    </span>
                                </small>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/></svg>
                            </span>
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <small class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </small>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet..
                                    </span>
                                </small>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12" height="12"><path class="heroicon-ui" d="M19 10h2a1 1 0 0 1 0 2h-2v2a1 1 0 0 1-2 0v-2h-2a1 1 0 0 1 0-2h2V8a1 1 0 0 1 2 0v2zM9 12A5 5 0 1 1 9 2a5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm8 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h5a5 5 0 0 1 5 5v2z"/></svg>
                            </span>
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <small class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </small>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet..
                                    </span>
                                </small>
                            </div>
                        </div>

                        <div class="pt-2 mb-2 d-flex">
                            <div class="text-info mr-auto">
                                <a href="http://">
                                    <small>Popular Account</small>
                                </a>
                            </div>
                            <div class="text-info">
                                <a href="http://">
                                    <small>Find Friends</small>
                                </a>
                            </div>
                        </div>
                        <!-- tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link text-muted" data-toggle="tab" href="#trends">Trends</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-info" data-toggle="tab" href="#change">Change</a>
                            </li>
                        </ul>
                        <!-- tabs body -->
                        <div class="tab-content">
                            <div id="trends" class="container tab-pane "><br>
                                <h3>HOME</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div id="change" class="container tab-pane text-info active">
                                <br>
                                <h6>#Windows10Pro</h6>
                                <h6>#Iphone11</h6>
                                <h6>#MacBookPro</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="d-flex card-header border-0">
                        <div class="mr-auto">
                            <h6 class="text-muted">Tweet</h6>
                        </div>
                        <div>
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
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="50"
                                height="50"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h6 class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </h6>
                                    </div>

                                    <span class="text-muted mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/>
                                        </svg>
                                        <small>11</small>
                                    </span>
                                    <span class="text-muted mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M6 18.7V21a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H7.1A7 7 0 0 0 19 12a1 1 0 1 1 2 0 9 9 0 0 1-15 6.7zM18 5.3V3a1 1 0 0 1 2 0v5a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h2.9A7 7 0 0 0 5 12a1 1 0 1 1-2 0 9 9 0 0 1 15-6.7z"/>
                                        </svg>
                                        <small>55</small>
                                    </span>
                                    <span class="text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
                                        </svg>
                                        <small>55</small>
                                    </span>
                                    <span class="text-muted mr-2">
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
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="d-flex">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="50"
                                height="50"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h6 class="text-dark">Fajar
                                            <small class="text-muted">
                                                @fajar
                                            </small>
                                        </h6>
                                    </div>

                                    <span class="text-muted mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M5.41 16H18a2 2 0 0 0 2-2 1 1 0 0 1 2 0 4 4 0 0 1-4 4H5.41l2.3 2.3a1 1 0 0 1-1.42 1.4l-4-4a1 1 0 0 1 0-1.4l4-4a1 1 0 1 1 1.42 1.4L5.4 16zM6 8a2 2 0 0 0-2 2 1 1 0 0 1-2 0 4 4 0 0 1 4-4h12.59l-2.3-2.3a1 1 0 1 1 1.42-1.4l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.42-1.4L18.6 8H6z"/>
                                        </svg>
                                        <small>11</small>
                                    </span>
                                    <span class="text-muted mr-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M6 18.7V21a1 1 0 0 1-2 0v-5a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H7.1A7 7 0 0 0 19 12a1 1 0 1 1 2 0 9 9 0 0 1-15 6.7zM18 5.3V3a1 1 0 0 1 2 0v5a1 1 0 0 1-1 1h-5a1 1 0 0 1 0-2h2.9A7 7 0 0 0 5 12a1 1 0 1 1-2 0 9 9 0 0 1 15-6.7z"/>
                                        </svg>
                                        <small>55</small>
                                    </span>
                                    <span class="text-muted">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 24 24"
                                             width="12"
                                             height="12">
                                             <path fill="#6c757d" class="heroicon-ui" d="M6.1 21.98a1 1 0 0 1-1.45-1.06l1.03-6.03-4.38-4.26a1 1 0 0 1 .56-1.71l6.05-.88 2.7-5.48a1 1 0 0 1 1.8 0l2.7 5.48 6.06.88a1 1 0 0 1 .55 1.7l-4.38 4.27 1.04 6.03a1 1 0 0 1-1.46 1.06l-5.4-2.85-5.42 2.85zm4.95-4.87a1 1 0 0 1 .93 0l4.08 2.15-.78-4.55a1 1 0 0 1 .29-.88l3.3-3.22-4.56-.67a1 1 0 0 1-.76-.54l-2.04-4.14L9.47 9.4a1 1 0 0 1-.75.54l-4.57.67 3.3 3.22a1 1 0 0 1 .3.88l-.79 4.55 4.09-2.15z"/>
                                        </svg>
                                        <small>55</small>
                                    </span>
                                    <span class="text-muted mr-2">
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
                                    @dev,
                                    <span class="text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                                    </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 rounded-bottom">
                <div class="card border-top-0" style="margin-top: -24px;">
                    <div class="card-body">
                        <div class="pt-2">
                            <small>You're tweet activity</small>
                        </div>
                        <div class="pt-2">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet..
                                <p class="text-info">read more</p>
                            </p>
                        </div>
                        <div class="pt-2 mb-2">
                            <button type="submit" class="btn btn-info btn-block">
                                <span>
                                    <svg height="24"
                                         stroke="#1a0dab"
                                         viewBox="0 -61 512.00018 512"
                                         width="24"
                                         class="mr-2"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="m351.792969 175.644531c-15.101563-.722656-31.765625-5.746093-42.652344-10.269531-13.242187-31.445312-44.371094-53.578125-80.574219-53.578125-48.183594 0-87.378906 39.199219-87.378906 87.382813 0 2.820312-.066406 5.621093-.195312 8.386718-27.929688-14.90625-48.199219-33.054687-57.613282-51.769531-2.457031-4.878906-7.371094-7.796875-12.832031-7.578125-5.4375.203125-10.101563 3.449219-12.175781 8.476562-10.101563 24.484376-9.601563 46.175782 1.609375 65.851563-5.945313-1.789063-12.628907-4.726563-18.316407-8.785156-4.324218-3.089844-9.914062-3.40625-14.589843-.835938-4.667969 2.570313-7.382813 7.453125-7.09375 12.75 2.285156 41.3125 30.128906 64.851563 58.046875 78.121094-17.425782 7.074219-38.308594 11.019531-62.324219 11.75-6.542969.199219-12.109375 4.089844-14.527344 10.148437-2.410156 6.042969-1.054687 12.671876 3.539063 17.300782 4.214844 4.25 8.914062 8.355468 13.976562 12.210937 3.296875 2.507813 8 1.871094 10.511719-1.425781 2.507813-3.296875 1.871094-8-1.425781-10.511719-4.511719-3.433593-8.6875-7.078125-12.414063-10.835937-.15625-.15625-.519531-.523438-.257812-1.179688.273437-.691406.839843-.707031 1.054687-.714844 33.59375-1.023437 61.8125-8.03125 83.871094-20.824218 2.523438-1.464844 3.96875-4.265625 3.703125-7.171875-.265625-2.910157-2.195313-5.398438-4.945313-6.378907-39.453124-14.078124-60.851562-37.183593-63.640624-68.695312 13.488281 8.804688 31.957031 13.933594 42.320312 11.542969 2.574219-.59375 4.644531-2.496094 5.453125-5.011719.808594-2.511719.238281-5.265625-1.503906-7.25-16.027344-18.230469-19.292969-37.929688-10.183594-61.8125 9.113281 16.730469 29.144531 40.148438 73.132813 61.125 2.1875 1.042969 4.746093.964844 6.871093-.214844 2.117188-1.175781 3.539063-3.308594 3.808594-5.71875.757813-6.746094 1.140625-13.792968 1.140625-20.949218 0-39.910157 32.46875-72.382813 72.378906-72.382813 39.914063 0 72.382813 32.472656 72.382813 72.382813 0 4.035156-.117188 8.886718-.464844 14.34375-.007813.105468-.015625.210937-.019531.320312-1.332032 20.671875-5.949219 50.082031-19.9375 78.269531-22.078125 44.5-60.226563 71.226563-113.382813 79.441407-41.675781 6.4375-78.90625 2.585937-110.664062-11.449219-3.785157-1.675781-8.214844.039062-9.890625 3.828125-1.671875 3.789062.039062 8.214844 3.828125 9.890625 23.738281 10.492187 50.148437 15.753906 78.867187 15.753906 12.925782 0 26.320313-1.0625 40.148438-3.199219 116.675781-18.03125 140.996094-114.558594 145.546875-165.972656 17.097656-3.769531 33.550781-12.488281 44.898437-23.988281 3.375-3.417969 4.425782-8.53125 2.671875-13.019531-1.773437-4.550782-5.898437-7.519532-10.757812-7.753907zm-35.917969 29.082031c.050781-2.003906.074219-3.863281.074219-5.546874 0-5.402344-.496094-10.691407-1.441407-15.824219 9.109376 3 19.632813 5.601562 30.046876 6.75-7.925782 6.492187-18.121094 11.667969-28.679688 14.621093zm141.003906-109.941406h-65c-4.144531 0-7.5 3.359375-7.5 7.5s3.355469 7.5 7.5 7.5h65c4.140625 0 7.5-3.359375 7.5-7.5s-3.359375-7.5-7.5-7.5zm-210.734375 85.152344c0-2.585938 2.105469-4.691406 4.691407-4.691406 2.585937 0 4.6875 2.105468 4.6875 4.691406 0 4.140625 3.355468 7.5 7.5 7.5 4.140624 0 7.5-3.359375 7.5-7.5 0-10.855469-8.832032-19.6875-19.6875-19.6875-10.855469 0-19.691407 8.832031-19.691407 19.6875 0 4.140625 3.359375 7.5 7.5 7.5 4.144531 0 7.5-3.359375 7.5-7.5zm178.234375-179.9375c-23.285156 0-45.175781 8.953125-61.640625 25.207031-16.464843 16.257813-25.691406 38.035157-25.976562 61.3125-.152344 12.492188 2.269531 24.59375 7.203125 35.957031.265625.613282.332031 1.3125.199218 2.027344l-5.300781 28.144532c-1.074219 5.699218.730469 11.550781 4.835938 15.65625 4.101562 4.101562 9.953125 5.90625 15.652343 4.835937l28.144532-5.304687c.714844-.132813 1.414062-.0625 2.023437.199218 11.027344 4.789063 22.746094 7.210938 34.84375 7.210938.371094 0 .742188-.003906 1.113281-.007813 14.113282-.171875 27.535157-3.5625 39.882813-10.070312 3.664063-1.929688 5.070313-6.46875 3.140625-10.132813-1.933594-3.664062-6.46875-5.070312-10.132812-3.136718-10.230469 5.390624-21.359376 8.199218-33.074219 8.34375-10.382813.132812-20.386719-1.878907-29.800781-5.964844-3.371094-1.464844-7.09375-1.871094-10.773438-1.179688l-28.144531 5.300782c-1.148438.21875-1.917969-.347657-2.269531-.703126-.355469-.355468-.917969-1.125-.703126-2.273437l5.300782-28.144531c.691406-3.675782.285156-7.398438-1.179688-10.773438-4.085937-9.414062-6.09375-19.4375-5.964844-29.800781.238282-19.308594 7.882813-37.359375 21.519532-50.824219 13.640625-13.464844 31.789062-20.882812 51.101562-20.882812 40.042969 0 72.621094 32.578125 72.621094 72.625 0 15.761718-4.898438 30.722656-14.175781 43.265625-2.464844 3.332031-1.761719 8.027343 1.570312 10.488281 3.332031 2.464844 8.027344 1.757812 10.488281-1.570312 11.199219-15.144532 17.117188-33.1875 17.117188-52.183594 0-48.3125-39.304688-87.621094-87.621094-87.621094zm32.5 61.835938h-65c-4.144531 0-7.5 3.359374-7.5 7.5 0 4.144531 3.355469 7.5 7.5 7.5h65c4.140625 0 7.5-3.355469 7.5-7.5 0-4.140626-3.359375-7.5-7.5-7.5zm0 0"/>
                                    </svg>
                                    Tweet
                                </span>
                            </button>
                        </div>
                        <div class="pt-2">
                            <h6>Who To Follow</h6>
                        </div>
                        <div class="d-flex mb-2">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h6 class="text-dark">Fajar
                                            <span class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     stroke="#6cb2eb"
                                                     fill="#6cb2eb"
                                                     width="12"
                                                     height="12">
                                                     <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                                </svg>
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="ml-4">
                                        <button type="submit" class="btn btn-outline-info btn-sm">Follow</button>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @FajarDev
                                </small>
                            </div>
                        </div>
                         <div class="d-flex mb-2">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h6 class="text-dark">Fajar
                                            <span class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     stroke="#6cb2eb"
                                                     fill="#6cb2eb"
                                                     width="12"
                                                     height="12">
                                                     <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                                </svg>
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="ml-4">
                                        <button type="submit" class="btn btn-outline-info btn-sm">Follow</button>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @FajarDev
                                </small>
                            </div>
                        </div>
                         <div class="d-flex mb-2">
                            <img src="{{asset('logo/user.jpg')}}"
                                width="25"
                                height="25"
                                class="rounded-circle"
                                alt="" >
                            <div class="ml-3">
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <h6 class="text-dark">Fajar
                                            <span class="text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     viewBox="0 0 24 24"
                                                     stroke="#6cb2eb"
                                                     fill="#6cb2eb"
                                                     width="12"
                                                     height="12">
                                                     <path class="heroicon-ui" d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z"/>
                                                </svg>
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="ml-4">
                                        <button type="submit" class="btn btn-outline-info btn-sm">Follow</button>
                                    </div>
                                </div>

                                <small class="text-primary">
                                    @FajarDev
                                </small>
                            </div>
                        </div>

                        <div class="pt-2 mb-2">
                            <h6 class="text-info">
                                Show more
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
