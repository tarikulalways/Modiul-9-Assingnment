@extends('frontent.master')
@section('title', 'Home Page')
@section('content')
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Hello, my name</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 4px #ffffff;">Tarik Hasan</h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps
                        Developer</div>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="" class="btn btn-white mr-4">Download CV</a>

                        <a href="" class="btn btn-blue d-none d-sm-block">Play Video</a>
                    </div>
                </div>
                <div class="col-lg-6 px-8 pl-lg-0 pb-5 pb-lg-4 about-img">
                    <img class="img-fluid w-50 rounded-circle shadow-sm" src="{{ asset('frontent') }}/img/profile.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
